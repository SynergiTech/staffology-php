# # ContractWorkingPatternRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**title** | **string** |  |
**mon** | **float** |  | [optional]
**tue** | **float** |  | [optional]
**wed** | **float** |  | [optional]
**thu** | **float** |  | [optional]
**fri** | **float** |  | [optional]
**sat** | **float** |  | [optional]
**sun** | **float** |  | [optional]
**monIsWorkingDay** | **bool** |  | [optional]
**tueIsWorkingDay** | **bool** |  | [optional]
**wedIsWorkingDay** | **bool** |  | [optional]
**thuIsWorkingDay** | **bool** |  | [optional]
**friIsWorkingDay** | **bool** |  | [optional]
**satIsWorkingDay** | **bool** |  | [optional]
**sunIsWorkingDay** | **bool** |  | [optional]
**totalHours** | **float** |  | [optional]
**contractedWeeks** | **float** | The amount of weeks an employee works, utilise for employees who aren&#39;t working full time.  If Null then the default is used. | [optional]
**fullTimeContractedWeeks** | **float** | The amount of weeks an employee works (Full Time). If Null then the default is used. | [optional]
**fullTimeContractedHours** | **float** | The amount of hours an employee works (Full Time). If Null then the default is used. | [optional]
**bankHolidays** | [**\SynergiTech\Staffology\Model\BankHolidayCollection**](BankHolidayCollection.md) |  | [optional]
**proRataRule** | [**\SynergiTech\Staffology\Model\ProRataRule**](ProRataRule.md) |  | [optional]
**workingPatternHoursType** | [**\SynergiTech\Staffology\Model\WorkingPatternHoursType**](WorkingPatternHoursType.md) |  | [optional]
**isDefault** | **bool** |  | [optional]
**workingPatternType** | [**\SynergiTech\Staffology\Model\WorkingPatternType**](WorkingPatternType.md) |  | [optional]
**effectiveFrom** | **\DateTime** |  | [optional]
**shiftWorkingPatternDays** | [**\SynergiTech\Staffology\Model\ContractShiftWorkingPatternDayRequest[]**](ContractShiftWorkingPatternDayRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
