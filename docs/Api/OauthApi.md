# Swappy\OauthApi

All URIs are relative to *https://api.swappy.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMe**](OauthApi.md#getMe) | **GET** /v1/me | 
[**getMyAddresses**](OauthApi.md#getMyAddresses) | **GET** /v1/me/addresses | 
[**oauth2AuthorizeGet**](OauthApi.md#oauth2AuthorizeGet) | **GET** /oauth2/authorize | 
[**oauth2TokenPost**](OauthApi.md#oauth2TokenPost) | **POST** /oauth2/token | 


# **getMe**
> \Swappy\Api\Model\Member getMe($language)



Get info of current user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\OauthApi();
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getMe($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->getMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\Member**](../Model/Member.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyAddresses**
> \Swappy\Api\Model\Address[] getMyAddresses($if_none_match, $language)



Get users addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\OauthApi();
$if_none_match = "if_none_match_example"; // string | Etag, will return `304 Not Modified` if content hasn't changed
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->getMyAddresses($if_none_match, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->getMyAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_none_match** | **string**| Etag, will return &#x60;304 Not Modified&#x60; if content hasn&#39;t changed | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\Address[]**](../Model/Address.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauth2AuthorizeGet**
> \Swappy\Api\Model\Member oauth2AuthorizeGet($client_id, $redirect_uri, $state, $response_type, $scope, $language)



oAuth authorize endpoint, the user should be redirected to this page to allow the application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\OauthApi();
$client_id = 56; // int | Application ID
$redirect_uri = "redirect_uri_example"; // string | URI where the user will be returned to, must match application's configuration
$state = "state_example"; // string | State that will be passed back to return_uri
$response_type = "response_type_example"; // string | Type of request
$scope = "scope_example"; // string | Space separated scopes
$language = "language_example"; // string | Language for the response

try {
    $result = $api_instance->oauth2AuthorizeGet($client_id, $redirect_uri, $state, $response_type, $scope, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauth2AuthorizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Application ID |
 **redirect_uri** | **string**| URI where the user will be returned to, must match application&#39;s configuration |
 **state** | **string**| State that will be passed back to return_uri |
 **response_type** | **string**| Type of request |
 **scope** | **string**| Space separated scopes | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

[**\Swappy\Api\Model\Member**](../Model/Member.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauth2TokenPost**
> oauth2TokenPost($client_id, $client_secret, $grant_type, $code, $scope, $redirect_uri, $language)



Get access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swappy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swappy\Api\OauthApi();
$client_id = 56; // int | App API id
$client_secret = "client_secret_example"; // string | App API secret
$grant_type = "grant_type_example"; // string | Grant type for this token request
$code = "code_example"; // string | Access code, **required** for `authorization_code` grant type.
$scope = "scope_example"; // string | Space separated scope for `authorization_code` grant type.
$redirect_uri = "redirect_uri_example"; // string | Return URI for security purpose, must match the one sent to `/authorize`, **required** for `authorization_code` grant type.
$language = "language_example"; // string | Language for the response

try {
    $api_instance->oauth2TokenPost($client_id, $client_secret, $grant_type, $code, $scope, $redirect_uri, $language);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauth2TokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| App API id |
 **client_secret** | **string**| App API secret |
 **grant_type** | **string**| Grant type for this token request |
 **code** | **string**| Access code, **required** for &#x60;authorization_code&#x60; grant type. | [optional]
 **scope** | **string**| Space separated scope for &#x60;authorization_code&#x60; grant type. | [optional]
 **redirect_uri** | **string**| Return URI for security purpose, must match the one sent to &#x60;/authorize&#x60;, **required** for &#x60;authorization_code&#x60; grant type. | [optional]
 **language** | **string**| Language for the response | [optional]

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

