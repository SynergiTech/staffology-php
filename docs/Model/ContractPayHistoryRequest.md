# # ContractPayHistoryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employeeId** | **string** | Employee unique Id | [optional]
**employeeRoleId** | **string** | Employee role unique Id | [optional]
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYearTypes**](TaxYearTypes.md) |  | [optional]
**payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriodTypes**](PayPeriodTypes.md) |  | [optional]
**periodNumber** | **int** | Tax Week or Tax Month number this PayRunEntry relates to | [optional]
**payAmount** | **float** | monetary amount for given period, if not provided then 0 | [optional]
**hours** | **float** | decimal amount of hours worked, if not provided then 0 | [optional]
**isStatutoryPayOnly** | **bool** | optional boolean flag, if the period only had SXP present | [optional]
**paymentDate** | **\DateTime** | The date payment was made for respective period | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
