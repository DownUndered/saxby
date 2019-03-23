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
 *
 */
class mosRealEstateManager_rent extends JTable {

    /** @var int - Primary key */
    var $id = null;

    /** @var int - the House id this rent is assosiated with */
    var $fk_houseid = null;

    /** @var datetime - since when this house is rent out */
    var $rent_from = null;

    /** @var datetime - when the house should be returned */
    var $rent_until = null;

    /** @var datetime - when the house realy was/is returned */
    var $rent_return = null;

    /** @var boolean */
    var $checked_out = null;

    /** @var time */
    var $checked_out_time = null;

    /** @var string - the user */
    var $user_name = null;

    /** @var string the e-mail adress */
    var $user_email = null;

    /** @var string the mail info */
    var $user_mailing = null;

    /**
     * @param database A database connector object
     */
    function __construct(&$db) {
        //function __construct(&$db){
        parent::__construct('#__rem_rent', 'id', $db);
    }

    // overloaded check function
    function check() {
        // check if house is already lent out
        $this->_db->setQuery("SELECT id FROM #__rem_rent WHERE fk_houseid='$this->fk_houseid' AND rent_return = null");
        $xid = intval($this->_db->loadResult());
        if ($xid) {
            $this->_error = _REALESTATE_MANAGER_HOUSE_RENT_OUT;
            return false;
        }
        return true;
    }

    /**
     * @return array â€“ name: the string of the user the house is lent to - e-mail: the e-mail address of the user
     */
    function getRentTo($userid) {
        if ($userid != null && $userid != 0) {
            $this->_db->setQuery("SELECT name, email from #__users where id=$userid");
            $help = $this->_db->loadRow();
            $this->user_name = $help[0];
            $this->user_email = $help[1];
        } else {
            $this->user_name = _REALESTATE_MANAGER_LABEL_ANONYMOUS;
            $this->user_email = null;
        }
    }

    function toXML3($xmlDoc, $elementname = "rent") {
        //create and append name element
        $retVal = $xmlDoc->createElement("rent");
        $fk_userid = $xmlDoc->createElement("fk_userid");
        $fk_userid->appendChild($xmlDoc->createTextNode($this->fk_userid));
        $retVal->appendChild($fk_userid);
        $rent_from = $xmlDoc->createElement("rent_from");
        $rent_from->appendChild($xmlDoc->createTextNode($this->rent_from));
        $retVal->appendChild($rent_from);
        $rent_until = $xmlDoc->createElement("rent_until");
        $rent_until->appendChild($xmlDoc->createTextNode($this->rent_until));
        $retVal->appendChild($rent_until);
        $rent_return = $xmlDoc->createElement("rent_return");
        $rent_return->appendChild($xmlDoc->createTextNode($this->rent_return));
        $retVal->appendChild($rent_return);
        $user_name = $xmlDoc->createElement("user_name");
        $user_name->appendChild($xmlDoc->createTextNode($this->user_name));
        $retVal->appendChild($user_name);
        $user_email = $xmlDoc->createElement("user_email");
        $user_email->appendChild($xmlDoc->createTextNode($this->user_email));
        $retVal->appendChild($user_email);
        $user_mailing = $xmlDoc->createElement("user_mailing");
        $user_mailing->appendChild($xmlDoc->createTextNode($this->user_mailing));
        $retVal->appendChild($user_mailing);
        return $retVal;
    }

    function toXML2() {
        $retVal = "<rent>\n";
        $retVal.= "<fk_userid>" . $this->fk_userid . "</fk_userid>\n";
        $retVal.= "<rent_from>" . $this->rent_from . "</rent_from>\n";
        $retVal.= "<rent_until>" . $this->rent_until . "</rent_until>\n";
        $retVal.= "<rent_return>" . $this->rent_return . "</rent_return>\n";
        $retVal.= "<user_name>" . $this->user_name . "</user_name>\n";
        $retVal.= "<user_email>" . $this->user_email . "</user_email>\n";
        $retVal.= "<user_mailing><![CDATA[" . $this->user_mailing . "]]></user_mailing>\n";
        $retVal.= "</rent>\n";
        return $retVal;
    }

}

