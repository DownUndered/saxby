<?php
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Free
 *
 **/

if(version_compare(JVERSION, "3.0.0","lt"))
JHTML::_('behavior.mootools');
else
JHTML::_('behavior.framework', true);

if (!array_key_exists('realestatemanager_configuration', $GLOBALS) || 
      array_key_exists('realestatemanager_configuration', $GLOBALS) 
      && !count($GLOBALS['realestatemanager_configuration'])) {
    require_once (JPATH_BASE .
     "/administrator/components/com_realestatemanager/realestatemanager.class.conf.php");
    $GLOBALS['realestatemanager_configuration'] = $realestatemanager_configuration;
} else
    global $realestatemanager_configuration;

$pr = rand();
?>
<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);


$url = JURI::base();
$mosConfig_live_site = $GLOBALS['mosConfig_live_site'] = substr_replace($url, '', -1, 1);
$mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;

if( !function_exists( 'sefreltoabs')) {
  function sefRelToAbs( $value ) {


    // Replace all &amp; with & as the router doesn't understand &amp;
    $url = str_replace('&amp;', '&', $value);//replace chars &amp; on & in
    if(substr(strtolower($url),0,9) != "index.php") return $url;//cheking correct url

    $uri    = JURI::getInstance();
   $prefix = $uri->toString(array('scheme', 'host', 'port'));
    return $prefix.JRoute::_($url);
  }
}
$doc = JFactory::getDocument();
$database = JFactory::getDBO();



// load language
  $languagelocale = "";
  $query = "SELECT l.title, l.lang_code, l.sef "
          . "FROM #__rem_const_languages as cl "
          . "LEFT JOIN #__rem_languages AS l ON cl.fk_languagesid=l.id "
          . "LEFT JOIN #__rem_const AS c ON cl.fk_constid=c.id "
          . "GROUP BY  l.title";
  $database->setQuery($query);
  $languages = $database->loadObjectList();
  
  $lang = JFactory::getLanguage();
  foreach ($languages as $language) {
      if ($lang->getTag() == $language->lang_code) {
          $mosConfig_lang = $language->lang_code;
          $languagelocale = $language->lang_code;
          break;
      }
  }
  
  if ($languagelocale == '') {
    foreach ($lang->getLocale() as $locale) {
        foreach ($languages as $language) {
            if (strtolower($locale) == strtolower($language->title) 
                || strtolower($locale) == strtolower($language->lang_code) 
                || strtolower($locale) == strtolower($language->sef) ) {
                $mosConfig_lang = $locale;
                $languagelocale = $language->lang_code;
                break;
            }
        }
    } 
  }
  
  
  if (isset($_REQUEST['option']) && $_REQUEST['option'] == 'com_installer')
      $languagelocale = "en-GB";
  
  if ($languagelocale == '')
      $languagelocale = "en-GB";
   
  
  $query = "SELECT c.const, cl.value_const ";
  $query .= "FROM #__rem_const_languages as cl ";
  $query .= "LEFT JOIN #__rem_languages AS l ON cl.fk_languagesid=l.id ";
  $query .= "LEFT JOIN #__rem_const AS c ON cl.fk_constid=c.id ";
  $query .= "WHERE l.lang_code = '$languagelocale'";

  $database->setQuery($query);
  $langConst = $database->loadObjectList();

        
  foreach ($langConst as $item) {
      defined($item->const) or define($item->const, $item->value_const);
  }

  $query = "SELECT l.lang_code "
          . "FROM #__languages as l " ;
  $database->setQuery($query);
  $languages = $database->loadObjectList();

 global $langContent;
 foreach ($lang->getLocale() as $locale) {

      foreach ($languages as $language) {


          if (strtolower($locale) == strtolower($language->lang_code)
              || strtolower(str_replace(array('_','-'), '', $locale)) 
              == strtolower((str_replace(array('_','-'), '', $language->lang_code)))
              
              ) {

              $langContent = $language->lang_code;


              break;
          }
      }
 }
 

