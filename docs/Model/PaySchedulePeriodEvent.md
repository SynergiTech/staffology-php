# # PaySchedulePeriodEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payPeriodEventType** | [**\SynergiTech\Staffology\Model\PayPeriodEventType**](PayPeriodEventType.md) |  | [optional]
**eventDate** | **\DateTime** | The expected date and time of the event. | [optional]
**actualEventDate** | **\DateTime** | The actual date and time when the event was completed. | [optional]
**isOverDue** | **bool** | Returns true if its past the event date. | [optional] [readonly]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
