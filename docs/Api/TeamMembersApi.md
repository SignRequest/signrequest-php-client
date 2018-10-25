# SignRequest\TeamMembersApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**teamMembersList**](TeamMembersApi.md#teamMembersList) | **GET** /team-members/ | Retrieve a list of Team Members
[**teamMembersRead**](TeamMembersApi.md#teamMembersRead) | **GET** /team-members/{uuid}/ | Retrieve a Team Member


# **teamMembersList**
> \SignRequest\Model\InlineResponse2006 teamMembersList($is_active, $is_owner, $is_admin, $user__email, $user__first_name, $user__last_name, $page, $limit)

Retrieve a list of Team Members



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\TeamMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_active = "is_active_example"; // string | 
$is_owner = "is_owner_example"; // string | 
$is_admin = "is_admin_example"; // string | 
$user__email = "user__email_example"; // string | 
$user__first_name = "user__first_name_example"; // string | 
$user__last_name = "user__last_name_example"; // string | 
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->teamMembersList($is_active, $is_owner, $is_admin, $user__email, $user__first_name, $user__last_name, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMembersApi->teamMembersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_active** | **string**|  | [optional]
 **is_owner** | **string**|  | [optional]
 **is_admin** | **string**|  | [optional]
 **user__email** | **string**|  | [optional]
 **user__first_name** | **string**|  | [optional]
 **user__last_name** | **string**|  | [optional]
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]

### Return type

[**\SignRequest\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **teamMembersRead**
> \SignRequest\Model\TeamMember teamMembersRead($uuid)

Retrieve a Team Member



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\TeamMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | 

try {
    $result = $apiInstance->teamMembersRead($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMembersApi->teamMembersRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**|  |

### Return type

[**\SignRequest\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

