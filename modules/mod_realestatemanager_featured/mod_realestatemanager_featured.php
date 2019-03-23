<?php
defined('_JEXEC') or die('Restricted access');
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Free
 *
 **/

$path = JPATH_BASE . '/' . 'components' . '/' . 'com_realestatemanager' . '/' . 'functions.php';
if (!file_exists($path)) {
    echo "To display the featured house You have to install RealEstateManager first<br />";
    exit; 
} else {
    require_once ($path);
}
$database = JFactory::getDBO();
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::base(true) . '/' . 'components' . '/' . 'com_realestatemanager' .
    '/' . 'includes' . '/' . 'realestatemanager.css');
$doc->addStyleSheet(JURI::base(true) . '/' . 'components' . '/' . 'com_realestatemanager' .
    '/' . 'includes' . '/' . 'animate.css');

$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');

// $doc->addScript('//cdnjs.cloudflare.com/ajax/libs/jQuery-viewport-checker/1.8.7/jquery.viewportchecker.min.js');
?>

<noscript>Javascript is required to use Real Estate Manager <a href="http://ordasoft.com/Real-Estate-Manager/realestatemanager-basic-and-pro-feature-comparison.html">Real estate manager Joomla extension for Real Estate Brokers, Real Estate Companies and other Enterprises selling Real estate
</a>, <a href="http://ordasoft.com/Real-Estate-Manager/realestatemanager-basic-and-pro-feature-comparison.html">Real Estate Manager create own real estate web portal for sell, rent,  buy real estate and property</a></noscript>

<?php
if(checkJavaScriptIncludedRE("jQuerREL-1.2.6.js") === false ) {
  $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/lightbox/js/jQuerREL-1.2.6.js');
}

if(checkJavaScriptIncludedRE("jQuerREL.viewportchecker.min.js") === false ) {
  $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/includes/jQuerREL.viewportchecker.min.js');
}

$menu = JFactory::getApplication();
$menu->getMenu();
require_once (JPATH_BASE . '/' . 'components' . '/' . 'com_realestatemanager' . '/' . 'functions.php');
$mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;
global $realestatemanager_configuration;
// load language
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
//Common parameters
$show_image = $params->get('image');
$image_height = $params->get('image_height');
$item_width = $params->get('item_width');
$container_image_width = $params->get('container_image_width');
$height_auto = $params->get('height_auto', false);
//print_r($height_auto);exit;
$show_hits = $params->get('hits');
$price = $params->get('price', 0);
$status = $params->get('status', 0);
$listing_status_on = $params->get('listing_status', 0);
$location = $params->get('location', 0);
$features = $params->get('features', 0);
$description = $params->get('description', 0);
$view_listing = $params->get('view_listing', 0);
$categories = $params->get('categories', 0);
//Individual parameters
$count = intval($params->get('count', 1));
//Display type
$displaytype = $params->get('displaytype', 0);
$columns = $params->get('columns', 0);
//Advanced parameters
$class_suffix = $params->get('moduleclass_sfx', 1);
$Itemid_from_params = $params->get('ItemId');
$g_words = $params->get('words', '');
$sortby = $params->get('sortnewby', 0);
$image_source_type = $params->get('image_source_type');
$realestatemanager_configuration['price_unit_show'] = $params->get('optPricePosition');
//realestate
if (!function_exists('searchPicture_rem')) {
    function searchPicture_rem($image_source_type, $imageURL) {
        global $realestatemanager_configuration;
        switch ($image_source_type) {
            case "0":
                $img_height = $realestatemanager_configuration['fotomain']['high'];
                $img_width = $realestatemanager_configuration['fotomain']['width'];
            break;
            case "1":
                $img_height = $realestatemanager_configuration['foto']['high'];
                $img_width = $realestatemanager_configuration['foto']['width'];
            break;
            case "2":
                $img_height = $realestatemanager_configuration['fotogallery']['high'];
                $img_width = $realestatemanager_configuration['fotogallery']['width'];
            break;
            default:
                $img_height = $realestatemanager_configuration['fotomain']['high'];
                $img_width = $realestatemanager_configuration['fotomain']['width'];
            break;
        }

        $watermark = ($realestatemanager_configuration['watermark']['show'] == 1) ? true : false; 

        $imageURL1 = rem_picture_thumbnail($imageURL, $img_width, $img_height, $watermark);

        $imageURL = "/components/com_realestatemanager/photos/" . $imageURL1;
        return $imageURL;
    }
}
switch ($sortby) {
    case 0:
        $sql_orderby_query = "id";
        $sql_where_query = ""; // Last Added

    break;
    case 1:
    case 2:
        $sql_orderby_query = "hits"; // Top (most popular)
        $sql_where_query = "";
    break;
    case 3:
        $sql_orderby_query = "rand()"; // Random
        $sql_where_query = "";
    break;

    case 4:
        $sql_orderby_query = "rand()"; // Top (most popular)
        $sql_where_query = "";
        $similar = '';
        
    //similarы
    break;
}

