# # Leave

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**providerId** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](ExternalDataProviderId.md) |  | [optional]
**externalId** | **string** | If the Leave comes from an ExternalDataProvider, then this is its Id in the ExternalDataProvider | [optional]
**type** | [**\SynergiTech\Staffology\Model\LeaveType**](LeaveType.md) |  | [optional]
**pay** | [**\SynergiTech\Staffology\Model\LeavePayType**](LeavePayType.md) |  | [optional]
**payFrequency** | [**\SynergiTech\Staffology\Model\StatPayFrequency**](StatPayFrequency.md) |  | [optional]
**payRunExistsWithStatPay** | **bool** |  | [optional]
**from** | **\DateTime** | The first day of Leave.  If it&#39;s a half day PM then set the time portion to 12:00:00, otherwise leave it blank or set it to 00:00:00 | [optional]
**to** | **\DateTime** | The last day of Leave.  If it&#39;s a half day AM then set the time portion to 11:59:59, otherwise set it to 23:59:59 | [optional]
**notes** | **string** | A free-form text field to record any comments | [optional]
**averageWeeklyEarnings** | **float** | The employees average weekly earnings. Only relevant for Statutory Pay  It&#39;s advised that you don&#39;t try to calculate this yourself. | [optional]
**automaticAWECalculation** | **bool** | If set to True then we&#39;ll automatically calculate the AverageWeeklyEarnings.   Set it to false if you want to manually provide a figure that overrides our calculations | [optional]
**babyDate** | **\DateTime** | Only required for Parental Leave with Statutory Pay  If Type is Maternity or Paternity then this is the date the baby is due.  For Adoption this is the Matching Date.  For Neonatal Care is the Baby Due / Matching / Placement Date | [optional]
**secondaryBabyDate** | **\DateTime** | Only used for Parental Leave with Statutory Pay  If Type is Maternity, Paternity, SharedParental (Birth) then this is the the Baby Born Date.  For Adoption or SharedParental (Adoption) this is the Expected Placement Date. | [optional]
**tertiaryBabyDate** | **\DateTime** | Only used for Parental Leave with Statutory Pay  If Type is Adoption this is the Placement Date.  If Type is Neonatal Care is the Date Baby Entered Neonatal Care | [optional]
**overridePaymentDescription** | **bool** | If Pay is StatutoryPay and you want to override our description that goes with the payment then set this to true | [optional]
**overridenPaymentDescription** | **string** | If OverridePaymentDescription is true and Pay is set to StatutoryPay then we&#39;ll use this as the description for the payment amount. | [optional]
**workingDays** | **float** | [readonly] The number of working days covered by this leave.  This is calculated based on the employees Working Pattern. | [optional]
**workingDaysOverride** | **float** | If a value is provided here then this will be used in place of the calculated WorkingDays value | [optional]
**totalDays** | **float** | [readonly] The number of days covered by this leave, regardless of whether or not they&#39;re working days.  This is calculated based on the employees Working Pattern. | [optional]
**totalDaysOverride** | **float** | If a value is provided here then this will be used in place of the calculated TotalDays value | [optional]
**useAssumedPensionablePay** | **bool** | If this Leave has Statutory Pay then if this is set to True  we will use the value set in AssumedPensionablePay to work out the employer pension contributions | [optional]
**assumedPensionablePays** | [**\SynergiTech\Staffology\Model\LeaveAssumedPensionablePay[]**](LeaveAssumedPensionablePay.md) | if UseAssumedPensionablePay is True, then this is the value used to calculate the employer pension contributions | [optional]
**offsetPay** | **bool** | If this Leave has Statutory Pay  and this is set to True and the employe eis paid a fixed amoutn per period  with Leave Adjustments set to automatic, then we&#39;ll reduce their pay for the period by the statutory amount  so the employee still gets paid the full amount. | [optional]
**sspPayFromDayOne** | **bool** | If this is Sick Leave with Statutory Pay then setting this to true  will force SSP to be paid from day one rather than the usual rule   of the first Working Day after 3 Qualifying Days | [optional]
**linkedPiw** | [**\SynergiTech\Staffology\Model\LinkedPiw**](LinkedPiw.md) |  | [optional]
**kitSplitDays** | **\DateTime[]** | If the LeaveType supports KIT/SPLIT days then use this property to store the list of dates | [optional]
**historicSspRequiresProcessing** | **bool** | Only used during the creation of historical SSP.  When creating historical SSP, this will determine whether to pay that leave in the next PayRun. | [optional]
**historicSxpRequiresProcessing** | **bool** | Used during to determine whether to back pay before current payrun | [optional]
**openingPay** | **float** | Opening pay which has already been paid to the employee in another system | [optional]
**useOpeningPay** | **bool** | Use the OpeningPay which has already been paid in another system | [optional]
**historicOspRequiresProcessing** | **bool** | Only used during the creation of sickness Occupational Policy.  When creating historical SOP, this will determine whether to pay that leave in the next PayRun. | [optional]
**historicOmpRequiresProcessing** | **bool** | Only used during the creation and update of occupational maternity leaves.  When creating or updating historical occupational leaves, this will determine whether to pay the historic payments or correction in the next PayRun. | [optional]
**historicSmpRequiresProcessing** | **bool** | Only used during the creation and update of statutory maternity leaves.  When creating or updating historical statutory maternity leaves, this will determine whether to pay the historic payments or correction in the next PayRun. | [optional]
**occupationalMaternityPolicyUniqueId** | **string** | Occupational Maternity Policy Id when leave type is Maternity and payment type is occupational policy | [optional]
**openingOmpPay** | **float** | Opening occupational pay which has already been paid to the employee | [optional]
**payRunExistsWithOccMaternityPay** | **bool** | Indicates whether there is occupational maternity payment associated with a leave in the current pay run. | [optional]
**calculationType** | [**\SynergiTech\Staffology\Model\LeaveCalculationType**](LeaveCalculationType.md) |  | [optional]
**strikeHoursToDeduct** | **float** | The number of hours to be deducted at the employee&#39;s contractual rate  This property is valid for strike deducted hours | [optional]
**customPayments** | [**\SynergiTech\Staffology\Model\LeaveCustomPayment[]**](LeaveCustomPayment.md) | If this is Sick Leave with Custom Payment, then this stores the RoleId, PercentOfPay and PaySSPInAddition for each  role assigned to an employee that did not end before the start date of the absence. | [optional]
**customProRataRules** | [**\SynergiTech\Staffology\Model\LeaveCustomProRataRule[]**](LeaveCustomProRataRule.md) | If this is a Leave that supports changing the pro rata at leave level,  This stores the RoleId and ProRataMethod for each  role assigned to an employee that did not end before the start date of the absence. | [optional]
**lastProcessedFrom** | **\DateTime** | [readonly] Last Processed From Date  If this Leave has already been processed,  this will be the original leave from date | [optional]
**isReversed** | **bool** | If the reversal of this Leave has already been processed,  this will be set to true | [optional]
**paymentTier** | [**\SynergiTech\Staffology\Model\NeonatalCarePaymentTier**](NeonatalCarePaymentTier.md) |  | [optional]
**documentCount** | **int** | [readonly] The number of attachments associated with this model | [optional]
**documents** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] The attachments associated with this model | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
