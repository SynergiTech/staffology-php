# # AutoEnrolment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | [**\SynergiTech\Staffology\Model\AeEmployeeState**](AeEmployeeState.md) |  | [optional]
**stateDate** | **\DateTime** | [readonly] | [optional]
**ukWorker** | [**\SynergiTech\Staffology\Model\AeUKWorker**](AeUKWorker.md) |  | [optional]
**daysToDeferAssessment** | **int** | The number of days, if any, to defer assessment of this employee.  You&#39;re allowed to defer assessment of new employees by up to 3 months. | [optional]
**postponementDate** | **\DateTime** | [readonly] If a value is present, then employee wont be enrolled on an AE Pension until after this date.  This is automatically set to a date if the employee is deemed to be an EligibleJobHolder, but the employer has set a Postponement period and this value is currently null  This is automatically set to null if it already has a value and the employee is deemed NOT to be an EligibleJobHolder - ie, they previously qualified but now do not. | [optional]
**deferByMonthsNotDays** | **bool** | If set to true then the value in DaysToDeferAssessment will be treated as a number of months, not a number of days | [optional]
**exempt** | **bool** |  | [optional]
**aeExclusionCode** | [**\SynergiTech\Staffology\Model\AeExclusionCode**](AeExclusionCode.md) |  | [optional]
**aePostponementLetterSent** | **bool** |  | [optional]
**lastAssessment** | [**\SynergiTech\Staffology\Model\AeAssessment**](AeAssessment.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
