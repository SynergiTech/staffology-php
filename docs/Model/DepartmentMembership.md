# # DepartmentMembership

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The Code for the Department |
**color** | **string** | [readonly] The Color for the Department | [optional]
**title** | **string** | [readonly] The Title for the Department | [optional]
**primary** | **bool** | Set to true if this is the primary Department for the Employee.  Only one department can be set as the primary. | [optional]
**weighting** | **float** | If there is more than one Department Membership for the Employee then this determines the weighting to give to this membership.  ie, if he is in two departments you might set the primary as 0.8 and the secondary as 0.2; | [optional]
**employeeRoleUniqueId** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
