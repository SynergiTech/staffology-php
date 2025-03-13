# # ContractEmployerSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowNegativePay** | **bool** |  | [optional]
**manualStatutoryPayLinesEnabled** | **bool** |  | [optional]
**mergeMatchingNominalsEnabled** | **bool** |  | [optional]
**autoCalcBackPayForNewStarters** | **bool** |  | [optional]
**payCodeValidationEnabled** | **bool** |  | [optional]
**calculateEffectiveDateSalaryChanges** | **bool** |  | [optional]
**groupPayLinesEnabled** | **bool** | A flag to indicate whether paylines should be grouped. The grouping is done based on the following PayLine properties: Rate, Multiplier, Code, Description and RoleId | [optional]
**contractedWeeks** | **float** | The amount of weeks an employee works, utilise for employees who aren&#39;t working full time.  This value is the default which can be inherited when creating/updating a WorkingPattern. | [optional]
**fullTimeContractedWeeks** | **float** | The amount of weeks an employee works (Full Time).  This value is the default which can be inherited when creating/updating a WorkingPattern. | [optional]
**fullTimeContractedHours** | **float** | The amount of hours an employee works (Full Time).  This value is the default which can be inherited when creating/updating a WorkingPattern. | [optional]
**disabledPayRunWarningsList** | [**\SynergiTech\Staffology\Model\PayRunEntryWarningType[]**](PayRunEntryWarningType.md) | Pay run warnings that the user has opted to ignore. | [optional]
**journalCsvFormat** | [**\SynergiTech\Staffology\Model\JournalCsvFormat**](JournalCsvFormat.md) |  | [optional]
**preferAsyncPayrunApiCalls** | **bool** | This setting is only available temporarily and is only setable by users with access to beta features enabled.  If set to true the the web applicaiton will use new async API calls for managing payruns | [optional]
**nominalMappingsEnabled** | **bool** | Enables the nominal mappings(Custom Codes,System Codes,Control Codes,Employer Codes) for the employer, if set to true. | [optional]
**sortPayrollNumbersAlphanumerically** | **bool** | Enables the default sorting to be alphanumerically for payroll code, if set to true else numerical sorting will be applied | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
