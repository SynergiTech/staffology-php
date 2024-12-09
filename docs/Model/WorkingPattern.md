# # WorkingPattern

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**mon** | **float** |  | [optional]
**tue** | **float** |  | [optional]
**wed** | **float** |  | [optional]
**thu** | **float** |  | [optional]
**fri** | **float** |  | [optional]
**sat** | **float** |  | [optional]
**sun** | **float** |  | [optional]
**contractedWeeks** | **float** | The amount of weeks an employee works, utilise for employees who aren&#39;t working full time.  If Null then the default is used. | [optional]
**fullTimeContractedWeeks** | **float** | The amount of weeks an employee works (Full Time). If Null then the default is used. | [optional]
**fullTimeContractedHours** | **float** | The amount of hours an employee works (Full Time). If Null then the default is used. | [optional]
**bankHolidays** | [**\SynergiTech\Staffology\Model\BankHolidayCollection**](BankHolidayCollection.md) |  | [optional]
**proRataRule** | [**\SynergiTech\Staffology\Model\ProRataRule**](ProRataRule.md) |  | [optional]
**bankHolidayDates** | **\DateTime[]** | [readonly] The dates that are classed as Bank Holidays for this WorkingPattern | [optional]
**workingPatternHoursType** | [**\SynergiTech\Staffology\Model\WorkingPatternHoursType**](WorkingPatternHoursType.md) |  | [optional]
**isDefault** | **bool** |  | [optional]
**effectiveFrom** | **\DateTime** | The date when the assignment of the Working Pattern becomes effective.  Required for a Shift WorkingPattern to determine when it starts | [optional]
**workingPatternType** | [**\SynergiTech\Staffology\Model\WorkingPatternType**](WorkingPatternType.md) |  | [optional]
**shiftWorkingPatternDays** | [**\SynergiTech\Staffology\Model\ShiftWorkingPatternDay[]**](ShiftWorkingPatternDay.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
