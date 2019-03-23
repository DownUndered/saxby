<?php
/**
* @package      Module NewsGrid layout for Joomla!
* @version      $Id: animation_content.php  kiennh $ 
* @author       Omegatheme
* @copyright    Copyright (C) 2009 - 2015 Omegatheme. All rights reserved.
* @license      GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php foreach ($list as $idx => $item) :  ?>
<article class="content__item">
    <h2 class="title title--full"><?php echo $item->title; ?></h2>
    <div class="meta meta--full"><?php echo $item->introtext . $item->fulltext ?></div>
</article>
<?php endforeach; ?>
