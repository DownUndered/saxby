/**
 * @copyright	Copyright (C) 2018 Cedric KEIFLIN alias ced1870
 * https://www.joomlack.fr
 * Module Slideshow CK
 * @license		GNU/GPL
 * */

jQuery(document).ready(function() {
	ckFrontEdition();
});

var $ck = $ck || jQuery.noConflict();

// tool to improve the edition when viewing in front end
function ckFrontEdition() {
	$ck('#options .accordion-heading .accordion-toggle > img, .ckslideaccordeonbutton img').each(function() {
		var newsrc = $ck(this).attr('src').replace('../', JURI);
		$ck(this).attr('src', newsrc);
	});
//	$ck('.ckslideaccordeonbutton img').each(function() {
//		var newsrc = $ck(this).attr('src').replace('../', JURI);
//		$ck(this).attr('src', newsrc);
//	});
	$ck('#collapse2 .controls').css('margin-left', '0');
	$ck('#collapse2 .control-label').css('display', 'none');
}