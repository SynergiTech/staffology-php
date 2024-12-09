# # TaxYearConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taxYear** | **int** | [readonly] The TaxYear for which this configuration applies | [optional]
**isPreview** | **bool** | [readonly] Indicates that this is a preview of the given years configuration and it shouldn&#39;t yet be used for live processing of payroll data. | [optional]
**defaultTaxCode** | **string** | [readonly] | [optional]
**class1ANicsRate** | [**\SynergiTech\Staffology\Model\DecimalTaxYearConfigPrimitiveValue**](DecimalTaxYearConfigPrimitiveValue.md) |  | [optional]
**lowerEarningsLimit** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**upperEarningsLimit** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**primaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**secondaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**upperAccrualPoint** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**upperSecondaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**apprenticeUpperSecondaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**freeportsUpperSecondaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**veteransUpperSecondaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**directorsProratePrimaryThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**plan1StudentLoanThreshold** | **float** | [readonly] | [optional]
**plan1StudentLoanRate** | **float** | [readonly] | [optional]
**plan2StudentLoanThreshold** | **float** | [readonly] | [optional]
**plan2StudentLoanRate** | **float** | [readonly] | [optional]
**plan4StudentLoanThreshold** | **float** | [readonly] | [optional]
**plan4StudentLoanRate** | **float** | [readonly] | [optional]
**postGradLoanThreshold** | **float** | [readonly] | [optional]
**postGradLoanRate** | **float** | [readonly] | [optional]
**deaProtectedEarnings** | **float** | [readonly] | [optional]
**pensionLowerThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**pensionAutomaticEnrolment** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**pensionUpperThreshold** | [**\SynergiTech\Staffology\Model\PeriodValue**](PeriodValue.md) |  | [optional]
**pensionAeEmployerContribution** | **float** | [readonly] | [optional]
**pensionAeEmployeeContribution** | **float** | [readonly] | [optional]
**employmentAllowancePreviousYear** | **float** | [readonly] | [optional]
**employmentAllowance** | **float** | [readonly] | [optional]
**fixedCodes** | [**\SynergiTech\Staffology\Model\FixedCode[]**](FixedCode.md) | [readonly] | [optional]
**scottishFixedCodes** | [**\SynergiTech\Staffology\Model\FixedCode[]**](FixedCode.md) | [readonly] | [optional]
**welshFixedCodes** | [**\SynergiTech\Staffology\Model\FixedCode[]**](FixedCode.md) | [readonly] | [optional]
**niRates** | [**\SynergiTech\Staffology\Model\NationalInsuranceCode[]**](NationalInsuranceCode.md) | [readonly] | [optional]
**directorsNiRates** | [**\SynergiTech\Staffology\Model\NationalInsuranceCode[]**](NationalInsuranceCode.md) | [readonly] | [optional]
**brackets** | [**\SynergiTech\Staffology\Model\TaxBracket[]**](TaxBracket.md) | [readonly] | [optional]
**scottishBrackets** | [**\SynergiTech\Staffology\Model\TaxBracket[]**](TaxBracket.md) | [readonly] | [optional]
**welshBrackets** | [**\SynergiTech\Staffology\Model\TaxBracket[]**](TaxBracket.md) | [readonly] | [optional]
**taxCodeChanges** | [**\SynergiTech\Staffology\Model\TaxCodeChange[]**](TaxCodeChange.md) | [readonly] | [optional]
**minimumWage** | [**\SynergiTech\Staffology\Model\NationalMinimumWage[]**](NationalMinimumWage.md) | [readonly] | [optional]
**statutoryPay** | [**\SynergiTech\Staffology\Model\StatutoryPay**](StatutoryPay.md) |  | [optional]
**loanCharge** | [**\SynergiTech\Staffology\Model\LoanCharge**](LoanCharge.md) |  | [optional]
**carCharge** | [**\SynergiTech\Staffology\Model\CarCharge**](CarCharge.md) |  | [optional]
**govTalk** | [**\SynergiTech\Staffology\Model\GovTalk**](GovTalk.md) |  | [optional]
**mileageAllowancePaymentsRates** | [**\SynergiTech\Staffology\Model\MileageAllowancePaymentsRate[]**](MileageAllowancePaymentsRate.md) | [readonly] | [optional]
**tieredPensions** | [**\SynergiTech\Staffology\Model\TieredPension[]**](TieredPension.md) | [readonly] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)