<?php
if (!defined('_VALID_MOS') && !defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');
/**
 *
 * @package  RealEstateManager
 * @copyright 2017 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 4.0 Pro
 *
 * */
jimport( 'joomla.plugin.helper' );
if (version_compare(JVERSION, "3.0.0", "lt"))
    jimport('joomla.html.toolbar');

require_once($mosConfig_absolute_path . "/components/com_realestatemanager/functions.php");
require_once($mosConfig_absolute_path . "/components/com_realestatemanager/realestatemanager.php");
//require_once($mosConfig_absolute_path."/administrator/components/com_realestatemanager/menubar_ext.php");

$GLOBALS['mosConfig_live_site'] = $mosConfig_live_site = JURI::root();
$GLOBALS['mosConfig_absolute_path'] = $mosConfig_absolute_path; //for 1.6
$GLOBALS['mainframe'] = $mainframe = JFactory::getApplication();

$templateDir = JPATH_THEMES .'/'. JFactory::getApplication()->getTemplate() . '/';
$GLOBALS['templateDir'] = $templateDir;
$GLOBALS['doc'] = $doc = JFactory::getDocument();
$g_item_count = 0;

// add stylesheet
$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/animate.css');
//$doc->addScript('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/jQuerREL-ui.css');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/bootstrapREL.css');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/realestatemanager.css');
// $doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/lightbox/css/lightbox.css');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/TABS/tabcontent.css');

// add js
$doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');

if(checkJavaScriptIncludedRE("jQuerREL-1.2.6.js") === false ) {
  $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/lightbox/js/jQuerREL-1.2.6.js');
} 

$doc->addScriptDeclaration("jQuerREL=jQuerREL.noConflict();");

if(checkJavaScriptIncludedRE("jQuerREL-ui.js") === false ) {
  $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/includes/jQuerREL-ui.js');
}

$doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/wishlist.js');
// $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/lightbox/js/lightbox-2.6.min.js');
$doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/jquery.raty.js');
$doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/TABS/tabcontent.js');

//add fancybox & swiper slider
$doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/swiper.js');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/swiper.css');


$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/jquery.fancyboxREL.min.css');
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/styleFuncyboxThumbs.css');

$doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/jquery.fancyboxREL.min.js');
//add fancybox & swiper slider


class HTML_realestatemanager {


    static function showRentRequest(& $houses, & $currentcat, & $params, & $tabclass,
     & $catid, & $sub_categories, $option) {
        $pageNav = new JPagination(0, 0, 0);
      
        HTML_realestatemanager::displayHouses($houses, $currentcat, $params, $tabclass,
         $catid, $sub_categories, $pageNav, $option);
        // add the formular for send to :-)
    }

    static function displayHouses_empty($rows, $currentcat, &$params, $tabclass, $catid,
           $categories, &$pageNav = null,$is_exist_sub_categories=false, $option) {
        positions_rem($params->get('allcategories01'));
        ?>
        <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
             <?php echo $currentcat->header; ?>
        </div>
        <?php positions_rem($params->get('allcategories02')); ?>
        <table class="basictable table_48" border="0" cellpadding="4" cellspacing="0" width="100%">
            <tr>
                <td>
                    <?php echo $currentcat->descrip; ?>
                </td>     
                <td width="120" align="center">
                    <img src="./components/com_realestatemanager/images/rem_logo.png"
                     align="right" alt="Real Estate Manager logo"/>
                </td>
            </tr>
        </table>
        <?php
        if ($is_exist_sub_categories) {
            ?>
            <?php positions_rem($params->get('singlecategory07')); ?>
            <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
            <?php echo _REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES . " : " .
             $params->get('category_name'); ?>
            </div>
            <?php positions_rem($params->get('singlecategory08')); ?>
            <?php
            HTML_realestatemanager::listCategories($params, $categories, $catid, $tabclass, $currentcat);
        }
    }

    static function displayHouses(&$rows, $currentcat, &$params, $tabclass, $catid, $categories, &$pageNav = null, $is_exist_sub_categories=false, $option, $layout = "default", $type = "alone_category") {
        global $mosConfig_absolute_path, $Itemid;  
        $type = 'alone_category';
        require getLayoutPath::getLayoutPathCom('com_realestatemanager', $type, $layout);
    }    

    static function displaySearchHouses(&$rows, $currentcat, &$params, $tabclass, $catid, $categories, &$pageNav = null, $is_exist_sub_categories=false, $option, $layout = "default", $layoutsearch = "default") {
        global $mosConfig_absolute_path, $Itemid; 
        $type = 'search_result';

        if($params->get('search_form_on_result_search_page_show')){
          PHP_realestatemanager::showSearchHouses($option, $catid, $option, $layoutsearch);  
        }
        require getLayoutPath::getLayoutPathCom('com_realestatemanager', $type, $layout);
    }


    /**
     * Displays the house
     */
    static function displayHouse(& $house, & $tabclass, & $params, & $currentcat, & $rating,
     & $house_photos,$videos,$tracks, $id, $catid, $option, & $house_feature, & $currencys_price, $layout = "default") {
        global $mosConfig_absolute_path;

        if(empty(trim($layout))) $layout = 'default';

        $type = 'view_house';
        require getLayoutPath::getLayoutPathCom('com_realestatemanager', $type, $layout);
    }

    

    /**
     * Display links to categories
     */
    static function showCategories(&$params, &$categories, &$catid, &$tabclass, &$currentcat, $layout) {
        global $mosConfig_absolute_path;
        $type = 'all_categories';
        require getLayoutPath::getLayoutPathCom('com_realestatemanager', $type, $layout);
    }
    //30.06.17
    static function showSearchButton() {
        global $mosConfig_live_site;
        ?>
        <form action="<?php
         echo sefRelToAbs("index.php?option=com_realestatemanager&amp;task=show_search_house"); ?>" method="post" name="search_button" enctype="multipart/form-data">
            <input  type="submit" name="submit" value="<?php
             echo _REALESTATE_MANAGER_LABEL_SEARCH; ?>" class="button"/>
        </form>
        <?php
    }

    static function showAddButton($Itemid) {
      
    }

    static function showButtonMyHouses() {
        global $mosConfig_live_site, $Itemid;
    }

    static function showOwnersButton() {
        global $mosConfig_live_site, $Itemid;
    }

    static function showSearchHouses($params, $currentcat, $clist, $option, &$temp1, &$temp2, $layout = "default") {
        global $mosConfig_absolute_path, $task;
        //$type = $task == "search" ? "show_search_result" : "show_search_house";
        if($params->get('showsearchhouselayout')){
          $layout = $params->get('showsearchhouselayout');
        }
        $type = "show_search_house";
        require getLayoutPath::getLayoutPathCom('com_realestatemanager', $type, $layout);
    }

