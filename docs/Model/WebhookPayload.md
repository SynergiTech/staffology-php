# # WebhookPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | [readonly] A descriptive name for this payload | [optional]
**url** | **string** | [readonly] The Url that payload will be sent to |
**attempts** | **int** | [readonly]  The number of attempts that have been made to deliver this payload | [optional]
**statusCode** | **int** | [readonly] The status code received from the Url | [optional]
**taskStatus** | [**\SynergiTech\Staffology\Model\BackgroundTaskStatus**](BackgroundTaskStatus.md) |  | [optional]
**statusMessage** | **string** | [readonly]  A message to accompany the status | [optional]
**created** | **\DateTime** | [readonly]  The date and time this payload was created | [optional] [readonly]
**payload** | **mixed** | [readonly] the JSON payload that will be sent to the URl | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
