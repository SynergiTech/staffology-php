# # EmployeeRole

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**jobTitle** | **string** | Job Title of the Role | [optional]
**isPrimary** | **bool** | Set to True if this is Primary role of the Employee | [optional]
**reference** | **string** |  | [optional]
**startDate** | **\DateTime** |  | [optional]
**endDate** | **\DateTime** |  | [optional]
**basis** | [**\SynergiTech\Staffology\Model\RoleBasis**](RoleBasis.md) |  | [optional]
**type** | [**\SynergiTech\Staffology\Model\RoleType**](RoleType.md) |  | [optional]
**payOptions** | [**\SynergiTech\Staffology\Model\EmployeeRolePayOptions**](EmployeeRolePayOptions.md) |  | [optional]
**workingPatternId** | **string** | Used when calculating payments for Leave.  If null then the default Working Pattern is used | [optional]
**occupationalMaternityPolicyUniqueId** | **string** | Used for assigning occupational maternity policy | [optional]
**occupationalSicknessPolicyUniqueId** | **string** | Used for assigning occupational sickness policy | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