    /////////////////////////////////////


static function showRentRequestThanks($params, $backlink, $currentcat, $houseid=NULL, $time_difference=NULL) { 
            global $Itemid, $doc, $mosConfig_live_site, $hide_js, $catid,
             $option, $realestatemanager_configuration;
            $doc->addStyleSheet($mosConfig_live_site .
             '/components/com_realestatemanager/includes/realestatemanager.css');
            ?>
        <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
        </div>
        <?php


        if($houseid ){
           $item_name = $houseid->htitle;                           //'Donate to website.com';
            $paypal_real_or_test =  $realestatemanager_configuration['paypal_real_or_test']['show'];

            if($paypal_real_or_test==0)
                $paypal_path = 'www.sandbox.paypal.com';        
            else
                $paypal_path = 'www.paypal.com';
        
            if($time_difference){
                $amount = $time_difference[0]; // price
                $currency_code = $time_difference[1] ; // priceunit  
            }
            else{
                $amount= $houseid->price;
                $currency_code = $houseid->priceunit;
            }
        
        $amountLine='';
        $amountLine .= '<input type="hidden" name="amount" value="'.$amount.'" />'."\n"; 
        }
        
        ?> 
        
        <div class="save_add_table">
  
            <div class="descrip"><?php echo $currentcat->descrip; ?></div>  
        </div>

        <?php
        if ($option != 'com_realestatemanager') {
            $form_action = "index.php?option=" . $option . "&Itemid=" . $Itemid  ;
        }
        else
            $form_action = "index.php?option=com_realestatemanager&Itemid=" . $Itemid;
        ?>
        <div class="basictable_15 basictable">
                <span>
                        
                        <?php
                        
      if ($realestatemanager_configuration['plugin_name_select'] == '2checkout' 
        && isset($amount) && isset($currency_code) 
          && ($params->get('2checkout_buy_status_rl') == 1 || $params->get('2checkout_buy_status_rl') == 2) 
            && ($params->get('paypal_buy_status') == 1 || $params->get('paypal_buy_status') == 2)
          && !incorrect_price($houseid->price) && $houseid->price > 0 ) {

                          $amountcut = sprintf ('%.2f', $amount);
                  $houseid->price=$amountcut;
                
                  echo '<br/> '._REALESTATE_MANAGER_TOTAL_PRICE .$amountcut.' '.$currency_code; 
                  echo '<br/> '._REALESTATE_MANAGER_RENT_NOW_BY_2CHECKOUT.' <br/><br/>';

                  echo HTML_realestatemanager::getSaleForm($houseid,$realestatemanager_configuration);
                }
                   
                        //paypal button denis 25.12.2013
                    if($realestatemanager_configuration['plugin_name_select'] == 'paypal' 
                      && $params->get('paypal_buy_status') && $params->get('paypal_buy_status_rl')
                      && !incorrect_price($houseid->price) && $houseid->price > 0 ){

                        if($params->get('paypal_buy_status') == 1
                                && isset($amount) && isset($currency_code) ){
                            if($params->get('paypal_buy_status_rl') == 1){
                                echo '<br/> '._REALESTATE_MANAGER_TOTAL_PRICE .$amount.' '.$currency_code; 
                                echo '<br/> '._REALESTATE_MANAGER_RENT_NOW_BY_PAYPAL.' <br/><br/>';
                                $houseid->price=$amount;
                                echo HTML_realestatemanager::getSaleForm($houseid,$realestatemanager_configuration);
                            }
                        }
                        if($params->get('paypal_buy_status') == 2 
                                && isset($amount) && isset($currency_code) ){
                            if($params->get('paypal_buy_status_rl') == 2){
                                echo '<br/> '._REALESTATE_MANAGER_TOTAL_PRICE .$amount.' '.$currency_code; 
                                echo '<br/> '._REALESTATE_MANAGER_RENT_NOW_BY_PAYPAL.' <br/><br/>';
                                $houseid->price=$amount;
                                echo HTML_realestatemanager::getSaleForm($houseid,$realestatemanager_configuration);
                            }
                        }
                            ?>
                        
                        </form>
                        
                        <?php //end paypal button
                        }?>
                        
                        <input  type="submit" ONCLICK="window.location.href='<?php
                            $user = JFactory::getUser();
                            echo $backlink;                        
                            ?>'" value="OK">
                
                    </span>
                </div>
        <?php       
    }
//********************************************************************************************************

    static function showTabs(&$params, &$userid, &$username, &$comprofiler, &$option) {

        global $mosConfig_live_site, $doc;
        $doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/TABS/tabcontent.css');
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/TABS/tabcontent.js');


?>

         <?php 
        if(checkJavaScriptIncludedRE("jQuerREL-1.2.6.js") === false ) {
        $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/lightbox/js/jQuerREL-1.2.6.js');
        } 
    ?>
        <script type="text/javascript">jQuerREL=jQuerREL.noConflict();</script>
        </br> <!-- br for plugin simplemembership!!! -->
        <div class='tabs_buttons'>
            <ul id="countrytabs" class="shadetabs">
        <?php

        if ($params->get('show_edit_registrationlevel')) {
                        ?>
                <li>
                    <a class="my_houses_edit" href="<?php echo JRoute::_('index.php?option='
                     . $option .'&userId='.$userid . '&task=edit_my_houses' . $comprofiler, false);
                     ?>"><?php echo _REALESTATE_MANAGER_SHOW_TABS_SHOW_MY_HOUSES; ?></a>
                </li>
            <?php
        }

        if ($params->get('show_rent')) {

            if ($params->get('show_rent_registrationlevel')) {
                ?>
                    <li>
                        <a class="my_houses_rent" href="<?php echo JRoute::_('index.php?option='
                         . $option . '&userId='.$userid . '&task=rent_requests' . $comprofiler , false);
                          ?>"><?php echo _REALESTATE_MANAGER_SHOW_TABS_RENT_REQUESTS; ?></a>
                    </li>
                <?php
            }
        }
        if ($params->get('show_buy')) {
            if ($params->get('show_buy_registrationlevel')) {
                ?>
                    <li>
                        <a class="my_houses_buy" href="<?php echo JRoute::_('index.php?option='
                         . $option . '&userId='.$userid . '&task=buying_requests' . $comprofiler , false);
                          ?>"><?php echo _REALESTATE_MANAGER_SHOW_TABS_BUYING_REQUESTS; ?></a>
                    </li>
                <?php
            }
        }
        if ($params->get('show_history')) {
            if ($params->get('show_history_registrationlevel')) {
                ?>
            <li>
                <a class="my_houses_history" href="<?php echo JRoute::_('index.php?option='
                 . $option . '&userId='.$userid . '&task=rent_history' . $comprofiler , false);
                 ?>"><?php echo _REALESTATE_MANAGER_LABEL_CBHISTORY_ML; ?></a>
            </li>
                <?php
            }
        }
        ?>
            </ul>
        </div>
