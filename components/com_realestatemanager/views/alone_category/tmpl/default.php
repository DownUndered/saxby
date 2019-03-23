 <?php
if (!defined('_VALID_MOS') && !defined('_JEXEC')) 
  die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
  
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com); 
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 4.2 free
 *
 * */
$session = JFactory::getSession();
$arr = $session->get("array", "default");
global $hide_js, $Itemid, $mosConfig_live_site, $mosConfig_absolute_path, $database, $doc, $my, $acl;
global $limit, $total, $limitstart, $task, $paginations, $mainframe, $realestatemanager_configuration;

$watermark_path = ($realestatemanager_configuration['watermark']['show'] == 1) ? 'watermark/' : '';
$watermark = ($realestatemanager_configuration['watermark']['show'] == 1) ? true : false;  

$user = Jfactory::getUser();
if (isset($_REQUEST['userId'])) {
    if ($option != 'com_realestatemanager' and $_REQUEST['userId'] == $user->id) PHP_realestatemanager::showTabs();
} else {
    if ($option != 'com_realestatemanager') PHP_realestatemanager::showTabs();
}
if (version_compare(JVERSION, "3.0.0", "lt")) JHTML::_('behavior.mootools');
else JHtml::_('behavior.framework', true);
?>
<noscript>Javascript is required to use Real Estate Manager <a href="http://ordasoft.com/Real-Estate-Manager-Software-Joomla.html">Real estate manager Joomla extension for Real Estate Brokers, Real Estate Companies and other Enterprises selling Real estate
</a>, <a href="http://ordasoft.com/Real-Estate-Manager-Software-Joomla.html">Real Estate Manager create own real estate web portal for sell, rent,  buy real estate and property</a></noscript>
<script type="text/javascript">
    function rem_rent_request_submitbutton() {
        var form = document.userForm;
        if (form.user_name.value == "") {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME; ?>" );
        } else if (form.user_email.value == "" || !isValidEmail(form.user_email.value)) {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL; ?>" );
        } else if (form.user_mailing == "") {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_MAILING; ?>" );
        } else if (form.rent_until.value == "") {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_UNTIL; ?>" );
        } else {
            form.submit();
        }
    }
      </script>
      <script>
    function isValidEmail(str) {
        return (str.indexOf("@") > 1);
    }

    function allreordering(){
        if(document.orderForm.order_direction.value=='asc')
            document.orderForm.order_direction.value='desc';
        else document.orderForm.order_direction.value='asc';

        document.orderForm.submit();
    }

</script>

 <script>

jQuerREL(document).ready(function () {
    function maxMargin(item){
        var A = item, max = 0, elem;
        A.each(function () {

        var margin = parseInt( jQuerREL(this).css('margin-left'), 10) ;

        if ( margin > max)
        max = margin, elem = this;

            if (max > 0) {
                // statement
                jQuerREL('.okno_R').css('margin-bottom', max);
            } else {
                jQuerREL('.okno_R').css('margin-bottom', '10px');
            }
        
        });
    };
        maxMargin(jQuerREL('.okno_R'));
    });

</script>

    <?php positions_rem($params->get('singlecategory01')); ?>
<div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
    <?php
if (!$params->get('wrongitemid')) {
    echo $currentcat->header;
}
?>
</div>

<?php positions_rem($params->get('singleuser02')); ?>
<?php positions_rem($params->get('singlecategory02')); ?>

<?php if (($task != 'rent_request') &&
  ($realestatemanager_configuration['location_map'] == 1)): ?>
    <div id="map_canvas" class="re_map_canvas re_map_canvas_01"></div>
<?php
    HTML_realestatemanager::add_google_map($rows);
?>

<?php endif ?>

<?php
if (count($rows) > 0): 
?>

<?php
    $sort_arr['order_field'] = $params->get('sort_arr_order_field');
    $sort_arr['order_direction'] = $params->get('sort_arr_order_direction');
?>

