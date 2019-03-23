<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.0 Pro
 *
 * */

 
$LangLocal = array('lang_code'=>'en-GB', 'title'=>'English');

$constLang = array();
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBMAIN', 'value_const'=>'Community Builder/My Houses plugin settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT', 'value_const'=>'Show edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY', 'value_const'=>'Show buy requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY', 'value_const'=>'Show user rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TO', 'value_const'=>'Show my houses to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TO', 'value_const'=>'Show edit houses to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TO', 'value_const'=>'Show rent requests to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TO', 'value_const'=>'Show buy requests to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TO', 'value_const'=>'Show user rent history to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TT', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TT', 'value_const'=>'Show edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TT', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TT', 'value_const'=>'Show buy requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TT', 'value_const'=>'Show user rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_RL', 'value_const'=>'Show button \'show my houses\' on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML_BODY', 'value_const'=>'Select user group for which will be show this button');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_RL', 'value_const'=>'Show button \'edit my houses\' on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_ML', 'value_const'=>'Show edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_RL', 'value_const'=>'Show button \'rent requests\' on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_ML', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_RL', 'value_const'=>'Show button \'buy requsts\' on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_ML', 'value_const'=>'Show buy requsts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_RL', 'value_const'=>'Show button \'my rent history\' on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_ML', 'value_const'=>'Show my rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE', 'value_const'=>'Real Estate Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC', 'value_const'=>'Our house catalogue with houses for sale and rent.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC1', 'value_const'=>'Search houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC2', 'value_const'=>'Search houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE', 'value_const'=>'no-img_eng.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NOT_AUTHORIZED', 'value_const'=>'You are not allowed to perform this action!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OK', 'value_const'=>'OK');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_STATUS', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP', 'value_const'=>'RealEstateManager : Import/Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP_ADD', 'value_const'=>'You must add a category for this section first.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PLEASE_SEL', 'value_const'=>'Please select');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_CSV', 'value_const'=>'CSV File');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_XML', 'value_const'=>'XML File');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR1', 'value_const'=>'You must select a type to import!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR2', 'value_const'=>'You must select a category to import!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR3', 'value_const'=>'You must choose a file to import!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR4', 'value_const'=>'You must select a type to export!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Import type' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Select file format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP_TT_HEAD', 'value_const'=>'Select file format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_CATEGORY', 'value_const'=>'Category' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT_TT_HEAD', 'value_const'=>'Select category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'File to import' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'File to import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE_TT_HEAD', 'value_const'=>'Select file to import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_FORMAT', 'value_const'=>'At the moment the following CSV format is supported:<br />PropertyID | Description | Link | Listing type |  Location | Price | Title | ...' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Export type' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Select file format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP_TT_HEAD', 'value_const'=>'Select file format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_CATEGORY', 'value_const'=>'Category' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT_TT_HEAD', 'value_const'=>'Select category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT', 'value_const'=>'Export Result' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_DOWNLOAD', 'value_const'=>'You can download the requested Export under the following URL (right-click to save):' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_REMEMBER', 'value_const'=>'Please note that the files will still be saved on the server and you have to clean them yourself.' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CATEGORIES_MANAGER', 'value_const'=>'RealEstateManager : Categories');
$constLang[] = array('const'=>'_HEADER_CATEGORY', 'value_const'=>'Category');
$constLang[] = array('const'=>'_HEADER_NUMBER', 'value_const'=>'Houses');
$constLang[] = array('const'=>'_HEADER_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_HEADER_REORDER', 'value_const'=>'Reorder');
$constLang[] = array('const'=>'_HEADER_ACCESS', 'value_const'=>'Access');
$constLang[] = array('const'=>'_HEADER_CHECKED_OUT', 'value_const'=>'Checked Out By');
$constLang[] = array('const'=>'_HEADER_ADD', 'value_const'=>'Add');
$constLang[] = array('const'=>'_HEADER_EDIT', 'value_const'=>'Edit');
$constLang[] = array('const'=>'_CATEGORY', 'value_const'=>'Category');
$constLang[] = array('const'=>'_DML_CAT_MUST_SELECT_NAME', 'value_const'=>'Category name must be not empty');
$constLang[] = array('const'=>'_CATEGORIES_NAME', 'value_const'=>'Categories');
$constLang[] = array('const'=>'_A_SELECT_IMAGE', 'value_const'=>'- Select Image -');
$constLang[] = array('const'=>'_A_SELECT_TOP', 'value_const'=>'Top');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_TITLE', 'value_const'=>'Category Alias');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_NAME', 'value_const'=>'Category Title');
$constLang[] = array('const'=>'_CATEGORIES__IMAGEPREVIEW', 'value_const'=>'No preview available');
$constLang[] = array('const'=>'_CATEGORIES__DETAILS', 'value_const'=>'Details');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_IMAGEPOS', 'value_const'=>'Image Position');
$constLang[] = array('const'=>'_CATEGORIES__PARENTITEM', 'value_const'=>'Parent Item');
$constLang[] = array('const'=>'_DELETED', 'value_const'=>'Deleted'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_HOUSES', 'value_const'=>'RealEstateManager - Rent out a house' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_RETURN', 'value_const'=>'RealEstateManager - Return House from a lease' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMP', 'value_const'=>'Import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_EXP', 'value_const'=>'Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_CATEGORIES', 'value_const'=>'- All Categories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_CATEGORIES', 'value_const'=>'Select Categories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_RENT', 'value_const'=>'Select house to rent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_RENT', 'value_const'=>'- All Houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_RENT', 'value_const'=>'Rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_RENT', 'value_const'=>'Not Rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_USERS', 'value_const'=>'- All Users');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_PUBLIC', 'value_const'=>'Select Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_PUBLIC', 'value_const'=>'- All Houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_PUBLIC', 'value_const'=>'Not Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PUBLIC', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH', 'value_const'=>'Search Houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_KEYWORD', 'value_const'=>'Search Keywords');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_BUTTON', 'value_const'=>'Search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW', 'value_const'=>'RealEstateManager : Houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH', 'value_const'=>'Search:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_KOM', 'value_const'=>'You must first create a Category for this Section.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTYID', 'value_const'=>'Property ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RESULT', 'value_const'=>'Result');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COMMENT', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CATEGORY', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSES', 'value_const'=>'# House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COVER', 'value_const'=>'View');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COUNTRY', 'value_const'=>'Country');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REGION', 'value_const'=>'Region');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CITY', 'value_const'=>'City');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ZIPCODE', 'value_const'=>'Zipcode');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDRESS', 'value_const'=>'Address');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_NO_LOCATION_AVAILIBLE', 'value_const'=>'No location available');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE', 'value_const'=>'Title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUILD_YEAR', 'value_const'=>'Built year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTY_TYPE', 'value_const'=>'Property type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RATING', 'value_const'=>'Rating');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL', 'value_const'=>'Picture URL');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE', 'value_const'=>'Picture');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_URL', 'value_const'=>' Buy from ] link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TO', 'value_const'=>'Rent to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM', 'value_const'=>'Rent from');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_UNTIL', 'value_const'=>'Rent until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL', 'value_const'=>'Rent from - until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL_NOT_KNOWN', 'value_const'=>'unknown');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_USER', 'value_const'=>'User');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_EMAIL', 'value_const'=>'Email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_ADRES', 'value_const'=>'Postal mailing address');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_ADRES', 'value_const'=>'Phone number');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TIME', 'value_const'=>'Rent until: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HITS', 'value_const'=>'Hits');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LINE', 'value_const'=>'Reorder');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT', 'value_const'=>'Rent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLIC', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTROL', 'value_const'=>'Checked out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_DATE', 'value_const'=>'Review date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD', 'value_const'=>'Add a main photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OTHER_PICTURES_URL_UPLOAD', 'value_const'=>'Add more photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_DESC', 'value_const'=>'If you upload a picture, the URL of the current picture will be deleted and reset to the uploaded picture.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD_ERROR', 'value_const'=>'Error uploading picture! Please note that only image formats (jpg, png, gif) are supported');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICE', 'value_const'=>'Price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_INFORMATIONS', 'value_const'=>'Rent information');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_ACTUAL', 'value_const'=>'Actual edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD', 'value_const'=>'Upload edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DOWNLOAD', 'value_const'=>'Download edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DELETE', 'value_const'=>'Delete edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT', 'value_const'=>'Edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_ERROR', 'value_const'=>'Error uploading edocument!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_CB', 'value_const'=>'Rent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REQUIRED', 'value_const'=>'Required');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDREVIEW', 'value_const'=>'Add Review');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEWS', 'value_const'=>'Reviews');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SAVE', 'value_const'=>' Save ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU', 'value_const'=>' Book it! ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU_SAVE', 'value_const'=>' Submit Rent Request ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW', 'value_const'=>'Review');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_TITLE', 'value_const'=>'Title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_RATING', 'value_const'=>'Rating');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_COMMENT', 'value_const'=>'Comment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ANONYMOUS', 'value_const'=>'Anonymous');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_CLICKS', 'value_const'=>'Featured clicks');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_SHOWS', 'value_const'=>'Featured shows');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_TITLE', 'value_const'=>'Please enter a Title for your review!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_COMMENT', 'value_const'=>'Please enter a Text for your review!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_RATING', 'value_const'=>'Please enter a Rating for your review!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME', 'value_const'=>'Please enter name!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL', 'value_const'=>'Please enter e-mail!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_MAILING', 'value_const'=>'Please enter a valid Postal Address for your rent request!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_UNTIL', 'value_const'=>'Please enter correct Return date.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_ALERT', 'value_const'=>'Check out must be more Check in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_DATE', 'value_const'=>'Wrong date!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_NOT_USED', 'value_const'=>'Not specified');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PTBR', 'value_const'=>'Brazilian Portuguese'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DK', 'value_const'=>'Danish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DUT', 'value_const'=>'Dutch');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ENG', 'value_const'=>'English');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FAR', 'value_const'=>'Farsi');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FRE', 'value_const'=>'French');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_GER', 'value_const'=>'German');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ITA', 'value_const'=>'Italian');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PR', 'value_const'=>'Portuguese');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ROM', 'value_const'=>'Romanian');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_RUS', 'value_const'=>'Russian');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SPA', 'value_const'=>'Spanish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SWE', 'value_const'=>'Swedish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO', 'value_const'=>'NO');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YES', 'value_const'=>'YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IS_EDITED', 'value_const'=>'The house title is currently being edited by another administrator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_DEL', 'value_const'=>'Error deleting house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FRONTEND', 'value_const'=>'Settings Frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BACKEND', 'value_const'=>'House Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT', 'value_const'=>'PropertyID auto-increment'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_HEAD', 'value_const'=>'PropertyID auto increment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_BODY', 'value_const'=>'Set Yes if you want to use PropertyID auto-increment. NO if you want use manually entered PropertyID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD', 'value_const'=>'edocument support');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_HEAD', 'value_const'=>'edocument support');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_BODY', 'value_const'=>'YES if you want to activate edocument support for the administrator interface.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION', 'value_const'=>'Location of edocuments');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'edocuments location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'The location of the uploaded edocuments on the server. The path is relative to the main Joomla directory and must start and end with a /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW', 'value_const'=>'Show edocuments download link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_HEAD', 'value_const'=>'Show edocuments download in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_BODY', 'value_const'=>'YES if you want to show an edocument download link in the frontend.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW', 'value_const'=>'Show form "Add Review"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_HEAD', 'value_const'=>'Show reviews in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show form "Add Review" on the page of house on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL', 'value_const'=>'Allow Reviews');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow Reviews');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Reviews in the frontend. This function will be activated only if --Show Reviews-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW', 'value_const'=>'Show form "Book Now"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_HEAD', 'value_const'=>'Show Rent status in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show form "Book Now" on the page of house for rent on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW', 'value_const'=>'Show houses status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show houses status on the page of all houses and single categories on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Allow Rent Requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow Rent Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Rent Requests in the frontend. This function will be activated only if --Show Rent Status-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW', 'value_const'=>'Show price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_HEAD', 'value_const'=>'Show price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_BODY', 'value_const'=>'Set Yes to show the price of houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ITEM_IN_PAGE', 'value_const'=>'Houses per page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_BODY', 'value_const'=>'Set number of Houses shown per page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_HEAD', 'value_const'=>'Pagination.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE', 'value_const'=>'Thumbnails, list view ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_HEAD', 'value_const'=>'House photos size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_BODY', 'value_const'=>'Set size of images for list view - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS', 'value_const'=>'Items per page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_HEAD', 'value_const'=>'Page items');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_BODY', 'value_const'=>'Set the number of items per page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL', 'value_const'=>'Review email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_HEAD', 'value_const'=>'Review email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about adding reviews.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL', 'value_const'=>'Rent Request email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_HEAD', 'value_const'=>'Rent Request email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about booking houses.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REQUEST_RENT', 'value_const'=>'RealEstateManager : Booking Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT', 'value_const'=>'RealEstateManager : About');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ABOUT', 'value_const'=>'About');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_RELEASENOTE', 'value_const'=>'Releasenote');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_CHANGELOG', 'value_const'=>'Changelog');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT', 'value_const'=>'Welcome to RealEstateManager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT_INTRO', 'value_const'=>'Thank you for using our component!<br /><br />
RealEstateManager allows you to manage large house catalogues. It comes with category and subcategory support and you can add a PropertyID for your internal reference. Rent management is built-in, with a rent request possibility for users of your website. RealEstateManager also offers the possibility of house reviews by users, with review management in the backend. Edocument support is built-in. House information and house photos can be entered manually. <br/ ><br />
NOTES: <br/ >
- for download photos to your server to work, you need to compile PHP5 with CURL support<br />
- for csv export to work, you need to compile PHP5 with XSL support<br/ >
- for CAPTCHA to work, you need to compile PHP5 with GD support<br />
<br />
On the website <a href="http://www.ordasoft.com">www.ordasoft.com</a> you can find RealEstateManager Manuals, additional Language files, Support Forums and also download additional modules and plugins.<br />
<br />
We are available for Custom Development if you want a new feature added to RealEstateManager. Please mail your exact requirements to <a href="mailto:sales@ordasoft.com">sales@ordasoft.com</a> and we will get back to you with a quote. When you order a paid Customisation, you will receive the next PRO version with your custom feature added.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT1', 'value_const'=>'The fields below only need to be filled in manually when you have set ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT2', 'value_const'=>'. otherwise they will be ignored.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID_CHECK', 'value_const'=>'Please insert an PropertyID for this house!');    
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID', 'value_const'=>'A house with this PropertyID already exists!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY', 'value_const'=>'You must select a Category for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_TITLE', 'value_const'=>'Rent Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_RENT', 'value_const'=>'The list shows the houses selected for renting.<br />If it is empty, please check your selection again.');  
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME', 'value_const'=>'Name');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL', 'value_const'=>'Email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_MAILING', 'value_const'=>'Description');     
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL', 'value_const'=>'Check Out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM', 'value_const'=>'Check In');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_THANKS', 'value_const'=>'Your Booking was stored in our database. We will check your request and inform you as soon as possible.<br />Thank you for using our service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_REQUEST_THANKS', 'value_const'=>'Your Message was stored in our database. We will check your request and inform you as soon as possible.<br />Thank you for using our service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_OBJECT', 'value_const'=>'RealEstateManager: Rent Request accepted');     
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT1', 'value_const'=>'The house');  
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT2', 'value_const'=>'you requested is ready to be rented out.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_SAVE', 'value_const'=>'Save');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RENT', 'value_const'=>'Rent house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RETURN', 'value_const'=>'Return house from rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_ACCEPT', 'value_const'=>'Accept request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DECLINE', 'value_const'=>'Decline request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_IMPORT', 'value_const'=>'Import houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EXPORT', 'value_const'=>'Export houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DELETE_REVIEW', 'value_const'=>'Delete review');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_REVIEW', 'value_const'=>'Edit review');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_GENERAL_INFO', 'value_const'=>'General information:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_VERSION', 'value_const'=>'Version:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_RELEASE_DATE', 'value_const'=>'Release date:'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECTLINK', 'value_const'=>'Project link:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECT_HOST', 'value_const'=>'Project host:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_LICENSE', 'value_const'=>'License:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_WARRANTY', 'value_const'=>'This program is distributed in the hope that it will be useful, but without any warranty. See the included LICENSE.TXT for more details.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_DEVELOP', 'value_const'=>'Developed by:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_HOMEPAGE', 'value_const'=>'Homepage');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_URL', 'value_const'=>'edocument Download Link URL');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL', 'value_const'=>'Allow edocuments download');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow edocuments download in the frontend. This function will only be activated if --Show edocuments Download Link-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow edocuments download');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL', 'value_const'=>'Allow price:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow price in the frontend. This function will be activated only if --Show Price-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_REVIEW_MANAGER', 'value_const'=>'RealEstateManager : Reviews');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_HOUSE', 'value_const'=>'House address');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW', 'value_const'=>'Review title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_KEYGUEST', 'value_const'=>'Type the characters you see in the picture above into the box below.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT', 'value_const'=>'Print');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_SELECT', 'value_const'=>'Please select the columns for printing and then click [ Next ]!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FONT_SIZE', 'value_const'=>'Font size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FORMAT', 'value_const'=>'Format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW', 'value_const'=>'Show edocument download license');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_BODY', 'value_const'=>'Show edocument download license accept/decline before allowing edocument download from the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_HEAD', 'value_const'=>'Show edocument download license');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_TITLE', 'value_const'=>'License Agreement');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_ACCEPT', 'value_const'=>'Accept?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW', 'value_const'=>'Show button [ Buy now ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_HEAD', 'value_const'=>'Show button [ Buy now ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_BODY', 'value_const'=>'Shows button [ Buy now ] next to the house in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL', 'value_const'=>'Allow button [ Buy now ]:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Show button [ Buy now ] in the frontend for the selected categories. This function will be activated only if --Show button [ Buy now ]-- is also set to YES! You can select multiple categories.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button [ Buy now ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_BU', 'value_const'=>'Full data export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_RECOVER', 'value_const'=>'Full data import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_CONF', 'value_const'=>'This operation will remove ALL existing RealEstateManager data before importing. Do you want to continue?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;IMPORT:</strong>
<ul>
	<li>At the moment the following CSV format is supported:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;Description&nbsp;|&nbsp;&nbsp;|&nbsp;Listing type&nbsp;|&nbsp;Price&nbsp;|&nbsp;Price type&nbsp;|&nbsp;Title&nbsp;|&nbsp;Address&nbsp;|&nbsp;...&nbsp;|</li>
	<li>Fields are separated by a pipe character (<strong>&nbsp;|&nbsp;</strong>)</li>
	<li>You must import a whole list with just PropertyID by leaving the other fields empty, for example:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;Price&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;Title&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>WARNING:</strong>&nbsp;do not use CSV import if there are House Reviews present, in that case use Full data import instead!</li>
</ul>
<strong>XML&nbsp;IMPORT:</strong>
<ul>
	<li>import data in XML format</li>
	<li><strong>WARNING:</strong>&nbsp;do not use XML import if there are House Reviews present, in that case use full data import!</li>
	<li><strong>WARNING:</strong>&nbsp;associations between houses will not be saved!</li>
	<li><strong>WARNING:</strong>&nbsp;you have to upload images singly, no photos will be saved!</li>
</ul>
<strong>FULL&nbsp;DATA&nbsp;IMPORT:</strong>
<ul>
	<li>This import will import all RealEstateManager data and restore all fields and details</li>
	<li>This option will overwrite ALL existing entries, so be careful when using it!</li>
  <li>For restore all Houses photos, please restore all files saved before from folder: --components/com_realestatemanager/photos--!</li>
  <li>For restore all Houses eDocuments, please restore all files saved before from folder what you set in  setting backend --Location of edocuments--!</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_EXPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;EXPORT:</strong>
<ul>
	<li>CSV export will contain all fields for further editing in a text editor or spreadsheet application</li>
	<li>Please note that for subsequent import, only the following CSV format is supported:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;Description&nbsp;|&nbsp;Link&nbsp;|&nbsp;Listing type&nbsp;|&nbsp;Price&nbsp;|&nbsp;Price type&nbsp;|&nbsp;Title&nbsp;|&nbsp;Address&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>WARNING:</strong> if you want to import later including House Reviews, use Full data export instead!</li>
</ul>
<strong>XML&nbsp;EXPORT:</strong>
<ul>
	<li>Export data in XML</li>
  <li><strong>WARNING:</strong> if you want to import later including House Reviews, use Full data export instead!</li>
  <li><strong>WARNING:</strong>&nbsp;associations between houses will not be saved!</li>
        <li><strong>WARNING:</strong>&nbsp;you have to upload images singly, no photos will be saved!</li>
	</ul>
<strong>FULL&nbsp;DATA&nbsp;EXPORT:</strong>
<ul>
	<li>This export will export all RealEstateManager data and save all fields and entries</li>
	<li>You can later use these sql files to restore your RealEstateManager data in full</li>
	<li>This subsequent import will overwrite ALL existing entries, so be careful when using it!</li>
  <li>To restore all house photos, please restore all files from folder: --components/com_realestatemanager/photos--!</li>
  <li>To restore all houses eDocuments, please restore all files from the folder you have set in [Settings Backend] -- [Location of edocuments]</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND', 'value_const'=>'Send Review Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_HEAD', 'value_const'=>'Send Review Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_BODY', 'value_const'=>'Set Yes if you want to be notified through email when a user adds review.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'User groups from which Review notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'User groups from which Review notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose which user groups will send Review notifications. This function will be activated only if --Send Review Notification-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND', 'value_const'=>'Send Rent Request  Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_HEAD', 'value_const'=>'Send Rent Request  Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_BODY', 'value_const'=>'Set Yes if you want to be notified through email when a user books house.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'User groups from which Rent Request notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'User groups from which Rent Request notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose which user groups will send Rent Request notifications. This function will be activated only if --Send Rent Request Notification-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW_COMMENT', 'value_const'=>'Review comment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_HEAD', 'value_const'=>'Custom Category images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_BODY', 'value_const'=>'If set to YES you can assign a custom image to every category instead of the standard folder icon. You can then adjust the category images in [ RealEstateManager ] - [ Manage&nbsp;Categories ] - [ Edit ] - [ Select&nbsp;image ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_RETURN_HOUSES', 'value_const'=>'You can not return house from rent that were not rent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RENT_HOUSES', 'value_const'=>'Please make a selection from the list to Rent Нouses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RETURN_HOUSES', 'value_const'=>'Please make a selection from the list to Return Houses from rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ACCEPT_REQUEST', 'value_const'=>'Please make a selection from the list to Accept Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_DECLINE_REQUEST', 'value_const'=>'Please make a selection from the list to Decline Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_IMPORT', 'value_const'=>'You must select a type to import!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_EXPORT', 'value_const'=>'You must select a type to export!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_LISTING_TYPE', 'value_const'=>'You must select a Listing type for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_ADDRESS', 'value_const'=>'Please insert an Address for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_PRICE', 'value_const'=>'Please insert a Price for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_TITLE', 'value_const'=>'Please insert a Title for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_ROOMS', 'value_const'=>'Please enter a valid number of Rooms!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BATHROOMS', 'value_const'=>'Please enter a valid number of Bathrooms!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BEDROOMS', 'value_const'=>'Please enter a valid number of Bedrooms!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_YEAR', 'value_const'=>'Please enter a valid Build year for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_AREA', 'value_const'=>'Please enter a valid Area for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_LOT_SIZE', 'value_const'=>'Please enter a valid Lot size for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_HOUSE_SIZE', 'value_const'=>'Please enter a valid size for this house!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_NAME', 'value_const'=>'Please enter a Name for your buying request!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_EMAIL', 'value_const'=>'Please enter a valid e-mail address for your buying request!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_PHONE', 'value_const'=>'Please enter a valid Phone Number for your buying request!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_TYPE', 'value_const'=>'Listing type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_STATUS', 'value_const'=>'Listing status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ROOMS', 'value_const'=>'Rooms');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BATHROOMS', 'value_const'=>'Bathrooms');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BEDROOMS', 'value_const'=>'Bedrooms');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT', 'value_const'=>'Agent name');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACT_AGENT', 'value_const'=>'Contact agent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT_INFO', 'value_const'=>'Agent info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PHOTOS', 'value_const'=>'Photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICING', 'value_const'=>'Pricing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OVERVIEW', 'value_const'=>'Overview');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AMENITIES', 'value_const'=>'Amenities');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BOOK_NOW', 'value_const'=>'Book now');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXPIRATION_DATE', 'value_const'=>'Expiration date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LOT_SIZE', 'value_const'=>'Lot size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSE_SIZE', 'value_const'=>'House size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GARAGES', 'value_const'=>'Garages');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPROVED', 'value_const'=>'Approved');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REQUEST_PHONE', 'value_const'=>'Phone');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_REQUIREMENT_FIELDS', 'value_const'=>'Required fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_RECOMMENDED_FIELDS', 'value_const'=>'Recommended fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADDRESS_FIELDS', 'value_const'=>'Address fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_OPTIONAL_FIELDS', 'value_const'=>'Optional fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTO_MANAGE', 'value_const'=>'Photo manage');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTOGALERY', 'value_const'=>'Gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADVERTISMENT', 'value_const'=>'Advertisment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING', 'value_const'=>'Customer\'s information ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER', 'value_const'=>'RealEstateManager : Sale Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SEND_MESSAGE', 'value_const'=>'Send message');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND', 'value_const'=>'Send Buying Request  Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_HEAD', 'value_const'=>'Send Buying Request  Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_BODY', 'value_const'=>'Set Yes if you want to be notified through email when a user sends message.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'User groups from which Buying Request notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'User groups from which Buying Request notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose which user groups will send Buying Request notifications. This function will be activated only if --Send Buying Request Notification-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL', 'value_const'=>'Buying Request email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG', 'value_const'=>'RealEstateManager : Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REMOVE_MAIN_PHOTO', 'value_const'=>'Remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NEW_PHOTO', 'value_const'=>'Photo ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_RENT_OUT', 'value_const'=>'House rent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT', 'value_const'=>'For rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE', 'value_const'=>'For sale');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_RETURN', 'value_const'=>'Rent return');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB', 'value_const'=>'Show Location tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_HEAD', 'value_const'=>'Show Location tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_BODY', 'value_const'=>'Set YES to display Location tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB', 'value_const'=>'Show Reviews tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_HEAD', 'value_const'=>'Show Reviews tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_BODY', 'value_const'=>'Set YES to display Reviews tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_ADD_HOUSE', 'value_const'=>' Add House ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_PUBLISH', 'value_const'=>'Publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_UNPUBLISH', 'value_const'=>'Unpublish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_DELETE', 'value_const'=>'Delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RETURN_HOUSE_FROM_RENT', 'value_const'=>'Return house from rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT', 'value_const'=>'Rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW', 'value_const'=>'Show button "Add House"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_HEAD', 'value_const'=>'Show button "Add House"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_BODY', 'value_const'=>'Set Yes to show button "Add House" in the list houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL', 'value_const'=>'Allow button "Add House" ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button "Add House"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button "Add House" in the frontend. This function will be activated only if --Show button [ Add House ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACTS', 'value_const'=>'Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS', 'value_const'=>'Show contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_HEAD', 'value_const'=>'Show Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_BODY', 'value_const'=>'Set Yes to show owner contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION', 'value_const'=>'Location of photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'The location of the uploaded photos on the server. The path is relative to the main Joomla directory and must start and end with a /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'Photos location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL', 'value_const'=>'Show Reviews tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Show Reviews tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Reviews tab in the frontend. This function will be activated only if --Show Reviews tab-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL', 'value_const'=>'Show Location tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Show Location tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow location tab in the frontend. This function will be activated only if --Show location tab-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL', 'value_const'=>'Show Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Show Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Contacts in the frontend. This function will be activated only if --Show Contacts-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNAVAILABLE_FOR_RENT', 'value_const'=>'Unavailable for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REAL_ESTATE_THANKS', 'value_const'=>'Your Real Estate was stored in our database.<br />Thank you for using our service');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_FROM', 'value_const'=>'Available for rent from');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_UNTIL', 'value_const'=>'Available for rent until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_NOTHING_FOUND', 'value_const'=>'Nothing found.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_DESCRIPTION', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_LOCATION', 'value_const'=>'Location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_ALL', 'value_const'=>'All information');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_REVIEWS', 'value_const'=>'Reviews');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_SELECT', 'value_const'=>'---select---');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_RENT', 'value_const'=>'House for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_SALE', 'value_const'=>'House for sale');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_LISTING_STATUS', 'value_const'=>'Active,Offer,Contract,Closed,Withdrawn');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_PROPERTY_TYPE', 'value_const'=>'Apartment,Commercial,Condo,Coop,Farm,Land,Manufactured,Multifamily,Ranch,Single family,Tic,Townhouse,Detached,Semi-Detached,Att/Row/Twnhouse,Multiplex,Commercial/Retail,Office,Store W/Apt/Office,Sale Of Business,Condo Apt,Co-Ownership Apt');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER', 'value_const'=>'Send answer to user');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_HEAD', 'value_const'=>'Buy request answer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_BODY', 'value_const'=>'Set Yes if you want to notify user about accepting or declining request.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM', 'value_const'=>'Form for answer to buy request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_BODY', 'value_const'=>'Past particular tags in "Buy request answer",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_HOUSEID', 'value_const'=>'propertyid');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_OWNER', 'value_const'=>'Owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_EXACTLY', 'value_const'=>'Exactly to all');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_RENT_ANSWER_SUBJECT', 'value_const'=>'Answer for your request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM', 'value_const'=>'Form for answer to rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_BODY', 'value_const'=>'Past particular tags in "Rent request answer",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_DESCTIPTION', 'value_const'=>'You can use this tags in your letter: <br/>{title} - title of rent house
          <br/>{answer} - declined or accepded<br/>{username} - the name of the user who requested a house<br/>
          {owneremail} - the email of the owner house<br/>{ownername} - the name of the owner house<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER', 'value_const'=>'Send answer to user');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_HEAD', 'value_const'=>'Rent request answer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_BODY', 'value_const'=>'Set Yes if you want to notify user about accepting or declining of booking.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_ACCEPTED', 'value_const'=>'Accepted');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_DECLINED', 'value_const'=>'Declined');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_RENT', 'value_const'=>'Edit rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL', 'value_const'=>'Allow owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users, whom allow show owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW', 'value_const'=>'Show owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_HEAD', 'value_const'=>'Show owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_BODY', 'value_const'=>'If choose "yes" then show owners list in frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_HEAD', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_BODY', 'value_const'=>'Set Yes to show house owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL', 'value_const'=>'Allow RSS for');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Select users for whom allow RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW', 'value_const'=>'Show button "RSS"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show button "RSS" in the list houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_HEAD', 'value_const'=>'Show RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST', 'value_const'=>'list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_GALLERY', 'value_const'=>'gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST_GALLERY', 'value_const'=>'User-selectable');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE', 'value_const'=>'View type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_HEAD', 'value_const'=>'View type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_BODY', 'value_const'=>'Select view type for houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REGISTRATIONLEVEL', 'value_const'=>'Allow publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_BODY', 'value_const'=>'Set Yes to allow publish houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD', 'value_const'=>'Publish added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_HEAD', 'value_const'=>'Publish added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users whom allow approve houses from frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL', 'value_const'=>'Allow approve');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow approve');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_BODY', 'value_const'=>'Set Yes to allow approve houses from frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD', 'value_const'=>'Approve added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_HEAD', 'value_const'=>'Approve added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button "Print PDF"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button "Print PDF"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button "Print PDF" in the frontend. This function will be activated only if --Show button [ print PDF ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button "Print View"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button "Print View"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button "Print View" in the frontend. This function will be activated only if --Show button [ print View ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button "Send Link"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button "Send Link"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button "Send Link" in the frontend. This function will be activated only if --Show button [ send Mail ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW', 'value_const'=>'Show button "Send Link"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button "Send Link"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_BODY', 'value_const'=>'Set Yes to show button "Send Link" in the list houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW', 'value_const'=>'Show button "Print View"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button "Print View"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_BODY', 'value_const'=>'Set Yes to show button "Print View" in the list houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW', 'value_const'=>'Show button "Print PDF"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button "Print PDF"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_BODY', 'value_const'=>'Set Yes to show button "Print PDF" in the list houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_USER_HOUSES', 'value_const'=>'User houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DESCRIPTION', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNER', 'value_const'=>'Username');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HAVENOT_HOUSES_RSS', 'value_const'=>'There have not houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HAVENOT_HOUSES', 'value_const'=>'You have not houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DELETE_HOUSES', 'value_const'=>'Are you sure?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_NOT_SELECTED', 'value_const'=>'Please select houses first!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NUMBER_HOUSES', 'value_const'=>'Houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNERS', 'value_const'=>'Owners');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_ACCESS_PAGE', 'value_const'=>'Sorry, you have not access to this page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_OWNERSLIST', 'value_const'=>'Owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_OWNERSLIST', 'value_const'=>'Owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SHOW_MY_HOUSES', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_MY_HOUSES', 'value_const'=>'My houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLISH', 'value_const'=>'Publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNPUBLISH', 'value_const'=>'Unpublish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE', 'value_const'=>'Delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ID', 'value_const'=>'Id');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDIT', 'value_const'=>'Edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FULL_XML', 'value_const'=>'Full XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_EDIT', 'value_const'=>'RealestateManager - Edit house rent details' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND', 'value_const'=>'Send Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_HEAD', 'value_const'=>'Send Add House Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_BODY', 'value_const'=>'Set Yes if you want to be notified through email when a user adds house.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'User groups from which Add House notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'User groups from which Add House notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose which user groups will send Add House notifications. This function will be activated only if --Send Add House Notification-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW', 'value_const'=>'Show form "Send Message"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_HEAD', 'value_const'=>'Show Buy status in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show form "Send Message" on the page of house for sale on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Allow Buy Requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow Buy Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Buy Requests in the frontend. This function will be activated only if --Show Buy Status-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE', 'value_const'=>'Main image size, px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_BODY', 'value_const'=>'Set size of main images- width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_HEAD', 'value_const'=>'House main photos size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE', 'value_const'=>'Thumbnail size, px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_HEAD', 'value_const'=>'Photo size in house gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_BODY', 'value_const'=>'Set size of thumbnails - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE', 'value_const'=>'House upload photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_HEAD', 'value_const'=>'House upload photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_BODY', 'value_const'=>'Set upload photo size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_THUMBNAIL_SETTINGS', 'value_const'=>'Crop image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_THUMBNAIL_TT_BODY', 'value_const'=>'Set Yes to crop images and No to scale images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL', 'value_const'=>'Email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_HEAD', 'value_const'=>'Add House email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about adding houses.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY', 'value_const'=>'Booking Expiration');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_HEAD', 'value_const'=>'Rent before end notify');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_BODY', 'value_const'=>'Set Yes if you want to be notified through email when booking expires.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS', 'value_const'=>'Days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_HEAD', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_BODY', 'value_const'=>'Number of days before booking expiration to get notification.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL', 'value_const'=>'Rent end email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_HEAD', 'value_const'=>'Rent end email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about booking expiration.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP', 'value_const'=>'Show location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_HEAD', 'value_const'=>'Location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_BODY', 'value_const'=>'Set Yes to show location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE', 'value_const'=>'Save databases when updating');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE_TT_HEAD', 'value_const'=>'Save databases when updating');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE_TT_BODY', 'value_const'=>'Set Yes to update component with saving databases and No to update component with removing databases');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_CATEGORIES', 'value_const'=>'Check categories of houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_RENT_REQUEST', 'value_const'=>'Rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HOUSE_NOT_PUBLISHED', 'value_const'=>'You can\'t view this page because it not published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HOUSE_NOT_APPROVED', 'value_const'=>'You can\'t view this page because it not approved by administrator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_EDIT_HOUSE', 'value_const'=>'Edit House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_ADD_HOUSE', 'value_const'=>'Add House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_WARNING_NO_LOGIN', 'value_const'=>'You are not logged in! If you want edit house in future, please log in!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CLICKMAP', 'value_const'=>'Click on the map to choose the house location:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE_BIG', 'value_const'=>'no-img_eng_big.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_EDIT_HOUSE', 'value_const'=>'Edit house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_DESCTIPTION', 'value_const'=>'You can use this tags in your letter: <br/>{title} - title of buy house
          <br/>{answer} - declined or accepded<br/>{username} - the name of the user who requested a house<br/>
          {owneremail} - the email of the owner house<br/>{ownername} - the name of the owner house<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADVANCED_SEARCH', 'value_const'=>'Advanced<br />search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FROM', 'value_const'=>'from');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TO', 'value_const'=>'to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ALL', 'value_const'=>'all');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT', 'value_const'=>'Available for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_UNTIL', 'value_const'=>'until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEK', 'value_const'=>'Week');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEKEND', 'value_const'=>'Weekend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MIDWEEK', 'value_const'=>'Midweek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MONTH', 'value_const'=>'Month');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_CALENDAR', 'value_const'=>'Calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_ADD_PRICE', 'value_const'=>'Add price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_SELECT_DELETE', 'value_const'=>'Select to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_NEW_PRICE', 'value_const'=>'New price rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_CALENDAR_ADD_NEW_PRICE', 'value_const'=>'Add new price rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users, whom allow show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW_TT_HEAD', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW_TT_BODY', 'value_const'=>'If choose "yes" then show calendar tab in frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW_TT_HEAD', 'value_const'=>'Show calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW_TT_BODY', 'value_const'=>'Show house calendar or not');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER', 'value_const'=>'Default price label for calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER_TT_BODY', 'value_const'=>'Default price labels for calendar (weekend, week, midweek)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER_TT_HEAD', 'value_const'=>'Default price label for calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER', 'value_const'=>'RealEstateManager : Language Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MANAGER_LANG_TAG', 'value_const'=>'Lang tag');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_CONST', 'value_const'=>'Constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_VALUE_CONST', 'value_const'=>'Value constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_CONST', 'value_const'=>'Search by constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_VALUE_CONST', 'value_const'=>'Search by value constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SYS_TYPE', 'value_const'=>'Sys type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE', 'value_const'=>'Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FEATURED_MANAGER', 'value_const'=>'RealEstateManager : Amenities Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE', 'value_const'=>'Amenities');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_NAME_ALIAS', 'value_const'=>'Name');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY_ALIAS', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE_MANAGER', 'value_const'=>'Amenities Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_IMAGE', 'value_const'=>'Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_REMOVE', 'value_const'=>'Select photo if it is necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_RECOMMENDED_IMAGE', 'value_const'=>'Recommended image size 25 x 25 pixels');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES', 'value_const'=>'Categories for Manager Amenities');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_BODY', 'value_const'=>'Category must be entered, separated by commas');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_HEAD', 'value_const'=>'Categories for Manager Amenities');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE', 'value_const'=>'Show Feature Icon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE_TT_BODY', 'value_const'=>'Show Feature Icon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE_TT_HEAD', 'value_const'=>'If choose "yes" then show Icon for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW', 'value_const'=>'Show title of category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_BODY', 'value_const'=>'Show title of Category Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_HEAD', 'value_const'=>'Set Yes to display title of category amenities');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY', 'value_const'=>'Currency');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_BODY', 'value_const'=>'If you want to use other currencies, enter the values as: USD = 1; EUR = 3.15; or USD=; EUR=; Available for paypal currencies: AUD, CAD, CZK, DKK, EUR, HKD, HUF, JPY, NOK, NZD, PLN, SGD, SEK, CHF, USD, RUB, ILS, MXN, PHP, GBP, THB . Available for 2checkout currencies: AFN, ALL, DZD, ARS, AUD, AZN, BSD, BDT, BBD, BZD, BMD, BOB, BWP, BRL, GBP, BND, BGN, CAD, CLP, CNY, COP, CRC, HRK, CZK, DKK, DOP, XCD, EGP, EUR, FJD, GTQ, HKD, HNL, HUF, INR, IDR, ILS, JMD, JPY, KZT, KES, LAK, MMK, LBP, LRD, MOP, MYR, MVR, MRO, MUR, MXN, MAD, NPR, TWD, NZD, NIO, NOK, PKR, PGK, PEN, PHP, PLN, QAR, RON, RUB, WST, SAR, SCR, SGD, SBD, ZAR, KRW, LKR, SEK, CHF, SYP, THB, TOP, TTD, TRY, UAH, AED, USD, VUV, VND, XOF, YER .');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_HEAD', 'value_const'=>'Currency with coefficients');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW', 'value_const'=>'Show price separator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_BODY', 'value_const'=>'Show price separator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_HEAD', 'value_const'=>'Set Yes to show separator of price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GEOCOOR', 'value_const'=>'Get geographic coordinates');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA1_SHOW', 'value_const'=>'Show Custom Text Field 1');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA2_SHOW', 'value_const'=>'Show Custom Text Field 2');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA3_SHOW', 'value_const'=>'Show Custom Text Field 3');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA4_SHOW', 'value_const'=>'Show Custom Text Field 4');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA5_SHOW', 'value_const'=>'Show Custom Text Field 5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA6_SHOW', 'value_const'=>'Show Custom Dropdown Field 6');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA7_SHOW', 'value_const'=>'Show Custom Dropdown Field 7');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA8_SHOW', 'value_const'=>'Show Custom Dropdown Field 8');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA9_SHOW', 'value_const'=>'Show Custom Dropdown Field 9');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA10_SHOW', 'value_const'=>'Show Custom Dropdown Field 10');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA', 'value_const'=>'Custom Fields Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA6_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA7_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA8_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA9_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA10_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS', 'value_const'=>'Allowed Exts eDocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS_IMG', 'value_const'=>'Allowed Exts Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_PAGE_LAYOUT', 'value_const'=>'House Page Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALL_HOUSES_LAYOUT', 'value_const'=>'All Houses Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT', 'value_const'=>'Price Format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT_TT_BODY', 'value_const'=>'Choose format of price (point, comma or space) or enter your delimiter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_TIME_FORMAT', 'value_const'=>'Date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_FORMAT', 'value_const'=>'Date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_FORMAT_INFO', 'value_const'=>'Reorder date formats to set your date display format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TIME_FORMAT', 'value_const'=>'Time format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE', 'value_const'=>'%Y - Year; %m - month;  %d - day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TIME', 'value_const'=>'%H - hours; %i - minutes; %s - seconds');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW', 'value_const'=>'Show price unit');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_AFTER', 'value_const'=>'After');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_BEFORE', 'value_const'=>'Before');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT_INFO', 'value_const'=>'Select price ditlimer os set youre.');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_INFO', 'value_const'=>'Set After to show unit of prices affter price or Before to show unit of prices before prices');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CUSTOM_OWNER_EMAIL', 'value_const'=>'Custom owner email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_SHOW_ADDRESS', 'value_const'=>'Show address on map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_ADD_NEW_PHOTO', 'value_const'=>'Add new photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ORDER_BY', 'value_const'=>'Order By');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_TO_REMOVE', 'value_const'=>'Select photo if it is necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_FROM_GALLERY', 'value_const'=>'Select photos which are necessary to remove from photo gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_FOR_ADDFEATURE', 'value_const'=>'A short name to appear in FeatureMenus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_1_FOR_ADDCATEGORY', 'value_const'=>'A short name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_2_FOR_ADDCATEGORY', 'value_const'=>'A full name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_GENERAL_INFO', 'value_const'=>'General Info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_ADDITIONAL_INFO', 'value_const'=>'Additional Info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_PHOTOS_AND_DOCUMENTS', 'value_const'=>'Photos and Documents');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_OWNER_CONTACTS', 'value_const'=>'Owner Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_1', 'value_const'=>'Categories for Amenities Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_2', 'value_const'=>'Amenities List');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_1', 'value_const'=>'House Page Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_2', 'value_const'=>'Category Page Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_3', 'value_const'=>'Email Notification Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_4', 'value_const'=>'Administrator Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_5', 'value_const'=>'Plugins Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_IMAGE_HEADER_SETTINGS', 'value_const'=>'Image Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TABS_MANAGER_HEADER_SETTINGS', 'value_const'=>'Tab Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_LABEL_SELLER_CONTACT_SETTINGS', 'value_const'=>'Seller Contact Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_FEATURE_LIST_SETTINGS', 'value_const'=>'Amenities Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EXTRA_FIELDS_MANAGER', 'value_const'=>'Extra Fields Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EDOCUMENT_OPTIONS', 'value_const'=>'eDocument Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_COMMON_SETTINGS', 'value_const'=>'Button Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_RENT_REQUEST_OPTIONS', 'value_const'=>'Booking');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_BUY_REQUEST_OPTIONS', 'value_const'=>'Send message');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_ADD_HOUSE', 'value_const'=>'{title}
        [PropertyID]: {id}<br>
        A new house was added by {username}
        on {date} to category {category}.<br>
        Please log on and approve or deny this item.<br>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_REVIEW', 'value_const'=>'User {username} has added a Review to house:<br>{house_title}<br>
        Title Comment: {title}<br>
        Label Rating: [{rating}]<br>
        Review Comment: {comment}<br>
        Please log on and edit this review where necessary.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_REQUEST', 'value_const'=>"User {username} has submitted a booking for:<br>
        Customer name: {user_name}<br>
        Email: {user_email}<br>
        User mailing: {user_mailing}<br>
        Rent from: {rent_from}<br>
        Rent until: {rent_until}<br>
        PropertyID: {hid_value}<br>
        {house_title}<br>
        Please log on and approve or deny this booking");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_REQUEST_ANSWER', 'value_const'=>"Answer for your request:<br>
        Dear {username}!<br>
        Your booking for<br>
        {title} {owneremail} {ownername}<br>
        Answer: {answer}");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST', 'value_const'=>"
        User {username}  has submitted a message for:<br>
        Customer name: {customer_name}<br>
        Customer email: {customer_email}<br>
        Customer phone: {customer_phone}<br>
        Customer comment: {customer_comment}<br>
        PropertyID: {hid_value}<br>
        {house_title}<br>
        Please log on and approve or deny this message");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST_ANSWER', 'value_const'=>"Dear {username}!<br>
        Your message for<br>
        {title} {owneremail} {ownername}<br>
        Answer: {answer}<br>");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_BEFORE_END', 'value_const'=>
      "Rent User: {username}({user_email})<br>
      House: {house_title}<br>
      House ID: {ID}<br>
      PropertyID: {PropertyID}<br>");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br>{house_title} - title of added house
        <br>{username} - the name of the user who added a house
        <br>{hid_value} - identification number of the house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION_TT_BODY', 'value_const'=>'Past particular tags in "Send Buy Request Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br/>{house_title} - title of added house
          <br>{username} - the name of the user who added a house <br>{user_email} - email of the user who rents the house
          <br>{vid} - identification number of the house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION_TT_BODY', 'value_const'=>'Past particular tags in "Rent before end notify",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br>{house_title} - title of added house
          <br>{username} - the name of the user who added a house
          <br>{hid_value} - identification number of the house<br>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_TT_BODY', 'value_const'=>'Past particular tags in "Send Rent Request Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_DESCRIPTION', 'value_const'=>'You can use this tags in your letter: <br>{title} - title of added house
          <br>{id} - identification number of the house
          <br>{username} - the name of the user who added a house
          <br>{date} - date when house was added<br>{category} - category which the house was added in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_TT_BODY', 'value_const'=>'Past particular tags in "Send Add House Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_DESCRIPTION', 'value_const'=>'You can use this tags in your letter: <br>{username} - name of the user,what added a review
          <br>{house_title} - title of review house
          <br>{title} - title of the comment, {rating} - rating of the comment,
          <br>{comment} - body of the comment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_TT_BODY', 'value_const'=>'Past particular tags in "Send Review Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_SHOW_MY_HOUSES', 'value_const'=>'show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_EDIT_MY_HOUSES', 'value_const'=>'edit my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_RENT_REQUESTS', 'value_const'=>'rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_BUYING_REQUESTS', 'value_const'=>'buying requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALL_CATEGORIES_LAYOUT_TT_HEAD', 'value_const'=>'All Categories Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SINGLE_CATEGORY_LAYOUT_TT_HEAD', 'value_const'=>'Single Category Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SEARCH_LAYOUT_TT_HEAD', 'value_const'=>'Search layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_BODY', 'value_const'=>'Set Yes to display extra field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_HEAD', 'value_const'=>'Text field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_BODY', 'value_const'=>'Select which extra dropdown fields, you want to display');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_HEAD', 'value_const'=>'Dropdown field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_LABEL_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD', 'value_const'=>'Publish reviews');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD_TT_BODY', 'value_const'=>'Set Yes to publish added reviews automatically');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD_TT_HEAD', 'value_const'=>'Publish review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL', 'value_const'=>'Allow publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow publish to usergroup');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Chose the usergroup who can publish added review automatically');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_TEXT', 'value_const'=>'License text');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_REQUESTS', 'value_const'=>'Booking Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER_MENU', 'value_const'=>'Sale Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPORT_EXPORT', 'value_const'=>'Import/Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MENU', 'value_const'=>'Language Manager');                                
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS', 'value_const'=>'Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_GROUP', 'value_const'=>'Group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_COUNT_OF_ITEMS', 'value_const'=>'Number of houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_COUNT_OF_ITEMS_HELP', 'value_const'=>'How many houses users can publish from a specific group.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY', 'value_const'=>'Show buy for booking');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALLOW_PAYPAL_BUY', 'value_const'=>'Allow PayPal buy');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_RENT', 'value_const'=>'Show PayPal rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALLOW_PAYPAL_RENT', 'value_const'=>'Allow PayPal rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_YOUR_PAY_PAL_EMAIL', 'value_const'=>'Your PayPal email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SUCCESSFUL_RETURN', 'value_const'=>'Successful return url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_SUCCESSFUL_RETURN', 'value_const'=>'After successful payment returns the buyer on your page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMAGE_URL_PAYPAL', 'value_const'=>'Image url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_IMAGE_URL_PAYPAL', 'value_const'=>'Add image to PayPal page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CANCEL_RETURN_URL', 'value_const'=>'Cancel return url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_CANCEL_RETURN_URL', 'value_const'=>'If buyer press cancel in payment page, returns the buyer on your page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REAL_OF_TEST', 'value_const'=>'Real(yes) or a test(no) PayPal account');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REAL_OF_TEST_LABLE', 'value_const'=>'If real go to www.paypal.com else go to www.sandbox.paypal.com');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PAYPAL_LABLE', 'value_const'=>'Payment Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NUMBER_OF_PHOTOS', 'value_const'=>'Number of photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NUMBER_OF_PHOTOS_HELP', 'value_const'=>'How many photos in gallery users can publish from a specific group.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOTAL_PRICE', 'value_const'=>'Total price: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_NOW_BY_PAYPAL', 'value_const'=>'Go now to PayPal');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_INSTALL_PAYPAL', 'value_const'=>'Payment plugin is not installed');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE', 'value_const'=>'Special price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_DAY', 'value_const'=>'Price per day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_NIGHT', 'value_const'=>'Price per night');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_ADD_SPECIAL_PRICE', 'value_const'=>'Add special price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FROM', 'value_const'=>'From');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TO', 'value_const'=>'To');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_PRICE_PER_DAY', 'value_const'=>'Price per day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_CALCULATE', 'value_const'=>'Ð¡alculate');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_AND_RENT_TIME', 'value_const'=>'Time of rent and special price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO', 'value_const'=>'Calculate');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO_HELP', 'value_const'=>'if per day calculation all day(example of 2014-02-10 from 2014-02-16 is 7 days) if per night calculation all night (example of 2014-02-10 from 2014-02-16 is 6 nights)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_PER_NIGHT', 'value_const'=>'Nights');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IMAGES', 'value_const'=>'Images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXT_DOC', 'value_const'=>'Type the allowed extensions of eDocuments ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXT_IMAGES', 'value_const'=>'Type the allowed extensions of Images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_TAB_LABEL_PRICE', 'value_const'=>'Payment settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_NAME', 'value_const'=>'Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_LANGUAGE', 'value_const'=>'Select Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_CLON', 'value_const'=>'Clone');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ORDERS', 'value_const'=>'Orders');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_MARKER', 'value_const'=>'/images/marker-1.png,/images/marker-2.png,/images/marker-3.png,/images/marker-4.png,/images/marker-5.png,/images/marker-6.png,/images/marker-7.png,/images/marker-8.png,/images/marker-9.png,/images/marker-10.png,/images/marker-11.png,/images/marker-12.png,/images/marker-13.png');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CANCEL_URL_TEXT', 'value_const'=>'Message for unsuccessfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SUCCESSES_URL_TEXT', 'value_const'=>'Message for successfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CANCEL_URL_TEXT_TT_BODY', 'value_const'=>'Insert the Message on page with notification about unsuccessfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SUCCESSES_URL_TEXT_TT_BODY', 'value_const'=>'Insert the Message on page with notification about successfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EMAIL_NOTIFICATION_OPTIONS', 'value_const'=>'Add House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_REVIEW_NOTIFICATION_OPTIONS', 'value_const'=>'Review');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_PRICE_OPTIONS', 'value_const'=>'Price Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_DATE_TIME_OPTIONS', 'value_const'=>'Date Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_GROUP_SETTINGS', 'value_const'=>'Groups Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_EXTENSIONS_SETTINGS', 'value_const'=>'Extension Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_UPDATE_SETTINGS', 'value_const'=>'Update Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_CATEGORY_OPTIONS', 'value_const'=>'Category Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIEW_LISTING', 'value_const'=>'View listing');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE', 'value_const'=>'Thumbnails, gallery view ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE_TT_BODY', 'value_const'=>'Set size of images for gallery view - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about sending messages.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SELECT_ONE_ITEM', 'value_const'=>'Please select one item');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_ALERT_RETURNED', 'value_const'=>'House already returned');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_ASSOCIATED', 'value_const'=>'Error in rent, for associated');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALERT_NOT_IN_RENT', 'value_const'=>'You cannot return houses that were not lent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_FOR_RENT_ASOC', 'value_const'=>'This house has assitiated house not for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_FOR_RENT', 'value_const'=>'This house is not for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_BAD_DATE_ALERT', 'value_const'=>'Bad date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_CORRECT_CURRENCY', 'value_const'=>'You can not use paypal with this currencies, please set correct currencies or turn off paypal buttons ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CLON_ALERT', 'value_const'=>'You can clon only one house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_REVIEW_ALERT', 'value_const'=>'Please select one review for edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_CTEGORY_ALERT', 'value_const'=>'Select a category to delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_ITEM_ALERT', 'value_const'=>'You must select only one item for edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_AMENITY_ALERT', 'value_const'=>'Select an amenity to delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_NOT_IN_RENT', 'value_const'=>'You edit houses that were not lent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_SUCCESSFULL_PAYMENT', 'value_const'=>'You do success payment!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_UNSUCCESSFULL_PAYMENT', 'value_const'=>'You do unsuccess payment!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_INSTALL_PLUGIN', 'value_const'=>'Please install plugin of payment to enable payment feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PLUGIN', 'value_const'=>'Plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_URL', 'value_const'=>'Send email to admin before Booking end.<br /> For that you need create CRON job and connect to Cron check so URL:<br /> http://{yours site}/index.php?option=com_realestatemanager&Itemid={Yours ItemID}&task=rent_before_end_notify  with span - every day.<br /> Cron Jobs may look like:<br/> wget -q "http://localhost/index.php?option=com_realestatemanager&Iteid=56&task=rent_before_end_notify"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA', 'value_const'=>'Show captcha');
// $constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH', 'value_const'=>'Show search form<br />on category page');
// $constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_TT_BODY', 'value_const'=>'Display search block on category page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_TT_BODY', 'value_const'=>'Display captcha option in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SIZE_SUFFIX', 'value_const'=>'Sqrt');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW', 'value_const'=>'Show subcategory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_HEAD', 'value_const'=>'Show subcategory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_BODY', 'value_const'=>'If set to YES, you will see subcategory for every category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_SALE', 'value_const'=>'Show buy for sale');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_SALE_TT_BODY', 'value_const'=>'Show buy form after sale request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_TT_BODY', 'value_const'=>'Show buy form after book request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_FILE_NOT_ALLOWED', 'value_const'=>'File ext. not allowed to upload!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANG_ASSOCIATE_HOUSES', 'value_const'=>'Language associate houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANG_ASSOCIATE_CATEGORIES', 'value_const'=>'Language associate categories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FOR_HOUSES_WITH_LANG', 'value_const'=>'This property only for houses with language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YOU_HAVE', 'value_const'=>'You have');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MAXIMUM_COUNT_HOUSE_FOR_YOUR', 'value_const'=>'maximum count house for your group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TO_ADD_SPRICE_YOU_NEED', 'value_const'=>'To add special prices, you must first save property !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MAX_PHOTOS_LIMIT', 'value_const'=>'You have max photos. Limit for this users group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_NUMERIC_PROPERTYID_WARNING', 'value_const'=>'You have no numeric PropertyId. Please change all PropertyID to numeric or set to <No> option');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_INVALID_NUMBER', 'value_const'=>'Please enter a valid Number!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FILE_MIME_TYPE_NOT_MATCH', 'value_const'=>'File mime type not match file ext');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YOU_CAN_PUBLISH_ONLY', 'value_const'=>'You can publish only');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PLEASE_LOGIN', 'value_const'=>'Please login');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_HOUSE_ADDED', 'value_const'=>'New house added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUYING_REQUEST_ADDED', 'value_const'=>'New buying request added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_REVIEW_ADDED', 'value_const'=>'New house review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_RENT_REQUEST_ADDED', 'value_const'=>'New rent request added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_EXPIRE_NOTICE', 'value_const'=>'Rent expire notice');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSES_EXPIRE_NOTICE', 'value_const'=>'So houses rent expire soon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES', 'value_const'=>'Subcategories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPLY', 'value_const'=>'Apply');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SAVE_CATEGORY', 'value_const'=>'Save category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE_ORDER', 'value_const'=>'Delete Order');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MUST_RETURN_HOUSES_FROM_RENT', 'value_const'=>'You must return all houses from rent first!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_ID', 'value_const'=>'Order ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_TITLE', 'value_const'=>'House title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_EMAIL', 'value_const'=>'Email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_STATUS', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_PRICE', 'value_const'=>'Price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_PAID', 'value_const'=>'Paid');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DETAILS', 'value_const'=>'Details');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_USER', 'value_const'=>'User');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_USER_NAME', 'value_const'=>'Username');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_ACCEPT', 'value_const'=>'Accept type/info: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_SYSTEM', 'value_const'=>'Payment system: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_EMAIL', 'value_const'=>'Payer email: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_REASON', 'value_const'=>'Pending reason: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PAYPAL_ERROR', 'value_const'=>'In your request encountered an error, please contact the administrator!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LOAD_LANGUAGE', 'value_const'=>'Load languages');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNER_ID', 'value_const'=>'Owner ID:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_HISTORY', 'value_const'=>'Users Booking History');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_RENT_HISTORY', 'value_const'=>'Rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REQUEST_RENT_HISTORY', 'value_const'=>'RealEstateManager : Rent Hisory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_USER_RENT_HISTORY', 'value_const'=>'RealEstateManager : Users Rent Hisory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CURRENCY_ERROR', 'value_const'=>'Currency in your house does not match administrator settings, maybe they have been changed. Please reselect  currency in your house !');


