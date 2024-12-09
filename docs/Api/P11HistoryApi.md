# SynergiTech\Staffology\P11HistoryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createP11History()**](P11HistoryApi.md#createP11History) | **POST** /employers/{employerId}/employees/{employeeId}/p11history | Create P11 Historical data |
| [**deleteP11History()**](P11HistoryApi.md#deleteP11History) | **DELETE** /employers/{employerId}/employees/{employeeId}/p11history/{id} | Delete P11 Historical data |
| [**listPagedP11History()**](P11HistoryApi.md#listPagedP11History) | **GET** /employers/{employerId}/employees/{employeeId}/p11history | Retrieve P11 Historical data |
| [**updateP11History()**](P11HistoryApi.md#updateP11History) | **PUT** /employers/{employerId}/employees/{employeeId}/p11history/{id} | Update P11 Historical entry |


## `createP11History()`

```php
createP11History($employerId, $employeeId, $contractP11HistoryRequest)
```

Create P11 Historical data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\P11HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee
$contractP11HistoryRequest = array(new \SynergiTech\Staffology\Model\ContractP11HistoryRequest()); // \SynergiTech\Staffology\Model\ContractP11HistoryRequest[] | 

try {
    $apiInstance->createP11History($employerId, $employeeId, $contractP11HistoryRequest);
} catch (Exception $e) {
    echo 'Exception when calling P11HistoryApi->createP11History: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee | |
| **contractP11HistoryRequest** | [**\SynergiTech\Staffology\Model\ContractP11HistoryRequest[]**](../Model/ContractP11HistoryRequest.md)|  | [optional] |

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

## `deleteP11History()`

```php
deleteP11History($id, $employerId, $employeeId)
```

Delete P11 Historical data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\P11HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee

try {
    $apiInstance->deleteP11History($id, $employerId, $employeeId);
} catch (Exception $e) {
    echo 'Exception when calling P11HistoryApi->deleteP11History: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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

## `listPagedP11History()`

```php
listPagedP11History($employerId, $employeeId, $pageNum, $pageSize): \SynergiTech\Staffology\Model\ContractP11HistoryResponse[]
```

Retrieve P11 Historical data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\P11HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee
$pageNum = 56; // int | 
$pageSize = 56; // int | 

try {
    $result = $apiInstance->listPagedP11History($employerId, $employeeId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling P11HistoryApi->listPagedP11History: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee | |
| **pageNum** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractP11HistoryResponse[]**](../Model/ContractP11HistoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateP11History()`

```php
updateP11History($employerId, $employeeId, $id, $contractP11HistoryRequest): \SynergiTech\Staffology\Model\ContractP11HistoryResponse
```

Update P11 Historical entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\P11HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee
$id = 'id_example'; // string | The unique id of the record
$contractP11HistoryRequest = new \SynergiTech\Staffology\Model\ContractP11HistoryRequest(); // \SynergiTech\Staffology\Model\ContractP11HistoryRequest | 

try {
    $result = $apiInstance->updateP11History($employerId, $employeeId, $id, $contractP11HistoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling P11HistoryApi->updateP11History: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee | |
| **id** | **string**| The unique id of the record | |
| **contractP11HistoryRequest** | [**\SynergiTech\Staffology\Model\ContractP11HistoryRequest**](../Model/ContractP11HistoryRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractP11HistoryResponse**](../Model/ContractP11HistoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
