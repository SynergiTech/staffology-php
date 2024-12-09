# # ContractHolidaySchemeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Holiday scheme name |
**averageCalculationWeeks** | **int** | The number of weeks that the average holiday pay calculation is to be calculated over (Default 52) | [optional]
**useOnlyPaidWeeks** | **bool** | If to go back further than the stated no of weeks for calculation if there are weeks where the employee has not been paid. (Default- True) | [optional]
**ignoreSxp** | **bool** | Option to ignore weeks where SXP payments have been paid. The calculation will then go back like above until the stated number of weeks are included in the calculation. (Default -True). | [optional]
**calculationDurationUnit** | [**\SynergiTech\Staffology\Model\HolidaySchemeDurationType**](HolidaySchemeDurationType.md) |  | [optional]
**useNiPay** | **bool** | If use National insurance gross taxable pay. (Default - True). | [optional]
**useWorkingPattern** | **bool** | If use the weekly hours or days as per their working pattern as the divisor for the average holiday rate. | [optional]
**payCodeSetForPayId** | **string** | the Paycode set that they want to use for the Values to enable the calculation. | [optional]
**payCodeSetForHoursId** | **string** | the Paycode set that they want to use for the Hours to enable the calculation. | [optional]
**useFallbackRate** | **bool** | Indicates to use employee base hourly rate where the calculated average hourly rate is less | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