<?php positions_rem($params->get('singleuser03')); ?>
<?php positions_rem($params->get('singlecategory04')); ?>

<?php
$option_type = JArrayHelper::getValue($_REQUEST, 'option');

if ($option_type != 'com_simplemembership'): ?>

<div id="ShowOrderBy" class=" REL-row">

<?php
if($realestatemanager_configuration['searchlayout_orderby']['show']):?>

 <?php   if(checkAccess_REM($realestatemanager_configuration['searchlayout_orderby']['registrationlevel'], 
              'NORECURSE', userGID_REM($my->id), $acl)):?>

    <form method="POST" action="<?php echo sefRelToAbs($_SERVER["REQUEST_URI"]); ?>" name="orderForm" class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-5 REL-collumn-lg-5" >
        <input type="hidden" id="order_direction" name="order_direction"
         value="<?php echo $sort_arr['order_direction']; ?>" >
        <a title="Click to sort by this column." onclick="javascript:allreordering();return false;" href="#">

            <?php
                if ($sort_arr['order_direction'] == 'asc') {
                    echo '<i class="fa fa-sort-alpha-asc"></i>';
                } else {
                    echo '<i class="fa fa-sort-alpha-desc"></i>';
                }
            ?>

        </a>
<?php echo _REALESTATE_MANAGER_LABEL_ORDER_BY; ?>
        <select size="1" class="inputbox" onchange="javascript:document.orderForm.order_direction.value='asc';          document.orderForm.submit();" id="order_field" name="order_field">
            <option  value="ordering" <?php if ($sort_arr['order_field'] == "ordering")
                echo 'selected="selected"'; ?> >  <?php echo _REALESTATE_MANAGER_LABEL_ORDERING; ?> </option>
            <option  value="date" <?php if ($sort_arr['order_field'] == "date")echo 'selected="selected"'; ?> >                <?php echo _REALESTATE_MANAGER_LABEL_DATE; ?>
            </option>
            <option value="price" <?php if ($sort_arr['order_field'] == "price") echo 'selected="selected"'; ?> >           <?php echo _REALESTATE_MANAGER_LABEL_PRICE; ?>
            </option>
            <option value="htitle" <?php if ($sort_arr['order_field'] == "htitle") echo 'selected="selected"'; ?> >         <?php echo _REALESTATE_MANAGER_LABEL_TITLE; ?>
            </option>
        </select>
    </form>

        <?php endif ?>

    <?php endif ?>


    <div class="button_ppe table_29 REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-7 REL-collumn-lg-7">

<?php
if (!$params->get('wrongitemid')) {
    if ($realestatemanager_configuration['add_house']['show']) {
        if (checkAccess_REM($realestatemanager_configuration['add_house']['registrationlevel'],
         'NORECURSE', userGID_REM($my->id), $acl)) {
            HTML_realestatemanager::showAddButton($Itemid);
        }
    }
    if ($realestatemanager_configuration['search_button']['show']) {
        if (checkAccess_REM($realestatemanager_configuration['search_button']['registrationlevel'],
         'NORECURSE', userGID_REM($my->id), $acl)) {
            HTML_realestatemanager::showSearchButton();
        }
    }
}
?>


</div>
    <div style="clear: both;"></div>
</div>

<?php endif ?>

<?php endif ?>

<div class="REL-row">



<?php if ($params->get('search_alone_category_registrationlevel') && $params->get('search_alone_category')): ?>


<div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-9 REL-collumn-lg-9">


            
<?php else: ?>

<div class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-12 REL-collumn-lg-12">



<?php endif ?>



<?php if (count($rows) > 0):?>

  <?php  positions_rem($params->get('singleuser04')); ?>

