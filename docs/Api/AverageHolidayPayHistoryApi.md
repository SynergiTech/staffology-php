# SynergiTech\Staffology\AverageHolidayPayHistoryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#createAverageHolidayPayHistory) | **POST** /{employerId}/employees/AverageHolidayPay/PayHistory | Create multiple AverageHolidayPayHistory for an Employer |
| [**deleteAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#deleteAverageHolidayPayHistory) | **DELETE** /{employerId}/employees/AverageHolidayPay/PayHistory/{id} | Delete an AverageHolidayPayHistory record |
| [**deleteByEmployeeIdAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#deleteByEmployeeIdAverageHolidayPayHistory) | **DELETE** /{employerId}/employees/{employeeId}/AverageHolidayPay/PayHistory | Delete all AverageHolidayPayHistory for an Employee |
| [**getByEmployeeAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#getByEmployeeAverageHolidayPayHistory) | **GET** /{employerId}/employees/{employeeId}/AverageHolidayPay/PayHistory/{taxYear} | List AverageHolidayPayHistory for Employee |
| [**getByEmployerAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#getByEmployerAverageHolidayPayHistory) | **GET** /{employerId}/employees/AverageHolidayPay/PayHistory | Get AverageHolidayPayHistory for Employer |
| [**importCsvAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#importCsvAverageHolidayPayHistory) | **POST** /{employerId}/employees/AverageHolidayPay/PayHistory/import | Import AverageHistoryPayHistory from csv file |
| [**updateAverageHolidayPayHistory()**](AverageHolidayPayHistoryApi.md#updateAverageHolidayPayHistory) | **PUT** /{employerId}/employees/AverageHolidayPay/PayHistory | Update multiple AverageHolidayPayHistory for an Employer |


## `createAverageHolidayPayHistory()`

```php
createAverageHolidayPayHistory($employerId, $contractPayHistoryRequest)
```

Create multiple AverageHolidayPayHistory for an Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | 
$contractPayHistoryRequest = array(new \SynergiTech\Staffology\Model\ContractPayHistoryRequest()); // \SynergiTech\Staffology\Model\ContractPayHistoryRequest[] | 

try {
    $apiInstance->createAverageHolidayPayHistory($employerId, $contractPayHistoryRequest);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->createAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractPayHistoryRequest** | [**\SynergiTech\Staffology\Model\ContractPayHistoryRequest[]**](../Model/ContractPayHistoryRequest.md)|  | [optional] |

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

## `deleteAverageHolidayPayHistory()`

```php
deleteAverageHolidayPayHistory($employerId, $id)
```

Delete an AverageHolidayPayHistory record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$id = 'id_example'; // string | The pay history unique id

try {
    $apiInstance->deleteAverageHolidayPayHistory($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->deleteAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **id** | **string**| The pay history unique id | |

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

## `deleteByEmployeeIdAverageHolidayPayHistory()`

```php
deleteByEmployeeIdAverageHolidayPayHistory($employerId, $employeeId)
```

Delete all AverageHolidayPayHistory for an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee

try {
    $apiInstance->deleteByEmployeeIdAverageHolidayPayHistory($employerId, $employeeId);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->deleteByEmployeeIdAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee | |

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

## `getByEmployeeAverageHolidayPayHistory()`

```php
getByEmployeeAverageHolidayPayHistory($employerId, $employeeId, $taxYear): \SynergiTech\Staffology\Model\ContractPayHistoryResponse[]
```

List AverageHolidayPayHistory for Employee

List AverageHistoryPayHistory for the given Employee in the specified TaxYear

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Employee Id.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear for which you want the history.

try {
    $result = $apiInstance->getByEmployeeAverageHolidayPayHistory($employerId, $employeeId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->getByEmployeeAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Employee Id. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear for which you want the history. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayHistoryResponse[]**](../Model/ContractPayHistoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByEmployerAverageHolidayPayHistory()`

```php
getByEmployerAverageHolidayPayHistory($employerId): \SynergiTech\Staffology\Model\ContractPayHistoryResponse[]
```

Get AverageHolidayPayHistory for Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->getByEmployerAverageHolidayPayHistory($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->getByEmployerAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayHistoryResponse[]**](../Model/ContractPayHistoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsvAverageHolidayPayHistory()`

```php
importCsvAverageHolidayPayHistory($employerId, $previewOnly, $file): \SynergiTech\Staffology\Model\Item[]
```

Import AverageHistoryPayHistory from csv file

Import Pay History from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$previewOnly = false; // bool | Set to true and nothing will be imported but you'll be shown a preview of the data.
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importCsvAverageHolidayPayHistory($employerId, $previewOnly, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->importCsvAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
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

## `updateAverageHolidayPayHistory()`

```php
updateAverageHolidayPayHistory($employerId, $contractPayHistoryUpdateRequest)
```

Update multiple AverageHolidayPayHistory for an Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AverageHolidayPayHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | 
$contractPayHistoryUpdateRequest = array(new \SynergiTech\Staffology\Model\ContractPayHistoryUpdateRequest()); // \SynergiTech\Staffology\Model\ContractPayHistoryUpdateRequest[] | 

try {
    $apiInstance->updateAverageHolidayPayHistory($employerId, $contractPayHistoryUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling AverageHolidayPayHistoryApi->updateAverageHolidayPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractPayHistoryUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractPayHistoryUpdateRequest[]**](../Model/ContractPayHistoryUpdateRequest.md)|  | [optional] |

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
