/**
 * @name		Page Builder CK
 * @package		com_pagebuilderck
 * @copyright	Copyright (C) 2015. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - http://www.template-creator.com - http://www.joomlack.fr
 */


var $ck = jQuery.noConflict();

$ck(document).ready(function(){
	ckInitTemplateFrontEdition();
	// var workspaceparent = $ck('#workspaceparentck');
	// $ck(workspaceparent.parents('.controls')[0]).css('margin-left', '0');
});

// function ckModuleEditFullScreen() {
	// $ck('.pagebuilderckfrontend').toggleClass('ckfrontendfullwidth');
// }

function ckInitTemplateFrontEdition() {
	$ck('.tck-edition').each(function() {
		var nbpbckmodules = $ck(this).find('.tck-module-container[data-type="mod_pagebuilderck"]').length;
		if (nbpbckmodules === 0) {
			$ck(this).addClass('tck-edition-empty');
			ckAddNewModuleButton($ck(this));
		}
	});
}

function ckAddNewModuleButton(bloc) {
	bloc.append('<div class="tck-more" onclick="ckAddNewPagebuilderModule(this)" title="' + Joomla.JText._('CK_ADD_NEW_MODULE', 'Add a new Page Builder CK module') + '">+</div>');
}

function ckAddNewPagebuilderModule(btn) {
	var container = $ck($ck(btn).parents('.tck-edition')[0]);
	var position = container.attr('data-position');
	var myurl = 'index.php?option=com_pagebuilderck&task=templateedition.createmodule&' + PAGEBUILDERCK_TOKEN + '=1';
	$ck.ajax({
	type: "POST",
	url: myurl,
	dataType: 'json',
	data: {
		position: position
		}
	}).done(function(result) {
		container.append('<div class="workspaceck pbck-module-edition" data-id="' + result.id + '"></div>');
		var module = container.find('[data-id="' + result.id + '"]');
		ckAddRow(false, module);
		initWorkspace(module);
		btn.remove();
		container.removeClass('tck-edition-empty');
	}).fail(function() {
		alert('A problem occured when trying to create the module. Please retry.');
	});
}

function ckTemplateEditionSave() {
	$ck('.pbck-module-edition').each(function() {
		var module = $ck(this);
		var moduleid = module.attr('data-id');
		var tmp = module.html();
		// var tmp = module.clone();
		ckCleanInterfaceBeforeSave(module);
		var modulehtml = module.html();
		initWorkspace(module);
		// module.html(tmp);

		var myurl = 'index.php?option=com_pagebuilderck&task=templateedition.savemodule&' + PAGEBUILDERCK_TOKEN + '=1';
		$ck.ajax({
		type: "POST",
		url: myurl,
		data: {
			html: modulehtml,
			id: moduleid
			}
		}).done(function(result) {
			
		}).fail(function() {
			alert('A problem occured when trying to save the module ID ' + moduleid + '. Please retry.');
			// $ck(currentbloc).remove();
		});
	});
}