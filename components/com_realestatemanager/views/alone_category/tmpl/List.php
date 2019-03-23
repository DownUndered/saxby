<?php 
if (!defined('_VALID_MOS') && !defined('_JEXEC')) 
  die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com); 
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.9 Pro
 *
 * */

 
$session = JFactory::getSession();
$arr = $session->get("array", "default");
global $hide_js, $Itemid, $mosConfig_live_site, $mosConfig_absolute_path, $database, $doc, $my;
global $limit, $total, $limitstart, $task, $paginations, $mainframe, $realestatemanager_configuration;

$watermark_path = ($realestatemanager_configuration['watermark']['show'] == 1) ? 'watermark/' : '';
$watermark = ($realestatemanager_configuration['watermark']['show'] == 1) ? true : false;  

function words_limit($input_text, $limit = 50, $end_str = '') {
    $input_text = strip_tags($input_text);
    $words = explode(' ', $input_text); 
    if ($limit < 1 || sizeof($words) <= $limit) { 
     return $input_text;
    }
    $words = array_slice($words, 0, $limit); 
     $out = implode(' ', $words);
    return $out . $end_str; 
}
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

<?php if (($task != 'rent_request') && ($realestatemanager_configuration['location_map'] == 1)):?>

    <div id="map_canvas" class="re_map_canvas re_map_canvas_02"></div>

    <?php HTML_realestatemanager::add_google_map($rows); ?>

<?php endif ?>

