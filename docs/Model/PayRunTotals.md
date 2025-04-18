# # PayRunTotals

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**basicPay** | **float** | [readonly] The amount to be paid to this Employee as a result of the PayOptions that have been set | [optional]
**gross** | **float** | [readonly] Gross pay | [optional]
**grossForNi** | **float** | [readonly] The amount of the Gross that is subject to NI | [optional]
**grossForNiNonRti** | **float** | [readonly] The amount of the Gross that is subject to NI but excluded from RTI | [optional]
**grossNotSubjectToEmployersNi** | **float** | [readonly] The amount of the Gross that is not subject to Employers NI.  This is the same as GrossForNI where the employees NI Table has an Er contribution | [optional]
**grossNotSubjectToEmployersNiNonRti** | **float** | [readonly] The amount of the Gross that is not subject to Employers NI.  This is the same as GrossForNI where the employees NI Table has an Er contribution  This is the amount that is excluded from RTI | [optional]
**grossForTax** | **float** | [readonly] The amount of the Gross that is subject to PAYE | [optional]
**employerNi** | **float** | [readonly] | [optional]
**employerNiNonRti** | **float** | [readonly] Employer NI excluded from RTI | [optional]
**employeeNi** | **float** | [readonly] | [optional]
**employeeNiNonRti** | **float** | [readonly] Employee NI excluded from RTI | [optional]
**employerNiOffPayroll** | **float** | [readonly] The amount included in EmployerNi that is in relation to Off-Payroll Workers | [optional]
**realTimeClass1ANi** | **float** | [readonly] | [optional]
**realTimeClass1ANiNonRti** | **float** | [readonly] Real Time Class 1A NI excluded from RTI | [optional]
**tax** | **float** | [readonly] | [optional]
**taxNonRti** | **float** | [readonly] Tax excluded from RTI | [optional]
**netPay** | **float** | [readonly] The Net Pay for this Employee | [optional]
**adjustments** | **float** | [readonly] The value of adjustments made to the Net Pay (Non taxable/NIable additions/deductions) | [optional]
**notionalPay** | **float** | [readonly] The value of adjustments that are of type notional. | [optional]
**additions** | **float** | The value of all additions.  This minus Deductions should equal TakeHomePay | [optional]
**deductions** | **float** | The value of all deductions.  Additions minus This value should equal TakeHomePay | [optional]
**takeHomePay** | **float** | [readonly] The amount this Employee takes home | [optional]
**nonTaxOrNICPmt** | **float** | [readonly] The value of any payments being made to this Employee that aren&#39;t being subjected to PAYE or NI | [optional]
**itemsSubjectToClass1NIC** | **float** | [readonly] Items subject to Class 1 NIC but not taxed under PAYE regulations excluding pension contributions | [optional]
**dednsFromNetPay** | **float** | [readonly] The value of any deductions being made to the Net Pay for this Employee | [optional]
**tcpTcls** | **float** | [readonly] Value of payments marked as Trivial Commutation Payment (A - TCLS) | [optional]
**tcpPp** | **float** | [readonly] Value of payments marked as Trivial Commutation Payment (B - Personal Pension) | [optional]
**tcpOp** | **float** | [readonly] Value of payments marked as Trivial Commutation Payment (C - Occupational Pension) | [optional]
**flexiDdDeath** | **float** | [readonly] Value of payments marked as flexibly accessing death benefit (taxable) | [optional]
**flexiDdDeathNonTax** | **float** | [readonly] Value of payments marked as flexibly accessing death benefit (non taxable) | [optional]
**flexiDdPension** | **float** | [readonly] Value of payments marked as flexibly accessing pension (taxable) | [optional]
**flexiDdPensionNonTax** | **float** | [readonly] Value of payments marked as flexibly accessing pension (non taxable) | [optional]
**flexiDdSeriousIllHealth** | **float** | [readonly] Value of payments marked as flexibly accessing serious ill health lump sum (taxable) | [optional]
**flexiDdSeriousIllHealthNonTax** | **float** | [readonly] Value of payments marked as flexibly accessing serious ill health lump sum (non taxable) | [optional]
**flexiDdStandAloneLumpSum** | **float** | [readonly] Value of payments marked as flexibly accessing stand alone lump sum (taxable) | [optional]
**flexiDdStandAloneLumpSumNonTax** | **float** | [readonly] Value of payments marked as flexibly accessing stand alone lump sum (non taxable) | [optional]
**flexiDdPensionCommencementExcess** | **float** | [readonly] Value of payments marked as flexibly accessing pension commencement excess lump sum (taxable) | [optional]
**flexiDdPensionCommencementExcessNonTax** | **float** | [readonly] Value of payments marked as flexibly accessing pension commencement excess lump sum (non taxable) | [optional]
**smp** | **float** | [readonly] Statutory Maternity Pay | [optional]
**smpNonRti** | **float** | [readonly] Statutory Maternity Pay excluded from RTI | [optional]
**spp** | **float** | [readonly] Statutory Paternity Pay | [optional]
**sppNonRti** | **float** | [readonly] Statutory Paternity Pay excluded from RTI | [optional]
**sap** | **float** | [readonly] Statutory Adoption Pay | [optional]
**sapNonRti** | **float** | [readonly] Statutory Adoption Pay excluded from RTI | [optional]
**shpp** | **float** | [readonly] Statutory Shared Parental Pay | [optional]
**shppNonRti** | **float** | [readonly] Statutory Shared Parental Pay excluded from RTI | [optional]
**spbp** | **float** | [readonly] Statutory Parental Bereavement Pay | [optional]
**spbpNonRti** | **float** | [readonly] Statutory Parental Bereavement Pay excluded from RTI | [optional]
**sncp** | **float** | [readonly] Statutory Neonatal Care Pay | [optional]
**sncpNonRti** | **float** | [readonly] Statutory Neonatal Care Pay excluded from RTI | [optional]
**ssp** | **float** | [readonly] Statutory Sick  Pay | [optional]
**sspNonRti** | **float** | [readonly] Statutory Sick Pay excluded from RTI | [optional]
**studentLoanRecovered** | **float** | [readonly] | [optional]
**studentLoanRecoveredNonRti** | **float** | [readonly] Student Loan recovered excluded from RTI | [optional]
**postgradLoanRecovered** | **float** | [readonly] | [optional]
**postgradLoanRecoveredNonRti** | **float** | [readonly] Postgrad Loan recovered excluded from RTI | [optional]
**pensionableEarnings** | **float** | [readonly] The amount of the Gross that is subject to Pension Deductions.  If the Pension Scheme uses Qualifying Earnings (upper and lower limits) then this value is before those are applied | [optional]
**pensionablePay** | **float** | [readonly] The amount of the Gross that pension calculations are based on after taking into account Upper and Lower Limits for the WorkerGroup. | [optional]
**nonTierablePay** | **float** | [readonly] The value of any pay that shouldn&#39;t count towards determining a pension tier. | [optional]
**employeePensionContribution** | **float** | [readonly] The value of the Pension Contribution being made by this Employee, excluding any Additional Voluntary Contributions | [optional]
**employeePensionContributionAvc** | **float** | [readonly] The value of the Pension Contribution being made by this Employee as an Additional Voluntary Contribution | [optional]
**employerPensionContribution** | **float** | [readonly] The value of the Pension Contribution being made by the Employer for this Employee | [optional]
**empeePenContribnsNotPaid** | **float** | [readonly] Value of employee pension contributions that are not paid under &#39;net pay arrangements&#39;, including any AVC | [optional]
**empeePenContribnsPaid** | **float** | [readonly] Value of employee pension contributions paid under &#39;net pay arrangements&#39;, including any AVC | [optional]
**attachmentOrderDeductions** | **float** | [readonly] Value of deductions made due to AttachmentOrders | [optional]
**cisDeduction** | **float** | [readonly] Value of any CIS Deduction made | [optional]
**cisVat** | **float** | [readonly] Value of any VAT paid to CIS Subcontractor | [optional]
**cisUmbrellaFee** | **float** | [readonly] Value of any pre-tax fee charged to the CIS Subcontractor for processing the payment | [optional]
**cisUmbrellaFeePostTax** | **float** | [readonly] Value of any post-tax fee charged to the CIS Subcontractor for processing the payment | [optional]
**pbik** | **float** | [readonly] Value of any Payrolled Benefits In Kind | [optional]
**mapsMiles** | **int** | [readonly] The number of miles paid for Mileage Allowance Payments | [optional]
**foreignTaxAmount** | **float** | [readonly] The amount paid for Foreign Tax Credits in this period | [optional]
**foreignTaxAmountReclaimed** | **float** | [readonly] The amount of Foreign Tax Credits that you actually reclaimed | [optional]
**umbrellaFee** | **float** | [readonly] Value of any Umbrella fee charged for processing the payment | [optional]
**appLevyDeduction** | **float** | [readonly] Value of any Apprenticeship Levy fee deducted for processing the umbrella payment | [optional]
**paymentAfterLeaving** | **float** | [readonly] Payment After Leaving | [optional]
**taxOnPaymentAfterLeaving** | **float** | [readonly] Tax On Payment After Leaving | [optional]
**nilPaid** | **int** | [readonly] The number of employees with NilPaid on the PayRun | [optional]
**leavers** | **int** | [readonly] The number of Leavers on ths PayRun | [optional]
**starters** | **int** | [readonly] The number of Starters on this PayRun | [optional]
**p45Gross** | **float** | [readonly] The value P45 Gross which is held on the Employees Opening Balance | [optional]
**p45Tax** | **float** | [readonly] The value of P45 Tax which is held on the Employees Opening Balance | [optional]
**totalCost** | **float** |  | [optional] [readonly]
**recoverableAmounts** | [**\SynergiTech\Staffology\Model\RecoverableAmounts**](RecoverableAmounts.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
