<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Free
 *
 **/

/** ensure this file is being included by a parent file */
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once (dirname(__FILE__).'/helper.php');
$doc = JFactory::getDocument();
$doc->addStyleSheet(JURI::base(true).'/components/com_realestatemanager/includes/realestatemanager.css');
$list = modLocationHelper::getLink($params);

require JModuleHelper::getLayoutPath('mod_realestatemanager_location_map',$params->get('layout', 'default'));
