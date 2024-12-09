# # ContractEmployeeRoleWorkingPatternResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workingPatternId** | **string** | The unique id of the working pattern. | [optional]
**effectiveFrom** | **\DateTime** | The date when the assignment of the Working Pattern becomes effective. | [optional]
**effectiveTo** | **\DateTime** | [readonly] The date when the assignment of the Working Pattern effectiveness ends. Populated automatically based on working pattern effectiveFrom dates. | [optional]
**totalHours** | **float** | [readonly] The amount of hours per working pattern. | [optional]
**contractedWeeks** | **float** | [readonly] The amount of weeks an employee works, utilise for employees who aren&#39;t working full time.  If Null then the default is used. | [optional]
**title** | **string** | The title of the working pattern. | [optional]
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**metadata** | **mixed** |  | [optional]
**url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
