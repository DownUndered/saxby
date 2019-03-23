<?php
/*
* @version 2.1
* @package RealEstateManager - property slideShow
* @copyright 2012 OrdaSoft
* @author 2012 Andrey Kvasnekskiy (akbet@ordasoft.com )
* @description RealEstateManager - property slideShow for Real Estate Manager Component
*/

// no direct access
defined('_JEXEC') or die ('Restricted access'); 

global $realestatemanager_configuration;

?>


<div id="remslideshow-module<?php echo $moduleclass_sfx; ?>" class="remslideshow-loader<?php echo $moduleclass_sfx; ?>" dir="ltr">
	<div id="remslideshow-loader<?php echo $mid; ?>" class="remslideshow-loader">
    <div id="remslideshow<?php echo $mid; ?>" class="remslideshow">
        <div id="slider-container<?php echo $mid; ?>" class="slider-container">
          <ul id="slider<?php echo $mid; ?>">
              <?php foreach ($slides as $slide) { ?>
                <li>
                  <?php if (($slide->link && $params->get('link_image',1)==1) || $params->get('link_image',1)==2) { ?>
              <a <?php echo ($params->get('link_image',1)==2 ? 'class="modal"' : ''); ?> href="<?php echo ($params->get('link_image',1)==2 ? $slide->image : $slide->link); ?>" target="<?php echo $slide->target; ?>">
            <?php } ?>
              <img src="<?php echo $slide->image; ?>" alt="<?php echo $slide->alt; ?>" />
            <?php if (($slide->link && $params->get('link_image',1)==1) || $params->get('link_image',1)==2) { ?>
              </a>
            <?php } ?>
            
            <?php if( $params->get('show_title') 
            || ($params->get('show_desc') && !empty($slide->description)) 
            || ($params->get('show_price') && !empty($slide->price)) 
            || ($params->get('show_address') && !empty($slide->address)) 
            ) { ?>
            <!-- Slide description area: START -->
            <div class="slide-desc">
              <div class="slide-desc-in">	
              <div class="slide-desc-bg"></div>
              <div class="slide-desc-text">
              <?php if($params->get('show_title')) { ?>
                <div class="slide-title">
                  <?php if($params->get('link_title') && $slide->link) { ?><a href="<?php echo $slide->link; ?>" target="<?php echo $slide->target; ?>"><?php } ?>
                    <?php echo $slide->title; ?>
                  <?php if($params->get('link_title') && $slide->link) { ?></a><?php } ?>
                </div>
              <?php } ?>   
              <?php if($params->get('show_price') && !empty($slide->price) ) { ?>
                <div class="slide-text">
                  <?php if($params->get('link_price') && $slide->link) { ?>
                  <a href="<?php echo $slide->link; ?>" target="<?php echo $slide->target; ?>">
<?php
                          if ($realestatemanager_configuration['price_unit_show'] == '1') {
                              if ($realestatemanager_configuration['sale_separator']) {
                                  echo formatMoney($slide->price, true, $realestatemanager_configuration['price_format'])
                                   . "&nbsp;" . $slide->priceunit ;
                              } else {
                                  echo  $slide->price . "&nbsp;" . $slide->priceunit;    
                              }
                          } else {
                              if ($realestatemanager_configuration['sale_separator']) {
                                  echo $slide->priceunit . "&nbsp;" .
                                   formatMoney($slide->price, true, $realestatemanager_configuration['price_format']);
                              } else {
                                  echo $slide->priceunit . "&nbsp;" . $slide->price ;
                              }
                          }    
?>                  
                  </a>                  
                  <?php } else { ?>
<?php
                          if ($realestatemanager_configuration['price_unit_show'] == '1') {
                              if ($realestatemanager_configuration['sale_separator']) {
                                  echo formatMoney($slide->price, true, $realestatemanager_configuration['price_format'])
                                   . "&nbsp;" . $slide->priceunit ;
                              } else {
                                  echo  $slide->price . "&nbsp;" . $slide->priceunit;    
                              }
                          } else {
                              if ($realestatemanager_configuration['sale_separator']) {
                                  echo $slide->priceunit . "&nbsp;" .
                                   formatMoney($slide->price, true, $realestatemanager_configuration['price_format']);
                              } else {
                                  echo $slide->priceunit . "&nbsp;" . $slide->price ;
                              }
                          }                  
?>                  
                  <?php } ?>
                </div>
              <?php } ?>
              <?php if($params->get('show_address')  && !empty($slide->address) ) { ?>
                <div class="slide-text">
                  <?php if($params->get('link_address') && $slide->link) { ?>
                  <a href="<?php echo $slide->link; ?>" target="<?php echo $slide->target; ?>">
                    <?php echo strip_tags($slide->address); ?>
                  </a>
                  <?php } else { ?>
                    <?php echo strip_tags($slide->address); ?>
                  <?php } ?>
                </div>
              <?php } ?>
              <?php if($params->get('show_desc')) { ?>
                <div class="slide-text">
                  <?php if($params->get('link_desc') && $slide->link) { ?>
                  <a href="<?php echo $slide->link; ?>" target="<?php echo $slide->target; ?>">
                    <?php echo strip_tags($slide->description); ?>
                  </a>
                  <?php } else { ?>
                    <?php echo strip_tags($slide->description); ?>
                  <?php } ?>
                </div>
              <?php } ?>
              
              <div style="clear: both"></div>
              </div>
              </div>
            </div>
            <!-- Slide description area: END -->
            <?php } ?>
            
          </li>
                <?php } ?>
        	</ul>
        </div>
        <div id="navigation<?php echo $mid; ?>" class="navigation-container">
          <img id="prev<?php echo $mid; ?>" class="prev-button" src="<?php echo $navigation->prev; ?>" alt="<?php echo JText::_('MOD_REMSLIDESHOW_PREVIOUS'); ?>" />
      <img id="next<?php echo $mid; ?>" class="next-button" src="<?php echo $navigation->next; ?>" alt="<?php echo JText::_('MOD_REMSLIDESHOW_NEXT'); ?>" />
      <img id="play<?php echo $mid; ?>" class="play-button" src="<?php echo $navigation->play; ?>" alt="<?php echo JText::_('MOD_REMSLIDESHOW_PLAY'); ?>" />
      <img id="pause<?php echo $mid; ?>" class="pause-button" src="<?php echo $navigation->pause; ?>" alt="<?php echo JText::_('MOD_REMSLIDESHOW_PAUSE'); ?>" />
        </div>
    <div id="cust-navigation<?php echo $mid; ?>" class="navigation-container-custom">
      <?php $i = 0; foreach ($slides as $slide) { ?>
        <span class="load-button<?php if ($i == 0) echo ' load-button-active'; ?>"></span>
      <?php if(count($slides) == $i + $count) break; else $i++; } ?>
        </div>
    </div>
  </div>

  <div style="clear: both"></div>
</div>

