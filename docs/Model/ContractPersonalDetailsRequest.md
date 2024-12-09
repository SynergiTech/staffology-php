# # ContractPersonalDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\SynergiTech\Staffology\Model\ContractAddress**](ContractAddress.md) |  | [optional]
**maritalStatus** | [**\SynergiTech\Staffology\Model\MaritalStatus**](MaritalStatus.md) |  |
**title** | **string** |  | [optional]
**firstName** | **string** |  | [optional]
**middleName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**alternativeEmail** | **string** |  | [optional]
**previousSurName** | **string** |  | [optional]
**email** | **string** |  | [optional]
**emailPayslip** | **bool** | If set to true then the employees Payslip will be sent by email when a PayRun is finalised. | [optional]
**pdfPassword** | **string** | Set the password to be used on PDFs. If blank then we&#39;ll create a password based on the PdfPasswordType property. | [optional]
**pdfPasswordType** | [**\SynergiTech\Staffology\Model\PdfPasswordType**](PdfPasswordType.md) |  | [optional]
**emailStatement** | **bool** | Only applicable to CIS Subcontractors. If set to true then we will automatically email a CIS Statement when a CIS300 is accepted. | [optional]
**photoUrl** | **string** |  | [optional]
**telephone** | **string** |  | [optional]
**photoSasUrl** | **string** |  | [optional]
**mobile** | **string** |  | [optional]
**dateOfBirth** | **\DateTime** |  |
**gender** | [**\SynergiTech\Staffology\Model\Gender**](Gender.md) |  |
**niNumber** | **string** |  | [optional]
**passportNumber** | **string** |  | [optional]
**partnerDetails** | [**\SynergiTech\Staffology\Model\ContractPartnerDetails**](ContractPartnerDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
