<?php

if (!defined('_VALID_MOS') && !defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Pro
 *
 *
 */
if (!function_exists('set_header_name_rem')) {

    function set_header_name_rem($menu, $Itemid) {
        if (version_compare(JVERSION, "1.6.0", "lt")) {
            $menu_name = $menu->name;
            return $menu_name;
        } else if (version_compare(JVERSION, "1.6.0", "ge")) {
            $app = JFactory::getApplication();
            $menu1 = $app->getMenu();
            if (isset($menu1->getItem($Itemid)->title)) {
                $menu_name = $menu1->getItem($Itemid)->title;
                return $menu_name;
            }
        } else {
            echo "Sanity test. Error version check!";
            exit;
        }
    }

}
if (!function_exists('userGID_REM')) {

    function userGID_REM($oID) {
        global $database, $ueConfig;
        if (version_compare(JVERSION, "1.6.0", "lt")) {
            if ($oID > 0) {
                $query = "SELECT gid FROM #__users WHERE id = '" . $oID . "'";
                $database->setQuery($query);
                $gid = $database->loadResult();
                return $gid;
            } else
                return 0;
        } else if (version_compare(JVERSION, "1.6.0", "ge")) {
            if ($oID > 0) {
                $query = "SELECT group_id FROM #__user_usergroup_map WHERE user_id  = '" . $oID . "'";
                $database->setQuery($query);
                $gids = $database->loadAssocList();
                if (count($gids) > 0) {
                    $ret = '';
                    foreach ($gids as $gid) {
                        if ($ret != "")
                            $ret.= ',';
                        $ret.= $gid['group_id'];
                    }
                    return $ret;
                } else
                    return -2;
            } else
                return -2;
        } else {
            echo "Sanity test. Error version check!";
            exit;
        }
    }

}
if (!function_exists('positions_rem')) {

    function positions_rem($position, $params = array()) {
        if (version_compare(JVERSION, "1.6.0", "lt")) {
            $dispatcher = JDispatcher::getInstance();
            $err_state = ini_get('display_errors');
            ini_set('display_errors', 'Off');
            $plug_row->text = $position; // load the var into plugin_row object
            $plug_row->params = $params;
            JPluginHelper::importPlugin('content');
            $results = $dispatcher->trigger('onPrepareContent', array(&$plug_row, &$plug_params), true); //run mambot onPrepareContent on plug_row object
            $idesc = $plug_row->text; //get new content from plug_row object to value
            echo $idesc; //echo new content out
            ini_set('display_errors', $err_state);
        } else if (version_compare(JVERSION, "1.6.0", "ge")) {
            $dispatcher = JDispatcher::getInstance();
            $err_state = ini_get('display_errors');
            ini_set('display_errors', 'Off');
            $plug_row->text = $position; // load the var into plugin_row object
            $plug_row->params = $params;
            JPluginHelper::importPlugin('content');
            $offset = 0;
            $results = $dispatcher->trigger('onContentPrepare', array('com_realestatemanager', &$plug_row, &$plug_params, $offset)); //run mambot onPrepareContent on plug_row object
            echo $plug_row->text; //echo new content out
            ini_set('display_errors', $err_state);
        } else {
            echo "Sanity test. Error version check!";
            exit;
        }
    }

}
if (!function_exists('get_group_children_rem')) {

    function get_group_children_rem() {
        global $acl, $database;
        $groups['-2'] = ('Everyone');
        if (version_compare(JVERSION, "1.6.0", "lt")) {
            $ids_groups = $acl->get_group_children($acl->get_group_id('USERS'), '', 'RECURSE');
            foreach ($ids_groups as $id_group) {
                $groups[$id_group] = $acl->get_group_name($id_group);
            }
            return $groups;
        } else if (version_compare(JVERSION, "1.6.0", "ge")) {
            $query = 'SELECT `id`,`title` FROM #__usergroups';
            $database->setQuery($query);
            $rows = $database->loadObjectList();
            foreach ($rows as $k => $v) {
                $id_group = $rows[$k]->id;
                $group_name = $rows[$k]->title;
                $groups[$id_group] = $group_name;
            }
            return $groups;
        } else {
            echo "Sanity test. Error version check!";
            exit;
        }
    }

}
if (!function_exists('get_group_children_tree_rem')) {

    function get_group_children_tree_rem() {
        global $acl, $mosConfig_absolute_path;
        $gtree[] = mosHTML::makeOption('-2', 'Everyone');
        if (version_compare(JVERSION, "1.6.0", "lt")) {
            $gtree = array_merge($gtree, $acl->get_group_children_tree(null, 'USERS', false));
            return $gtree;
        } else if (version_compare(JVERSION, "1.6.0", "ge")) {
            $group_children_tree = array();
            include_once ($mosConfig_absolute_path . '/administrator/components/com_users/models/groups.php');
            if (version_compare(JVERSION, "3.0.0", "lt"))
                $model = JModel::getInstance('Groups', 'UsersModel', array('ignore_request' => true));
            else {
                $model = JModelLegacy::getInstance('Groups', 'UsersModel', array('ignore_request' => true));
            }
            foreach ($g = $model->getItems() as $k => $v) { // $g contains basic usergroup items info
                $group_title = '.';
                for ($i = 1; $i <= $g[$k]->level; $i++)
                    $group_title.= '-';
                $group_title.= '-' . $g[$k]->title;
                $group_children_tree[] = mosHTML::makeOption($g[$k]->id, $group_title);
            }
            $gtree = array_merge($gtree, $group_children_tree);
            return $gtree;
        } else {
            echo "Sanity test. Error version check!";
            exit;
        }
    }

}
if (!function_exists('catOrderDownIcon')) {

    function catOrderDownIcon($i, $n, $index, $task = 'orderdown', $alt = 'Move Down') {
        global $templateDir, $mosConfig_live_site;
        if ($i < $n - 1) {
            if (version_compare(JVERSION, "1.6.0", "lt")) {
                return '<a href="#reorder" onclick="return listItemTask(\'cb' . $index . '\',\'' . $task . '\')" title="' . $alt . '">
                <img src="' . $mosConfig_live_site . '/administrator/images/downarrow-1.png" width="12" height="12" border="0" alt="' . $alt . '" />
                </a>';
            } else {
                return '<a href="#reorder" onclick="return listItemTask(\'cb' . $index . '\',\'' . $task . '\')" title="' . $alt . '">
                <img src="' . $templateDir . '/images/admin/downarrow-1.png" width="12" height="12" border="0" alt="' . $alt . '" />
                </a>';
            }
        } else
            return '&nbsp;';
    }

}
if (!function_exists('catOrderUpIcon')) {

    function catOrderUpIcon($i, $index, $task = 'orderup', $alt = 'Move Up') {
        global $templateDir, $mosConfig_live_site;
        if ($i > 0) {
            if (version_compare(JVERSION, "1.6.0", "lt")) {
                return '<a href="#reorder" onclick="return listItemTask(\'cb' . $index . '\',\'' . $task . '\')" title="' . $alt . '">
                <img src="' . $mosConfig_live_site . '/administrator/images/uparrow-1.png" width="12" height="12" border="0" alt="' . $alt . '" />
                </a>';
            } else {
                return '<a href="#reorder" onclick="return listItemTask(\'cb' . $index . '\',\'' . $task . '\')" title="' . $alt . '">
                <img src="' . $templateDir . '/images/admin/uparrow-1.png" width="12" height="12" border="0" alt="' . $alt . '" />
                </a>';
            }
        } else
            return '&nbsp;';
    }

}
if (!defined('_REALESTATE_MANAGER_COMPAT_FILE_LOADED')) {
    define('_REALESTATE_MANAGER_COMPAT_FILE_LOADED', 1);
    if (class_exists('JConfig')) {
        // These are needed when the Joomla! 1.5 legacy plugin is not enabled
        if (!defined('_JLEGACY')) {
            // TODO: determine what else is needed to work without the legacy plugin
            $mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;
            include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/functions.php");
            if (!class_exists('mosHTML')) {
                include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/includes/html.php");
            }
            if (!class_exists('mosAdminMenus')) {
                include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/includes/adminmenus.php");
            }
            if (!class_exists('mosTabs')) {
                include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/includes/classes.php");
            }
            if (!class_exists('mosMenu')) {
                include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/includes/menu.php");
            }
            if (!class_exists('mosParameters')) {
                include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/includes/parameters.php");
            }
            if (!class_exists('mosMambotHandler')) {
                include_once ($mosConfig_absolute_path . "/components/com_realestatemanager/includes/mambothandler.php");
            }
            if (!class_exists('JComponentHelper') && !isset($mainframe)) {
                include_once (JPATH_BASE .'/'. 'includes' .'/'. 'defines.php');
                include_once (JPATH_BASE .'/'. 'includes' .'/'. 'framework.php');
                $mainframe = JFactory::getApplication(defined('_VM_IS_BACKEND') ? 'administrator' : 'site');
            }
            jimport('joomla.application.component.helper');
            if (class_exists('JComponentHelper')) {
                $usersConfig = JComponentHelper::getParams('com_users');
                $contentConfig = JComponentHelper::getParams('com_content');
                // User registration settings
                $mosConfig_allowUserRegistration = $GLOBALS['mosConfig_allowUserRegistration'] = $usersConfig->get('allowUserRegistration');
                $mosConfig_useractivation = $GLOBALS['mosConfig_useractivation'] = $usersConfig->get('useractivation');
                // TODO: Do we need these? They are set in the template.
                // Icon display settings
                // (hide pdf, etc has been changed to *show* pdf, etc in J! 1.5)
                $mosConfig_icons = $contentConfig->get('show_icons');
                $mosConfig_hidePdf = 1 - intval($contentConfig->get('show_pdf_icon'));
                $mosConfig_hidePrint = 1 - intval($contentConfig->get('show_print_icon'));
                $mosConfig_hideEmail = 1 - intval($contentConfig->get('show_email_icon'));
            }
            $jconfig = new JConfig();
            // Settings from the Joomla! configuration file
            foreach (get_object_vars($jconfig) as $k => $v) {
                $name = 'mosConfig_' . $k;
                $name = $GLOBALS[$name] = $v;
            }

            $url = JURI::base();
            $mosConfig_live_site = $GLOBALS['mosConfig_live_site'] = substr_replace($url, '', -1, 1);
            $mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;
            $mosConfig_cachepath = $GLOBALS['mosConfig_cachepath'] = JPATH_BASE .'/'. 'cache';
            if (!isset($option))
                $option = strtolower(JRequest::getCmd('option', 'com_realestatemanager'));
            // The selected language
            $lang = JFactory::getLanguage();
            // $database is directly needed by some functions, so we need to create it here.
            $GLOBALS['database'] = $database = JFactory::getDBO();
            // The $my (user) object
            $GLOBALS['my'] = JFactory::getUser();
            // The permissions object
            $acl = JFactory::getACL();
            $GLOBALS['acl'] = $acl;
            // Version information
            $_VERSION = $GLOBALS['_VERSION'] = new JVersion();
            if (!function_exists('sefreltoabs')) {

                function sefRelToAbs($value) {
                    $url = str_replace('&amp;', '&', $value);
                    if (substr(strtolower($url), 0, 9) != "index.php")
                        return $url;
                    $uri = JURI::getInstance();
                    $prefix = $uri->toString(array('scheme', 'host', 'port'));
                    return $prefix . JRoute::_($url);
                    return $url;
                }

            }
            if (!function_exists('editorArea')) {

                function editorArea($name, $content, $hiddenField, $width, $height, $col, $row) {
                    jimport('joomla.html.editor');
                    $editor = JFactory::getEditor();
                    echo $editor->display($hiddenField, $content, $width, $height, $col, $row);
                }

            }
            // Load the menu bar class
            JLoader::register('mosMenuBar_ext', $mosConfig_absolute_path .'/'. 'administrator' .'/'. 'components' .'/'. 'com_realestatemanager' .'/'. 'menubar_ext.php');
            // Load the user class
            JLoader::register('mosUser', $mosConfig_absolute_path .'/'. 'plugins' .'/'. 'system' .'/'. 'legacy' .'/'. 'user.php');
        } else {
            // We need these even when the Joomla! 1.5 legacy plugin is enabled
            // We need to set these when we don't enter as a component or module (like in notify.php)
            if (!isset($usersConfig))
                $usersConfig = JComponentHelper::getParams('com_users');
            if (!isset($contentConfig))
                $contentConfig = JComponentHelper::getParams('com_content');
            // Paths
            // These are in the legacy plugin as globals, but we need them locally too
            $mosConfig_live_site = $GLOBALS['mosConfig_live_site'];
            $mosConfig_cachepath = $GLOBALS['mosConfig_cachepath'];
            // User registration settings
            $mosConfig_allowUserRegistration = $GLOBALS['mosConfig_allowUserRegistration'] = $usersConfig->get('allowUserRegistration');
            $mosConfig_useractivation = $GLOBALS['mosConfig_useractivation'] = $usersConfig->get('useractivation');
            // TODO: Do we need these? They are set in the template.
            // Icon display settings
            // hide pdf, etc has been changed to show pdf, etc in J! 1.5
            $mosConfig_icons = $contentConfig->get('show_icons');
            $mosConfig_hidePdf = 1 - intval($contentConfig->get('show_pdf_icon'));
            $mosConfig_hidePrint = 1 - intval($contentConfig->get('show_print_icon'));
            $mosConfig_hideEmail = 1 - intval($contentConfig->get('show_email_icon'));
            // TODO: Do we still need this in the latest J! 1.5 SVN?
            // Adjust the time offset
            // Version information
            $_VERSION = $GLOBALS['_VERSION'];
        }
    }
}
 