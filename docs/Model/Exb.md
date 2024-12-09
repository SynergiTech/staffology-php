# # Exb

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additionsAmount** | **float** |  | [optional]
**additionsDescription** | **string** |  | [optional]
**deductionsAmount** | **float** |  | [optional]
**deductionsDescription** | **string** |  | [optional]
**employeeCount** | **int** | [readonly] The number of employees with a P11D | [optional]
**totalBenefits** | **float** | [readonly] Total value of benefits, not including any deductions or additions | [optional]
**totalAdjustedBenefits** | **float** | [readonly] Total value of benefits | [optional] [readonly]
**nicsRate** | **float** | [readonly] The Class 1A NICS Rate | [optional]
**nicsPayable** | **float** | [readonly] NICs Payable | [optional] [readonly]
**expensesAndBenefits** | [**\SynergiTech\Staffology\Model\ExpensesAndBenefits**](ExpensesAndBenefits.md) |  | [optional]
**iRmark** | **string** |  | [optional]
**xml** | **string** | This property will soon be removed and should not be used.  There is now a dedicated API endpoint for retrieving the XML for a submission. | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**employerReferences** | [**\SynergiTech\Staffology\Model\EmpRefs**](EmpRefs.md) |  | [optional]
**govTalkSubmission** | [**\SynergiTech\Staffology\Model\GovTalkSubmission**](GovTalkSubmission.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
