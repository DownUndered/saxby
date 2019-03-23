<?php
/*
* @version 2.1
* @package RealEstateManager - property slideShow
* @copyright 2012 OrdaSoft
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author 2012 Andrey Kvasnekskiy (akbet@ordasoft.com )
* @description RealEstateManager - property slideShow for Real Estate Manager Component
*/

// no direct access
defined('_JEXEC') or die ('Restricted access');
$mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;
if (!array_key_exists('realestatemanager_configuration', $GLOBALS)) {
    require_once ($mosConfig_absolute_path . "/administrator/components/com_realestatemanager/realestatemanager.class.conf.php");
    $GLOBALS['realestatemanager_configuration'] = $realestatemanager_configuration;
} else
    global $realestatemanager_configuration;

require_once ($mosConfig_absolute_path . "/components/com_realestatemanager/helpers/route.php");

class modRemSlideShowHelper
{

  static function getWhereUsergroupsString( $table_alias ) {
    global $my;

    if ( isset($my->id) AND $my->id != 0 ) {

      $usergroups_sh = modRemSlideShowHelper::getGroupsByUser ($my->id,'');

      //$usergroups_sh = '-2'.$usergroups_sh;

    } else {
       $usergroups_sh = array ();
    }
    $usergroups_sh[] = -2;


    $s = '';
    for ($i=0; $i<count($usergroups_sh); $i++) {
      $g = $usergroups_sh[$i];
      $s .= " $table_alias.params LIKE '%,{$g}' or $table_alias.params = '{$g}' or $table_alias.params LIKE '{$g},%' or $table_alias.params LIKE '%,{$g},%' ";
      if ( ($i+1)<count($usergroups_sh) )
        $s .= ' or ';
    }
    return $s;
  }

 static function getGroupsByUser ( $uid, $recurse ) {
       $database = JFactory::getDBO() ;


      $usergroups = array ();

      if ( $recurse == 'RECURSE' ) {
      // [1]: Recurse getting the usergroups
        $id_group = array ();
        $q1 = "SELECT group_id FROM `#__user_usergroup_map` WHERE user_id={$uid}";
        $database->setQuery($q1);
        $rows1 = $database->loadObjectList();
        foreach ($rows1 as $v) {
          $id_group[] = $v->group_id;
          }
        for ($k=0; $k<count($id_group); $k++) {
          $q = "SELECT g2.id FROM `#__usergroups` g1 LEFT JOIN `#__usergroups` g2 ON g1.lft > g2.lft AND g1.lft < g2.rgt WHERE g1.id={$id_group[$k]} ORDER BY g2.lft";
          $database->setQuery($q);
          $rows = $database->loadObjectList();
          foreach ($rows as $r) {
            $usergroups[] = $r->id;
            }
          }
        $usergroups = array_unique($usergroups);
        }
      /* else {
      // [2]: Non-Recurse getting usergroups
        $q = "SELECT * FROM #__user_usergroup_map WHERE user_id = {$uid}";
        $database->setQuery($q);
        $rows = $database->loadObjectList();
   print_r("!!!!! ".$rows." !!!!!!");

   foreach ($rows as $k => $v) {
          $usergroups[] = $rows[$k]->group_id;
          }
        /* }

        // If user is unregistered, Joomla contains it into standard group (Public by default).
        // So, groupId for anonymous users is 1 (by default).
        // But custom algorythm doesnt do this: if user is not autorised, he will NOT connected to any group.
        // And groupId will be 0.
        if ( count($rows) == 0 )  $usergroups[] = -2;
      */
      return $usergroups;
    }  // --

  static function sefRelToAbs( $value ) {
    //Need check!!!

    // Replace all &amp; with & as the router doesn't understand &amp;
    $url = str_replace('&amp;', '&', $value);
    if(substr(strtolower($url),0,9) != "index.php") return $url;
    $uri    = JURI::getInstance();
    $prefix = $uri->toString(array('scheme', 'host', 'port'));
    return $prefix.JRoute::_($url);
  }

