# Swappy\BulkApi

All URIs are relative to *https://api.swappy.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBulkJob**](BulkApi.md#createBulkJob) | **POST** /v1/bulkjobs | 
[**getBulkJob**](BulkApi.md#getBulkJob) | **GET** /v1/bulkjobs/{id} | 
[**getBulkJobResult**](BulkApi.md#getBulkJobResult) | **GET** /v1/bulkjobs/{id}/results | 


# **createBulkJob**
> \Swappy\Api\Model\BulkJob createBulkJob($body, $language)



Start a bulk product job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\BulkApi();
$body = array(new Product()); // \Swappy\Api\Model\Product[] | Product list to be uploaded
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->createBulkJob($body, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->createBulkJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swappy\Api\Model\Product[]**](../Model/Product.md)| Product list to be uploaded |
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\BulkJob**](../Model/BulkJob.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBulkJob**
> \Swappy\Api\Model\BulkJob getBulkJob($id, $if_none_match, $if_modified_since, $language)



Get infos about a job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\BulkApi();
$id = 56; // int | Product ID
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getBulkJob($id, $if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->getBulkJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **if_modified_since** | **\DateTime**| Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\BulkJob**](../Model/BulkJob.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBulkJobResult**
> \Swappy\Api\Model\BulkJobResult[] getBulkJobResult($id, $if_none_match, $if_modified_since, $language)



Get results for a job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\BulkApi();
$id = 56; // int | Product ID
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getBulkJobResult($id, $if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkApi->getBulkJobResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **if_modified_since** | **\DateTime**| Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\BulkJobResult[]**](../Model/BulkJobResult.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

