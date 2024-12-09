# # PayslipCustomisation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom** | **bool** | Whether or not you are customising the Payslip.  This should always be true if you are providing any other values. | [optional]
**includeLogo** | **bool** | Whether or not to include the employer logo on the payslip. | [optional]
**customCssOption** | [**\SynergiTech\Staffology\Model\ReportCustomCssOption**](ReportCustomCssOption.md) |  | [optional]
**customCss** | **string** |  | [optional]
**removeYtd** | **bool** | Whether or not to remove the YTD column | [optional]
**includeEmployerAddress** | **bool** | Whether or not to include the employer address | [optional]
**useUmbrellaFormat** | **bool** | If true then the format the payslip will include details of the Umbrella Payment as well as employer costs | [optional]
**filename** | **string** |  | [optional]
**includeDepartment** | **bool** | Whether or not to include the primary department of the employee on the payslip | [optional]
**includeHealthAndSocialCareMessage** | **bool** | Whether or not to include health and social car message | [optional]
**includeBenefits** | **bool** | Whether or not to include any payrolled benefits | [optional]
**paperSize** | [**\SynergiTech\Staffology\Model\PdfPaperSize**](PdfPaperSize.md) |  | [optional]
**orientation** | [**\SynergiTech\Staffology\Model\PdfPaperOrientation**](PdfPaperOrientation.md) |  | [optional]
**margins** | [**\SynergiTech\Staffology\Model\PdfPaperMargins**](PdfPaperMargins.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
