# # EmployerTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\SynergiTech\Staffology\Model\EmployerTemplateType**](EmployerTemplateType.md) |  | [optional]
**description** | **string** | Explains the purpose of this template | [optional]
**isCustom** | **bool** | Indicates whether or not this template has been changed from the default content. | [optional] [readonly]
**content** | **string** |  | [optional]
**subject** | **string** |  | [optional]
**defaultContent** | **string** | [readonly] The default content for this template | [optional]
**defaultSubject** | **string** | [readonly] The default subject for this template | [optional]
**hasSubject** | **bool** | [readonly] If false then the Subject property is not relevant for this template type | [optional]
**tokens** | **string[]** | [readonly] A list of tokens that can be used with this template.  For example, if &#39;Employee.FirstName&#39; is in the list then use &#39;{Employee.FirstName}&#39; in the Content or Subject and  it&#39;ll be replaced with the relevant value when the template is parsed. | [optional]
**tokensExpanded** | **bool** |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
