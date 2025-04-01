# # AutomationSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enableAutoPilot** | **bool** | IF enabled then payruns will be automatically finalised on the payment date and the next payrun will be started | [optional]
**autoPilotTime** | [**\SynergiTech\Staffology\Model\AutoPilotFinaliseTime**](AutoPilotFinaliseTime.md) |  | [optional]
**autoPilotOffset** | **int** | How many days before the payment date a payrun should be finalised.  Set it to 0 if you want the payrun to be automatically finalised on the payment date itself | [optional]
**enableAutoOpen** | **bool** | IF enabled then whenever you close a payrun, the next one will be started. Automatically set to true if EnableAutoPilot is true | [optional]
**autoSubmitFps** | **bool** | If set to true, we&#39;ll automatically send your FPS to HMRC whenever you finalise a PayRun.  This property will always have the same value as the property with the same name on the RtiSubmissionSettings model. | [optional]
**autoSubmitPayments** | **bool** | If set to true, we&#39;ll automatically submit payments whenever you finalise a PayRun.  The employer must be connected to an ExternalDataProvider supporting Type of &#39;Payments&#39;. | [optional]
**autoSubmitJournal** | **bool** | If set to true, we&#39;ll automatically submit the payroll journal whenever you finalise a PayRun.  The employer must be connected to an ExternalDataProvider supporting Type of &#39;Accounting&#39;. | [optional]
**autoSubmitPaymentsEmployee** | **bool** | Used in conjunction with AutoSubmitPayments. | [optional]
**autoSubmitPayslips** | **bool** | If set to true, we&#39;ll automatically submit payslips whenever you finalise a PayRun.  The employer must be connected to an ExternalDataProvider supporting Type of &#39;EmployeePortal&#39;. | [optional]
**autoSubmitP45s** | **bool** | If set to true, we&#39;ll automatically submit P45s whenever you finalise a PayRun.  The employer must be connected to an ExternalDataProvider supporting Type of &#39;EmployeePortal&#39;. | [optional]
**autoSubmitPaymentsHmrc** | **bool** | Used in conjunction with AutoSubmitPayments. | [optional]
**autoSubmitPaymentsDeductions** | **bool** | Used in conjunction with AutoSubmitPayments. | [optional]
**autoSubmitPaymentsAeos** | **bool** | Used in conjunction with AutoSubmitPayments. | [optional]
**autoSubmitPaymentsPensions** | **bool** | Used in conjunction with AutoSubmitPayments. | [optional]
**payslipReleaseType** | [**\SynergiTech\Staffology\Model\PayslipReleaseType**](PayslipReleaseType.md) |  | [optional]
**autoSubmitPayslipsDaysBeforePayday** | [**\SynergiTech\Staffology\Model\DaysBeforePayday**](DaysBeforePayday.md) |  | [optional]
**autoSubmitPayslipsPaymentDateRule** | [**\SynergiTech\Staffology\Model\PayslipReleasePaymentDateRule**](PayslipReleasePaymentDateRule.md) |  | [optional]
**autoSubmitPayslipsPayslipReleaseTime** | [**\SynergiTech\Staffology\Model\PayslipReleaseTime**](PayslipReleaseTime.md) |  | [optional]
**employeesWithoutEmailAddress** | **int** | [readonly] A count of how many employees or subcontractors for this employer do not have email addresses | [optional]
**employeesWithEmailAddressButNotAutoSending** | **int** | [readonly] A count of how many employees or subcontractors for this employer do have email addresses but don&#39;t have the option enabled to auto-email payslips | [optional]
**subcontractorsNotAutoSendingStatement** | **int** | [readonly] A count of how many subscontractors for this employer do don&#39;t have the option enabled to auto-email statement | [optional]
**codingNoticesAutomaticallyApplied** | **bool** | [readonly] An indicator of whether or not this employer is automatically applying DpsNotices | [optional]
**payrunEmails** | [**\SynergiTech\Staffology\Model\PayrunEmail[]**](PayrunEmail.md) | Automated emails that will be sent when a PayRun is finalised | [optional]
**autoSubmitPensionLetters** | **bool** | If set to true, we&#39;ll automatically submit Pension Letters whenever you finalise a PayRun.  The employer must be connected to an ExternalDataProvider supporting Type of &#39;EmployeePortal&#39;. | [optional]
**autoSubmitEps** | **bool** | If set to true, we&#39;ll automatically send your EPS to HMRC whenever you finalise a PayRun. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
