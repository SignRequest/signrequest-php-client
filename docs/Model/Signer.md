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
**needs_to_sign** | **bool** | When &#x60;false&#x60; user does not need to sign, but will receive a copy of the signed document and signing log, see: [Copy only](#section/Additional-signing-methods/Copy-only) | [optional] [default to true]
**approve_only** | **bool** | Require user to approve the document (without adding a signature), see: [Approve only](#section/Additional-signing-methods/Approve-only) | [optional] 
**notify_only** | **bool** | Send notifications about the document and a copy of the signed document and signing log, but don&#39;t require them to take any action, see: [Notify only](#section/Additional-signing-methods/Notify-only) | [optional] 
**in_person** | **bool** | When used in combination with an embed url on the sender, after sender has signed, they will be redirected to the next &#x60;in_person&#x60; signer, see: [In person signing](#section/Additional-signing-methods/In-person-signing) | [optional] 
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


