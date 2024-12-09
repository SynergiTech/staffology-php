# # OccupationalPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policyName** | **string** | The unique policy name |
**type** | [**\SynergiTech\Staffology\Model\OccupationalPolicyType**](OccupationalPolicyType.md) |  |
**entitlement** | [**\SynergiTech\Staffology\Model\OccupationalPolicyEntitlement**](OccupationalPolicyEntitlement.md) |  |
**sicknessYear** | [**\SynergiTech\Staffology\Model\OccupationalPolicySicknessYear**](OccupationalPolicySicknessYear.md) |  |
**policyStartMonth** | [**\SynergiTech\Staffology\Model\CalendarMonth**](CalendarMonth.md) |  | [optional]
**serviceBands** | [**\SynergiTech\Staffology\Model\ServiceBand[]**](ServiceBand.md) | Service Bands Json | [optional]
**payCalculatedOn** | [**\SynergiTech\Staffology\Model\OccupationalPolicyPayCalculatedOn**](OccupationalPolicyPayCalculatedOn.md) |  | [optional]
**payCodeSetUniqueId** | **string** |  | [optional]
**useAggregatedServiceDate** | **bool** |  | [optional]
**daysOrWeeksBeforeRecalculatingEntitlement** | **int** | How many days or weeks an employee needs to return to work before new entitlements are used in calculations | [optional]
**entitlementRecalculationBasis** | [**\SynergiTech\Staffology\Model\OccupationalPolicyEntitlementRecalculationBasis**](OccupationalPolicyEntitlementRecalculationBasis.md) |  | [optional]
**ignorePreviousYearsSickness** | **bool** | Defines whether any sickness that relates to a previous year&#39;s sickness entitlement should be included in the entitlement calculation,  or whether only sickness that is relevant to the current year&#39;s entitlement is taken into consideration | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
