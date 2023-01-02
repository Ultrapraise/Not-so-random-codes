<?php

require("../../sendpulse_rest_api/src/ApiInterface.php");
require("../../sendpulse_rest_api/src/ApiClient.php");
require("../../sendpulse_rest_api/src/Storage/TokenStorageInterface.php");
require("../../sendpulse_rest_api/src/Storage/FileStorage.php");
require("../../sendpulse_rest_api/src/Storage/SessionStorage.php");
require("../../sendpulse_rest_api/src/Storage/MemcachedStorage.php");
require("../../sendpulse_rest_api/src/Storage/MemcacheStorage.php");

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

define('API_USER_ID', '###############################'); //https://login.sendpulse.com/settings/#api
define('API_SECRET', '################################');
define('PATH_TO_ATTACH_FILE', __FILE__);

$SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());

$bookID = 1369774; // get from mailing list url, https://login.sendpulse.com/emailservice/addressbooks/emails/id/XXXXXXX/
$emails = array(
    array(
        'email' => 'kolade2@domain.com',
        'variables' => array(
            'phone' => '234709689601',
            'name' => 'Kolade Kenit',
            'is_an_affiliate' => 'no',
            'has_an_affiliate' => 'no',
            'user_registered' => 'yes',
            'user_bought_product' => 'no',
            'bank_details_added' => 'yes',
            'added_product' => 'yes',
            'made_sale_1' => 'no',
            'made_sale_10' => 'no',
            'made_sale_100' => 'no',
            'made_sale_1000' => 'no',
            'made_sale_50' => 'no',
            'made_sale_500' => 'no',
            'subscribed_to_pro' => 'no',
            'made_sale_free' => 'no',
            'subscribed_to_turbo' => 'no',
            'NGN_merchant' => 'no',
            'USD_merchant' => 'no',
            'GBP_merchant' => 'no',
            'GHS_merchant' => 'no',
            'KES_merchant' => 'no',
            'ZAR_merchant' => 'no',
            'TZS_merchant' => 'no',
            'UGX_merchant' => 'no',
            'XAF_merchant' => 'no',
            'XOF_merchant' => 'no',
            'RWF_merchant' => 'no',
        )
    )
);

// Without confirmation
var_dump($SPApiClient->addEmails($bookID, $emails));


?>