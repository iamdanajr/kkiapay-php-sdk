<?php

include_once("./config/init.php");

$kkiapay = new \Kkiapay\Kkiapay(KKIAPAY_PUBLIC, KKIAPAY_PRIVATE, KKIAPAY_SECRET, KKIAPAY_ENV);
$verify  = $kkiapay->verifyTransaction("xxxxxxx");

//$refund  = $kkiapay->refundTransaction("oldnbsc");
// $payout = $kkiapay->setupPayout(array( "algorithm" => "rate", "send_notification" => true, "destination_type" => "MOBILE_MONEY", "rate_frequency" => "1m", "destination" => "22997000000" ));

var_dump($verify);