if (isset($realestatemanager_configuration['api_key']) && $realestatemanager_configuration['api_key']) {
  $api_key = "key=" . $realestatemanager_configuration['api_key'];
} else {
  $api_key = JFactory::getApplication()->enqueueMessage("<a target='_blank' href='//developers.google.com/maps/documentation/geocoding/get-api-key'>" . _REALESTATE_MANAGER_GOOGLEMAP_API_KEY_LINK_MESSAGE . "</a>", _REALESTATE_MANAGER_GOOGLEMAP_API_KEY_ERROR);
}
$doc->addScript("//maps.googleapis.com/maps/api/js?$api_key");

//Common parameters
//Individual parameters
$count_estates = intval($params->def('estates', 0));
$cat_id = $params->get('cat_id');
$estate_id = $params->get('estate_id');
$new_target = $params->def('new_target', 1);
if($params->def('new_target', 1)){
  $new_target = '_blank';
}else{
  $new_target = '_self';
}
$ItemId_tmp_from_params = $params->get('ItemId');
$moduleclass_sfx = $params->get('moduleclass_sfx');
$path = $mosConfig_absolute_path.'/components/com_realestatemanager/functions.php';
if (!file_exists($path)){
    echo "To display the featured house You have to install RealEstateManager first<br />"; exit;
} else{
    require_once($path);
}


$database->SetQuery("SELECT id  FROM #__menu WHERE menutype like '%menu%' AND link LIKE " . 
  " '%option=com_realestatemanager%' AND params LIKE '%back_button%' ");
$Itemid_from_db = $database->loadResult();
if ($ItemId_tmp_from_params!=''){
    $Itemid = $ItemId_tmp_from_params;
} else{
    $Itemid = $Itemid_from_db;
}



if ( !function_exists('getWhereUsergroupsString')) {
  function getWhereUsergroupsString( $table_alias ) {
    global $my;

    $usergroups_sh = array ();
    if ( isset($my->id) AND $my->id != 0 ){
         $usergroups_sh[] = max($my->groups);
    }
    $usergroups_sh[] = -2;


    $s = '';
    for ($i=0; $i<count($usergroups_sh); $i++) {
      $g = $usergroups_sh[$i];
      $s .= " $table_alias.params LIKE '%,{$g}' or $table_alias.params = '{$g}' or $table_alias.params LIKE
        '{$g},%' or $table_alias.params LIKE '%,{$g},%' ";
      if ( ($i+1)<count($usergroups_sh) )
        $s .= ' or ';
    }
    return $s;
  }
}

$s=GetWhereUserGroupsString("c");

   $query = "SELECT language FROM #__modules WHERE id = '$module->id'";
   $database->setQuery($query);
   $langmodule = $database->loadResult();

  $sql_published = " AND h.published=1";
  $sql_approved = " AND h.approved=1";

if ($cat_id != null && $estate_id != null)
echo ('<font color="#CC0000">You input IDs of categories and estates together! Correct this mistake.</font>');
else
{
   if($estate_id != null) $sql_where = " AND h.id IN(".$estate_id.")";
   if($cat_id != null) $sql_where = " AND c.id IN(".$cat_id.")";
   if($cat_id == null && $estate_id == null) $sql_where = "";

if (isset($langContent)){
    $lang = $langContent;
    // $query = "SELECT lang_code FROM #__languages WHERE sef = '$lang'";
    // $database->setQuery($query);
    // $lang = $database->loadResult();
    $lang = " and (h.language like 'all' or h.language like '' or h.language like '*' or h.language is null
            or h.language like '$lang')
            AND (c.language like 'all' or c.language like '' or c.language like '*' or c.language is null
            or c.language like '$lang') ";
}else{
    $lang = "";
}

   if($langmodule != "" && $langmodule != "*"){
            $selectstring = "SELECT h.htitle,h.id,h.houseid,h.hlatitude,h.hlongitude,hc.idcat,h.property_type,h.image_link,h.price,h.priceunit
                             \nFROM #__rem_houses AS h
                             \nLEFT JOIN #__rem_categories AS hc ON hc.iditem=h.id
                             \nLEFT JOIN #__rem_main_categories AS c ON c.id=hc.idcat
                             \nWHERE ($s) $lang AND h.language = '".$langmodule."' AND h.hlatitude IS NOT
                               NULL".$sql_where.$sql_published.$sql_approved.
                            "\nLIMIT ".$count_estates;
   }
   else{
            $selectstring = "SELECT h.htitle,h.id,h.houseid,h.hlatitude,h.hlongitude,hc.idcat,h.property_type,h.image_link,h.price,h.priceunit
                             \nFROM #__rem_houses AS h
                             \nLEFT JOIN #__rem_categories AS hc ON hc.iditem=h.id
                             \nLEFT JOIN #__rem_main_categories AS c ON c.id=hc.idcat
                             \nWHERE ($s) $lang AND h.hlatitude IS NOT NULL".$sql_where.$sql_published.
                              $sql_approved.
                            "\nLIMIT ".$count_estates;
   }
            $database->setQuery($selectstring);
            $rows= $database->loadObjectList();
}
?>
<div class="rm_map realestatemanager_<?php if($moduleclass_sfx!='') echo $moduleclass_sfx; ?>">

