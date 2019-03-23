<?php
/**
* @package      Module NewsGrid layout for Joomla!
* @version      $Id: 3d_ajax.php  kiennh $ 
* @author       Omegatheme
* @copyright    Copyright (C) 2009 - 2015 Omegatheme. All rights reserved.
* @license      GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<?php foreach ($list as $key => $item) :  ?>  
    <figure onclick="updatehits('<?php echo $item->id; ?>');" style="width: <?php echo $params->get('thumbnail_width') ?>px; height: <?php echo $params->get('thumbnail_height') ?>px;">
    <input type="hidden" name="hits_<?php echo $item->id; ?>" value=""/> 
    <?php           
    $images = json_decode($item->images);
    if (isset($images->image_intro) && !empty($images->image_intro)) {?>
        <img width="<?php echo (int)$params->get('thumbnail_width',150)>0?$params->get('thumbnail_width',150):'';?>" height="<?php echo (int)$params->get('thumbnail_height',150)>0?$params->get('thumbnail_height',150):'';?>"  src="<?php echo ModNewsGridHelper::getThumb($images->image_intro,$params->get('thumbnail_width',150),$params->get('thumbnail_height',150),true);?>" alt="<?php echo $item->title;?>" />
    <?php } else { 
        $img = ModNewsGridHelper::getfirstimage($item->introtext);  
        if($img) {
        ?>
        <img width="<?php echo (int)$params->get('thumbnail_width',150)>0?$params->get('thumbnail_width',150):'';?>" height="<?php echo (int)$params->get('thumbnail_height',150)>0?$params->get('thumbnail_height',150):'';?>" src="<?php echo ModNewsGridHelper::getThumb($img,$params->get('thumbnail_width',150),$params->get('thumbnail_height',150),true);?>" alt="<?php echo $item->title;?>" /> 
    <?php }
        else {
            ?>
            <img width="<?php echo (int)$params->get('thumbnail_width',150)>0?$params->get('thumbnail_width',150):'';?>" height="<?php echo (int)$params->get('thumbnail_height',150)>0?$params->get('thumbnail_height',150):'';?>"  src="<?php echo JURI::base().'modules/mod_newsgrid/assets/images/noimg.jpg'; ?>" alt="<?php echo $item->title;?>" />
            <?php
        }
        } ?> 
        <div><span><?php echo $item->title; ?></span></div>
<!--        <figcaption>
             <span class="icon icon-heart-empty"></span>
             <h3 class="grid-title"><?php echo $item->title; ?></h3>
             <hr />
             <div class="grid-date"><?php echo JHtml::_('date', $item->created, JText::_($params->get('show_date_format', 'DATE_FORMAT_LC3'))) ;?> <?php if($params->get('show_hits')) : ?>/ <?php echo JText::_('Views: ') .$item->hits; ?><?php endif; ?></div>
             <div class="grid-introtext"><?php $text = ModNewsGridHelper::_cleanIntrotext($item->introtext); echo substr($text, 0, strpos($text, ' ', 70)); ?></div>
        </figcaption>   -->
     </figure>               
<?php endforeach; ?>   

