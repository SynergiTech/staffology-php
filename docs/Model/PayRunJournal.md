# # PayRunJournal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lines** | [**\SynergiTech\Staffology\Model\PayRunSummaryLine[]**](PayRunSummaryLine.md) |  | [optional]
**date** | **\DateTime** | [readonly] The PaymentDate from the PayRun | [optional]
**title** | **string** | [readonly] The status of the task for posting this journal to an ExternalDataProvider | [optional]
**status** | [**\SynergiTech\Staffology\Model\BackgroundTaskStatus**](BackgroundTaskStatus.md) |  | [optional]
**statusMessage** | **string** | [readonly] A message to elaborate on the Status | [optional]
**link** | **string** | [readonly] If available, a link to the journal in the ExternalDataProvider | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**ordinal** | **int** | [readonly] | [optional]
**period** | **int** | [readonly] | [optional]
**mergeMatchingNominals** | **bool** | [readonly] | [optional]
**csvFormat** | [**\SynergiTech\Staffology\Model\JournalCsvFormat**](JournalCsvFormat.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