$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_TRACK_KIND', 'value_const'=>'Please insert an track kind');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_TRACK_LANGUAGE', 'value_const'=>'Please insert an track language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_TRACK_TITLE', 'value_const'=>'Please insert an track title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_VIDEO_ERROR_UPLOAD_OFF', "value_const"=>"File uploads is off in your PHP settings.!");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_VIDEO_ERROR_POST_MAX_SIZE', "value_const"=>"Post max size in your PHP settings less than your video file.!");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_VIDEO_ERROR_UPLOAD_MAX_SIZE', "value_const"=>"Upload max file size in your PHP settings less than your video file.!");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO', 'value_const'=>'Video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_ATTRIBUTE', 'value_const'=>'Video source');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_DELETE', 'value_const'=>'Delete video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADD_NEW_VIDEO_FILE', 'value_const'=>'Add new video file');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK', 'value_const'=>'Track for video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_UPLOAD_URL', 'value_const'=>'Track download link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_DELETE', 'value_const'=>'Delete track');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADD_NEW_TRACK', 'value_const'=>'Add new track');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_ADD_ALTERNATIVE_VIDEO', 'value_const'=>'Add alternative video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_UPLOAD', 'value_const'=>'Upload video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_UPLOAD_URL', 'value_const'=>'Video download link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_UPLOAD_YOUTUBE_CODE', 'value_const'=>'Youtube code <br> (For example <br> OtPn6qDy5GU)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRIOTITY', 'value_const'=>'<p><font color="red">!!!</font>Youtube code has more priority. If you enter Youtube code you will see video in the frontend from youtube source</p><br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_UPLOAD_KIND', 'value_const'=>'Kind (Specifies the kind of text track)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_UPLOAD_SCRLANG', 'value_const'=>'Src lang (language of the track)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_UPLOAD_LABEL', 'value_const'=>'Label (Specifies the title of the text track)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIDEO_UPLOAD_ERROR', 'value_const'=>'Error uploading video!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_UPLOAD_ERROR', 'value_const'=>'Error uploading track!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TRACK_UPLOAD', 'value_const'=>'Upload track');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_VIDEOTRATCK_OPTIONS', 'value_const'=>'Video/Track Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_VIDEO', 'value_const'=>'Video and track support:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS_VIDEO', 'value_const'=>'Allowed Exts Video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS_TRACK', 'value_const'=>'Allowed Exts Track');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_VIDEOS_DOWNLOAD_LOCATION', 'value_const'=>'Location of video');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TRACKS_DOWNLOAD_LOCATION', 'value_const'=>'Location of track');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_TITLE', 'value_const'=>'Calendar of availability and rental rates per period');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_AVAILABLE', 'value_const'=>'Available date for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_NOT_AVAILABLE', 'value_const'=>'Not available date for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_MOD_MAP_SEARCH_ADDRESS_PLACEHOLDER', 'value_const'=>'Address');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_MOD_MAP_SEARCH_RANGE', 'value_const'=>'Range(km)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_MOD_SEARCH_CAT_PLACEHOLDER', 'value_const'=>'Select Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_MOD_MAP_SEARCH_BUTTON', 'value_const'=>'Search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_ORDERS_MANAGER', 'value_const'=>'RealEstateManager : Orders');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PAYPAL_F5_ERROR', 'value_const'=>'Please do not press f5 again!!!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_STREET_VIEW_TT_BODY', 'value_const'=>'Show Street View');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_STREET_VIEW', 'value_const'=>'Show Street View');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_OPTIONS', 'value_const'=>'TORONTOMLS RETS MLS Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_LOGIN', 'value_const'=>'Login');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_PASSWORD', 'value_const'=>'Password');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_IMPORT', 'value_const'=>'TREB XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_IMPORT_REQUIRED_FIELD', 'value_const'=>'Login and Password from rets.torontomls.net are required fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_UPDATE_MAP', 'value_const'=>'Update map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_UPDATE_MAP_DESCRIPTION', 'value_const'=>'Update map from all houses where latitude and longitude are undefined');
//----------------------add new constants-------------------------------
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_BOOKING_TT_BODY', 'value_const'=>'Display booking form captcha option in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_SENDMESSAGE_TT_BODY', 'value_const'=>'Display send message form captcha option in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_BOOKING', 'value_const'=>'Show booking captcha');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_SENDMESSAGE', 'value_const'=>'Show message captcha');
// ------ constants added in version 3.8 -----------------------------
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_GOOGLE_MAP', 'value_const'=>'Google Map Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_GOOGLEMAP_API_KEY', 'value_const'=>'Field to enter google map api key');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GOOGLEMAP_API_KEY', 'value_const'=>'Api key');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_GOOGLEMAP_API_KEY_ERROR', 'value_const'=>'Google Maps API error: missing key map error!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_GOOGLEMAP_API_KEY_LINK_MESSAGE', 'value_const'=>'To get Google Maps API key follow below link');
// wish list button
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_WISHLIST_SHOW_TT_BODY', 'value_const'=>'Set Yes to show button "Add/Remove to Wish List" in the list houses on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_WISHLIST_SHOW', 'value_const'=>'Show button "Add/Remove to Wish List"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_ADDED', 'value_const'=>'Added to wish list!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_ADD', 'value_const'=>'Add to wish list!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_REMOVED', 'value_const'=>'Removed from wishlist!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_REMOVE', 'value_const'=>'Remov from wishlist!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_ALREDY_IN', 'value_const'=>'Alredy in wish list!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_ERROR_ADDING', 'value_const'=>'Alredy in wish list!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_WISHLIST_ERROR_DELETE', 'value_const'=>'Alredy in wish list!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SEARCH_RESULT_LAYOUT', 'value_const'=>'Settings Layout Search Results');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_MAP_SEARCH_RESULT_LAYOUT_TT_BODY', 'value_const'=>'Show map for search results layout on the frontend!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_MAP_SEARCH_RESULT_LAYOUT', 'value_const'=>'Show map for search results layout!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_ORDER_BY_SEARCH_RESULT_LAYOUT_TT_BODY', 'value_const'=>'Show order by form for all layouts on the frontend!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_ORDER_BY_SEARCH_RESULT_LAYOUT', 'value_const'=>'Show order by form for all layouts!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_GROUP_ACCESS_TO_EDIT', 'value_const'=>'Editing options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_GROUP_ACCESS_EDIT_TT_BODY', 'value_const'=>'Users group who will have access to edit users houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_GROUP_ACCESS_EDIT', 'value_const'=>'Select users groups who have access to edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE', 'value_const'=>'Realestate upload photo size, px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_BODY', 'value_const'=>'Set upload photo size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_FOTOUPLOAD_SETTINGS', 'value_const'=>'Common settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SIZE_SUFFIX_AR', 'value_const'=>'Ar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_FORM_SEARCH_RESULT_LAYOUT_TT_BODY', 'value_const'=>'Show search form after searching');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_FORM_SEARCH_RESULT_LAYOUT', 'value_const'=>'Show search form');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_SORTING_OUT', 'value_const'=>'Sorting out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_IMPORT_LINK', 'value_const'=>'Import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TREB_IMPORT_DESCRIPTION', 'value_const'=>'Import houses from TREB');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_OPTIONS', 'value_const'=>'MRESDMS RETS MLS Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_LOGIN', 'value_const'=>'Login');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_PASSWORD', 'value_const'=>'Password');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_IMPORT', 'value_const'=>'RETS XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_IMPORT_REQUIRED_FIELD', 'value_const'=>'Login and Password from rets.torontomls.net are required fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_UPDATE_MAP', 'value_const'=>'Update map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_UPDATE_MAP_DESCRIPTION', 'value_const'=>'Update map from all houses where latitude and longitude are undefined');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_IMPORT_LINK', 'value_const'=>'Import');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RETS_IMPORT_DESCRIPTION', 'value_const'=>'Import houses from RETS');
//29.06.17
// ------ add search settings tab -----------------------------
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_7', 'value_const'=>'Search Settings');
// ------ options search settings tab -----------------------------
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_OPTIONS_SEARCH_FORM', 'value_const'=>'Options for search form');
//--------------Show/hide serch form on nothing found and result search pages
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_HIDE_SEARCH_FORM_ON_NOTHING_FOUND_PAGE', 'value_const'=>'Show search form<br>on nothing found page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_HIDE_SEARCH_FORM_ON_NOTHING_FOUND_PAGE_TT_BODY', 'value_const'=>'Show/hide search form on nothing found page. Set "YES" - show search form. Set "NO" - hide.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_HIDE_SEARCH_FORM_ON_RESULT_SEARCH_PAGE', 'value_const'=>'Show search form<br>on result search page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_HIDE_SEARCH_FORM_ON_RESULT_SEARCH_PAGE_TT_BODY', 'value_const'=>'Show/hide search form on result search page. Set "YES" - show search form. Set "NO" - hide.');
//------------options for serch button frontend-------------------
//$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SEARCH_BUTTON_SETTINGS', 'value_const'=>'Options for search button');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_HIDE_SEARCH_BUTTON', 'value_const'=>'Show button "Search houses"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_HIDE_SEARCH_BUTTON_TT_BODY', 'value_const'=>'Show button "Search houses" on frontend. Set "YES" - show search button. Set "NO" - hide');
//------------options for fields on serch form-------------------
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SEARCH_FIELDS_OPTIONS', 'value_const'=>'Options for advanced search layout fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SEARCH_KEYWORD_OPTIONS_TT_BODY', 'value_const'=>'Options for search keywords field. Select "Show & search" - show keywords field and search by keyword. Set "Search" - hide keywords field and search. Set "None" - hide keywords field and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CHECK_IN_OPTIONS_TT_BODY', 'value_const'=>'Options for check in field. Select "Show & search" - show check in field and search by check in. Set "Search" - hide check in field and search. Set "None" - hide check in field and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CHECK_OUT_OPTIONS_TT_BODY', 'value_const'=>'Options for check out field. Select "Show & search" - show check out field and search. Set "Search" - hide check out field and search. Set "None" - hide check out field and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_OPTIONS_TT_BODY', 'value_const'=>'Options for price field. Select "Show & search" - show price field and search by price. Set "Search" - hide price field and search. Set "None" - hide check out field and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_OPTIONS_TT_BODY', 'value_const'=>'Options for category select list. Select "Show & search" - show category select list and search. Set "None" - hide category select list and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LISTING_TYPE_TT_BODY', 'value_const'=>'Options for listing type select list. Select "Show & search" - show listing type select list and search. Set "None" - hide listing type select list and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LISTING_STATUS_TT_BODY', 'value_const'=>'Options for listing status select list. Select "Show & search" - show listing status select list and search. Set "None" - hide listing status select list and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PROPERTY_TYPE_TT_BODY', 'value_const'=>'Options for property type select list. Select "Show & search" - show property type select list and search. Set "None" - hide property type select list and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PROPERTYID_TT_BODY', 'value_const'=>'Options for property id checkbox. Select "Show & search" - show property id checkbox and search. Set "None" - hide property id checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_COMMENT_TT_BODY', 'value_const'=>'Options for label comment checkbox. Select "Show & search" - show label comment checkbox and search. Set "None" - hide label comment checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_TITLE_TT_BODY', 'value_const'=>'Options for title checkbox. Select "Show & search" - show title checkbox and search. Set "None" - hide title checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_COUNTRY_TT_BODY', 'value_const'=>'Options for country checkbox. Select "Show & search" - show country checkbox and search. Set "None" - hide country checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSE_SIZE_TT_BODY', 'value_const'=>'Options for house size checkbox. Select "Show & search" - show house size checkbox and search. Set "None" - hide house size checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDRESS_TT_BODY', 'value_const'=>'Options for address checkbox. Select "Show & search" - show address checkbox and search. Set "None" - hide address checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REGION_TT_BODY', 'value_const'=>'Options for region checkbox. Select "Show & search" - show region checkbox and search. Set "None" - hide region checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CITY_TT_BODY', 'value_const'=>'Options for city checkbox. Select "Show & search" - show city checkbox and search. Set "None" - hide city checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ZIPCODE_TT_BODY', 'value_const'=>'Options for zipcode checkbox. Select "Show & search" - show zipcode checkbox and search. Set "None" - hide zipcode checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LOT_SIZE_TT_BODY', 'value_const'=>'Options for lot size checkbox. Select "Show & search" - show lot size checkbox and search. Set "None" - hide lot size checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_OWNER_TT_BODY', 'value_const'=>'Options for owner checkbox. Select "Show & search" - show owner checkbox and search. Set "None" - hide owner checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ROOMS_TT_BODY', 'value_const'=>'Options for rooms checkbox. Select "Show & search" - show rooms checkbox and search. Set "None" - hide rooms checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BATHROOMS_TT_BODY', 'value_const'=>'Options for bathrooms checkbox. Select "Show & search" - show bathrooms checkbox and search. Set "None" - hide bathrooms checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BEDROOMS_TT_BODY', 'value_const'=>'Options for bedrooms checkbox. Select "Show & search" - show bedrooms checkbox and search. Set "None" - hide bedrooms checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXACTLY_TO_ALL_TT_BODY', 'value_const'=>'Options for exactly to all checkbox. Select "Show & search" - show exactly to all checkbox and search. Set "None" - hide exactly to all checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_GARAGES_TT_BODY', 'value_const'=>'Options for garages checkbox. Select "Show & search" - show garages checkbox and search. Set "None" - hide garages checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUILD_YEAR_TT_BODY', 'value_const'=>'Options for build year checkbox. Select "Show & search" - show build year checkbox and search. Set "None" - hide build year checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CONTACTS_TT_BODY', 'value_const'=>'Options for contacts checkbox. Select "Show & search" - show contacts checkbox and search. Set "None" - hide contacts checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_AGENT_TT_BODY', 'value_const'=>'Options for agent checkbox. Select "Show & search" - show agent checkbox and search. Set "None" - hide agent checkbox and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_AGENT_TT_BODY', 'value_const'=>'Options for agent checkbox. Select "Show & search" - show agent checkbox and search. Set "None" - hide agent checkbox and do not search.');
//30.06.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SEARCH_LAYOUT', 'value_const'=>'Settings for Search Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_DEFAULT_SEARCH_LAYOUT', 'value_const'=>'Select Search Layout by default');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_DEFAULT_SEARCH_LAYOUT_TT_BODY', 'value_const'=>'Select search layout by default on the frontend!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_GOOGLE_CAPTCHA_BY_DEFAULT', 'value_const'=>'Show google captcha');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_GOOGLE_CAPTCHA_BY_DEFAULT_TT_BODY', 'value_const'=>'Show google captcha by default. Set "Yes" - show google captcha. Set "No" - show standart captcha');
//07.07.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_COUNTRY_REGION_CITY_AS_TEXT_FIELD', 'value_const'=>'Show country, region and<br>city option as text field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_COUNTRY_REGION_CITY_AS_TEXT_FIELD_TT_BODY', 'value_const'=>'Display options for country, region and city. Set "Yes" - show country, region and city as text field or set "No" - show country, region and city as select list.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOW_COUNTRY_REGION_CITY_USE', 'value_const'=>'How fields Country, Region and City use');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_FRONTEND_CAPTCHA_OPTIONS', 'value_const'=>'Captcha Settings');
//12.07.17
//add option "Send reply to for rent request notification"
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_REQUEST_NOTIFICATION_SEND_REPLY_TO', 'value_const'=>'Send reply to for rent<br>request notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_REQUEST_NOTIFICATION_SEND_REPLY_TT_BODY', 'value_const'=>'Add email of the user to the reply message for rent request notification. Set "YES" to add.');
//add option "Send reply to for buy request notification"(buy)
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUYING_REQUEST_NOTIFICATION_SEND_REPLY_TO', 'value_const'=>'Send reply to for buy<br>request notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUYING_REQUEST_NOTIFICATION_SEND_REPLY_TT_BODY', 'value_const'=>'Add email of the user to the reply message for buying request notification. Set "YES" to add.');
//add redirect settings
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REDIRECT_SETTINGS', 'value_const'=>'Redirect settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REDIRECT_SETTINGS_AFTER_RENT_REQUEST', 'value_const'=>'Redirect after rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REDIRECT_SETTINGS_AFTER_RENT_REQUEST_TT_BODY', 'value_const'=>'Redirect after rent request. Set "Default" - redirect on default page (current house). Set "Redirect to all houses" - redirect on all houses page. Set "redirect to input link" - input link for other redirect page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REDIRECT_AFTER_BUY_REQUEST', 'value_const'=>'Redirect after buy request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REDIRECT_AFTER_BUY_REQUEST_TT_BODY', 'value_const'=>'Redirect after buy request. Set "Default" - redirect on default page (current house). Set "Redirect to all houses" - redirect on all houses page. Set "redirect to input link" - input link for other redirect page');
//mandatary fields
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_FIELDS_REQUIRE', 'value_const'=>'Mandatory fields');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_BUILT_YEAR_FIELD_REQUIRE', 'value_const'=>'Built year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_BUILT_YEAR_FIELD_REQUIRE_TT_BODY', 'value_const'=>'Set "YES" make the field built year mandatory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_ADDRESS_FIELD_REQUIRE', 'value_const'=>'Address');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_ADDRESS_FIELD_REQUIRE_TT_BODY', 'value_const'=>'Set "YES" make the field address mandatory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_PRICE_FIELD_REQUIRE', 'value_const'=>'Price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_PRICE_FIELD_REQUIRE_TT_BODY', 'value_const'=>'Set "YES" make the field price mandatory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_PHOTO_FIELD_REQUIRE', 'value_const'=>'Photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MANDATORY_PHOTO_FIELD_REQUIRE_TT_BODY', 'value_const'=>'Set "YES" make the field photo mandatory');
//07.19.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SEARCH_BLOCK_SETTINGS', 'value_const'=>'Search block settings on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_ALL_HOUSES', 'value_const'=>'Show search block<br>on all houses page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_ALL_HOUSES_TT_BODY', 'value_const'=>'Display search block on the all houses page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_ALONE_CATEGORY', 'value_const'=>'Show search block<br>on alone category page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_ALONE_CATEGORY_TT_BODY', 'value_const'=>'Display search block on the alone category page. Set "Yes" - show search block. Set "No" - hide.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CHECK_IN', 'value_const'=>'Show Check In field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CHECK_IN_TT_BODY', 'value_const'=>'Show Check In field. Set "Yes" - show Chech In field on all houses and single category pages. Set "No" - hide.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CHECK_OUT', 'value_const'=>'Show Check Out field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CHECK_OUT_TT_BODY', 'value_const'=>'Show Check Out field. Set "Yes" - show Chech Out field on all houses and single category pages. Set "No" - hide.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_MOD_MAP_CLEAR_BUTTON', 'value_const'=>'Clear');
//25.07.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LOT_SIZE_SLIDER', 'value_const'=>'Lot size slider');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_LOT_SIZE_SLIDER_TT_BODY', 'value_const'=>'Show lot size slider. Set "Show & search" - show slider lot size and search. Set "None" - hide slider and do not search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSE_SIZE_SLIDER', 'value_const'=>'House size slider');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_HOUSE_SIZE_SLIDER_TT_BODY', 'value_const'=>'Show house size slider. Set "Show & search" - show slider house size and search. Set "None" - hide slider and do not search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ROOMS_NUM', 'value_const'=>'Rooms numbers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_ROOMS_NUM_TT_BODY', 'value_const'=>'Show rooms number field. Set "Show & search" - show field rooms and search. Set "None" - hide field and do not search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BATHROOMS_NUM', 'value_const'=>'Bathrooms numbers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_BATHROOMS_NUM_TT_BODY', 'value_const'=>'Show bathrooms number field. Set "Show & search" - show field bathrooms and search. Set "None" - hide field and do not search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BEDROOMS_NUM', 'value_const'=>'Bedrooms numbers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_BEDROOMS_NUM_TT_BODY', 'value_const'=>'Show bedrooms number field. Set "Show & search" - show field bedrooms and search. Set "None" - hide field and do not search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NUMBERS_BBROOMS', 'value_const'=>'1+,2+,3+,4+,5+,6+,7+,8+,9+,10+');
//26.07.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ORDER_FIELD', 'value_const'=>'Order field settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SELECT_ORDER_DEFAULT', 'value_const'=>'Select order by default');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ORDER_DEFAULT_TT_BODY', 'value_const'=>'Select an option to sort by default the search result.');
//add energy economy diagramm
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ENERGY_ECONOMY_LABEL', 'value_const'=>'Energy economy(kWH/m)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ENERGY_LOST_LABEL', 'value_const'=>'Energy lost(kg/m)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ENERGY_FIELD_OPTIONS_LABEL', 'value_const'=>'Energy field options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ENERGY_FIELD_SHOW', 'value_const'=>'Show energy field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_ENERGY_FIELD_SHOW_TT_BODY', 'value_const'=>'Show energy field. Set "Yes" - show energy fiels. Set "No" - hide field.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_ENERGY_VALUE', 'value_const'=>'This parametr must be a number!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_CLIMATE_VALUE', 'value_const'=>'This parametr must be a number!');
//end add energy economy diagramm
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_ORDER_NUMBER', 'value_const'=>'Order number: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_INVOICES', 'value_const'=>'Invoices: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_NOW_BY_2CHECKOUT', 'value_const'=>'Go now to 2Checkout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_CORRECT_CURRENCY_2CHECKOUT', 'value_const'=>'You can not use 2checkout with this currencies, please set correct currencies or turn off 2checkout buttons ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_ORDER_NUMBER', 'value_const'=>'Order number: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_INVOICES', 'value_const'=>'Invoices: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_NOW_BY_2CHECKOUT', 'value_const'=>'Go now to 2Checkout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_CORRECT_CURRENCY_2CHECKOUT', 'value_const'=>'You can not use 2checkout with this currencies, please set correct currencies or turn off 2checkout buttons ');
//add option show slider on frontend
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SHOW_HOUSE_SLIDER_LABEL', 'value_const'=>'House slider');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SHOW_HOUSE_SLIDER', 'value_const'=>'Show house as slider');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SHOW_HOUSE_SLIDER_TT_BODY', 'value_const'=>'Show house as slider. Set "Yes" - show house as slider. Set "No" - show as gallery');
//add calendar year option
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_VALUE_YEAR', 'value_const'=>'Input initial-final year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_VALUE_YEAR_TT_BODY', 'value_const'=>'Input initial and final year of calendar. Final year value should be more then initial value.');
//23.08.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA1_SHOW', 'value_const'=>'Show Custom Text Field 1');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA2_SHOW', 'value_const'=>'Show Custom Text Field 2');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA3_SHOW', 'value_const'=>'Show Custom Text Field 3');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA4_SHOW', 'value_const'=>'Show Custom Text Field 4');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA5_SHOW', 'value_const'=>'Show Custom Text Field 5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA6_SHOW', 'value_const'=>'Show Custom Dropdown Field 6');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA7_SHOW', 'value_const'=>'Show Custom Dropdown Field 7');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA8_SHOW', 'value_const'=>'Show Custom Dropdown Field 8');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA9_SHOW', 'value_const'=>'Show Custom Dropdown Field 9');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_EXTRA10_SHOW', 'value_const'=>'Show Custom Dropdown Field 10');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_DROPDOWN_EXTRA_TT_BODY', 'value_const'=>'Options for dropdown extra field. Select "Show & search" - show extra field and search. Set "Search" - hide extra field and search. Set "None" - hide  field and do not search.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADVANCED_CHECKBOX_EXTRA_TT_BODY', 'value_const'=>'Options for checkbox extra field. Select "Show & search" - show checkbox extra field and search. Set "None" - hide checkbox extra field and do not search.');
//show sale fraction
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_FRACTION_SHOW', 'value_const'=>'Show fraction in price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_FRACTION_SHOW_TT_HEAD', 'value_const'=>'Show fraction in price. Set "Yes" - show fraction in price. Set "No" - hideb fraction.');
//11.09.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_ALL_ROOMS_AS_TEXT_FIELD', 'value_const'=>'Show rooms, bathrooms and<br>bedrooms option as text field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_ALL_ROOMS_AS_TEXT_FIELD_TT_BODY', 'value_const'=>'Display options for rooms, bathrooms and bedrooms. Set "Yes" - show rooms, bathrooms and bedrooms as text field or set "No" - show rooms, bathrooms and bedrooms as select list.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOW_ALL_ROOMS_USE', 'value_const'=>'How fields Rooms, Bathrooms and Bedrooms use');
//19.09.17
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_COUNT_HOUSES_ADV_LABEL', 'value_const'=>'Count houses in row for default layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_COUNT_HOUSES_MAP_LABEL', 'value_const'=>'Count houses in row for map layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_LG', 'value_const'=>'More than 1199px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_LG_TT_BODY', 'value_const'=>'More than 1199px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_MD', 'value_const'=>'Less than 1199px and<br>more than 992px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_MD_TT_BODY', 'value_const'=>'Less than 1200px and more than 991px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_SM', 'value_const'=>'Less than 992px and<br>more than 768px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_SM_TT_BODY', 'value_const'=>'Less than 992px and more than 767px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_XS', 'value_const'=>'Less than 768px and<br>more than 489px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RESOLUTION_XS_TT_BODY', 'value_const'=>'Less than 768px and more than 489px');

