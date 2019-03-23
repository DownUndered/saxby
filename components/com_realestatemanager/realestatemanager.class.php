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
require_once ($mosConfig_absolute_path . "/components/com_realestatemanager/realestatemanager.class.rent.php");
require_once ($mosConfig_absolute_path . "/components/com_realestatemanager/realestatemanager.class.review.php");

/**
 * House database table class
 */
class mosRealEstateManager extends JTable {
    //keys

    /** @var int Primary key */
    var $id = null;

    var $id_true = null;
    
    /** @var string */
    var $asset_id = null;

    /** @var int */
    var $houseid = null;

    /** @var int */
    var $catid = null;

    /** @var int */
    var $sid = null;

    /** @var int */
    var $fk_rentid = null;
    //Required fields

    /** @var varchar(250) */
    var $description = null;

    /** @var varchar(250) */
    var $link = null;

    /** @var varchar(45) */
    var $listing_type = null; //(for rent or for sale)

    /** @var varchar(14) */
    var $price = null;

    /** @var varchar(14) */
    var $priceunit = null;

    /** @var varchar(200) */
    var $htitle = null; //beautiful rooms and views
    //Address fields

    /** @var varchar(50) */
    var $hcountry = null;

    /** @var varchar(50) */
    var $hregion = null;

    /** @var varchar(50) */
    var $hcity = null;

    /** @var varchar(50) */
    var $hdistrict = null;

    /** @var varchar(100) */
    var $hzipcode = null;

    /** @var varchar(100) */
    var $hlocation = null; //address of house

    /** @var varchar(20) */
    var $hlatitude = null; //latitude of house

    /** @var varchar(20) */
    var $hlongitude = null; //longitude of house

    /** @var tinyint(4) */
    var $map_zoom = 1; //google map zoom
    //Recommended fields

    /** @var int */
    var $rooms = null;

    /** @var int */
    var $bathrooms = null;

    /** @var int */
    var $bedrooms = null;

    /** @var varchar(200) */
    var $contacts = null;

    /** @var varchar(200) */
    var $image_link = null;

    /** @var varchar(45) */
    var $listing_status = null;

    /** @var varchar(45) */
    var $price_type = null; //negotiable or starting

    /** @var varchar(45) */
    var $property_type = null; //apartmemt or land

    /** @var varchar(4) */
    var $year = null;
    //Optional fields

    /** @var varchar(45) */
    var $agent = null;

    /** @var date */
    var $expiration_date = null; //deadline for action

    /** @var varchar(100) */
    var $feature = null; //feature of conveniences

    /** @var int */
    var $lot_size = null;

    /** @var int */
    var $house_size = null;

    /** @var varchar(50) */
    var $garages = null;

    /** @var varchar(100) */
    var $featured_clicks = null;

    /** @var varchar(100) */
    var $featured_shows = null;

    /** @var boolean */
    var $checked_out = null;

    /** @var time */
    var $checked_out_time = null;

    /** @var datetime */
    var $date = null;

    /** @var int */
    var $published = null;

    /** @var int */
    var $approved = null;

    /** @var int */
    var $hits = null;
    
     /** @var int */
    var $pixUpdtedDt = null;

    /** @var varchar(200) */
    var $edok_link = null;
    /* /** @var int */
    var $ordering = null;
    /* /** @var varchar */
    var $owneremail = null;
    /* /** @var varchar */
    var $extra1 = null;
    /* /** @var varchar */
    var $extra2 = null;
    /* /** @var varchar */
    var $extra3 = null;
    /* /** @var varchar */
    var $extra4 = null;
    /* /** @var varchar */
    var $extra5 = null;
    /* /** @var varchar */
    var $extra6 = null;
    /* /** @var varchar */
    var $extra7 = null;
    /* /** @var varchar */
    var $extra8 = null;
    /* /** @var varchar */
    var $extra9 = null;
    /* /** @var varchar */
    var $extra10 = null;
    /* /** @var rchar */
    var $language = null;
    /** @var int  */
    var $owner_id = null;
    /** @var float */
    var $energy_value = null;
    /** @var float */
    var $climate_value = null;


