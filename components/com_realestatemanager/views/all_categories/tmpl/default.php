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
 
if (!defined('_VALID_MOS') && !defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
global $hide_js, $Itemid, $acl, $mosConfig_live_site, $my, $mainframe, $doc, $realestatemanager_configuration;
?>
    <?php positions_rem($params->get('allcategories01')); ?>
<div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
<?php echo $currentcat->header; ?>
</div>
<?php positions_rem($params->get('allcategories02')); ?>


<div class="REL-row">
<div class="REL-collumn-xs-9 REL-collumn-sm-9 REL-collumn-md-9 REL-collumn-lg-9">
    <div class="cat_description">
        <?php echo $currentcat->descrip; ?>
    </div>
</div>
<div class="REL-collumn-xs-3 REL-collumn-sm-3 REL-collumn-md-3 REL-collumn-lg-3">
    <img src="./components/com_realestatemanager/images/rem_logo.png" align="right" alt="Real Estate Manager logo"/>
</div>
    
</div>

<?php positions_rem($params->get('allcategories03')); ?>

<form action="<?php echo sefRelToAbs("index.php?option=com_realestatemanager&Itemid=" . $Itemid); ?>" method="post" name="adminForm" id="adminForm" >
<?php if ($params->get('search_option_registrationlevel') && $realestatemanager_configuration['search_button']['show']) { ?>
        <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
            <div class="realestate_search_button table_45">
            <?php $link = 'index.php?option=com_realestatemanager&amp;task=show_search&amp;catid=' . $catid . '&amp;Itemid=' . $Itemid; ?>
                <a href="<?php echo sefRelToAbs($link); ?>">
                    <img align="right" src="./components/com_realestatemanager/images/search.png" alt="Search" border="0" /><?php echo _REALESTATE_MANAGER_LABEL_SEARCH; ?></a>
            </div>
        </div>
        <br />
        <?php
    }
    HTML_realestatemanager::listCategories($params, $categories, $catid, $tabclass, $currentcat);
    ?>
    <div class="basictable table_46">
        <?php
        mosHTML::BackButton($params, $hide_js);
        ?>
    </div>
</form>
<div class="table_input">
<?php
if ($params->get('show_input_add_house'))
    HTML_realestatemanager::showAddButton($Itemid);
positions_rem($params->get('allcategories07'));
if ($params->get('ownerslist_show'))
    HTML_realestatemanager::showOwnersButton();
positions_rem($params->get('allcategories09'));
if ($params->get('show_button_my_houses'))
    HTML_realestatemanager::showButtonMyHouses();
positions_rem($params->get('allcategories10'));
?>
</div>