$constLang[] = array('const'=>'_REALESTATE_MANAGER_TABS_MANAGER_WATERMARK_SETTINGS', 'value_const'=>'Watermark settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_SHOW', 'value_const'=>'Enable watermark');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_TEXT', 'value_const'=>'Watermark text');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_FONT_SIZE', 'value_const'=>'Font size, %');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_FONT_COLOR', 'value_const'=>'Font color');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_ANGLE', 'value_const'=>'Font angle');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_POSITION', 'value_const'=>'Watermark Position');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_OPACITY', 'value_const'=>'Watermark Opacity');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_WATERMARK_MIN_SIZE', 'value_const'=>'Min size image for watermark');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_ALL', 'value_const'=>'All');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_TITLE', 'value_const'=>'Title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_DESC', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_HOUSEID', 'value_const'=>'House ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_LOCATION', 'value_const'=>'Location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_COUNTRY', 'value_const'=>'Country');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_CITY', 'value_const'=>'City');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_REGION', 'value_const'=>'Region');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_BY_ZIPCODE', 'value_const'=>'ZIP code');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_BY', 'value_const'=>'Search by');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ORDERING', 'value_const'=>'Ordering');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_ORDER_BY_DEFAULT', 'value_const'=>'Categories order by default');

$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_AS_STRING', 'value_const'=>'Allow price as string');

$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_SLIDER_SETTINGS', 'value_const'=>'Slider settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SLIDER_HEIGHT_DESC', 'value_const'=>'The height of the slider is measured as a percentage of the slider width');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SLIDER_HEIGHT', 'value_const'=>'Slider height, %');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SLIDER_OBJECT_FIT_DESC', 'value_const'=>'Slide show type "Filling in" or "Proportionally"');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SLIDER_OBJECT_FIT', 'value_const'=>'Slide show type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ERROR_CAPTCHA', 'value_const'=>'You typed bad characters from picture!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_MAK', 'value_const'=>'Makedonski');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SRP', 'value_const'=>'Srpski');