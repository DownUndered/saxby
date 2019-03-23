<?php
if (!defined('_VALID_MOS') && !defined('_JEXEC')) die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
/**
 *
 * @package  RealestateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.5 Free
 *
 *
 */
global $hide_js, $Itemid, $mainframe, $mosConfig_live_site, $doc,
 $realestatemanager_configuration, $database;
?>
<?php
$query = "SELECT max(price+0) FROM #__rem_houses";
$database->setQuery($query);
$max_price = $database->loadResult();
positions_rem($params->get('showsearch02'));
?>
<?php positions_rem($params->get('showsearch01')); ?>
<?php positions_rem($params->get('showsearch02')); ?>
<script type="text/javascript">
    function showDate(){
        if(document.adminForm.search_date_box.checked){
            var x=document.getElementById("search_date_from");
            document.adminForm.search_date_from.type="text";
            var x=document.getElementById("search_date_until");
            document.adminForm.search_date_until.type="text";
        } else{
            var x=document.getElementById("search_date_from");
            document.adminForm.search_date_from.type="hidden";
            var x=document.getElementById("search_date_until");
            document.adminForm.search_date_until.type="hidden";}
    }
</script>
<script language="javascript" type="text/javascript">
    jQuerREL(document).ready(function() {
      jQuerREL( "#search_date_from, #search_date_until" ).datepicker(
      {
          minDate: "+0",
          dateFormat: "<?php echo transforDateFromPhpToJquery();?>"

      });
    });
</script>
<script type="text/javascript">

       jQuerREL(function() {
            jQuerREL(".show_search_house #rem_slider").slider({
                min: 0,
                max: <?php echo $max_price; ?>,
                values: [0,<?php echo $max_price; ?>],
                range: true,
                stop: function(event, ui) {
                    jQuerREL(".show_search_house input#pricefrom").val(jQuerREL(".show_search_house #rem_slider").slider("values",0));
                    jQuerREL(".show_search_house input#priceto").val(jQuerREL(".show_search_house #rem_slider").slider("values",1));
                },
                slide: function(event, ui){
                    jQuerREL(".show_search_house input#pricefrom").val(jQuerREL(".show_search_house #rem_slider").slider("values",0));
                    jQuerREL(".show_search_house input#priceto").val(jQuerREL(".show_search_house #rem_slider").slider("values",1));
                }
            });

            jQuerREL(".show_search_house input#pricefrom").change(function(){
                var value1=jQuerREL(".show_search_house input#pricefrom").val();
                var value2=jQuerREL(".show_search_house input#priceto").val();
              
                if(parseInt(value1) > parseInt(value2)){
                    value1 = value2;
                    jQuerREL(".show_search_house input#pricefrom").val(value1);
                }
                jQuerREL(".show_search_house #rem_slider").slider("values",0,value1);
            });
                  
            jQuerREL(".show_search_house input#priceto").change(function(){
                var value1=jQuerREL(".show_search_house input#pricefrom").val();
                var value2=jQuerREL(".show_search_house input#priceto").val();
              
                if(parseInt(value1) > parseInt(value2)){
                    value2 = value1;
                    jQuerREL(".show_search_house input#priceto").val(value2);
                }
                if(value2 > <?php echo $max_price; ?>){
                    jQuerREL(".show_search_house input#priceto").val(<?php echo $max_price; ?>)
                }
                jQuerREL(".show_search_house #rem_slider").slider("values",1,value2);
            });
        });
    </script>
<?php positions_rem($params->get('showsearch03')); ?>

<?php 
$path = "index.php?option=" . $option . "&amp;task=search_houses&amp;Itemid=" . $Itemid;
$view = JRequest::getVar('view');
if(JRequest::getVar('typeLayout')) $view = JRequest::getVar('typeLayout');
if($view == "") $view = "alone_category";
if($layout == "") $layout = "default";
?>

