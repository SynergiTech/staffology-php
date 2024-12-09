# SynergiTech\Staffology\ImportApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentsCsvMappingImport()**](ImportApi.md#createPaymentsCsvMappingImport) | **POST** /employers/{employerId}/import/payments/mappings | Create PaymentsCsvMapping |
| [**deletePaymentCsvMappingImport()**](ImportApi.md#deletePaymentCsvMappingImport) | **DELETE** /employers/{employerId}/import/payments/mappings/{id} | Delete PaymentsCsvMapping |
| [**employeeImportCsvImport()**](ImportApi.md#employeeImportCsvImport) | **POST** /employers/{employerId}/import/employees/async | Import Employees Asynchronously (Beta) |
| [**importEmployeePayImport()**](ImportApi.md#importEmployeePayImport) | **POST** /employers/{employerId}/import/pay | Import Pay To Employee |
| [**importLeaveImport()**](ImportApi.md#importLeaveImport) | **POST** /employers/{employerId}/import/leave | Import Leave Asynchronously |
| [**importPensionMembershipsImport()**](ImportApi.md#importPensionMembershipsImport) | **POST** /employers/{employerId}/import/pensionmemberships | Import PensionMemberships from csv file |
| [**importRolesImport()**](ImportApi.md#importRolesImport) | **POST** /employers/{employerId}/import/import | Import EmployeeRoles from csv file |
| [**listPaymentsCsvMappingsImport()**](ImportApi.md#listPaymentsCsvMappingsImport) | **GET** /employers/{employerId}/import/payments/mappings | List PaymentsCsvMappings |
| [**paymentsCsvMappingCsvFileImport()**](ImportApi.md#paymentsCsvMappingCsvFileImport) | **GET** /employers/{employerId}/import/payments/mappings/{id}/csv | Get PaymentsCsvMapping CSV File |
| [**paymentsCsvMappingImport()**](ImportApi.md#paymentsCsvMappingImport) | **GET** /employers/{employerId}/import/payments/mappings/{id} | Get PaymentsCsvMapping |
| [**updatePaymentsCsvMappingImport()**](ImportApi.md#updatePaymentsCsvMappingImport) | **PUT** /employers/{employerId}/import/payments/mappings/{id} | Update PaymentsCsvMapping |


## `createPaymentsCsvMappingImport()`

```php
createPaymentsCsvMappingImport($employerId, $paymentsCsvMapping)
```

Create PaymentsCsvMapping

Creates a new PaymentsCsvMapping for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$paymentsCsvMapping = new \SynergiTech\Staffology\Model\PaymentsCsvMapping(); // \SynergiTech\Staffology\Model\PaymentsCsvMapping

try {
    $apiInstance->createPaymentsCsvMappingImport($employerId, $paymentsCsvMapping);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->createPaymentsCsvMappingImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **paymentsCsvMapping** | [**\SynergiTech\Staffology\Model\PaymentsCsvMapping**](../Model/PaymentsCsvMapping.md)|  | [optional] |

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

## `deletePaymentCsvMappingImport()`

```php
deletePaymentCsvMappingImport($employerId, $id)
```

Delete PaymentsCsvMapping

Deletes the specified PaymentsCsvMapping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deletePaymentCsvMappingImport($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->deletePaymentCsvMappingImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |

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

## `employeeImportCsvImport()`

```php
employeeImportCsvImport($employerId, $format, $allowUpdates, $file): \SynergiTech\Staffology\Model\ContractJobResponse
```

Import Employees Asynchronously (Beta)

This endpoint is currently being beta tested and subject to unannounced breaking changes.  Allows the import of employees asynchronously from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The employer id.
$format = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\CsvFileFormat(); // \SynergiTech\Staffology\Model\CsvFileFormat | The CSV format.
$allowUpdates = false; // bool | If set to true, and if the payroll code matches an existing employee, then that employee will be updated.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->employeeImportCsvImport($employerId, $format, $allowUpdates, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->employeeImportCsvImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The employer id. | |
| **format** | [**\SynergiTech\Staffology\Model\CsvFileFormat**](../Model/.md)| The CSV format. | [optional] |
| **allowUpdates** | **bool**| If set to true, and if the payroll code matches an existing employee, then that employee will be updated. | [optional] [default to false] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJobResponse**](../Model/ContractJobResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importEmployeePayImport()`

```php
importEmployeePayImport($employerId, $linesOnly, $append, $updateExisting, $validateOnly, $payOptionsImport)
```

Import Pay To Employee

Takes a list PayOptionsImport and updates employees PayOptions to use the values provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$linesOnly = false; // bool | If set to true then only lines will be imported. Changes to regular pay will be ignored. Defaults to false.
$append = false; // bool | If set to true then the lines submitted will be appended to existing lines rather than replace them. Defaults to false.
$updateExisting = false; // bool | If set to true then any submitted lines that match the paycode of one (and only one) existing line will be used to update the value of that lines. Any unmatched lines will be appended to existing lines.
$validateOnly = false; // bool | If set to true, the import will only be validated for data correctness. If false, the import is validated and then imported.
$payOptionsImport = array(new \SynergiTech\Staffology\Model\PayOptionsImport()); // \SynergiTech\Staffology\Model\PayOptionsImport[]

try {
    $apiInstance->importEmployeePayImport($employerId, $linesOnly, $append, $updateExisting, $validateOnly, $payOptionsImport);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->importEmployeePayImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **linesOnly** | **bool**| If set to true then only lines will be imported. Changes to regular pay will be ignored. Defaults to false. | [optional] [default to false] |
| **append** | **bool**| If set to true then the lines submitted will be appended to existing lines rather than replace them. Defaults to false. | [optional] [default to false] |
| **updateExisting** | **bool**| If set to true then any submitted lines that match the paycode of one (and only one) existing line will be used to update the value of that lines. Any unmatched lines will be appended to existing lines. | [optional] [default to false] |
| **validateOnly** | **bool**| If set to true, the import will only be validated for data correctness. If false, the import is validated and then imported. | [optional] [default to false] |
| **payOptionsImport** | [**\SynergiTech\Staffology\Model\PayOptionsImport[]**](../Model/PayOptionsImport.md)|  | [optional] |

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

## `importLeaveImport()`

```php
importLeaveImport($employerId, $contractLeaveImportRequest): \SynergiTech\Staffology\Model\ContractJobResponse
```

Import Leave Asynchronously

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The employer id.
$contractLeaveImportRequest = array(new \SynergiTech\Staffology\Model\ContractLeaveImportRequest()); // \SynergiTech\Staffology\Model\ContractLeaveImportRequest[] | The import leave items.

try {
    $result = $apiInstance->importLeaveImport($employerId, $contractLeaveImportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->importLeaveImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The employer id. | |
| **contractLeaveImportRequest** | [**\SynergiTech\Staffology\Model\ContractLeaveImportRequest[]**](../Model/ContractLeaveImportRequest.md)| The import leave items. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJobResponse**](../Model/ContractJobResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importPensionMembershipsImport()`

```php
importPensionMembershipsImport($employerId, $previewOnly, $allowUpdates, $file): \SynergiTech\Staffology\Model\Item[]
```

Import PensionMemberships from csv file

Import Pension Memberships from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$previewOnly = false; // bool | Set to true and nothing will be imported but you'll be shown a preview of the data.
$allowUpdates = false; // bool
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importPensionMembershipsImport($employerId, $previewOnly, $allowUpdates, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->importPensionMembershipsImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **previewOnly** | **bool**| Set to true and nothing will be imported but you&#39;ll be shown a preview of the data. | [optional] [default to false] |
| **allowUpdates** | **bool**|  | [optional] [default to false] |
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

## `importRolesImport()`

```php
importRolesImport($employerId, $previewOnly, $allowUpdates, $file): \SynergiTech\Staffology\Model\Item[]
```

Import EmployeeRoles from csv file

Import Employee Roles from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$previewOnly = false; // bool | Set to true and nothing will be imported but you'll be shown a preview of the data.
$allowUpdates = false; // bool
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importRolesImport($employerId, $previewOnly, $allowUpdates, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->importRolesImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **previewOnly** | **bool**| Set to true and nothing will be imported but you&#39;ll be shown a preview of the data. | [optional] [default to false] |
| **allowUpdates** | **bool**|  | [optional] [default to false] |
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

## `listPaymentsCsvMappingsImport()`

```php
listPaymentsCsvMappingsImport($employerId): \SynergiTech\Staffology\Model\Item[]
```

List PaymentsCsvMappings

Lists all PaymentsCsvMappings for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list mappings

try {
    $result = $apiInstance->listPaymentsCsvMappingsImport($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->listPaymentsCsvMappingsImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list mappings | |

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

## `paymentsCsvMappingCsvFileImport()`

```php
paymentsCsvMappingCsvFileImport($employerId, $id): \SynergiTech\Staffology\Model\ReportResponse
```

Get PaymentsCsvMapping CSV File

Gets a CSV file in the format needed to import for the specified PaymentsCsvMapping  This is only available for PaymentsCsvMapping with a Type of ColumnBased

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PaymentCsvMapping belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->paymentsCsvMappingCsvFileImport($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->paymentsCsvMappingCsvFileImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PaymentCsvMapping belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentsCsvMappingImport()`

```php
paymentsCsvMappingImport($employerId, $id): \SynergiTech\Staffology\Model\PaymentsCsvMapping
```

Get PaymentsCsvMapping

Gets the PaymentsCsvMapping specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PaymentCsvMapping belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->paymentsCsvMappingImport($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->paymentsCsvMappingImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PaymentCsvMapping belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\PaymentsCsvMapping**](../Model/PaymentsCsvMapping.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaymentsCsvMappingImport()`

```php
updatePaymentsCsvMappingImport($employerId, $id, $paymentsCsvMapping): \SynergiTech\Staffology\Model\PaymentsCsvMapping
```

Update PaymentsCsvMapping

Updates the PaymentsCsvMapping specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PaymentsCsvMapping belongs.
$id = 'id_example'; // string
$paymentsCsvMapping = new \SynergiTech\Staffology\Model\PaymentsCsvMapping(); // \SynergiTech\Staffology\Model\PaymentsCsvMapping

try {
    $result = $apiInstance->updatePaymentsCsvMappingImport($employerId, $id, $paymentsCsvMapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->updatePaymentsCsvMappingImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PaymentsCsvMapping belongs. | |
| **id** | **string**|  | |
| **paymentsCsvMapping** | [**\SynergiTech\Staffology\Model\PaymentsCsvMapping**](../Model/PaymentsCsvMapping.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaymentsCsvMapping**](../Model/PaymentsCsvMapping.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
