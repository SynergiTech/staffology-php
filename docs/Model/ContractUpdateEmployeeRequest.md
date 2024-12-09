# # ContractUpdateEmployeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id of the object | [optional]
**personalDetails** | [**\SynergiTech\Staffology\Model\ContractPersonalDetailsRequest**](ContractPersonalDetailsRequest.md) |  | [optional]
**employmentDetails** | [**\SynergiTech\Staffology\Model\ContractEmploymentDetailsRequest**](ContractEmploymentDetailsRequest.md) |  | [optional]
**autoEnrolment** | [**\SynergiTech\Staffology\Model\ContractAutoEnrolmentRequest**](ContractAutoEnrolmentRequest.md) |  | [optional]
**leaveSettings** | [**\SynergiTech\Staffology\Model\ContractLeaveSettingsRequest**](ContractLeaveSettingsRequest.md) |  | [optional]
**rightToWork** | [**\SynergiTech\Staffology\Model\ContractRightToWork**](ContractRightToWork.md) |  | [optional]
**bankDetails** | [**\SynergiTech\Staffology\Model\ContractBankDetails**](ContractBankDetails.md) |  | [optional]
**payOptions** | [**\SynergiTech\Staffology\Model\ContractPayOptionsRequest**](ContractPayOptionsRequest.md) |  | [optional]
**tags** | **string[]** |  | [optional]
**holidaySchemeUniqueId** | **string** |  | [optional]
**aggregatedServiceDate** | **\DateTime** |  | [optional]
**evcId** | **string** | If set then this will be used as the EmployeeIDFromProduct sent to EVC in place of the standard EmployeeId. | [optional]
**sourceSystemId** | **string** | Used by external systems so they can store an immutable reference.  Once this property is set it cannot be changed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