    function __construct(&$db) {
        parent::__construct('#__rem_houses', 'id', $db);
    }

    // overloaded check function
    function check() {
        global $realestatemanager_configuration;
        // check for existing houseid

        if(!$realestatemanager_configuration['price']['string']){
            $this->price = floatval(preg_replace('/[\s,]/', '', $this->price));
        }

        if (trim($this->houseid) == "") {
            $this->setError(_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID_CHECK);
            return false;
        }
        return true;
    }

    function setCatIds() {
        $this->_db->setQuery("SELECT idcat FROM #__rem_categories WHERE iditem=$this->id");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $this->catid = $this->_db->loadResultArray();
        else
            $this->catid = $this->_db->loadColumn();
    }

    function saveCatIds($categs) {
        if (is_array($categs)) {
            foreach ($categs as $categ)
                $temp[] = '(' . $this->id . ',' . $categ . ')';
            $queryvalue = implode(', ', $temp);
        } else
            $queryvalue = "('" . $this->id . "','" . $categs . "')";
        $this->catid = $categs;
        $this->_db->setQuery("DELETE FROM #__rem_categories WHERE iditem='" . $this->id . "';");
        $this->_db->query();
        $this->_db->setQuery("INSERT INTO #__rem_categories (iditem,idcat) VALUES $queryvalue");
        $this->_db->query();
        echo $this->_db->getErrorMsg();
    }

    //check access to house
    function getAccess_REM() {
        $this->setCatIds();
        $categoriesid = implode(',', $this->catid);
        if (!$categoriesid)
            return;
        $this->_db->setQuery("SELECT params FROM #__rem_main_categories WHERE id IN ($categoriesid)");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $accesses = $this->_db->loadResultArray();
        else {
            $accesses = $this->_db->loadColumn();
        }
        foreach ($accesses as $key => $access)
            if ($access == '')
                $accesses[$key] = '-2';
        return implode(',', $accesses);
    }

    function getUnusedHouseId() {
        $this->_db->setQuery("SELECT houseid FROM $this->_tbl");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $houseids_ids = $this->_db->loadResultArray();
        else
            $houseids_ids = $this->_db->loadColumn();
        for ($i = 1; in_array($i, $houseids_ids); $i++) {
            
        }
        return $i;
    }

    function setOwnerName() {
        $this->_db->setQuery("SELECT name FROM #__users WHERE email='$this->owneremail'");
        $this->ownername = $this->_db->loadResult();
    }

    function getOwnerUsername() {
        $this->_db->setQuery("SELECT name FROM #__users WHERE email='$this->owneremail'");
        return $this->_db->loadResult();
    }

    function getReviews() {
        $this->_db->setQuery("SELECT id FROM #__rem_review WHERE fk_houseid='$this->id' ORDER BY id");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $tmp = $this->_db->loadResultArray();
        else
            $tmp = $this->_db->loadColumn();
        $retVal = array();
        for ($i = 0, $j = count($tmp); $i < $j; $i++) {
            $help = new mosRealEstateManager_review($this->_db);
            $help->load(intval($tmp[$i]));
            $retVal[$i] = $help;
        }
        return $retVal;
    }

    function getRent() {
        $rent = null;
        if ($this->fk_rentid != null && $this->fk_rentid != 0) {
            $rent = new mosRealEstateManager_rent($this->_db);
            // load the row from the db table
            $rent->load(intval($this->fk_rentid));
        }
        return $rent;
    }

