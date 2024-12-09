# # ChangeSummaryListReportResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | [readonly] The content-type, this would usually be the same as the accept header you provided when you requested the report | [optional]
**content** | **string** | [readonly] This could contain a link to a PDF file, HTML content or other content, depending on the Type value. | [optional]
**model** | [**\SynergiTech\Staffology\Model\ChangeSummary[]**](ChangeSummary.md) | [readonly] If the type is application.json then this will contain a JSON representation of the relevant model | [optional]
**stream** | **string** | byte array | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)