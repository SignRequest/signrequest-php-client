# SignRequest\SignrequestsApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signrequestsCancelSignrequest**](SignrequestsApi.md#signrequestsCancelSignrequest) | **POST** /signrequests/{uuid}/cancel_signrequest/ | Cancel a SignRequest
[**signrequestsCreate**](SignrequestsApi.md#signrequestsCreate) | **POST** /signrequests/ | Create a SignRequest
[**signrequestsList**](SignrequestsApi.md#signrequestsList) | **GET** /signrequests/ | Retrieve a list of SignRequests
[**signrequestsRead**](SignrequestsApi.md#signrequestsRead) | **GET** /signrequests/{uuid}/ | Retrieve a SignRequest
[**signrequestsResendSignrequestEmail**](SignrequestsApi.md#signrequestsResendSignrequestEmail) | **POST** /signrequests/{uuid}/resend_signrequest_email/ | Resend a SignRequest


# **signrequestsCancelSignrequest**
> \SignRequest\Model\InlineResponse201 signrequestsCancelSignrequest($uuid)

Cancel a SignRequest



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\SignrequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->signrequestsCancelSignrequest($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignrequestsApi->signrequestsCancelSignrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SignRequest\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signrequestsCreate**
> \SignRequest\Model\SignRequest signrequestsCreate($data)

Create a SignRequest



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\SignrequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \SignRequest\Model\SignRequest(); // \SignRequest\Model\SignRequest | 

try {
    $result = $apiInstance->signrequestsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignrequestsApi->signrequestsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\SignRequest\Model\SignRequest**](../Model/SignRequest.md)|  |

### Return type

[**\SignRequest\Model\SignRequest**](../Model/SignRequest.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signrequestsList**
> \SignRequest\Model\InlineResponse2005 signrequestsList($who, $from_email, $page, $limit)

Retrieve a list of SignRequests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\SignrequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$who = "who_example"; // string | 
$from_email = "from_email_example"; // string | 
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->signrequestsList($who, $from_email, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignrequestsApi->signrequestsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **who** | **string**|  | [optional]
 **from_email** | **string**|  | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]

### Return type

[**\SignRequest\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signrequestsRead**
> \SignRequest\Model\SignRequest signrequestsRead($uuid)

Retrieve a SignRequest



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\SignrequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->signrequestsRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignrequestsApi->signrequestsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SignRequest\Model\SignRequest**](../Model/SignRequest.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signrequestsResendSignrequestEmail**
> \SignRequest\Model\InlineResponse2011 signrequestsResendSignrequestEmail($uuid)

Resend a SignRequest



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\SignrequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->signrequestsResendSignrequestEmail($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignrequestsApi->signrequestsResendSignrequestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SignRequest\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

