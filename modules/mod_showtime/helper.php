<?php
/**
 * @author      Lefteris Kavadas
 * @copyright   Copyright (c) 2016 - 2018 Lefteris Kavadas / firecoders.com
 * @license     GNU General Public License version 3 or later
 */
defined('_JEXEC') or die;

use Joomla\Registry\Registry;

class ModShowtimeHelper
{
    public static function getGalleries($params)
    {
        $user = JFactory::getUser();
        JModelLegacy::addIncludePath(JPATH_ADMINISTRATOR.'/components/com_showtime/models');
        $model = JModelLegacy::getInstance('Galleries', 'ShowtimeModel', array('ignore_request' => true));
        $model->setState('filter.state', 1);
        $model->setState('filter.category.state', 1);
        $model->setState('filter.access', $user->getAuthorisedViewLevels());
        $model->setState('filter.category.access', $user->getAuthorisedViewLevels());
        if ($params->get('source') == 'dynamic')
        {
            $application = JFactory::getApplication();
            $option = $application->input->getCmd('option');
            $view = $application->input->getCmd('view');
            $id = $application->input->getInt('id');

            if ($option != 'com_content' || $view != 'article' || !$id)
            {
                return array();
            }

            JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_content/models');
            $article = JModelLegacy::getInstance('Article', 'ContentModel', array('ignore_request' => true));
            $article->setState('params', $application->getParams());
            $article->setState('filter.published', 1);
            $article->setState('article.id', $id);
            $item = $article->getItem();

            if (!$item)
            {
                return array();
            }

            $galleryIds = array();
            $fields = FieldsHelper::getFields('com_content.article', $item);
            foreach ($fields as $field)
            {
                if ($field->type == 'showtime')
                {
                    $galleryIds[] = (int)$field->rawvalue;
                }
            }
            $galleryIds = array_filter($galleryIds);
            if (!count($galleryIds))
            {
                return array();
            }
            $model->setState('filter.id', $galleryIds);
        }
        else
        {
            $model->setState('filter.category_id', $params->get('catid'));
            $model->setState('list.limit', $params->get('count', 5));
            $model->setState('list.ordering', $params->get('ordering', 'gallery.id'));
        }
        $model->setState('context.params', $params);
        $model->setState('scope', 'display');
        $model->setState('ignore.item.params', true);
        $galleries = $model->getItems();
        foreach ($galleries as $gallery)
        {
            $gallery->params->merge($params);
        }

        return $galleries;
    }
}
