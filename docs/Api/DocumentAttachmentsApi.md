# SignRequest\DocumentAttachmentsApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentAttachmentsCreate**](DocumentAttachmentsApi.md#documentAttachmentsCreate) | **POST** /document-attachments/ | Create a Document Attachment
[**documentAttachmentsList**](DocumentAttachmentsApi.md#documentAttachmentsList) | **GET** /document-attachments/ | Retrieve a list of Document Attachments
[**documentAttachmentsRead**](DocumentAttachmentsApi.md#documentAttachmentsRead) | **GET** /document-attachments/{uuid}/ | Retrieve a Document Attachment


# **documentAttachmentsCreate**
> \SignRequest\Model\DocumentAttachment documentAttachmentsCreate($data)

Create a Document Attachment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \SignRequest\Model\DocumentAttachment(); // \SignRequest\Model\DocumentAttachment | 

try {
    $result = $apiInstance->documentAttachmentsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->documentAttachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\SignRequest\Model\DocumentAttachment**](../Model/DocumentAttachment.md)|  |

### Return type

[**\SignRequest\Model\DocumentAttachment**](../Model/DocumentAttachment.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentAttachmentsList**
> \SignRequest\Model\InlineResponse2001 documentAttachmentsList($document__uuid, $document__external_id, $created, $page, $limit)

Retrieve a list of Document Attachments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document__uuid = "document__uuid_example"; // string | 
$document__external_id = "document__external_id_example"; // string | 
$created = "created_example"; // string | 
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->documentAttachmentsList($document__uuid, $document__external_id, $created, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->documentAttachmentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document__uuid** | **string**|  | [optional]
 **document__external_id** | **string**|  | [optional]
 **created** | **string**|  | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]

### Return type

[**\SignRequest\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentAttachmentsRead**
> \SignRequest\Model\DocumentAttachment documentAttachmentsRead($uuid)

Retrieve a Document Attachment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\DocumentAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->documentAttachmentsRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentAttachmentsApi->documentAttachmentsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SignRequest\Model\DocumentAttachment**](../Model/DocumentAttachment.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

