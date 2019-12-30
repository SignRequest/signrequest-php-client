# signrequest-php-client

API for [SignRequest.com](https://signrequest.com/)

[![PHP version](https://badge.fury.io/ph/signrequest%2Fsignrequest-client.svg)](https://badge.fury.io/ph/signrequest%2Fsignrequest-client)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "signrequest/signrequest-client": "1.3.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/signrequest-php-client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## API Documentation

Full API documentation, including code samples, can be found here:
https://signrequest.com/api/v1/docs/

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = SignRequest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Token');

$apiInstance = new SignRequest\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \SignRequest\Model\Document(); // \SignRequest\Model\Document |
$data->setFileFromUrl('https://docs.google.com/document/d/1oI2R1SxfMNZXiz3jCQvorpoklF9xq_dCJnOpkI-zo80/edit?usp=sharing');

try {
    $result = $apiInstance->documentsCreate($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsCreate: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://signrequest.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiTokensApi* | [**apiTokensList**](docs/Api/ApiTokensApi.md#apitokenslist) | **GET** /api-tokens/ | Retrieve a list of API tokens
*DocumentAttachmentsApi* | [**documentAttachmentsCreate**](docs/Api/DocumentAttachmentsApi.md#documentattachmentscreate) | **POST** /document-attachments/ | Create a Document Attachment
*DocumentAttachmentsApi* | [**documentAttachmentsList**](docs/Api/DocumentAttachmentsApi.md#documentattachmentslist) | **GET** /document-attachments/ | Retrieve a list of Document Attachments
*DocumentAttachmentsApi* | [**documentAttachmentsRead**](docs/Api/DocumentAttachmentsApi.md#documentattachmentsread) | **GET** /document-attachments/{uuid}/ | Retrieve a Document Attachment
*DocumentsApi* | [**documentsCreate**](docs/Api/DocumentsApi.md#documentscreate) | **POST** /documents/ | Create a Document
*DocumentsApi* | [**documentsDelete**](docs/Api/DocumentsApi.md#documentsdelete) | **DELETE** /documents/{uuid}/ | Delete a Document
*DocumentsApi* | [**documentsList**](docs/Api/DocumentsApi.md#documentslist) | **GET** /documents/ | Retrieve a list of Documents
*DocumentsApi* | [**documentsRead**](docs/Api/DocumentsApi.md#documentsread) | **GET** /documents/{uuid}/ | Retrieve a Document
*DocumentsSearchApi* | [**documentsSearchList**](docs/Api/DocumentsSearchApi.md#documentssearchlist) | **GET** /documents-search/ | Search documents
*EventsApi* | [**eventsList**](docs/Api/EventsApi.md#eventslist) | **GET** /events/ | Retrieve a list of Events
*EventsApi* | [**eventsRead**](docs/Api/EventsApi.md#eventsread) | **GET** /events/{id}/ | Retrieve an Event
*SignrequestQuickCreateApi* | [**signrequestQuickCreateCreate**](docs/Api/SignrequestQuickCreateApi.md#signrequestquickcreatecreate) | **POST** /signrequest-quick-create/ | Quick create a SignRequest
*SignrequestsApi* | [**signrequestsCancelSignrequest**](docs/Api/SignrequestsApi.md#signrequestscancelsignrequest) | **POST** /signrequests/{uuid}/cancel_signrequest/ | Cancel a SignRequest
*SignrequestsApi* | [**signrequestsCreate**](docs/Api/SignrequestsApi.md#signrequestscreate) | **POST** /signrequests/ | Create a SignRequest
*SignrequestsApi* | [**signrequestsList**](docs/Api/SignrequestsApi.md#signrequestslist) | **GET** /signrequests/ | Retrieve a list of SignRequests
*SignrequestsApi* | [**signrequestsRead**](docs/Api/SignrequestsApi.md#signrequestsread) | **GET** /signrequests/{uuid}/ | Retrieve a SignRequest
*SignrequestsApi* | [**signrequestsResendSignrequestEmail**](docs/Api/SignrequestsApi.md#signrequestsresendsignrequestemail) | **POST** /signrequests/{uuid}/resend_signrequest_email/ | Resend a SignRequest
*TeamMembersApi* | [**teamMembersList**](docs/Api/TeamMembersApi.md#teammemberslist) | **GET** /team-members/ | Retrieve a list of Team Members
*TeamMembersApi* | [**teamMembersRead**](docs/Api/TeamMembersApi.md#teammembersread) | **GET** /team-members/{uuid}/ | Retrieve a Team Member
*TeamsApi* | [**teamsCreate**](docs/Api/TeamsApi.md#teamscreate) | **POST** /teams/ | Create a Team
*TeamsApi* | [**teamsDelete**](docs/Api/TeamsApi.md#teamsdelete) | **DELETE** /teams/{subdomain}/ | Delete a Team
*TeamsApi* | [**teamsInviteMember**](docs/Api/TeamsApi.md#teamsinvitemember) | **POST** /teams/{subdomain}/invite_member/ | Invite a Team Member
*TeamsApi* | [**teamsList**](docs/Api/TeamsApi.md#teamslist) | **GET** /teams/ | Retrieve a list of Teams
*TeamsApi* | [**teamsPartialUpdate**](docs/Api/TeamsApi.md#teamspartialupdate) | **PATCH** /teams/{subdomain}/ | Update a Team
*TeamsApi* | [**teamsRead**](docs/Api/TeamsApi.md#teamsread) | **GET** /teams/{subdomain}/ | Retrieve a Team
*TemplatesApi* | [**templatesList**](docs/Api/TemplatesApi.md#templateslist) | **GET** /templates/ | Retrieve a list of Templates
*TemplatesApi* | [**templatesRead**](docs/Api/TemplatesApi.md#templatesread) | **GET** /templates/{uuid}/ | Retrieve a Template
*WebhooksApi* | [**webhooksCreate**](docs/Api/WebhooksApi.md#webhookscreate) | **POST** /webhooks/ | Create a Webhook
*WebhooksApi* | [**webhooksDelete**](docs/Api/WebhooksApi.md#webhooksdelete) | **DELETE** /webhooks/{uuid}/ | Delete a Webhook
*WebhooksApi* | [**webhooksList**](docs/Api/WebhooksApi.md#webhookslist) | **GET** /webhooks/ | Retrieve a list of Webhooks
*WebhooksApi* | [**webhooksPartialUpdate**](docs/Api/WebhooksApi.md#webhookspartialupdate) | **PATCH** /webhooks/{uuid}/ | Partially update a Webhook
*WebhooksApi* | [**webhooksRead**](docs/Api/WebhooksApi.md#webhooksread) | **GET** /webhooks/{uuid}/ | Retrieve a Webhook
*WebhooksApi* | [**webhooksUpdate**](docs/Api/WebhooksApi.md#webhooksupdate) | **PUT** /webhooks/{uuid}/ | Update a Webhook


## Documentation For Models

 - [AuthToken](docs/Model/AuthToken.md)
 - [Document](docs/Model/Document.md)
 - [DocumentAttachment](docs/Model/DocumentAttachment.md)
 - [DocumentSearch](docs/Model/DocumentSearch.md)
 - [DocumentSignerTemplateConf](docs/Model/DocumentSignerTemplateConf.md)
 - [DocumentSigningLog](docs/Model/DocumentSigningLog.md)
 - [DocumentSignrequest](docs/Model/DocumentSignrequest.md)
 - [DocumentTeam](docs/Model/DocumentTeam.md)
 - [Event](docs/Model/Event.md)
 - [FileFromSf](docs/Model/FileFromSf.md)
 - [InlineDocumentSignerIntegrationData](docs/Model/InlineDocumentSignerIntegrationData.md)
 - [InlineIntegrationData](docs/Model/InlineIntegrationData.md)
 - [InlinePrefillTags](docs/Model/InlinePrefillTags.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineSignRequest](docs/Model/InlineSignRequest.md)
 - [InlineTeam](docs/Model/InlineTeam.md)
 - [InlineTeamMember](docs/Model/InlineTeamMember.md)
 - [InviteMember](docs/Model/InviteMember.md)
 - [Placeholder](docs/Model/Placeholder.md)
 - [RequiredAttachment](docs/Model/RequiredAttachment.md)
 - [SignRequest](docs/Model/SignRequest.md)
 - [SignRequestQuickCreate](docs/Model/SignRequestQuickCreate.md)
 - [Signer](docs/Model/Signer.md)
 - [SignerAttachment](docs/Model/SignerAttachment.md)
 - [SignerInputs](docs/Model/SignerInputs.md)
 - [SigningLog](docs/Model/SigningLog.md)
 - [Team](docs/Model/Team.md)
 - [TeamMember](docs/Model/TeamMember.md)
 - [Template](docs/Model/Template.md)
 - [User](docs/Model/User.md)
 - [WebhookSubscription](docs/Model/WebhookSubscription.md)


## Documentation For Authorization


## Token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

tech-support@signrequest.com

