# # TaxAndNi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**niTable** | **string** | The appropriate NI letter for this Employee |
**secondaryClass1NotPayable** | **bool** | If set to true then no Employer NI will be paid for this Employee | [optional]
**postgradLoan** | **bool** | Set to true if the Employee needs to make Post Graduate Loan repayments | [optional]
**postgraduateLoanStartDate** | **\DateTime** |  | [optional]
**postgraduateLoanEndDate** | **\DateTime** |  | [optional]
**studentLoan** | [**\SynergiTech\Staffology\Model\StudentLoan**](StudentLoan.md) |  | [optional]
**studentLoanStartDate** | **\DateTime** |  | [optional]
**studentLoanEndDate** | **\DateTime** |  | [optional]
**taxCode** | **string** | The Tax Code for this Employee | [optional]
**week1Month1** | **bool** | Determines whether PAYE should be calculated on a Week1/Month1 basis instead of on a cumulative basis.  This is automatically set to false for any existing Employees when you start a new Tax Year. | [optional]
**foreignTaxCredit** | **bool** | If set to True you are enabling the possibility to enter an amount on payslip so you can reduce UK Tax liabilities. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
