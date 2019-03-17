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

class PagebuilderckViewFrontedition extends JViewLegacy
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
		$this->input = $app->input;

		// load xml file from the template
		$xml = simplexml_load_file(JPATH_SITE . '/templates/' . $template . '/templateDetails.xml');

		// check that the template is made with a compatible version of Template Creator CK
		if ($xml->generator != 'Template Creator CK') {
			JError::raiseWarning(403, JText::_('The template you are trying to edit has not been created with Template Creator CK, or not the latest version of if. You can download Template Creator CK on <a href="https://www.template-creator.com">https://www.template-creator.com</a>'));
			return;
		}

		return parent::display($tpl);
	}
}