if (isset($langContent)){
    // $lang = $langContent;
    // $query = "SELECT lang_code FROM #__languages WHERE sef = '$lang'";
    // $database->setQuery($query);
    // $lang = $database->loadResult();
    $lang = " and (h.language like 'all' or h.language like '' or h.language ".
      "like '*' or h.language is null or h.language like '$langContent') ".
      "AND (c.language like 'all' or c.language like '' or c.language ".
      "like '*' or c.language is null or c.language like '$langContent') ";
}else{
    $lang = "";
}

$database->SetQuery("SELECT id  FROM #__menu WHERE menutype like '%menu%' AND link LIKE " .
    " '%option=com_realestatemanager%' AND params LIKE '%back_button%' ");
$Itemid_from_db = $database->loadResult();

if ($Itemid_from_params != '') {
    $Itemid = $Itemid_from_params;
} else {
    $Itemid = $Itemid_from_db;
}


$sql_published = "published = 1";
$s = getWhereUsergroupsCondition("c");
$cat_sel = "";
$house_ids = "";

if(isset($similar)){

    
  $id = JRequest::getString('id');

  if($id == '') return;


    $query = "SELECT h.htitle,h.listing_status, h.id, h.image_link, h.hits,  c.id AS catid, ".
          " c.title AS cattitle, h.price, h.published, h.priceunit, ".
          "  h.hlocation, h.rooms, ".
          " h.year, h.bedrooms, h.house_size, h.description, h.listing_type".
            ' FROM #__rem_houses AS h, #__rem_main_categories AS c , #__rem_categories AS vc ' .
            ' WHERE h.id <> '.(int) $id." and c.section='com_realestatemanager' ".
              " AND c.published='1' ".
              " AND vc.iditem=h.id ".
              " AND vc.idcat = c.id ".
              " AND h.published='1' ".
              $lang .
              " AND h.approved='1' " ;
        $query_flag = true;

        if($params->get('optBedrooms')==0)    $query .= ' and h.bedrooms =(select bedrooms from #__rem_houses t where t.id = '.(int) $id . ')';
        if($params->get('optCategory')==0) $query .= ' and vc.idcat in (select idcat from #__rem_categories t2 where t2.iditem = '.(int) $id . ')';
        if($params->get('optCity')==0) $query .= ' and h.hcity =(select hcity from #__rem_houses t3 where t3.id = '.(int) $id . ')';

}else{
        $query = "SELECT h.htitle,h.listing_status, h.id, h.image_link, h.hits,  c.id AS catid, ".
      " c.title AS cattitle, h.price, h.published, h.priceunit, ".
      "  h.hlocation, h.rooms, ".
      " h.year, h.bedrooms, h.house_size, h.description, h.listing_type
            \n FROM #__rem_houses AS h
            \n LEFT JOIN #__rem_categories AS hc ON hc.iditem=h.id
            \n LEFT JOIN #__rem_main_categories AS c ON c.id=hc.idcat
            \n WHERE (" . $s . ") $lang " . $sql_where_query . "";


    $query_flag = true;
    if ((isset($count) AND $count > 0) AND $cat_sel == "" AND $sql_published != "" AND $house_ids == "") {
        $query.= " AND c." . $sql_published . " AND h." . $sql_published;
    }

}

$query.=  " AND h.approved=1 GROUP BY h.id ORDER BY " . $sql_orderby_query .
    " DESC LIMIT 0 , " . $count . ";";

if ($query_flag) {
    $database->setQuery($query);
    $houses = $database->loadObjectList();
}

//print_r($houses);exit();
if ($houses !== "" && $houses !== Null && count($houses) > 0) {
    require JModuleHelper::getLayoutPath('mod_realestatemanager_featured', $params->get('layout'));
}
?>
