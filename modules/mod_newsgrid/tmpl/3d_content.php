<?php
/**
* @package      Module NewsGrid layout for Joomla!
* @version      $Id: 3d_content.php  kiennh $ 
* @author       Omegatheme
* @copyright    Copyright (C) 2009 - 2015 Omegatheme. All rights reserved.
* @license      GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<?php foreach ($list as $key => $item) :  ?> 
<div>  
    <div class="dummy-img">
    <?php
    $images = json_decode($item->images);    
    if (isset($images->image_intro) && !empty($images->image_intro)) {?>
        <img src="<?php echo $images->image_intro ?>" alt="<?php echo $item->title;?>" class="responsive" /></figure> 
    <?php }  ?>              
    </div>
    <div class="dummy-text"><?php echo $item->introtext . $item->fulltext ?></div>
</div>
<?php endforeach; ?>        
        
 