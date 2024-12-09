# # NationalInsuranceCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | [readonly] NI Table Letter | [optional]
**description** | **string** | [readonly] Description of Employees that would use this NI Letter | [optional]
**eeB** | **float** | [readonly] Earnings at or above LEL up to and including PT (Employee Contribution) | [optional]
**eeC** | **float** | [readonly] Earnings above the PT up to and including UEL (Employee Contribution) | [optional]
**eeD** | **float** | [readonly] Balance of earnings above UEL (Employee Contribution) | [optional]
**eeE** | **float** | [readonly] | [optional]
**eeF** | **float** | [readonly] | [optional]
**erB** | **float** | [readonly] Earnings at or above LEL up to and including PT (Employer Contribution) | [optional]
**erC** | **float** | [readonly]  Earnings above the PT up to and including UEL (Employer Contribution) | [optional]
**erD** | **float** | [readonly] Balance of earnings above UEL (Employer Contribution) | [optional]
**erE** | **float** | [readonly] | [optional]
**erF** | **float** | [readonly] | [optional]
**effectiveFrom** | **\DateTime** | The date when these period values are effective | [optional]
**midYearChanges** | [**\SynergiTech\Staffology\Model\NationalInsuranceCode[]**](NationalInsuranceCode.md) | Any optional changes to the period values that are effective from a specified date in the middle of a tax year | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
