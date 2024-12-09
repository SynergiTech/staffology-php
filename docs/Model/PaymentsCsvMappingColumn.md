# # PaymentsCsvMappingColumn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**code** | **string** |  | [optional]
**isReferenceOnly** | **bool** | If set to true then no PayCode is mapped and this column is just for on-screen refernece only | [optional]
**colIndex** | **int** |  | [optional]
**isMultiplier** | **bool** |  | [optional]
**isNetToGross** | **bool** |  | [optional]
**rateColIndex** | **int** | If the mapping IsMultiplier, then this optionally specifies another column from which to get the value | [optional]
**shouldSerializeRateColIndex** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
