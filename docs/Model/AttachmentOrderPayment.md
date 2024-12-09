# # AttachmentOrderPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachmentOrder** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**date** | **\DateTime** | [readonly] The date this deduction was made | [optional]
**description** | **string** | [readonly] Description of deduction, usually the reference from the AttachmentOrder | [optional]
**attachablePay** | **float** | [readonly] The total Attachable pay for the Employee on this PayRun | [optional]
**protectedPay** | **float** | [readonly] The amount of the Attachable Pay that must be protected | [optional]
**otherAttachmentOrderDeductions** | **float** | [readonly] Deductions made on this PayRun for this employee due to  other higher priority AttachmentOrders | [optional]
**desiredDeduction** | **float** | [readonly] The amount that should be deducted, if arrestable pay is available.  Not including any shortfall | [optional]
**shortfall** | **float** | [readonly] Any shortfall (ie arrears) that existed before this PayRun. | [optional]
**totalPaid** | **float** | [readonly] Total amount paid to date, including this deduction. | [optional]
**resultingDeduction** | **float** | [readonly] The actual amount deducted | [optional]
**resultingShortfall** | **float** | [readonly] The resulting shortfall (including any shortfall from previous periods | [optional]
**adminFee** | **float** | [readonly] Any admin fee charged | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
