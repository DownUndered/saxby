<?php
/**
* @package      Module NewsGrid layout for Joomla!
* @version      $Id: mod_newsgrid.php  kiennh $ 
* @author       Omegatheme
* @copyright    Copyright (C) 2009 - 2015 Omegatheme. All rights reserved.
* @license      GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
require_once JPATH_SITE . '/components/com_content/helpers/route.php';
$list            = ModNewsGridHelper::getList($params);
$ot_style = $params->get('grid_layout',1);  
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
if($ot_style == 1) :
    require( JModuleHelper::getLayoutPath( 'mod_newsgrid', 'animation' ) ); 
elseif($ot_style == 2) :
    require( JModuleHelper::getLayoutPath( 'mod_newsgrid', '3d_effect' ) );  
endif;  