    function getAllRents($exclusion = "") {
        $this->_db->setQuery("SELECT id FROM #__rem_rent WHERE fk_houseid='$this->id' " . $exclusion . " ORDER BY fk_houseid");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $tmp = $this->_db->loadResultArray();
        else
            $tmp = $this->_db->loadColumn();
        $retVal = array();
        for ($i = 0, $j = count($tmp); $i < $j; $i++) {
            $help = new mosRealEstateManager_rent($this->_db);
            $help->load(intval($tmp[$i]));
            $retVal[$i] = $help;
        }
        return $retVal;
    }

    function getAllRentRequests($exclusion = "") {
        $this->_db->setQuery("SELECT id FROM #__rem_rent_request WHERE fk_houseid='$this->id'" . $exclusion . " ORDER BY id");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $tmp = $this->_db->loadResultArray();
        else
            $tmp = $this->_db->loadColumn();
        $retVal = array();
        for ($i = 0, $j = count($tmp); $i < $j; $i++) {
            $help = new mosRealEstateManager_rent_request($this->_db);
            $help->load(intval($tmp[$i]));
            $retVal[$i] = $help;
        }
        return $retVal;
    }

    function getAllBuyingRequests($exclusion = "") {
        $this->_db->setQuery("SELECT id FROM #__rem_buying_request WHERE fk_houseid='$this->id'" . $exclusion . " ORDER BY id");
        if (version_compare(JVERSION, "3.0.0", "lt"))
            $tmp = $this->_db->loadResultArray();
        else {
            $tmp = $this->_db->loadColumn();
        }
        $retVal = array();
        for ($i = 0, $j = count($tmp); $i < $j; $i++) {
            $help = new mosRealEstateManager_buying_request($this->_db);
            $help->load(intval($tmp[$i]));
            $retVal[$i] = $help;
        }
        return $retVal;
    }

    function getAllImages($exclusion = "") {
        $this->_db->setQuery("SELECT thumbnail_img, main_img FROM #__rem_photos WHERE fk_houseid='$this->id'" . $exclusion . " ORDER BY id");
        $retVal = $this->_db->loadObjectList();
        return $retVal;
    }

    function getAllVideos($exclusion = ""){
        $this->_db->setQuery(
          "SELECT sequence_number, src, type, media, youtube FROM #__rem_video_source WHERE fk_house_id='$this->id'"
           . $exclusion . " ORDER BY id");
        $retVal = $this->_db->loadObjectList();
        return $retVal;
    }

    function getAllTracks($exclusion = ""){
        $this->_db->setQuery(
          "SELECT sequence_number, src, kind, scrlang, label FROM #__rem_track_source WHERE fk_house_id='$this->id'"
           . $exclusion . " ORDER BY id");
        $retVal = $this->_db->loadObjectList();
        return $retVal;
    }

    function getAllHouseFeatures($exclusion = "") {
        $this->_db->setQuery("SELECT * FROM #__rem_feature_houses WHERE fk_houseid='$this->id' " . $exclusion . " ORDER BY id");
        $retVal = $this->_db->loadObjectList();
        return $retVal;
    }
    
    function getAllRentSal($exclusion = "") {
        $this->_db->setQuery("SELECT * FROM #__rem_rent_sal WHERE fk_houseid='$this->id' " . $exclusion . " ORDER BY id");
        $retVal = $this->_db->loadObjectList();
        return $retVal;
    }
    
