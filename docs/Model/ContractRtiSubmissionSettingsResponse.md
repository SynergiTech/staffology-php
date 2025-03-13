# # ContractRtiSubmissionSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**senderType** | [**\SynergiTech\Staffology\Model\RtiSenderType**](RtiSenderType.md) |  | [optional]
**senderId** | **string** | The SenderId used to submit RTI documents to HMRC | [optional]
**password** | **string** | The Password used to submit RTI documents to HMRC | [optional]
**excludeNilPaid** | **bool** | Whether or not to include Employees paid a zero amount on your FPS | [optional]
**includeHashCrossRef** | **bool** | [readonly] Whether or not the Bacs Cross Ref field is included on your FPS submissions  This is automatically set to true if you use a bank payments CSV format that supports it  or set to false if not | [optional]
**autoSubmitFps** | **bool** | If set to true, we&#39;ll automatically send your FPS to HMRC whenever you finalise a PayRun | [optional]
**testInLive** | **bool** | Used for testing the RTI gateway. If set to true then the Document Type name will have \&quot;-TIL\&quot; appended to it | [optional]
**useTestGateway** | **bool** | If set to true then your RTI documents will be sent to HMRCs test services instead of the live service | [optional]
**overrideTimestampValue** | **string** | If a value is provided then it will be used as the timestamp on the RTI submission. This would normally only be used for testing purposes. | [optional]
**contact** | [**\SynergiTech\Staffology\Model\ContractRtiContactResponse**](ContractRtiContactResponse.md) |  | [optional]
**agent** | [**\SynergiTech\Staffology\Model\ContractRtiAgentResponse**](ContractRtiAgentResponse.md) |  | [optional]
**allowLinkedEps** | **bool** | If set to true this will allow you to submit a combined Employer Payment Summary | [optional]
**shouldCompressFps** | **bool** | If set to true this will compress the FPS before submitting to HMRC | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
