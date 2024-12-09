# SynergiTech\Staffology\PensionRefundApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPensionRefund()**](PensionRefundApi.md#createPensionRefund) | **POST** /employers/{employerId}/employees/{employeeId}/pensionrefund | Create Pension Refund |
| [**deletePensionRefund()**](PensionRefundApi.md#deletePensionRefund) | **DELETE** /employers/{employerId}/employees/{employeeId}/pensionrefund/{id} | Delete Pension Refund |
| [**getPensionRefund()**](PensionRefundApi.md#getPensionRefund) | **GET** /employers/{employerId}/employees/{employeeId}/pensionrefund/{id} | Get Pension Refund |
| [**indexPensionRefund()**](PensionRefundApi.md#indexPensionRefund) | **GET** /employers/{employerId}/employees/{employeeId}/pensionrefund | List Pension Refunds |
| [**issueRefundForCurrentPensionSchemePensionRefund()**](PensionRefundApi.md#issueRefundForCurrentPensionSchemePensionRefund) | **POST** /employers/{employerId}/employees/{employeeId}/pensionrefund/autocalculated | Issue Pension Refund (deprecated) |
| [**issueRefundForPensionPensionRefund()**](PensionRefundApi.md#issueRefundForPensionPensionRefund) | **POST** /employers/{employerId}/employees/{employeeId}/pensionrefund/{pensionId}/autocalculated | Issue Pension Refund |
| [**updatePensionRefund()**](PensionRefundApi.md#updatePensionRefund) | **PUT** /employers/{employerId}/employees/{employeeId}/pensionrefund/{id} | Update Pension Refund |


## `createPensionRefund()`

```php
createPensionRefund($employerId, $employeeId, $pensionRefund)
```

Create Pension Refund

Creates a Pension Refund for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$pensionRefund = new \SynergiTech\Staffology\Model\PensionRefund(); // \SynergiTech\Staffology\Model\PensionRefund

try {
    $apiInstance->createPensionRefund($employerId, $employeeId, $pensionRefund);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->createPensionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **pensionRefund** | [**\SynergiTech\Staffology\Model\PensionRefund**](../Model/PensionRefund.md)|  | [optional] |

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

## `deletePensionRefund()`

```php
deletePensionRefund($employerId, $employeeId, $id)
```

Delete Pension Refund

Deletes the Pension Refund specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Pension Refund you want to delete.

try {
    $apiInstance->deletePensionRefund($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->deletePensionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Pension Refund you want to delete. | |

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

## `getPensionRefund()`

```php
getPensionRefund($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\PensionRefund
```

Get Pension Refund

Gets the Pension Refund specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Pension Refund you want to retrieve.

try {
    $result = $apiInstance->getPensionRefund($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->getPensionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Pension Refund you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\PensionRefund**](../Model/PensionRefund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPensionRefund()`

```php
indexPensionRefund($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Pension Refunds

Lists all Pension Refunds for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->indexPensionRefund($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->indexPensionRefund: ', $e->getMessage(), PHP_EOL;
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

## `issueRefundForCurrentPensionSchemePensionRefund()`

```php
issueRefundForCurrentPensionSchemePensionRefund($employerId, $employeeId): \SynergiTech\Staffology\Model\PensionRefund
```

Issue Pension Refund (deprecated)

Creates a pension refund for full contribution amount for the current tax year for the current pensionScheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->issueRefundForCurrentPensionSchemePensionRefund($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->issueRefundForCurrentPensionSchemePensionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\PensionRefund**](../Model/PensionRefund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueRefundForPensionPensionRefund()`

```php
issueRefundForPensionPensionRefund($employerId, $employeeId, $pensionId): \SynergiTech\Staffology\Model\PensionRefund
```

Issue Pension Refund

Creates a pension refund for full contribution amount for the current tax year for the current pension

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$pensionId = 'pensionId_example'; // string | The Id of the pension for which you want to issue a refund.

try {
    $result = $apiInstance->issueRefundForPensionPensionRefund($employerId, $employeeId, $pensionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->issueRefundForPensionPensionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **pensionId** | **string**| The Id of the pension for which you want to issue a refund. | |

### Return type

[**\SynergiTech\Staffology\Model\PensionRefund**](../Model/PensionRefund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePensionRefund()`

```php
updatePensionRefund($employerId, $employeeId, $id, $pensionRefund): \SynergiTech\Staffology\Model\PensionRefund
```

Update Pension Refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Pension Refund you want to update.
$pensionRefund = new \SynergiTech\Staffology\Model\PensionRefund(); // \SynergiTech\Staffology\Model\PensionRefund

try {
    $result = $apiInstance->updatePensionRefund($employerId, $employeeId, $id, $pensionRefund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionRefundApi->updatePensionRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Pension Refund you want to update. | |
| **pensionRefund** | [**\SynergiTech\Staffology\Model\PensionRefund**](../Model/PensionRefund.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PensionRefund**](../Model/PensionRefund.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
