# SignRequest\WebhooksApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksCreate**](WebhooksApi.md#webhooksCreate) | **POST** /webhooks/ | Create a Webhook
[**webhooksDelete**](WebhooksApi.md#webhooksDelete) | **DELETE** /webhooks/{uuid}/ | Delete a Webhook
[**webhooksList**](WebhooksApi.md#webhooksList) | **GET** /webhooks/ | Retrieve a list of Webhooks
[**webhooksPartialUpdate**](WebhooksApi.md#webhooksPartialUpdate) | **PATCH** /webhooks/{uuid}/ | Partially update a Webhook
[**webhooksRead**](WebhooksApi.md#webhooksRead) | **GET** /webhooks/{uuid}/ | Retrieve a Webhook
[**webhooksUpdate**](WebhooksApi.md#webhooksUpdate) | **PUT** /webhooks/{uuid}/ | Update a Webhook


# **webhooksCreate**
> \SignRequest\Model\WebhookSubscription webhooksCreate($data)

Create a Webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \SignRequest\Model\WebhookSubscription(); // \SignRequest\Model\WebhookSubscription | 

try {
    $result = $apiInstance->webhooksCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)|  |

### Return type

[**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksDelete**
> webhooksDelete($uuid)

Delete a Webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $apiInstance->webhooksDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksList**
> \SignRequest\Model\InlineResponse2009 webhooksList($page, $limit)

Retrieve a list of Webhooks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->webhooksList($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]

### Return type

[**\SignRequest\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksPartialUpdate**
> \SignRequest\Model\WebhookSubscription webhooksPartialUpdate($uuid, $data)

Partially update a Webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 
$data = new \SignRequest\Model\WebhookSubscription(); // \SignRequest\Model\WebhookSubscription | 

try {
    $result = $apiInstance->webhooksPartialUpdate($uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPartialUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **data** | [**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)|  |

### Return type

[**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksRead**
> \SignRequest\Model\WebhookSubscription webhooksRead($uuid)

Retrieve a Webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->webhooksRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksUpdate**
> \SignRequest\Model\WebhookSubscription webhooksUpdate($uuid, $data)

Update a Webhook



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 
$data = new \SignRequest\Model\WebhookSubscription(); // \SignRequest\Model\WebhookSubscription | 

try {
    $result = $apiInstance->webhooksUpdate($uuid, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |
 **data** | [**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)|  |

### Return type

[**\SignRequest\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

