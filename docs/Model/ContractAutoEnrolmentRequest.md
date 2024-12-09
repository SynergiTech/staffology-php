# # ContractAutoEnrolmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lastAssessment** | [**\SynergiTech\Staffology\Model\ContractAeAssessmentRequest**](ContractAeAssessmentRequest.md) |  | [optional]
**ukWorker** | [**\SynergiTech\Staffology\Model\AeUKWorker**](AeUKWorker.md) |  | [optional]
**daysToDeferAssessment** | **int** | The number of days, if any, to defer assessment of this employee.  You&#39;re allowed to defer assessment of new employees by up to 3 months. | [optional]
**deferByMonthsNotDays** | **bool** | If set to true then the value in DaysToDeferAssessment will be treated as a number of months, not a number of days | [optional]
**exempt** | **bool** |  | [optional]
**aeExclusionCode** | [**\SynergiTech\Staffology\Model\AeExclusionCode**](AeExclusionCode.md) |  | [optional]
**aePostponementLetterSent** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