<script type="text/javascript">
    jQuerREL(document).ready(function(){
        var atr = jQuerREL("#adminForm div:first-child").attr("id");
        if(!atr){
            atr = jQuerREL("#adminForm table:first-child").attr("id");
        }
        jQuerREL("#countrytabs > li > a."+atr).addClass("selected");
         jQuerREL("#countrytabs > li > a").click(function(){
             jQuerREL("#countrytabs > li > a").removeClass("selected");
             jQuerREL(this).addClass("selected");
        });
    });

</script>
    <?php
}

            static function showMyHouses(&$houses, &$params, &$pageNav, $option,& $clist, &$language, & $rentlist,
           & $publist, & $search, $search_list, $ownerlist, $layout = "default") {
                global $mosConfig_absolute_path, $Itemid, $mosConfig_live_site;

                

                //require($mosConfig_absolute_path.
                // "/components/com_realestatemanager/views/my_houses/tmpl/".$layout.".php");
                $type = 'my_houses';
                require getLayoutPath::getLayoutPathCom('com_realestatemanager', $type, $layout);
            }

           static function showRentHouses($option, $house1, $rows, & $userlist, $type) {
                global $my, $mosConfig_live_site, $mainframe, $doc, $Itemid, $realestatemanager_configuration;
        ?>
        <?php 
        if(checkJavaScriptIncludedRE("jQuerREL-1.2.6.js") === false ) {
        $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/lightbox/js/jQuerREL-1.2.6.js');
        } 
    ?>
        <script type="text/javascript">jQuerREL=jQuerREL.noConflict();</script>


        <?php 

            if(checkJavaScriptIncludedRE("jQuerREL-ui.js") === false ) {
            $doc->addScript(JURI::root(true) . '          echo $mosConfig_live_site; ?>/components/com_realestatemanager/includes/jQuerREL-ui.js');
            }

        ?>

      <?php
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
                 '/components/com_realestatemanager/includes/realestatemanager.css');
        ?>
        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
        <form action="index.php" method="get" name="adminForm" id="adminForm">
                <?php
                if ($type == "rent" || $type == "edit_rent") {
                    ?>
                <div class="my_real_table_rent">
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TO . ":"; ?></span>
                        <span class="col_02"><?php echo $userlist; ?></span>

                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER . ":"; ?></span>
                        <span class="col_02"><input type="text" name="user_name" class="inputbox" /></span>
                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL . ":"; ?></span>
                        <span class="col_02"><input type="text" name="user_email" class="inputbox" /></span>
                    </div>


                <script type="text/javascript">
                jQuerREL(document).ready(function($) {

                  jQuerREL('#userid').change(function(event) {

                    if(jQuerREL(this).val() == '-1'){
                      jQuerREL('.my_real [name=user_name]').val('');
                      jQuerREL('.my_real [name=user_email]').val('');
                      jQuerREL('[name=user_name], [name=user_email]').removeAttr('readonly');
                    }else{
                      jQuerREL.ajax({
                        type: "POST",
                        url: "<?php echo $mosConfig_live_site;?>/index.php?option=com_realestatemanager&task=getUserData&userId="+jQuerREL(this).val()+"&format=raw",
                        success: function(user){
                          var user = jQuerREL.parseJSON(user);
                          jQuerREL('[name=user_name], [name=user_email]').attr('readonly','readonly');
                          jQuerREL('.my_real [name=user_name]').val(user.name);
                          jQuerREL('.my_real [name=user_email]').val(user.email);
                        }
                      });
                    }
                  });
                });
                </script>

                    <script>
                        Date.prototype.toLocaleFormat = function(format) {
                            var f = {Y : this.getYear() + 1900,m : this.getMonth() + 
                              1,d : this.getDate(),H : this.getHours(),M : this.getMinutes(),S : this.getSeconds()}
                            for(k in f)
                                format = format.replace('%' + k, f[k] < 10 ? "0" + f[k] : f[k]);
                            return format;
                        };
                                
                        window.onload = function ()

                        {
                            var today = new Date();
                            var date = today.toLocaleFormat("<?php echo $realestatemanager_configuration['date_format'] ?>");
                            document.getElementById('rent_from').value = date;
                            document.getElementById('rent_until').value = date;
                        };

                    </script>
 <!--///////////////////////////////calendar///////////////////////////////////////-->
          <?php
                  $house_id_fordate =  $house1->id;
                  $date_NA = available_dates($house_id_fordate);
          ?>  
               <script language="javascript" type="text/javascript">
                  var unavailableDates = Array();
                  jQuerREL(document).ready(function() {
                      //var unavailableDates = Array();
                      var k=0;
                      <?php if(!empty($date_NA)){?>
                          <?php foreach ($date_NA as $N_A){ ?>
                               unavailableDates[k]= '<?php echo $N_A; ?>';
                              k++;
                          <?php } ?>
                      <?php } ?>

                      function unavailableFrom(date) {
                          dmy = date.getFullYear() + "-" + ('0'+(date.getMonth() + 1)).slice(-2) + 
                              "-" + ('0'+date.getDate()).slice(-2);
                          if (jQuerREL.inArray(dmy, unavailableDates) == -1) {
                            return [true, ""];
                          } else {
                            return [false, "", "Unavailable"];
                          }
                      }

                      function unavailableUntil(date) {
                          dmy = date.getFullYear() + "-" + ('0'+(date.getMonth() + 1)).slice(-2) + 
                            "-" + ('0'+(date.getDate()-("<?php  if(!$realestatemanager_configuration['special_price']['show']) echo '1';?>"))).slice(-2);
                          if (jQuerREL.inArray(dmy, unavailableDates) == -1) {
                              return [true, ""];
                          } else {
                              return [false, "", "Unavailable"];
                          }
                      }

                      jQuerREL( "#rent_from" ).datepicker(
                      {
                        minDate: "+0",
                        dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
                        beforeShowDay: unavailableFrom,
                      });

                      jQuerREL( "#rent_until" ).datepicker(
                      {
                        minDate: "+0",
                        dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
                        beforeShowDay: unavailableUntil,
                      });
                  });



                  </script>


<!--///////////////////////////////////////////////////////////////////////////-->
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM . ":"; ?></span>
                           <p><input type="text" id="rent_from" name="rent_from"></p>
                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TIME; ?></span>
                        <p><input type="text" id="rent_until" name="rent_until"></p>
                    </div>
                </div>


        <?php } else { 
               echo "";
        } 
                $all = JFactory::getDBO();
                $query = "SELECT * FROM #__rem_rent";
                $all->setQuery($query);
                $num = $all->loadObjectList();
                ?>
            <div class="table_63">

                <div class="row_01">
                    <span class="col_01">
        <?php if ($type != 'rent') {
            ?>
                            <input type="checkbox" name="toggle" value="" onClick="rem_checkAll(this);" />
                            <span class="toggle_check">check All</span>
        <?php } ?>
                    </span>
        
                </div>

        <?php
        
        
        if ($type == "rent")
        {
        ?>
            <td align="center">  <input class="inputbox"  type="checkbox"
              name="checkHouse" id="checkHouse" size="0" maxlength="0" value="on" /></td>
         <?php
        } else if ($type == "edit_rent"){ ?>
          <input type="hidden"  name="checkHouse" id="checkHouse" value="on" /></td>
         <?php
         }
        $assoc_title = '';
        for ($t = 0, $z = count($rows); $t < $z; $t++) {
          if($rows[$t]->id != $house1->id) $assoc_title .= " ".$rows[$t]->htitle;
        }
        
               print_r("
                  <td align=\"center\">". $house1->id ."</td>
                  <td align=\"center\">" . $house1->houseid . "</td>
                  <td align=\"center\">" . $house1->htitle . " ( " . $assoc_title ." ) " . "</td>
                  </tr>");
        

              for ($j = 0, $n = count($rows); $j < $n; $j++) {
                $row = $rows[$j];
                    
              ?>
                     
              
                    <input class="inputbox" type="hidden" name="houseid" id="houseid"
                     size="0" maxlength="0" value="<?php echo $house1->houseid; ?>" />
                    <input class="inputbox" type="hidden" name="id" id="id" size="0"
                     maxlength="0" value="<?php echo $row->id; ?>" />
                    <input class="inputbox" type="hidden" name="htitle" id="htitle"
                     size="0" maxlength="0" value="<?php echo $row->htitle; ?>" />
                <?php
                
                    $house = $row->id;
                    $data = JFactory::getDBO();
                    $query = "SELECT * FROM #__rem_rent WHERE fk_houseid=" . $house . " ORDER BY rent_return ";
                    $data->setQuery($query);
                    $allrent = $data->loadObjectList();
                    
                
               
                    $num = 1;
                    for ($i = 0, $nn = count($allrent); $i < $nn; $i++) {
                        ?>

                        <div class="box_rent_real">

                            <div class="row_01 row_rent_real">
                        <?php if (!isset($allrent[$i]->rent_return) && $type != "rent") {
                            ?>
                                    <span class="rent_check_vid">
                                        <input type="checkbox" id="cb<?php echo $i; ?>" 
                                          name="bid[]" value="<?php echo $allrent[$i]->id; ?>" 
                                          onClick="isChecked(this.checked);" />
                                    </span>
                        <?php } else {
                            ?>
                        <?php } ?>
                                <span class="col_01">id</span>
                                <span class="col_02"><?php echo $num; ?></span>
                            </div>

                            <div class="row_02 row_rent_real">
                                <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></span>  
                                <span class="col_02"><?php echo $row->houseid; ?></span>
                            </div>

                            <div class="row_03 row_rent_real">
                        <?php echo $row->htitle; ?>
                            </div>

                            <div class="from_until_return">
                                <div class="row_04 row_rent_real">
                                    <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></span>  
                                    <span class="col_02"><?php echo data_transform_rem($allrent[$i]->rent_from); ?></span>
                                </div>
                                <br />
                                <div class="row_05 row_rent_real">
                                    <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></span>  
                                    <span class="col_02"><?php echo data_transform_rem($allrent[$i]->rent_until); ?></span>
                                </div>
                                <br />
                                <div class="row_06 row_rent_real">
                                    <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?></span>  
                                    <span class="col_02"><?php echo data_transform_rem($allrent[$i]->rent_return); ?></span>
                                </div>
                            </div>

                        </div>
                        <?php
                        if ($allrent[$i]->fk_userid != null)
                            print_r("<div class='rent_user'>" . $allrent[$i]->user_name . "</div>");
                        else
                            print_r("<div class='rent_user'>" . $allrent[$i]->user_name . $allrent[$i]->user_email . "</div>");
                        $num++;
                    }
            
                }
                ?>
            </div> <!-- table_63 -->


            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" id="adminFormTaskInput" name="task" value="" />
            <input type="hidden" name="save" value="1" />
            <input type="hidden" name="boxchecked" value="1" />
                <?php
                if ($option != "com_realestatemanager") {
                    ?>
                <input type="hidden" name="is_show_data" value="1" />
                    <?php
                }
                ?>
            <input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />

        <?php if ($type == "rent") { ?>
                <input type="button" name="rent_save" value="<?php 
                  echo _REALESTATE_MANAGER_LABEL_BUTTON_RENT; ?>" onclick="rem_buttonClickRent(this)"/>
        <?php } ?>
        <?php if ($type == "rent_return") { ?>
                <input type="button" name="rentout_save" value="<?php 
                  echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?>" onclick="rem_buttonClickRent(this)"/>
        <?php } ?>
        </form>
        <?php
    }



 static function editRentHouses($option, $house1, $rows, $title_assoc, & $userlist, & $all_assosiate_rent, $type) {
    global $my, $mosConfig_live_site, $mainframe, $doc, $Itemid, $realestatemanager_configuration;

    ?>
     <?php 
        if(checkJavaScriptIncludedRE("jQuerREL-1.2.6.js") === false ) {
        $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/lightbox/js/jQuerREL-1.2.6.js');
        } 
    ?>
    <script type="text/javascript">jQuerREL=jQuerREL.noConflict();</script>



    <?php 

      if(checkJavaScriptIncludedRE("jQuerREL-ui.js") === false ) {
        $doc->addScript(JURI::root(true) . '/components/com_realestatemanager/includes/jQuerREL-ui.js');
      }


     ?>



    <?php


    $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
    $doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/realestatemanager.css');
    ?>

 <!--///////////////////////////////calendar///////////////////////////////////////-->
  <script language="javascript" type="text/javascript">
    jQuerREL(document).ready(function() {
        jQuerREL( "#rent_from, #rent_until" ).datepicker(
        {
          dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
        });
    });



  </script>


        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
                <?php
                if ($type == "rent" || $type == "edit_rent") {
                    ?>
                <div class="my_real_table_rent">
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TO . ":"; ?></span>
                        <span class="col_02"><?php echo $userlist; ?></span>
                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER . ":"; ?></span>
                        <span class="col_02"><input type="text" name="user_name" class="inputbox" /></span>
                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL . ":"; ?></span>
                        <span class="col_02"><input type="text" name="user_email" class="inputbox" /></span>
                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM . ":"; ?></span>
                           <p><input type="text" id="rent_from" name="rent_from"></p>
                    </div>
                    <div class="my_real">
                        <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TIME; ?></span>
                        <p><input type="text" id="rent_until" name="rent_until"></p>
                    </div>
                </div>

                <script type="text/javascript">
                jQuerREL(document).ready(function($) {

                  jQuerREL('#userid').change(function(event) {

                    if(jQuerREL(this).val() == '-1'){
                      jQuerREL('.my_real [name=user_name]').val('');
                      jQuerREL('.my_real [name=user_email]').val('');
                      jQuerREL('[name=user_name], [name=user_email]').removeAttr('readonly');
                    }else{
                      jQuerREL.ajax({
                        type: "POST",
                        url: "<?php echo $mosConfig_live_site;?>/index.php?option=com_realestatemanager&task=getUserData&userId="+jQuerREL(this).val()+"&format=raw",
                        success: function(user){
                          var user = jQuerREL.parseJSON(user);
                          jQuerREL('[name=user_name], [name=user_email]').attr('readonly','readonly');
                          jQuerREL('.my_real [name=user_name]').val(user.name);
                          jQuerREL('.my_real [name=user_email]').val(user.email);
                        }
                      });
                    }
                  });
                });
                </script>

<!--/////////////////////////////////////////////-->



        <?php } else { 
                echo "";
        }
            $all = JFactory::getDBO();
            $query = "SELECT * FROM #__rem_rent ";
            $all->setQuery($query);
            $num = $all->loadObjectList();
            ?>

            <div class="table_63">

                <div class="row_01">
                    <span class="col_01">
                        </span>
                </div>

        <?php
                $assoc_title = ''; 
                for ($t = 0, $z = count($title_assoc); $t < $z; $t++) {
                  if($title_assoc[$t]->htitle != $house1->htitle) $assoc_title .= " ".$title_assoc[$t]->htitle; 
                }
                
                 //show rent history what we may change
                    ?>
                        
                <input class="inputbox" type="hidden"  name="houseid" id="houseid" size="0"
                 maxlength="0" value="<?php echo $house1->houseid; ?>" />
                <input class="inputbox"  type="hidden"  name="id" id="id" size="0" maxlength="0"
                 value="<?php echo $house1->id; ?>" />
                <input class="inputbox"  type="hidden"  name="id2" id="id2" size="0" maxlength="0"
                 value="<?php echo $house1->id; ?>" />   
          <?php

          if ($type == "edit_rent"){ ?>
            <input type="hidden"  name="checkHouse" id="checkHouse" value="on" />
           <?php
           }
          
          $num = 1;
          for ($y = 0, $n2 = count($all_assosiate_rent[0]); $y < $n2; $y++) {
              $assoc_rent_ids = '';
              for ($j = 0, $n3 = count($all_assosiate_rent); $j < $n3; $j++) {
                  if($assoc_rent_ids != "" ) $assoc_rent_ids .= ",".$all_assosiate_rent[$j][$y]->id;
                  else $assoc_rent_ids = $all_assosiate_rent[$j][$y]->id;
              }
              ?>

              <div class="box_rent_real">

                  <div class="row_01 row_rent_real">

                      <span class="rent_check_vid">
                          <input type="checkbox" id="cb<?php echo $y; ?>" name="bid[]"
                           value="<?php echo $assoc_rent_ids; ?>" onClick="Joomla.isChecked(this.checked);" />

                      </span>

                      <span class="col_01">id</span>
                      <span class="col_02"><?php echo $num; ?></span>
                  </div>

                  <div class="row_02 row_rent_real">
                      <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></span>
                      <span class="col_02"><?php echo $house1->houseid; ?></span>
                  </div>

                  <div class="row_03 row_rent_real">
                    <?php echo $house1->htitle . " ( " . $assoc_title ." ) " ?>
                  </div>

                  <div class="from_until_return">
                      <div class="row_04 row_rent_real">
                          <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></span>
                          <span class="col_02"><?php echo $all_assosiate_rent[0][$y]->user_name; ?></span>
                      </div>
                      <br />
                      <div class="row_04 row_rent_real">
                          <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></span>
                          <span class="col_02"><?php echo data_transform_rem($all_assosiate_rent[0][$y]->rent_from); ?></span>
                      </div>
                      <br />
                      <div class="row_05 row_rent_real">
                          <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></span>
                          <span class="col_02"><?php echo data_transform_rem($all_assosiate_rent[0][$y]->rent_until); ?></span>
                      </div>
                      <br />
                      <div class="row_06 row_rent_real">
                          <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?></span>
                          <span class="col_02"><?php echo data_transform_rem($all_assosiate_rent[0][$y]->rent_return); ?></span>
                      </div>
                  </div>

              </div>

          <?php

           $num++;
          }

          ?>
          <div class="box_rent_real">
              <div class="row_01 row_rent_real">---------------------------------------
              </div>
          </div>

          <?php
                   //show rent history what we can't change
                  for ($j = 0, $n = count($rows); $j < $n; $j++) {
                    $row = $rows[$j];
                    if($row->rent_return == "" ) continue ;

                    $num = 1;
                    ?>


          <div class="box_rent_real">
              <div class="row_01 row_rent_real">
                      <span class="col_01">id</span>
                      <span class="col_02"><?php echo $num; ?></span>
              </div>
              <div class="row_01 row_rent_real">
                      <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></span>
                      <span class="col_02"><?php echo $row->houseid; ?></span>
              </div>
              <div class="row_02 row_rent_real"><?php echo $row->htitle ; ?> </div>
              <div class="from_until_return">
                  <div class="row_04 row_rent_real">
                      <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></span>
                      <span class="col_02"><?php echo $row->user_name; ?></span>
                  </div>
                  <br />
                  <div class="row_04 row_rent_real">
                      <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></span>
                      <span class="col_02"><?php echo data_transform_rem($row->rent_from); ?></span>
                  </div>
                  <br />
                  <div class="row_05 row_rent_real">
                      <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></span>
                      <span class="col_02"><?php echo data_transform_rem($row->rent_until); ?></span>
                  </div>
                  <br />
                  <div class="row_06 row_rent_real">
                      <span class="col_01"><?php echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?></span>
                      <span class="col_02"><?php echo data_transform_rem($row->rent_return); ?></span>
                  </div>
              </div>
          </div>

            <?php } ?>



            </div> <!-- table_63 -->


            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" id="adminFormTaskInput" name="task" value="" />
            <input type="hidden" name="save" value="1" />
            <input type="hidden" name="boxchecked" value="1" />
            <?php
            if ($option != "com_realestatemanager") {
            ?>
                <input type="hidden" name="is_show_data" value="1" />
            <?php
            }
            ?>
            <input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />

            <?php if ($type == "rent" ) { ?>
                    <input type="button" name="rent_save" value="<?php
                       echo _REALESTATE_MANAGER_LABEL_BUTTON_RENT; ?>" onclick="rem_buttonClickRent(this)"/>
                  <?php } ?>
            <?php if ($type == "edit_rent") { ?>
                    <input type="button" name="edit_rent" value="<?php
                       echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_RENT; ?>" onclick="rem_buttonClickRent(this)"/>
                    <input type="hidden" name="save" value="1" />
                  <?php } ?>
            <?php if ($type == "rent_return") { ?>
                    <input type="button" name="rentout_save" value="<?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?>" onclick="rem_buttonClickRent(this)"/>
            <?php } ?>
        </form>
        <?php
    } 


    static function showRentHistory($option, $rows, $pageNav) {
        global $my, $Itemid, $mosConfig_live_site, $mainframe, $doc;
        $session = JFactory::getSession();
        $arr = $session->get("array", "default");
        $doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/realestatemanager.css');
        ?>
        <form action="index.php" method="get" name="adminForm" id="adminForm">
            <table id="my_houses_history" class="table_64 basictable">
                <tr>
                    <th align = "center" width="5%">#</th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="25%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?></th>
                </tr>
                <?php
                $numb = 0;
                for ($i = 0, $n = count($rows); $i < $n; $i++) {
                    $row = $rows[$i];
                    $house = $row->id;
                    $title = $row->htitle;
                    $numb++;
                    print_r("<td align=\"center\">" . $numb . "</td>
                         <td align=\"center\">" . $row->houseid . "</td>
                         <td align=\"center\">" . $row->htitle . "</td>
                         <td align=\"center\">" . data_transform_rem($row->rent_from) . "</td>
                         <td align=\"center\">" . data_transform_rem($row->rent_until) . "</td>
                         <td align=\"center\">" . data_transform_rem($row->rent_return) . "</td></tr>");
                }
                ?>

            </table>

            <div id="pagenavig">
            <?php
            $paginations = $arr;
            if ($paginations && ($pageNav->total > $pageNav->limit))
                echo $pageNav->getPagesLinks();
            ?>
            </div>

        </form>
        <?php
    }

    static function showRequestRentHouses($option, $rent_requests, &$pageNav) {
        global $my, $mosConfig_live_site, $mainframe, $doc, $Itemid;
        $session = JFactory::getSession();
        $arr = $session->get("array", "default");
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
         '/components/com_realestatemanager/includes/realestatemanager.css');
        ?>
        <form action="index.php" method="get" name="adminForm" id="adminForm">
            <table id="my_houses_rent" cellpadding="4" cellspacing="0"
             border="0" width="100%" class="basictable table_65">
                <tr>
                    <th align = "center" width="20">
                        <input type="checkbox" name="toggle" value="" onClick="rem_checkAll(this);" />
                    </th>
                    <th align = "center" width="30">#</th>
                    <th align = "center" class="title" width="10%" nowrap="nowrap">
        <?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                    <th align = "center" class="title" width="10%" nowrap="nowrap">
        <?php echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap">
        <?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap">
        <?php echo _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap">
        <?php echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap">
                <?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap">
                <?php echo _REALESTATE_MANAGER_LABEL_RENT_ADRES; ?></th>
                </tr>
        <?php
        for ($i = 0, $n = count($rent_requests); $i < $n; $i++) {
            $row = $rent_requests[$i];
            $assoc_title = ''; 
            $assoc_title = (isset($row->title_assoc))? " ( " . $row->title_assoc ." ) "  : '';
             if($assoc_title){
                for ($t = 0, $z = count($assoc_title); $t < $z; $t++) {
                   if($assoc_title[$t]->htitle != $row->htitle) 
                   $assoc_title .= " ".$assoc_title[$t]->htitle; 
                }
              }
            ?>
            <tr class="row<?php echo $i % 2; ?>">
                <td width="20" align="center">
                    <?php
                    echo mosHTML::idBox($i, $row->id, 0, 'bid');
                    ?>
                </td>
                <td align = "center"><?php echo $row->id; ?></td>
                <td align = "center">
                    <?php echo $row->rent_from; ?>
                </td>
                <td align = "center">
                  <?php echo $row->rent_until; ?>
                </td>
                <td align = "center">
            <?php
            $data = JFactory::getDBO();
            $query = "SELECT houseid FROM #__rem_houses where id = " . $row->fk_houseid . " ";
            $data->setQuery($query);
            $houseid = $data->loadObjectList();
            echo $houseid[0]->houseid;
            ?>
                        </td>
                        <td align = "center">
            <?php echo $row->htitle . $assoc_title; ?>
                        </td>
                        <td align = "center">
                    <?php echo $row->user_name; ?>
                        </td>
                        <td align = "center">
                            <a href=mailto:"<?php echo $row->user_email; ?>">
                    <?php echo $row->user_email; ?>
                            </a>
                        </td>
                        <td align = "center">
                <?php echo $row->user_mailing; ?>
                        </td>
                    </tr>
                <?php
            }
            ?>
            </table>

                    <div id="pagenavig">
            <?php
            $paginations = $arr;
            if ($paginations && ($pageNav->total > $pageNav->limit)) {
                echo $pageNav->getPagesLinks();
            }
            ?>
                    </div>

            <input type="hidden" name="option" value="<?php echo $option; ?>" />
        <?php
        if ($option != "com_realestatemanager") {
            ?>
                <input type="hidden" name="is_show_data" value="1" />
            <?php
        }
        ?>
            <input type="hidden" id="adminFormTaskInput" name="task" value="" />
            <input type="hidden" name="boxchecked" value="0" />
            <input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />
            <input type="button" name="acceptButton" value="<?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_ACCEPT; ?>"
             onclick="rem_buttonClickRentRequest(this)"/>
            <input type="button" name="declineButton" value="<?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_DECLINE; ?>"
             onclick="rem_buttonClickRentRequest(this)"/>
        </form>
        <?php
    }

 static function listCategories(&$params, $cat_all, $catid, $tabclass, $currentcat) {
                global $Itemid, $mosConfig_live_site, $doc;
                $doc->addStyleSheet($mosConfig_live_site .
                 '/components/com_realestatemanager/includes/realestatemanager.css');
                ?>
        <?php positions_rem($params->get('allcategories04')); ?>
        <div class="basictable table_58">
            <div class="row_01">
                <span class="col_01 sectiontableheader<?php echo $params->get('pageclass_sfx'); ?>">
            <?php echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?>
                </span>
                
                <span class="col_02 sectiontableheader<?php echo $params->get('pageclass_sfx'); ?>">
        <?php echo _REALESTATE_MANAGER_LABEL_HOUSES; ?> 
                </span>
            </div>
            <br/>
            <div class="row_02">
        <?php positions_rem($params->get('allcategories05')); ?>
        <?php HTML_realestatemanager::showInsertSubCategory($catid, $cat_all, $params, $tabclass, $Itemid, 0); ?>
            </div>
        </div>

        <?php positions_rem($params->get('allcategories06')); ?>
    <?php
    }

    /* function for show subcategory */

    static function showInsertSubCategory($id, $cat_all, $params, $tabclass, $Itemid, $deep) {
        global $g_item_count, $realestatemanager_configuration, $mosConfig_live_site;
        global $doc;

        $doc->addStyleSheet($mosConfig_live_site .
         '/components/com_realestatemanager/includes/realestatemanager.css');

        $deep++;
        for ($i = 0; $i < count($cat_all); $i++) {
            if (($id == $cat_all[$i]->parent_id) && ($cat_all[$i]->display == 1)) {
                $g_item_count++;

                $link = 'index.php?option=com_realestatemanager&amp;task=showCategory&amp;catid='
                   . $cat_all[$i]->id . '&amp;Itemid=' . $Itemid;
                ?>
                <div class="table_59 <?php echo $tabclass[($g_item_count % 2)]; ?>">
                    <span class="col_01">
                <?php
                if ($deep != 1) {
                    $jj = $deep;
                    while ($jj--) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    echo "&nbsp;|_";
                }
                ?>
                    </span>
                    <span class="col_01">
                <?php if (($params->get('show_cat_pic')) && ($cat_all[$i]->image != "")) { ?>
                            <img src="./images/stories/<?php echo $cat_all[$i]->image; ?>"
                               alt="picture for subcategory" height="48" width="48" />&nbsp;
                    <?php } else {
                    ?>
                            <a <?php echo "href='" . sefRelToAbs($link) . "'"; ?> class="category<?php
                             echo $params->get('pageclass_sfx'); ?>" style="text-decoration: none"><img
                              src="./components/com_realestatemanager/images/folder.png"
                               alt="picture for subcategory" height="48" width="48" /></a>&nbsp;
                <?php } ?>
                    </span>
                    <span class="col_02">
                        <a href="<?php echo sefRelToAbs($link); ?>"
                         class="category<?php echo $params->get('pageclass_sfx'); ?>">
                <?php echo $cat_all[$i]->title; ?>
                        </a>
                    </span>
                    <span class="col_03">
                <?php if ($cat_all[$i]->houses == '') echo "0";else echo $cat_all[$i]->houses; ?>
                    </span>
               
                </div>
                <?php
              if ($realestatemanager_configuration['subcategory']['show'])
                    HTML_realestatemanager::showInsertSubCategory($cat_all[$i]->id,
                     $cat_all, $params, $tabclass, $Itemid, $deep);
            }//end if ($id == $cat_all[$i]->parent_id)
        }//end for(...) 
    }

    /* function for ListCategories Big image */

    static function listCategoriesBigImg(&$params, $cat_all, $catid, $tabclass, $currentcat)
    {
        global $Itemid, $mosConfig_live_site;
        ?>
        <?php positions_rem($params->get('allcategories04')); ?>
        <div class="basictable_12 basictable">
          <div class="row_02 REL-row">
            <?php positions_rem($params->get('allcategories05')); ?>
            <?php HTML_realestatemanager::showInsertSubCategoryBigImg($catid, $cat_all, $params, $tabclass, $Itemid, 0); ?>
          </div>
        </div>
        <?php positions_rem($params->get('allcategories06')); ?>

    <?php
    }
    /*
     * function for show subcategory
     */

    static function showInsertSubCategoryBigImg($id, $cat_all, $params, $tabclass, $Itemid, $deep)
    {
      global $g_item_count, $realestatemanager_configuration, $mosConfig_live_site;
      $mosConfig_absolute_path = $GLOBALS['mosConfig_absolute_path'] = JPATH_SITE;
      $deep++;
      for ($i = 0; $i < count($cat_all); $i++) {
        if (($id == $cat_all[$i]->parent_id) && ($cat_all[$i]->display == 1))
        {
    //print_r($id . ':::::' . $cat_all[$i]->parent_id . ':::::' . $cat_all[$i]->display . '::::' . $tabclass[($g_item_count % 2)]);
          $g_item_count++;
          $link = 'index.php?option=com_realestatemanager&amp;task=alone_category&amp;catid=' .
          $cat_all[$i]->id . '&amp;Itemid=' . $Itemid;
    ?>
        <div class="row_img REL-collumn-lg-4 REL-collumn-md-4 REL-collumn-sm-6 REL-collumn-xs-12 <?php echo $tabclass[($g_item_count % 2)]; ?>">
          <div class="rem_cat_big" >
            <!-- <div class="rem_cat_img_container"> -->
    <?php
          if (($params->get('show_cat_pic')) && ($cat_all[$i]->image != "")) { ?>
              <a href="<?php echo sefRelToAbs($link);?>" class="category<?php
                  echo $params->get('pageclass_sfx'); ?>" style="text-decoration: none; " >

   <?php if (($params->get('show_cat_pic')) && ($cat_all[$i]->image != "")) { ?>
                            <img src="./images/stories/<?php echo $cat_all[$i]->image; ?>"
                               alt="picture for subcategory" height="48" width="48" />
                    <?php } 
                    ?>
              </a>
            <!--/div--><!-- end div class = rem_cat_img_container -->

            <?php } else
            {
                ?>
                <a href="<?php echo sefRelToAbs($link);?>" class="category<?php
                  echo $params->get('pageclass_sfx'); ?> cat_img" style="text-decoration: none; " >
                  <?php
                  if(!file_exists($mosConfig_absolute_path . '/components/com_realestatemanager/photos/folder.png'))
                    copy ( $mosConfig_absolute_path."/components/com_realestatemanager/images/folder.png" ,
                        $mosConfig_absolute_path . '/components/com_realestatemanager/photos/folder.png');
                $file_name = rem_picture_thumbnail( 'folder.png',
                  $realestatemanager_configuration['fotogallery']['width'],
                  $realestatemanager_configuration['fotogallery']['high']);
                $file=$mosConfig_live_site . '/components/com_realestatemanager/photos/'. $file_name;
                echo '<img alt="picture for subcategory" title="'.$cat_all[$i]->title.'" src="' .$file. '">';
                ?>
            </a>
            <?php } ?>
            <div class="bigm_title">
              <h4>
                <a href="<?php echo sefRelToAbs($link);?>">
                    <?php echo $cat_all[$i]->title ?>(<?php if ($cat_all[$i]->houses == '')
                    echo "0";else echo $cat_all[$i]->houses; ?>)
                </a>
              </h4>
            </div>
        <!-- /div--><!-- end div class = rem_cat_big  -->
        </div>
    </div>
    <?php
    }//end if ($id == $cat_all[$i]->parent_id)
  }//end for(...)
}