    function toXML3($xmlDoc, $all) {
        //create and append name element
        $retVal = $xmlDoc->createElement("house");
        $houseid = $xmlDoc->createElement("houseid");
        $houseid->appendChild($xmlDoc->createTextNode($this->houseid));
        $retVal->appendChild($houseid);
        $catid = $xmlDoc->createElement("catid");
        $catid->appendChild($xmlDoc->createTextNode($this->catid));
        $retVal->appendChild($catid);
        $fk_rentid = $xmlDoc->createElement("fk_rentid");
        $fk_rentid->appendChild($xmlDoc->createTextNode($this->fk_rentid));
        $retVal->appendChild($fk_rentid);
        $sid = $xmlDoc->createElement("sid");
        $sid->appendChild($xmlDoc->createTextNode($this->sid));
        $retVal->appendChild($sid);
        //
        $description = $xmlDoc->createElement("description");
        $description->appendChild($xmlDoc->createCDATASection($this->description));
        $retVal->appendChild($description);
        $link = $xmlDoc->createElement("link");
        $link->appendChild($xmlDoc->createTextNode($this->link));
        $retVal->appendChild($link);
        $listing_type = $xmlDoc->createElement("listing_type");
        $listing_type->appendChild($xmlDoc->createCDATASection($this->listing_type));
        $retVal->appendChild($listing_type);
        $price = $xmlDoc->createElement("price");
        $price->appendChild($xmlDoc->createTextNode($this->price));
        $retVal->appendChild($price);
        $htitle = $xmlDoc->createElement("htitle");
        $htitle->appendChild($xmlDoc->createCDATASection($this->htitle));
        $retVal->appendChild($htitle);
        $hlocation = $xmlDoc->createElement("hlocation");
        $hlocation->appendChild($xmlDoc->createCDATASection($this->hlocation));
        $retVal->appendChild($hlocation);
        $hlatitude = $xmlDoc->createElement("hlatitude");
        $hlatitude->appendChild($xmlDoc->createTextNode($this->hlatitude));
        $retVal->appendChild($hlatitude);
        $hlongitude = $xmlDoc->createElement("hlongitude");
        $hlongitude->appendChild($xmlDoc->createTextNode($this->hlongitude));
        $retVal->appendChild($hlongitude);
        $map_zoom = $xmlDoc->createElement("map_zoom");
        $map_zoom->appendChild($xmlDoc->createTextNode($this->map_zoom));
        $retVal->appendChild($map_zoom);
        //recommended fields
        $rooms = $xmlDoc->createElement("rooms");
        $rooms->appendChild($xmlDoc->createTextNode($this->rooms));
        $retVal->appendChild($rooms);
        $bathrooms = $xmlDoc->createElement("bathrooms");
        $bathrooms->appendChild($xmlDoc->createTextNode($this->bathrooms));
        $retVal->appendChild($bathrooms);
        $bedrooms = $xmlDoc->createElement("bedrooms");
        $bedrooms->appendChild($xmlDoc->createTextNode($this->bedrooms));
        $retVal->appendChild($bedrooms);
        $image_link = $xmlDoc->createElement("image_link");
        $image_link->appendChild($xmlDoc->createCDATASection($this->image_link));
        $retVal->appendChild($image_link);
        $listing_status = $xmlDoc->createElement("listing_status");
        $listing_status->appendChild($xmlDoc->createTextNode($this->listing_status));
        $retVal->appendChild($listing_status);
        $price_type = $xmlDoc->createElement("price_type");
        $price_type->appendChild($xmlDoc->createTextNode($this->price_type));
        $retVal->appendChild($price_type);
        $property_type = $xmlDoc->createElement("property_type");
        $property_type->appendChild($xmlDoc->createTextNode($this->property_type));
        $retVal->appendChild($property_type);
        $year = $xmlDoc->createElement("year");
        $year->appendChild($xmlDoc->createTextNode($this->year));
        $year->appendChild($year);
        //optional fields
        $agent = $xmlDoc->createElement("agent");
        $agent->appendChild($xmlDoc->createCDATASection($this->agent));
        $retVal->appendChild($agent);
        $expiration_date = $xmlDoc->createElement("expiration_date");
        $expiration_date->appendChild($xmlDoc->createTextNode($this->expiration_date));
        $retVal->appendChild($expiration_date);
        $lot_size = $xmlDoc->createElement("lot_size");
        $lot_size->appendChild($xmlDoc->createCDATASection($this->lot_size));
        $retVal->appendChild($lot_size);
        $house_size = $xmlDoc->createElement("house_size");
        $house_size->appendChild($xmlDoc->createCDATASection($this->house_size));
        $retVal->appendChild($house_size);
        $garages = $xmlDoc->createElement("garages");
        $garages->appendChild($xmlDoc->createCDATASection($this->garages));
        $retVal->appendChild($garages);
        $hits = $xmlDoc->createElement("hits");
        $hits->appendChild($xmlDoc->createTextNode($this->hits));
        $retVal->appendChild($hits);
        $date = $xmlDoc->createElement("date");
        $date->appendChild($xmlDoc->createTextNode($this->date));
        $retVal->appendChild($date);
        $published = $xmlDoc->createElement("published");
        $published->appendChild($xmlDoc->createTextNode($this->published));
        $retVal->appendChild($published);
        $extra1 = $xmlDoc->createElement("extra1");
        $extra1->appendChild($xmlDoc->createTextNode($this->extra1));
        $retVal->appendChild($extra1);
        $extra2 = $xmlDoc->createElement("extra2");
        $extra2->appendChild($xmlDoc->createTextNode($this->extra2));
        $retVal->appendChild($extra2);
        $extra3 = $xmlDoc->createElement("extra3");
        $extra3->appendChild($xmlDoc->createTextNode($this->extra3));
        $retVal->appendChild($extra3);
        $extra4 = $xmlDoc->createElement("extra4");
        $extra4->appendChild($xmlDoc->createTextNode($this->extra4));
        $retVal->appendChild($extra4);
        $extra5 = $xmlDoc->createElement("extra5");
        $extra5->appendChild($xmlDoc->createTextNode($this->extra5));
        $retVal->appendChild($extra5);
        $extra6 = $xmlDoc->createElement("extra6");
        $extra6->appendChild($xmlDoc->createTextNode($this->extra6));
        $retVal->appendChild($extra6);
        $extra7 = $xmlDoc->createElement("extra7");
        $extra7->appendChild($xmlDoc->createTextNode($this->extra7));
        $retVal->appendChild($extra7);
        $extra8 = $xmlDoc->createElement("extra8");
        $extra8->appendChild($xmlDoc->createTextNode($this->extra8));
        $retVal->appendChild($extra8);
        $extra9 = $xmlDoc->createElement("extra9");
        $extra9->appendChild($xmlDoc->createTextNode($this->extra9));
        $retVal->appendChild($extra9);
        $extra10 = $xmlDoc->createElement("extra10");
        $extra10->appendChild($xmlDoc->createTextNode($this->extra10));
        $retVal->appendChild($extra10);
        $language = $xmlDoc->createElement("language");
        $language->appendChild($xmlDoc->createTextNode($this->language));
        $retVal->appendChild($language);
        $owner_id = $xmlDoc->createElement("owner_id");
        $owner_id->appendChild($xmlDoc->createTextNode($this->owner_id));
        $associate_house = $xmlDoc->createElement("associate_house");
        $associate_house->appendChild($xmlDoc->createTextNode($this->associate_house)); 
        $retVal->appendChild($associate_house);
        $pixUpdtedDt= $xmlDoc->createElement("pixUpdtedDt");
        $pixUpdtedDt->appendChild($xmlDoc->createCDATASection($this->pixUpdtedDt));
        $retVal->appendChild($pixUpdtedDt);
        $energy_value = $xmlDoc->createElement("energy_value");
        $energy_value->appendChild($xmlDoc->createCDATASection($this->energy_value));
        $retVal->appendChild($energy_value);
        $climate_value = $xmlDoc->createElement("climate_value");
        $climate_value->appendChild($xmlDoc->createCDATASection($this->climate_value));
        $retVal->appendChild($climate_value);
        if ($all) {
            //$rents_data = $this->getRent();
            $exclusion = "";
            $rents = $xmlDoc->createElement("rents");
            $rents_data = $this->getAllRents($exclusion);
            foreach ($rents_data as $rent_data)
                $rents->appendChild($rent_data->toXML3($xmlDoc));
            $retVal->appendChild($rents);
            $rentrequests = $xmlDoc->createElement("rentrequests");
            $rentrequests_data = $this->getAllRentRequests($exclusion);
            foreach ($rentrequests_data as $rentrequest_data)
                $rentrequests->appendChild($rentrequest_data->toXML3($xmlDoc));
            $retVal->appendChild($rentrequests);
            $buyingrequests = $xmlDoc->createElement("buyingrequests");
            $buyingrequests_data = $this->getAllBuyingRequests($exclusion);
            foreach ($buyingrequests_data as $buyingrequest_data)
                $buyingrequests->appendChild($buyingrequest_data->toXML3($xmlDoc));
            $retVal->appendChild($buyingrequests);
            $reviews = $xmlDoc->createElement("reviews");
            $reviews_data = $this->getReviews();
            foreach ($reviews_data as $review_data)
                $reviews->appendChild($review_data->toXML3($xmlDoc));
            $retVal->appendChild($reviews);
            $images = $xmlDoc->createElement("images");
            $images_data = $this->getAllImages();
            foreach ($images_data as $image_data) {
                $image = $xmlDoc->createElement("image");
                $image_thumbnail_img = $xmlDoc->createElement("thumbnail_img");
                $image_thumbnail_img->appendChild($xmlDoc->createTextNode($image_data->thumbnail_img));
                $image->appendChild($image_thumbnail_img);
                $image_main_img = $xmlDoc->createElement("main_img");
                $image_main_img->appendChild($xmlDoc->createTextNode($image_data->main_img));
                $image->appendChild($image_main_img);
                $images->appendChild($image);
            }
            $retVal->appendChild($images);
        }
        return $retVal;
    }

