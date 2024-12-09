# # PayrunEmail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isActive** | **bool** | If false then this email won&#39;t be sent | [optional]
**name** | **string** | Only used for reference, not included in the email |
**templateType** | [**\SynergiTech\Staffology\Model\EmployerTemplateType**](EmployerTemplateType.md) |  | [optional]
**recipientAddress** | **string** | The address to which the email should be sent |
**pdfPassword** | **string** | If a value is provided, then all PDFs attached to the email will be encrypted using this password | [optional]
**attachPayslips** | **bool** | If set to true then Payslips will be attached to the email | [optional]
**payslipsUnemailed** | **bool** | If AttachPayslips is true and this property is also true then only payslips that haven&#39;t already been sent directly to employees will be attached. | [optional]
**payslipsSingleFile** | **bool** | If AttachPayslips is true and this property is also true then the payslips will be attached as a single file rather than as separate PDFs, | [optional]
**attachPaymentSummary** | **bool** | If set to True then the PaymentSummary report will be attached to the Email | [optional]
**attachP32** | **bool** | If set to True then the P32 report will be attached to the email | [optional]
**attachP30** | **bool** | If set to True then the P30 report will be attached to the email | [optional]
**attachGrossToNet** | **bool** | If set to True then the GrossToNet report will be attached to the email | [optional]
**attachPensionContributions** | **bool** | If set to True then the Pensions Contributions report will be attached to the email | [optional]
**attachCostAnalysis** | **bool** | If set to True then the Cost Analysis report will be attached to the email | [optional]
**attachCostOfEmployment** | **bool** | If set to True then the Cost of Employment report will be attached to the email | [optional]
**attachFullSummaryOfPay** | **bool** | If set to True then the Full Summary Of Payment report will be attached to the email | [optional]
**attachBankPayments** | **bool** | If set to True then the Bank Payments CSV file will be attached to the email | [optional]
**customSubject** | **string** | If TemplateType is null then you can provide a subject line here to be used for the email | [optional]
**customBody** | **string** | If TemplateType is null then you can provide the body text here to be used for the email | [optional]
**customBodyIsHtml** | **bool** | If the CustomBody is in HTML format, set this to true. | [optional]
**childId** | **string** | This is nothing but the UniqueId of the model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
