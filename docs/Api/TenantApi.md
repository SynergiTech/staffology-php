# SynergiTech\Staffology\TenantApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAdminUserTenant()**](TenantApi.md#addAdminUserTenant) | **POST** /tenants/{id}/users/admins | Add Admin User |
| [**adminUsersTenant()**](TenantApi.md#adminUsersTenant) | **GET** /tenants/{id}/users/admins | List Admin Users |
| [**billTenant()**](TenantApi.md#billTenant) | **GET** /tenants/{id}/bills/{year}/{month}/{billId} | Get Bill |
| [**billsTenant()**](TenantApi.md#billsTenant) | **GET** /tenants/{id}/bills/{year}/{month} | Get Bills |
| [**createBillsTenant()**](TenantApi.md#createBillsTenant) | **POST** /tenants/bills | Create Bills for Period |
| [**createPayrollSquadTenant()**](TenantApi.md#createPayrollSquadTenant) | **POST** /tenants/{id}/payrollsquad | Create Payroll Squad |
| [**createPricingTableTenant()**](TenantApi.md#createPricingTableTenant) | **POST** /tenants/{id}/pricingtables | Create PricingTable |
| [**createTenant()**](TenantApi.md#createTenant) | **POST** /tenants | Create a Tenant |
| [**deletePayrollSquadMemberTenant()**](TenantApi.md#deletePayrollSquadMemberTenant) | **DELETE** /tenants/{id}/payrollsquad/{payrollSquadId}/member/{payrollSquadMemberId} | Delete Payroll Squad Member |
| [**deletePayrollSquadTenant()**](TenantApi.md#deletePayrollSquadTenant) | **DELETE** /tenants/{id}/payrollsquad/{payrollSquadId} | Delete Payroll Squad and it&#39;s Members and Employers. |
| [**deletePricingTableTenant()**](TenantApi.md#deletePricingTableTenant) | **DELETE** /tenants/{id}/pricingtables/{pricingTableId} | Delete PricingTable |
| [**disabledTenant()**](TenantApi.md#disabledTenant) | **PUT** /tenants/{id}/users/{userId}/disabled | Disable User Account |
| [**employerCreationTenant()**](TenantApi.md#employerCreationTenant) | **PUT** /tenants/{id}/users/{userId}/employercreation | Enable Employer Creation |
| [**employerUsageTenant()**](TenantApi.md#employerUsageTenant) | **GET** /tenants/{id}/employers/{employerId}/usage | Get Employer Usage |
| [**employerUsersTenant()**](TenantApi.md#employerUsersTenant) | **GET** /tenants/{id}/employers/{employerId}/users | Get Employer Users |
| [**getApiMailingListReportByIdTenant()**](TenantApi.md#getApiMailingListReportByIdTenant) | **GET** /tenants/{id}/reports/apimailinglist | Api Mailing List Report |
| [**getApiMailingListReportTenant()**](TenantApi.md#getApiMailingListReportTenant) | **GET** /tenants/reports/apimailinglist | Api Mailing List Report |
| [**getEmployersTenant()**](TenantApi.md#getEmployersTenant) | **GET** /tenants/{id}/users/employers | Get Employers |
| [**getPayrollSquadTenant()**](TenantApi.md#getPayrollSquadTenant) | **GET** /tenants/{id}/payrollsquad/{payrollSquadId} | Get Payroll Squad |
| [**getPayrollSquadsTenant()**](TenantApi.md#getPayrollSquadsTenant) | **GET** /tenants/{id}/payrollsquad | Get Payroll Squads |
| [**getPricingTableTenant()**](TenantApi.md#getPricingTableTenant) | **GET** /tenants/{id}/pricingtables/{pricingTableId} | Get PricingTable |
| [**getPricingTablesTenant()**](TenantApi.md#getPricingTablesTenant) | **GET** /tenants/{id}/pricingtables | Get PricingTables |
| [**getRtiSubmissionSettingsTenant()**](TenantApi.md#getRtiSubmissionSettingsTenant) | **GET** /tenants/ritsubmissionsettings | Get RtiSubmissionSettings |
| [**getTenant()**](TenantApi.md#getTenant) | **GET** /tenants/{id} | Get a Tenant |
| [**getUsersWithNoBillableActivityTenant()**](TenantApi.md#getUsersWithNoBillableActivityTenant) | **GET** /tenants/{id}/reports/users/nobillableactivity | Get Users with no Billable Activity. |
| [**netSuiteBillingTenant()**](TenantApi.md#netSuiteBillingTenant) | **GET** /tenants/{id}/reports/netsuitebills | NetSuite Billing Report |
| [**payrollSquadAddMemberTenant()**](TenantApi.md#payrollSquadAddMemberTenant) | **POST** /tenants/{id}/payrollsquad/member | Add Payroll Squad Member |
| [**payrollSquadUpdateEmployersTenant()**](TenantApi.md#payrollSquadUpdateEmployersTenant) | **POST** /tenants/{id}/payrollsquad/employers | Update Payroll Squad Employers |
| [**removeAdminUserTenant()**](TenantApi.md#removeAdminUserTenant) | **DELETE** /tenants/{id}/users/admins | Remove Admin User |
| [**setAccountingIdTenant()**](TenantApi.md#setAccountingIdTenant) | **PUT** /tenants/{id}/users/{userId}/accounting | Set User Accounting Id |
| [**setAddressTenant()**](TenantApi.md#setAddressTenant) | **PUT** /tenants/{id}/users/{userId}/address | Set Address |
| [**setBureauRedirectEmailAddressTenant()**](TenantApi.md#setBureauRedirectEmailAddressTenant) | **PUT** /tenants/{id}/users/{userId}/bureauredir | Set Bureau Redirect |
| [**setBusinessNameTenant()**](TenantApi.md#setBusinessNameTenant) | **PUT** /tenants/{id}/users/{userId}/businessname | Set User Business Name |
| [**setCountryTenant()**](TenantApi.md#setCountryTenant) | **PUT** /tenants/{id}/users/{userId}/country | Set Country |
| [**setEmployeeCountTenant()**](TenantApi.md#setEmployeeCountTenant) | **PUT** /tenants/{id}/users/{userId}/employeecount | Set Employee Count |
| [**setEvcTenant()**](TenantApi.md#setEvcTenant) | **PUT** /tenants/{id}/admin/evc | Set Evc |
| [**setIndustryTenant()**](TenantApi.md#setIndustryTenant) | **PUT** /tenants/{id}/users/{userId}/industry | Set Industry |
| [**setMonthlyMinimumTenant()**](TenantApi.md#setMonthlyMinimumTenant) | **PUT** /tenants/{id}/users/{userId}/monthlyminimum | Set Monthly Minimum |
| [**setPricingTableIdTenant()**](TenantApi.md#setPricingTableIdTenant) | **PUT** /tenants/{id}/users/{userId}/pricingtable | Set User PricingTableId |
| [**setTenantTenant()**](TenantApi.md#setTenantTenant) | **PUT** /tenants/{id}/users/{userId}/tenant | Set User Tenant |
| [**setUserCanUseRefactoredAeRoutinesTenant()**](TenantApi.md#setUserCanUseRefactoredAeRoutinesTenant) | **PUT** /tenants/{id}/users/{userId}/refactoredaeroutine | Set CanUseRefactoredAeRoutines flag |
| [**updateBillTenant()**](TenantApi.md#updateBillTenant) | **PUT** /tenants/{id}/bills/{year}/{month}/{billId} | Update Bill |
| [**updateCssColorsTenant()**](TenantApi.md#updateCssColorsTenant) | **PUT** /tenants/{id}/css/colors | Update CSS Colors |
| [**updateCssTenant()**](TenantApi.md#updateCssTenant) | **PUT** /tenants/{id}/css | Update CSS |
| [**updateFavIconTenant()**](TenantApi.md#updateFavIconTenant) | **PUT** /tenants/{id}/favicon | Upload Favicon |
| [**updateLogoTenant()**](TenantApi.md#updateLogoTenant) | **PUT** /tenants/{id}/logo | Upload Logo |
| [**updatePricingTableTenant()**](TenantApi.md#updatePricingTableTenant) | **PUT** /tenants/{id}/pricingtables/{pricingTableId} | Update PricingTable |
| [**updateRtiSubmissionSettingsTenant()**](TenantApi.md#updateRtiSubmissionSettingsTenant) | **PUT** /tenants/ritsubmissionsettings | Update RtiSubmissionSettings |
| [**updateTenant()**](TenantApi.md#updateTenant) | **PUT** /tenants/{id} | Update a Tenant |
| [**updateUserTenant()**](TenantApi.md#updateUserTenant) | **PUT** /tenants/{id}/users/{userId} | Update a User |
| [**usageTenant()**](TenantApi.md#usageTenant) | **GET** /tenants/{id}/usage/{year}/{month} | Get Usage |
| [**userBillsTenant()**](TenantApi.md#userBillsTenant) | **GET** /tenants/{id}/users/{userId}/bills | Get User Bills |
| [**userEmployersTenant()**](TenantApi.md#userEmployersTenant) | **GET** /tenants/{id}/users/{userId}/employers | Get User Employers |
| [**userTenant()**](TenantApi.md#userTenant) | **GET** /tenants/{id}/users/{userId} | Get a User |
| [**usersSearchTenant()**](TenantApi.md#usersSearchTenant) | **GET** /tenants/{id}/users/search | Search Users |
| [**usersTenant()**](TenantApi.md#usersTenant) | **GET** /tenants/{id}/users | List Users |
| [**weeklyActivityTenant()**](TenantApi.md#weeklyActivityTenant) | **GET** /tenants/{id}/reports/weeklyactivity | Weekly Activity Report |


## `addAdminUserTenant()`

```php
addAdminUserTenant($id, $body)
```

Add Admin User

Adds the specified user as an admin for the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to remove the  admin User from.
$body = 'body_example'; // string

try {
    $apiInstance->addAdminUserTenant($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->addAdminUserTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to remove the  admin User from. | |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUsersTenant()`

```php
adminUsersTenant($id): \SynergiTech\Staffology\Model\Item[]
```

List Admin Users

Returns a list of admin users for the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to list admin Users for.

try {
    $result = $apiInstance->adminUsersTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->adminUsersTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to list admin Users for. | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billTenant()`

```php
billTenant($id, $year, $month, $billId): \SynergiTech\Staffology\Model\UsageBill
```

Get Bill

Returns details of a UsageBill for a User of this Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant the bill belongs to.
$year = 56; // int
$month = 56; // int
$billId = 'billId_example'; // string | The Id of the UsageBill.

try {
    $result = $apiInstance->billTenant($id, $year, $month, $billId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->billTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant the bill belongs to. | |
| **year** | **int**|  | |
| **month** | **int**|  | |
| **billId** | **string**| The Id of the UsageBill. | |

### Return type

[**\SynergiTech\Staffology\Model\UsageBill**](../Model/UsageBill.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billsTenant()`

```php
billsTenant($id, $year, $month, $includeNetSuiteBills): \SynergiTech\Staffology\Model\Item[]
```

Get Bills

Returns a list of UsageBill for Users of this Tenant, for the Year and Month supplied

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to list bills for.
$year = 56; // int
$month = 56; // int
$includeNetSuiteBills = false; // bool

try {
    $result = $apiInstance->billsTenant($id, $year, $month, $includeNetSuiteBills);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->billsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to list bills for. | |
| **year** | **int**|  | |
| **month** | **int**|  | |
| **includeNetSuiteBills** | **bool**|  | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBillsTenant()`

```php
createBillsTenant($month, $year)
```

Create Bills for Period

Generates usage and creates bills for all Tenants  Only available to SuperAdmins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = 56; // int
$year = 56; // int

try {
    $apiInstance->createBillsTenant($month, $year);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createBillsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **int**|  | [optional] |
| **year** | **int**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayrollSquadTenant()`

```php
createPayrollSquadTenant($id, $contractPayrollSquadRequest): \SynergiTech\Staffology\Model\ContractPayrollSquadResponse
```

Create Payroll Squad

Create a Payroll Squad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id
$contractPayrollSquadRequest = new \SynergiTech\Staffology\Model\ContractPayrollSquadRequest(); // \SynergiTech\Staffology\Model\ContractPayrollSquadRequest

try {
    $result = $apiInstance->createPayrollSquadTenant($id, $contractPayrollSquadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createPayrollSquadTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |
| **contractPayrollSquadRequest** | [**\SynergiTech\Staffology\Model\ContractPayrollSquadRequest**](../Model/ContractPayrollSquadRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayrollSquadResponse**](../Model/ContractPayrollSquadResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPricingTableTenant()`

```php
createPricingTableTenant($id, $pricingTable): \SynergiTech\Staffology\Model\PricingTable
```

Create PricingTable

Create a PricingTable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$pricingTable = new \SynergiTech\Staffology\Model\PricingTable(); // \SynergiTech\Staffology\Model\PricingTable

try {
    $result = $apiInstance->createPricingTableTenant($id, $pricingTable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createPricingTableTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pricingTable** | [**\SynergiTech\Staffology\Model\PricingTable**](../Model/PricingTable.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PricingTable**](../Model/PricingTable.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTenant()`

```php
createTenant($tenant): \SynergiTech\Staffology\Model\Tenant
```

Create a Tenant

Use this method to create a new Tenant  Only available to SuperAdmins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant = new \SynergiTech\Staffology\Model\Tenant(); // \SynergiTech\Staffology\Model\Tenant

try {
    $result = $apiInstance->createTenant($tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->createTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant** | [**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayrollSquadMemberTenant()`

```php
deletePayrollSquadMemberTenant($id, $payrollSquadId, $payrollSquadMemberId)
```

Delete Payroll Squad Member

Delete a Payroll Squad Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id
$payrollSquadId = 'payrollSquadId_example'; // string | The id of payroll squad
$payrollSquadMemberId = 'payrollSquadMemberId_example'; // string | The id of payroll squad member

try {
    $apiInstance->deletePayrollSquadMemberTenant($id, $payrollSquadId, $payrollSquadMemberId);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deletePayrollSquadMemberTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |
| **payrollSquadId** | **string**| The id of payroll squad | |
| **payrollSquadMemberId** | **string**| The id of payroll squad member | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayrollSquadTenant()`

```php
deletePayrollSquadTenant($id, $payrollSquadId)
```

Delete Payroll Squad and it's Members and Employers.

Delete Payroll Squad with it's Members and Employers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id
$payrollSquadId = 'payrollSquadId_example'; // string | The id of payroll squad

try {
    $apiInstance->deletePayrollSquadTenant($id, $payrollSquadId);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deletePayrollSquadTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |
| **payrollSquadId** | **string**| The id of payroll squad | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePricingTableTenant()`

```php
deletePricingTableTenant($id, $pricingTableId)
```

Delete PricingTable

Delete a PricingTable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$pricingTableId = 'pricingTableId_example'; // string

try {
    $apiInstance->deletePricingTableTenant($id, $pricingTableId);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->deletePricingTableTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pricingTableId** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disabledTenant()`

```php
disabledTenant($id, $userId, $disabled, $loginDisabled, $body)
```

Disable User Account

Disables (or re-enabled) a user account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string
$disabled = True; // bool | Whether or not the account should be disabled.
$loginDisabled = True; // bool | Whether or not the account should have log in permissions.
$body = 'body_example'; // string | A message to show the user explaining why the account is disabled.

try {
    $apiInstance->disabledTenant($id, $userId, $disabled, $loginDisabled, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->disabledTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**|  | |
| **disabled** | **bool**| Whether or not the account should be disabled. | [optional] |
| **loginDisabled** | **bool**| Whether or not the account should have log in permissions. | [optional] |
| **body** | **string**| A message to show the user explaining why the account is disabled. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employerCreationTenant()`

```php
employerCreationTenant($id, $userId, $enabled)
```

Enable Employer Creation

Enable (or disable) a user accounts ability to create new employers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string
$enabled = True; // bool | Whether or not the account can create employers.

try {
    $apiInstance->employerCreationTenant($id, $userId, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->employerCreationTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**|  | |
| **enabled** | **bool**| Whether or not the account can create employers. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employerUsageTenant()`

```php
employerUsageTenant($id, $employerId): \SynergiTech\Staffology\Model\Item[]
```

Get Employer Usage

Returns all activity for the given Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$employerId = 'employerId_example'; // string | The Id of the Employer.

try {
    $result = $apiInstance->employerUsageTenant($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->employerUsageTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **employerId** | **string**| The Id of the Employer. | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employerUsersTenant()`

```php
employerUsersTenant($id, $employerId): \SynergiTech\Staffology\Model\Item[]
```

Get Employer Users

Returns all users for the given Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$employerId = 'employerId_example'; // string | The Id of the Employer.

try {
    $result = $apiInstance->employerUsersTenant($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->employerUsersTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **employerId** | **string**| The Id of the Employer. | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiMailingListReportByIdTenant()`

```php
getApiMailingListReportByIdTenant($id): \SynergiTech\Staffology\Model\ReportResponse
```

Api Mailing List Report

Returns a report of active users that have asked to be updated about API for specific tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getApiMailingListReportByIdTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getApiMailingListReportByIdTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiMailingListReportTenant()`

```php
getApiMailingListReportTenant(): \SynergiTech\Staffology\Model\ReportResponse
```

Api Mailing List Report

Returns a report of active users that have asked to be updated about API across all tenants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApiMailingListReportTenant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getApiMailingListReportTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployersTenant()`

```php
getEmployersTenant($id): \SynergiTech\Staffology\Model\Item[]
```

Get Employers

Returns all the employers of all the users of the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id

try {
    $result = $apiInstance->getEmployersTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getEmployersTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollSquadTenant()`

```php
getPayrollSquadTenant($id, $payrollSquadId): \SynergiTech\Staffology\Model\ContractPayrollSquadResponse
```

Get Payroll Squad

Get a Payroll Squad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id
$payrollSquadId = 'payrollSquadId_example'; // string | The id of payroll squad

try {
    $result = $apiInstance->getPayrollSquadTenant($id, $payrollSquadId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getPayrollSquadTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |
| **payrollSquadId** | **string**| The id of payroll squad | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayrollSquadResponse**](../Model/ContractPayrollSquadResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollSquadsTenant()`

```php
getPayrollSquadsTenant($id): \SynergiTech\Staffology\Model\Item[]
```

Get Payroll Squads

Returns all Payroll Squad for the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id

try {
    $result = $apiInstance->getPayrollSquadsTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getPayrollSquadsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricingTableTenant()`

```php
getPricingTableTenant($id, $pricingTableId): \SynergiTech\Staffology\Model\PricingTable
```

Get PricingTable

Get a PricingTable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$pricingTableId = 'pricingTableId_example'; // string

try {
    $result = $apiInstance->getPricingTableTenant($id, $pricingTableId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getPricingTableTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pricingTableId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\PricingTable**](../Model/PricingTable.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricingTablesTenant()`

```php
getPricingTablesTenant($id): \SynergiTech\Staffology\Model\Item[]
```

Get PricingTables

Returns all PricingTables for the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPricingTablesTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getPricingTablesTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRtiSubmissionSettingsTenant()`

```php
getRtiSubmissionSettingsTenant($id): \SynergiTech\Staffology\Model\RtiSubmissionSettings
```

Get RtiSubmissionSettings

If the Tenant has BureauFeaturesEnabled then they can store RtiSubmissionSettings for use across multiple employers.  This end point returns them RtiSubmissionSettings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.

try {
    $result = $apiInstance->getRtiSubmissionSettingsTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getRtiSubmissionSettingsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\RtiSubmissionSettings**](../Model/RtiSubmissionSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenant()`

```php
getTenant($id): \SynergiTech\Staffology\Model\Tenant
```

Get a Tenant

If you are an administrator for a Tenant then you can retrieve the settings for it using this API call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to retrieve.

try {
    $result = $apiInstance->getTenant($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersWithNoBillableActivityTenant()`

```php
getUsersWithNoBillableActivityTenant($id, $month, $year): \SynergiTech\Staffology\Model\ReportResponse
```

Get Users with no Billable Activity.

Returns a .csv file containing users created in or before the given month that do not have billable activity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant
$month = 56; // int
$year = 56; // int

try {
    $result = $apiInstance->getUsersWithNoBillableActivityTenant($id, $month, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->getUsersWithNoBillableActivityTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant | |
| **month** | **int**|  | [optional] |
| **year** | **int**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `netSuiteBillingTenant()`

```php
netSuiteBillingTenant($id, $year, $month, $accept, $allTenants): \SynergiTech\Staffology\Model\ReportResponse
```

NetSuite Billing Report

Returns a report detailing billing, for NetSuite, for the given year and month  Only available to SuperAdmins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant
$year = 56; // int | The year of the billing period
$month = 56; // int | The month of the billing period
$accept = 'accept_example'; // string
$allTenants = false; // bool | If set to true then the report will include all Tenants to which you have access

try {
    $result = $apiInstance->netSuiteBillingTenant($id, $year, $month, $accept, $allTenants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->netSuiteBillingTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant | |
| **year** | **int**| The year of the billing period | [optional] |
| **month** | **int**| The month of the billing period | [optional] |
| **accept** | **string**|  | [optional] |
| **allTenants** | **bool**| If set to true then the report will include all Tenants to which you have access | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollSquadAddMemberTenant()`

```php
payrollSquadAddMemberTenant($id, $contractPayrollSquadMemberRequest): \SynergiTech\Staffology\Model\ContractPayrollSquadMemberResponse
```

Add Payroll Squad Member

Add Payroll Squad Member

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id
$contractPayrollSquadMemberRequest = new \SynergiTech\Staffology\Model\ContractPayrollSquadMemberRequest(); // \SynergiTech\Staffology\Model\ContractPayrollSquadMemberRequest

try {
    $result = $apiInstance->payrollSquadAddMemberTenant($id, $contractPayrollSquadMemberRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->payrollSquadAddMemberTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |
| **contractPayrollSquadMemberRequest** | [**\SynergiTech\Staffology\Model\ContractPayrollSquadMemberRequest**](../Model/ContractPayrollSquadMemberRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayrollSquadMemberResponse**](../Model/ContractPayrollSquadMemberResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollSquadUpdateEmployersTenant()`

```php
payrollSquadUpdateEmployersTenant($id, $contractPayrollSquadEmployerRequest): \SynergiTech\Staffology\Model\ContractPayrollSquadEmployerResponse[]
```

Update Payroll Squad Employers

Update Payroll Squad Employers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Current tenant id
$contractPayrollSquadEmployerRequest = new \SynergiTech\Staffology\Model\ContractPayrollSquadEmployerRequest(); // \SynergiTech\Staffology\Model\ContractPayrollSquadEmployerRequest

try {
    $result = $apiInstance->payrollSquadUpdateEmployersTenant($id, $contractPayrollSquadEmployerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->payrollSquadUpdateEmployersTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Current tenant id | |
| **contractPayrollSquadEmployerRequest** | [**\SynergiTech\Staffology\Model\ContractPayrollSquadEmployerRequest**](../Model/ContractPayrollSquadEmployerRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayrollSquadEmployerResponse[]**](../Model/ContractPayrollSquadEmployerResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeAdminUserTenant()`

```php
removeAdminUserTenant($id, $body)
```

Remove Admin User

Removes the specified admin user for the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to remove the  admin User from.
$body = 'body_example'; // string

try {
    $apiInstance->removeAdminUserTenant($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->removeAdminUserTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to remove the  admin User from. | |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAccountingIdTenant()`

```php
setAccountingIdTenant($id, $userId, $accountingId)
```

Set User Accounting Id

Updates the Customer Accounting Id for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string
$accountingId = 'accountingId_example'; // string | The CustomerAccountingId for the user.

try {
    $apiInstance->setAccountingIdTenant($id, $userId, $accountingId);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setAccountingIdTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**|  | |
| **accountingId** | **string**| The CustomerAccountingId for the user. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAddressTenant()`

```php
setAddressTenant($id, $userId, $user)
```

Set Address

Updates the Address for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string | The Id of the User.
$user = new \SynergiTech\Staffology\Model\User(); // \SynergiTech\Staffology\Model\User

try {
    $apiInstance->setAddressTenant($id, $userId, $user);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setAddressTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**| The Id of the User. | |
| **user** | [**\SynergiTech\Staffology\Model\User**](../Model/User.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setBureauRedirectEmailAddressTenant()`

```php
setBureauRedirectEmailAddressTenant($id, $userId, $emailAddress)
```

Set Bureau Redirect

Sets or removes the redirect email address for a users Bureau-related notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string
$emailAddress = 'emailAddress_example'; // string | The email address to redirect to, or an empty string to remove the redirect.

try {
    $apiInstance->setBureauRedirectEmailAddressTenant($id, $userId, $emailAddress);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setBureauRedirectEmailAddressTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**|  | |
| **emailAddress** | **string**| The email address to redirect to, or an empty string to remove the redirect. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setBusinessNameTenant()`

```php
setBusinessNameTenant($id, $userId, $businessName)
```

Set User Business Name

Updates the Business Name for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string | The Id of the User.
$businessName = 'businessName_example'; // string | The Business Name for the User.

try {
    $apiInstance->setBusinessNameTenant($id, $userId, $businessName);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setBusinessNameTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**| The Id of the User. | |
| **businessName** | **string**| The Business Name for the User. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCountryTenant()`

```php
setCountryTenant($id, $userId, $country)
```

Set Country

Updates the Country for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string | The Id of the User.
$country = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\Country(); // \SynergiTech\Staffology\Model\Country | The Country for the User.

try {
    $apiInstance->setCountryTenant($id, $userId, $country);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setCountryTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**| The Id of the User. | |
| **country** | [**\SynergiTech\Staffology\Model\Country**](../Model/.md)| The Country for the User. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setEmployeeCountTenant()`

```php
setEmployeeCountTenant($id, $userId, $employeeCount)
```

Set Employee Count

Updates the Employee Count for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string | The Id of the User.
$employeeCount = 56; // int | The Employee Count for the User.

try {
    $apiInstance->setEmployeeCountTenant($id, $userId, $employeeCount);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setEmployeeCountTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**| The Id of the User. | |
| **employeeCount** | **int**| The Employee Count for the User. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setEvcTenant()`

```php
setEvcTenant($id, $disableEvc)
```

Set Evc

Disables or enables EVC for a tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the tenant
$disableEvc = True; // bool | A boolean value indicating whether to disable or enable EVC at tenant level.

try {
    $apiInstance->setEvcTenant($id, $disableEvc);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setEvcTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the tenant | |
| **disableEvc** | **bool**| A boolean value indicating whether to disable or enable EVC at tenant level. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setIndustryTenant()`

```php
setIndustryTenant($id, $userId, $industry)
```

Set Industry

Updates the Industry for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string | The Id of the User.
$industry = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\UserIndustry(); // \SynergiTech\Staffology\Model\UserIndustry | The Industry for the User.

try {
    $apiInstance->setIndustryTenant($id, $userId, $industry);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setIndustryTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**| The Id of the User. | |
| **industry** | [**\SynergiTech\Staffology\Model\UserIndustry**](../Model/.md)| The Industry for the User. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setMonthlyMinimumTenant()`

```php
setMonthlyMinimumTenant($id, $userId, $monthlyMinimum)
```

Set Monthly Minimum

Updates the MonthlyMinimum subscription charge for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string
$monthlyMinimum = new \SynergiTech\Staffology\Model\MonthlyMinimum(); // \SynergiTech\Staffology\Model\MonthlyMinimum

try {
    $apiInstance->setMonthlyMinimumTenant($id, $userId, $monthlyMinimum);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setMonthlyMinimumTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**|  | |
| **monthlyMinimum** | [**\SynergiTech\Staffology\Model\MonthlyMinimum**](../Model/MonthlyMinimum.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPricingTableIdTenant()`

```php
setPricingTableIdTenant($id, $userId, $pricingTableId)
```

Set User PricingTableId

Updates the Customer Accounting Id for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string
$pricingTableId = 'pricingTableId_example'; // string | The PricingTable Id for the user. Provide null and the user will use the Tenant default

try {
    $apiInstance->setPricingTableIdTenant($id, $userId, $pricingTableId);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setPricingTableIdTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**|  | |
| **pricingTableId** | **string**| The PricingTable Id for the user. Provide null and the user will use the Tenant default | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setTenantTenant()`

```php
setTenantTenant($id, $userId, $newTenantId)
```

Set User Tenant

Changes the Tenant for a User. Only applicable if you manage two or more Tenants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant the user is currently assigned to.
$userId = 'userId_example'; // string
$newTenantId = 'newTenantId_example'; // string | The Id of the Tenant the user is to be assigned to.

try {
    $apiInstance->setTenantTenant($id, $userId, $newTenantId);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setTenantTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant the user is currently assigned to. | |
| **userId** | **string**|  | |
| **newTenantId** | **string**| The Id of the Tenant the user is to be assigned to. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setUserCanUseRefactoredAeRoutinesTenant()`

```php
setUserCanUseRefactoredAeRoutinesTenant($id, $userId, $canUseRefactoredAeRoutines)
```

Set CanUseRefactoredAeRoutines flag

Updates the CanUseRefactoredAeRoutines flag for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$userId = 'userId_example'; // string | The Id of the User.
$canUseRefactoredAeRoutines = True; // bool | The CanUseRefactoredAeRoutines flag for the User.

try {
    $apiInstance->setUserCanUseRefactoredAeRoutinesTenant($id, $userId, $canUseRefactoredAeRoutines);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->setUserCanUseRefactoredAeRoutinesTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **userId** | **string**| The Id of the User. | |
| **canUseRefactoredAeRoutines** | **bool**| The CanUseRefactoredAeRoutines flag for the User. | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillTenant()`

```php
updateBillTenant($id, $year, $month, $billId, $usageBill): \SynergiTech\Staffology\Model\UsageBill
```

Update Bill

Updates the UsageBill.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant the bill belongs to.
$year = 56; // int
$month = 56; // int
$billId = 'billId_example'; // string | The Id of the UsageBill.
$usageBill = new \SynergiTech\Staffology\Model\UsageBill(); // \SynergiTech\Staffology\Model\UsageBill

try {
    $result = $apiInstance->updateBillTenant($id, $year, $month, $billId, $usageBill);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateBillTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant the bill belongs to. | |
| **year** | **int**|  | |
| **month** | **int**|  | |
| **billId** | **string**| The Id of the UsageBill. | |
| **usageBill** | [**\SynergiTech\Staffology\Model\UsageBill**](../Model/UsageBill.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\UsageBill**](../Model/UsageBill.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCssColorsTenant()`

```php
updateCssColorsTenant($id, $stringStringKeyValuePair): \SynergiTech\Staffology\Model\StringStringKeyValuePair[]
```

Update CSS Colors

Update the colors for a Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to update.
$stringStringKeyValuePair = array(new \SynergiTech\Staffology\Model\StringStringKeyValuePair()); // \SynergiTech\Staffology\Model\StringStringKeyValuePair[]

try {
    $result = $apiInstance->updateCssColorsTenant($id, $stringStringKeyValuePair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateCssColorsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to update. | |
| **stringStringKeyValuePair** | [**\SynergiTech\Staffology\Model\StringStringKeyValuePair[]**](../Model/StringStringKeyValuePair.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\StringStringKeyValuePair[]**](../Model/StringStringKeyValuePair.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCssTenant()`

```php
updateCssTenant($id, $body): string
```

Update CSS

Update the custom CSS for a Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to update.
$body = 'body_example'; // string

try {
    $result = $apiInstance->updateCssTenant($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateCssTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to update. | |
| **body** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFavIconTenant()`

```php
updateFavIconTenant($id, $file): \SynergiTech\Staffology\Model\Tenant
```

Upload Favicon

Upload an image to use as favicon. We'll upload it and set the URL on the FavIcon property of the Tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to update.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->updateFavIconTenant($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateFavIconTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to update. | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogoTenant()`

```php
updateLogoTenant($id, $file): \SynergiTech\Staffology\Model\Tenant
```

Upload Logo

Upload an image to use as your main logo. We'll upload it and set the URL on the HomeImgUrl property of the Tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to update.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->updateLogoTenant($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateLogoTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to update. | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePricingTableTenant()`

```php
updatePricingTableTenant($id, $pricingTableId, $pricingTable): \SynergiTech\Staffology\Model\PricingTable
```

Update PricingTable

Update a PricingTables

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$pricingTableId = 'pricingTableId_example'; // string
$pricingTable = new \SynergiTech\Staffology\Model\PricingTable(); // \SynergiTech\Staffology\Model\PricingTable

try {
    $result = $apiInstance->updatePricingTableTenant($id, $pricingTableId, $pricingTable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updatePricingTableTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **pricingTableId** | **string**|  | |
| **pricingTable** | [**\SynergiTech\Staffology\Model\PricingTable**](../Model/PricingTable.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PricingTable**](../Model/PricingTable.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRtiSubmissionSettingsTenant()`

```php
updateRtiSubmissionSettingsTenant($id, $rtiSubmissionSettings): \SynergiTech\Staffology\Model\RtiSubmissionSettings
```

Update RtiSubmissionSettings

If the Tenant has BureauFeaturesEnabled then they can store RtiSubmissionSettings for use across multiple employers.  This end point updates the RtiSubmissionSettings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$rtiSubmissionSettings = new \SynergiTech\Staffology\Model\RtiSubmissionSettings(); // \SynergiTech\Staffology\Model\RtiSubmissionSettings

try {
    $result = $apiInstance->updateRtiSubmissionSettingsTenant($id, $rtiSubmissionSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateRtiSubmissionSettingsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | [optional] |
| **rtiSubmissionSettings** | [**\SynergiTech\Staffology\Model\RtiSubmissionSettings**](../Model/RtiSubmissionSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\RtiSubmissionSettings**](../Model/RtiSubmissionSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenant()`

```php
updateTenant($id, $tenant): \SynergiTech\Staffology\Model\Tenant
```

Update a Tenant

If you are an administrator for a Tenant then you can update the settings for it using this API call

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to update.
$tenant = new \SynergiTech\Staffology\Model\Tenant(); // \SynergiTech\Staffology\Model\Tenant

try {
    $result = $apiInstance->updateTenant($id, $tenant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to update. | |
| **tenant** | [**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserTenant()`

```php
updateUserTenant($id, $userId, $user): \SynergiTech\Staffology\Model\User
```

Update a User

Set the details of a User that belongs to the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to update a User for.
$userId = 'userId_example'; // string | The Id of the User.
$user = new \SynergiTech\Staffology\Model\User(); // \SynergiTech\Staffology\Model\User | The User details.

try {
    $result = $apiInstance->updateUserTenant($id, $userId, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->updateUserTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to update a User for. | |
| **userId** | **string**| The Id of the User. | |
| **user** | [**\SynergiTech\Staffology\Model\User**](../Model/User.md)| The User details. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usageTenant()`

```php
usageTenant($id, $year, $month): \SynergiTech\Staffology\Model\Item[]
```

Get Usage

Returns activity for Users of this Tenant, for the Year and Month supplied

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant.
$year = 56; // int
$month = 56; // int

try {
    $result = $apiInstance->usageTenant($id, $year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->usageTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant. | |
| **year** | **int**|  | |
| **month** | **int**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userBillsTenant()`

```php
userBillsTenant($id, $userId): \SynergiTech\Staffology\Model\Item[]
```

Get User Bills

Returns all UsageBills for a User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to get a Users UsageBills for.
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userBillsTenant($id, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->userBillsTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to get a Users UsageBills for. | |
| **userId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userEmployersTenant()`

```php
userEmployersTenant($id, $userId): \SynergiTech\Staffology\Model\Item[]
```

Get User Employers

Returns Employer details for a User that belongs to the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to get User Employers for.
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userEmployersTenant($id, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->userEmployersTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to get User Employers for. | |
| **userId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userTenant()`

```php
userTenant($id, $userId): \SynergiTech\Staffology\Model\User
```

Get a User

Returns details of a User that belongs to the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to get a User for.
$userId = 'userId_example'; // string

try {
    $result = $apiInstance->userTenant($id, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->userTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to get a User for. | |
| **userId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersSearchTenant()`

```php
usersSearchTenant($id, $q): \SynergiTech\Staffology\Model\Item[]
```

Search Users

Returns a list of users for the Tenant that match the search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to search Users for.
$q = 'q_example'; // string

try {
    $result = $apiInstance->usersSearchTenant($id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->usersSearchTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to search Users for. | |
| **q** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersTenant()`

```php
usersTenant($id, $pageNum, $pageSize, $sortByLastLogin, $category, $isBureauMember): \SynergiTech\Staffology\Model\Item[]
```

List Users

Returns a list of users for the Tenant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant you want to list Users for.
$pageNum = 56; // int
$pageSize = 56; // int
$sortByLastLogin = false; // bool
$category = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\UserCategory(); // \SynergiTech\Staffology\Model\UserCategory
$isBureauMember = True; // bool

try {
    $result = $apiInstance->usersTenant($id, $pageNum, $pageSize, $sortByLastLogin, $category, $isBureauMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->usersTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant you want to list Users for. | |
| **pageNum** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |
| **sortByLastLogin** | **bool**|  | [optional] [default to false] |
| **category** | [**\SynergiTech\Staffology\Model\UserCategory**](../Model/.md)|  | [optional] |
| **isBureauMember** | **bool**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `weeklyActivityTenant()`

```php
weeklyActivityTenant($id, $fromDate, $toDate, $accept, $allTenants): \SynergiTech\Staffology\Model\ReportResponse
```

Weekly Activity Report

Returns a report detailing User activity, summarised by week, for the given date range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$accept = 'accept_example'; // string
$allTenants = false; // bool | If set to true then the report will include all Tenants to which you have access

try {
    $result = $apiInstance->weeklyActivityTenant($id, $fromDate, $toDate, $accept, $allTenants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantApi->weeklyActivityTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant | |
| **fromDate** | **\DateTime**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **allTenants** | **bool**| If set to true then the report will include all Tenants to which you have access | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
