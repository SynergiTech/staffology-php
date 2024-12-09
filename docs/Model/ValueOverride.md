# # ValueOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\SynergiTech\Staffology\Model\PayrollValueType**](PayrollValueType.md) |  | [optional]
**value** | **float** | The value to use in place of the original value | [optional]
**originalValue** | **float** | [readonly] The original value | [optional]
**note** | **string** | The reason given for the override | [optional]
**attachmentOrderId** | **string** | The Id of the AttachmentOrder. Only relevant if the Type is set to AttachmentOrderDeductions | [optional]
**pensionId** | **string** | The Id of the associated Pension. Only included if the Code is PENSION, PENSIONSS or PENSIONRAS | [optional]
**leaveId** | **string** | The Id of the associated Leave. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
