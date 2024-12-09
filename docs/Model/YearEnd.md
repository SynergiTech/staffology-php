# # YearEnd

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endingYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**startingYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**createEpsForFinalSubmission** | **bool** | [readonly] Whether or not the system will automatically create an EPS to tell HMRC the year has ended. | [optional]
**createEpsForEmploymentAllowance** | **bool** | [readonly] Whether or not the system will automatically create an EPS to tell HMRC you qualify for Employment Allowance. | [optional]
**createExb** | **bool** | [readonly] Whether or not the system will automatically create an EXB to inform HMRC of Expenses and Benefits | [optional]
**setEmploymentAllowance** | **float** | [readonly] If the Employment Allowance needs to be changed, this indicates the new value | [optional]
**taxCodeChanges** | [**\SynergiTech\Staffology\Model\YearEndTaxCodeChange[]**](YearEndTaxCodeChange.md) | [readonly] Details of changes that wil be made to Tax Codes | [optional]
**removeWeek1Month1** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] Employees that will have the Week1Month1 flag removed from their tax code | [optional]
**emailP60** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] Employees who will be automatically emailed P60s | [optional]
**pushP60** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId[]**](ExternalDataProviderId.md) | [readonly] ExternalDataProviderIds to which P60s can be pushed | [optional]
**emailCisStatement** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] Subcontractors who will be automatically sent an annual CIS Statement | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
