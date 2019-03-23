<?php
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Free
 *
 **/
defined('_JEXEC') or die;

class modLocationHelper
{
	public static function getLink(&$params)
	{
		$document = JFactory::getDocument();

		foreach ($document->_links as $link => $value)
		{
			$value = JArrayHelper::toString($value);
			if (strpos($value, 'application/'.$params->get('format').'+xml'))
			{
				return $link;
			}
		}

	}
}