  static function getImagesFromRemSlideShow($params, $langContent) {

    if(!is_numeric($max = $params->get('count_house'))) $max = 20;
    if(!is_numeric($limit_title = $params->get('limit_title'))) $limit_title = 15;

    $cat_id = trim($params->get('cat_id') );
    if($cat_id != "" ) $cat_id = " and c.id in ( ". $cat_id ." ) " ;

    $house_id = trim($params->get('house_id') );
    if($house_id != "" ) $house_id = " and h.id in ( ". $house_id ." ) " ;

    // build query to get slides
    $db = JFactory::getDBO();

    $s=modRemSlideShowHelper::GetWhereUserGroupsString("c");

    $temp_sort=$params->get('sort_by');

   switch($temp_sort)
    {
      case 4 : $sql_sort_top = ' CAST( h.hits AS SIGNED) ASC ' ; break;

      case 3 : $sql_sort_top = ' h.htitle ASC ' ; break;

      case 2 : $sql_sort_top = ' CAST( h.price AS SIGNED) ASC '; break;

      case 1 : $sql_sort_top = ' h.date DESC '; break;

      case 0 : $sql_sort_top = ' RAND() '; break;
    }

    if (isset($langContent)){
        $lang = $langContent;
        $query = "SELECT lang_code FROM #__languages WHERE sef = '$lang'";
        $db->setQuery($query);
        $lang = $db->loadResult();
        $lang = " and (h.language like 'all' or h.language like '' or h.language like '*' or h.language is null or h.language like '$lang')
                AND (c.language like 'all' or c.language like '' or c.language like '*' or c.language is null or c.language like '$lang') ";
    }else{
        $lang = "";
    }

    $selectstring = "SELECT h.htitle AS title,h.id,h.image_link as src, h.description ,h.hits,h.price,h.priceunit,h.hlocation, h.hcountry, h.hregion, h.hcity, h.date,hc.idcat
      \nFROM #__rem_houses AS h
      \nLEFT JOIN #__rem_categories AS hc ON hc.iditem=h.id
      \nLEFT JOIN #__rem_main_categories AS c ON c.id=hc.idcat
      \nWHERE ($s) $lang and h.published=1 and h.approved=1 and c.published = 1 ".
      $cat_id . $house_id . " ORDER BY ".$sql_sort_top." LIMIT 0, $max;";
    $db->setQuery($selectstring);
    $slides= $db->loadObjectList();


    foreach($slides as $slide){
      $slide->address = modRemSlideShowHelper::getSlideAddress($slide,$params->get('limit_address'));
      $slide->price = $slide->price;
      $slide->priceunit = $slide->priceunit;
      $slide->image = modRemSlideShowHelper::getSlideImage($slide,$params);
      $slide->link = modRemSlideShowHelper::getSlideLink($slide,$params);
      $slide->description = modRemSlideShowHelper::getSlideDescription($slide, $params->get('limit_desc'));
      if(strlen($slide->title)>$limit_title)
           $slide->title = substr($slide->title, 0, $limit_title)."..";
      $slide->alt = $slide->title;
      $slide->target = modRemSlideShowHelper::getSlideTarget($slide->link);
    }


    return $slides;
    }

  // global $realestatemanager_configuration;

  static function getSlideImage($slide,$params) {
            global $realestatemanager_configuration;

    $image_source_type = $params->get('image_source_type');

  //     echo $image_source_type."<br>";
  //
  //     echo  $realestatemanager_configuration['fotogallery']['width'];

      switch ($image_source_type) {
          case "0": $img_height = $realestatemanager_configuration['fotomain']['high'];
                    $img_width = $realestatemanager_configuration['fotomain']['width'];
              break;
          case "1": $img_height = $realestatemanager_configuration['foto']['high'];
                    $img_width = $realestatemanager_configuration['foto']['width'];
              break;
          case "2": $img_height = $realestatemanager_configuration['fotogallery']['high'];
                    $img_width = $realestatemanager_configuration['fotogallery']['width'];
              break;
          default:$img_height = $realestatemanager_configuration['fotomain']['high'];
                  $img_width = $realestatemanager_configuration['fotomain']['width'];
              break;
      }

     $size = "_" . $img_height . "_" . $img_width;

    $mosConfig_absolute_path=JPATH_BASE;
    $mosConfig_live_site=JURI::base(true);

    $imageURL = $slide->src ;
    if($imageURL!=''){
        $file_pth= pathinfo($imageURL);
        $file_type=".".$file_pth['extension'];
        if(array_key_exists  ( 'filename' , $file_pth  ) ) $file_name=$file_pth['filename'];
        else $file_name = substr($imageURL, 0,strlen($imageURL)-strlen($file_pth['extension'] ) -1 );

        $file1=$mosConfig_absolute_path . '/components/com_realestatemanager/photos/'. $file_name . $file_type;

        $img1= './components/com_realestatemanager/photos/'. $file_name . $file_type;


        if($image_source_type == 0 ) {
          if(file_exists($file1)) return $img1;
        }

        $file2=$mosConfig_absolute_path . '/components/com_realestatemanager/photos/'. $file_name . $size . '_1_' . $file_type;

        $img2= './components/com_realestatemanager/photos/'.  $file_name . $size . '_1_' . $file_type;


        if($image_source_type == 1) {
          if(file_exists($file2)) return $img2;
          else return $img1;
        }

        if($image_source_type == 2 ) {
          $file3=$mosConfig_absolute_path . '/components/com_realestatemanager/photos/'. $file_name . $size .'_2_' . $file_type;

          $img3= './components/com_realestatemanager/photos/'.  $file_name . $size . '_2_' . $file_type;

          if( file_exists($file3) ) return $img3;
          else if( file_exists($file2) ) return $img2;
          else return $img1;
        }

    }
    else $imageURL = "./components/com_realestatemanager/images/no-img_eng_big.gif";

    return $imageURL ;
  }