<noscript>Javascript is required to use Real Estate Manager <a href="http://ordasoft.com/Real-Estate-Manager/realestatemanager-basic-and-pro-feature-comparison.html">Real estate manager Joomla extension for Real Estate Brokers, Real Estate Companies and other Enterprises selling Real estate
</a>, <a href="http://ordasoft.com/Real-Estate-Manager/realestatemanager-basic-and-pro-feature-comparison.html">Real Estate Manager create own real estate web portal for sell, rent,  buy real estate and property</a></noscript>

<script type="text/javascript">
    function remFireEvent(el,event) {

        if ("createEvent" in document) {
            el.click();
            var evt = document.createEvent("HTMLEvents");
            evt.initEvent(event, true, true);// event type,bubbling,cancelable
            return el.dispatchEvent(evt);
        }
        else{
          // dispatch for IE
          var evt = document.createEventObject();
          return el.fireEvent("on"+event,evt);              
       }
    }    
    
    function remOpenItem() {
        var tmpLinks=document.getElementsByTagName('a');
        
        for(var i=0;i<tmpLinks.length;i++){
          if(tmpLinks[i].name=='rem_link_item'){
            setTimeout(function(){remFireEvent(tmpLinks[i],'click')},50);
            return ;            
          }          
        }
    }    
      
