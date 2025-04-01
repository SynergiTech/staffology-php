# # PayrollAnalysisCostBreakdownReportLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payrollCode** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**department** | [**\SynergiTech\Staffology\Model\StringStringDecimalValueTuple**](StringStringDecimalValueTuple.md) |  | [optional]
**costCentre** | [**\SynergiTech\Staffology\Model\StringStringDecimalValueTuple**](StringStringDecimalValueTuple.md) |  | [optional]
**employeeRoleAnalysisCategory** | [**array<string,\SynergiTech\Staffology\Model\StringDecimalKeyValuePair>**](StringDecimalKeyValuePair.md) |  | [optional]
**lines** | [**\SynergiTech\Staffology\Model\PayrollAnalysisCostBreakdownReportValue[]**](PayrollAnalysisCostBreakdownReportValue.md) |  | [optional]
**totalPay** | **float** |  | [optional]
**niablePay** | **float** |  | [optional]
**pensionPay** | **float** |  | [optional]
**niPercent** | **float** |  | [optional]
**ersNi** | **float** |  | [optional]
**pensionPercent** | **float** |  | [optional]
**ersPension** | **float** |  | [optional]
**taxablePay** | **float** |  | [optional]
**taxablePercent** | **float** |  | [optional]
**employeeNi** | **float** |  | [optional]
**taxPaid** | **float** |  | [optional]
**studentLoan** | **float** |  | [optional]
**employeePension** | **float** | The value of the Pension Contribution(PENSION) being made by the Employee | [optional]
**employeePensionContributionSalarySacrifice** | **float** | The value of the Pension Contribution Salary Sacrifice(PENSIONSS) being made by the Employee | [optional]
**employeePensionContributionReliefAtSource** | **float** | The value of the Pension Contribution Relief At Source(PENSIONRAS) being made by the Employee | [optional]
**pensionSummaryCostBreakdowns** | [**\SynergiTech\Staffology\Model\PensionSummaryCostBreakdown[]**](PensionSummaryCostBreakdown.md) | List of pension summaries, each representing a breakdown of various pension components | [optional]
**roleId** | **string** | RoleId of that particular line entry | [optional]
**roleWeightage** | **float** | Weightage value of the given employee role | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
