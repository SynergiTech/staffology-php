# # MailSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**senderName** | **string** |  |
**senderEmail** | **string** |  |
**useSystemFromAddress** | **bool** | If set to true then the SenderEmail provided will only be used in the   ReplyTo fields. The system defaults will be used for the From address. | [optional]
**senderEmailVerified** | **bool** | [readonly] The SenderEmail must be verified before you can send email using that address | [optional]
**customiseSmtpSettings** | **bool** |  |
**smtpSettings** | [**\SynergiTech\Staffology\Model\SmtpSettings**](SmtpSettings.md) |  | [optional]
**customiseHtmlEmailSettings** | **bool** |  |
**htmlEmailSettings** | [**\SynergiTech\Staffology\Model\HtmlEmailSettings**](HtmlEmailSettings.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