window.addEvent('domready', function() {
    var map;
    var marker = new Array();
    var myOptions = {
       zoom: 0,
       center: new google.maps.LatLng(0, 0),
      <?php if ($params->get('menu_map') == 0) echo "mapTypeControl: false,"; else echo "mapTypeControl: true,";?>
      <?php if ($params->get('control_map') == 0) echo "zoomControl: false, panControl: false, streetViewControl: false,";
      else echo "zoomControl: true, panControl: true, streetViewControl: true,";?>

      <?php if ($params->get('scroll_wheel') == 0) echo "scrollwheel: false,";?>
       mapTypeId: google.maps.MapTypeId.ROADMAP
     };
        var imgCatalogPath = "<?php echo $mosConfig_live_site; ?>/components/com_realestatemanager/";
        var map = new google.maps.Map(document.getElementById("mod_rem_map_canvas<?php echo $pr; ?>"), myOptions);
        var bounds = new google.maps.LatLngBounds ();

        <?php
        $newArr = explode(",", _REALESTATE_MANAGER_HOUSE_MARKER);
        $j = 0; 
        for ($i = 0;$i < count($rows);$i++) { 
          if ($rows[$i]->hlatitude && $rows[$i]->hlongitude) {
            $numPick = '';
            if (isset($newArr[$rows[$i]->property_type])) {
                $numPick = $newArr[$rows[$i]->property_type];
            }
    ?>

            var srcForPic = "<?php echo $numPick; ?>";
            var image = '';
            if(srcForPic.length){
                var image = new google.maps.MarkerImage(imgCatalogPath + srcForPic,
                    new google.maps.Size(32, 32),
                    new google.maps.Point(0,0),
                    new google.maps.Point(16, 32));
            }
                
            marker.push(new google.maps.Marker({
                icon: image,
                position: new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,
                 <?php echo $rows[$i]->hlongitude; ?>),
                map: map,
                title: "<?php echo $database->Quote($rows[$i]->htitle); ?>"
            }));
            bounds.extend(new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,
              <?php echo $rows[$i]->hlongitude; ?>));


            var infowindow  = new google.maps.InfoWindow({});
            google.maps.event.addListener(marker[<?php echo $j; ?>], 'mouseover', 
            function() {
              <?php
              if (strlen($rows[$i]->htitle) > 45)
                  $htitle = substr($rows[$i]->htitle, 0, 25) . '...';
              else {
                  $htitle = $rows[$i]->htitle;
              }
              ?>
                      
              var title =  "<?php echo $htitle ?>";
              <?php 
                //for local images
                $imageURL = ($rows[$i]->image_link);

                if ($imageURL == '') $imageURL = _REALESTATE_MANAGER_NO_PICTURE_BIG;
                  $watermark = ($realestatemanager_configuration['watermark']['show'] == 1) ? true : false;  
                    $file_name = rem_picture_thumbnail($imageURL,
                       $realestatemanager_configuration['fotogal']['width'],
                       $realestatemanager_configuration['fotogal']['high'], $watermark);
                    $file = $mosConfig_live_site . '/components/com_realestatemanager/photos/' . $file_name;
              ?>
              var imgUrl =  "<?php echo $file; ?>";
                    
              <?php if(!incorrect_price($rows[$i]->price)):?>
                var price =  "<?php echo $rows[$i]->price; ?>";
                var priceunit =  "<?php echo $rows[$i]->priceunit; ?>";
              <?php else:?>
                var price =  "<?php echo $rows[$i]->price; ?>";
                var priceunit="";
              <?php endif;?>

              var contentStr = '<div>'+
                                    '<img width = "100%" src = "'+imgUrl+
                                        '" onclick="remOpenItem();" >'+
                                '</div>'+
                                '<div id="marker_link">'+
                                    '<a name="rem_link_item"  target="<?php echo $new_target; ?>"  '+
                                    ' href="index.php?option=com_realestatemanager&task=view&id=<?php 
                                    echo $rows[$i]->id; ?>&catid=<?php 
                                    echo $rows[$i]->idcat; ?>&Itemid=<?php 
                                    echo $Itemid; ?>">' + title + '</a>'+
                                '</div>'+
                                '<div id="marker_price">'+
                                    '<a  target="<?php echo $new_target; ?>" '+
                                    ' href="index.php?option=com_realestatemanager&task=view&id=<?php
                                     echo $rows[$i]->id; ?>&catid=<?php 
                                     echo $rows[$i]->idcat; ?>&Itemid=<?php 
                                     echo $Itemid; ?>" >' + price +' ' + priceunit + '</a>'+
                            '</div>';

                 infowindow.setContent(contentStr);
                 infowindow.setOptions( { maxWidth: <?php echo $realestatemanager_configuration['fotogal']['width'] ; ?> });
                 infowindow.open(map,marker[<?php echo $j; ?>]);
            });


            var myLatlng = new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,<?php echo $rows[$i]->hlongitude; ?>);
            var myZoom = 1;
            <?php
            $j++;
          }
        }
?>
        if (<?php echo $j; ?>>1) map.fitBounds(bounds);
        else if (<?php echo $j; ?>==1) {map.setCenter(myLatlng);map.setZoom(myZoom)}
        else {map.setCenter(new google.maps.LatLng(0,0));map.setZoom(0);}
      });
</script>

  </div>
<style>#mod_rem_map_canvas<?php echo $pr; ?> img{max-width:none;}</style>
<?php if ($params->get('is_percentage') == 'pixels') { ?>
<div class="re_mod_rem_map_canvas"  id="mod_rem_map_canvas<?php echo $pr; ?>" style=
      "width: <?php echo $params->get('map_width');?>px; height: <?php echo $params->get('map_height'); ?>px;
       float: rigth;" >
</div>

<?php } else if ($params->get('is_percentage') == 'percentage') {  ?>
<div class="re_mod_rem_map_canvas"  id="mod_rem_map_canvas<?php echo $pr; ?>" style=
      "width:100%; height: <?php echo $params->get('map_height'); ?>px;
       float: rigth;" >
</div>
<?php } 
?>
