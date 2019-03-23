<?php 

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com); 
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.8 Pro
 *
 * */
defined('_JEXEC') or die;

JLoader::register('ContentHelper', JPATH_ADMINISTRATOR . '/components/com_content/helpers/content.php');
JLoader::register('CategoryHelperAssociation', JPATH_ADMINISTRATOR . '/components/com_categories/helpers/association.php');

abstract class RealestatemanagerHelperAssociation extends CategoryHelperAssociation{


    public static function getAssociations($id = 0, $view = null){

        if(isset($_REQUEST['task'])){
            
            $task = $_REQUEST['task'];
            JLoader::import('helpers.route', JPATH_COMPONENT_SITE);

            if($task == 'showCategory'){

               // $catid = $_REQUEST['catid'];
                $catid = intval(mosGetParam($_REQUEST, 'catid', 0));

                if($catid){
                    $rederectUrlArr = RealestatemanagerHelperRoute::getRemAssocCategoryRoute($catid);
                    return $rederectUrlArr;
                }                       
            }

            if($task == 'view'){                

               // $id = $_REQUEST['id'];
                $id = intval(mosGetParam($_REQUEST, 'id', 0));
                        
                if ($id){
                    $rederectUrlArr = RealestatemanagerHelperRoute::getRemAssocPropertyRoute($id);
                    return $rederectUrlArr;
                }
            }
        }
        return array();  
    }
}