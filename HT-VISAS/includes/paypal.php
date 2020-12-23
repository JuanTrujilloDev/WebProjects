<?php 

//url aquispe
define('URL_SITIO', 'http://localhost:8888/HT-VISAS');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'Ad8p_-tUZ82bs1_dGAMOmI-7jdMtJPgwC1gFOZ_ipv0lsCr4QHhyJrPgMJ34EOH5pI8WUGtcZRBUKpMZ',     // ClientID
        'EAlXLtg2641CpnFGKJd9AFRZa_eH7edfBMSMf4o1wNcsTcRIMXXkDXN7DAbpEZlvweECvDSuZUPhnSxo'      // ClientSecret
    )
);

