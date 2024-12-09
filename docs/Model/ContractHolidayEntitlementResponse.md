# # ContractHolidayEntitlementResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uniqueId** | **string** | Unique identifier for the Holiday Entitlement | [optional]
**effectiveDate** | **\DateTime** | PaySpine Holiday Entitlement Effective Date  If UseSpineHolidayRules is true then this field is required | [optional]
**baseHolidayEntitlement** | **float** | PaySpine Base Holiday Entitlement  If UseSpineHolidayRules is true then this field is required | [optional]
**yearsServiceEntitlementBasis** | [**\SynergiTech\Staffology\Model\PaySpineYearsServiceEntitlementBasis**](PaySpineYearsServiceEntitlementBasis.md) |  | [optional]
**yearsServiceEntitlements** | [**\SynergiTech\Staffology\Model\ContractYearsServiceEntitlementResponse[]**](ContractYearsServiceEntitlementResponse.md) | Holiday Entitlement Years Service Entitlements | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
