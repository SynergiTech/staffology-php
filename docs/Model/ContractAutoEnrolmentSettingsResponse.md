# # ContractAutoEnrolmentSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**stagingDate** | **\DateTime** |  | [optional]
**cyclicalReenrolmentDate** | **\DateTime** |  | [optional]
**previousCyclicalReenrolmentDate** | **\DateTime** |  | [optional]
**defaultPension** | [**\SynergiTech\Staffology\Model\ContractPensionSelectionResponse**](ContractPensionSelectionResponse.md) |  | [optional]
**pensionSameAsDefault** | **bool** |  | [optional]
**daysToDeferAssessment** | **int** | The number of days, if any, to defer assessment of new employees.  You&#39;re allowed to defer assessment of new employees by up to 3 months.  This is the default value used when you create a new employee. It can be changed on a per-employee basis. | [optional]
**deferByMonthsNotDays** | **bool** | If set to true then the value in DaysToDeferAssessment will be treated as a number of months, not a number of days | [optional]
**deferEnrolmentBy** | **int** | The number of days )or weeks, or months), if any, to defer enrolment of employees that are Eligible Jobholders.  For example, if this is set to 30 days then if an employee meets the criteria for enrolment then they&#39;ll only be enrolled if they still meet the criteria 30 days later | [optional]
**deferEnrolmentByPeriodType** | [**\SynergiTech\Staffology\Model\DeferalPeriodType**](DeferalPeriodType.md) |  | [optional]
**includeNonPensionedEmployeesInSubmission** | **bool** | Whether or not to include details of non-pensioned employees in your submissions to this provider | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
