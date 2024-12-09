# # AttachmentOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\SynergiTech\Staffology\Model\AttachmentOrderType**](AttachmentOrderType.md) |  | [optional]
**carryForwardShortfall** | **bool** | [ReadOnly] Whether or not shortfalls should be carried forward | [optional] [readonly]
**allowProtectedEarnings** | **bool** | [ReadOnly] Whether or not shortfalls should be carried forward | [optional] [readonly]
**autoDeduction** | **bool** | [readonly] Whether or not the amount to be deducted is automatically calculated | [optional] [readonly]
**reference** | **string** | The reference which appeared on the court paperwork | [optional]
**issueDate** | **\DateTime** | The date of issue for this Order | [optional]
**applyFrom** | **\DateTime** | The date from which to apply this Order | [optional]
**applyUntil** | **\DateTime** | An optional date on which to stop applying this order | [optional]
**deductionIsPercentage** | **bool** | Whether or not the amount given for Deduction is a percentage rather than a fixed amount | [optional]
**deduction** | **float** | The percentage or amount (depending on DeductionIsPercentage) to deduct | [optional]
**protectedEarningsIsPercentage** | **bool** | Whether or not the amount for ProtectedEarnings is a percentage rather than a fixed amount. | [optional]
**protectedEarnings** | **float** | The percentage or amount or percentage (depending on ProtectedEarningsIsPercentage) to protect | [optional]
**chargeAdminFee** | **bool** | Whether or not a £1 admin fee should be deducted for this order | [optional]
**shortfall** | **float** | Any shortfall that is being carried forward | [optional]
**stopWhenTotalPaid** | **bool** | Whether or not this order should be stopped once a total amount has been paid | [optional]
**totalAmountToPay** | **float** | The Total amount that needs to be paid for this Order | [optional]
**amountPreviouslyPaid** | **float** | Any amount that has previously been paid towards this Order | [optional]
**stopped** | **bool** | [readonly] Whether or not this Order has been stopped.  This is set automatically when either it&#39;s paid in full or the ApplyUntil date has been reached. | [optional]
**notes** | **string** | A free-form text field to record any comments | [optional]
**includeBankDetails** | **bool** |  | [optional]
**bankDetails** | [**\SynergiTech\Staffology\Model\BankDetails**](BankDetails.md) |  | [optional]
**payments** | [**\SynergiTech\Staffology\Model\AttachmentOrderPayment[]**](AttachmentOrderPayment.md) | [readonly] Payments made towards this order. Only populated when viewed as a report. | [optional]
**payee** | **string** | The Id of the Payee, if any, that deductions are to be paid to. | [optional]
**payeeName** | **string** | The name of the Payee, if any, that deductions are to be paid to. | [optional]
**documentCount** | **int** | [readonly] The number of attachments associated with this model | [optional]
**documents** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] The attachments associated with this model | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
