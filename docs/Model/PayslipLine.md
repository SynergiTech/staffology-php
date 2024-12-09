# # PayslipLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\SynergiTech\Staffology\Model\PayslipLineType**](PayslipLineType.md) |  | [optional]
**code** | **string** |  | [optional]
**description** | **string** |  | [optional]
**secondaryDescription** | **string** |  | [optional]
**value** | **float** |  | [optional]
**multiplier** | **float** | [readonly] If the Code is a multiplier code then this is the multiplier. Value has already been calculated so this is just for reference | [optional]
**attachmentOrderId** | **string** | [readonly] The Id of the associated AttachmentOrder. Only included if the Code is AEO | [optional]
**pensionId** | **string** | [readonly] The Id of the associated Pension. Only included if the Code is PENSION, PENSIONSS or PENSIONRAS | [optional]
**loanId** | **string** | [readonly] The Id of the associated Loan, if any. | [optional]
**currencySymbol** | **string** |  | [optional]
**formattedValue** | **string** |  | [optional] [readonly]
**isNetToGross** | **bool** | If the PayLine is a fixed ammount addition without multiplier then this property may be set to true so that the amount of the addition to be considered a take home pay target. | [optional]
**targetNetToGrossValue** | **float** | The orginal net fixed addition amount that is considered to be a take home pay target. | [optional]
**leaveId** | **string** |  | [optional]
**roleId** | **string** | The employee role which is associated with this payslip line.  If set to null, the payslip line is not related with a role. | [optional]
**isAutoCalculatedBackPayLine** | **bool** |  | [optional]
**isAutomaticBackPay** | **bool** |  | [optional]
**hasSecondaryDescription** | **bool** |  | [optional] [readonly]
**contributesToBasicPay** | **bool** |  | [optional]
**isNotional** | **bool** | Determines whether the transaction involves non-monetary benefits for payroll processing, potentially subject to tax and National Insurance | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
