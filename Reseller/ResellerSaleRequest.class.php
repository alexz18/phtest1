<?php

/**
 * ResellerRequest class
 *
 * @author  Alexander Verba  <ainopeas@gmail.com>
 * @license propriertary http://localhost
 */
require_once "ResellerRequest.interface.php";

use Exception;

/**
 * ResellerSaleRequest class
 */
class ResellerSaleRequest implements ResellerRequestInterface
{

    /**
     * Request param action
     *
     * @var string $action
     */
    public string $action = 'SALE';

    /**
     * Request param clientKey
     *
     * @var string $clientKey
     */
    public ?string $clientKey;

    /**
     * Request param channelId
     *
     * @var string $channelId
     */
    public ?string $channelId;

    /**
     * Request param orderId
     *
     * @var string $orderId
     */
    public string $orderId;

    /**
     * Request param orderAmount
     *
     * @var string $orderAmount
     */
    public float $orderAmount;

    /**
     * Request param orderCurrency
     *
     * @var string $orderCurrency
     */
    public string $orderCurrency;

    /**
     * Request param orderDescription
     *
     * @var string $orderDescription
     */
    public string $orderDescription;

    /**
     * Request param cardNumber
     *
     * @var string $cardNumber
     */
    public string $cardNumber;

    /**
     * Request param cardExpMonth
     *
     * @var string $cardExpMonth
     */
    public string $cardExpMonth;

    /**
     * Request param cardExpYear
     *
     * @var string $cardExpYear
     */
    public string $cardExpYear;

    /**
     * Request param cardCvv2
     *
     * @var string $cardCvv2
     */
    public string $cardCvv2;

    /**
     * Request param payerFirstName
     *
     * @var string $payerFirstName
     */
    public string $payerFirstName;

    /**
     * Request param payerLastName
     *
     * @var string $payerLastName
     */
    public string $payerLastName;

    /**
     * Request param payerMiddleName
     *
     * @var string $payerMiddleName
     */
    public string $payerMiddleName;

    /**
     * Request param payerBirthDate
     *
     * @var string $payerBirthDate
     */
    public string $payerBirthDate;

    /**
     * Request param payerAddress
     *
     * @var string $payerAddress
     */
    public string $payerAddress;

    /**
     * Request param payerAddress2
     *
     * @var string $payerAddress2
     */
    public string $payerAddress2;

    /**
     * Request param payerCountry
     *
     * @var string $payerCountry
     */
    public string $payerCountry;

    /**
     * Request param payerState
     *
     * @var string $payerState
     */
    public string $payerState;

    /**
     * Request param payerCity
     *
     * @var string $payerCity
     */
    public string $payerCity;

    /**
     * Request param payerZip
     *
     * @var string $payerZip
     */
    public string $payerZip;

    /**
     * Request param payerEmail
     *
     * @var string $payerEmail
     */
    public string $payerEmail;

    /**
     * Request param payerPhone
     *
     * @var string $payerPhone
     */
    public string $payerPhone;

    /**
     * Request param payerIp
     *
     * @var string $payerIp
     */
    public string $payerIp;

    /**
     * Request param termUrl3ds
     *
     * @var string $termUrl3ds
     */
    public string $termUrl3ds;

    /**
     * Request param recurringInit
     *
     * @var string $recurringInit
     */
    public string $recurringInit;

    /**
     * Request param auth
     *
     * @var string $auth
     */
    public string $auth;

    /**
     * Request param hash
     *
     * @var string $hash
     */
    public string $hash;

    /**
     * Prepared request params in array
     *
     * @var string $preparedParams
     */
    private array $preparedParams = [];


