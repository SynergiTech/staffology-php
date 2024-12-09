# # LeaveSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**useDefaultHolidayType** | **bool** | If true then the value for HolidayType comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAllowanceResetDate** | **bool** | If true then the value for the AllowanceResetDate comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAllowance** | **bool** | If true then the value for the Allowance comes from the Employer record.  This property only appears if the LeaveSettings if a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieu** | **bool** | If true then the value for AccruePaymentInLieu comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieuRate** | **bool** | If true then the value for AccruePaymentInLieuRate comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultHolidayAccrualBasis** | **bool** | If true then the value for HolidayAccrualBasis comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieuPayAutomatically** | **bool** | If true then the value for AccruePaymentInLieu comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccrueHoursPerDay** | **bool** | If true then the value for AccrueHoursPerDay comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultMaximumAccruePeriod** | **bool** | If true then the value for MaximumAccruePeriod comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**allowanceResetDate** | **\DateTime** | The date that the holiday allowance resets. Only the day/month part of the value is relevant. | [optional]
**allowance** | **float** | The number of days holiday an employee can take per year if HolidayType is Days.  Otherwise this is readonly and gives you the number of days accrued since the last reset | [optional]
**adjustment** | **float** | Adjustment to number of hours/days/weeks holiday this employee can take per year.  Will reset to 0 when the Allowance resets.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**allowanceUsed** | **float** | [readonly] The number of days used from the allowance since last reset | [optional]
**allowanceUsedPreviousPeriod** | **float** | [readonly] The number of days used in the 12 months prior to the last reset | [optional]
**allowanceRemaining** | **float** | [readonly] The number of days remaining of the allowance until next reset | [optional] [readonly]
**holidayType** | [**\SynergiTech\Staffology\Model\HolidayType**](HolidayType.md) |  | [optional]
**accrueSetAmount** | **bool** | If true and HolidayType is Accrual_Days then the AccruePaymentInLieuRate will be treated as the set amount to accrue per period worked. | [optional]
**accrueHoursPerDay** | **float** | If HolidayType is Accrual_Days then this value is used to help convert hours worked into days accrued | [optional]
**showAllowanceOnPayslip** | **bool** | If true then the remaining Allowance will be shown on the employees payslip. | [optional]
**showAhpOnPayslip** | **bool** | If true then the AHP balance will be shown on the employees payslip. | [optional]
**accruePaymentInLieuRate** | **float** | The rate at which Payments in Lieu acrrue. Typically this should be 12.07%. | [optional]
**accruePaymentInLieuAllGrossPay** | **bool** | Set to true if you want accrued holiday payments to be calculated on the total gross pay for the employee or just on the single regular pay element | [optional]
**accruePaymentInLieuPayAutomatically** | **bool** | Set to true if you want employees to be automatically paid any outstanding holiday pay | [optional]
**accruePayCodeSetUniqueId** | **string** |  | [optional]
**maximumAccruePeriod** | **float** | The maximum number of hours capable of being accrued in a single period | [optional]
**holidayAccrualBasis** | [**\SynergiTech\Staffology\Model\HolidayAccrual**](HolidayAccrual.md) |  | [optional]
**holidayAccrualDefaultRateType** | [**\SynergiTech\Staffology\Model\HolidayAccrualDefaultRateType**](HolidayAccrualDefaultRateType.md) |  | [optional]
**occupationalSicknessUniqueId** | **string** |  | [optional]
**accruedPaymentLiability** | **float** | [readonly] The total accrued payments for this employee over the lifetime of their employment so far | [optional]
**accruedPaymentAdjustment** | **float** | Any manual adjustment to the total accrued | [optional]
**accruedPaymentPaid** | **float** | [readonly] The Total amount paid to this employee in lieu of holidays | [optional]
**accruedPaymentBalance** | **float** | [readonly] The balance of what is owed to this employee in lieu of holidays | [optional] [readonly]
**accruedHoursAmount** | **float** | [readonly] The total accrued hours for this employee over the lifetime of their employment so far | [optional]
**accruedHoursAdjustment** | **float** | Any manual adjustment to the total hours accrued | [optional]
**accruedHoursPaid** | **float** | [readonly] The Total amount of hours paid to this employee in lieu of holidays | [optional]
**accruedHoursAmountLastPeriod** | **float** | [readonly] The total accrued hours for this employee in the last pay period | [optional]
**paidHoursAmountLastPeriod** | **float** | [readonly] The number of hours paid against the pay code | [optional]
**accruedHoursBalance** | **float** | [readonly] The balance of hours owed to this employee in lieu of holidays | [optional] [readonly]
**aggregatedServiceDate** | **\DateTime** |  | [optional]
**useAggregatedServiceDate** | **bool** |  | [optional]
**useDefaultHolidayAccrualDefaultRateType** | **bool** | If true then the value for HolidayAccrualDefaultRateType comes from the Employer record. | [optional]
**unauthorisedLeaveProRataRule** | [**\SynergiTech\Staffology\Model\LeaveProRataRule**](LeaveProRataRule.md) |  | [optional]
**holidayLeaveProRataRule** | [**\SynergiTech\Staffology\Model\LeaveProRataRule**](LeaveProRataRule.md) |  | [optional]
**sickLeaveProRataRule** | [**\SynergiTech\Staffology\Model\LeaveProRataRule**](LeaveProRataRule.md) |  | [optional]
**parentalLeaveProRataRule** | [**\SynergiTech\Staffology\Model\LeaveProRataRule**](LeaveProRataRule.md) |  | [optional]
**bereavementLeaveProRataRule** | [**\SynergiTech\Staffology\Model\LeaveProRataRule**](LeaveProRataRule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)