# # ContractPaySpineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Pay Spine identifier | [optional]
**name** | **string** | Name of the Pay Spine | [optional]
**fullTimeHours** | **float** | Maximum Full Time Hours on this Pay Spine | [optional]
**fullTimeWeeks** | **float** | Maximum Full Time Weeks on this Pay Spine | [optional]
**salaryFormula** | **string** | Formula used to derive annual salary  &lt;remarks&gt;  The salary formula consists of the following elements and Round functions:  - PointValue (The value of an individual Spinal Point)  - HoursWorked (The hours an employee is contracted to work for in their role)  - FTHours (The full time hours specified for an employee in their role)  - WeeksWorked (The contracted weeks an employee works in their role)  - FTWeeks (The full weeks specified for an employee in their role)  Round functions:   - ROUND(Value,decimal places): Round the value to specific decimal places. The maximum value is between 0 and 15.  - ROUNDUP(Value)  - ROUNDDOWN(Value)   - TRUNCATE(Value)  &lt;/remarks&gt;&lt;example&gt;  For example: \&quot;PointValue * ROUND(HoursWorked * WeeksWorked * (7/365),3) / FTHours\&quot;   &lt;/example&gt; | [optional]
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
**useSpineHolidayRules** | **bool** | Flag to include holiday entitlements in Payspine (Default false) | [optional]
**holidayEntitlements** | [**\SynergiTech\Staffology\Model\ContractHolidayEntitlementResponse[]**](ContractHolidayEntitlementResponse.md) | PaySpine Years Service Entitlements | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
