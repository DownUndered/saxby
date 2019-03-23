<?php

if (!defined('_VALID_MOS') && !defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com);
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Pro 
 *
 * */
class mosRealEstateManager_feature extends JTable {

    /** @var int - Primary key */
    var $id = null;

    /** @var varchar(250) */
    var $name = null;

    /** @var varchar(250) */
    var $categories = null;

    /** @var int */
    var $published = null;

    /** @var varchar(250) */
    var $image_link = null;

    /**
     * @param database A database connector object
     */
    public function __construct($db) {
        parent::__construct("#__rem_feature", 'id', $db);
    }

    public function updateOrder($where = '') { // for 1.6
        return $this->reorder($where);
    }

    public function toXML3(& $xmlDoc, $elementname = "feature") {
        //create and append name element 
        $retVal = & $xmlDoc->createElement("feature");

        $name = & $xmlDoc->createElement("name");
        $name->appendChild($xmlDoc->createTextNode($this->name));
        $retVal->appendChild($name);

        $categories = & $xmlDoc->createElement("categories");
        $categories->appendChild($xmlDoc->createTextNode($this->categories));
        $retVal->appendChild($categories);

        $published = & $xmlDoc->createElement("published");
        $published->appendChild($xmlDoc->createTextNode($this->published));
        $retVal->appendChild($published);

        $image_link = & $xmlDoc->createElement("image_link");
        $image_link->appendChild($xmlDoc->createTextNode($this->image_link));
        $retVal->appendChild($image_link);

        $language = & $xmlDoc->createElement("language");
        $language->appendChild($xmlDoc->createTextNode($this->language));
        $retVal->appendChild($language);

        return $retVal;
    }

    public function toXML2() {
        $retVal = "<feature>\n";
        $retVal .= "<feature_name><![CDATA[" . $this->name . "]]></feature_name>\n";
        $retVal .= "<feature_categories><![CDATA[" . $this->categories . "]]></feature_categories>\n";
        $retVal .= "<feature_published>" . $this->published . "</feature_published>\n";
        $retVal .= "<feature_image_link><![CDATA[" . $this->image_link . "]]></feature_image_link>\n";
        $retVal .= "<feature_language><![CDATA[" . $this->language . "]]></feature_language>\n";
        $retVal .= "</feature>\n";
        return $retVal;
    }

}
