# SignRequest\EventsApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsList**](EventsApi.md#eventsList) | **GET** /events/ | Retrieve a list of Events
[**eventsRead**](EventsApi.md#eventsRead) | **GET** /events/{id}/ | Retrieve an Event


# **eventsList**
> \SignRequest\Model\InlineResponse2004 eventsList($document__uuid, $document__external_id, $document__signrequest__who, $document__signrequest__from_email, $document__status, $document__user__email, $document__user__first_name, $document__user__last_name, $delivered, $delivered_on, $timestamp, $status, $event_type, $page, $limit)

Retrieve a list of Events



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document__uuid = "document__uuid_example"; // string | 
$document__external_id = "document__external_id_example"; // string | 
$document__signrequest__who = "document__signrequest__who_example"; // string | 
$document__signrequest__from_email = "document__signrequest__from_email_example"; // string | 
$document__status = "document__status_example"; // string | 
$document__user__email = "document__user__email_example"; // string | 
$document__user__first_name = "document__user__first_name_example"; // string | 
$document__user__last_name = "document__user__last_name_example"; // string | 
$delivered = "delivered_example"; // string | 
$delivered_on = "delivered_on_example"; // string | 
$timestamp = "timestamp_example"; // string | 
$status = "status_example"; // string | 
$event_type = "event_type_example"; // string | 
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->eventsList($document__uuid, $document__external_id, $document__signrequest__who, $document__signrequest__from_email, $document__status, $document__user__email, $document__user__first_name, $document__user__last_name, $delivered, $delivered_on, $timestamp, $status, $event_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document__uuid** | **string**|  | [optional]
 **document__external_id** | **string**|  | [optional]
 **document__signrequest__who** | **string**|  | [optional]
 **document__signrequest__from_email** | **string**|  | [optional]
 **document__status** | **string**|  | [optional]
 **document__user__email** | **string**|  | [optional]
 **document__user__first_name** | **string**|  | [optional]
 **document__user__last_name** | **string**|  | [optional]
 **delivered** | **string**|  | [optional]
 **delivered_on** | **string**|  | [optional]
 **timestamp** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **event_type** | **string**|  | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]

### Return type

[**\SignRequest\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsRead**
> \SignRequest\Model\Event eventsRead($id)

Retrieve an Event



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | A unique integer value identifying this event.

try {
    $result = $apiInstance->eventsRead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventsRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A unique integer value identifying this event. |

### Return type

[**\SignRequest\Model\Event**](../Model/Event.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

