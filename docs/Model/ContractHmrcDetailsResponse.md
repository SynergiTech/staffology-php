# # ContractHmrcDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**officeNumber** | **string** |  | [optional]
**payeReference** | **string** |  | [optional]
**accountsOfficeReference** | **string** |  | [optional]
**econ** | **string** |  | [optional]
**utr** | **string** |  | [optional]
**coTax** | **string** |  | [optional]
**employmentAllowance** | **bool** |  | [optional]
**employmentAllowanceMaxClaim** | **float** | You might reduce this from the default if you&#39;ve made/are making a claim in another system | [optional]
**smallEmployersRelief** | **bool** |  | [optional]
**apprenticeshipLevy** | **bool** |  | [optional]
**apprenticeshipLevyAllowance** | **float** |  | [optional]
**quarterlyPaymentSchedule** | **bool** | Set to true if the employer pays HMRC on a quarterly schedule.  A value of false implies a monthly schedule.  &lt;b&gt;Warning:&lt;/b&gt; Changing this value after starting PayRuns will  delete any existing payments or adjustments you may have entered. | [optional]
**includeEmploymentAllowanceOnMonthlyJournal** | **bool** | If the employer is not on a QuarterlyPaymentSchedule  and is claiming EmploymentAllowance, then set this to true to include a line for  Employment Allowance on the journal for the monthly schedule. | [optional]
**carryForwardUnpaidLiabilities** | **bool** | If set to true then any unpaid amounts from previous periods will be brought forward  to work out the liability for the current period.  You&#39;d set this to false if you don&#39;t want to track payments. | [optional]
**paymentDateRule** | [**\SynergiTech\Staffology\Model\PaymentDateRule**](PaymentDateRule.md) |  | [optional]
**paymentDateDayOfMonth** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
