# # EmployeeCostCentre

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The Code for the Cost Centre |
**color** | **string** | [readonly] The Color for the Cost Centre | [optional]
**title** | **string** | [readonly] The Title for the Cost Centre | [optional]
**isPrimary** | **bool** | Set to true if this is the primary Cost Centre for the Employee.  Only one Cost Centre can be set as the primary. | [optional]
**weighting** | **float** | If there is more than one Cost Centre Membership for the Employee then this determines the weighting to give to this membership.  ie, if he is in two Cost Centre you might set the primary as 0.8 and the secondary as 0.2; | [optional]
**employeeRoleUniqueId** | **string** |  | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
