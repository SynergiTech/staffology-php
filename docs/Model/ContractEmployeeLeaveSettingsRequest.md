# # ContractEmployeeLeaveSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**useDefaultHolidayType** | **bool** | If true then the value for HolidayType comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAllowanceResetDate** | **bool** | If true then the value for the AllowanceResetDate comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAllowance** | **bool** | If true then the value for the Allowance comes from the Employer record.  This property only appears if the LeaveSettings if a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieu** | **bool** | If true then the value for AccruePaymentInLieu comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieuRate** | **bool** | If true then the value for AccruePaymentInLieuRate comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieuAllGrossPay** | **bool** | [Deprecated] Please use UseUseDefaultHolidayAccrualBasis instead.  This filed will be removed in a later release. | [optional]
**useDefaultHolidayAccrualBasis** | **bool** | If true then the value for HolidayAccrualBasis comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccruePaymentInLieuPayAutomatically** | **bool** | If true then the value for AccruePaymentInLieu comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultAccrueHoursPerDay** | **bool** | If true then the value for AccrueHoursPerDay comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**useDefaultMaximumAccruePeriod** | **bool** | If true then the value for MaximumAccruePeriod comes from the Employer record.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**allowanceResetDate** | **\DateTime** | The date that the holiday allowance resets. Only the day/month part of the value is relevant. | [optional]
**allowance** | **float** | The number of days holiday an employee can take per year if HolidayType is Days.  Otherwise this is readonly and gives you the number of days accrued since the last reset | [optional]
**adjustment** | **float** | Adjustment to number of hours/days/weeks holiday this employee can take per year.  Will reset to 0 when the Allowance resets.  This property only appears if the LeaveSettings is a child of an Employee (not of an Employer) | [optional]
**holidayType** | [**\SynergiTech\Staffology\Model\HolidayType**](HolidayType.md) |  | [optional]
**accrueSetAmount** | **bool** | If true and HolidayType is Accrual_Days then the AccruePaymentInLieuRate will be treated as the set amount to accrue per period worked. | [optional]
**accrueHoursPerDay** | **float** | If HolidayType is Accrual_Days then this value is used to help convert hours worked into days accrued | [optional]
**showAllowanceOnPayslip** | **bool** | If true then the remaining Allowance will be shown on the employees payslip. | [optional]
**showAhpOnPayslip** | **bool** | If true then the AHP balance will be shown on the employees payslip. | [optional]
**accruePaymentInLieuRate** | **float** | The rate at which Payments in Lieu acrrue. Typically this should be 12.07%. | [optional]
**accruePaymentInLieuAllGrossPay** | **bool** | [Deprecated] Please use HolidayAccrualBasis instead.  This filed will be removed in a later release. | [optional]
**accruePaymentInLieuPayAutomatically** | **bool** | Set to true if you want employees to be automatically paid any outstanding holiday pay | [optional]
**occupationalSicknessUniqueId** | **string** |  | [optional]
**accruedPaymentAdjustment** | **float** | Any manual adjustment to the total accrued | [optional]
**accruedHoursAdjustment** | **float** | Any manual adjustment to the total hours accrued | [optional]
**holidayAccrualBasis** | [**\SynergiTech\Staffology\Model\HolidayAccrual**](HolidayAccrual.md) |  | [optional]
**holidayAccrualDefaultRateType** | [**\SynergiTech\Staffology\Model\HolidayAccrualDefaultRateType**](HolidayAccrualDefaultRateType.md) |  | [optional]
**aggregatedServiceDate** | **\DateTime** |  | [optional]
**useAggregatedServiceDate** | **bool** |  | [optional]
**accruePayCodeSetUniqueId** | **string** | Pay code set to use for accruing holiday pay | [optional]
**maximumAccruePeriod** | **float** | The maximum number of hours capable of being accrued in a single period | [optional]
**holidayLeaveAccrualCustomRateType** | [**\SynergiTech\Staffology\Model\HolidayAccrualDefaultRateType**](HolidayAccrualDefaultRateType.md) |  | [optional]
**useDefaultHolidayAccrualDefaultRateType** | **bool** | If true then the value for HolidayAccrualDefaultRateType comes from the Employer record. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
