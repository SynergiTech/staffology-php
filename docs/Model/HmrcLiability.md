# # HmrcLiability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | [readonly] A descriptive name for the Period | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**periodEnding** | **\DateTime** | [readonly] | [optional]
**periodComplete** | **bool** | [readonly] Indicates whether or not all PayRuns for this period have been completed | [optional]
**recoverableAmountsEpsCreated** | **bool** | [readonly] If there are recoverable amount present (ie, SMP) and the Period is complete then this field Indicates   whether or not an EPS has been created up to the final tax month of this period to declare  the recoverable amounts | [optional]
**apprenticeshipLevyEpsCreated** | **bool** | [readonly] If there is an Apprenticeship LEvy amount present and the Period is complete then this field Indicates   whether or not an EPS has been created up to the final tax month of this period to declare  the amount | [optional]
**payRuns** | [**\SynergiTech\Staffology\Model\PayRun[]**](PayRun.md) |  | [optional]
**tax** | **float** | [readonly] Amount due to HMRC for PAYE in period | [optional]
**cisDeductions** | **float** | [readonly] Amount due to HMRC for CIS Deductions made in period | [optional]
**postgradLoanDeductions** | **float** | [readonly] Amount due to HMRC for Postgrad Loan Deductions made in period | [optional]
**studentLoanDeductions** | **float** | [readonly] Amount due to HMRC for Student Loan Deductions made in period | [optional]
**employeeNic** | **float** | [readonly] Amount due to HMRC for Employee NIC Contributions withheld in period | [optional]
**employerNic** | **float** | [readonly] Amount due to HMRC for Employer NIC Contributions due on payments in period | [optional]
**realTimeClass1ANic** | **float** | [readonly] Amount due to HMRC for Employer NIC Contributions due on payments in period | [optional]
**smp** | **float** | [readonly] SMP recovered from payments in period | [optional]
**smpNic** | **float** | [readonly] SMP NIC Compensation for period | [optional]
**spp** | **float** | [readonly] SPP recovered from payments in period | [optional]
**sppNic** | **float** | [readonly] SPP Nic Compensation for period | [optional]
**sap** | **float** | [readonly] SAP recovered from payments in period | [optional]
**sapNic** | **float** | [readonly] SAP Nic Compensation for period | [optional]
**shpp** | **float** | [readonly] ShPP recovered from payments in period | [optional]
**shppNic** | **float** | [readonly] ShPP Nic Compensation for period | [optional]
**spbp** | **float** | [readonly] SPBP recovered from payments in period | [optional]
**spbpNic** | **float** | [readonly] SPBP Nic Compensation for period | [optional]
**eligibleForEmploymentAllowance** | **bool** | [readonly] Indicates whether the Employer settings say the Employer is eligible for Employment Allowance | [optional]
**employmentAllowanceClaim** | **float** | Amount to claim with respect to the Employment Allowance | [optional]
**employmentAllowanceClaimAuto** | **bool** | If set to true, we&#39;ll automatically claim the maximum allowed.  If set to false then you can enter your own value.  If EligibleForEmploymentAllowance is false then the EmploymentAllowanceClaim will   always be overwritten with a zero value regardless of this property | [optional]
**liableForApprenticeshipLevy** | **bool** | [readonly] Indicates whether the Employer settings say the Employer is liable for the Apprenticeship Levy | [optional]
**apprenticeshipLevy** | **float** | Amount due with respect to the Apprenticeship Levy | [optional]
**apprenticeshipLevyAuto** | **bool** | If set to true, we&#39;ll automatically calculate your liability  If set to false then you can enter your own value.  If LiableForApprenticeshipLevy is false then the ApprenticeshipLevy will   always be overwritten with a zero value regardless of this property | [optional]
**liabilityArisingInPeriod** | **float** | [readonly] Total Liability (before any deductions) arising in this Period | [optional] [readonly]
**dueInPreviousPeriods** | **float** | [readonly] Amount due to HMRC in previous periods for this Tax Year | [optional]
**paidInPreviousPeriods** | **float** | [readonly] Amount paid to HMRC in previous periods for this Tax Year | [optional]
**employmentAllowanceClaimInPreviousPeriods** | **float** | [readonly] The amount of Employment Allowance claimed in previous periods for this Tax Year | [optional]
**receivedFromHMRCToRefundTax** | **float** | Any amount received from HMRC to refund Tax in Period | [optional]
**receivedFromHMRCToPayStatutoryPay** | **float** | Any amount received from HMRC to pay Statutory Pay Period | [optional]
**cisDeductionsSuffered** | **float** | CIS Deductions Suffered in Period | [optional]
**adjustment** | **float** | Any manual adjustment for Period | [optional]
**netLiabilityForPeriod** | **float** | [readonly] Net Liability (including any deductions/additions) arising in this Period | [optional] [readonly]
**totalPaid** | **float** | [readonly] The total value of all payments in this period | [optional]
**payments** | [**\SynergiTech\Staffology\Model\HmrcPayment[]**](HmrcPayment.md) |  | [optional]
**fpsList** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) |  | [optional]
**allowLinkedEps** | **bool** | If true this will allow you to submit a combined Employer Payment Summary | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)