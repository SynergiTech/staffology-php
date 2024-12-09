# # Payslip

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isClosed** | **bool** | [readonly] Indicates if the Payrun has been finalised | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**periodNumber** | **int** |  | [optional]
**period** | **string** | [readonly] A description of the period that Payslip relates to. | [optional]
**from** | **\DateTime** | [readonly] The start date of the period this Payslip covers. | [optional]
**to** | **\DateTime** | [readonly] The end date of the period this Payslip covers. | [optional]
**paymentDate** | **\DateTime** | [readonly] The date the Employee will be paid on | [optional]
**note** | **string** | [readonly] Any note that should appear on the payslip | [optional]
**allowanceNote** | **string** | [readonly] Details of remaining allowance to show on payslip | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**logoUrl** | **string** | [readonly] The Logo to include on the payslip | [optional]
**employer** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**employerAddress** | [**\SynergiTech\Staffology\Model\Address**](Address.md) |  | [optional]
**hmrcDetails** | [**\SynergiTech\Staffology\Model\HmrcDetails**](HmrcDetails.md) |  | [optional]
**payOptions** | [**\SynergiTech\Staffology\Model\PayOptions**](PayOptions.md) |  | [optional]
**employmentDetails** | [**\SynergiTech\Staffology\Model\EmploymentDetails**](EmploymentDetails.md) |  | [optional]
**personalDetails** | [**\SynergiTech\Staffology\Model\PersonalDetails**](PersonalDetails.md) |  | [optional]
**totals** | [**\SynergiTech\Staffology\Model\PayRunTotals**](PayRunTotals.md) |  | [optional]
**totalsYtd** | [**\SynergiTech\Staffology\Model\PayRunTotals**](PayRunTotals.md) |  | [optional]
**lines** | [**\SynergiTech\Staffology\Model\PayslipLine[]**](PayslipLine.md) | [readonly] The lines to display on the Payslip | [optional]
**employerNi** | **float** | [readonly] The Employer NI Contribution amount | [optional]
**employerPensionContribs** | **float** | [readonly] The Employer Pension Contribution Amount | [optional]
**depts** | [**\SynergiTech\Staffology\Model\StringDecimalKeyValuePair[]**](StringDecimalKeyValuePair.md) | The employees Department Membership(s) at the time the payrun was finalised | [optional]
**umbrellaPayment** | [**\SynergiTech\Staffology\Model\UmbrellaPayment**](UmbrellaPayment.md) |  | [optional]
**costCentres** | [**\SynergiTech\Staffology\Model\StringDecimalKeyValuePair[]**](StringDecimalKeyValuePair.md) | The employees Cost Centre Membership(s) only populated when creating journals | [optional]
**employeeRoleAnalysisCategoryCodes** | [**\SynergiTech\Staffology\Model\EmployeeRoleAnalysisCategoryCode[]**](EmployeeRoleAnalysisCategoryCode.md) | The EmployeeRoleAnalysisCategoryCodes only populated when creating journals | [optional]
**employeeCostCentres** | [**\SynergiTech\Staffology\Model\EmployeeCostCentre[]**](EmployeeCostCentre.md) | The Employee Cost Centre Membership(s) by role only populated when creating journals | [optional]
**departmentMemberships** | [**\SynergiTech\Staffology\Model\DepartmentMembership[]**](DepartmentMembership.md) | The Employee Department Membership(s) by role only populated when creating journals | [optional]
**pensionContributionsByRole** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | The Pension Employer contribution by role only populated when creating journals | [optional]
**employerPensionContributions** | [**\SynergiTech\Staffology\Model\EmployerPensionContribution[]**](EmployerPensionContribution.md) | [readonly] The list of Employer Pension Contribution(s) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
