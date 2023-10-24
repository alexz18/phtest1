<?php
/**
 * ResellerRequest example call
 *
 * @author  Alexander Verba  <ainopeas@gmail.com>
 * @license propriertary http://localhost
 */

require_once "Reseller/Reseller.class.php";
require_once "Reseller/ResellerSaleRequest.class.php";

$resellerRequest            = new ResellerSaleRequest();
$resellerRequest->action    = 'SALE';
$resellerRequest->clientKey = '5b6492f0-f8f5-11ea-976a-0242c0a85007';
$resellerRequest->orderId   = '7c0ba42c-ce4f-de24-e012-f501e05a24c4';
$resellerRequest->orderAmount      = 210.45;
$resellerRequest->orderCurrency    = 'USD';
$resellerRequest->orderDescription = 'test - do not start real process!';
$resellerRequest->cardNumber       = '4111111111111111';
$resellerRequest->cardExpMonth     = '09';
$resellerRequest->cardExpYear      = '2025';
$resellerRequest->cardCvv2         = '111';
$resellerRequest->payerFirstName   = 'Payerfirst';
$resellerRequest->payerLastName    = 'Payerlastname';
$resellerRequest->payerAddress     = 'Test str., ap. 1';
$resellerRequest->payerCountry     = 'UK';
$resellerRequest->payerCity        = 'London';
$resellerRequest->payerZip         = '1111111';
$resellerRequest->payerEmail       = 'payerfirst@payerlastname.com';
$resellerRequest->payerPhone       = '+423584582344';
$resellerRequest->payerIp          = '112.240.14.25';
$resellerRequest->termUrl3ds       = 'http://localhost';
$resellerRequest->recurringInit    = 'N';
$resellerRequest->auth = 'N';
$resellerRequest->hash = 'd0ec0beca8a3c30652746925d5380cf3';

$reseller   = new Reseller($resellerRequest);
$saleResult = $reseller->doSale();

echo "Sales request result:\n";
// TODO: add return data interface class
var_dump($saleResult);
