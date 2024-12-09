# # Loan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issueDate** | **\DateTime** | The date the Loan was made | [optional]
**reference** | **string** | An optional reference for this Loan | [optional]
**payCode** | **string** | The Code of the PayCode used for recording payments.  The PayCode must have a CalculationType of FixedAmount and not be a multiplier code | [optional]
**loanAmount** | **float** | The initial amount that the loan was for | [optional]
**periodAmount** | **float** | The amount to deduct per PayPeriod | [optional]
**amountRepaid** | **float** | [readonly] The amount repaid so far due to deductions in Payruns | [optional]
**previouslyPaid** | **float** | [readonly] Any amount by which to adjust the Balance, perhaps due to repayments made elsewhere | [optional]
**balance** | **float** | [readonly] The Balance of the Loan | [optional] [readonly]
**isSettled** | **bool** | [readonly] | [optional] [readonly]
**isPaused** | **bool** | If set to true then deductions will not be made | [optional]
**documentCount** | **int** | [readonly] The number of attachments associated with this model | [optional]
**documents** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] The attachments associated with this model | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
