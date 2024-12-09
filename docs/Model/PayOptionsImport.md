# # PayOptionsImport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employerIdentifier** | **string** | Optional. But if one entry has it then all must.  Allows you to import to multiple employers by specifying the Employers AlternativeIdentifier | [optional]
**payrollCode** | **string** | The payroll code of the employee to update | [optional]
**payAmount** | **float** | The amount the Employee is regularly paid each period | [optional]
**basis** | [**\SynergiTech\Staffology\Model\PayBasis**](PayBasis.md) |  | [optional]
**payCode** | **string** | If you want to override the PayCode used for the Basic Pay then set the code here, otherwise leave this blank and the default will be used. | [optional]
**roleReference** | **string** | This is the unique reference of the Role that the employee is assigned to. | [optional]
**payAmountMultiplier** | **float** | This property is irrelevant if the basis is Monthly.  But if the basis is Daily or Hourly then this property sets how many days/hours the employee should be paid for in the period. | [optional]
**note** | **string** | Any note that you&#39;d like to appear on the payslip | [optional]
**tags** | **string[]** |  | [optional]
**isNetToGross** | **bool** |  | [optional]
**department** | **string** | Any Department that you&#39;d like to appear on the payslip | [optional]
**costCentre** | **string** | Any CostCentre that you&#39;d like to appear on the payslip | [optional]
**analysisCategoryCodes** | [**\SynergiTech\Staffology\Model\AnalysisCategoryCodes[]**](AnalysisCategoryCodes.md) | List of Analysis Category Codes associated with this item on the payslip. | [optional]
**lines** | [**\SynergiTech\Staffology\Model\PayLine[]**](PayLine.md) |  | [optional]
**effectiveFrom** | **\DateTime** | EffectiveFrom date for imported pay lines | [optional]
**effectiveTo** | **\DateTime** | EffectiveTo date for imported pay lines | [optional]
**isAutomaticBackPay** | **bool** | IsAutomaticBackPay for imported pay lines | [optional]
**ignoreInitialBackPay** | **bool** | IgnoreInitialBackPay for imported pay lines | [optional]
**contributesToBasicPay** | **bool** | ContributesToBasicPay for imported pay lines | [optional]
**autoAdjustForLeave** | **bool** | AutoAdjustForLeave for imported pay lines | [optional]
**paySpine** | **string** | PaySpine for imported pay lines | [optional]
**payGrade** | **string** | PayGrade for imported pay lines | [optional]
**spinePoint** | **string** | SpinePoint for imported pay lines | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
