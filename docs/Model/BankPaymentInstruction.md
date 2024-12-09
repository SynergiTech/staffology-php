# # BankPaymentInstruction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originator** | [**\SynergiTech\Staffology\Model\BankDetails**](BankDetails.md) |  | [optional]
**bankPayments** | [**\SynergiTech\Staffology\Model\PayRunPayment[]**](PayRunPayment.md) |  | [optional]
**status** | [**\SynergiTech\Staffology\Model\BackgroundTaskStatus**](BackgroundTaskStatus.md) |  | [optional]
**statusMessage** | **string** | [readonly] A message to elaborate on the Status | [optional]
**link** | **string** | [readonly] If available, a link to the payments in an ExternalDataProvider | [optional]
**serviceUserNumber** | **string** | Service user number to be used while sending payment instruction | [optional]
**bureauNumber** | **string** | Bureau number to be used if available while sending payment instruction | [optional]
**allowsMultiDate** | **bool** | Allows multiple payment dates in the file | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
