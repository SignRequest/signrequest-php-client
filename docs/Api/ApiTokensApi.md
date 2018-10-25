# SignRequest\ApiTokensApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTokensCreate**](ApiTokensApi.md#apiTokensCreate) | **POST** /api-tokens/ | Create an API token
[**apiTokensDelete**](ApiTokensApi.md#apiTokensDelete) | **DELETE** /api-tokens/{key}/ | Delete an API token
[**apiTokensList**](ApiTokensApi.md#apiTokensList) | **GET** /api-tokens/ | Retrieve a list of API tokens
[**apiTokensRead**](ApiTokensApi.md#apiTokensRead) | **GET** /api-tokens/{key}/ | Retrieve an API token


# **apiTokensCreate**
> \SignRequest\Model\AuthToken apiTokensCreate($data)

Create an API token

You can create an API token in the [team api settings page](/#/teams). It is also possible to get or create a token using the REST api with your login credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\ApiTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \SignRequest\Model\AuthToken(); // \SignRequest\Model\AuthToken | 

try {
    $result = $apiInstance->apiTokensCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiTokensApi->apiTokensCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\SignRequest\Model\AuthToken**](../Model/AuthToken.md)|  |

### Return type

[**\SignRequest\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiTokensDelete**
> apiTokensDelete($key)

Delete an API token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\ApiTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | A unique value identifying this api token.

try {
    $apiInstance->apiTokensDelete($key);
} catch (Exception $e) {
    echo 'Exception when calling ApiTokensApi->apiTokensDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| A unique value identifying this api token. |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiTokensList**
> \SignRequest\Model\InlineResponse200 apiTokensList($page, $limit)

Retrieve a list of API tokens



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\ApiTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->apiTokensList($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiTokensApi->apiTokensList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]

### Return type

[**\SignRequest\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiTokensRead**
> \SignRequest\Model\AuthToken apiTokensRead($key)

Retrieve an API token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\ApiTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | A unique value identifying this api token.

try {
    $result = $apiInstance->apiTokensRead($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiTokensApi->apiTokensRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| A unique value identifying this api token. |

### Return type

[**\SignRequest\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

