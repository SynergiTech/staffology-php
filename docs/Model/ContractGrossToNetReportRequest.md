# # ContractGrossToNetReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**fromPeriod** | **int** | The start Tax Month of report data. | [optional]
**toPeriod** | **int** | The end Tax Month of report data. | [optional]
**reportFormat** | [**\SynergiTech\Staffology\Model\ReportFormat**](ReportFormat.md) |  | [optional]
**sortBy** | [**\SynergiTech\Staffology\Model\ReportSortBy**](ReportSortBy.md) |  | [optional]
**sortDescending** | **bool** | Defines whether to sort the data in descending order. Defaults to false. | [optional]
**ordinal** | **int** | Indicates whether this uses first, second, third (etc.) PaySchedule for this PayPeriod. | [optional]
**forCis** | **bool** | If true then CIS Subcontractors are reported on. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
