# SignRequest\DocumentsSearchApi

All URIs are relative to *https://signrequest.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsSearchList**](DocumentsSearchApi.md#documentsSearchList) | **GET** /documents-search/ | Search documents


# **documentsSearchList**
> \SignRequest\Model\InlineResponse2002 documentsSearchList($page, $limit, $q, $autocomplete, $name, $subdomain, $signer_emails, $status, $who, $format, $signer_data)

Search documents

Search interface for fast (autocomplete) searching of documents.  This can be useful to have your users search for a document in your interface.  Document names are tokenized on whitespace, hyphens and underscores to also match partial document names.  *Normal search:*  - ?**q**={{query}}  *Autocomplete search:*  - ?**autocomplete**={{partial query}}  *Search in document name:*  - ?**name**={{query}}  *Available (extra) filters:*  - ?**subdomain**={{ team_subdomain }} or use this endpoint with team_subdomain.signrequest.com (when not provided only personal documents are shown) - ?**signer_emails**={{ signer@email.com }} (will filter documents that an email needed to sign/approve) - ?**status**={{ si }} - ?**who**={{ mo }}  To include multiple values for a filter field separate the values with a pipe (|). For example to only search for completed documents use **status=se|vi** (sent and viewed).  *Pagination:*  - ?**page**={{ page_number: default 1 }} - ?**limit**={{ limit results: default 10, max 100 }}  *Format:*  By default json is returned, to export data as csv or xls use the format parameter.  - ?**format**=csv - ?**format**=xls  For csv and xls the data can also be exported with each signer on a separate row. In this mode also the signer inputs that have an *external_id* specified on a tag will be exported. All external_id's found will be exported as columns. To use this mode add the **signer_data** parameter.  - ?**format**=csv&**signer_data**=1 - ?**format**=xls&**signer_data**=1  Note that all documents are only ordered by **created** (newest first) when **q**, **autocomplete** or **name** are not used, else they are ordered by the strenght of the match.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\DocumentsSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page number within the paginated result set.
$limit = 56; // int | Number of results to return per page.
$q = "q_example"; // string | Normal search query
$autocomplete = "autocomplete_example"; // string | Partial search query
$name = "name_example"; // string | Document name
$subdomain = "subdomain_example"; // string | 
$signer_emails = "signer_emails_example"; // string | Email needed to sign/approve
$status = "status_example"; // string | `co`: converting, `ne`: new, `se`: sent, `vi`: viewed, `si`: signed, `do`: downloaded, `sd`: signed and downloaded, `ca`: cancelled, `de`: declined, `ec`: error converting, `es`: error sending, `xp`: expired
$who = "who_example"; // string | `m`: only me, `mo`: me and others, `o`: only others
$format = "format_example"; // string | Export format, can be `json` (default), `csv`, or `xls`
$signer_data = 8.14; // float | Set to `1` to export with each signer on a separate row

try {
    $result = $apiInstance->documentsSearchList($page, $limit, $q, $autocomplete, $name, $subdomain, $signer_emails, $status, $who, $format, $signer_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsSearchApi->documentsSearchList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| A page number within the paginated result set. | [optional]
 **limit** | **int**| Number of results to return per page. | [optional]
 **q** | **string**| Normal search query | [optional]
 **autocomplete** | **string**| Partial search query | [optional]
 **name** | **string**| Document name | [optional]
 **subdomain** | **string**|  | [optional]
 **signer_emails** | **string**| Email needed to sign/approve | [optional]
 **status** | **string**| &#x60;co&#x60;: converting, &#x60;ne&#x60;: new, &#x60;se&#x60;: sent, &#x60;vi&#x60;: viewed, &#x60;si&#x60;: signed, &#x60;do&#x60;: downloaded, &#x60;sd&#x60;: signed and downloaded, &#x60;ca&#x60;: cancelled, &#x60;de&#x60;: declined, &#x60;ec&#x60;: error converting, &#x60;es&#x60;: error sending, &#x60;xp&#x60;: expired | [optional]
 **who** | **string**| &#x60;m&#x60;: only me, &#x60;mo&#x60;: me and others, &#x60;o&#x60;: only others | [optional]
 **format** | **string**| Export format, can be &#x60;json&#x60; (default), &#x60;csv&#x60;, or &#x60;xls&#x60; | [optional]
 **signer_data** | **float**| Set to &#x60;1&#x60; to export with each signer on a separate row | [optional]

### Return type

[**\SignRequest\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/csv, application/vnd.ms-excel

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

