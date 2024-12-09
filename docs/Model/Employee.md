# # Employee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**holidaySchemeUniqueId** | **string** |  | [optional]
**aggregatedServiceDate** | **\DateTime** |  | [optional]
**leaveHolidayAccrualDefaultRateType** | [**\SynergiTech\Staffology\Model\HolidayAccrualDefaultRateType**](HolidayAccrualDefaultRateType.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]
**personalDetails** | [**\SynergiTech\Staffology\Model\PersonalDetails**](PersonalDetails.md) |  | [optional]
**employmentDetails** | [**\SynergiTech\Staffology\Model\EmploymentDetails**](EmploymentDetails.md) |  | [optional]
**autoEnrolment** | [**\SynergiTech\Staffology\Model\AutoEnrolment**](AutoEnrolment.md) |  | [optional]
**leaveSettings** | [**\SynergiTech\Staffology\Model\LeaveSettings**](LeaveSettings.md) |  | [optional]
**rightToWork** | [**\SynergiTech\Staffology\Model\RightToWork**](RightToWork.md) |  | [optional]
**bankDetails** | [**\SynergiTech\Staffology\Model\BankDetails**](BankDetails.md) |  | [optional]
**tags** | **string[]** |  | [optional]
**payOptions** | [**\SynergiTech\Staffology\Model\PayOptions**](PayOptions.md) |  | [optional]
**status** | [**\SynergiTech\Staffology\Model\EmployeeStatus**](EmployeeStatus.md) |  | [optional]
**aeNotEnroledWarning** | **bool** | [readonly] If true then the employee should be enrolled in an Auto Enrolment Qualifying pension but isn&#39;t | [optional] [readonly]
**sourceSystemId** | **string** | [readonly] Can only be given a value when the employee is created. It can then never be changed.  Used by external systems so they can store an immutable reference | [optional]
**evcId** | **string** | If set then this will be used as the EmployeeIDFromProduct sent to EVC in place of the standard EmployeeId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
