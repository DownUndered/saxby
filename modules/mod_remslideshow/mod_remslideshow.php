<?php

/*
* @version 3.0
* @package RealEstateManager - property slideShow
* @copyright 2012 OrdaSoft
* @author 2012 Andrey Kvasnekskiy (akbet@ordasoft.com )
* @description RealEstateManager - property slideShow for Real Estate Manager Component
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

require_once (JPATH_SITE . "/components/com_realestatemanager/functions.php");

$database = JFactory::getDBO();

// load language
$languagelocale = "";
$query = "SELECT l.title, l.lang_code, l.sef ";
$query .= "FROM #__rem_const_languages as cl ";
$query .= "LEFT JOIN #__rem_languages AS l ON cl.fk_languagesid=l.id ";
$query .= "LEFT JOIN #__rem_const AS c ON cl.fk_constid=c.id ";
$query .= "GROUP BY  l.title";
$database->setQuery($query);
$languages = $database->loadObjectList();
//print_r($query);exit;
$lang = JFactory::getLanguage();

foreach ($lang->getLocale() as $locale) {
    foreach ($languages as $language) {

        if ($locale == $language->title || $locale == $language->lang_code || $locale == $language->sef)
        {
            $mosConfig_lang = $locale;
            $languagelocale = $language->lang_code;

            break;
        }
    }
}

if ($languagelocale == ''){
    $mosConfig_lang = $lang->getTag();
    $languagelocale = $lang->getTag();
}

if ($languagelocale == '')
    $languagelocale = "en-GB";

// Set content language
global $langContent;
if(isset($_REQUEST['lang'])){
  $langContent = $_REQUEST['lang'];
}else{
  $langContent = substr($languagelocale, 0, 2);
}


require_once (dirname(__FILE__).DS.'helper.php');
// Include the syndicate functions only once
  $slides =modRemSlideShowHelper ::getImagesFromRemSlideShow($params, $langContent);

  $app = JFactory::getApplication();

  if($slides==null) {
    $app->enqueueMessage(JText::_('MOD_REMSLIDESHOW_NO_CATEGORY_OR_ITEMS'),'notice');
    return;
  }
global $realestatemanager_configuration;

if (version_compare(JVERSION, "3.0.0", "lt"))
    JHTML::_('behavior.mootools');
else
  JHtml::_('behavior.framework', true);

if($params->get('link_image',1)==2) {JHTML::_('behavior.modal');JHTML::_('behavior.mootools-uncompressed');}
$document = JFactory::getDocument();


$document->addScript(JURI::base(true) . '/modules/mod_remslideshow/assets/slider.js');

if(!is_numeric($width = $params->get('image_width'))) $width = 240;
if(!is_numeric($height = $params->get('image_height'))) $height = 180;
if(!is_numeric($max = $params->get('count_house'))) $max = 20;
if(!is_numeric($count = $params->get('visible_images'))) $count = 3;
if(!is_numeric($spacing = $params->get('space_between_images'))) $spacing = 3;
$moduleclass_sfx = $params->get('space_between_images') ;
if($count>count($slides)) $count = count($slides);
if($count<1) $count = 1;
if($count>$max) $count = $max;
$mid = $module->id;
$slider_type = $params->get('slider_type',0);
switch($slider_type){
  case 2:
    $slide_size = $width;
    $count = 1;
    break;
  case 1:
    $slide_size = $height + $spacing;
    break;
  case 0:
  default:
    $slide_size = $width + $spacing;
    break;
}

$animationOptions = modRemSlideShowHelper::getAnimationOptions($params);
$showB = $params->get('show_buttons',1);
$showA = $params->get('show_arrows',1);
if(!is_numeric($preload = $params->get('preload'))) $preload = 800;
$moduleSettings = "{id: '$mid', slider_type: $slider_type, slide_size: $slide_size, visible_slides: $count, show_buttons: $showB, show_arrows: $showA, preload: $preload}";
$js = "window.addEvent('domready',function(){var Slider$mid = new RemSlideShow($moduleSettings,$animationOptions)});";
$js = "(function($){ ".$js." })(document.id);";
$document->addScriptDeclaration($js);

$css = JURI::base().'modules/mod_remslideshow/assets/style.css';

$document->addStyleSheet($css);

$css = modRemSlideShowHelper::getStyleSheet($params,$mid);
$document->addStyleDeclaration($css);

$navigation = modRemSlideShowHelper::getNavigation($params,$mid);

require(JModuleHelper::getLayoutPath('mod_remslideshow',$params->get('layout', 'default')));
?>
<div style="text-align: center;"><a href="http://ordasoft.com" style="font-size: 10px;">Powered by OrdaSoft!</a></div>