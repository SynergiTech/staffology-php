# # ContractLeaveImportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payrollCode** | **string** | Payroll Code | [optional]
**type** | [**\SynergiTech\Staffology\Model\LeaveType**](LeaveType.md) |  | [optional]
**pay** | [**\SynergiTech\Staffology\Model\LeavePayType**](LeavePayType.md) |  | [optional]
**openEndedAbsence** | **bool** | Open Ended Absence | [optional]
**from** | **\DateTime** | The first day of Leave. | [optional]
**to** | **\DateTime** | The last day of Leave. | [optional]
**historicLeaveRequiresProcessing** | **bool** | Only used during the creation of historical SSP.  When creating historical SSP, this will determine whether to pay that leave in the next PayRun. | [optional]
**averageWeeklyEarnings** | **float** | The employees average weekly earnings. | [optional]
**automaticAWECalculation** | **bool** | Automatic Average Weekly Earnings. | [optional]
**offsetPay** | **bool** | Top-up pay to usual amongst (offsetting) | [optional]
**calculationType** | [**\SynergiTech\Staffology\Model\LeaveCalculationType**](LeaveCalculationType.md) |  | [optional]
**percentOfPay** | **float** | Only provided when the leave type is &#39;Sick&#39; and the payment type is &#39;Custom&#39;. | [optional]
**strikeHoursToDeduct** | **float** | Only provided when the leave type is &#39;StrikeAction&#39; and the calculation type is &#39;SpecifyHours&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
