<?php
/**
 * MiscApi
 * PHP version 5
 *
 * @category Class
 * @package  Swappy
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swappy REST API
 *
 * This is Swappy's REST API. See below for all available endpoints. This is an <strong>alpha version</strong> and might still be subject to change
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swappy\Api\Endpoint;

use \Swappy\Configuration;
use \Swappy\ApiClient;
use \Swappy\ApiException;
use \Swappy\ObjectSerializer;

/**
 * MiscApi Class Doc Comment
 *
 * @category Class
 * @package  Swappy
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MiscApi
{

    /**
     * API Client
     *
     * @var \Swappy\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swappy\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swappy\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.swappy.com/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swappy\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swappy\ApiClient $apiClient set the API client
     *
     * @return MiscApi
     */
    public function setApiClient(\Swappy\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getSoftwareVersion
     *
     * 
     *
     * @param string $version Will return an error if version is lower then current version (optional)
     * @param string $language Language for the response (optional)
     * @return \Swappy\Api\Model\InlineResponse2001
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function getSoftwareVersion($version = null, $language = null)
    {
        list($response) = $this->getSoftwareVersionWithHttpInfo($version, $language);
        return $response;
    }

    /**
     * Operation getSoftwareVersionWithHttpInfo
     *
     * 
     *
     * @param string $version Will return an error if version is lower then current version (optional)
     * @param string $language Language for the response (optional)
     * @return Array of \Swappy\Api\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function getSoftwareVersionWithHttpInfo($version = null, $language = null)
    {
        // parse inputs
        $resourcePath = "/v1/version";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($version !== null) {
            $queryParams['version'] = $this->apiClient->getSerializer()->toQueryValue($version);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swappy\Api\Model\InlineResponse2001',
                '/v1/version'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swappy\Api\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}