# SignRequest\SignrequestQuickCreateApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signrequestQuickCreateCreate**](SignrequestQuickCreateApi.md#signrequestQuickCreateCreate) | **POST** /signrequest-quick-create/ | Quick create a SignRequest


# **signrequestQuickCreateCreate**
> \SignRequest\Model\SignRequestQuickCreate signrequestQuickCreateCreate($data)

Quick create a SignRequest



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\SignrequestQuickCreateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \SignRequest\Model\SignRequestQuickCreate(); // \SignRequest\Model\SignRequestQuickCreate | 

try {
    $result = $apiInstance->signrequestQuickCreateCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignrequestQuickCreateApi->signrequestQuickCreateCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\SignRequest\Model\SignRequestQuickCreate**](../Model/SignRequestQuickCreate.md)|  |

### Return type

[**\SignRequest\Model\SignRequestQuickCreate**](../Model/SignRequestQuickCreate.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