  static function getSlideLink($slide,$params) {
    $link = '';
    $db = JFactory::getDBO();
    $app    = JFactory::getApplication();
    $menus    = $app->getMenu('site');
    $active = $menus->getActive();
    if(isset($active) && isset($link[$active->language])){
      $link =  RealestatemanagerHelperRoute::getRemAssocPropertyRoute($slide->id);
      $link = $link[$active->language];
    }else{
      if( $params->get('ItemId', '') != "" ) {
        $ItemId_tmp=$params->get('ItemId', '');
      } else {
        $selectstring = "SELECT id  FROM #__menu WHERE menutype like '%menu%' AND link LIKE '%option=com_realestatemanager%' AND params LIKE '%back_button%' ";
        $db->setQuery($selectstring);
        $ItemId_tmp_from_db = $db->loadResult();
        $ItemId_tmp=$ItemId_tmp_from_db;
      }

      $link = 'index.php?option=com_realestatemanager&amp;task=view&amp;id='.
      $slide->id.'&amp;catid='.$slide->idcat.'&amp;Itemid='.$ItemId_tmp;
    }
  
    return modRemSlideShowHelper::sefRelToAbs($link);
  }

  static function getSlideDescription($slide, $limit) {

    $desc = strip_tags($slide->description);
    if($limit && $limit < strlen($desc)) {
      $limit = strpos($desc, ' ', $limit);
      $desc = substr($desc, 0, $limit);
      if(preg_match('/[A-Za-z0-9]$/', $desc)) $desc.=' ...';
      $desc = nl2br($desc);
    } else { // no limit or limit greater than description
      $desc = $slide->description;
    }

    return $desc;
  }

  static function getSlideAddress($slide, $limit) {

    $address = "";

    $tmp = trim(strip_tags($slide->hcountry)) ;
    if($tmp != "" ) $address = $tmp;

    $tmp = trim(strip_tags($slide->hregion)) ;
    if($tmp != "" &&  $address != "" ) $address .= ", " . $tmp;
    else if( $tmp != "" ) $address =  $tmp;

    $tmp = trim(strip_tags($slide->hcity)) ;
    if($tmp != "" &&  $address != "" ) $address .= ", " . $tmp;
    else if( $tmp != "" ) $address =  $tmp;

    $tmp = trim(strip_tags($slide->hlocation)) ;
    if($tmp != "" &&  $address != "" ) $address .= ", " . $tmp;
    else if( $tmp != "" ) $address =  $tmp;

    if($limit && $limit < strlen($address)) {
      $limit = strpos($address, ' ', $limit);
      $address = substr($address, 0, $limit);
      if(preg_match('/[A-Za-z0-9]$/', $address)) $address.=' ...';
      $address = nl2br($address);
    }

    return $address;
  }

