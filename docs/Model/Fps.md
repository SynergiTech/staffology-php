# # Fps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lateReason** | [**\SynergiTech\Staffology\Model\FpsLateReason**](FpsLateReason.md) |  | [optional]
**paymentDate** | **\DateTime** |  | [optional]
**overridePaymentDate** | **\DateTime** | If a value if provided here then it will be used in place of the actual PaymentDate on the FPS.  The value must fall in to the same Tax Period as the PaymentDate | [optional]
**employeeCount** | **int** |  | [optional]
**isCorrection** | **bool** |  | [optional]
**supersededCount** | **int** | The number of payments on this FPS that have been superseded by later versions | [optional]
**fullPaymentSubmission** | [**\SynergiTech\Staffology\Model\FullPaymentSubmission**](FullPaymentSubmission.md) |  | [optional]
**versions** | [**\SynergiTech\Staffology\Model\FpsPriorVersion[]**](FpsPriorVersion.md) | If any of the payments on this FPS appear on another FPS then  then there will be an entry here for each of them.  If there is an entry where the FpsId matches this FPS then that means the FpsEmployee on this Fps  is itself a prior version (ie, it&#39;s been superseded) | [optional]
**validationWarnings** | [**\SynergiTech\Staffology\Model\RtiValidationWarning[]**](RtiValidationWarning.md) |  | [optional] [readonly]
**iRmark** | **string** |  | [optional]
**xml** | **string** | This property will soon be removed and should not be used.  There is now a dedicated API endpoint for retrieving the XML for a submission. | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**employerReferences** | [**\SynergiTech\Staffology\Model\EmpRefs**](EmpRefs.md) |  | [optional]
**govTalkSubmission** | [**\SynergiTech\Staffology\Model\GovTalkSubmission**](GovTalkSubmission.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
