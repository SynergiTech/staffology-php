# # PaySchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A descriptive name for this PaySchedule | [optional]
**ordinal** | **int** | [readonly] Indicates whether this is first, second, third (etc) PaySchedule for this PayPeriod. | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**firstPeriodEndDate** | **\DateTime** | The last day of the first pay period | [optional]
**firstPaymentDate** | **\DateTime** | The first payment date | [optional]
**paymentDateType** | [**\SynergiTech\Staffology\Model\PaymentDateType**](PaymentDateType.md) |  | [optional]
**periodEndDateType** | [**\SynergiTech\Staffology\Model\PaymentDateType**](PaymentDateType.md) |  | [optional]
**periodLengths** | **int[]** | Only applicable for PayPeriod of Custom. Defines the length of each period | [optional]
**highGrossPay** | **float** | A gross pay amount considered high for this PaySchedule | [optional]
**highNetPay** | **float** | A net pay amount considered high for this PaySchedule | [optional]
**periodEventsConfig** | [**\SynergiTech\Staffology\Model\PaySchedulePeriodEventsConfig**](PaySchedulePeriodEventsConfig.md) |  | [optional]
**hasOpenPayRunPeriod** | **bool** | [readonly] Will be true if the employer currently has an open PayRun for this PayPeriod | [optional]
**lastPeriodEndDate** | **\DateTime** | [readonly] The end date of the most recent PayRun on this schedule | [optional]
**lastPeriodNumber** | **int** | [readonly] The period number of the most recent PayRun on this schedule | [optional]
**employeeCount** | **int** | [readonly] The number of employees paid with this PaySchedule | [optional]
**isRequired** | **bool** | [readonly] Whether or not this PaySchedule is required for the employer, ie: they have employees to be paid on this PaySchedule | [optional] [readonly]
**isConfigured** | **bool** | [readonly] Whether or not this PaySchedule has been configured and is ready for use | [optional]
**isYearCompleted** | **bool** | [readonly] Returns true if all PayRuns for this PaySchedule in the TaxYear have been completed | [optional]
**yearEndTasks** | **string[]** | [readonly] A list of actions that need to be completed for this PaySchedule before this TaxYear can be finalised | [optional]
**payRuns** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] Details of PayRuns for this PaySchedule | [optional]
**currentPayRun** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**nextPayRun** | [**\SynergiTech\Staffology\Model\PayRun**](PayRun.md) |  | [optional]
**publicCreatedDate** | **\DateTime** |  | [optional]
**employerName** | **string** | Employer name for this PaySchedule | [optional]
**employerUniqueId** | **string** | Employer Unique Id for this PaySchedule | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