  static function getAnimationOptions($params) {
    $effect = $params->get('effect');
    $effect_type = $params->get('effect_type');
    if(!is_numeric($duration = $params->get('duration'))) $duration = 0;
    if(!is_numeric($delay = $params->get('delay'))) $delay = 3000;
    $autoplay = $params->get('autoplay');
    if($params->get('slider_type')==2 && !$duration) {
      $transition = 'linear';
      $duration = 600;
    } else switch($effect){
      case 'Linear':
        $transition = 'linear';
        if(!$duration) $duration = 600;
        break;
      case 'Circ':
      case 'Expo':
      case 'Back':
        if(!$effect_type) $transition = $effect.'.easeInOut';
        else $transition = $effect.'.'.$effect_type;
        if(!$duration) $duration = 1000;
        break;
      case 'Bounce':
        if(!$effect_type) $transition = $effect.'.easeOut';
        else $transition = $effect.'.'.$effect_type;
        if(!$duration) $duration = 1200;
        break;
      case 'Elastic':
        if(!$effect_type) $transition = $effect.'.easeOut';
        else $transition = $effect.'.'.$effect_type;
        if(!$duration) $duration = 1500;
        break;
      case 'Cubic':
      default:
        if(!$effect_type) $transition = 'Cubic.easeInOut';
        else $transition = 'Cubic.'.$effect_type;
        if(!$duration) $duration = 800;
    }
    $delay = $delay + $duration;
    $options = "{auto: $autoplay, transition: Fx.Transitions.$transition, duration: $duration, delay: $delay}";
    return $options;
  }

  static function getSlideTarget($link) {

    if(preg_match("/^http/",$link) && !preg_match("/^".str_replace(array('/','.','-'), array('\/','\.','\-'),JURI::base())."/",$link)) {
      $target = '_blank';
    } else {
      $target = '_self';
    }

    return $target;
  }

  static function getNavigation($params, $mid) {

    $prev = $params->get('left_arrow');
    $next = $params->get('right_arrow');
    $play = $params->get('play_button');
    $pause = $params->get('pause_button');
    $mod_path = "mod_remslideshow";

    if($params->get('slider_type')==1) {
      if(empty($prev) || !file_exists(JPATH_ROOT.DS.$prev)) $prev = JURI::base(). '/modules/' . $mod_path . '/assets/up.png';
      if(empty($next) || !file_exists(JPATH_ROOT.DS.$next)) $next = JURI::base(). '/modules/' . $mod_path . '/assets/down.png';
    } else {
      if(empty($prev) || !file_exists(JPATH_ROOT.DS.$prev)) $prev = JURI::base(). '/modules/' . $mod_path . '/assets/prev.png';
      if(empty($next) || !file_exists(JPATH_ROOT.DS.$next)) $next = JURI::base(). '/modules/' . $mod_path . '/assets/next.png';
    }
    if(empty($play) || !file_exists(JPATH_ROOT.DS.$play)) $play = JURI::base(). '/modules/' . $mod_path . '/assets/play.png';
    if(empty($pause) || !file_exists(JPATH_ROOT.DS.$pause)) $pause = JURI::base(). '/modules/' . $mod_path . '/assets/pause.png';

    $navi = (object) array('prev'=>$prev,'next'=>$next,'play'=>$play,'pause'=>$pause);

    return $navi;
  }

