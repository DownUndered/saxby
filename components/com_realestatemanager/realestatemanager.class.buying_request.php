<?php

if (!defined('_VALID_MOS') && !defined('_JEXEC'))
    die('Direct Access to ' . basename(__FILE__) . ' is not allowed.');

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com) 
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Pro
 *
 * */
class mosRealEstateManager_buying_request extends JTable {

    /** @var int Primary key */
    var $id = null;

    /** @var int - the house id this rent is assosiated with */
    var $fk_houseid = null;

    /** @var datetime - when the house realy was/is returned */
    var $buying_request = null;

    /** @var boolean */
    var $checked_out = null;

    /** @var time */
    var $checked_out_time = null;

    /** @var string - the user name */
    var $customer_name = null;

    /** @var string – email */
    var $customer_email = null;

    /** @var string – phone */
    var $customer_phone = null;

    /** @var string  the comment */
    var $customer_comment = null;

    /** @var string – status */
    var $status = 0;

    /**
     * @param database - A database connector object
     */
    function __construct(&$db) {
        parent::__construct('#__rem_buying_request', 'id', $db);
    }

    /**
     * @return array – name: the string of the user the house is lent to - e-mail: the e-mail address of the user
     */
    function decline() {
        if ($this->id == null) {
            return "Method called on a non instant object";
        }
        $this->_db->setQuery("DELETE FROM #__rem_buying_request"
                . "\nWHERE id=$this->id"
        );
        if (!$this->_db->query()) {
            return $this->_db->getErrorMsg();
        }
    }

// 	
    function toXML3($xmlDoc) {

        //create and append name element 
        $retVal = $xmlDoc->createElement("buyingrequest");

        $fk_userid = $xmlDoc->createElement("fk_userid");
        $fk_userid->appendChild($xmlDoc->createTextNode($this->fk_userid));
        $retVal->appendChild($fk_userid);

        $buying_request = $xmlDoc->createElement("buying_request");
        $buying_request->appendChild($xmlDoc->createTextNode($this->buying_request));
        $retVal->appendChild($buying_request);

        $customer_name = $xmlDoc->createElement("customer_name");
        $customer_name->appendChild($xmlDoc->createTextNode($this->customer_name));
        $retVal->appendChild($customer_name);

        $customer_email = $xmlDoc->createElement("customer_email");
        $customer_email->appendChild($xmlDoc->createTextNode($this->customer_email));
        $retVal->appendChild($customer_email);

        $customer_phone = $xmlDoc->createElement("customer_phone");
        $customer_phone->appendChild($xmlDoc->createTextNode($this->customer_phone));
        $retVal->appendChild($customer_phone);

        $customer_comment = $xmlDoc->createElement("customer_comment");
        $customer_comment->appendChild($xmlDoc->createTextNode($this->customer_comment));
        $retVal->appendChild($customer_comment);

        $status = $xmlDoc->createElement("status");
        $status->appendChild($xmlDoc->createTextNode($this->status));
        $retVal->appendChild($status);

        return $retVal;
    }

    function toXML2() {

        $retVal = "<buyingrequest>\n";
        $retVal .= "<fk_userid>" . $this->fk_userid . "</fk_userid>\n";
        $retVal .= "<buying_request>" . $this->buying_request . "</buying_request>\n";
        $retVal .= "<customer_name>" . $this->customer_name . "</customer_name>\n";
        $retVal .= "<customer_email><![CDATA[" . $this->customer_email . "]]></customer_email>\n";
        $retVal .= "<customer_phone>" . $this->customer_phone . "</customer_phone>\n";
        $retVal .= "<customer_comment><![CDATA[" . $this->customer_comment . "]]></customer_comment>\n";
        $retVal .= "<status>" . $this->status . "</status>\n";

        $retVal .= "</buyingrequest>\n";

        return $retVal;
    }

}
