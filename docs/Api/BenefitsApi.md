# SynergiTech\Staffology\BenefitsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBenefits()**](BenefitsApi.md#createBenefits) | **POST** /employers/{employerId}/employees/{employeeId}/benefits | Create Benefit |
| [**deleteBenefits()**](BenefitsApi.md#deleteBenefits) | **DELETE** /employers/{employerId}/employees/{employeeId}/benefits/{id} | Delete Benefit |
| [**getBenefits()**](BenefitsApi.md#getBenefits) | **GET** /employers/{employerId}/employees/{employeeId}/benefits/{id} | Get Benefit |
| [**indexBenefits()**](BenefitsApi.md#indexBenefits) | **GET** /employers/{employerId}/employees/{employeeId}/benefits | List Benefits |
| [**updateBenefits()**](BenefitsApi.md#updateBenefits) | **PUT** /employers/{employerId}/employees/{employeeId}/benefits/{id} | Update Benefit |


## `createBenefits()`

```php
createBenefits($employerId, $employeeId, $benefit)
```

Create Benefit

Creates a Benefit for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BenefitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$benefit = new \SynergiTech\Staffology\Model\Benefit(); // \SynergiTech\Staffology\Model\Benefit

try {
    $apiInstance->createBenefits($employerId, $employeeId, $benefit);
} catch (Exception $e) {
    echo 'Exception when calling BenefitsApi->createBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **benefit** | [**\SynergiTech\Staffology\Model\Benefit**](../Model/Benefit.md)|  | [optional] |

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

## `deleteBenefits()`

```php
deleteBenefits($employerId, $employeeId, $id)
```

Delete Benefit

Deletes the Benefit specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BenefitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Benefit you want to delete.

try {
    $apiInstance->deleteBenefits($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling BenefitsApi->deleteBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Benefit you want to delete. | |

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

## `getBenefits()`

```php
getBenefits($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\Benefit
```

Get Benefit

Gets the Benefit specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BenefitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Benefit you want to retrieve.

try {
    $result = $apiInstance->getBenefits($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenefitsApi->getBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Benefit you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Benefit**](../Model/Benefit.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexBenefits()`

```php
indexBenefits($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Benefits

Lists all Benefits for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BenefitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->indexBenefits($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenefitsApi->indexBenefits: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBenefits()`

```php
updateBenefits($employerId, $employeeId, $id, $benefit): \SynergiTech\Staffology\Model\Benefit
```

Update Benefit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BenefitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Benefit you want to update.
$benefit = new \SynergiTech\Staffology\Model\Benefit(); // \SynergiTech\Staffology\Model\Benefit

try {
    $result = $apiInstance->updateBenefits($employerId, $employeeId, $id, $benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BenefitsApi->updateBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Benefit you want to update. | |
| **benefit** | [**\SynergiTech\Staffology\Model\Benefit**](../Model/Benefit.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Benefit**](../Model/Benefit.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
