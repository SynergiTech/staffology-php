# # ContractJobResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Job public Id. | [optional]
**employerId** | **string** | Employer public Id. | [optional]
**employerName** | **string** | Employer name. | [optional]
**type** | [**\SynergiTech\Staffology\Model\JobType**](JobType.md) |  | [optional]
**name** | **string** | The Job name, e.g. uploaded file for Import, or report display name for Report | [optional]
**outputFormat** | **string** | The Job output format, e.g. json/csv/pdf for Report, or something else for other Job types. | [optional]
**status** | [**\SynergiTech\Staffology\Model\JobStatus**](JobStatus.md) |  | [optional]
**executionStartTime** | **\DateTime** | The Job excution start time. | [optional]
**timeInQueue** | **int** | The time the Job spent in the queue before execution in seconds. | [optional]
**executionTime** | **int** | The time it took the Job to execute in seconds. | [optional]
**result** | [**\SynergiTech\Staffology\Model\ContractJobResultResponse**](ContractJobResultResponse.md) |  | [optional]
**createdDate** | **\DateTime** | Job Created date. | [optional]
**updatedDate** | **\DateTime** | Job Updated date where applicable. | [optional]
**requestedByName** | **string** | The name of the user that requested this job | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
