# # PayRunPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\SynergiTech\Staffology\Model\PayeeType**](PayeeType.md) |  | [optional]
**payee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**date** | **\DateTime** | [readonly] The date the payment is to be made | [optional]
**method** | [**\SynergiTech\Staffology\Model\PayMethod**](PayMethod.md) |  | [optional]
**amount** | **float** | [readonly] The amount to pay | [optional]
**reference** | **string** | [readonly] The period the payment is for | [optional]
**employerPaymentReference** | **string** | The employer&#39;s payment reference, formatted as per the employer settings | [optional]
**bankDetails** | [**\SynergiTech\Staffology\Model\BankDetails**](BankDetails.md) |  | [optional]
**bacsHash** | **string** | [readonly] if paying by Credit and you&#39;ve enabled BacsHash then this will contain the BacsHash included on the FPS | [optional]
**bacsSubReference** | **string** | [readonly] if paying by Credit and you&#39;ve enabled BacsHash then this will contain the BacsSubReference included on the FPS | [optional]
**isBankDetailValid** | **bool** | [readonly] for checking if bank details are valid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
