# # ContractEmployeeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique id of the object | [optional]
**personalDetails** | [**\SynergiTech\Staffology\Model\ContractPersonalDetailsResponse**](ContractPersonalDetailsResponse.md) |  | [optional]
**employmentDetails** | [**\SynergiTech\Staffology\Model\ContractEmploymentDetailsResponse**](ContractEmploymentDetailsResponse.md) |  | [optional]
**autoEnrolment** | [**\SynergiTech\Staffology\Model\ContractAutoEnrolmentResponse**](ContractAutoEnrolmentResponse.md) |  | [optional]
**leaveSettings** | [**\SynergiTech\Staffology\Model\ContractEmployeeLeaveSettingsResponse**](ContractEmployeeLeaveSettingsResponse.md) |  | [optional]
**rightToWork** | [**\SynergiTech\Staffology\Model\ContractRightToWork**](ContractRightToWork.md) |  | [optional]
**bankDetails** | [**\SynergiTech\Staffology\Model\ContractBankDetails**](ContractBankDetails.md) |  | [optional]
**payOptions** | [**\SynergiTech\Staffology\Model\ContractPayOptionsResponse**](ContractPayOptionsResponse.md) |  | [optional]
**tags** | **string[]** |  | [optional]
**status** | [**\SynergiTech\Staffology\Model\EmployeeStatus**](EmployeeStatus.md) |  | [optional]
**aeNotEnroledWarning** | **bool** |  | [optional]
**sourceSystemId** | **string** |  | [optional]
**aggregatedServiceDate** | **\DateTime** |  | [optional]
**holidaySchemeUniqueId** | **string** |  | [optional]
**evcId** | **string** | If set then this will be used as the EmployeeIDFromProduct sent to EVC in place of the standard EmployeeId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
