# # AeAssessment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assessmentDate** | **\DateTime** |  | [optional]
**employeeState** | [**\SynergiTech\Staffology\Model\AeEmployeeState**](AeEmployeeState.md) |  | [optional]
**age** | **int** | [readonly] The age of the Employee at the time of the assessment | [optional]
**ukWorker** | [**\SynergiTech\Staffology\Model\AeUKWorker**](AeUKWorker.md) |  | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**ordinal** | **int** | [readonly] The PaySchedule ordinal for the Employee at the time of the assessment | [optional]
**earningsInPeriod** | **float** | [readonly] | [optional]
**qualifyingEarningsInPeriod** | **float** | [readonly] | [optional]
**aeExclusionCode** | [**\SynergiTech\Staffology\Model\AeExclusionCode**](AeExclusionCode.md) |  | [optional]
**status** | [**\SynergiTech\Staffology\Model\AeStatus**](AeStatus.md) |  | [optional]
**reason** | **string** | [readonly] The reason for determining the Status given. | [optional]
**action** | [**\SynergiTech\Staffology\Model\AeAssessmentAction**](AeAssessmentAction.md) |  | [optional]
**startReportingType** | [**\SynergiTech\Staffology\Model\PensionReportingType**](PensionReportingType.md) |  | [optional]
**endReportingType** | [**\SynergiTech\Staffology\Model\PensionReportingType**](PensionReportingType.md) |  | [optional]
**startPayRunEntryId** | **int** |  | [optional]
**endPayRunEntryId** | **int** |  | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
