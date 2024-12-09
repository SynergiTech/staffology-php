# SynergiTech\Staffology\EmployerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyYearEndEmployer()**](EmployerApi.md#applyYearEndEmployer) | **PUT** /employers/{id}/YearEnd | Make Year End Changes |
| [**calendarEmployer()**](EmployerApi.md#calendarEmployer) | **GET** /employers/{id}/calendar | Get Employer Calendar |
| [**createEmployer()**](EmployerApi.md#createEmployer) | **POST** /employers | Create an Employer |
| [**customPayslipEmployer()**](EmployerApi.md#customPayslipEmployer) | **GET** /employers/{id}/custompayslip | Get Payslip Customisations |
| [**deleteEmployer()**](EmployerApi.md#deleteEmployer) | **DELETE** /employers/{id} | Delete an Employer |
| [**getAutomationSettingsEmployer()**](EmployerApi.md#getAutomationSettingsEmployer) | **GET** /employers/{id}/automation | Get Automation Settings |
| [**getEmployer()**](EmployerApi.md#getEmployer) | **GET** /employers/{id} | Get an Employer |
| [**getEmployerOpeningBalancesEmployer()**](EmployerApi.md#getEmployerOpeningBalancesEmployer) | **GET** /employers/{id}/openingbalances | Get EmployerOpeningBalances |
| [**getEvcOptInHistoryEmployer()**](EmployerApi.md#getEvcOptInHistoryEmployer) | **GET** /employers/{id}/evc | Get EVC OptIn History |
| [**getGroupMembershipsEmployer()**](EmployerApi.md#getGroupMembershipsEmployer) | **GET** /employers/{id}/groups | Get Employer Groups |
| [**importCsvEmployer()**](EmployerApi.md#importCsvEmployer) | **POST** /employers/import | Import CSV |
| [**indexEmployer()**](EmployerApi.md#indexEmployer) | **GET** /employers | List Employers |
| [**listUsersEmployer()**](EmployerApi.md#listUsersEmployer) | **GET** /employers/{id}/users | List Users |
| [**removeUserEmployer()**](EmployerApi.md#removeUserEmployer) | **DELETE** /employers/{id}/users/{userId} | Remove User |
| [**reviewYearEndEmployer()**](EmployerApi.md#reviewYearEndEmployer) | **GET** /employers/{id}/YearEnd | Review Year End Changes |
| [**rtiRequiringAttentionEmployer()**](EmployerApi.md#rtiRequiringAttentionEmployer) | **GET** /employers/{id}/rti/requiringattention | RTI Documents Requiring Attention |
| [**searchEmployeesEmployer()**](EmployerApi.md#searchEmployeesEmployer) | **GET** /employers/employees/search | Search Employees |
| [**searchEmployer()**](EmployerApi.md#searchEmployer) | **GET** /employers/search | Search Employers |
| [**setEvcOptInEmployer()**](EmployerApi.md#setEvcOptInEmployer) | **PUT** /employers/{id}/evc | Update EVC OptIn |
| [**setGroupMembershipsEmployer()**](EmployerApi.md#setGroupMembershipsEmployer) | **PUT** /employers/{id}/groups | Set Employer Groups |
| [**setOwnerEmployer()**](EmployerApi.md#setOwnerEmployer) | **PUT** /employers/{id}/users/owner | Set Owner |
| [**suggestPayCodeEmployer()**](EmployerApi.md#suggestPayCodeEmployer) | **GET** /employers/{id}/suggestPayrollCode | Suggest Payroll Code |
| [**updateAutomationSettingsEmployer()**](EmployerApi.md#updateAutomationSettingsEmployer) | **PUT** /employers/{id}/automation | Update Automation Settings |
| [**updateCustomPayslipEmployer()**](EmployerApi.md#updateCustomPayslipEmployer) | **POST** /employers/{id}/custompayslip | Update Payslip Customisations |
| [**updateEmployer()**](EmployerApi.md#updateEmployer) | **PUT** /employers/{id} | Update an Employer |
| [**updateEmployerOpeningBalancesEmployer()**](EmployerApi.md#updateEmployerOpeningBalancesEmployer) | **PUT** /employers/{id}/openingbalances | Update EmployerOpeningBalances |
| [**updateLogoEmployer()**](EmployerApi.md#updateLogoEmployer) | **POST** /employers/{id}/logo | Update Employer Logo |


## `applyYearEndEmployer()`

```php
applyYearEndEmployer($id, $requestBody): \SynergiTech\Staffology\Model\YearEnd
```

Make Year End Changes

Apply the changes for the year end and start the next tax year for the employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer
$requestBody = NULL; // array<string,mixed> | You can suppress the emailing of P60s and/or CIS Statements by supplying a value of true for dontEmailP60s and/or dontEmailCisStatements

try {
    $result = $apiInstance->applyYearEndEmployer($id, $requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->applyYearEndEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |
| **requestBody** | [**array<string,mixed>**](../Model/mixed.md)| You can suppress the emailing of P60s and/or CIS Statements by supplying a value of true for dontEmailP60s and/or dontEmailCisStatements | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\YearEnd**](../Model/YearEnd.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calendarEmployer()`

```php
calendarEmployer($id, $from, $to): \SynergiTech\Staffology\Model\CalendarEntry[]
```

Get Employer Calendar

Get a list of upcoming CalendarEntry for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->calendarEmployer($id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->calendarEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer. | |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CalendarEntry[]**](../Model/CalendarEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmployer()`

```php
createEmployer($employer): \SynergiTech\Staffology\Model\Employer
```

Create an Employer

Use this method to create a new Employer  The only required field is the Employer name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employer = new \SynergiTech\Staffology\Model\Employer(); // \SynergiTech\Staffology\Model\Employer

try {
    $result = $apiInstance->createEmployer($employer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->createEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employer** | [**\SynergiTech\Staffology\Model\Employer**](../Model/Employer.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Employer**](../Model/Employer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customPayslipEmployer()`

```php
customPayslipEmployer($id): \SynergiTech\Staffology\Model\PayslipCustomisation
```

Get Payslip Customisations

Get the settings used to customise PaySlips for this Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want customisations for.

try {
    $result = $apiInstance->customPayslipEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->customPayslipEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want customisations for. | |

### Return type

[**\SynergiTech\Staffology\Model\PayslipCustomisation**](../Model/PayslipCustomisation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmployer()`

```php
deleteEmployer($id)
```

Delete an Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to delete.

try {
    $apiInstance->deleteEmployer($id);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->deleteEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to delete. | |

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

## `getAutomationSettingsEmployer()`

```php
getAutomationSettingsEmployer($id): \SynergiTech\Staffology\Model\AutomationSettings
```

Get Automation Settings

Returns the AutomationSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getAutomationSettingsEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->getAutomationSettingsEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\AutomationSettings**](../Model/AutomationSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployer()`

```php
getEmployer($id): \SynergiTech\Staffology\Model\Employer
```

Get an Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to retrieve.

try {
    $result = $apiInstance->getEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->getEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Employer**](../Model/Employer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployerOpeningBalancesEmployer()`

```php
getEmployerOpeningBalancesEmployer($id): \SynergiTech\Staffology\Model\EmployerOpeningBalances
```

Get EmployerOpeningBalances

Returns the EmployerOpeningBalances for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getEmployerOpeningBalancesEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->getEmployerOpeningBalancesEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerOpeningBalances**](../Model/EmployerOpeningBalances.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEvcOptInHistoryEmployer()`

```php
getEvcOptInHistoryEmployer($id): \SynergiTech\Staffology\Model\EmployerEvcOptInHistory[]
```

Get EVC OptIn History

Gets the history of changes to the EVC OptIn setting for the employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getEvcOptInHistoryEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->getEvcOptInHistoryEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerEvcOptInHistory[]**](../Model/EmployerEvcOptInHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupMembershipsEmployer()`

```php
getGroupMembershipsEmployer($id): \SynergiTech\Staffology\Model\EmployerGroupMembership[]
```

Get Employer Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to retrieve Groups for.

try {
    $result = $apiInstance->getGroupMembershipsEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->getGroupMembershipsEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to retrieve Groups for. | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerGroupMembership[]**](../Model/EmployerGroupMembership.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsvEmployer()`

```php
importCsvEmployer($previewOnly, $file): \SynergiTech\Staffology\Model\Item[]
```

Import CSV

Import employers from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$previewOnly = false; // bool | Set to true and nothing will be imported but you'll be shown a preview of the data.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importCsvEmployer($previewOnly, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->importCsvEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **previewOnly** | **bool**| Set to true and nothing will be imported but you&#39;ll be shown a preview of the data. | [optional] [default to false] |
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

## `indexEmployer()`

```php
indexEmployer($employerGroupCode): \SynergiTech\Staffology\Model\Item[]
```

List Employers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerGroupCode = 'employerGroupCode_example'; // string | Optionally specify the code of an EmployerGroup to only see employers that are a member of that group.

try {
    $result = $apiInstance->indexEmployer($employerGroupCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->indexEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerGroupCode** | **string**| Optionally specify the code of an EmployerGroup to only see employers that are a member of that group. | [optional] |

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

## `listUsersEmployer()`

```php
listUsersEmployer($id): \SynergiTech\Staffology\Model\Item[]
```

List Users

Returns a list of Users that have access to the given Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want a list of Users for.

try {
    $result = $apiInstance->listUsersEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->listUsersEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want a list of Users for. | |

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

## `removeUserEmployer()`

```php
removeUserEmployer($id, $userId)
```

Remove User

Removes a User from an Employer.  You cannot remove Users that are marked as the owner of the Employer.  You must be the owner of the Employer in order to remove other Users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to remove the User from.
$userId = 'userId_example'; // string | The Id of the User you want to remove.

try {
    $apiInstance->removeUserEmployer($id, $userId);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->removeUserEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to remove the User from. | |
| **userId** | **string**| The Id of the User you want to remove. | |

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

## `reviewYearEndEmployer()`

```php
reviewYearEndEmployer($id): \SynergiTech\Staffology\Model\YearEnd
```

Review Year End Changes

View the changes that will be made when you start the next tax year for the employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->reviewYearEndEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->reviewYearEndEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\YearEnd**](../Model/YearEnd.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rtiRequiringAttentionEmployer()`

```php
rtiRequiringAttentionEmployer($id): \SynergiTech\Staffology\Model\Item[]
```

RTI Documents Requiring Attention

Returns all RTI documents that have a Submission Status of NotSubmitted or ErrorResponse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->rtiRequiringAttentionEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->rtiRequiringAttentionEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |

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

## `searchEmployeesEmployer()`

```php
searchEmployeesEmployer($query, $exludeCisSubContactors): \SynergiTech\Staffology\Model\Item[]
```

Search Employees

Search all employers for an employee based on their name or payroll code.  Ensure your query is at least 3 characters long or you wont get any results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | The search string (at least 3 characters).
$exludeCisSubContactors = false; // bool | If set to true, then we'll only search employees that aren't labeled as CIS Subcontractors

try {
    $result = $apiInstance->searchEmployeesEmployer($query, $exludeCisSubContactors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->searchEmployeesEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| The search string (at least 3 characters). | [optional] |
| **exludeCisSubContactors** | **bool**| If set to true, then we&#39;ll only search employees that aren&#39;t labeled as CIS Subcontractors | [optional] [default to false] |

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

## `searchEmployer()`

```php
searchEmployer($query): \SynergiTech\Staffology\Model\Item[]
```

Search Employers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string

try {
    $result = $apiInstance->searchEmployer($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->searchEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**|  | [optional] |

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

## `setEvcOptInEmployer()`

```php
setEvcOptInEmployer($id, $body)
```

Update EVC OptIn

Sets the EVC OptIn setting for the employer.  A boolean value needs to be sent in the body to indicate if the employer is opted in.  So sending false would result in the employer being opted out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer
$body = True; // bool

try {
    $apiInstance->setEvcOptInEmployer($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->setEvcOptInEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |
| **body** | **bool**|  | [optional] |

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

## `setGroupMembershipsEmployer()`

```php
setGroupMembershipsEmployer($id, $employerGroupMembership): \SynergiTech\Staffology\Model\EmployerGroupMembership[]
```

Set Employer Groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to set Groups for.
$employerGroupMembership = array(new \SynergiTech\Staffology\Model\EmployerGroupMembership()); // \SynergiTech\Staffology\Model\EmployerGroupMembership[]

try {
    $result = $apiInstance->setGroupMembershipsEmployer($id, $employerGroupMembership);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->setGroupMembershipsEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to set Groups for. | |
| **employerGroupMembership** | [**\SynergiTech\Staffology\Model\EmployerGroupMembership[]**](../Model/EmployerGroupMembership.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerGroupMembership[]**](../Model/EmployerGroupMembership.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOwnerEmployer()`

```php
setOwnerEmployer($id, $body)
```

Set Owner

Sets the owner for the employer. You must be the owner of the Employer to set this value.  The user you are setting as the owner must already have the role Admin.  You can get a list of users from the ListUsers endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to change the ownership of.
$body = 'body_example'; // string | The Id of the User you want a change ownership to. They must already be a user for this employer and have the admin role assigned to them.

try {
    $apiInstance->setOwnerEmployer($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->setOwnerEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to change the ownership of. | |
| **body** | **string**| The Id of the User you want a change ownership to. They must already be a user for this employer and have the admin role assigned to them. | [optional] |

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

## `suggestPayCodeEmployer()`

```php
suggestPayCodeEmployer($id): string
```

Suggest Payroll Code

This helper method returns a unique code for the next Employee that you create for the specified Employer.  You don't have to use the value provided, you can use any value that is unique across Employees for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want a suggestion for.

try {
    $result = $apiInstance->suggestPayCodeEmployer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->suggestPayCodeEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want a suggestion for. | |

### Return type

**string**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomationSettingsEmployer()`

```php
updateAutomationSettingsEmployer($id, $automationSettings): \SynergiTech\Staffology\Model\AutomationSettings
```

Update Automation Settings

Updates the AutomationSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer
$automationSettings = new \SynergiTech\Staffology\Model\AutomationSettings(); // \SynergiTech\Staffology\Model\AutomationSettings

try {
    $result = $apiInstance->updateAutomationSettingsEmployer($id, $automationSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->updateAutomationSettingsEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |
| **automationSettings** | [**\SynergiTech\Staffology\Model\AutomationSettings**](../Model/AutomationSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\AutomationSettings**](../Model/AutomationSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomPayslipEmployer()`

```php
updateCustomPayslipEmployer($id, $payslipCustomisation): \SynergiTech\Staffology\Model\PayslipCustomisation
```

Update Payslip Customisations

Set the settings used to customise PaySlips for this Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want customisations for.
$payslipCustomisation = new \SynergiTech\Staffology\Model\PayslipCustomisation(); // \SynergiTech\Staffology\Model\PayslipCustomisation

try {
    $result = $apiInstance->updateCustomPayslipEmployer($id, $payslipCustomisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->updateCustomPayslipEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want customisations for. | |
| **payslipCustomisation** | [**\SynergiTech\Staffology\Model\PayslipCustomisation**](../Model/PayslipCustomisation.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayslipCustomisation**](../Model/PayslipCustomisation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployer()`

```php
updateEmployer($id, $employer): \SynergiTech\Staffology\Model\Employer
```

Update an Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to update.
$employer = new \SynergiTech\Staffology\Model\Employer(); // \SynergiTech\Staffology\Model\Employer

try {
    $result = $apiInstance->updateEmployer($id, $employer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->updateEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to update. | |
| **employer** | [**\SynergiTech\Staffology\Model\Employer**](../Model/Employer.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Employer**](../Model/Employer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployerOpeningBalancesEmployer()`

```php
updateEmployerOpeningBalancesEmployer($id, $employerOpeningBalances): \SynergiTech\Staffology\Model\EmployerOpeningBalances
```

Update EmployerOpeningBalances

Updates the EmployerOpeningBalances for the Employer for their StartYear

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer
$employerOpeningBalances = new \SynergiTech\Staffology\Model\EmployerOpeningBalances(); // \SynergiTech\Staffology\Model\EmployerOpeningBalances

try {
    $result = $apiInstance->updateEmployerOpeningBalancesEmployer($id, $employerOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->updateEmployerOpeningBalancesEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer | |
| **employerOpeningBalances** | [**\SynergiTech\Staffology\Model\EmployerOpeningBalances**](../Model/EmployerOpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerOpeningBalances**](../Model/EmployerOpeningBalances.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLogoEmployer()`

```php
updateLogoEmployer($id, $file): \SynergiTech\Staffology\Model\Employer
```

Update Employer Logo

If you already have a URL for the employer Logo then you can just set the LogoUrl property of the Employer.  Alternatively, submit a logo here and we'll upload it and set the LogoUrl for you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Employer you want to update.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->updateLogoEmployer($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerApi->updateLogoEmployer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Employer you want to update. | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Employer**](../Model/Employer.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
