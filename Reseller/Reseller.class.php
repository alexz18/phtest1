<?php
/**
 * Reseller class
 *
 * @author  Alexander Verba  <ainopeas@gmail.com>
 * @license propriertary http://localhost
 */

require_once "ResellerRequest.interface.php";

use Exception;

/**
 * Reseller class
 */
class Reseller
{

    /**
     * API_URL constant
     *
     * @var const API_URL
     */
    const API_URL = "https://dev-api.rafinita.com/post";

    /**
     * ResellerRequestInterface instance dependency
     *
     * @var ResellerRequestInterface $resellerRequest
     */
    private ResellerRequestInterface $resellerRequest;

    /**
     * Curl resource
     *
     * @var mixed $cr
     */
    private mixed $cr;


    /**
     * Class constructor
     *
     * @param ResellerRequestInterface $resellerRequest ResellerRequest class dependency
     */
    public function __construct(ResellerRequestInterface $resellerRequest)
    {
        $this->resellerRequest = $resellerRequest;
        $this->resellerRequest->prepareParams();

    }//end __construct()


    /**
     * Request API with params
     *
     * @return string|Exception
     */
    public function doSale(): string
    {
        $this->cr = curl_init(self::API_URL);
        var_dump($this->resellerRequest->getJsonParams());
        curl_setopt_array(
            $this->cr,
            [
                CURLOPT_URL            => self::API_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS     => http_build_query($this->resellerRequest->getArrayParams()),
            ]
        );
        $salesResult = curl_exec($this->cr);

        if (curl_error($this->cr) === true) {
            throw new Exception(curl_error($this->cr));
        }

        return $salesResult;

    }//end doSale()


}//end class