<?php positions_rem($params->get('singlecategory05')); ?>

    <div id="gallery_rem"
    data-collumn-lg="<?php echo $realestatemanager_configuration['rel_data_columns_adv_lg']; ?>"
    data-collumn-md="<?php echo $realestatemanager_configuration['rel_data_columns_adv_md']; ?>"
    data-collumn-sm="<?php echo $realestatemanager_configuration['rel_data_columns_adv_sm']; ?>"
    data-collumn-xs="<?php echo $realestatemanager_configuration['rel_data_columns_adv_xs']; ?>"
    >
<?php
    $total = count($rows);
    foreach($rows as $row): ?>

    <?php
        $tmphouse = new mosRealEstateManager($database);
        $tmphouse->load($row->id);
        $tmphouse->setCatIds();
        $option = 'com_realestatemanager';
        $link = 'index.php?option=' . $option . '&amp;task=view&amp;id=' . $row->id
         . '&amp;catid=' . $tmphouse->catid[0] . '&amp;Itemid=' . $Itemid;
        $imageURL = $row->image_link;
    ?>

            <div class="okno_R" id="imageBlock">
                <div id="divamage" style = "position: relative; text-align:center;">

                    <a href="<?php echo sefRelToAbs($link); ?>" style="text-decoration: none">
                        <?php
                        if ($imageURL == '') $imageURL = _REALESTATE_MANAGER_NO_PICTURE_BIG;
                        $file_name = rem_picture_thumbnail($imageURL,
                        $realestatemanager_configuration['fotocategory']['width'],
                        $realestatemanager_configuration['fotocategory']['high'], $watermark);
                        $file = $mosConfig_live_site . '/components/com_realestatemanager/photos/' . $file_name;
                        echo '<img alt="' . $row->htitle . '" title="' . $row->htitle . '" src="' .
                        $file . '" border="0" class="little">';
                        ?>
                    </a>
                    <?php 
                        if ($row->listing_status){
                          if ($row->listing_status != 0){
                            $listing_status1 = explode(',', _REALESTATE_MANAGER_OPTION_LISTING_STATUS);
                            $ls = 1;
                            foreach ($listing_status1 as $listing_status2) {
                                $listing_status[$ls] = $listing_status2;
                                $ls++;
                            }
                            echo '<div class="rem_listing_status">'.$listing_status[$row->listing_status].'</div>';
                          }
                        }
                    ?>
                     <div class="col_rent">
                            <?php
        if ($params->get('show_housestatus')) {
            if ($params->get('show_houserequest')) {
                $data1 = JFactory::getDBO();
                $query = "SELECT  b.rent_from , b.rent_until  FROM #__rem_rent AS b "
                 . " LEFT JOIN #__rem_houses AS c ON b.fk_houseid = c.id "
                  . " WHERE c.id=" . $row->id
                   . " AND c.published='1' AND c.approved='1' AND b.rent_return IS NULL";
                $data1->setQuery($query);
                $rents1 = $data1->loadObjectList();
?>
                            <?php
                if ($row->listing_type == 1) {
                    echo _REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT;
                }
                if($row->listing_type == 2){
                    echo _REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE;
                }
?>
                            <?php
            }
        }
?>
                    </div><!-- col_rent -->
                  
                </div>
                <div class="texthouse">
                    <div class="titlehouse">
                        <a href="<?php echo sefRelToAbs($link); ?>" >
                    <?php
        if (strlen($row->htitle) > 45) echo mb_substr($row->htitle, 0, 25), '...';
        else {
            echo $row->htitle;
        }
