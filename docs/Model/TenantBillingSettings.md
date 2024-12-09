# # TenantBillingSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**discount** | **float** |  | [optional]
**monthlyMinimum** | **float** |  | [optional]
**aggregatedPricing** | **bool** |  | [optional]
**billTo** | **string** | If all activity for a Tenant is being biulled to a specifc user, set the email address here | [optional]
**pricingTable** | **string** | If BillTo is set, then specify a Pricing Table to use from the Staffology tenant, otherwise the default Staffology Pricing Table will be used | [optional]
**netSuiteDefaultItemCode** | **string** | [readonly] The item code used in the NetSuite billing if not specified in the pricing table | [optional]
**netSuiteDefaultDescription** | **string** | [readonly] The product description used in the NetSuite billing if not specified in the pricing table | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
