# # PayRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**taxMonth** | **int** | [readonly] The Tax Month that the Payment Date falls in | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**ordinal** | **int** | [readonly] Indicates whether this uses first, second, third (etc.) PaySchedule for this PayPeriod. | [optional]
**period** | **int** | [readonly] The period (i.e, Tax Week or Tax Month) that this PayRun is for. | [optional]
**startDate** | **\DateTime** | [readonly] The start date of the period this PayRun covers | [optional]
**endDate** | **\DateTime** | [readonly] The end date of the period this PayRun covers | [optional]
**paymentDate** | **\DateTime** | [readonly] The intended date that Employees will be paid, although this can be changed on a per PayRunEntry basis | [optional]
**employeeCount** | **int** | [readonly] The number of Employees included in this PayRun (including any CIS Subcontractors) | [optional]
**subContractorCount** | **int** | [readonly] The number of CIS Subcontractors included in this PayRun | [optional]
**nonRtiEmployeeCount** | **int** | [readonly] The number of employees excluded from the RTI submission in this PayRun | [optional]
**totals** | [**\SynergiTech\Staffology\Model\PayRunTotals**](PayRunTotals.md) |  | [optional]
**payslipScheduledDateTime** | **\DateTime** | The scheduled date time for sending payslips by email. | [optional]
**state** | [**\SynergiTech\Staffology\Model\PayRunState**](PayRunState.md) |  | [optional]
**isClosed** | **bool** | [readonly] Set to True if the PayRun is Finalised and changes can no longer be made | [optional] [readonly]
**isRolledBack** | **bool** | [readonly] Set to True if the PayRun is currently rolled back | [optional]
**dateClosed** | **\DateTime** |  | [optional]
**autoPilotCloseDate** | **\DateTime** | [readonly] If AutoPilot is enabled in the AutomationSettings for the Employer then this property will tell you when  the payrun will be automatically closed | [optional]
**entries** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] The PayRunEntries that make up this PayRun.  This is populate automatically when you start a PayRun. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