<form action="<?php echo sefRelToAbs($path /* "index.php" */); ?>" method="get" name="userForm1">

    <input type="hidden" name="Houseid" value="on"/>
    <input type="hidden" name="Description" value="on"/>
    <input type="hidden" name="Title" value="on"/>
    <input type="hidden" name="Address" value="on" />
    <input type="hidden" name="Country" value="on" />
    <input type="hidden" name="Region" value="on" />
    <input type="hidden" name="City" value="on" />
    <input type="hidden" name="Zipcode" value="on" />
    <input type="hidden" name="ownername" value="on" />
    <input type="hidden" name="Bathrooms" value="on" />
    <input type="hidden" name="Bedrooms" value="on" />
    <input type="hidden" name="Contacts" value="on" />
    <input type="hidden" name="Agent" value="on" />
    <input type="hidden" name="Lot_size" value="on" />

    <input type="hidden" name="typeLayout" value="<?php echo $view; ?>" />
    <input type="hidden" name="searchLayout" value="<?php echo $layout; ?>" />
    <input type="hidden" name="option" value="<?php echo $option; ?>" />
    <input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" /> 
    <input type="hidden" name="task" value="search" />

    <div class="show_search_house default">
        <div class="container_box_1 REL-row">

        <div class="container_text_and_cat REL-collumn-xs-12 REL-collumn-sm-6 REL-collumn-md-6 REL-collumn-lg-3">

            <div class="rem_searchtext_input">
                <input class="inputbox" type="text" name="searchtext" size="20" maxlength="20" 
                  placeholder="<?php echo _REALESTATE_MANAGER_LABEL_SEARCH_KEYWORD; ?>"/>
            </div>

            <div class="col_box_2 container_box_2 REL-row">
                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-4 search-label">
                <?php echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?>
                </div>
                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-8">
                <?php echo $clist; ?>
                </div>
            </div>
        </div>

        <?php if ($realestatemanager_configuration['search_check_in_show'] || $realestatemanager_configuration['search_check_out_show']): ?>
        <div class="col_box_1 REL-collumn-xs-12 REL-collumn-sm-6 REL-collumn-md-6 REL-collumn-lg-3">
        <?php 
        if($realestatemanager_configuration['search_check_in_show']){ 
        ?>
            <div class="box_from REL-row">
                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-4 search-label">
                    <?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM; ?>
                </div>
                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-8">
                    <input type="text" id="search_date_from" name="search_date_from">
                </div>
            </div>
        <?php } else { ?>
            <div>
                <input type="hidden" id="search_date_from" name="search_date_from">
            </div>
        <?php } ?>
        <?php if($realestatemanager_configuration['search_check_out_show']){ ?>
            <div  class="box_until REL-row">
                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-4 search-label">
                    <?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL; ?>
                </div>
                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-8">
                    <input type="text" id="search_date_until" name="search_date_until">
                </div>
            </div>
        <?php } else { ?>
            <div>
                <input type="hidden" id="search_date_until" name="search_date_until">
            </div>
        <?php } ?>
        </div>
    <?php endif; ?>

        <div class="col_box_1 REL-collumn-xs-12 REL-collumn-sm-6 REL-collumn-md-6 REL-collumn-lg-3">
            <span class="price_label"><?php echo _REALESTATE_MANAGER_LABEL_PRICE; ?></span>
            <div id="rem_slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                
            </div>
            <div class="REL-row">

                        <div class="pricefrom_2 REL-collumn-xs-6 REL-collumn-sm-6 REL-collumn-md-6 REL-collumn-lg-6 container_search_slider_input">
                            <div class="REL-row">
                                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-4 search-label">
                                    <?php echo _REALESTATE_MANAGER_LABEL_FROM; ?>
                                </div>
                                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-8">
                                    <input type="text" id="pricefrom" name="pricefrom2" value="0"/>
                                </div>
                            </div>
                        </div>

                        <div class="priceto_2 REL-collumn-xs-6 REL-collumn-sm-6 REL-collumn-md-6 REL-collumn-lg-6 container_search_slider_input">
                            <div class="REL-row">
                                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-4 search-label">
                                    <?php echo _REALESTATE_MANAGER_LABEL_TO; ?>
                                </div>
                                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-8">
                                    <input type="text" id="priceto" name="priceto2" value="<?php echo $max_price; ?>"/>
                                </div>
                            </div>
                        </div>

                            
                        </div>
        </div>

        <div class="container_box_2 container_box_3 REL-collumn-xs-12 REL-collumn-sm-6 REL-collumn-md-6 REL-collumn-lg-3">
            <div class="col_box_2 REL-row">
                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-5 search-label">
                <?php echo _REALESTATE_MANAGER_LABEL_LISTING_TYPE; ?></div>
                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-7"><?php echo $params->get('listing_type_list'); ?></div>
            </div>
            <div class="col_box_2 REL-row">
                <div class="REL-collumn-xs-12 REL-collumn-sm-4 REL-collumn-md-4 REL-collumn-lg-5 search-label">
                <?php echo _REALESTATE_MANAGER_LABEL_LISTING_STATUS; ?>
                </div>
                <div class="REL-collumn-xs-12 REL-collumn-sm-8 REL-collumn-md-8 REL-collumn-lg-7"><?php echo $params->get('listing_status_list'); ?></div>
            </div>
        </div>

        <div class="col_box_button REL-collumn-xs-12 REL-collumn-sm-12 REL-collumn-md-12 REL-collumn-lg-12">
        <input class="button" type="submit" name="submit" 
          value="<?php echo _REALESTATE_MANAGER_LABEL_SEARCH_BUTTON; ?>" />
        </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</form>
<?php positions_rem($params->get('showsearch04')); ?>
  