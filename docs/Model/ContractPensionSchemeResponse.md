# # ContractPensionSchemeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**provider** | [**\SynergiTech\Staffology\Model\ContractPensionProviderResponse**](ContractPensionProviderResponse.md) |  | [optional]
**administrator** | [**\SynergiTech\Staffology\Model\ContractPensionAdministratorResponse**](ContractPensionAdministratorResponse.md) |  | [optional]
**pensionRule** | [**\SynergiTech\Staffology\Model\PensionRule**](PensionRule.md) |  | [optional]
**qualifyingScheme** | **bool** | Set to true if this is a Qualifying Scheme for Auto Enrolment | [optional]
**disableAeLetters** | **bool** | Set to true if the provider deals with AutoEnrolment Letters and therefore the system should not generate them | [optional]
**subtractBasicRateTax** | **bool** |  | [optional]
**payMethod** | [**\SynergiTech\Staffology\Model\PayMethod**](PayMethod.md) |  | [optional]
**bankDetails** | [**\SynergiTech\Staffology\Model\ContractBankDetails**](ContractBankDetails.md) |  | [optional]
**useCustomPayCodes** | **bool** | If set to true then rather than using the setting on the PayCode to determine if the pay is pensionable  we&#39;ll instead treat it as pensionable if the Code is included in CustomPayCodes | [optional]
**useCustomPayCodesForTierablePay** | **bool** | If set to true then rather than using the setting on the PayCode to determine if the pay is tierable  we&#39;ll instead treat it as tierable if the Code is included in TierablePayCustomPayCodes | [optional]
**customPayCodes** | **string[]** | If UseCustomPayCodes is set to true then this contains a list of PayCodes.Code  that we&#39;ll treat as being pensionable. | [optional]
**tierablePayCustomPayCodes** | **string[]** | If UseCustomPayCodesForTierablePay is set to true then this contains a list of PayCodes.Code  that we&#39;ll treat as being tierable. | [optional]
**workerGroups** | [**\SynergiTech\Staffology\Model\ContractWorkerGroupResponse[]**](ContractWorkerGroupResponse.md) | A list of WorkerGroups for this Pension. There must always be at least one WorkerGroup | [optional]
**externalDataProviderId** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](ExternalDataProviderId.md) |  | [optional]
**externalDataCompany** | [**\SynergiTech\Staffology\Model\ContractExternalDataCompanyResponse**](ContractExternalDataCompanyResponse.md) |  | [optional]
**displayName** | **string** |  | [optional] [readonly]
**payCodeType** | [**\SynergiTech\Staffology\Model\PensionPayCode**](PensionPayCode.md) |  | [optional]
**tierablePayPayCodeType** | [**\SynergiTech\Staffology\Model\PensionPayCode**](PensionPayCode.md) |  | [optional]
**payCodeSetUniqueId** | **string** |  | [optional]
**tierablePayPayCodeSetUniqueId** | **string** |  | [optional]
**paymentDateRule** | [**\SynergiTech\Staffology\Model\PaymentDateRule**](PaymentDateRule.md) |  | [optional]
**paymentDateDayOfWeek** | [**\SynergiTech\Staffology\Model\DayOfWeek**](DayOfWeek.md) |  | [optional]
**paymentDateDayOfMonth** | **int** |  | [optional]
**reportOptionsLgpsIConnect** | [**\SynergiTech\Staffology\Model\ContractPensionSchemeReportOptionsLgpsIConnectResponse**](ContractPensionSchemeReportOptionsLgpsIConnectResponse.md) |  | [optional]
**reportOptionsLgpsCivicaUpm** | [**\SynergiTech\Staffology\Model\ContractPensionSchemeReportOptionsLgpsCivicaUpmResponse**](ContractPensionSchemeReportOptionsLgpsCivicaUpmResponse.md) |  | [optional]
**deficitValueOrdinal** | **int** | The Ordinal used to identify the PaySchedule which the Deficit will be against | [optional]
**deficitValue** | **float** | The Defict value that will be deducted in a PaySchedule | [optional]
**includeDeficitValue** | **bool** | Set to true if this a Deficit Payment needs to be assigned to a PaySchedule | [optional]
**deficitValuePayPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](PayPeriods.md) |  | [optional]
**nominalCodeMappings** | [**\SynergiTech\Staffology\Model\ContractPensionSchemeNominalCodeMappingResponse[]**](ContractPensionSchemeNominalCodeMappingResponse.md) | The PensionSchemeNominalCodeMappings used to map the PayCodes to a PensionScheme for the journal configuration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
