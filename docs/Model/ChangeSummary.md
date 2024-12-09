# # ChangeSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**auditId** | **string** |  | [optional]
**previousAuditId** | **string** | This Id is used to delete the previous audit entry once the change summary entry is created  for the modifications between the current and the previous audit entry. | [optional]
**date** | **\DateTime** |  | [optional]
**name** | **string** |  | [optional] [readonly]
**actionPerformed** | [**\SynergiTech\Staffology\Model\AuditEventAction**](AuditEventAction.md) |  | [optional]
**entityType** | [**\SynergiTech\Staffology\Model\EntityType**](EntityType.md) |  | [optional]
**entityId** | **string** | Id of the underlying entity | [optional]
**employeeUniqueId** | **string** | Unique id of the employee this operation belongs to | [optional]
**employerUniqueId** | **string** | Unique id of the employer this operation belongs to | [optional]
**actionPerformedBy** | **string** |  | [optional]
**actionPerformedOn** | **string** |  | [optional]
**employeeFirstName** | **string** |  | [optional]
**employeeLastName** | **string** |  | [optional]
**uniqueId** | **string** | Unique id of the owner this request belongs to | [optional]
**parentEventType** | **string** |  | [optional]
**displayName** | **string** |  | [optional]
**payRunPeriod** | **int** |  | [optional]
**changeType** | **string** |  | [optional]
**modifications** | [**\SynergiTech\Staffology\Model\FieldModification[]**](FieldModification.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
