<?php
/**
 * @name		Page Builder CK
 * @package		com_pagebuilderck
 * @copyright	Copyright (C) 2015. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - http://www.template-creator.com - http://www.joomlack.fr
 */

defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/ckcontroller.php';

Use Pagebuilderck\CKFof;
Use Pagebuilderck\CKController;

class PagebuilderckControllerFrontedition extends CKController
{

	public function createModule() {
		// security check
		PagebuilderckHelper::checkAjaxToken();

		$position = $this->input->get('position', 'position-8');

		// create the module
		$data = array();
		$data['id'] = 0;
		$data['title'] = 'Page Builder CK';
		$data['ordering'] = 0;
		$data['checked_out'] = 0;
		$data['published'] = 1;
		$data['position'] = $position;
		$data['module'] = 'mod_pagebuilderck';
		$data['access'] = 1;
		$data['showtitle'] = 0;
		$data['clint_id'] = 0;
		$data['language'] = '*';
		$data['params'] = '';

		$id = CKFof::dbStore('#__modules', $data);
		// if error, return
		if (! $id) {
			echo '{"id" : "0"}';
			exit;
		}

		// assign to all pages
		$data = array();
		$data['id'] = 0; // to force inserting new value
		$data['moduleid'] = (int)$id;
		$data['menuid'] = 0;

		$assign = CKFof::dbStore('#__modules_menu', $data);

		echo '{"id" : "' . $id . '"}';
		exit;
	}
}
