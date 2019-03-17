<?php
/**
 * @copyright	Copyright (C) 2019. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - https://www.template-creator.com - https://www.joomlack.fr
 */

defined('_JEXEC') or die;

use \Pagebuilderck\CKtext;

$iframeurl = str_replace('&tckedition=1', '', urldecode($this->input->get('url', '', 'string')));
$doc = JFactory::getDocument();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $doc->language; ?>" lang="<?php echo $doc->language; ?>" dir="<?php echo $doc->direction; ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<base href="<?php echo PAGEBUILDERCK_ADMIN_URL ?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Expires" content="Tue, 01 Jan 1995 12:12:12 GMT">
<meta http-equiv="Pragma" content="no-cache">
<title>Page Builder CK</title>

<link rel="stylesheet"  href="<?php echo PAGEBUILDERCK_MEDIA_URI ?>/assets/ckframework.css" type="text/css" />
<link rel="stylesheet"  href="<?php echo PAGEBUILDERCK_MEDIA_URI ?>/assets/frontedition.css" type="text/css" />
<script src="<?php echo PAGEBUILDERCK_MEDIA_URI ?>/assets/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo PAGEBUILDERCK_MEDIA_URI ?>/assets/ckframework.js" type="text/javascript"></script>
<script src="<?php echo PAGEBUILDERCK_MEDIA_URI ?>/assets/frontedition.js" type="text/javascript"></script>
<style>
body {
	padding-left: 310px !important;
	padding-top: 66px !important;
}

html {
	/*padding-top: 66px! important;*/
	height: 100%;
}

.ckpage {
	position: relative;
	top: 66px;
}

iframe {
	height: calc(100vh - 66px);
	width: 100%;
	border: none;
}

#menuck {
	top: 65px;
}

#ckheader .ckheadermenu .ckheadermenuitem {
	font-size: 13px;
	line-height: 20px;
}

html {
	padding-top: 66px! important;
}

body.tck-edition-body #ckheader {
	z-index: 100000;
}

div.menuck > .inner {
	height: calc(100vh - 115px);
}

/* disable Joomla front edition buttons */
a.jmodedit {
	display: none !important;
}
</style>
</head>
<body>
<div id="ckheader">
	<div class="ckheaderlogo"><a href="https://www.joomlack.fr" target="_blank"><img width="35" height="35" title="JoomlaCK" src="<?php echo JUri::root(true) ?>/media/com_pagebuilderck/images/logo_ck.png" /></a></div>
	<div class="ckheadermenu">
		<a href="<?php echo JRoute::_('index.php?option=com_templateck'); ?>" class="ckheadermenuitem ckcancel" >
			<span class="fa fa-times"></span>
			<span class="ckheadermenuitemtext"><?php echo JText::_('CK_EXIT') ?></span>
		</a>
		<a href="javascript:void(0);" class="ckheadermenuitem cksave" onclick="ckTemplateEditionSave()">
			<span class="fa fa-check"></span>
			<span class="ckheadermenuitemtext"><?php echo JText::_('CK_SAVE') ?></span>
		</a>
	</div>
</div>
<?php
// loads the language files from the frontend
$lang	= JFactory::getLanguage();
$lang->load('com_pagebuilderck', JPATH_SITE . '/components/com_pagebuilderck', $lang->getTag(), false);
$editor = JFactory::getConfig()->get('editor') == 'jce' ? 'jce' : 'tinymce';
$editor = JEditor::getInstance($editor);
$editor->display('ckeditor', $html = '', $width = '', $height = '200px', $col='', $row='', $buttons = true, $id = 'ckeditor');
include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/menustyles.php';
include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/stylescss.php';
include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/ckeditor.php';
include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/pagebuilderck.php';
include_once(JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/views/page/tmpl/default_include.php');
include_once(JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/views/page/tmpl/default_menu.php');
?>

- CHECK double authentif, si user logué en admin, sinon on jette la requête et on redirige sur doc
- pb si user pas logué, CKText not found
- charger ckstylescontainer
- mettre structure du template dans le panneau gauche

	<div id="ckleftpanel" class="ckleftpanel">
	</div>
	<div id="ckedition" class="ckleftpanel">
		
	</div>
	<div id="ckhtmlcontainer" class="focusbar focus">
		<div class="cktemplatepreview">
			<iframe id="cktemplatepreview" src="<?php echo $iframeurl ?>"></iframe>
		</div>
	</div>
	<script>
		
	$ck('iframe#cktemplatepreview').load(function() {
		iframe = $ck('iframe#cktemplatepreview').contents();
		ckInitFrontendInterface();
	});

	//document.getElementById('ckmodulesmanager_preview_iframe').contentWindow.location.reload();
	//document.getElementById('ckmodulesmanager_preview_iframe').contentWindow.location.reload(true);
	</script>
<div id="ckpopup"></div>
</body>
</html>
<?php
exit;