    function toXML2($all) {
        $this->setCatIds();
        if (count($this->catid) < 1) {
            echo _REALESTATE_MANAGER_ERROR_CATEGORIES;
            exit;
        }
        foreach ($this->catid as $catid)
            $catids[] = "<catid>" . $catid . "</catid>\n";
        $catids = implode('', $catids);
        $retVal = "<house>\n";
        $retVal.= "<id>" . $this->id . "</id>\n";
        $retVal.= "<houseid>" . $this->houseid . "</houseid>\n";
        $retVal.= "<catids>" . $catids . "</catids>\n";
        $retVal.= "<fk_rentid>" . $this->fk_rentid . "</fk_rentid>\n";
        $retVal.= "<sid>" . $this->sid . "</sid>\n";
        $retVal.= "<description><![CDATA[" . $this->description . "]]></description>\n";
        $retVal.= "<link><![CDATA[" . $this->link . "]]></link>\n";
        $retVal.= "<listing_type>" . $this->listing_type . "</listing_type>\n";
        $retVal.= "<price>" . $this->price . "</price>\n";
        $retVal.= "<priceunit><![CDATA[" . $this->priceunit . "]]></priceunit>\n";
        $retVal.= "<htitle><![CDATA[" . $this->htitle . "]]></htitle>\n";
        $retVal.= "<hcountry><![CDATA[" . $this->hcountry . "]]></hcountry>\n";
        $retVal.= "<hregion><![CDATA[" . $this->hregion . "]]></hregion>\n";
        $retVal.= "<hcity><![CDATA[" . $this->hcity . "]]></hcity>\n";
        $retVal.= "<hdistrict><![CDATA[" . $this->hdistrict . "]]></hdistrict>\n";
        $retVal.= "<hzipcode><![CDATA[" . $this->hzipcode . "]]></hzipcode>\n";
        $retVal.= "<hlocation><![CDATA[" . $this->hlocation . "]]></hlocation>\n";
        $retVal.= "<hlatitude>" . $this->hlatitude . "</hlatitude>\n";
        $retVal.= "<hlongitude>" . $this->hlongitude . "</hlongitude>\n";
        $retVal.= "<map_zoom>" . $this->map_zoom . "</map_zoom>\n";
        $retVal.= "<rooms>" . $this->rooms . "</rooms>\n";
        $retVal.= "<bathrooms>" . $this->bathrooms . "</bathrooms>\n";
        $retVal.= "<bedrooms>" . $this->bedrooms . "</bedrooms>\n";
        $retVal.= "<contacts>" . $this->contacts . "</contacts>\n"; //<contacts>
        $retVal.= "<image_link><![CDATA[" . $this->image_link . "]]></image_link>\n";
        $retVal.= "<listing_status>" . $this->listing_status . "</listing_status>\n";
        $retVal.= "<price_type>" . $this->price_type . "</price_type>\n";
        $retVal.= "<property_type>" . $this->property_type . "</property_type>\n";
        $retVal.= "<year>" . $this->year . "</year>\n";
        $retVal.= "<agent><![CDATA[" . $this->agent . "]]></agent>\n";
        $retVal.= "<expiration_date>" . $this->expiration_date . "</expiration_date>\n";
        $retVal.= "<lot_size>" . $this->lot_size . "</lot_size>\n";
        $retVal.= "<house_size>" . $this->house_size . "</house_size>\n";
        $retVal.= "<garages><![CDATA[" . $this->garages . "]]></garages>\n";
        $retVal.= "<date>" . $this->date . "</date>\n";
        $retVal.= "<hits>" . $this->hits . "</hits>\n";
        $retVal.= "<published>" . $this->published . "</published>\n";
        $retVal.= "<owneremail><![CDATA[" . $this->owneremail . "]]></owneremail>\n";
        $retVal.= "<featured_clicks><![CDATA[" . $this->featured_clicks . "]]></featured_clicks>\n";
        $retVal.= "<featured_shows><![CDATA[" . $this->featured_shows . "]]></featured_shows>\n";
        $retVal.= "<pixUpdtedDt><![CDATA[" . $this->pixUpdtedDt . "]]></pixUpdtedDt>\n";
        $retVal.= "<extra1><![CDATA[" . $this->extra1 . "]]></extra1>\n";
        $retVal.= "<extra2><![CDATA[" . $this->extra2 . "]]></extra2>\n";
        $retVal.= "<extra3><![CDATA[" . $this->extra3 . "]]></extra3>\n";
        $retVal.= "<extra4><![CDATA[" . $this->extra4 . "]]></extra4>\n";
        $retVal.= "<extra5><![CDATA[" . $this->extra5 . "]]></extra5>\n";
        $retVal.= "<extra6><![CDATA[" . $this->extra6 . "]]></extra6>\n";
        $retVal.= "<extra7><![CDATA[" . $this->extra7 . "]]></extra7>\n";
        $retVal.= "<extra8><![CDATA[" . $this->extra8 . "]]></extra8>\n";
        $retVal.= "<extra9><![CDATA[" . $this->extra9 . "]]></extra9>\n";
        $retVal.= "<extra10><![CDATA[" . $this->extra10 . "]]></extra10>\n";
        $retVal.= "<language><![CDATA[" . $this->language . "]]></language>\n";
        $retVal.= "<owner_id><![CDATA[" . $this->owner_id . "]]></owner_id>\n";
        $retVal.= "<associate_house><![CDATA[" . $this->associate_house . "]]></associate_house>\n";
        $retVal.= "<energy_value>" . $this->energy_value . "</energy_value>\n";
        $retVal.= "<climate_value>" . $this->climate_value . "</climate_value>\n";
        if ($all) {
            $exclusion = "";
            $retVal.= "<rents>\n";
            $rents = $this->getAllRents($exclusion);
            foreach ($rents as $rent)
                $retVal.= $rent->toXML2();
            $retVal.= "</rents>\n";
            $retVal.= "<rentrequests>\n";
            $rentrequests = $this->getAllRentRequests($exclusion);
            foreach ($rentrequests as $rentrequest)
                $retVal.= $rentrequest->toXML2();
            $retVal.= "</rentrequests>\n";
            $retVal.= "<buyingrequests>\n";
            $buyingrequests = $this->getAllBuyingRequests($exclusion);
            foreach ($buyingrequests as $buyingrequest)
                $retVal.= $buyingrequest->toXML2();
            $retVal.= "</buyingrequests>\n";
            $retVal.= "<reviews>\n";
            $reviews = $this->getReviews($exclusion);
            foreach ($reviews as $review)
                $retVal.= $review->toXML2();
            $retVal.= "</reviews>\n";
            $retVal.= "<images>\n";
            $images_data = $this->getAllImages();
            foreach ($images_data as $image_data) {
                $retVal.= "<image>\n";
                $retVal.= "<thumbnail_img><![CDATA[" . $image_data->thumbnail_img . "]]></thumbnail_img>\n";
                $retVal.= "<main_img><![CDATA[" . $image_data->main_img . "]]></main_img>\n";
                $retVal.= "</image>\n";
            }
            $retVal.= "</images>\n";

            $retVal .= "<videos>\n";
            $videos_data = $this->getAllVideos();
            foreach ($videos_data as $video_data) {
                $retVal .= "<video>\n";
                $retVal .= "<sequence_number><![CDATA[" . $video_data->sequence_number . "]]></sequence_number>\n";
                $retVal .= "<src><![CDATA[" . $video_data->src . "]]></src>\n";
                $retVal .= "<type><![CDATA[" . $video_data->type . "]]></type>\n";
                $retVal .= "<media><![CDATA[" . $video_data->media . "]]></media>\n";
                $retVal .= "<youtube><![CDATA[" . $video_data->youtube . "]]></youtube>\n";
                $retVal .= "</video>\n";
            }
            $retVal .= "</videos>\n";

            $retVal .= "<tracks>\n";
            $tracks_data = $this->getAllTracks();
            foreach ($tracks_data as $track_data) {
                $retVal .= "<track>\n";
                $retVal .= "<sequence_number><![CDATA[" . $track_data->sequence_number . "]]></sequence_number>\n";
                $retVal .= "<src><![CDATA[" . $track_data->src . "]]></src>\n";
                $retVal .= "<kind><![CDATA[" . $track_data->kind . "]]></kind>\n";
                $retVal .= "<scrlang><![CDATA[" . $track_data->scrlang . "]]></scrlang>\n";
                $retVal .= "<label><![CDATA[" . $track_data->label . "]]></label>\n";
                $retVal .= "</track>\n";
            }
            $retVal .= "</tracks>\n";

            $retVal.= "<features_houses>\n";
            $features_data = $this->getAllHouseFeatures();
            foreach ($features_data as $feature_data) {
                $retVal.= "<features_house>\n";
                $retVal.= "<fk_featureid><![CDATA[" . $feature_data->fk_featureid . "]]></fk_featureid>\n";
                $retVal.= "</features_house>\n";
            }
            $retVal.= "</features_houses>\n";
            $retVal.= "<rent_sals>\n";
            $rentsals_data = $this->getAllRentSal();
            foreach ($rentsals_data as $rentsal_data) {
                $retVal.= "<rent_sal>\n";
                $retVal.= "<price_from><![CDATA[" . $rentsal_data->price_from . "]]></price_from>\n";
                $retVal.= "<price_to><![CDATA[" . $rentsal_data->price_to . "]]></price_to>\n";
                $retVal.= "<special_price><![CDATA[" . $rentsal_data->special_price . "]]></special_price>\n";
                $retVal.= "<priceunit><![CDATA[" . $rentsal_data->priceunit . "]]></priceunit>\n";
                $retVal.= "</rent_sal>\n";
            }
            $retVal.= "</rent_sals>\n";
        }
            $retVal.= "</house>\n";
            return $retVal;
    }

}
?>