?>
                        </a>
                    </div>
                            <div style="clear: both;"></div>
            <div class="rem_type_Allhouses">
                     <?php if (trim($row->house_size)):?>
                        <div class="row_text">
                            <i class="fa fa-expand"></i>
                            <span class="col_text_2">
                                <?php echo $row->house_size; ?>
                                <?php echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX; ?>
                            </span>
                        </div>
                    <?php endif ?>

                    <?php if (trim($row->rooms)):?>
                    <div class="row_text">
                        <i class="fa fa-building-o"></i>
                        <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_ROOMS; ?>:</span>
                        <span class="col_text_2"><?php echo $row->rooms; ?></span>
                    </div>
                    <?php endif ?>
                    <?php if (trim($row->year)): ?>
                <div class="row_text">
                    <i class="fa fa-calendar"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BUILD_YEAR; ?>:</span>
                    <span class="col_text_2"><?php echo $row->year; ?></span>
                </div>
                <?php endif ?>

                <?php if (trim($row->bedrooms)):?>
            <div class="row_text">
                <i class="fa fa-inbox"></i>
                <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BEDROOMS; ?>:</span>
                <span class="col_text_2"><?php echo $row->bedrooms; ?></span>
            </div>
            <?php endif ?>

    </div>
    
                    </div>
                    <div class="rem_house_viewlist">
                    <a href="<?php echo sefRelToAbs($link); ?>" style="display: block">
                        <?php
        if ($params->get('show_pricerequest')) {
?>
        <?php if(!incorrect_price($row->price)){ ?> 
                        <div class="price">
                        <?php
            if ($realestatemanager_configuration['price_unit_show'] == '1') {
                if ($realestatemanager_configuration['sale_separator'])
                 echo formatMoney($row->price, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']), ' ', $row->priceunit;
                else echo $row->price, ' ', $row->priceunit;
            } else {
                if ($realestatemanager_configuration['sale_separator'])
                 echo $row->priceunit, ' ', formatMoney($row->price, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']);
                else echo $row->priceunit, ' ', $row->price;
            }
?>
                        </div>
                        <?php
            }else{
                echo '<div class="price">'.$row->price.'</div>';
            }
        }
?>
                        <span><?php echo _REALESTATE_MANAGER_LABEL_VIEW_LISTING; ?></span>
                    </a>
    <div style="clear: both;"></div>
            </div>
        </div>
<?php endforeach ?>
    </div>

<?php endif ?>



    <?php 
    $paginations = $arr;
    if ($paginations && ($pageNav->total > $pageNav->limit)): ?>

       <div id="pagenavig">
            <?php 
            echo $pageNav->getPagesLinks();
            ?>
        </div>
    <?php endif ?>

</div> <!-- end span9  -->


<?php
// if($params->get('search_alone_category') && $params->get('search_alone_category_registrationlevel')  && $params->get('search_option')  ):
if($params->get('search_alone_category_registrationlevel')):
?>
    <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-3 REL-collumn-lg-3">
    <?php positions_rem($params->get('singleuser01')); ?>
    <?php positions_rem($params->get('view05')); ?>
        <div class="rem_house_contacts">
            <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_SHOW_SEARCH; ?>
            </div>
            <?php
            PHP_realestatemanager::showSearchHouses($option, $catid, $option, $layout);
            ?>
        </div>
    </div>
<?php endif; ?>
   
</div> <!-- end row-fluid  -->
    <?php positions_rem($params->get('singlecategory09')); ?>
    <?php positions_rem($params->get('singlecategory11'));?>


     <div class="position">

    <?php
    positions_rem($params->get('ownerlist03'));
    ?>
        
    </div>


<?php
if ($is_exist_sub_categories) {
    ?>
    <?php positions_rem($params->get('singlecategory07')); ?>
    <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
    <?php echo _REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES . " : " . $params->get('category_name'); ?>
    </div>
    <?php positions_rem($params->get('singlecategory08')); ?>
    <?php
    HTML_realestatemanager::listCategories($params, $categories, $catid, $tabclass, $currentcat);
}
?>

<div class="basictable table_20">
<?php mosHTML::BackButton($params, $hide_js); ?>
</div>


<!-- Modal for wishlist -->
<a href="#aboutus" class="rem-button-about"></a>
                    
<a href="#rem-modal-css" class="rem-overlay" id="rem-aboutus" style="display: none;"></a>
<div class="rem-popup">
    <div class="rem-modal-text">
        Please past text to modal
    </div>
     
    <a class="rem-close" title="Close" href="#rem-close"></a>
</div>