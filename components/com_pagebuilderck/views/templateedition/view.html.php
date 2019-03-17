<?php
/**
 * @name		Page Builder CK
 * @package		com_pagebuilderck
 * @copyright	Copyright (C) 2015. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Cedric Keiflin - http://www.template-creator.com - http://www.joomlack.fr
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class PagebuilderckViewTemplateedition extends JViewLegacy
{
	protected $item;

	protected $state;

	public function display($tpl = null)
	{

		// check that the user has the rights to edit
		$user = JFactory::getUser();
		$app = JFactory::getApplication();
		$authorised = ($user->authorise('core.create', 'com_pagebuilderck') || (count($user->getAuthorisedCategories('com_pagebuilderck', 'core.create'))));
		if ($authorised !== true)
		{
			if ($user->guest === 1)
			{
				$return = base64_encode(JUri::getInstance());
				$login_url_with_return = JRoute::_('index.php?option=com_users&return=' . $return);
				$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'notice');
				$app->redirect($login_url_with_return, 403);
			}
			else
			{
				$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'), 'error');
				$app->setHeader('status', 403, true);
				return;
			}
			// JError::raiseError(403, JText::_('JERROR_ALERTNOAUTHOR'));
			// return false;
		}

		// check that the template is compatible
		$app    = JFactory::getApplication();
		$template = $app->getTemplate();

		// load xml file from the template
		$xml = simplexml_load_file(JPATH_SITE . '/templates/' . $template . '/templateDetails.xml');

		// check that the template is made with a compatible version of Template Creator CK
		if ($xml->generator != 'Template Creator CK') {
			JError::raiseWarning(403, JText::_('The template you are trying to edit has not been created with Template Creator CK, or not the latest version of if. You can download Template Creator CK on <a href="https://www.template-creator.com">https://www.template-creator.com</a>'));
			return;
		}



		// die ('ok');
		// $app	= JFactory::getApplication();
		// $user = JFactory::getUser();

		/*if (substr( $app->input->get('layout', null, 'cmd'), 0, 4 ) !== 'ajax') {
			$this->item		= $this->get('Item');
			$this->state	= $this->get('State');
			// $this->form = $this->get('Form');

			// check that we got a page
			if (empty($this->item))
			{
				return JError::raiseError(404, JText::_('COM_PAGEBUILDERCK_ERROR_PAGE_NOT_FOUND'));
			}
		}

		// check if we are viewing the frontend layout
		if ( ($app->input->get('layout', null, 'cmd') === null || $app->input->get('layout', null, 'cmd') === 'default')
			 && $tpl === null) {

			// check the rights to access the page
			$groups	= $user->getAuthorisedViewLevels();
			// if ((!in_array($this->item->access, $groups)) || (!in_array($this->item->category_access, $groups)))
			if (!in_array($this->item->access, $groups))
			{
				JError::raiseWarning(403, JText::_('JERROR_ALERTNOAUTHOR'));
				return;
			}
		} else {
			// check that the user has the rights to edit
			$authorised = ($user->authorise('core.create', 'com_pagebuilderck') || (count($user->getAuthorisedCategories('com_pagebuilderck', 'core.create'))));
			if ($authorised !== true)
			{
				JError::raiseError(403, JText::_('JERROR_ALERTNOAUTHOR'));
				return false;
			}

			include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/menustyles.php';
			include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/stylescss.php';
			include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/ckeditor.php';
			include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/pagebuilderck.php';

			// get instance of the editor to load the css / js in the page
			$this->ckeditor = PagebuilderckHelper::loadEditor();

			// check if the page is available for modification
			$model = $this->getModel();
			$id = $app->input->get('id', 0, 'int');
			if (! $model->checkout($id)) {
				$app->redirect(
				JRoute::_(
						'index.php?option=com_pagebuilderck&view=page&id=' . $id, false
					)
				);
				return false;
			}
		}*/

		// Get the parameters
		// $params = JComponentHelper::getParams('com_pagebuilderck');
		// if ($app->input->get('layout', '', 'cmd') !== null || $tpl !== null) {

		// Check for errors.
		// if (count($errors = $this->get('Errors')))
		// {
			// JError::raiseWarning(500, implode("\n", $errors));

			// return false;
		// }

		// loads the neede library
		// include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/menustyles.php';
		// include_once JPATH_ADMINISTRATOR . '/components/com_pagebuilderck/helpers/stylescss.php';
		// Check if access is not public
		// $groups	= $user->getAuthorisedViewLevels();

		// if ($this->_layout == 'edit' || !$this->item->id) {
			// $authorised = $user->authorise('core.edit.own', 'com_pagebuilderck');

			// if ($authorised !== true) {
				// Redirect to the edit screen.
				// $app->redirect(JURI::root() . 'index.php?option=com_templateck&view=login&template=templatecreatorck&tmpl=login&id=' . $this->item->id);
				// return false;
			// }
		// }
// TODO : ajouter permissions et acl
		// if ((!in_array($item->access, $groups)) || (!in_array($item->category_access, $groups)))
		// {
			// JError::raiseWarning(403, JText::_('JERROR_ALERTNOAUTHOR'));
			// return;
		// }

		// $model = $this->getModel();
		// $model->hit();

		return parent::display($tpl);
	}
}
