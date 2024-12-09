# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhookEvent** | [**\SynergiTech\Staffology\Model\WebhookEvent**](WebhookEvent.md) |  | [optional]
**url** | **string** | The Url to which the payload should be sent |
**active** | **bool** | If set to false then this Webhook will not be triggered | [optional]
**eventCount** | **int** | The number of times this webhook has been triggered | [optional]
**lastPayload** | [**\SynergiTech\Staffology\Model\WebhookPayload**](WebhookPayload.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
