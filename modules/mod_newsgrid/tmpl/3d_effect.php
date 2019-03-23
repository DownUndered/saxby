<?php
/**
* @package      Module NewsGrid layout for Joomla!
* @version      $Id: a3d_effect.php  kiennh $ 
* @author       Omegatheme
* @copyright    Copyright (C) 2009 - 2015 Omegatheme. All rights reserved.
* @license      GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

/*
Class suffixes (none for default): timeline-left | timeline-right
*/
$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_newsgrid/assets/css/newsgrid.css');  
$doc->addScript('modules/mod_newsgrid/assets/js/modernizr.custom.js');   
?>  
<div class="newsgrid">
    <section class="grid3d <?php echo $params->get('grid_style') ?>" id="grid3d<?php echo $module->id;?>">
        <div class="grid-wrap">
            <div class="grid">    
                <?php require JModuleHelper::getLayoutPath('mod_newsgrid', '3d_ajax');?>   
            </div>
        </div>
        <div class="content">       
            <?php require JModuleHelper::getLayoutPath('mod_newsgrid', '3d_content');?> 
            <span class="loading"></span>
            <span class="icon close-content"></span>                 
        </div>           
        <input type="hidden" name="count_<?php echo $module->id; ?>" value="<?php echo $params->get('count', 5); ?>"/>
    </section>  

    <div class="clearfix"></div>
    <?php
	/* REMOVING Copyright warning 
		The Joomla Module: News Grid is free for all websites. We're welcome any developer want to contributes the module. But you must keep our credits that is the very tiny image under the module. If you want to remove it, you may visit http://www.omegatheme.com/member/signup/additional to purchase the Removing copyrights, then you can free your self to remove it. Thank you very much. Omegatheme.com
	*/
	?>
    <div class="timeline_footer">
        <a href="#" id="timeline_loadmore_<?php echo $module->id; ?>" class="timeline-more-ajax btn btn-info"><?php echo JText::_('JTL_VIEW_MORE') ?></a>
        <a href="//wwww.omegatheme.com/joomla-templates" class="powered" title="Joomla Module News Grid powered by OmegaTheme.com">
            <img src="//www.omegatheme.com/images/logo_embed.png"  title="Joomla Module News Grid powered by OmegaTheme.com"  alt="Joomla Module News Grid powered by OmegaTheme.com">
        </a>
        <?php /*********/ ?>
    </div>
</div>
<script src="<?php //echo Juri::base(); ?>modules/mod_newsgrid/assets/js/classie.js"></script>           
<script src="<?php echo Juri::base(); ?>modules/mod_newsgrid/assets/js/helper.js"></script>           
<script src="<?php echo Juri::base(); ?>modules/mod_newsgrid/assets/js/grid3d.js"></script>           
<script src="<?php echo Juri::base(); ?>modules/mod_newsgrid/assets/js/jquery.hoverdir.js"></script>           
<script type="text/javascript">                           
    jQuery(function($) {
        $('div.grid > figure ').each( function() { $(this).hoverdir(); } );
    });       
    function init3DEffects(){
        return new grid3D(document.getElementById('grid3d<?php echo $module->id;?>'));
    }
    
    function updatehits(id) {
            jQuery.get('<?php echo JURI::base(); ?>index.php?option=com_ajax&module=newsgrid&format=json&cmd=update&tmpl=component', {data: id}, {});    
    }    
(function ($) {
    var f3DEffects = init3DEffects();          
    $(document).on('click', '#timeline_loadmore_<?php echo $module->id; ?>', function (e) {  
        var value = $('input[name=count_<?php echo $module->id; ?>]').val(),
        request = {
        'option' : 'com_ajax',
        'module' : 'newsgrid',
        'cmd' : 'load_3d',
        'data' : '<?php echo base64_encode($module->title); ?>',
        'format' : 'json',
        'start': value,
        'Itemid': '<?php echo JFactory::getApplication()->input->get('Itemid'); ?>'
        };
        $.ajax({
            type : 'GET',
            data : request,
            success: function (response) {
                var data = $.parseJSON(response.data);  
                if (data){   
                    $(data.figure).appendTo($("#grid3d<?php echo $module->id;?> .grid"));    
                    $(data.content).insertBefore($("#grid3d<?php echo $module->id;?> .content .loading"));    
                    $('input[name=count_<?php echo $module->id; ?>]').val($("#grid3d<?php echo $module->id;?> .grid figure").size()); 
                    
                    //f3DEffects.gridItems = [].slice.call( f3DEffects.grid.children );
                     f3DEffects.fInit();
                     $('div.grid > figure ').each( function() { $(this).hoverdir(); } );
                    //f3DEffects = init3DEffects();
                }                                          

            },
            error: function(response) {
                var data = '',
                obj = $.parseJSON(response.responseText);
                for(key in obj){
                    data = data + ' ' + obj[key] + '<br/>';
                }
                //console.log(data);
            }
        });
        return false;
    });
})(jQuery)    
      
</script>   


