# # DpsSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | If enabled, we&#39;ll automatically retrieve DPS notices from HMRC for you | [optional]
**retrieveFrom** | **\DateTime** | The date from which notices should be retrieved | [optional]
**autoApply** | **bool** | If enabled, we&#39;ll automatically apply DPSNotices before starting a payrun that covers the EffectiveDate | [optional]
**lastChecked** | **\DateTime** | [readonly] The time we last checked for notices | [optional]
**error** | **string** | [readonly] If we received an error from HMRC when checking for notices, it&#39;ll be displayed here | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
