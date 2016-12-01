# Swappy\ProductsApi

All URIs are relative to *https://api.swappy.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct**](ProductsApi.md#createProduct) | **POST** /v1/products | 
[**endProduct**](ProductsApi.md#endProduct) | **DELETE** /v1/products/{id} | 
[**getProduct**](ProductsApi.md#getProduct) | **GET** /v1/products/{id} | 
[**updateProduct**](ProductsApi.md#updateProduct) | **PATCH** /v1/products/{id} | 
[**uploadPicture**](ProductsApi.md#uploadPicture) | **POST** /v1/pictures | 


# **createProduct**
> \Swappy\Api\Model\Product createProduct($body, $language)



Submit a new product to your account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\ProductsApi();
$body = new \Swappy\Api\Model\Product(); // \Swappy\Api\Model\Product | Product object that will be added to the store
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->createProduct($body, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swappy\Api\Model\Product**](../Model/\Swappy\Api\Model\Product.md)| Product object that will be added to the store |
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\Product**](../Model/Product.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endProduct**
> \Swappy\Api\Model\Product endProduct($id)



End a product before it's normal end date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\ProductsApi();
$id = 56; // int | Product ID

try {
    $result = $api_instance->endProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->endProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |

### Return type

[**\Swappy\Api\Model\Product**](../Model/Product.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProduct**
> \Swappy\Api\Model\ShortProduct getProduct($id, $if_none_match, $if_modified_since, $language)



Get a specific product by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\ProductsApi();
$id = 56; // int | Product ID
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$if_modified_since = new \DateTime(); // \DateTime | Will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getProduct($id, $if_none_match, $if_modified_since, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
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

[**\Swappy\Api\Model\ShortProduct**](../Model/ShortProduct.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \Swappy\Api\Model\Product updateProduct($id, $body)



Edit an existing product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\ProductsApi();
$id = 56; // int | Product ID
$body = new \Swappy\Api\Model\Product(); // \Swappy\Api\Model\Product | Informations that you are editing, images will be added

try {
    $result = $api_instance->updateProduct($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product ID |
 **body** | [**\Swappy\Api\Model\Product**](../Model/\Swappy\Api\Model\Product.md)| Informations that you are editing, images will be added |

### Return type

[**\Swappy\Api\Model\Product**](../Model/Product.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadPicture**
> \Swappy\Api\Model\TempImage[] uploadPicture($files, $language)



Upload images Images will be deleted after 30 days if not used in a product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\ProductsApi();
$files = "/path/to/file.txt"; // \SplFileObject | The images, can be an array
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->uploadPicture($files, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->uploadPicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | **\SplFileObject**| The images, can be an array |
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\TempImage[]**](../Model/TempImage.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

