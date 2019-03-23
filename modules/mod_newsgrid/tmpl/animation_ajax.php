<?php
/**
* @package      Module NewsGrid layout for Joomla!
* @version      $Id: animation_ajax.php  kiennh $ 
* @author       Omegatheme
* @copyright    Copyright (C) 2009 - 2015 Omegatheme. All rights reserved.
* @license      GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<?php foreach ($list as $idx => $item) : ?>   
<figure onclick="updatehits('<?php echo $item->id; ?>');" style="width: <?php echo $params->get('thumbnail_width') ?>px;">
    <input type="hidden" name="hits_<?php echo $item->id; ?>" value=""/>  
    <span class="icon icon-heart-empty"></span> 
    <h2 class="title"><?php echo $item->title; ?></h2>  
    <hr />
    <?php if($params->get('show_category')) : ?>
    <span class="category"><?php echo $item->category_title; ?></span>
    <?php endif; ?>
    <div class="meta">
        <span class="meta__date"><i class="icon icon-calendar"></i> <?php echo JHtml::_('date', $item->created, JText::_($params->get('show_date_format', 'DATE_FORMAT_LC3'))) ;?></span>
        <span class="meta__view"><i class="icon icon-eye-open"></i> <?php echo JText::_('Views: ') .$item->hits ?></span>
    </div> 
    <figcaption>
         <span class="icon icon-heart-empty"></span>
         <h3 class="grid-title"><?php echo $item->title; ?></h3>
         <hr />
         <?php if($params->get('show_category')) : ?>
         <span class="category"><?php echo $item->category_title; ?></span>
         <?php endif; ?>
         <!--<div class="grid-introtext"><?php $text = ModNewsGridHelper::_cleanIntrotext($item->introtext . $item->fulltext); echo substr($text, 0, strpos($text, ' ', 70)); ?></div>  -->
         <div class="grid-date">
             <span class="meta__date"><i class="icon icon-calendar"></i> <?php echo JHtml::_('date', $item->created, JText::_($params->get('show_date_format', 'DATE_FORMAT_LC3'))) ;?> </span>
             <?php if($params->get('show_hits')) : ?> 
             <span class="meta__view"><i class="icon icon-eye-open"></i> <?php echo JText::_('Views: ') .$item->hits; ?></span>
             <?php endif; ?>
         </div>
    </figcaption>    
</figure> 
<?php endforeach; ?> 