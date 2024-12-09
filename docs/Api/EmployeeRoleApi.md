# SynergiTech\Staffology\EmployeeRoleApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmployeeRole()**](EmployeeRoleApi.md#createEmployeeRole) | **POST** /employers/{employerId}/employees/{employeeId}/roles | Create Employee Role |
| [**createRoleWorkingPatternEmployeeRole()**](EmployeeRoleApi.md#createRoleWorkingPatternEmployeeRole) | **POST** /employers/{employerId}/employees/{employeeId}/roles/{id}/workingpatterns | Create Employee Role Working Pattern |
| [**deleteEmployeeRole()**](EmployeeRoleApi.md#deleteEmployeeRole) | **DELETE** /employers/{employerId}/employees/{employeeId}/roles/{id} | Delete Employee Role |
| [**deleteRoleWorkingPatternEmployeeRole()**](EmployeeRoleApi.md#deleteRoleWorkingPatternEmployeeRole) | **DELETE** /employers/{employerId}/employees/{employeeId}/roles/{id}/workingpatterns/{roleWorkingPatternId} | Delete Employee Role Working Pattern |
| [**getBaseDailyRateEmployeeRole()**](EmployeeRoleApi.md#getBaseDailyRateEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{roleId}/basedailyrate | Calculate Base Daily Rate |
| [**getBaseHourlyRateEmployeeRole()**](EmployeeRoleApi.md#getBaseHourlyRateEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{roleId}/basehourlyrate | Calculate Base Hourly Rate |
| [**getCostCentreMembershipsEmployeeRole()**](EmployeeRoleApi.md#getCostCentreMembershipsEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{id}/costcentres | Get Employee Role Cost Centres |
| [**getDepartmentMembershipsEmployeeRole()**](EmployeeRoleApi.md#getDepartmentMembershipsEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{id}/departments | Get Employee Role Departments |
| [**getEmployeeRole()**](EmployeeRoleApi.md#getEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{id} | Get Employee Role |
| [**getEmployeeRoleAnalysisCategoryCodesEmployeeRole()**](EmployeeRoleApi.md#getEmployeeRoleAnalysisCategoryCodesEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{id}/analysiscategorycodes | Get Employee Role AnalysisCategoryCode |
| [**getRoleAssumedPensionablePayEmployeeRole()**](EmployeeRoleApi.md#getRoleAssumedPensionablePayEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{roleId}/assumedpensionablepay | Calculate Assumed Pensionable Pay |
| [**getRoleWorkingPatternEmployeeRole()**](EmployeeRoleApi.md#getRoleWorkingPatternEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{id}/workingpatterns/{roleWorkingPatternId} | Get Employee Role Working Pattern |
| [**indexEmployeeRole()**](EmployeeRoleApi.md#indexEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles | List Employee Roles |
| [**listRoleWorkingPatternsEmployeeRole()**](EmployeeRoleApi.md#listRoleWorkingPatternsEmployeeRole) | **GET** /employers/{employerId}/employees/{employeeId}/roles/{id}/workingpatterns | List Working Patterns for an Employee Role |
| [**setCostCentreMembershipsEmployeeRole()**](EmployeeRoleApi.md#setCostCentreMembershipsEmployeeRole) | **PUT** /employers/{employerId}/employees/{employeeId}/roles/{id}/costcentres | Set Employee Role Cost Centres |
| [**setDepartmentMembershipsEmployeeRole()**](EmployeeRoleApi.md#setDepartmentMembershipsEmployeeRole) | **PUT** /employers/{employerId}/employees/{employeeId}/roles/{id}/departments | Set Employee Role Departments |
| [**setEmployeeRoleAnalysisCategoryCodesEmployeeRole()**](EmployeeRoleApi.md#setEmployeeRoleAnalysisCategoryCodesEmployeeRole) | **PUT** /employers/{employerId}/employees/{employeeId}/roles/{id}/analysiscategories/{analysisCategoryId}/analysiscategorycodes | Set  Employee Role AnalysisCategorycode |
| [**updateEmployeeRole()**](EmployeeRoleApi.md#updateEmployeeRole) | **PUT** /employers/{employerId}/employees/{employeeId}/roles/{id} | Update Employee Role |
| [**updateRoleWorkingPatternEmployeeRole()**](EmployeeRoleApi.md#updateRoleWorkingPatternEmployeeRole) | **PUT** /employers/{employerId}/employees/{employeeId}/roles/{id}/workingPatterns/{roleWorkingPatternId} | Update Employee Role Working Pattern |


## `createEmployeeRole()`

```php
createEmployeeRole($employerId, $employeeId, $employeeRole): \SynergiTech\Staffology\Model\EmployeeRole
```

Create Employee Role

Creates a new Role for the Employee.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$employeeRole = new \SynergiTech\Staffology\Model\EmployeeRole(); // \SynergiTech\Staffology\Model\EmployeeRole

try {
    $result = $apiInstance->createEmployeeRole($employerId, $employeeId, $employeeRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->createEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **employeeRole** | [**\SynergiTech\Staffology\Model\EmployeeRole**](../Model/EmployeeRole.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeRole**](../Model/EmployeeRole.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoleWorkingPatternEmployeeRole()`

```php
createRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $contractEmployeeRoleWorkingPatternRequest): \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponse
```

Create Employee Role Working Pattern

Creates a new Role Working Pattern for the Employee Role.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Employee Role you want to create a Role Working Pattern for.
$contractEmployeeRoleWorkingPatternRequest = new \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternRequest(); // \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternRequest

try {
    $result = $apiInstance->createRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $contractEmployeeRoleWorkingPatternRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->createRoleWorkingPatternEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Employee Role you want to create a Role Working Pattern for. | |
| **contractEmployeeRoleWorkingPatternRequest** | [**\SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternRequest**](../Model/ContractEmployeeRoleWorkingPatternRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponse**](../Model/ContractEmployeeRoleWorkingPatternResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmployeeRole()`

```php
deleteEmployeeRole($employerId, $employeeId, $id)
```

Delete Employee Role

Deletes the specified Role.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Role to delete.

try {
    $apiInstance->deleteEmployeeRole($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->deleteEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Role to delete. | |

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

## `deleteRoleWorkingPatternEmployeeRole()`

```php
deleteRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $roleWorkingPatternId)
```

Delete Employee Role Working Pattern

Deletes the specified Employee Role Working Pattern.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Employee Role to which the Role Working Pattern belongs.
$roleWorkingPatternId = 'roleWorkingPatternId_example'; // string | The Id of the Employee Role Working Pattern you want to delete.

try {
    $apiInstance->deleteRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $roleWorkingPatternId);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->deleteRoleWorkingPatternEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Employee Role to which the Role Working Pattern belongs. | |
| **roleWorkingPatternId** | **string**| The Id of the Employee Role Working Pattern you want to delete. | |

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

## `getBaseDailyRateEmployeeRole()`

```php
getBaseDailyRateEmployeeRole($employerId, $employeeId, $roleId, $payPeriod, $payBasis, $payAmount, $workingPatternId): float
```

Calculate Base Daily Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee.
$roleId = 'roleId_example'; // string | The Employee Role Id.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The frequency that this Employee Role is paid.
$payBasis = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayBasis(); // \SynergiTech\Staffology\Model\PayBasis | 
$payAmount = 3.4; // float | The amount the Employee Role is regularly paid each period.
$workingPatternId = 'workingPatternId_example'; // string | The Id of the Working Pattern that we want the calculations against.

try {
    $result = $apiInstance->getBaseDailyRateEmployeeRole($employerId, $employeeId, $roleId, $payPeriod, $payBasis, $payAmount, $workingPatternId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getBaseDailyRateEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee. | |
| **roleId** | **string**| The Employee Role Id. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The frequency that this Employee Role is paid. | [optional] |
| **payBasis** | [**\SynergiTech\Staffology\Model\PayBasis**](../Model/.md)|  | [optional] |
| **payAmount** | **float**| The amount the Employee Role is regularly paid each period. | [optional] |
| **workingPatternId** | **string**| The Id of the Working Pattern that we want the calculations against. | [optional] |

### Return type

**float**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBaseHourlyRateEmployeeRole()`

```php
getBaseHourlyRateEmployeeRole($employerId, $employeeId, $roleId, $payPeriod, $payBasis, $payAmount, $workingPatternId): float
```

Calculate Base Hourly Rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee.
$roleId = 'roleId_example'; // string | The Employee Role Id.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The frequency that this Employee Role is paid.
$payBasis = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayBasis(); // \SynergiTech\Staffology\Model\PayBasis | 
$payAmount = 3.4; // float | The amount the Employee Role is regularly paid each period.
$workingPatternId = 'workingPatternId_example'; // string | The Id of the Working Pattern that we want the calculations against.

try {
    $result = $apiInstance->getBaseHourlyRateEmployeeRole($employerId, $employeeId, $roleId, $payPeriod, $payBasis, $payAmount, $workingPatternId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getBaseHourlyRateEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee. | |
| **roleId** | **string**| The Employee Role Id. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The frequency that this Employee Role is paid. | [optional] |
| **payBasis** | [**\SynergiTech\Staffology\Model\PayBasis**](../Model/.md)|  | [optional] |
| **payAmount** | **float**| The amount the Employee Role is regularly paid each period. | [optional] |
| **workingPatternId** | **string**| The Id of the Working Pattern that we want the calculations against. | [optional] |

### Return type

**float**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCentreMembershipsEmployeeRole()`

```php
getCostCentreMembershipsEmployeeRole($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\EmployeeCostCentre[]
```

Get Employee Role Cost Centres

Gets Cost Centres that are Assigned to an Employee Role.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to retrieve Cost Centres for.
$id = 'id_example'; // string | The Id of the Employee Role you want to retrieve Cost Centres for.

try {
    $result = $apiInstance->getCostCentreMembershipsEmployeeRole($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getCostCentreMembershipsEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to retrieve Cost Centres for. | |
| **id** | **string**| The Id of the Employee Role you want to retrieve Cost Centres for. | |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeCostCentre[]**](../Model/EmployeeCostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartmentMembershipsEmployeeRole()`

```php
getDepartmentMembershipsEmployeeRole($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\DepartmentMembership[]
```

Get Employee Role Departments

Gets Departments that are Assigned to an Employee Role.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to retrieve Departments for.
$id = 'id_example'; // string | The Id of the Employee Role you want to retrieve Departments for.

try {
    $result = $apiInstance->getDepartmentMembershipsEmployeeRole($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getDepartmentMembershipsEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to retrieve Departments for. | |
| **id** | **string**| The Id of the Employee Role you want to retrieve Departments for. | |

### Return type

[**\SynergiTech\Staffology\Model\DepartmentMembership[]**](../Model/DepartmentMembership.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployeeRole()`

```php
getEmployeeRole($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\ContractEmployeeRoleResponse
```

Get Employee Role

Gets the Role specified.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The id of the Role you want to retrieve.

try {
    $result = $apiInstance->getEmployeeRole($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The id of the Role you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleResponse**](../Model/ContractEmployeeRoleResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployeeRoleAnalysisCategoryCodesEmployeeRole()`

```php
getEmployeeRoleAnalysisCategoryCodesEmployeeRole($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeResponse[]
```

Get Employee Role AnalysisCategoryCode

Gets AnalysisCategoryCode that are Assigned to an Employee Role.  You must have the multi-role feature enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to retrieve AnalysisCategoryCode for.
$id = 'id_example'; // string | The Id of the Employee Role you want to retrieve AnalysisCategoryCode for.

try {
    $result = $apiInstance->getEmployeeRoleAnalysisCategoryCodesEmployeeRole($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getEmployeeRoleAnalysisCategoryCodesEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to retrieve AnalysisCategoryCode for. | |
| **id** | **string**| The Id of the Employee Role you want to retrieve AnalysisCategoryCode for. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeResponse[]**](../Model/ContractEmployeeRoleAnalysisCategoryCodeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleAssumedPensionablePayEmployeeRole()`

```php
getRoleAssumedPensionablePayEmployeeRole($employerId, $employeeId, $roleId, $payPeriod, $leaveType, $leavePayType, $from): float
```

Calculate Assumed Pensionable Pay

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee.
$roleId = 'roleId_example'; // string | The Employee Role Id.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The frequency that this Employee Role is paid.
$leaveType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeaveType(); // \SynergiTech\Staffology\Model\LeaveType | The type of the Leave.
$leavePayType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeavePayType(); // \SynergiTech\Staffology\Model\LeavePayType | The pay type of the Leave.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date from which the Assumed Pensionable Pay is calculated.

try {
    $result = $apiInstance->getRoleAssumedPensionablePayEmployeeRole($employerId, $employeeId, $roleId, $payPeriod, $leaveType, $leavePayType, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getRoleAssumedPensionablePayEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee. | |
| **roleId** | **string**| The Employee Role Id. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The frequency that this Employee Role is paid. | [optional] |
| **leaveType** | [**\SynergiTech\Staffology\Model\LeaveType**](../Model/.md)| The type of the Leave. | [optional] |
| **leavePayType** | [**\SynergiTech\Staffology\Model\LeavePayType**](../Model/.md)| The pay type of the Leave. | [optional] |
| **from** | **\DateTime**| The date from which the Assumed Pensionable Pay is calculated. | [optional] |

### Return type

**float**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleWorkingPatternEmployeeRole()`

```php
getRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $roleWorkingPatternId): \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponse
```

Get Employee Role Working Pattern

Gets the Employee Role Working Pattern specified.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Employee Role you want to retrieve a Role Working Pattern for.
$roleWorkingPatternId = 'roleWorkingPatternId_example'; // string | The Id of the Employee Role Working Pattern you want to retrieve.

try {
    $result = $apiInstance->getRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $roleWorkingPatternId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->getRoleWorkingPatternEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Employee Role you want to retrieve a Role Working Pattern for. | |
| **roleWorkingPatternId** | **string**| The Id of the Employee Role Working Pattern you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponse**](../Model/ContractEmployeeRoleWorkingPatternResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexEmployeeRole()`

```php
indexEmployeeRole($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Employee Roles

Lists all Roles for an Employee.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee which you want to list Roles.

try {
    $result = $apiInstance->indexEmployeeRole($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->indexEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee which you want to list Roles. | |

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

## `listRoleWorkingPatternsEmployeeRole()`

```php
listRoleWorkingPatternsEmployeeRole($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponseItem[]
```

List Working Patterns for an Employee Role

Lists all Working Patterns for an Employee Role.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Employee Role you want to retrieve Employee Role Working Patterns for.

try {
    $result = $apiInstance->listRoleWorkingPatternsEmployeeRole($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->listRoleWorkingPatternsEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Employee Role you want to retrieve Employee Role Working Patterns for. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponseItem[]**](../Model/ContractEmployeeRoleWorkingPatternResponseItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCostCentreMembershipsEmployeeRole()`

```php
setCostCentreMembershipsEmployeeRole($employerId, $employeeId, $id, $employeeCostCentre): \SynergiTech\Staffology\Model\EmployeeCostCentre[]
```

Set Employee Role Cost Centres

Assigns Cost Centres to an Employee Role.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to set Cost Centres for.
$id = 'id_example'; // string | The Id of the Employee Role you want to set Cost Centres for.
$employeeCostCentre = array(new \SynergiTech\Staffology\Model\EmployeeCostCentre()); // \SynergiTech\Staffology\Model\EmployeeCostCentre[]

try {
    $result = $apiInstance->setCostCentreMembershipsEmployeeRole($employerId, $employeeId, $id, $employeeCostCentre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->setCostCentreMembershipsEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to set Cost Centres for. | |
| **id** | **string**| The Id of the Employee Role you want to set Cost Centres for. | |
| **employeeCostCentre** | [**\SynergiTech\Staffology\Model\EmployeeCostCentre[]**](../Model/EmployeeCostCentre.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeCostCentre[]**](../Model/EmployeeCostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDepartmentMembershipsEmployeeRole()`

```php
setDepartmentMembershipsEmployeeRole($employerId, $employeeId, $id, $departmentMembership): \SynergiTech\Staffology\Model\DepartmentMembership[]
```

Set Employee Role Departments

Assigns Departments to an Employee Role.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to set Departments for.
$id = 'id_example'; // string | The Id of the Employee Role you want to set Departments for.
$departmentMembership = array(new \SynergiTech\Staffology\Model\DepartmentMembership()); // \SynergiTech\Staffology\Model\DepartmentMembership[]

try {
    $result = $apiInstance->setDepartmentMembershipsEmployeeRole($employerId, $employeeId, $id, $departmentMembership);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->setDepartmentMembershipsEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to set Departments for. | |
| **id** | **string**| The Id of the Employee Role you want to set Departments for. | |
| **departmentMembership** | [**\SynergiTech\Staffology\Model\DepartmentMembership[]**](../Model/DepartmentMembership.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\DepartmentMembership[]**](../Model/DepartmentMembership.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setEmployeeRoleAnalysisCategoryCodesEmployeeRole()`

```php
setEmployeeRoleAnalysisCategoryCodesEmployeeRole($employerId, $employeeId, $id, $analysisCategoryId, $contractEmployeeRoleAnalysisCategoryCodeRequest): \SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeResponse[]
```

Set  Employee Role AnalysisCategorycode

Assigns AnalysisCategoryCode to an Employee Role.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to set AnalysisCategoryCode for.
$id = 'id_example'; // string | The Id of the Employee Role you want to set AnalysisCategoryCode for.
$analysisCategoryId = 'analysisCategoryId_example'; // string | The Id of the Analysis Category you want to set AnalysisCategoryCode for.
$contractEmployeeRoleAnalysisCategoryCodeRequest = array(new \SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeRequest()); // \SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeRequest[]

try {
    $result = $apiInstance->setEmployeeRoleAnalysisCategoryCodesEmployeeRole($employerId, $employeeId, $id, $analysisCategoryId, $contractEmployeeRoleAnalysisCategoryCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->setEmployeeRoleAnalysisCategoryCodesEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to set AnalysisCategoryCode for. | |
| **id** | **string**| The Id of the Employee Role you want to set AnalysisCategoryCode for. | |
| **analysisCategoryId** | **string**| The Id of the Analysis Category you want to set AnalysisCategoryCode for. | |
| **contractEmployeeRoleAnalysisCategoryCodeRequest** | [**\SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeRequest[]**](../Model/ContractEmployeeRoleAnalysisCategoryCodeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleAnalysisCategoryCodeResponse[]**](../Model/ContractEmployeeRoleAnalysisCategoryCodeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeeRole()`

```php
updateEmployeeRole($employerId, $employeeId, $id, $employeeRole): \SynergiTech\Staffology\Model\EmployeeRole
```

Update Employee Role

Updates a Role for the Employee.  You must have the multi-role feature enabled.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Role to update.
$employeeRole = new \SynergiTech\Staffology\Model\EmployeeRole(); // \SynergiTech\Staffology\Model\EmployeeRole

try {
    $result = $apiInstance->updateEmployeeRole($employerId, $employeeId, $id, $employeeRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->updateEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Role to update. | |
| **employeeRole** | [**\SynergiTech\Staffology\Model\EmployeeRole**](../Model/EmployeeRole.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeRole**](../Model/EmployeeRole.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoleWorkingPatternEmployeeRole()`

```php
updateRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $roleWorkingPatternId, $contractEmployeeRoleWorkingPatternRequest): \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponse
```

Update Employee Role Working Pattern

Updates a Working Pattern for the Employee Role.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for the Employee.
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Role belongs.
$id = 'id_example'; // string | The Id of the Role to which the Employee Role Working Pattern belongs.
$roleWorkingPatternId = 'roleWorkingPatternId_example'; // string | The Id of the Employee Role Working Pattern you want to update.
$contractEmployeeRoleWorkingPatternRequest = new \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternRequest(); // \SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternRequest

try {
    $result = $apiInstance->updateRoleWorkingPatternEmployeeRole($employerId, $employeeId, $id, $roleWorkingPatternId, $contractEmployeeRoleWorkingPatternRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeRoleApi->updateRoleWorkingPatternEmployeeRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for the Employee. | |
| **employeeId** | **string**| The Id of the Employee to which the Role belongs. | |
| **id** | **string**| The Id of the Role to which the Employee Role Working Pattern belongs. | |
| **roleWorkingPatternId** | **string**| The Id of the Employee Role Working Pattern you want to update. | |
| **contractEmployeeRoleWorkingPatternRequest** | [**\SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternRequest**](../Model/ContractEmployeeRoleWorkingPatternRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeRoleWorkingPatternResponse**](../Model/ContractEmployeeRoleWorkingPatternResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
