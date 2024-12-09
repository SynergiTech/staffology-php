# SynergiTech\Staffology\OccupationalSickLeaveHistoryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#createOccupationalSickLeaveHistory) | **POST** /employers/{employerId}/occupationalsickleavehistory/employees/{employeeId} | Create OccupationalSickLeaveHistory |
| [**deleteOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#deleteOccupationalSickLeaveHistory) | **DELETE** /employers/{employerId}/occupationalsickleavehistory/employees/{employeeId}/{id} | Delete OccupationalSickLeaveHistory |
| [**getOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#getOccupationalSickLeaveHistory) | **GET** /employers/{employerId}/occupationalsickleavehistory/employees/{employeeId}/{id} | Get OccupationalSickLeaveHistory |
| [**importOccupationalSickLeaveHistoryCsvOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#importOccupationalSickLeaveHistoryCsvOccupationalSickLeaveHistory) | **POST** /employers/{employerId}/occupationalsickleavehistory/importfile | Import OccupationalSickLeaveHistory from csv file |
| [**occupationalSickLeaveHistoryOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#occupationalSickLeaveHistoryOccupationalSickLeaveHistory) | **GET** /employers/{employerId}/occupationalsickleavehistory/employees/{employeeId} | List OccupationalSickLeaveHistory |
| [**updateOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#updateOccupationalSickLeaveHistory) | **PUT** /employers/{employerId}/occupationalsickleavehistory/employees/{employeeId}/{id} | Update OccupationalSickLeaveHistory |
| [**uploadOSPHistoryOccupationalSickLeaveHistory()**](OccupationalSickLeaveHistoryApi.md#uploadOSPHistoryOccupationalSickLeaveHistory) | **POST** /employers/{employerId}/occupationalsickleavehistory/import | Upload OccupationalSickLeaveHistory |


## `createOccupationalSickLeaveHistory()`

```php
createOccupationalSickLeaveHistory($employerId, $employeeId, $occupationalSickLeaveHistory): \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory
```

Create OccupationalSickLeaveHistory

Creates Occupational sick leave history for the Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$employeeId = 'employeeId_example'; // string | The Id of the Employee to which the Occupational sick leave history belongs
$occupationalSickLeaveHistory = new \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory(); // \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory

try {
    $result = $apiInstance->createOccupationalSickLeaveHistory($employerId, $employeeId, $occupationalSickLeaveHistory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->createOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **employeeId** | **string**| The Id of the Employee to which the Occupational sick leave history belongs | |
| **occupationalSickLeaveHistory** | [**\SynergiTech\Staffology\Model\OccupationalSickLeaveHistory**](../Model/OccupationalSickLeaveHistory.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalSickLeaveHistory**](../Model/OccupationalSickLeaveHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOccupationalSickLeaveHistory()`

```php
deleteOccupationalSickLeaveHistory($employerId, $employeeId, $id)
```

Delete OccupationalSickLeaveHistory

Deletes the specified Occupational leave history record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Occupational sick leave which you want to fetch

try {
    $apiInstance->deleteOccupationalSickLeaveHistory($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->deleteOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Occupational sick leave which you want to fetch | |

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

## `getOccupationalSickLeaveHistory()`

```php
getOccupationalSickLeaveHistory($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory
```

Get OccupationalSickLeaveHistory

Gets a occupational sick leave for the employee and employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Occupational leave history which you want to fetch

try {
    $result = $apiInstance->getOccupationalSickLeaveHistory($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->getOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Occupational leave history which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalSickLeaveHistory**](../Model/OccupationalSickLeaveHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importOccupationalSickLeaveHistoryCsvOccupationalSickLeaveHistory()`

```php
importOccupationalSickLeaveHistoryCsvOccupationalSickLeaveHistory($employerId, $file): \SynergiTech\Staffology\Model\Item[]
```

Import OccupationalSickLeaveHistory from csv file

Import Occupational Sick Leave History from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importOccupationalSickLeaveHistoryCsvOccupationalSickLeaveHistory($employerId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->importOccupationalSickLeaveHistoryCsvOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `occupationalSickLeaveHistoryOccupationalSickLeaveHistory()`

```php
occupationalSickLeaveHistoryOccupationalSickLeaveHistory($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List OccupationalSickLeaveHistory

Lists all OccupationalSickLeaveHistory for the Employee specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->occupationalSickLeaveHistoryOccupationalSickLeaveHistory($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->occupationalSickLeaveHistoryOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOccupationalSickLeaveHistory()`

```php
updateOccupationalSickLeaveHistory($employerId, $employeeId, $id, $occupationalSickLeaveHistory): \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory
```

Update OccupationalSickLeaveHistory

Updates a occupational sick leave for the employee and employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Occupational leave history which you want to fetch
$occupationalSickLeaveHistory = new \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory(); // \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory

try {
    $result = $apiInstance->updateOccupationalSickLeaveHistory($employerId, $employeeId, $id, $occupationalSickLeaveHistory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->updateOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Occupational leave history which you want to fetch | |
| **occupationalSickLeaveHistory** | [**\SynergiTech\Staffology\Model\OccupationalSickLeaveHistory**](../Model/OccupationalSickLeaveHistory.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalSickLeaveHistory**](../Model/OccupationalSickLeaveHistory.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadOSPHistoryOccupationalSickLeaveHistory()`

```php
uploadOSPHistoryOccupationalSickLeaveHistory($employerId, $occupationalSickLeaveHistory): \SynergiTech\Staffology\Model\Item[]
```

Upload OccupationalSickLeaveHistory

Uploads new Occupational sick leave history for the Employer against specific occupational policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalSickLeaveHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the occupational sick leave history is to be uploaded.
$occupationalSickLeaveHistory = array(new \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory()); // \SynergiTech\Staffology\Model\OccupationalSickLeaveHistory[]

try {
    $result = $apiInstance->uploadOSPHistoryOccupationalSickLeaveHistory($employerId, $occupationalSickLeaveHistory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalSickLeaveHistoryApi->uploadOSPHistoryOccupationalSickLeaveHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the occupational sick leave history is to be uploaded. | |
| **occupationalSickLeaveHistory** | [**\SynergiTech\Staffology\Model\OccupationalSickLeaveHistory[]**](../Model/OccupationalSickLeaveHistory.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
