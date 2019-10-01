# Signer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** |  | 
**display_name** | **string** |  | [optional] 
**first_name** | **string** |  | [optional] 
**last_name** | **string** |  | [optional] 
**email_viewed** | **bool** |  | [optional] 
**viewed** | **bool** |  | [optional] 
**signed** | **bool** |  | [optional] 
**downloaded** | **bool** |  | [optional] 
**signed_on** | [**\DateTime**](\DateTime.md) |  | [optional] 
**needs_to_sign** | **bool** |  | [optional] [default to true]
**approve_only** | **bool** |  | [optional] 
**notify_only** | **bool** |  | [optional] 
**in_person** | **bool** |  | [optional] 
**order** | **int** |  | [optional] 
**language** | **string** |  | [optional] 
**force_language** | **bool** |  | [optional] 
**emailed** | **bool** |  | [optional] 
**verify_phone_number** | **string** |  | [optional] 
**verify_bank_account** | **string** |  | [optional] 
**declined** | **bool** |  | [optional] 
**declined_on** | [**\DateTime**](\DateTime.md) |  | [optional] 
**forwarded** | **string** |  | [optional] 
**forwarded_on** | [**\DateTime**](\DateTime.md) |  | [optional] 
**forwarded_to_email** | **string** |  | [optional] 
**forwarded_reason** | **string** |  | [optional] 
**message** | **string** |  | [optional] 
**embed_url_user_id** | **string** |  | [optional] 
**inputs** | [**\SignRequest\Model\SignerInputs[]**](SignerInputs.md) |  | [optional] 
**use_stamp_for_approve_only** | **bool** | Place an approval stamp on a document when a signer approves a document | [optional] 
**embed_url** | **string** |  | [optional] 
**attachments** | [**\SignRequest\Model\SignerAttachment[]**](SignerAttachment.md) |  | [optional] 
**redirect_url** | **string** |  | [optional] 
**redirect_url_declined** | **string** |  | [optional] 
**after_document** | **string** |  | [optional] 
**integrations** | [**\SignRequest\Model\InlineDocumentSignerIntegrationData[]**](InlineDocumentSignerIntegrationData.md) |  | [optional] 
**password** | **string** | Require the signer to enter this password before signing a document. This field is write only. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


