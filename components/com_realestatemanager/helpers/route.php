<?php
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com); 
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.8 Pro
 *
 * */
defined('_JEXEC') or die;

abstract class RealestatemanagerHelperRoute{

  protected static $lookup = array();

  protected static $lang_lookup = array();

  public static function getRemAssocPropertyRoute($id ){

    $database = JFactory::getDBO();


    $link = array();
    $houseIdArr = array();
    $associate_house = array();
    if( isset($id) ){
        $query = "SELECT associate_house FROM #__rem_houses WHERE id = $id";
        $database->setQuery($query);
        $associate_rem = $database->loadResult();

        if($associate_rem != "" ) $associate_house = unserialize($associate_rem);

        if(count($associate_house) > 0){
            foreach($associate_house as $oneHouse){
                if($oneHouse != 0){
                    $houseIdArr[] = $oneHouse;
                }
            }

            $houseIdStr = implode(',', $houseIdArr);
            $query = "SELECT id, language
                        FROM #__rem_houses
                        WHERE id in ( $houseIdStr )";
            $database->setQuery($query);
            $assocHouse = $database->loadAssocList();

            foreach ($assocHouse as $value) {
                $lang = $value['language'];
                $CurId = $value['id'];

                if(isset($assocHouse)){
                    $query = "SELECT idcat
                                  FROM #__rem_categories
                                  WHERE iditem = $CurId";
                    $database->setQuery($query);
                    $assocHouseCat = $database->loadResult();
                }
                $link[$lang] = "index.php?option=com_realestatemanager&task=view&catid=$assocHouseCat&id=$CurId";

                $needles = array();
                $needles['view'] = 'view';
                $app    = JFactory::getApplication();
                $menus    = $app->getMenu('site');
                $active = $menus->getActive();
                $needles[$active->query['view']] = $active->query['view'];
                if ( $lang != "*" && JLanguageMultilang::isEnabled())
                {
                  self::buildLanguageLookup();

                  if (isset(self::$lang_lookup[$lang]))
                  {
                    $link[$lang] .= '&lang=' . self::$lang_lookup[$lang];
                    $needles['language'] = $lang;
                  }
                }

                if ($item = self::_findItem($needles))
                {

                  $link[$lang] .= '&Itemid=' . $item;
                }


            }
        }
    }

    return $link;
  }

  public static function getRemAssocCategoryRoute($catid ){

    $database = JFactory::getDBO();
    $link = array();
    $assos_ids = array();

    if(isset($catid) ){
      $catIdArr = array();

      $query = "SELECT associate_category FROM #__rem_main_categories WHERE id = $catid";
      $database->setQuery($query);
      $ids = $database->loadResult();

      if($ids != "" ) $assos_ids = unserialize($ids);


      if(count($assos_ids) > 0){
          foreach($assos_ids as $oneCat){
              if($oneCat != 0){
                  $catIdArr[] = $oneCat;
              }
          }

          $catIdStr = implode(',', $catIdArr);
          $query = "SELECT id, language
                      FROM #__rem_main_categories
                       WHERE id in ($catIdStr)";
          $database->setQuery($query);
          $assocCategory = $database->loadAssocList();

          foreach ($assocCategory as $value) {
              $lang = $value['language'];
              $CurId = $value['id'];

              $link[$lang] = "index.php?option=com_realestatemanager&task=showCategory&catid=$CurId";

              $needles = array();
              $needles['showCategory'] = 'showCategory';
              $app    = JFactory::getApplication();
              $menus    = $app->getMenu('site');
              $active = $menus->getActive();
              $needles[$active->query['view']] = $active->query['view'];

              if ( $lang != "*" && JLanguageMultilang::isEnabled())
              {
                self::buildLanguageLookup();

                if (isset(self::$lang_lookup[$lang]))
                {
                  $link[$lang] .= '&lang=' . self::$lang_lookup[$lang];
                  $needles['language'] = $lang;
                }
              }

              if ($item = self::_findItem($needles))
              {
                $link[$lang] .= '&Itemid=' . $item;
              }
          }
      }
    }
    return $link;
  }


  protected static function buildLanguageLookup()
  {
    if (count(self::$lang_lookup) == 0)
    {
      $db    = JFactory::getDbo();
      $query = $db->getQuery(true)
        ->select('a.sef AS sef')
        ->select('a.lang_code AS lang_code')
        ->from('#__languages AS a');

      $db->setQuery($query);
      $langs = $db->loadObjectList();

      foreach ($langs as $lang)
      {
        self::$lang_lookup[$lang->lang_code] = $lang->sef;
      }
    }
  }


  protected static function _findItem($needles = null)
  {
    $app      = JFactory::getApplication();
    $menus    = $app->getMenu('site');
    $language = isset($needles['language']) ? $needles['language'] : '*';

    // Prepare the reverse lookup array.
    if (!isset(self::$lookup[$language]))
    {
      self::$lookup[$language] = array();

      $component  = JComponentHelper::getComponent('com_realestatemanager');

      $attributes = array('component_id');
      $values     = array($component->id);

      if ($language != '*')
      {
        $attributes[] = 'language';
        $values[]     = array($needles['language'], '*');
      }

      $items = $menus->getItems($attributes, $values);

      foreach ($items as $item)
      {
        if (isset($item->query) && (isset($item->query['view']) || isset($item->query['task'] ) ) )
        {
          if ( isset($item->query['view'] ) )  $view = $item->query['view'];
          else $view = $item->query['task'];

          if (!isset(self::$lookup[$language][$view]))
          {
            self::$lookup[$language][$view] = array();
          }

          if (isset($item->id))
          {
            /**
             * Here it will become a bit tricky
             * language != * can override existing entries
             * language == * cannot override existing entries
             */
            if (!isset(self::$lookup[$language][$view][$item->id]) || $item->language != '*')
            {
              self::$lookup[$language][$view][$item->id] = $item->id;
            }
          }
        }
      }
    }

    //check item with exectly view
    if ($needles)
    {

      foreach ($needles as $view => $ids)
      {
        if (isset(self::$lookup[$language][$view]))
        {

          foreach (self::$lookup[$language][$view] as $id)
          {

            if (isset(self::$lookup[$language][$view][(int) $id]))
            {
              return self::$lookup[$language][$view][(int) $id];
            }
          }
        }
      }
    }

    //check any item from our component
    if ($needles)
    {

      foreach (self::$lookup[$language] as $view => $ids)
      {
        if (isset(self::$lookup[$language][$view]))
        {

          foreach (self::$lookup[$language][$view] as $id)
          {

            if (isset(self::$lookup[$language][$view][(int) $id]))
            {
              return self::$lookup[$language][$view][(int) $id];
            }
          }
        }
      }
    }


    // Check if the active menuitem matches the requested language
    $active = $menus->getActive();

    if ($active && $active->component == 'com_realestatemanager' &&
      ($language == '*' || in_array($active->language, array('*', $language)) || !JLanguageMultilang::isEnabled()))
    {
      return $active->id;
    }

    // If not found, return language specific home link
    $default = $menus->getDefault($language);

    return !empty($default->id) ? $default->id : null;
  }


}