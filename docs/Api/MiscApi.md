# Swappy\MiscApi

All URIs are relative to *https://api.swappy.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSoftwareVersion**](MiscApi.md#getSoftwareVersion) | **GET** /v1/version | 


# **getSoftwareVersion**
> \Swappy\Api\Model\InlineResponse2001 getSoftwareVersion($version, $language)



Get current software version, this is NOT the api version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\MiscApi();
$version = "version_example"; // string | Will return an error if version is lower then current version
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getSoftwareVersion($version, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->getSoftwareVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| Will return an error if version is lower then current version | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

