# # EmployeeRoleAnalysisCategoryCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The Code for the AnalysisCategoryCode |
**color** | **string** | [readonly] The Color for the AnalysisCategoryCode | [optional]
**title** | **string** | [readonly] The Title for the AnalysisCategoryCode | [optional]
**isPrimary** | **bool** | Set to true if this is the primary AnalysisCategoryCode for the Employee.  Only one AnalysisCategoryCode can be set as the primary. | [optional]
**weighting** | **float** | If there is more than one AnalysisCategoryCode Membership for the Employee then this determines the weighting to give to this membership.  ie, if he is in two AnalysisCategoryCode you might set the primary as 0.8 and the secondary as 0.2; | [optional]
**analysisCategoryName** | **string** | Analysis Category Name | [optional]
**analysisCategoryPublicId** | **string** | Analysis Category Public Id | [optional]
**employeeRolePublicId** | **string** | Employee Role Public Id | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