  static function getStyleSheet($params, $mid) {
                ?> <noscript>Javascript is required to use Real Estate Manager <a href="http://ordasoft.com/Real-Estate-Manager/realestatemanager-basic
                -and-pro-feature-comparison.html">Real estate manager Joomla extension for Real Estate Brokers, Real Estate Companies and other Enterprises selling Real estate
                </a>, <a href="http://ordasoft.com/Real-Estate-Manager/realestatemanager-basic-and-pro-feature-comparison.html">Real Estate Manager create own real estate web
    portal for sell, rent,  buy real estate and property</a></noscript>
    <?php if(!is_numeric($slide_width = $params->get('image_width'))) $slide_width = 240;
    if(!is_numeric($slide_height = $params->get('image_height'))) $slide_height = 160;
    if(!is_numeric($max = $params->get('count_house'))) $max = 20;
    if(!is_numeric($count = $params->get('visible_images'))) $count = 2;
    if(!is_numeric($spacing = $params->get('space_between_images'))) $spacing = 0;
    if($count<1) $count = 1;
    if($count>$max) $count = $max;
    if(!is_numeric($desc_width = $params->get('desc_width')) || $desc_width > $slide_width) $desc_width = $slide_width;
    if(!is_numeric($desc_bottom = $params->get('desc_bottom'))) $desc_bottom = 0;
    if(!is_numeric($desc_left = $params->get('desc_horizontal'))) $desc_left = 0;
    if(!is_numeric($arrows_top = $params->get('arrows_top'))) $arrows_top = 100;
    if(!is_numeric($arrows_horizontal = $params->get('arrows_horizontal'))) $arrows_horizontal = 5;
    if(!$params->get('show_buttons')) $play_pause = 'top: -99999px;'; else $play_pause = '';
    if(!$params->get('show_arrows')) $arrows = 'top: -99999px;'; else $arrows = '';
    if(!$params->get('show_custom_nav')) $custom_nav = 'display: none;'; else $custom_nav = '';

    switch($params->get('slider_type')){
      case 2:
        $slider_width = $slide_width;
        $slider_height = $slide_height;
        $image_width = $slide_width.'px';
        $image_height = 'auto';
        $padding_right = 0;
        $padding_bottom = 0;
        break;
      case 1:
        $slider_width = $slide_width;
        $slider_height = $slide_height * $count + $spacing * ($count - 1);
        $image_width = 'auto';
        $image_height = $slide_height.'px';
        $padding_right = 0;
        $padding_bottom = $spacing;
        break;
      case 0:
      default:
        $slider_width = $slide_width * $count + $spacing * ($count - 1);
        $slider_height = $slide_height;
        $image_width = $slide_width.'px';
        $image_height = '100%';
        $padding_right = $spacing;
        $padding_bottom = 0;
        break;
    }

    if($params->get('fit_to')==1) {
      $image_width = $slide_width.'px';
      $image_height = 'auto';
    } else if($params->get('fit_to')==2) {
      $image_width = 'auto';
      $image_height = $slide_height.'px';
    }

    $css = '
    /* Styles for REM Image Slider with module id '.$mid.' */
    #remslideshow-loader'.$mid.' {
      margin: 0 auto;
      position: relative;
      height: '.$slider_height.'px;
      width: '.$slider_width.'px;
    }
    #remslideshow'.$mid.' {
      margin: 0 auto;
      position: relative;
      height: '.$slider_height.'px;
      width: '.$slider_width.'px;
      display: none;
    }
    #slider-container'.$mid.' {
      position: absolute;
      overflow:hidden;
      left: 0;
      top: 0;
      height: '.$slider_height.'px;
      width: '.$slider_width.'px;
    }
    #remslideshow'.$mid.' ul#slider'.$mid.' {
      margin: 0 !important;
      padding: 0 !important;
      border: 0 !important;
    }
    #remslideshow'.$mid.' ul#slider'.$mid.' li {
      list-style: none outside !important;
      float: left;
      margin: 0 !important;
      border: 0 !important;
      padding: 0 '.$padding_right.'px '.$padding_bottom.'px 0 !important;
      position: relative;
      height: '.$slide_height.'px;
      width: '.$slide_width.'px;
      background: none;
      overflow: hidden;
    }
    #slider'.$mid.' li img {
      width: '.$image_width.';
      height: '.$image_height.';
      border: 0 !important;
      margin: 0 !important;
    }
    #slider'.$mid.' li a img, #slider'.$mid.' li a:hover img {
      border: 0 !important;
    }

    /* Slide description area */
    #slider'.$mid.' .slide-desc {
      position: absolute;
      bottom: '.($desc_bottom + $padding_bottom).'px;
      left: '.$desc_left.'px;
      width: '.$desc_width.'px;
    }
    #slider'.$mid.' .slide-desc-in {
      position: relative;
    }
    #slider'.$mid.' .slide-desc-bg {
      position:absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    #slider'.$mid.' .slide-desc-text {
      position: relative;
    }
    #slider'.$mid.' .slide-desc-text h3 {
      display: block !important;
    }

    /* Navigation buttons */
    #navigation'.$mid.' {
      position: relative;
      top: '.$arrows_top.'px;
      margin: 0 '.$arrows_horizontal.'px;
      text-align: center !important;
    }
    #prev'.$mid.' {
      cursor: pointer;
      display: block;
      position: absolute;
      left: 0;
      '.$arrows.'
    }
    #next'.$mid.' {
      cursor: pointer;
      display: block;
      position: absolute;
      right: 0;
      '.$arrows.'
    }
    #play'.$mid.',
    #pause'.$mid.' {
      cursor: pointer;
      display: block;
      position: absolute;
      left: 47%;
      '.$play_pause.'
    }
    #cust-navigation'.$mid.' {
      position: absolute;
      top: 10px;
      right: 10px;
      z-index: 15;
      '.$custom_nav.'
    }
    ';

    return $css;
  }

}
