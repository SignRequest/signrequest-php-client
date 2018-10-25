# signrequest-php-client

API for SignRequest.com

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/SignRequest/signrequest-php-client.git"
    }
  ],
  "require": {
    "SignRequest/signrequest-php-client": "*@dev"
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

All URIs are relative to _https://signrequest.com/api/v1_

| Class                       | Method                                                                                                   | HTTP request                                            | Description                             |
| --------------------------- | -------------------------------------------------------------------------------------------------------- | ------------------------------------------------------- | --------------------------------------- |
| _ApiTokensApi_              | [**apiTokensCreate**](docs/Api/ApiTokensApi.md#apitokenscreate)                                          | **POST** /api-tokens/                                   | Create an API token                     |
| _ApiTokensApi_              | [**apiTokensDelete**](docs/Api/ApiTokensApi.md#apitokensdelete)                                          | **DELETE** /api-tokens/{key}/                           | Delete an API token                     |
| _ApiTokensApi_              | [**apiTokensList**](docs/Api/ApiTokensApi.md#apitokenslist)                                              | **GET** /api-tokens/                                    | Retrieve a list of API tokens           |
| _ApiTokensApi_              | [**apiTokensRead**](docs/Api/ApiTokensApi.md#apitokensread)                                              | **GET** /api-tokens/{key}/                              | Retrieve an API token                   |
| _DocumentAttachmentsApi_    | [**documentAttachmentsCreate**](docs/Api/DocumentAttachmentsApi.md#documentattachmentscreate)            | **POST** /document-attachments/                         | Create a Document Attachment            |
| _DocumentAttachmentsApi_    | [**documentAttachmentsList**](docs/Api/DocumentAttachmentsApi.md#documentattachmentslist)                | **GET** /document-attachments/                          | Retrieve a list of Document Attachments |
| _DocumentAttachmentsApi_    | [**documentAttachmentsRead**](docs/Api/DocumentAttachmentsApi.md#documentattachmentsread)                | **GET** /document-attachments/{uuid}/                   | Retrieve a Document Attachment          |
| _DocumentsApi_              | [**documentsCreate**](docs/Api/DocumentsApi.md#documentscreate)                                          | **POST** /documents/                                    | Create a Document                       |
| _DocumentsApi_              | [**documentsDelete**](docs/Api/DocumentsApi.md#documentsdelete)                                          | **DELETE** /documents/{uuid}/                           | Delete a Document                       |
| _DocumentsApi_              | [**documentsList**](docs/Api/DocumentsApi.md#documentslist)                                              | **GET** /documents/                                     | Retrieve a list of Documents            |
| _DocumentsApi_              | [**documentsRead**](docs/Api/DocumentsApi.md#documentsread)                                              | **GET** /documents/{uuid}/                              | Retrieve a Document                     |
| _DocumentsSearchApi_        | [**documentsSearchList**](docs/Api/DocumentsSearchApi.md#documentssearchlist)                            | **GET** /documents-search/                              | Search documents                        |
| _EventsApi_                 | [**eventsList**](docs/Api/EventsApi.md#eventslist)                                                       | **GET** /events/                                        | Retrieve a list of Events               |
| _EventsApi_                 | [**eventsRead**](docs/Api/EventsApi.md#eventsread)                                                       | **GET** /events/{id}/                                   | Retrieve an Event                       |
| _SignrequestQuickCreateApi_ | [**signrequestQuickCreateCreate**](docs/Api/SignrequestQuickCreateApi.md#signrequestquickcreatecreate)   | **POST** /signrequest-quick-create/                     | Quick create a SignRequest              |
| _SignrequestsApi_           | [**signrequestsCancelSignrequest**](docs/Api/SignrequestsApi.md#signrequestscancelsignrequest)           | **POST** /signrequests/{uuid}/cancel_signrequest/       | Cancel a SignRequest                    |
| _SignrequestsApi_           | [**signrequestsCreate**](docs/Api/SignrequestsApi.md#signrequestscreate)                                 | **POST** /signrequests/                                 | Create a SignRequest                    |
| _SignrequestsApi_           | [**signrequestsList**](docs/Api/SignrequestsApi.md#signrequestslist)                                     | **GET** /signrequests/                                  | Retrieve a list of SignRequests         |
| _SignrequestsApi_           | [**signrequestsRead**](docs/Api/SignrequestsApi.md#signrequestsread)                                     | **GET** /signrequests/{uuid}/                           | Retrieve a SignRequest                  |
| _SignrequestsApi_           | [**signrequestsResendSignrequestEmail**](docs/Api/SignrequestsApi.md#signrequestsresendsignrequestemail) | **POST** /signrequests/{uuid}/resend_signrequest_email/ | Resend a SignRequest                    |
| _TeamMembersApi_            | [**teamMembersList**](docs/Api/TeamMembersApi.md#teammemberslist)                                        | **GET** /team-members/                                  | Retrieve a list of Team Members         |
| _TeamMembersApi_            | [**teamMembersRead**](docs/Api/TeamMembersApi.md#teammembersread)                                        | **GET** /team-members/{uuid}/                           | Retrieve a Team Member                  |
| _TeamsApi_                  | [**teamsCreate**](docs/Api/TeamsApi.md#teamscreate)                                                      | **POST** /teams/                                        | Create a Team                           |
| _TeamsApi_                  | [**teamsInviteMember**](docs/Api/TeamsApi.md#teamsinvitemember)                                          | **POST** /teams/{subdomain}/invite_member/              | Invite a Team Member                    |
| _TeamsApi_                  | [**teamsList**](docs/Api/TeamsApi.md#teamslist)                                                          | **GET** /teams/                                         | Retrieve a list of Teams                |
| _TeamsApi_                  | [**teamsPartialUpdate**](docs/Api/TeamsApi.md#teamspartialupdate)                                        | **PATCH** /teams/{subdomain}/                           | Update a Team                           |
| _TeamsApi_                  | [**teamsRead**](docs/Api/TeamsApi.md#teamsread)                                                          | **GET** /teams/{subdomain}/                             | Retrieve a Team                         |
| _TemplatesApi_              | [**templatesList**](docs/Api/TemplatesApi.md#templateslist)                                              | **GET** /templates/                                     | Retrieve a list of Templates            |
| _TemplatesApi_              | [**templatesRead**](docs/Api/TemplatesApi.md#templatesread)                                              | **GET** /templates/{uuid}/                              | Retrieve a Template                     |
| _WebhooksApi_               | [**webhooksCreate**](docs/Api/WebhooksApi.md#webhookscreate)                                             | **POST** /webhooks/                                     | Create a Webhook                        |
| _WebhooksApi_               | [**webhooksDelete**](docs/Api/WebhooksApi.md#webhooksdelete)                                             | **DELETE** /webhooks/{uuid}/                            | Delete a Webhook                        |
| _WebhooksApi_               | [**webhooksList**](docs/Api/WebhooksApi.md#webhookslist)                                                 | **GET** /webhooks/                                      | Retrieve a list of Webhooks             |
| _WebhooksApi_               | [**webhooksPartialUpdate**](docs/Api/WebhooksApi.md#webhookspartialupdate)                               | **PATCH** /webhooks/{uuid}/                             | Partially update a Webhook              |
| _WebhooksApi_               | [**webhooksRead**](docs/Api/WebhooksApi.md#webhooksread)                                                 | **GET** /webhooks/{uuid}/                               | Retrieve a Webhook                      |
| _WebhooksApi_               | [**webhooksUpdate**](docs/Api/WebhooksApi.md#webhooksupdate)                                             | **PUT** /webhooks/{uuid}/                               | Update a Webhook                        |

## Documentation For Models

- [AuthToken](docs/Model/AuthToken.md)
- [Document](docs/Model/Document.md)
- [DocumentAttachment](docs/Model/DocumentAttachment.md)
- [DocumentSearch](docs/Model/DocumentSearch.md)
- [DocumentSignerTemplateConf](docs/Model/DocumentSignerTemplateConf.md)
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
