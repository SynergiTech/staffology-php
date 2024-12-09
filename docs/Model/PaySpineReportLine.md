# # PaySpineReportLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**spineName** | **string** | Name of the Pay Spine | [optional]
**fullTimeHours** | **float** | Maximum Full Time Hours on this Pay Spine | [optional]
**fullTimeWeeks** | **float** | Maximum Full Time Weeks on this Pay Spine | [optional]
**salaryFormula** | **string** | Formula used to derive annual salary | [optional]
**hourlyDivisor** | **float** | Hours used to determine Hourly Rate | [optional]
**hourlyDecimals** | **int** | Number of decimal places to calculate Hourly Rates | [optional]
**dailyDivisor** | **float** | Days used to determine Full time Daily Rate | [optional]
**dailyDecimals** | **int** | Number of decimal places to calculate Daily Rates | [optional]
**annualDecimals** | **int** | Number of decimal places to calculate Annual Salaries | [optional]
**annualRoundingRule** | [**\SynergiTech\Staffology\Model\AnnualRoundingRule**](AnnualRoundingRule.md) |  | [optional]
**incrementRule** | [**\SynergiTech\Staffology\Model\IncrementRule**](IncrementRule.md) |  | [optional]
**requiresLondonAllowance** | **bool** | Requires LA column to be completed on the spine | [optional]
**gradeEffectiveDate** | **\DateTime** | Effective date for applicable grades | [optional]
**pointEffectiveDate** | **\DateTime** | Effective date for applicable spinal points | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**payrollCode** | **string** |  | [optional]
**department** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
