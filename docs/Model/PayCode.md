# # PayCode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**code** | **string** |  |
**defaultValue** | **float** | If a non-zero value is provided then when this code is selected in our UI the value will be automatically filled. | [optional]
**isDeduction** | **bool** | If set to true then a PayLine using this code will be treated as a deduction as opposed to an addition. | [optional]
**isNiable** | **bool** | Determines whether or not the value of PayLines using this code should be taken into consideration when calculating National Insurance Contributions. | [optional]
**isTaxable** | **bool** | Determines whether or not the value of PayLines using this code should be taken into consideration when calculating the PAYE liability. | [optional]
**isPensionable** | **bool** | Determines whether or not the value of PayLines using this code should be taken into consideration when calculating the total pensionable pay. | [optional]
**isAttachable** | **bool** | Determines whether or not the value of PayLines using this code should be taken into consideration when calculating the attachable pay for AttachmentOrders. | [optional]
**isRealTimeClass1aNiable** | **bool** | Determines whether or not the value of PayLines using this code are subject to real time Class 1A NIC. | [optional]
**isNotContributingToHolidayPay** | **bool** | If true then any payments made using this code will not contribute towards holiday pay calculations. | [optional]
**isQualifyingEarningsForAe** | **bool** | If true then any payments made using this code will be used as the basis for calculating QualifyingEarnings for AutoEnrolment assessments.  If it is set to null then when it&#39;s next retrieved it&#39;ll have the same value as PensionablePay | [optional]
**isNotTierable** | **bool** | If true then any payments made using this code will not be included when calculating the tier an employee should be on for a Tiered Pension. | [optional]
**isTcpTcls** | **bool** | If true then any payments made using this code will be reported as  a Trivial Commutation Payment (A - TCLS) | [optional]
**isTcpPp** | **bool** | If true then any payments made using this code will be reported as  a Trivial Commutation Payment (B - Personal Pension) | [optional]
**isTcpOp** | **bool** | If true then any payments made using this code will be reported as  a Trivial Commutation Payment (C - Occupational Pension) | [optional]
**flexibleDrawdown** | [**\SynergiTech\Staffology\Model\FlexibleDrawdown**](FlexibleDrawdown.md) |  | [optional]
**isAutoAdjust** | **bool** | Can be used to inform a User to what default value to set for PayLine.autoAdjustForLeave for new lines created. | [optional]
**calculationType** | [**\SynergiTech\Staffology\Model\PayCodeCalculationType**](PayCodeCalculationType.md) |  | [optional]
**multiplierType** | [**\SynergiTech\Staffology\Model\PayCodeMultiplierType**](PayCodeMultiplierType.md) |  | [optional]
**dailyRateMultiplier** | **float** | If the MultiplierType is MultipleOfDailyRate then this sets the multiple to be used, ie 1.5 | [optional]
**hourlyRateMultiplier** | **float** | If the MultiplierType is MultipleOfHourlyRate then this sets the multiple to be used, ie 1.5 | [optional]
**isSystemCode** | **bool** | [readonly] System Codes cannot be deleted or edited | [optional]
**isControlCode** | **bool** | [readonly] Control Codes cannot be deleted or edited nor can PayLines be assigned to them. | [optional]
**isNotional** | **bool** | Determines whether the transaction involves non-monetary benefits for payroll processing, potentially subject to tax and National Insurance. | [optional]
**isStandAloneLumpSum** | **bool** | If true then any payments made using this code will be reported as  a Lump Sums (A - SALS) | [optional]
**isPensionExcessLumpSum** | **bool** | If true then any payments made using this code will be reported as  a Lump Sums (B - PCELS) | [optional]
**payee** | **string** | The Id of the Payee, if any, that deductions are to be paid to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
