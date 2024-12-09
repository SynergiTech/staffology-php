# SynergiTech\Staffology\ExternalDataApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizeExternalData()**](ExternalDataApi.md#authorizeExternalData) | **GET** /employers/{employerId}/external-data/{id}/authorize | Get Authorization Url |
| [**companiesExternalData()**](ExternalDataApi.md#companiesExternalData) | **GET** /employers/{employerId}/external-data/{id}/companies | List Companies |
| [**disconnectExternalData()**](ExternalDataApi.md#disconnectExternalData) | **GET** /employers/{employerId}/external-data/{id}/disconnect | Disconnect |
| [**employeeExternalData()**](ExternalDataApi.md#employeeExternalData) | **GET** /employers/{employerId}/external-data/{id}/employees/{employeeId} | Get Employee |
| [**employeeLogsExternalData()**](ExternalDataApi.md#employeeLogsExternalData) | **GET** /employers/{employerId}/external-data/{id}/employees/{employeeId}/logs | Get Employee Logs |
| [**employeesExternalData()**](ExternalDataApi.md#employeesExternalData) | **GET** /employers/{employerId}/external-data/{id}/employees | List Employees |
| [**getConfigDataExternalData()**](ExternalDataApi.md#getConfigDataExternalData) | **GET** /employers/{employerId}/external-data/{id}/config | Get Config Data |
| [**importEmployeesExternalData()**](ExternalDataApi.md#importEmployeesExternalData) | **POST** /employers/{employerId}/external-data/{id}/employees | Import Employees |
| [**listExternalData()**](ExternalDataApi.md#listExternalData) | **GET** /employers/{employerId}/external-data | List Providers |
| [**nominalCodesExternalData()**](ExternalDataApi.md#nominalCodesExternalData) | **GET** /employers/{employerId}/external-data/{id}/nominals | List Nominal Codes |
| [**pensionContributionsCsvExternalData()**](ExternalDataApi.md#pensionContributionsCsvExternalData) | **GET** /employers/{employerId}/external-data/{id}/contributions/{taxYear}/{payPeriod}/{periodNumber} | Contributions CSV File |
| [**postJournalExternalData()**](ExternalDataApi.md#postJournalExternalData) | **POST** /employers/{employerId}/external-data/{id}/{taxYear}/{payPeriod}/{periodNumber}/journal | Post Journal |
| [**postPaymentsExternalData()**](ExternalDataApi.md#postPaymentsExternalData) | **POST** /employers/{employerId}/external-data/{id}/{taxYear}/{payPeriod}/{periodNumber}/payments | Post Payments |
| [**pushEmployeesExternalData()**](ExternalDataApi.md#pushEmployeesExternalData) | **PUT** /employers/{employerId}/external-data/{id}/employees/push | Push Employees |
| [**pushP11DExternalData()**](ExternalDataApi.md#pushP11DExternalData) | **POST** /employers/{employerId}/external-data/{id}/p11d | Push P11D |
| [**pushP11DsExternalData()**](ExternalDataApi.md#pushP11DsExternalData) | **POST** /employers/{employerId}/external-data/{id}/p11ds | Push P11Ds |
| [**pushP45ExternalData()**](ExternalDataApi.md#pushP45ExternalData) | **POST** /employers/{employerId}/external-data/{id}/p45 | Push P45 |
| [**pushP45sExternalData()**](ExternalDataApi.md#pushP45sExternalData) | **POST** /employers/{employerId}/external-data/{id}/p45s | Push P45s |
| [**pushP60ExternalData()**](ExternalDataApi.md#pushP60ExternalData) | **POST** /employers/{employerId}/external-data/{id}/p60 | Push P60 |
| [**pushP60sExternalData()**](ExternalDataApi.md#pushP60sExternalData) | **POST** /employers/{employerId}/external-data/{id}/p60s | Push P60s |
| [**pushPayslipsExternalData()**](ExternalDataApi.md#pushPayslipsExternalData) | **POST** /employers/{employerId}/external-data/{id}/payslips | Push Payslips |
| [**pushPensionLetterExternalData()**](ExternalDataApi.md#pushPensionLetterExternalData) | **POST** /employers/{employerId}/external-data/{id}/pension-letter | Push Pension Letter |
| [**pushPensionLettersExternalData()**](ExternalDataApi.md#pushPensionLettersExternalData) | **POST** /employers/{employerId}/external-data/{id}/pension-letters | Push Pension Letters |
| [**respondExternalData()**](ExternalDataApi.md#respondExternalData) | **GET** /external-data/{id}/respond | 3rd Party Response |
| [**setConfigDataExternalData()**](ExternalDataApi.md#setConfigDataExternalData) | **PUT** /employers/{employerId}/external-data/{id}/config | Set Config Data |
| [**setCredentialsExternalData()**](ExternalDataApi.md#setCredentialsExternalData) | **PUT** /employers/{employerId}/external-data/{id}/authorize | Set Credentials |
| [**syncAllEmployeesExternalData()**](ExternalDataApi.md#syncAllEmployeesExternalData) | **GET** /employers/{employerId}/external-data/{id}/employees/i/sync-all | Sync Employees |
| [**syncEmployeeExternalData()**](ExternalDataApi.md#syncEmployeeExternalData) | **GET** /employers/{employerId}/external-data/{id}/employees/{employeeId}/sync | Sync Employee |
| [**syncLeaveExternalData()**](ExternalDataApi.md#syncLeaveExternalData) | **POST** /employers/{employerId}/external-data/{id}/{taxYear}/{payPeriod}/{periodNumber}/leave | Sync Leave |
| [**timeAndAttendanceExternalData()**](ExternalDataApi.md#timeAndAttendanceExternalData) | **GET** /employers/{employerId}/external-data/{id}/time-and-attendance | Get Time And Attendance Data |
| [**updateEmployeeExternalData()**](ExternalDataApi.md#updateEmployeeExternalData) | **PUT** /employers/{employerId}/external-data/{id}/employees/{employeeId} | Update Employee |


## `authorizeExternalData()`

```php
authorizeExternalData($employerId, $id, $returnUrl): string
```

Get Authorization Url

For ExternalDataProviders with an AuthScheme of OAuth1 or OAuth2.  Returns a Url to redirect a user to in order to start the authorization process with the given ExternalDataProvider.  Our API handles the response from the OAuth provider and processes it to obtain a token.  The user is then sent to the URL specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId | The Id of the ExternalDataProvider you want to authorize with.
$returnUrl = 'returnUrl_example'; // string | The URL to send the user to once the process is complete.

try {
    $result = $apiInstance->authorizeExternalData($employerId, $id, $returnUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->authorizeExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)| The Id of the ExternalDataProvider you want to authorize with. | |
| **returnUrl** | **string**| The URL to send the user to once the process is complete. | [optional] |

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

## `companiesExternalData()`

```php
companiesExternalData($id, $employerId): \SynergiTech\Staffology\Model\ExternalDataCompany[]
```

List Companies

Return a list of companies from the external data provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->companiesExternalData($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->companiesExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ExternalDataCompany[]**](../Model/ExternalDataCompany.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disconnectExternalData()`

```php
disconnectExternalData($employerId, $id)
```

Disconnect

Disconnect from the external provider and revoke any OAuth token that has been received.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId | The Id of the ExternalDataProvider you want to disconnect from.

try {
    $apiInstance->disconnectExternalData($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->disconnectExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)| The Id of the ExternalDataProvider you want to disconnect from. | |

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

## `employeeExternalData()`

```php
employeeExternalData($id, $employerId, $employeeId): \SynergiTech\Staffology\Model\ExternalEmployeeMapping
```

Get Employee

Return an ExternalEmployeeMapping for the specified Employee from the external data provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string | The Id of the employee in the external data provider

try {
    $result = $apiInstance->employeeExternalData($id, $employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->employeeExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**| The Id of the employee in the external data provider | |

### Return type

[**\SynergiTech\Staffology\Model\ExternalEmployeeMapping**](../Model/ExternalEmployeeMapping.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeLogsExternalData()`

```php
employeeLogsExternalData($id, $employerId, $employeeId): \SynergiTech\Staffology\Model\LogEntry[]
```

Get Employee Logs

Return a list of changes made locally to this employee based on changes in the external data provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string | The Id of the employee in the external data provider

try {
    $result = $apiInstance->employeeLogsExternalData($id, $employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->employeeLogsExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**| The Id of the employee in the external data provider | |

### Return type

[**\SynergiTech\Staffology\Model\LogEntry[]**](../Model/LogEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeesExternalData()`

```php
employeesExternalData($id, $employerId): \SynergiTech\Staffology\Model\Item[]
```

List Employees

Return a list of ExternalEmployeeMapping for Employees in the external data provider.  The metadata of the Item contains a field called externalId. This can be used to retrieve the full employee record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->employeesExternalData($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->employeesExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |

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

## `getConfigDataExternalData()`

```php
getConfigDataExternalData($employerId, $id): mixed
```

Get Config Data

Returns any additional configuration data for the connection to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId | The Id of the ExternalDataProvider you want configuration data for.

try {
    $result = $apiInstance->getConfigDataExternalData($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->getConfigDataExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)| The Id of the ExternalDataProvider you want configuration data for. | |

### Return type

**mixed**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importEmployeesExternalData()`

```php
importEmployeesExternalData($id, $employerId, $requestBody): \SynergiTech\Staffology\Model\Item[]
```

Import Employees

Import Employees from the external data provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$requestBody = array('requestBody_example'); // string[] | The externalIds to import

try {
    $result = $apiInstance->importEmployeesExternalData($id, $employerId, $requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->importEmployeesExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **requestBody** | [**string[]**](../Model/string.md)| The externalIds to import | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExternalData()`

```php
listExternalData($employerId): \SynergiTech\Staffology\Model\ExternalDataProvider[]
```

List Providers

Returns a list of External Data Providers and indicates which the Employer has successfully authenticated with.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.

try {
    $result = $apiInstance->listExternalData($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->listExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |

### Return type

[**\SynergiTech\Staffology\Model\ExternalDataProvider[]**](../Model/ExternalDataProvider.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nominalCodesExternalData()`

```php
nominalCodesExternalData($id, $employerId): \SynergiTech\Staffology\Model\Item[]
```

List Nominal Codes

Return a list of Nominal Codes from the external data provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->nominalCodesExternalData($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->nominalCodesExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |

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

## `pensionContributionsCsvExternalData()`

```php
pensionContributionsCsvExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $schemeId, $ordinal): string
```

Contributions CSV File

Returns a CSV file containing contributions for the specified payrun in a format specific to the ExternalDataProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$schemeId = 'schemeId_example'; // string | The Id of the Pension Scheme you want a file for.
$ordinal = 1; // int

try {
    $result = $apiInstance->pensionContributionsCsvExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $schemeId, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pensionContributionsCsvExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **schemeId** | **string**| The Id of the Pension Scheme you want a file for. | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

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

## `postJournalExternalData()`

```php
postJournalExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $force, $ordinal): \SynergiTech\Staffology\Model\PayRunJournal
```

Post Journal

Post a Journal for a payrun to the ExternalDataProvider  A 200 response does not mean the journal was necessarily successfully posted.  The PayRunJournal is returned (without the Lines) so that you can inspect the status to determine success

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | To identify the PayRun
$periodNumber = 56; // int | To identify the PayRun
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | To identify the PayRun
$force = True; // bool | Set to true if you want to force the journal to be posted even if it already has been
$ordinal = 1; // int

try {
    $result = $apiInstance->postJournalExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $force, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->postJournalExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| To identify the PayRun | |
| **periodNumber** | **int**| To identify the PayRun | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| To identify the PayRun | |
| **force** | **bool**| Set to true if you want to force the journal to be posted even if it already has been | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunJournal**](../Model/PayRunJournal.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentsExternalData()`

```php
postPaymentsExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $incEmployees, $incHmrc, $incPensions, $incAeos, $incDeductions, $force, $ordinal, $paymentDate): \SynergiTech\Staffology\Model\BankPaymentInstruction
```

Post Payments

Post Payments for a payrun to the ExternalDataProvider  A 200 response does not mean the payments were necessarily successfully posted.  The BankPaymentInstruction is returned (without the payments) so that you can inspect the status to determine success

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | To identify the PayRun
$periodNumber = 56; // int | To identify the PayRun
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | To identify the PayRun
$incEmployees = True; // bool | Include payments for employees
$incHmrc = True; // bool | Include payments for HMRC (if any)
$incPensions = True; // bool | Include payments for Pension Providers (if any)
$incAeos = True; // bool | Include any payment due as a result of AttachmentOrders (if any)
$incDeductions = True; // bool | Include any payment due to Deductions that are set to be paid to a Payee (if any)
$force = True; // bool | Set to true if you want to force the payments to be posted even if it already has been
$ordinal = 1; // int
$paymentDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional. If a value is provided then it'll be used in place of the payment date for the payment.

try {
    $result = $apiInstance->postPaymentsExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $incEmployees, $incHmrc, $incPensions, $incAeos, $incDeductions, $force, $ordinal, $paymentDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->postPaymentsExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| To identify the PayRun | |
| **periodNumber** | **int**| To identify the PayRun | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| To identify the PayRun | |
| **incEmployees** | **bool**| Include payments for employees | [optional] |
| **incHmrc** | **bool**| Include payments for HMRC (if any) | [optional] |
| **incPensions** | **bool**| Include payments for Pension Providers (if any) | [optional] |
| **incAeos** | **bool**| Include any payment due as a result of AttachmentOrders (if any) | [optional] |
| **incDeductions** | **bool**| Include any payment due to Deductions that are set to be paid to a Payee (if any) | [optional] |
| **force** | **bool**| Set to true if you want to force the payments to be posted even if it already has been | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **paymentDate** | **\DateTime**| Optional. If a value is provided then it&#39;ll be used in place of the payment date for the payment. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\BankPaymentInstruction**](../Model/BankPaymentInstruction.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pushEmployeesExternalData()`

```php
pushEmployeesExternalData($id, $employerId): \SynergiTech\Staffology\Model\Item[]
```

Push Employees

Push employees to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->pushEmployeesExternalData($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushEmployeesExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |

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

## `pushP11DExternalData()`

```php
pushP11DExternalData($id, $employerId, $employeeId, $taxYear)
```

Push P11D

Pushes a P11D for the given employee to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $apiInstance->pushP11DExternalData($id, $employerId, $employeeId, $taxYear);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushP11DExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | [optional] |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |

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

## `pushP11DsExternalData()`

```php
pushP11DsExternalData($id, $employerId, $taxYear)
```

Push P11Ds

Pushes all P11Ds for the given TaxYear to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $apiInstance->pushP11DsExternalData($id, $employerId, $taxYear);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushP11DsExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |

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

## `pushP45ExternalData()`

```php
pushP45ExternalData($id, $employerId, $employeeId)
```

Push P45

Push a P45 to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $apiInstance->pushP45ExternalData($id, $employerId, $employeeId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushP45ExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | [optional] |

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

## `pushP45sExternalData()`

```php
pushP45sExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $ordinal)
```

Push P45s

Push P45s to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId | The Id of the External Provider to which you want to send P45s
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to send P45s
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The Pay Period (i.e, Monthly, Weekly) for which you want to send P45s
$periodNumber = 56; // int | The Period (i.e, Tax Month, Tax Week) for which you want to send P45s
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The Tax Year for which you want to send P45s
$ordinal = 1; // int | Indicates whether it uses first, second, third (etc.) PaySchedule for the PayPeriod for which you want to send P45s

try {
    $apiInstance->pushP45sExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushP45sExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)| The Id of the External Provider to which you want to send P45s | |
| **employerId** | **string**| The Id of the Employer for which you want to send P45s | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The Pay Period (i.e, Monthly, Weekly) for which you want to send P45s | [optional] |
| **periodNumber** | **int**| The Period (i.e, Tax Month, Tax Week) for which you want to send P45s | [optional] |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The Tax Year for which you want to send P45s | [optional] |
| **ordinal** | **int**| Indicates whether it uses first, second, third (etc.) PaySchedule for the PayPeriod for which you want to send P45s | [optional] [default to 1] |

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

## `pushP60ExternalData()`

```php
pushP60ExternalData($id, $employerId, $employeeId, $taxYear)
```

Push P60

Pushes a P60 to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $apiInstance->pushP60ExternalData($id, $employerId, $employeeId, $taxYear);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushP60ExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | [optional] |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |

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

## `pushP60sExternalData()`

```php
pushP60sExternalData($id, $employerId, $taxYear)
```

Push P60s

Pushes P60s to the ExternalDataProvider for all employees paid for a given tax year, provided they were paid during that tax year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $apiInstance->pushP60sExternalData($id, $employerId, $taxYear);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushP60sExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |

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

## `pushPayslipsExternalData()`

```php
pushPayslipsExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $force, $ordinal, $employeeId)
```

Push Payslips

Push payslips to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$force = True; // bool
$ordinal = 1; // int
$employeeId = 'employeeId_example'; // string

try {
    $apiInstance->pushPayslipsExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $force, $ordinal, $employeeId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushPayslipsExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | [optional] |
| **periodNumber** | **int**|  | [optional] |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |
| **force** | **bool**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **employeeId** | **string**|  | [optional] |

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

## `pushPensionLetterExternalData()`

```php
pushPensionLetterExternalData($id, $employerId, $employeeId, $assessmentId)
```

Push Pension Letter

Pushes a Pension Letter for the given employee to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$assessmentId = 'assessmentId_example'; // string

try {
    $apiInstance->pushPensionLetterExternalData($id, $employerId, $employeeId, $assessmentId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushPensionLetterExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | [optional] |
| **assessmentId** | **string**|  | [optional] |

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

## `pushPensionLettersExternalData()`

```php
pushPensionLettersExternalData($id, $employerId)
```

Push Pension Letters

Pushes a Pension Letters for the given employees to the ExternalDataProvider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string

try {
    $apiInstance->pushPensionLettersExternalData($id, $employerId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->pushPensionLettersExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |

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

## `respondExternalData()`

```php
respondExternalData($id, $error)
```

3rd Party Response

This endpoint is used by third parties to respond to an oAuth authorization request. You do not need to use this

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$error = 'error_example'; // string

try {
    $apiInstance->respondExternalData($id, $error);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->respondExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **error** | **string**|  | [optional] |

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

## `setConfigDataExternalData()`

```php
setConfigDataExternalData($employerId, $id, $body): mixed
```

Set Config Data

Sets the additional configuration data for the connection to the ExternalDataProvider.  Only the value set in the userData field is updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId | The Id of the ExternalDataProvider you want configuration data for.
$body = NULL; // mixed

try {
    $result = $apiInstance->setConfigDataExternalData($employerId, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->setConfigDataExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)| The Id of the ExternalDataProvider you want configuration data for. | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCredentialsExternalData()`

```php
setCredentialsExternalData($employerId, $id, $username, $password, $stringStringKeyValuePair)
```

Set Credentials

For ExternalDataProviders with an AuthScheme of Basic.  Sets the username and password for the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId | The Id of the ExternalDataProvider you want to authorize with.
$username = 'username_example'; // string | The username for the ExternalDataProvider.
$password = 'password_example'; // string | The password for the ExternalDataProvider.
$stringStringKeyValuePair = array(new \SynergiTech\Staffology\Model\StringStringKeyValuePair()); // \SynergiTech\Staffology\Model\StringStringKeyValuePair[] | Any additional data that is needed (optional)

try {
    $apiInstance->setCredentialsExternalData($employerId, $id, $username, $password, $stringStringKeyValuePair);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->setCredentialsExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)| The Id of the ExternalDataProvider you want to authorize with. | |
| **username** | **string**| The username for the ExternalDataProvider. | [optional] |
| **password** | **string**| The password for the ExternalDataProvider. | [optional] |
| **stringStringKeyValuePair** | [**\SynergiTech\Staffology\Model\StringStringKeyValuePair[]**](../Model/StringStringKeyValuePair.md)| Any additional data that is needed (optional) | [optional] |

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

## `syncAllEmployeesExternalData()`

```php
syncAllEmployeesExternalData($id, $employerId): \SynergiTech\Staffology\Model\Item[]
```

Sync Employees

Syncs data from the ExternalDataProvider to update all mapped employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->syncAllEmployeesExternalData($id, $employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->syncAllEmployeesExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |

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

## `syncEmployeeExternalData()`

```php
syncEmployeeExternalData($id, $employerId, $employeeId): \SynergiTech\Staffology\Model\Item
```

Sync Employee

Syncs data from the ExternalDataProvider to update the specified mapped employee.  Any changes made as a result of the sync are show in the metadata.logs property.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string | The Id of the employee in the external data provider

try {
    $result = $apiInstance->syncEmployeeExternalData($id, $employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->syncEmployeeExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**| The Id of the employee in the external data provider | |

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

## `syncLeaveExternalData()`

```php
syncLeaveExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $ordinal)
```

Sync Leave

Sync Leave from the ExternalDataProvider for the specified PayRun.  Returns a JSON object indicating how many Leaves have been created, updated or deleted, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 1; // int

try {
    $apiInstance->syncLeaveExternalData($id, $employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->syncLeaveExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |

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

## `timeAndAttendanceExternalData()`

```php
timeAndAttendanceExternalData($id, $employerId, $from, $to): \SynergiTech\Staffology\Model\PayOptionsImport[]
```

Get Time And Attendance Data

Return a list of PayOptionsImport representing Time and Attendance data from the specified ExternalDataProvider, for to specified date range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->timeAndAttendanceExternalData($id, $employerId, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->timeAndAttendanceExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **from** | **\DateTime**|  | [optional] |
| **to** | **\DateTime**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayOptionsImport[]**](../Model/PayOptionsImport.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeeExternalData()`

```php
updateEmployeeExternalData($id, $employerId, $employeeId, $externalEmployeeMapping): \SynergiTech\Staffology\Model\ExternalEmployeeMapping
```

Update Employee

Update an ExternalEmployeeMapping to map/unmap/import/ignore an employee from an external data provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExternalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string | The Id of the employee in the external data provider
$externalEmployeeMapping = new \SynergiTech\Staffology\Model\ExternalEmployeeMapping(); // \SynergiTech\Staffology\Model\ExternalEmployeeMapping

try {
    $result = $apiInstance->updateEmployeeExternalData($id, $employerId, $employeeId, $externalEmployeeMapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalDataApi->updateEmployeeExternalData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | |
| **employerId** | **string**|  | |
| **employeeId** | **string**| The Id of the employee in the external data provider | |
| **externalEmployeeMapping** | [**\SynergiTech\Staffology\Model\ExternalEmployeeMapping**](../Model/ExternalEmployeeMapping.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ExternalEmployeeMapping**](../Model/ExternalEmployeeMapping.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