    /**
     * Prepare sales request params in POST request format array
     *
     * @return void
     */
    public function prepareParams()
    {
        $arrayOfParams = [];
        if (isset($this->action) === true) {
            $arrayOfParams['action'] = $this->action;
        } else {
            throw new Exception('no required param action');
        };
        if (isset($this->clientKey) === true) {
            $arrayOfParams['client_key'] = $this->clientKey;
        } else {
            throw new Exception('no required param clientKey');
        };
        if (isset($this->channelId) === true) {
            $arrayOfParams['channel_id'] = $this->channelId;
        };
        if (isset($this->orderId) === true) {
            $arrayOfParams['order_id'] = $this->orderId;
        } else {
            throw new Exception('no required param orderId');
        };
        if (isset($this->orderAmount) === true) {
            $arrayOfParams['order_amount'] = $this->orderAmount;
        } else {
            throw new Exception('no required param orderAmount');
        };
        if (isset($this->orderCurrency) === true) {
            $arrayOfParams['order_currency'] = $this->orderCurrency;
        } else {
            throw new Exception('no required param orderCurrency');
        };
        if (isset($this->orderDescription) === true) {
            $arrayOfParams['order_description'] = $this->orderDescription;
        } else {
            throw new Exception('no required param orderDescription');
        };
        if (isset($this->cardNumber) === true) {
            $arrayOfParams['card_number'] = $this->cardNumber;
        } else {
            throw new Exception('no required param cardNumber');
        };
        if (isset($this->cardExpMonth) === true) {
            $arrayOfParams['card_exp_month'] = $this->cardExpMonth;
        } else {
            throw new Exception('no required param cardExpMonth');
        };
        if (isset($this->cardExpYear) === true) {
            $arrayOfParams['card_exp_year'] = $this->cardExpYear;
        } else {
            throw new Exception('no required param cardExpYear');
        };
        if (isset($this->cardCvv2) === true) {
            $arrayOfParams['card_cvv2'] = $this->cardCvv2;
        } else {
            throw new Exception('no required param cardCvv2');
        };
        if (isset($this->payerFirstName) === true) {
            $arrayOfParams['payer_first_name'] = $this->payerFirstName;
        } else {
            throw new Exception('no required param payerFirstName');
        };
        if (isset($this->payerLastName) === true) {
            $arrayOfParams['payer_last_name'] = $this->payerLastName;
        } else {
            throw new Exception('no required param payerLastName');
        };
        if (isset($this->payerMiddleName) === true) {
            $arrayOfParams['payer_middle_name'] = $this->payerMiddleName;
        };
        if (isset($this->payerBirthDate) === true) {
            $arrayOfParams['payer_birth_date'] = $this->payerBirthDate;
        };
        if (isset($this->payerAddress) === true) {
            $arrayOfParams['payer_address'] = $this->payerAddress;
        } else {
            throw new Exception('no required param payerAddress');
        };
        if (isset($this->payerAddress2) === true) {
            $arrayOfParams['payer_address2'] = $this->payerAddress2;
        };
        if (isset($this->payerCountry) === true) {
            $arrayOfParams['payer_country'] = $this->payerCountry;
        } else {
            throw new Exception('no required param payerCountry');
        };
        if (isset($this->payerState) === true) {
            $arrayOfParams['payer_state'] = $this->payerState;
        };
        if (isset($this->payerCity) === true) {
            $arrayOfParams['payer_city'] = $this->payerCity;
        } else {
            throw new Exception('no required param payerCity');
        };
        if (isset($this->payerZip) === true) {
            $arrayOfParams['payer_zip'] = $this->payerZip;
        } else {
            throw new Exception('no required param payerZip');
        };
        if (isset($this->payerEmail) === true) {
            $arrayOfParams['payer_email'] = $this->payerEmail;
        } else {
            throw new Exception('no required param payerEmail');
        };
        if (isset($this->payerPhone) === true) {
            $arrayOfParams['payer_phone'] = $this->payerPhone;
        } else {
            throw new Exception('no required param payerPhone');
        };
        if (isset($this->payerIp) === true) {
            $arrayOfParams['payer_ip'] = $this->payerIp;
        } else {
            throw new Exception('no required param payerIp');
        };
        if (isset($this->termUrl3ds) === true) {
            $arrayOfParams['term_url_3ds'] = $this->termUrl3ds;
        } else {
            throw new Exception('no required param termUrl3ds');
        };
        if (isset($this->recurringInit) === true) {
            $arrayOfParams['recurring_init'] = $this->recurringInit;
        };
        if (isset($this->auth) === true) {
            $arrayOfParams['auth'] = $this->auth;
        };
        if (isset($this->hash) === true) {
            $arrayOfParams['hash'] = $this->hash;
        } else {
            throw new Exception('no required param hash');
        };

        $this->preparedParams = $arrayOfParams;

    }//end prepareParams()


    /**
     * Get prepared params in JSON
     *
     * @return string
     */
    public function getJsonParams(): string
    {
        return json_encode($this->preparedParams);

    }//end getJsonParams()


    /**
     * Get prepared params in array
     *
     * @return array
     */
    public function getArrayParams(): array
    {
        return $this->preparedParams;

    }//end getArrayParams()


}//end class
