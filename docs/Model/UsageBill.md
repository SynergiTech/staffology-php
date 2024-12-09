# # UsageBill

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**year** | **int** |  | [optional]
**month** | **int** |  | [optional]
**payslipCount** | **int** |  | [optional]
**previouslyBilledPayslipCount** | **int** | The number of payslips that appear in the usage, but were billed in a previous period | [optional]
**netCost** | **float** | Net cost of any payslips, or the Pricing Table minimum, whichever is greater. | [optional]
**discount** | **float** |  | [optional]
**partnerDiscountAmount** | **float** |  | [optional]
**monthlyMinimum** | **float** | This is actually an offset against the NetCost and doesn&#39;t contain the full MonthlyMinimum. | [optional]
**total** | **float** |  | [optional] [readonly]
**paid** | **bool** |  | [optional]
**usage** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) |  | [optional]
**accountingCustomerId** | **string** |  | [optional]
**accountingInvoiceId** | **string** |  | [optional]
**accountingInvoiceLink** | **string** |  | [optional]
**useNetSuite** | **bool** |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
