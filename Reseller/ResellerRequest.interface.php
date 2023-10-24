<?php
/**
 * ResellerRequest interface
 *
 * @author  Alexander Verba  <ainopeas@gmail.com>
 * @license propriertary http://localhost
 */

/**
 * ResellerRequestInterface interface
 */
interface ResellerRequestInterface
{


    /**
     * Prepare sales request params in POST request format array
     *
     * @return void
     */
    public function prepareParams();


    /**
     * Get prepared params in JSON
     *
     * @return string
     */
    public function getJsonParams(): string;


    /**
     * Get prepared params in array
     *
     * @return array
     */
    public function getArrayParams(): array;


}//end interface
