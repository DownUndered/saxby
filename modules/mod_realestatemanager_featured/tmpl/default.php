<?php
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Free
 *
 **/

defined( '_JEXEC' ) or die( 'Restricted access' );
?> 



<div class="realestatemanager<?php if (isset($class_suffix)) echo $class_suffix; ?>">
    <div class="basictable<?php echo "-".$class_suffix; ?> basictable"> 
    <?php $formatPrice =  $params->get('optPricePosition',0) ;?>
    <?php
        $rank_count = 0;
        $span = 0;
        if ($status!=0){
            $span++;
        }
        if ($show_hits!=0){
            $span++;
        }

        if ($displaytype==1){ // Display Horizontal
    ?>
            <div class="featured_houses">
    <?php
        }

        foreach ($houses as $row){

            $comment = strip_tags($row->description);
            $prevwords = count(explode(" ",$comment));
            if(trim($g_words == "" )) $words = $prevwords;
            else $words = intval($g_words);
            $text = implode(" ", array_slice(explode(" ",$comment), 0, $words));
            if (count(explode(" ",$text))<$prevwords){
                $text .= "";
            }

            $query = "UPDATE #__rem_houses SET featured_shows = featured_shows-1 ".
              " WHERE featured_shows > 0 and id = ".$row->id . " ;";
            $database->setQuery($query);
            $database->query();

            $img = "";
            $rank_count = $rank_count + 1; //start ranking
            $link1 ="index.php?option=com_realestatemanager&task=view&id=".$row->id.
              "&catid=".$row->catid."&Itemid=".$Itemid;

                    $imageURL = $row->image_link;

                if ($imageURL!=''){
                    $imageURL = searchPicture_rem ($image_source_type,$imageURL);
                    $imageURL = JURI::root().$imageURL;
                    
            } else $imageURL = "./components/com_realestatemanager/images/no-img_eng_big.gif";
            //print_r($height_auto);exit;
			if ($height_auto == 0) {
            $img='<a href="'.JRoute::_($link1, false).'" target="_self"> <img src="'.$imageURL.'" alt="'.$row->htitle.'" 
		border="0" style="height: auto; width: 100%" ;/></a>'; }

    else {
        $img='<a href="'.JRoute::_($link1, false).'" target="_self"> <img src="'.$imageURL.'" alt="'.$row->htitle.'" 
    border="0" style="height: '.$image_height.'px; width: 100%;" /></a>';
    }
          ?>

<?php
            if ($displaytype == 1){
                // Display Horizontal
    ?>
	
<div class="featured_houses_block" style="width:<?php echo $item_width.'px'?>; vertical-align:top;">
    <div style="position:relative">
    <?php
        if ($show_image == 1){
            echo $img;
         }
    ?>

    <?php 
      if ($row->listing_status && $listing_status_on){
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
        if ($status == 1) {
                if ($row->listing_type == 1) {
                    echo _REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT;
                }
                if($row->listing_type == 2){
                    echo _REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE;
                }
        }
?>
                </div><!-- col_rent -->
    </div>
    <div class="feature_texthouse">
        <h4 class="featured_houses_title">
<?php
            if ($row->published!=1){
                $msg = " [ <tt style='color:red;font-size:10px;'>unpublished</tt> ] ";
                echo "<a target='' href='' style='cursor:default;' onClick='return false;'>".$row->htitle."</a>";
            } else{
                $msg = ''; 
                echo "<a href='".JRoute::_($link1, false)."' target='_self'>".$row->htitle."</a>";
            }
?>
        </h4>
    <?php

            if ($location == 1){
                echo "<div class='featured_houses_location'><i ".
                  "class='fa fa-map-marker'></i> {$row->hlocation}&nbsp;</div>";
            }
            if ($categories == 1){
              $link2 = 'index.php?option=com_realestatemanager&amp;task=showCategory&amp;catid='
                 . $row->catid[0] . '&amp;Itemid=' . $Itemid .
                  '&amp;view=alone_category&amp;module=' . $module->module;
    ?>
              <div class="featured_houses_category">
<?php 
                $cattitles=Array();
                $query = "SELECT c.id AS catid
                        \n FROM #__rem_main_categories AS c
                        \n LEFT JOIN #__rem_categories AS hc ON hc.idcat=c.id
                        \n LEFT JOIN #__rem_houses AS h ON h.id=hc.iditem 
                        \n WHERE h.id =" . $row->id;
                $database->setQuery($query);
                $cattitles= $database->loadColumn();

                $row->cattitle = array();
                foreach($cattitles as $key => $value) {
                    $query = "SELECT title FROM #__rem_main_categories WHERE id =" . $value;
                    $database->setQuery($query);
                    $row->cattitle[$key] = $database->loadResult();
                    $link2 = 'index.php?option=com_realestatemanager&amp;task=showCategory&amp;catid='
                     . $cattitles[$key] . '&amp;Itemid=' . $Itemid .
                      '&amp;view=alone_category&amp;module=' . $module->module;
    ?>
                        <i class='fa fa-tag'></i>
                        <a href="<?php echo sefRelToAbs($link2); ?>"
                         class="category<?php echo $params->get('pageclass_sfx'); ?>">
                        <?php echo $row->cattitle[$key];?></a>
                        <?php
                }
    ?>
              </div>
    <?php   }
            if ($features == 1){
                    if (trim($row->house_size)) { 
                    echo "<div class='featured_houses_size featured_houses_inline'>"
                      ."<i class='fa fa-expand'></i> ".trim($row->house_size)."&nbsp"
                      ._REALESTATE_MANAGER_LABEL_SIZE_SUFFIX . "</div>";
                }
                    if (trim($row->rooms)) {
                    echo "<div class='featured_houses_rooms featured_houses_inline'>"
                      ."<i class='fa fa-building-o'></i> " . _REALESTATE_MANAGER_LABEL_ROOMS .
                       ': ' ."{$row->rooms}&nbsp;</div>";
                }
                    if (trim($row->year)) {
                    echo "<div class='featured_houses_year featured_houses_inline'>".
                      "<i class='fa fa-tint'></i> " . _REALESTATE_MANAGER_LABEL_BUILD_YEAR .
                       ': ' ."{$row->year}&nbsp;</div>";
                }
                    if (trim($row->bedrooms)) {
                    echo "<div class='featured_houses_bedrooms featured_houses_inline'>".
                      "<i class='fa fa-inbox'></i> " . _REALESTATE_MANAGER_LABEL_BEDROOMS .
                       ': ' ."{$row->bedrooms}&nbsp;</div>";
                }
                }
            if ($show_hits == 1){
                echo "<div class='featured_houses_hits featured_houses_inline'>".
                  "<i class='fa fa-eye'></i> " . _REALESTATE_MANAGER_LABEL_HITS .
                   ': ' ."{$row->hits}</div>";
                }
            if ($description == 1){
                echo "<div class='featured_houses_description'>{$text}...</div>";
                }
        ?>
    </div>
<?php if ($price == 1 || $view_listing == 1) { ?>
            <div class="rem_house_viewlist">
                <a href='<?php echo JRoute::_($link1, false); ?>' target='_self' style='display: block'>
        <?php               
                        if ($price == 1){
                            echo "<div class='featured_houses_price '>" ;

                            if(!incorrect_price($row->price)){

                            if ($realestatemanager_configuration['price_unit_show'] == '1') {



                                if ($realestatemanager_configuration['sale_separator']) {
                                    echo formatMoney($row->price, true, $realestatemanager_configuration['price_format'])
                                     . "&nbsp;" . $row->priceunit ;
                                } else {
                                    echo  $row->price . "&nbsp;" . $row->priceunit;    
                                }


                            } else {

                                if ($realestatemanager_configuration['sale_separator']) {
                                    echo $row->priceunit . "&nbsp;" .
                                     formatMoney($row->price, true, $realestatemanager_configuration['price_format']);
                                } else {
                                    echo $row->priceunit . "&nbsp;" . $row->price ;
                                }

                            }

                          }else{
                              echo $row->price;
                          }


                            echo "</div>" ;
                        }                        
                        if ($view_listing == 1){
                            echo "<div class='featured_houses_viewlisting'>"
                            . _REALESTATE_MANAGER_LABEL_VIEW_LISTING . "</div>";
                        }
        ?>
                </a>
                <div style="clear: both;"></div>
            </div>
<?php } ?>
</div>
    <?php
            } else{
                //Display Vertical
    ?>
<div class="featured_houses_line">
    <div style="position:relative; display:inline-block; float:left; margin-right:15px; width: <?php echo $container_image_width.'px'?>;">
    <?php
           if ($show_image == 1){ 
		   
		   echo $img;
           }   
    ?>
    <?php 
      if ($row->listing_status && $listing_status_on){
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
                    if ($status == 1) {
                            if ($row->listing_type == 1) {
                                echo _REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT;
                            }
                            if($row->listing_type == 2){
                                echo _REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE;
                            }
                    }
            ?>
        </div><!-- col_rent -->
    </div>
    <h4 class="featured_list_title">
<?php
        if ($row->published!=1){
            $msg = " [ <tt style='color:red;font-size:10px;'>unpublished</tt> ] ";
            echo "<a target='' href='' style='cursor:default;' ".
              " onClick='return false;'>".$row->htitle."</a>";
        } else{
            $msg = ''; 
            echo "<a href='".JRoute::_($link1, false)."' target='_self' >".$row->htitle."</a>";
        }
?>
    </h4>
    <?php
    if ($price == 1){
        echo "<div class='featured_list_price '>" ;

        if(!incorrect_price($row->price)){

        if ($realestatemanager_configuration['price_unit_show'] == '1') {
            if ($realestatemanager_configuration['sale_separator']) {
                echo formatMoney($row->price, true, $realestatemanager_configuration['price_format'])
                 . "&nbsp;" . $row->priceunit ;
            } else {
                echo  $row->price . "&nbsp;" . $row->priceunit;    
            }
        } else {
            if ($realestatemanager_configuration['sale_separator']) {
                echo $row->priceunit . "&nbsp;" .
                 formatMoney($row->price, true, $realestatemanager_configuration['price_format']);
            } else {
                echo $row->priceunit . "&nbsp;" . $row->price ;
            }
        }              

      }else{
        echo $row->price;
      }

        echo "</div>" ;
    }

    if ($location == 1){
        echo "<div class='featured_list_location'>".
          "<i class='fa fa-map-marker'></i> {$row->hlocation}&nbsp;</div>";
    }
    if ($description == 1){
        echo "<div class='featured_list_description'>{$text}...</div>";
    }
    if ($features == 1 || $categories == 1 || $show_hits == 1 ){
    ?>
       <div class="rem_type_catlist">
          <?php
          if ($categories == 1){
                  $link2 = 'index.php?option=com_realestatemanager&amp;task=showCategory&amp;catid='
                   . $row->catid[0] . '&amp;Itemid=' . $Itemid .
                    '&amp;view=alone_category&amp;module=' . $module->module;
          ?>
                  <div class="featured_list_category featured_list_inline">
              <?php 


                  $cattitles=Array();
                  $query = "SELECT c.id AS catid
                          \n FROM #__rem_main_categories AS c
                          \n LEFT JOIN #__rem_categories AS hc ON hc.idcat=c.id
                          \n LEFT JOIN #__rem_houses AS h ON h.id=hc.iditem 
                          \n WHERE h.id =" . $row->id;
                  $database->setQuery($query);
                  $cattitles= $database->loadColumn();

                  $row->cattitle = array();
                  foreach($cattitles as $key => $value) {
                      $query = "SELECT title FROM #__rem_main_categories WHERE id =" . $value;
                      $database->setQuery($query);
                      $row->cattitle[$key] = $database->loadResult();
                      $link2 = 'index.php?option=com_realestatemanager&amp;task=showCategory&amp;catid='
                       . $cattitles[$key] . '&amp;Itemid=' . $Itemid .
                        '&amp;view=alone_category&amp;module=' . $module->module;
              ?>
                          <i class='fa fa-tag'></i>
                          <a href="<?php echo sefRelToAbs($link2); ?>" 
                            class="category<?php echo $params->get('pageclass_sfx'); ?>">
                          <?php echo $row->cattitle[$key]; ?>
                          </a>
                          <?php
                  }
              ?>
                  </div>
    <?php }
          if ($features == 1){
                  if (trim($row->house_size)) {  
                    echo "<div class='featured_houses_size featured_list_inline '>"
                      ."<i class='fa fa-expand'></i> ".trim($row->house_size).
                      "&nbsp"._REALESTATE_MANAGER_LABEL_SIZE_SUFFIX . "</div>";
              }
                  if (trim($row->rooms)) {
                    echo "<div class='featured_houses_rooms featured_list_inline '>"
                      ."<i class='fa fa-building-o'></i> " . 
                      _REALESTATE_MANAGER_LABEL_ROOMS . ': ' ."{$row->rooms}</div>";
              }
                  if (trim($row->year)) {
                    echo "<div class='featured_houses_bathrooms featured_list_inline '>"
                      ."<i class='fa fa-tint'></i> " . _REALESTATE_MANAGER_LABEL_BUILD_YEAR . 
                      ': ' ."{$row->year}</div>";
              }
                  if (trim($row->bedrooms)) {
                    echo "<div class='featured_houses_bedrooms featured_list_inline '>".
                      "<i class='fa fa-inbox'></i> " . _REALESTATE_MANAGER_LABEL_BEDROOMS . 
                      ': ' ."{$row->bedrooms}</div>";
              }         
          }
          if ($show_hits == 1){
                  echo "<div class='featured_houses_hits featured_list_inline'>".
                  "<i class='fa fa-eye'></i> " . _REALESTATE_MANAGER_LABEL_HITS .
                   ': ' ."{$row->hits}</div>";
          }
          ?>
      </div>
      
<?php 
    }
    if ($view_listing == 1){
        echo "<div class='featured_list_viewlisting'><a href='".
          JRoute::_($link1, false)."' target='_self'>"
          . _REALESTATE_MANAGER_LABEL_VIEW_LISTING . "</a></div>";
    }
    ?>
    <div style="clear: both;"></div>                 
  </div>
    <?php
            }
        }
        if ($displaytype==1){ // Display Horizontal
    ?>
   </div>
    <?php
        }
    ?>
            <div>&nbsp;</div>
    </div>
</div>

