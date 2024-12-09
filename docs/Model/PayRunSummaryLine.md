# # PayRunSummaryLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nominalCode** | **string** | [readonly] If you&#39;ve set up NominalCodeMapping then the relevant Nominal code for the PayCode will be shown here. | [optional]
**departmentCode** | **string** | [readonly] If the journal is split by department then the relevant department code is shown here. | [optional]
**nominalName** | **string** | [readonly] As above | [optional]
**description** | **string** | [readonly] A description of what this line summarises. | [optional]
**qty** | **float** | [readonly] If the PayCode is a Multiplier code then this will contain the number of days/hours | [optional]
**value** | **float** | [readonly] The total value for this line. | [optional]
**payCode** | [**\SynergiTech\Staffology\Model\PayCode**](PayCode.md) |  | [optional]
**costCentreCode** | **string** | [readonly] If the journal is split by cost centre then the relevant cost centre code is shown here. | [optional]
**analysisCategories** | [**\SynergiTech\Staffology\Model\AnalysisCategory[]**](AnalysisCategory.md) | [readonly] If the journal is split by analysis categories | [optional]
**analysisCategoryCodes** | [**\SynergiTech\Staffology\Model\AnalysisCategoryCode[]**](AnalysisCategoryCode.md) | [readonly] If the journal is split by analysis categories then the relevant analysis categories code is shown here. | [optional]
**employeeUniqueId** | **string** | [readonly] The EmployeeId this summary line relates to. | [optional]
**journalNarrative** | **string** | [readonly] Gets the journal narrative for the pension, if defined. | [optional]
**pensionId** | **string** | [readonly] The PensionId of the pension associated with this summary line, only present for pension summary lines. | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Employee**](Employee.md) |  | [optional]
**unMappedNominalCode** | **string** | [readonly] Unmapped Nominal Code is the Nominal Code without the Nominal Mapping. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
