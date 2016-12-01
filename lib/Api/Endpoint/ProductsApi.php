<?php
/**
 * ProductsApi
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
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  Swappy
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsApi
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
     * @return ProductsApi
     */
    public function setApiClient(\Swappy\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProduct
     *
     * 
     *
     * @param \Swappy\Api\Model\Product $body Product object that will be added to the store (required)
     * @param string $language Language for the response (optional)
     * @return \Swappy\Api\Model\Product
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function createProduct($body, $language = null)
    {
        list($response) = $this->createProductWithHttpInfo($body, $language);
        return $response;
    }

    /**
     * Operation createProductWithHttpInfo
     *
     * 
     *
     * @param \Swappy\Api\Model\Product $body Product object that will be added to the store (required)
     * @param string $language Language for the response (optional)
     * @return Array of \Swappy\Api\Model\Product, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function createProductWithHttpInfo($body, $language = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createProduct');
        }
        // parse inputs
        $resourcePath = "/v1/products";
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
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swappy\Api\Model\Product',
                '/v1/products'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swappy\Api\Model\Product', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Product', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\ValidationError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation endProduct
     *
     * 
     *
     * @param int $id Product ID (required)
     * @return \Swappy\Api\Model\Product
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function endProduct($id)
    {
        list($response) = $this->endProductWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation endProductWithHttpInfo
     *
     * 
     *
     * @param int $id Product ID (required)
     * @return Array of \Swappy\Api\Model\Product, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function endProductWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling endProduct');
        }
        // parse inputs
        $resourcePath = "/v1/products/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swappy\Api\Model\Product',
                '/v1/products/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swappy\Api\Model\Product', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Product', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProduct
     *
     * 
     *
     * @param int $id Product ID (required)
     * @param string $if_none_match Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed (optional)
     * @param \DateTime $if_modified_since Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed (optional)
     * @param string $language Language for the response (optional)
     * @return \Swappy\Api\Model\ShortProduct
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function getProduct($id, $if_none_match = null, $if_modified_since = null, $language = null)
    {
        list($response) = $this->getProductWithHttpInfo($id, $if_none_match, $if_modified_since, $language);
        return $response;
    }

    /**
     * Operation getProductWithHttpInfo
     *
     * 
     *
     * @param int $id Product ID (required)
     * @param string $if_none_match Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed (optional)
     * @param \DateTime $if_modified_since Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed (optional)
     * @param string $language Language for the response (optional)
     * @return Array of \Swappy\Api\Model\ShortProduct, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function getProductWithHttpInfo($id, $if_none_match = null, $if_modified_since = null, $language = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getProduct');
        }
        // parse inputs
        $resourcePath = "/v1/products/{id}";
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
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = $this->apiClient->getSerializer()->toHeaderValue($if_modified_since);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
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
                '\Swappy\Api\Model\ShortProduct',
                '/v1/products/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swappy\Api\Model\ShortProduct', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\ShortProduct', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateProduct
     *
     * 
     *
     * @param int $id Product ID (required)
     * @param \Swappy\Api\Model\Product $body Informations that you are editing, images will be added (required)
     * @return \Swappy\Api\Model\Product
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function updateProduct($id, $body)
    {
        list($response) = $this->updateProductWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation updateProductWithHttpInfo
     *
     * 
     *
     * @param int $id Product ID (required)
     * @param \Swappy\Api\Model\Product $body Informations that you are editing, images will be added (required)
     * @return Array of \Swappy\Api\Model\Product, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function updateProductWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateProduct');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateProduct');
        }
        // parse inputs
        $resourcePath = "/v1/products/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swappy\Api\Model\Product',
                '/v1/products/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swappy\Api\Model\Product', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Product', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\ValidationError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadPicture
     *
     * 
     *
     * @param \SplFileObject $files The images, can be an array (required)
     * @param string $language Language for the response (optional)
     * @return \Swappy\Api\Model\TempImage[]
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function uploadPicture($files, $language = null)
    {
        list($response) = $this->uploadPictureWithHttpInfo($files, $language);
        return $response;
    }

    /**
     * Operation uploadPictureWithHttpInfo
     *
     * 
     *
     * @param \SplFileObject $files The images, can be an array (required)
     * @param string $language Language for the response (optional)
     * @return Array of \Swappy\Api\Model\TempImage[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swappy\ApiException on non-2xx response
     */
    public function uploadPictureWithHttpInfo($files, $language = null)
    {
        // verify the required parameter 'files' is set
        if ($files === null) {
            throw new \InvalidArgumentException('Missing the required parameter $files when calling uploadPicture');
        }
        // parse inputs
        $resourcePath = "/v1/pictures";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('multipart/form-data'));

        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($files !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['files'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($files));
            } else {
                $formParams['files'] = '@' . $this->apiClient->getSerializer()->toFormValue($files);
            }
        }
        
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swappy\Api\Model\TempImage[]',
                '/v1/pictures'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swappy\Api\Model\TempImage[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\TempImage[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swappy\Api\Model\Error[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