<?php
if (count($rows) > 0) {
    $sort_arr['order_field'] = $params->get('sort_arr_order_field');
    $sort_arr['order_direction'] = $params->get('sort_arr_order_direction');
?>
    <?php positions_rem($params->get('singleuser03')); ?>
    <?php positions_rem($params->get('singlecategory03')); ?>
    <?php positions_rem($params->get('singlecategory04')); ?>
    <?php $option_type = JArrayHelper::getValue($_REQUEST, 'option');

    if ($option_type != 'com_simplemembership'): ?>

    <div id="ShowOrderBy" class="table_38 REL-row">


<?php if($realestatemanager_configuration['searchlayout_orderby']['show']): ?>

        <form method="POST" 
            action="<?php echo sefRelToAbs($_SERVER["REQUEST_URI"]); ?>" name="orderForm" class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-5 REL-collumn-lg-5">
            <input type="hidden" id="order_direction" name="order_direction"
             value="<?php echo $sort_arr['order_direction']; ?>" >
            <a title="Click to sort by this column."
             onclick="javascript:allreordering();return false;" href="#">
                               <?php
        if ($sort_arr['order_direction'] == 'asc') {
            echo '<i class="fa fa-sort-alpha-asc"></i>';
        } else {
            echo '<i class="fa fa-sort-alpha-desc"></i>';
        }
?>
           </a>
    <?php echo _REALESTATE_MANAGER_LABEL_ORDER_BY; ?>
             <select size="1" class="inputbox"
              onchange="javascript:document.orderForm.order_direction.value='asc'; document.orderForm.submit();"
               id="order_field" name="order_field">
                    <option  value="ordering" <?php if ($sort_arr['order_field'] == "ordering")
                    echo 'selected="selected"'; ?> >  <?php echo _REALESTATE_MANAGER_LABEL_ORDERING; ?> </option>
                    <option value="date" <?php if ($sort_arr['order_field'] == "date")
                     echo 'selected="selected"'; ?> > <?php echo _REALESTATE_MANAGER_LABEL_DATE; ?> </option>
                    <option value="price" <?php if ($sort_arr['order_field'] == "price")
                     echo 'selected="selected"'; ?> > <?php echo _REALESTATE_MANAGER_LABEL_PRICE; ?></option>
                    <option value="htitle" <?php if ($sort_arr['order_field'] == "htitle")
                     echo 'selected="selected"'; ?> > <?php echo _REALESTATE_MANAGER_LABEL_TITLE; ?></option>
            </select>
        </form>
<?php endif ?>


        <div class="button_ppe table_29 REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-7 REL-collumn-lg-7">

<?php 
      if ($params->get('show_input_add_house')) {
              HTML_realestatemanager::showAddButton($Itemid);
      }
      if ($realestatemanager_configuration['search_button']['show']) {
        HTML_realestatemanager::showSearchButton();
    }
?>


    </div>

<div style="clear: both;"></div>
<?php endif ?>

    </div>
    
            <?php positions_rem($params->get('singleuser04')); ?>
            <?php positions_rem($params->get('singlecategory05')); ?>
<div class="REL-row">
<!--style for show or hide search block-->
<?php if ($params->get('search_alone_category') && $params->get('search_alone_category_registrationlevel')): ?>
<div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-9 REL-collumn-lg-9">
<?php else: ?>
<div class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-12 REL-collumn-lg-12">
<?php endif; ?>
    
    <div id="list">
    <?php
    $available = false;
    $k = 0;
    $total = count($rows);
    $g_item_count = 0;
    foreach($rows as $row) {
        $tmphouse = new mosRealEstateManager($database);
        $tmphouse->load($row->id);
        $tmphouse->setCatIds();
        $link = 'index.php?option=com_realestatemanager&task=view&id=' .
         $row->id . '&catid=' . $tmphouse->catid[0] . '&Itemid=' .
          $Itemid ;
        $g_item_count++;
?>

            <div class="list_house <?php echo $tabclass[($g_item_count % 2) ]; ?> REL-row"  >

             <div class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-4 REL-collumn-lg-4 rem_list_image_container">


                <span class="col_img" style="position: relative;">
                    <a href="<?php echo sefRelToAbs($link); ?>">
            <?php
        $house = $row;
        $imageURL = $house->image_link;
        if ($imageURL == '') $imageURL = _REALESTATE_MANAGER_NO_PICTURE_BIG;
            $file_name = rem_picture_thumbnail($imageURL,
                         $realestatemanager_configuration['foto']['width'],
                          $realestatemanager_configuration['foto']['high'], $watermark);
            $file = $mosConfig_live_site . '/components/com_realestatemanager/photos/' . $file_name;
            echo '<img alt="' . $house->htitle . '" title="' . $house->htitle . '" src="' . 
                                $file . '" border="0" class="little">';
?>
                    </a>
                    <?php 
                        if ($house->listing_status){
                          if ($house->listing_status != 0){
                            $listing_status1 = explode(',', _REALESTATE_MANAGER_OPTION_LISTING_STATUS);
                            $ls = 1;
                            foreach ($listing_status1 as $listing_status2) {
                                $listing_status[$ls] = $listing_status2;
                                $ls++;
                            }
                            echo '<div class="rem_listing_status">'.$listing_status[$house->listing_status].'</div>';
                          }
                        }
                    ?>
                     <div class="col_rent">
                            <?php
        if ($params->get('show_housestatus')) {
            if ($params->get('show_houserequest')) {
                $data1 = JFactory::getDBO();
                $query = "SELECT  b.rent_from , b.rent_until  FROM #__rem_rent AS b " .
                 " LEFT JOIN #__rem_houses AS c ON b.fk_houseid = c.id " . " WHERE c.id=" . $row->id .
                  " AND c.published='1' AND c.approved='1' AND b.rent_return IS NULL";
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
              
            </span>

            </div>

             <div class="REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-8 REL-collumn-lg-8 rem_list_container">

<div id="rem_house_catlist">      
    <div class="col_htitle">
        <a href="<?php echo sefRelToAbs($link); ?>" class="category<?php echo $params->get('pageclass_sfx'); ?>">
    <?php positions_rem(words_limit($row->htitle, 5, '...')); ?></a>
    </div>
    <div class="price_hits">
<?php if ($params->get('show_pricerequest')):?>

         
    <?php if (!incorrect_price($row->price)):?>

    <?php if ($row->price != '' || $row->priceunit != ''): ?>

        <?php if ($realestatemanager_configuration['price_unit_show'] == '1') :?>

            <?php if ($realestatemanager_configuration['sale_separator']):?>

                    <div class="price_priceunit">
                        <span class="col_price">
                    <?php echo formatMoney($row->price, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']); ?>
                        </span>
                        <span class="col_priceunit"><?php echo $row->priceunit; ?></span>
                    </div>
                  <?php else: ?>
                    <div class="price_priceunit">
                        <span class="col_price"><?php echo $row->price; ?></span>
                        <span class="col_priceunit"><?php echo $row->priceunit; ?></span>
                    </div>

                <?php endif ?>

            <?php else: ?>

            <?php if ($realestatemanager_configuration['sale_separator']): ?>

                    <div class="price_priceunit">
                        <span class="col_priceunit"><?php echo $row->priceunit; ?></span>
                        <span class="col_price">
        <?php echo formatMoney($row->price, $realestatemanager_configuration['sale_fraction'], $realestatemanager_configuration['price_format']); ?>
                        </span>
                    </div>
                            <?php else: ?>
                
                    <div class="price_priceunit">
                        <span class="col_priceunit"><?php echo $row->priceunit; ?></span>
                        <span class="col_price"><?php echo $row->price; ?></span>
                    </div>
            <?php endif ?>

        <?php endif ?>

    <?php endif ?>
    
    <?php else: ?>
        <span class="col_price"><?php echo $row->price; ?></span>
    <?php endif; ?>

<?php endif ?>
    </div> <!-- price_hits -->
   <div class="col_hlocation">
                    <i class="fa fa-map-marker"></i>

        <?php if (trim($row->hcountry)):?>
                        <span class="col_text_2"><?php echo $row->hcountry; ?></span>,

        <?php endif ?>

        <?php if (trim($row->hregion)):?>
                        <span class="col_text_2"><?php echo $row->hregion; ?></span>,
        <?php endif ?>

        <?php if (trim($row->hcity)): ?>
                        <span class="col_text_2"><?php echo $row->hcity; ?></span>,
        <?php endif ?>

        <?php if (trim($row->hzipcode)): ?>

                <span class="col_text_2"><?php echo $row->hzipcode; ?></span>,

        <?php endif ?>

        <?php if (trim($row->hlocation)): ?>

            <span class="col_02"><?php echo $row->hlocation; ?></span>.

        <?php endif ?>

    </div>

    <?php if (trim($row->description)): ?>
        <div class="rem_house_description">
            <?php positions_rem(words_limit($row->description, 20, '...')); ?>
        </div>
    <?php endif ?>

                            <div class="rem_type_catlist">

    <?php if ($params->get('show_category')) : ?>

            <?php           $link1 = 'index.php?option=com_realestatemanager&amp;task=showCategory&amp;catid=' .
                 $catid . '&amp;Itemid=' . $Itemid;
    ?>

        <div class="col_category_title row_text">
            <i class='fa fa-tag'></i>
            <a href="<?php echo sefRelToAbs($link1); ?>"
             class="category<?php echo $params->get('pageclass_sfx'); ?>">
                <?php echo $params->get('category_name'); ?>
            </a>
        </div>

    <?php endif ?>

                <div class="price_hits row_text">

        <?php if ($params->get('hits')):?>

                        <div class="col_hits">
                            <span class="col_10">
                        <?php echo "<i class='fa fa-eye'></i>" . "&nbsp;" . _REALESTATE_MANAGER_LABEL_HITS; ?>:
                            </span>
                            <span class="col_11">
                        <?php echo $row->hits; ?>
                            </span>
                        </div>

         <?php endif ?>

                </div> <!-- price_hits -->

                                                   <?php if (trim($row->house_size)):?>
                <div class="row_text">
                    <i class="fa fa-expand"></i>
                    <span class="col_text_2">
                        <?php echo $row->house_size; ?> 
                        <?php echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX; ?>
                    </span>
                </div>
            <?php endif ?>


            <?php if (trim($row->year)): ?>
                <div class="row_text">
                    <i class="fa fa-calendar"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BUILD_YEAR; ?>:</span>
                    <span class="col_text_2"><?php echo $row->year; ?></span>
                </div>

            <?php endif ?>

            <?php if (trim($row->rooms)):?>

                <div class="row_text">
                    <i class="fa fa-building-o"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_ROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $row->rooms; ?></span>
                </div>
            <?php endif ?>

            <?php if (trim($row->bedrooms)): ?>
                <div class="row_text">
                    <i class="fa fa-inbox"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BEDROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $row->bedrooms; ?></span>
                </div>
            <?php endif ?>

            <div style="clear: both;"></div>
                        </div>
</div>
                            </div>
                            </div>
                     <?php
    }
?>
    </div> <!-- list -->

                <?php positions_rem($params->get('singleuser05')); ?>
                <?php positions_rem($params->get('singlecategory06')); ?>
                <?php
}
?>
        
    <br/>
    <div class="basictable table_27">


<?php 
    $paginations = $arr;
    if ($paginations && ($pageNav->total > $pageNav->limit)): ?>

       <div id="pagenavig">
            <?php 
            echo $pageNav->getPagesLinks();
            ?>
        </div>
<?php endif ?>


        <div class="col_02">
<?php
if ($params->get('show_rentstatus') && $params->get('show_rentrequest')
 && !$params->get('rent_save') && !$params->get('search_request')):
?>

        <?php elseif ($params->get('show_rentstatus') && $params->get('show_rentrequest')
 && $params->get('rent_save') && !$params->get('search_request')) : ?>

                <input type="button" class="button"
                 value="<?php echo _REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU_SAVE; ?>"
                  onclick="rem_rent_request_submitbutton()" />

            <?php else: ?>
                &nbsp;
<?php endif ?>
        </div>

    </div>
</div> <!-- end span9  -->
<?php
if($params->get('search_alone_category') && $params->get('search_alone_category_registrationlevel')):?>

<div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-3 REL-collumn-lg-3">
<?php positions_rem($params->get('singleuser01')); ?>
<?php positions_rem($params->get('view05')); ?>
    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            Search
        </div>    
            <?php
            PHP_realestatemanager::showSearchHouses($option, $catid, $option, $layout);
            ?>
    </div>
</div>
<?php endif ?>
</div><!-- end row-fluid  -->
<?php positions_rem($params->get('singlecategory09')); ?>
  <?php positions_rem($params->get('singlecategory11')); ?>

           
<?php if ($is_exist_sub_categories):?>
        <?php positions_rem($params->get('singlecategory07')); ?>
    <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">

    <?php echo _REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES . " : " . $params->get('category_name'); ?>
    </div>

    <?php positions_rem($params->get('singlecategory08')); ?>

    <?php
    HTML_realestatemanager::listCategories($params, $categories, $catid, $tabclass, $currentcat);

    ?>

<?php endif ?>


<div class="basictable table_28">
    <?php
mosHTML::BackButton($params, $hide_js);
?>
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