//end function showInsertSubCategory($id, $cat_all)
    


    static function showRequestBuyingHouses($option, $buy_requests, $pageNav, $Itemid) {

        global $my, $mosConfig_live_site, $mainframe, $doc;
        $session = JFactory::getSession();
        $arr = $session->get("array", "default");
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
         '/components/com_realestatemanager/includes/realestatemanager.css');
        ?>
        <form action="index.php" method="get" name="adminForm" id="adminForm">

            <table id="my_houses_buy" cellpadding="4" cellspacing="0" border="0"
             width="100%" class="basictable table_66">
                <tr>
                    <th align = "center" width="5%"><input type="checkbox" name="toggle"
                     value="" onClick="rem_checkAll(this);" /></th>
                    <th align = "center" width="5%">#</th>
                    <th align = "center" class="title" width="10%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_COMMENT; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_BUYING_ADRES; ?></th>
                </tr>
        <?php
        for ($i = 0, $n = count($buy_requests); $i < $n; $i++) {
            $row = $buy_requests[$i];
            ?>
                <tr class="row<?php echo $i % 2; ?>">
                    <td width="20">
                        <div align = "center">
                          <?php echo mosHTML::idBox($i, $row->id, 0, 'bid'); ?>
                        </div>
                    </td>
                    <td align = "center"><?php echo $row->id; ?></td>
                    <td align = "center"><?php echo $row->fk_houseid; ?></td>
                    <td align = "center"><?php echo $row->hlocation; ?></td>
                    <td align = "center"><?php echo $row->customer_name; ?></td>
                    <td align = "center" width="20%"><?php echo $row->customer_comment; ?></td>
                    <td align = "center">
                        <a href=mailto:"<?php echo $row->customer_email; ?>">
                          <?php echo $row->customer_email; ?>
                        </a>
                    </td>
                    <td align = "center"><?php echo $row->customer_phone; ?></td>
                </tr>
        <?php } ?>
            </table>

            <div id="pagenavig">
        <?php
        $paginations = $arr;
        if ($paginations && ($pageNav->total > $pageNav->limit)) {
            echo $pageNav->getPagesLinks();
        }
        ?>
            </div>

            <input type="hidden" name="option" value="<?php echo $option; ?>" />
        <?php
        if ($option != "com_realestatemanager") {
            ?>
                <input type="hidden" name="is_show_data" value="1" />
            <?php
        }
        ?>
            <input type="hidden" id="adminFormTaskInput" name="task" value="" />
            <input type="hidden" name="boxchecked" value="0" />
            <input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />
            <input type="button" name="acceptButton" value="<?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_ACCEPT; ?>"
             onclick="rem_buttonClickBuyRequest(this)"/>
            <input type="button" name="declineButton" value="<?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_DECLINE; ?>"
             onclick="rem_buttonClickBuyRequest(this)"/>
        </form>
        <?php
    }


  static function add_google_map(&$rows) {
     global $realestatemanager_configuration, $doc, $mosConfig_live_site, $database, $Itemid;
          $api_key = "key=" . $realestatemanager_configuration['api_key'] ; 
          $doc->addScript("//maps.googleapis.com/maps/api/js?$api_key"); ?>


      <script type="text/javascript">
      window.addEvent('domready', function() {
          initialize2();
      });

      function initialize2(){
          var map;
          var marker = new Array();
          var myOptions = {
              scrollwheel: false,
              zoomControlOptions: {
                  style: google.maps.ZoomControlStyle.LARGE
              },
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var imgCatalogPath = "<?php echo $mosConfig_live_site; ?>/components/com_realestatemanager/";
          var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
          var bounds = new google.maps.LatLngBounds ();

          var remove_id_list = [];
          <?php

          $newArr = explode(",", _REALESTATE_MANAGER_HOUSE_MARKER);
          $j = 0; 
          for ($i = 0;$i < count($rows);$i++) { 
            if ($rows[$i]->hlatitude && $rows[$i]->hlongitude) {
              $numPick = '';
              if (isset($newArr[$rows[$i]->property_type])) {
                  $numPick = $newArr[$rows[$i]->property_type];
              }
          ?>
      
             
  
                  

              var srcForPic = "<?php echo $numPick; ?>";
              var image = '';
              if(srcForPic.length){
                  var image = new google.maps.MarkerImage(imgCatalogPath + srcForPic,
                      new google.maps.Size(32, 32),
                      new google.maps.Point(0,0),
                      new google.maps.Point(16, 32));
              }
                  

         
              marker.push(new google.maps.Marker({
                  icon: image,
                  position: new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,
                   <?php echo $rows[$i]->hlongitude; ?>),
                  map: map,
                  title: "<?php echo $database->Quote($rows[$i]->htitle); ?>"
              }));

              bounds.extend(new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,
                <?php echo $rows[$i]->hlongitude; ?>));

    


              var infowindow  = new google.maps.InfoWindow({});
              google.maps.event.addListener(marker[<?php echo $j; ?>], 'mouseover', 
              function() {
                <?php
                if (strlen($rows[$i]->htitle) > 45)
                    $htitle = mb_substr($rows[$i]->htitle, 0, 25) . '...';
                else {
                    $htitle = $rows[$i]->htitle;
                }
                ?>
                var title =  "<?php echo $htitle ?>";
                <?php 
                  //for local images
                  $imageURL = ($rows[$i]->image_link);

                  if ($imageURL == '') $imageURL = _REALESTATE_MANAGER_NO_PICTURE_BIG;

                  $watermark_path = ($realestatemanager_configuration['watermark']['show'] == 1) ? 'watermark/' : '';
                  $watermark = ($realestatemanager_configuration['watermark']['show'] == 1) ? true : false;  
                      $file_name = rem_picture_thumbnail($imageURL,
                        $realestatemanager_configuration['fotogal']['width'],
                        $realestatemanager_configuration['fotogal']['high'], $watermark);
                      
                      $file = $mosConfig_live_site . '/components/com_realestatemanager/photos/' . $file_name;
                ?>
                var imgUrl =  "<?php echo $file; ?>";
                      
                <?php if(!incorrect_price($rows[$i]->price)):?>
                  var price =  "<?php echo $rows[$i]->price; ?>";
                  var priceunit =  "<?php echo $rows[$i]->priceunit; ?>";
                <?php else:?>
                  var price =  "<?php echo $rows[$i]->price; ?>";
                  var priceunit="";
                <?php endif;?>


             var contentStr = '<div>'+
                '<a onclick=window.open("<?php echo JRoute::_("index.php?option=com_realestatemanager&task=view&id={$rows[$i]->id}&catid={$rows[$i]->idcat}&Itemid={$Itemid}");?>") >'+
               '<img width = "100%" src = "'+imgUrl+'">'+
               '</a>' +
                  '</div>'+
                  '<div id="marker_link">'+
                      '<a onclick=window.open("<?php echo JRoute::_("index.php?option=com_realestatemanager&task=view&id={$rows[$i]->id}&catid={$rows[$i]->idcat}&Itemid={$Itemid}");?>") >' + title + '</a>'+
                  '</div>'+
                  '<div id="marker_price">'+
                      '<a onclick=window.open("<?php echo JRoute::_("index.php?option=com_realestatemanager&task=view&id={$rows[$i]->id}&catid={$rows[$i]->idcat}&Itemid={$Itemid}");?>") >' + price +' ' + priceunit + '</a>'+
              '</div>';

                   infowindow.setContent(contentStr);
                   infowindow.setOptions( { maxWidth: <?php echo $realestatemanager_configuration['fotogal']['width'] ; ?> });
                   infowindow.open(map,marker[<?php echo $j; ?>]);
              });


              var myLatlng = new google.maps.LatLng(<?php echo $rows[$i]->hlatitude;
               ?>,<?php echo $rows[$i]->hlongitude; ?>);
              var myZoom = <?php echo $rows[$i]->map_zoom; ?>;
          

              <?php
              $j++;
            }
          }
  ?>
          if (<?php echo $j; ?>>1) map.fitBounds(bounds);
          else if (<?php echo $j; ?>==1) {map.setCenter(myLatlng);map.setZoom(myZoom)}
          else {map.setCenter(new google.maps.LatLng(0,0));map.setZoom(0);}

        }
      </script>
  <?php    
  }


}

//class html
