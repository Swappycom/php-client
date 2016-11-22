# Swappy\DataApi

All URIs are relative to *https://api.swappy.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories**](DataApi.md#getCategories) | **GET** /v1/categories | 
[**getCategory**](DataApi.md#getCategory) | **GET** /v1/categories/{id} | 
[**getDurations**](DataApi.md#getDurations) | **GET** /v1/durations | 
[**getOptions**](DataApi.md#getOptions) | **GET** /v1/options | 
[**getShippingMethods**](DataApi.md#getShippingMethods) | **GET** /v1/shippingmethods | 


# **getCategories**
> \Swappy\Api\Model\Category[] getCategories($depth, $if_none_match, $if_modified_since, $language)



Get all categories from the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\DataApi();
$depth = 56; // int | Number sublevels wanted, `1` for top level only. **default:** no limit
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getCategories($depth, $if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **depth** | **int**| Number sublevels wanted, &#x60;1&#x60; for top level only. **default:** no limit | [optional]
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **if_modified_since** | **\DateTime**| Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\Category[]**](../Model/Category.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategory**
> \Swappy\Api\Model\Category getCategory($id, $if_none_match, $if_modified_since, $language)



Get one category categories from the website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\DataApi();
$id = 56; // int | Product ID
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getCategory($id, $if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getCategory: ', $e->getMessage(), PHP_EOL;
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

[**\Swappy\Api\Model\Category**](../Model/Category.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDurations**
> \Swappy\Api\Model\InlineResponse200 getDurations($if_none_match, $if_modified_since, $language)



Get available durations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\DataApi();
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getDurations($if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getDurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **if_modified_since** | **\DateTime**| Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptions**
> \Swappy\Api\Model\Option[] getOptions($if_none_match, $if_modified_since, $language)



Get paying options for a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\DataApi();
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getOptions($if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **if_modified_since** | **\DateTime**| Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\Option[]**](../Model/Option.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingMethods**
> \Swappy\Api\Model\ShippingMethod[] getShippingMethods($if_none_match, $if_modified_since, $language)



Get all shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\DataApi();
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getShippingMethods($if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->getShippingMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **if_modified_since** | **\DateTime**| Will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\ShippingMethod[]**](../Model/ShippingMethod.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

