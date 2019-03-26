<?php
/**
 * @author      Lefteris Kavadas
 * @copyright   Copyright (c) 2016 - 2018 Lefteris Kavadas / firecoders.com
 * @license     GNU General Public License version 3 or later
 */
defined('_JEXEC') or die;

$user = JFactory::getUser();
if (!$user->authorise('core.edit', 'com_showtime') && !$user->authorise('core.create', 'com_showtime')) {
    throw new JAccessExceptionNotallowed(JText::_('JERROR_ALERTNOAUTHOR'), 403);
}

$application = JFactory::getApplication();
$task = $application->input->getCmd('task');
$tasks = array('gallery.save2insert', 'gallery.cancel', 'gallery.save', 'image.upload', 'image.resize', '');

if(!in_array($task, $tasks)) {
  throw new JAccessExceptionNotallowed(JText::_('JERROR_ALERTNOAUTHOR'), 403);
}

require_once JPATH_SITE.'/administrator/includes/toolbar.php';
JForm::addFormPath(JPATH_SITE.'/administrator/components/com_showtime/models/forms');
JForm::addFieldPath(JPATH_SITE.'/administrator/components/com_showtime/models/fields');
$language = JFactory::getLanguage();
$language->load('joomla', JPATH_ADMINISTRATOR);
$language->load('com_showtime', JPATH_ADMINISTRATOR.'/components/com_showtime');

$document = JFactory::getDocument();
$document->addStyleDeclaration('.btn-wrapper {display: inline-block; margin: 4px 4px 0 0;} form { padding-top: 8px;}');

$configuration = array();
$configuration['originalTask'] = $task;
$configuration['base_path'] = JPATH_ADMINISTRATOR.'/components/com_showtime';

$controller = JControllerLegacy::getInstance('Showtime', $configuration);
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
