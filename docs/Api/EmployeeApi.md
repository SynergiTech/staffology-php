# SynergiTech\Staffology\EmployeeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyPayIncreaseEmployee()**](EmployeeApi.md#applyPayIncreaseEmployee) | **PUT** /employers/{employerId}/employees/payincrease | Apply Pay Increase |
| [**applyPayOptionsEmployee()**](EmployeeApi.md#applyPayOptionsEmployee) | **PUT** /employers/{employerId}/employees/payoptions | Apply PayOptions |
| [**averageWeeklyEarningsEmployee()**](EmployeeApi.md#averageWeeklyEarningsEmployee) | **GET** /employers/{employerId}/employees/{id}/awe | Average Weekly Earnings |
| [**baseDailyRateEmployee()**](EmployeeApi.md#baseDailyRateEmployee) | **GET** /employers/{employerId}/employees/{id}/basedailyrate | Calculate Base Daily Rate (deprecated) |
| [**baseHourlyRateEmployee()**](EmployeeApi.md#baseHourlyRateEmployee) | **GET** /employers/{employerId}/employees/{id}/basehourlyrate | Calculate Base Hourly Rate (deprecated) |
| [**createEmployee()**](EmployeeApi.md#createEmployee) | **POST** /employers/{employerId}/employees | Create a new Employee |
| [**deleteEmployee()**](EmployeeApi.md#deleteEmployee) | **DELETE** /employers/{employerId}/employees/{id} | Delete an Employee |
| [**deleteMultipleEmployee()**](EmployeeApi.md#deleteMultipleEmployee) | **POST** /employers/{employerId}/employees/delete | Delete Employees |
| [**deletePhotoEmployee()**](EmployeeApi.md#deletePhotoEmployee) | **DELETE** /employers/{employerId}/employees/{id}/photo | Delete Photo |
| [**expiringRtwEmployee()**](EmployeeApi.md#expiringRtwEmployee) | **GET** /employers/{employerId}/employees/expiring-rtw | Expiring RightToWork |
| [**getDepartmentMembershipsEmployee()**](EmployeeApi.md#getDepartmentMembershipsEmployee) | **GET** /employers/{employerId}/employees/{id}/departments | Get Employee Departments |
| [**getEmployee()**](EmployeeApi.md#getEmployee) | **GET** /employers/{employerId}/employees/{id} | Get an Employee |
| [**getEmployeeCostCentresEmployee()**](EmployeeApi.md#getEmployeeCostCentresEmployee) | **GET** /employers/{employerId}/employees/{id}/costcentres | Get Employee Cost Centres |
| [**getEvcSettingsEmployee()**](EmployeeApi.md#getEvcSettingsEmployee) | **GET** /employers/{employerId}/employees/{id}/evcsettings | Get EvcSettings |
| [**importCsvEmployee()**](EmployeeApi.md#importCsvEmployee) | **POST** /employers/{employerId}/employees/import | Import CSV |
| [**indexEmployee()**](EmployeeApi.md#indexEmployee) | **GET** /employers/{employerId}/employees | List Employees |
| [**leaversEmployee()**](EmployeeApi.md#leaversEmployee) | **GET** /employers/{employerId}/employees/leavers | List Leavers |
| [**markAsLeaversEmployee()**](EmployeeApi.md#markAsLeaversEmployee) | **PUT** /employers/{employerId}/employees/leavers | Mark as Leavers |
| [**minimumWageEmployee()**](EmployeeApi.md#minimumWageEmployee) | **GET** /employers/{employerId}/employees/{id}/{taxYear}/minimum-wage | Minimum Wage |
| [**payRunEntriesEmployee()**](EmployeeApi.md#payRunEntriesEmployee) | **GET** /employers/{employerId}/employees/{id}/payrunentries/{taxYear} | PayRunEntries for Employee |
| [**reHireEmployee()**](EmployeeApi.md#reHireEmployee) | **GET** /employers/{employerId}/employees/{id}/rehire | Rehire an Employee |
| [**resetEmployeeHolidayAccrualSchemeEmployee()**](EmployeeApi.md#resetEmployeeHolidayAccrualSchemeEmployee) | **PUT** /employers/{employerId}/employees/reset-holiday-scheme | Resets employee accrual scheme |
| [**searchByPayrollCodeEmployee()**](EmployeeApi.md#searchByPayrollCodeEmployee) | **GET** /employers/{employerId}/employees/search/payrollcode | Get Employee by Payroll Code |
| [**searchEmployee()**](EmployeeApi.md#searchEmployee) | **GET** /employers/{employerId}/employees/search | Search Employer for Employees |
| [**setDepartmentMembershipsEmployee()**](EmployeeApi.md#setDepartmentMembershipsEmployee) | **PUT** /employers/{employerId}/employees/{id}/departments | Set Employee Departments |
| [**setEmployeeCostCentresEmployee()**](EmployeeApi.md#setEmployeeCostCentresEmployee) | **PUT** /employers/{employerId}/employees/{id}/costcentres | Set Employee Cost Centres |
| [**setOnHoldEmployee()**](EmployeeApi.md#setOnHoldEmployee) | **PUT** /employers/{employerId}/employees/onhold | Mark as On Hold |
| [**updateEmployee()**](EmployeeApi.md#updateEmployee) | **PUT** /employers/{employerId}/employees/{id} | Update an Employee |
| [**updateEvcSettingsEmployee()**](EmployeeApi.md#updateEvcSettingsEmployee) | **PUT** /employers/{employerId}/employees/{id}/evcsettings | Update EvcSettings |
| [**updatePhotoEmployee()**](EmployeeApi.md#updatePhotoEmployee) | **POST** /employers/{employerId}/employees/{id}/photo | Update Photo |


## `applyPayIncreaseEmployee()`

```php
applyPayIncreaseEmployee($employerId, $percentage, $allEmployees)
```

Apply Pay Increase

Increases the PayOptions.PayAmount and PayOptions.BaseHourlyRate by the percentage given.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the employees belong.
$percentage = 3.4; // float
$allEmployees = True; // bool | Set this to true

try {
    $apiInstance->applyPayIncreaseEmployee($employerId, $percentage, $allEmployees);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->applyPayIncreaseEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the employees belong. | |
| **percentage** | **float**|  | [optional] |
| **allEmployees** | **bool**| Set this to true | [optional] |

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

## `applyPayOptionsEmployee()`

```php
applyPayOptionsEmployee($employerId, $payOptions)
```

Apply PayOptions

Overwrite the PayOptions for all employees with the values provided.  Currently only the following fields are updated: period, payAmount, basis, payamountMultiplier, nationalMinimumWage and regularPaylines.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the employees belong.
$payOptions = new \SynergiTech\Staffology\Model\PayOptions(); // \SynergiTech\Staffology\Model\PayOptions

try {
    $apiInstance->applyPayOptionsEmployee($employerId, $payOptions);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->applyPayOptionsEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the employees belong. | |
| **payOptions** | [**\SynergiTech\Staffology\Model\PayOptions**](../Model/PayOptions.md)|  | [optional] |

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

## `averageWeeklyEarningsEmployee()`

```php
averageWeeklyEarningsEmployee($employerId, $id, $date, $leaveType, $secondaryDate, $tertiaryDate): \SynergiTech\Staffology\Model\AverageWeeklyEarnings
```

Average Weekly Earnings

Calculates the Average Weekly Earnings for an Employee at the given date.  You can optionally include a LeaveType and we'll adjust the given date accordingly  For example if you specify Maternity then it'll be moved back by 15 weeks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$id = 'id_example'; // string | The Employee Id.
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date at which you want to calculate the earnings from.
$leaveType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeaveType(); // \SynergiTech\Staffology\Model\LeaveType | 
$secondaryDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 
$tertiaryDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | 

try {
    $result = $apiInstance->averageWeeklyEarningsEmployee($employerId, $id, $date, $leaveType, $secondaryDate, $tertiaryDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->averageWeeklyEarningsEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **id** | **string**| The Employee Id. | |
| **date** | **\DateTime**| The date at which you want to calculate the earnings from. | [optional] |
| **leaveType** | [**\SynergiTech\Staffology\Model\LeaveType**](../Model/.md)|  | [optional] |
| **secondaryDate** | **\DateTime**|  | [optional] |
| **tertiaryDate** | **\DateTime**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\AverageWeeklyEarnings**](../Model/AverageWeeklyEarnings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `baseDailyRateEmployee()`

```php
baseDailyRateEmployee($employerId, $id, $payPeriod, $payBasis, $payAmount): float
```

Calculate Base Daily Rate (deprecated)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = 'id_example'; // string | The Employee Id.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The frequency that this Employee is paid.
$payBasis = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayBasis(); // \SynergiTech\Staffology\Model\PayBasis | 
$payAmount = 3.4; // float | The amount the Employee is regularly paid each period.

try {
    $result = $apiInstance->baseDailyRateEmployee($employerId, $id, $payPeriod, $payBasis, $payAmount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->baseDailyRateEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | **string**| The Employee Id. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The frequency that this Employee is paid. | [optional] |
| **payBasis** | [**\SynergiTech\Staffology\Model\PayBasis**](../Model/.md)|  | [optional] |
| **payAmount** | **float**| The amount the Employee is regularly paid each period. | [optional] |

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

## `baseHourlyRateEmployee()`

```php
baseHourlyRateEmployee($employerId, $id, $payPeriod, $payBasis, $payAmount): float
```

Calculate Base Hourly Rate (deprecated)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = 'id_example'; // string | The Employee Id.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The frequency that this Employee is paid.
$payBasis = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayBasis(); // \SynergiTech\Staffology\Model\PayBasis | 
$payAmount = 3.4; // float | The amount the Employee is regularly paid each period.

try {
    $result = $apiInstance->baseHourlyRateEmployee($employerId, $id, $payPeriod, $payBasis, $payAmount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->baseHourlyRateEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | **string**| The Employee Id. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The frequency that this Employee is paid. | [optional] |
| **payBasis** | [**\SynergiTech\Staffology\Model\PayBasis**](../Model/.md)|  | [optional] |
| **payAmount** | **float**| The amount the Employee is regularly paid each period. | [optional] |

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

## `createEmployee()`

```php
createEmployee($employerId, $contractCreateEmployeeRequest): \SynergiTech\Staffology\Model\ContractEmployeeResponse
```

Create a new Employee

Creates an Employee for the Employer specified.  If you don't provide PayOptions then the DefaultPayOptions from the Employer will be used

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer you are creating the Employee for
$contractCreateEmployeeRequest = new \SynergiTech\Staffology\Model\ContractCreateEmployeeRequest(); // \SynergiTech\Staffology\Model\ContractCreateEmployeeRequest

try {
    $result = $apiInstance->createEmployee($employerId, $contractCreateEmployeeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->createEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer you are creating the Employee for | |
| **contractCreateEmployeeRequest** | [**\SynergiTech\Staffology\Model\ContractCreateEmployeeRequest**](../Model/ContractCreateEmployeeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeResponse**](../Model/ContractEmployeeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmployee()`

```php
deleteEmployee($employerId, $id)
```

Delete an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to delete.

try {
    $apiInstance->deleteEmployee($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->deleteEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to delete. | |

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

## `deleteMultipleEmployee()`

```php
deleteMultipleEmployee($employerId, $requestBody)
```

Delete Employees

Used to delete multiple employees.  The body should contain an array of Ids to identify the employees to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employees belong
$requestBody = array('requestBody_example'); // string[]

try {
    $apiInstance->deleteMultipleEmployee($employerId, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->deleteMultipleEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employees belong | |
| **requestBody** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `deletePhotoEmployee()`

```php
deletePhotoEmployee($employerId, $id)
```

Delete Photo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string | The Id of the Employee you want to update.

try {
    $apiInstance->deletePhotoEmployee($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->deletePhotoEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**| The Id of the Employee you want to update. | |

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

## `expiringRtwEmployee()`

```php
expiringRtwEmployee($employerId, $numberOfDays): \SynergiTech\Staffology\Model\Item[]
```

Expiring RightToWork

Returns a list of Item representing Employees that have a RightToWork with a DocumentExpiring date within the next numberOfDays days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to search.
$numberOfDays = 56; // int | The number of days in the future to look got expiry dates.

try {
    $result = $apiInstance->expiringRtwEmployee($employerId, $numberOfDays);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->expiringRtwEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to search. | |
| **numberOfDays** | **int**| The number of days in the future to look got expiry dates. | [optional] |

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

## `getDepartmentMembershipsEmployee()`

```php
getDepartmentMembershipsEmployee($employerId, $id): \SynergiTech\Staffology\Model\DepartmentMembership[]
```

Get Employee Departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to retrieve Departments for.

try {
    $result = $apiInstance->getDepartmentMembershipsEmployee($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getDepartmentMembershipsEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to retrieve Departments for. | |

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

## `getEmployee()`

```php
getEmployee($employerId, $id): \SynergiTech\Staffology\Model\ContractEmployeeResponse
```

Get an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to retrieve.

try {
    $result = $apiInstance->getEmployee($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeResponse**](../Model/ContractEmployeeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployeeCostCentresEmployee()`

```php
getEmployeeCostCentresEmployee($employerId, $id): \SynergiTech\Staffology\Model\EmployeeCostCentre[]
```

Get Employee Cost Centres

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to retrieve CostCenntres for.

try {
    $result = $apiInstance->getEmployeeCostCentresEmployee($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getEmployeeCostCentresEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to retrieve CostCenntres for. | |

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

## `getEvcSettingsEmployee()`

```php
getEvcSettingsEmployee($employerId, $id): \SynergiTech\Staffology\Model\EvcSettings
```

Get EvcSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee for which you want to retrieve EvcSettings.

try {
    $result = $apiInstance->getEvcSettingsEmployee($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getEvcSettingsEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee for which you want to retrieve EvcSettings. | |

### Return type

[**\SynergiTech\Staffology\Model\EvcSettings**](../Model/EvcSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsvEmployee()`

```php
importCsvEmployee($employerId, $format, $previewOnly, $allowUpdates, $file): \SynergiTech\Staffology\Model\Item[]
```

Import CSV

Import employee data from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$format = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\CsvFileFormat(); // \SynergiTech\Staffology\Model\CsvFileFormat | The format of the CSV file.
$previewOnly = false; // bool | Set to true and nothing will be imported but you'll be shown a preview of the data.
$allowUpdates = false; // bool | Set to true and if the payroll code matches an existing employee then that employee will be updated.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importCsvEmployee($employerId, $format, $previewOnly, $allowUpdates, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->importCsvEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **format** | [**\SynergiTech\Staffology\Model\CsvFileFormat**](../Model/.md)| The format of the CSV file. | [optional] |
| **previewOnly** | **bool**| Set to true and nothing will be imported but you&#39;ll be shown a preview of the data. | [optional] [default to false] |
| **allowUpdates** | **bool**| Set to true and if the payroll code matches an existing employee then that employee will be updated. | [optional] [default to false] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexEmployee()`

```php
indexEmployee($employerId, $pageNum, $pageSize, $status, $deptCode, $pensionSchemeId, $sortBy, $sortDescending): \SynergiTech\Staffology\Model\Item[]
```

List Employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to see Employees
$pageNum = 56; // int | Zero-based page number, used in conjunction with pageSize
$pageSize = 56; // int | The number of items per page
$status = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\EmployeeStatus(); // \SynergiTech\Staffology\Model\EmployeeStatus | Restrict the results to employees with the given status
$deptCode = 'deptCode_example'; // string | If specified then only employees assigned to this department code will be listed
$pensionSchemeId = 'pensionSchemeId_example'; // string | If specified then only employees enrolled into the given pension scheme will be listed.              If empty guid(00000000-0000-0000-0000-000000000000) is passed in all employees not enrolled into any pension scheme will be listed.
$sortBy = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\EmployeeSortBy(); // \SynergiTech\Staffology\Model\EmployeeSortBy | Specifies the field by which to sort the employees. Default is EmployeeSortBy.None.
$sortDescending = false; // bool | Specifies whether the sorting should be in descending order. Default is false.

try {
    $result = $apiInstance->indexEmployee($employerId, $pageNum, $pageSize, $status, $deptCode, $pensionSchemeId, $sortBy, $sortDescending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->indexEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to see Employees | |
| **pageNum** | **int**| Zero-based page number, used in conjunction with pageSize | [optional] |
| **pageSize** | **int**| The number of items per page | [optional] |
| **status** | [**\SynergiTech\Staffology\Model\EmployeeStatus**](../Model/.md)| Restrict the results to employees with the given status | [optional] |
| **deptCode** | **string**| If specified then only employees assigned to this department code will be listed | [optional] |
| **pensionSchemeId** | **string**| If specified then only employees enrolled into the given pension scheme will be listed.              If empty guid(00000000-0000-0000-0000-000000000000) is passed in all employees not enrolled into any pension scheme will be listed. | [optional] |
| **sortBy** | [**\SynergiTech\Staffology\Model\EmployeeSortBy**](../Model/.md)| Specifies the field by which to sort the employees. Default is EmployeeSortBy.None. | [optional] |
| **sortDescending** | **bool**| Specifies whether the sorting should be in descending order. Default is false. | [optional] [default to false] |

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

## `leaversEmployee()`

```php
leaversEmployee($employerId, $onlyUnsentP45s): \SynergiTech\Staffology\Model\Item[]
```

List Leavers

Returns a list of all Employees that have a leaving date set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to see Leavers
$onlyUnsentP45s = false; // bool | If set to true then only employees that don't have the P45Sent set to true will be returned

try {
    $result = $apiInstance->leaversEmployee($employerId, $onlyUnsentP45s);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->leaversEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to see Leavers | |
| **onlyUnsentP45s** | **bool**| If set to true then only employees that don&#39;t have the P45Sent set to true will be returned | [optional] [default to false] |

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

## `markAsLeaversEmployee()`

```php
markAsLeaversEmployee($employerId, $date, $emailP45, $requestBody)
```

Mark as Leavers

Used to mark multiple employees as leavers.  The body should contain an array of Ids to identify the employees to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employees belong
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date the employees left or are leaving
$emailP45 = True; // bool | If set to true, the employee will be email a P45 if they have an email address
$requestBody = array('requestBody_example'); // string[]

try {
    $apiInstance->markAsLeaversEmployee($employerId, $date, $emailP45, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->markAsLeaversEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employees belong | |
| **date** | **\DateTime**| The date the employees left or are leaving | [optional] |
| **emailP45** | **bool**| If set to true, the employee will be email a P45 if they have an email address | [optional] |
| **requestBody** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `minimumWageEmployee()`

```php
minimumWageEmployee($employerId, $id, $taxYear, $date): float
```

Minimum Wage

Calculates the National Minimum Wage for this employee for the given TaxYear and based on  their age at the given date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$id = 'id_example'; // string | The Employee Id.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date for which we should calculate the employees age, for not provided we'll use today's date.

try {
    $result = $apiInstance->minimumWageEmployee($employerId, $id, $taxYear, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->minimumWageEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **id** | **string**| The Employee Id. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear | |
| **date** | **\DateTime**| The date for which we should calculate the employees age, for not provided we&#39;ll use today&#39;s date. | [optional] |

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

## `payRunEntriesEmployee()`

```php
payRunEntriesEmployee($employerId, $id, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

PayRunEntries for Employee

List PayRunEntries for the given Employee in the specified TaxYear

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to search.
$id = 'id_example'; // string | The Employee Id.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear for which you want to list PayRunEntries.

try {
    $result = $apiInstance->payRunEntriesEmployee($employerId, $id, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->payRunEntriesEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to search. | |
| **id** | **string**| The Employee Id. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear for which you want to list PayRunEntries. | |

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

## `reHireEmployee()`

```php
reHireEmployee($employerId, $id)
```

Rehire an Employee

If an employee has left and you want to rehire him/her, then this method will create a copy of the employee record but with a new payroll code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to rehire.

try {
    $apiInstance->reHireEmployee($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->reHireEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to rehire. | |

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

## `resetEmployeeHolidayAccrualSchemeEmployee()`

```php
resetEmployeeHolidayAccrualSchemeEmployee($employerId, $requestBody)
```

Resets employee accrual scheme

Resets employee accrual scheme fields to zero and adds a update accrual reset date in employee table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$requestBody = array('requestBody_example'); // string[] | UnqiueId of the employees for setting the Holiday Scheme Reset Date

try {
    $apiInstance->resetEmployeeHolidayAccrualSchemeEmployee($employerId, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->resetEmployeeHolidayAccrualSchemeEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **requestBody** | [**string[]**](../Model/string.md)| UnqiueId of the employees for setting the Holiday Scheme Reset Date | [optional] |

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

## `searchByPayrollCodeEmployee()`

```php
searchByPayrollCodeEmployee($employerId, $code): \SynergiTech\Staffology\Model\Item
```

Get Employee by Payroll Code

Get an employee by their payroll code. Will return an Item that contains the Id for you to retrieve the full Employee record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$code = 'code_example'; // string | The payroll code to look for.

try {
    $result = $apiInstance->searchByPayrollCodeEmployee($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->searchByPayrollCodeEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **code** | **string**| The payroll code to look for. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEmployee()`

```php
searchEmployee($employerId, $query, $exludeCisSubContactors): \SynergiTech\Staffology\Model\Item[]
```

Search Employer for Employees

Search for an employee of the specified employer based on their name or payroll code.  Ensure your query is at least 3 characters long or you wont get any results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to search.
$query = 'query_example'; // string | The search string (at least 3 characters).
$exludeCisSubContactors = false; // bool | If set to true, then we'll only search employees that aren't labelled as CIS Subcontractors

try {
    $result = $apiInstance->searchEmployee($employerId, $query, $exludeCisSubContactors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->searchEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to search. | |
| **query** | **string**| The search string (at least 3 characters). | [optional] |
| **exludeCisSubContactors** | **bool**| If set to true, then we&#39;ll only search employees that aren&#39;t labelled as CIS Subcontractors | [optional] [default to false] |

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

## `setDepartmentMembershipsEmployee()`

```php
setDepartmentMembershipsEmployee($employerId, $id, $departmentMembership): \SynergiTech\Staffology\Model\DepartmentMembership[]
```

Set Employee Departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to set Departments for.
$departmentMembership = array(new \SynergiTech\Staffology\Model\DepartmentMembership()); // \SynergiTech\Staffology\Model\DepartmentMembership[]

try {
    $result = $apiInstance->setDepartmentMembershipsEmployee($employerId, $id, $departmentMembership);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->setDepartmentMembershipsEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to set Departments for. | |
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

## `setEmployeeCostCentresEmployee()`

```php
setEmployeeCostCentresEmployee($employerId, $id, $employeeCostCentre): \SynergiTech\Staffology\Model\EmployeeCostCentre[]
```

Set Employee Cost Centres

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to set CostCentres for.
$employeeCostCentre = array(new \SynergiTech\Staffology\Model\EmployeeCostCentre()); // \SynergiTech\Staffology\Model\EmployeeCostCentre[]

try {
    $result = $apiInstance->setEmployeeCostCentresEmployee($employerId, $id, $employeeCostCentre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->setEmployeeCostCentresEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to set CostCentres for. | |
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

## `setOnHoldEmployee()`

```php
setOnHoldEmployee($employerId, $onHold, $requestBody)
```

Mark as On Hold

Used to mark multiple employees as On Hold or not On Hold.  The body should contain an array of Ids to identify the employees to update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employees belong
$onHold = True; // bool | The OnHold status to set
$requestBody = array('requestBody_example'); // string[]

try {
    $apiInstance->setOnHoldEmployee($employerId, $onHold, $requestBody);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->setOnHoldEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employees belong | |
| **onHold** | **bool**| The OnHold status to set | [optional] |
| **requestBody** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `updateEmployee()`

```php
updateEmployee($employerId, $id, $contractUpdateEmployeeRequest): \SynergiTech\Staffology\Model\ContractEmployeeResponse
```

Update an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee you want to update.
$contractUpdateEmployeeRequest = new \SynergiTech\Staffology\Model\ContractUpdateEmployeeRequest(); // \SynergiTech\Staffology\Model\ContractUpdateEmployeeRequest

try {
    $result = $apiInstance->updateEmployee($employerId, $id, $contractUpdateEmployeeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee you want to update. | |
| **contractUpdateEmployeeRequest** | [**\SynergiTech\Staffology\Model\ContractUpdateEmployeeRequest**](../Model/ContractUpdateEmployeeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeResponse**](../Model/ContractEmployeeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEvcSettingsEmployee()`

```php
updateEvcSettingsEmployee($employerId, $id, $evcSettings): \SynergiTech\Staffology\Model\EvcSettings
```

Update EvcSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$id = 'id_example'; // string | The Id of the Employee for who you want to update EvcSettings.
$evcSettings = new \SynergiTech\Staffology\Model\EvcSettings(); // \SynergiTech\Staffology\Model\EvcSettings

try {
    $result = $apiInstance->updateEvcSettingsEmployee($employerId, $id, $evcSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->updateEvcSettingsEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **id** | **string**| The Id of the Employee for who you want to update EvcSettings. | |
| **evcSettings** | [**\SynergiTech\Staffology\Model\EvcSettings**](../Model/EvcSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EvcSettings**](../Model/EvcSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePhotoEmployee()`

```php
updatePhotoEmployee($employerId, $id, $file): \SynergiTech\Staffology\Model\ContractEmployeeResponse
```

Update Photo

If you already have a URL for the employee photo then you can just set the PhotoUrl property of the Employee.  Alternatively, submit an image here and we'll upload it, resize it to 200px squared and set the PhotoUrl for you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string | The Id of the Employee you want to update.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->updatePhotoEmployee($employerId, $id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->updatePhotoEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**| The Id of the Employee you want to update. | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractEmployeeResponse**](../Model/ContractEmployeeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
