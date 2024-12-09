# SynergiTech\Staffology\PensionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPension()**](PensionApi.md#createPension) | **POST** /employers/{employerId}/employees/{employeeId}/pension | Create Pension |
| [**getDeprecatedPension()**](PensionApi.md#getDeprecatedPension) | **GET** /employers/{employerId}/employees/{employeeId}/pension | Get Pension (deprecated) |
| [**getPension()**](PensionApi.md#getPension) | **GET** /employers/{employerId}/employees/{employeeId}/pension/{id} | Get Pension |
| [**lastPayRunEntryWithPensionYtdValuesForEmployeePension()**](PensionApi.md#lastPayRunEntryWithPensionYtdValuesForEmployeePension) | **GET** /employers/{employerId}/employees/{employeeId}/pension/{pensionUniqueId}/{taxYear}/pensionytd | Get last PayRunEntry for a Pension (deprecated) |
| [**listPension()**](PensionApi.md#listPension) | **GET** /employers/{employerId}/employees/{employeeId}/pension/list | List Pensions |
| [**removeDeprecatedPension()**](PensionApi.md#removeDeprecatedPension) | **DELETE** /employers/{employerId}/employees/{employeeId}/pension | Remove Pension (deprecated) |
| [**removePension()**](PensionApi.md#removePension) | **DELETE** /employers/{employerId}/employees/{employeeId}/pension/{id} | Remove Pension |
| [**updateDeprecatedPension()**](PensionApi.md#updateDeprecatedPension) | **PUT** /employers/{employerId}/employees/{employeeId}/pension | Update Pension (deprecated) |
| [**updatePension()**](PensionApi.md#updatePension) | **PUT** /employers/{employerId}/employees/{employeeId}/pension/{id} | Update Pension |


## `createPension()`

```php
createPension($employerId, $employeeId, $pension): \SynergiTech\Staffology\Model\Pension
```

Create Pension

Creates a Pension for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to create a Pension
$pension = new \SynergiTech\Staffology\Model\Pension(); // \SynergiTech\Staffology\Model\Pension

try {
    $result = $apiInstance->createPension($employerId, $employeeId, $pension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->createPension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to create a Pension | |
| **pension** | [**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeprecatedPension()`

```php
getDeprecatedPension($employerId, $employeeId): \SynergiTech\Staffology\Model\Pension
```

Get Pension (deprecated)

This endpoint is now deprecated. You should use the alternative end points that require an ID to be specified.  Until it is removed, this endpoint will work only for employees with a single pension    Returns the Pension, if any, for an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve the Pension

try {
    $result = $apiInstance->getDeprecatedPension($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->getDeprecatedPension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve the Pension | |

### Return type

[**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPension()`

```php
getPension($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\Pension
```

Get Pension

Returns a Pension for an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve the Pension
$id = 'id_example'; // string | The Id of the Pension

try {
    $result = $apiInstance->getPension($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->getPension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve the Pension | |
| **id** | **string**| The Id of the Pension | |

### Return type

[**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lastPayRunEntryWithPensionYtdValuesForEmployeePension()`

```php
lastPayRunEntryWithPensionYtdValuesForEmployeePension($employerId, $employeeId, $pensionUniqueId, $taxYear): \SynergiTech\Staffology\Model\PayRunEntry
```

Get last PayRunEntry for a Pension (deprecated)

This endpoint is now deprecated. You should use the alternative GET end point from PayRun        Gets a last PayRunEntry for a Pension.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to get pay run entry for
$pensionUniqueId = 'pensionUniqueId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->lastPayRunEntryWithPensionYtdValuesForEmployeePension($employerId, $employeeId, $pensionUniqueId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->lastPayRunEntryWithPensionYtdValuesForEmployeePension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee you want to get pay run entry for | |
| **pensionUniqueId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |

### Return type

[**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPension()`

```php
listPension($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Pensions

Returns a list of Item representing any Pensions for the given employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to list Pensions

try {
    $result = $apiInstance->listPension($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->listPension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to list Pensions | |

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

## `removeDeprecatedPension()`

```php
removeDeprecatedPension($employerId, $employeeId)
```

Remove Pension (deprecated)

This endpoint is now deprecated. You should use the alternative end points that require an ID to be specified.  Until it is removed, this endpoint will work only for employees with a single pension    Removes the Pension for an Employee.  For AE Pensions this will remove the employee from the pension and delete any associated AeAssessments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to remove the Pension

try {
    $apiInstance->removeDeprecatedPension($employerId, $employeeId);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->removeDeprecatedPension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to remove the Pension | |

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

## `removePension()`

```php
removePension($employerId, $employeeId, $id)
```

Remove Pension

Removes a  Pension for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to remove the Pension
$id = 'id_example'; // string | The Id of the Pension

try {
    $apiInstance->removePension($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->removePension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to remove the Pension | |
| **id** | **string**| The Id of the Pension | |

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

## `updateDeprecatedPension()`

```php
updateDeprecatedPension($employerId, $employeeId, $pension): \SynergiTech\Staffology\Model\Pension
```

Update Pension (deprecated)

This endpoint is now deprecated. You should use the alternative end points that require an ID to be specified.  Until it is removed, this endpoint will work only for employees with a single pension    Updates the Pension for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to update the Pension
$pension = new \SynergiTech\Staffology\Model\Pension(); // \SynergiTech\Staffology\Model\Pension

try {
    $result = $apiInstance->updateDeprecatedPension($employerId, $employeeId, $pension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->updateDeprecatedPension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to update the Pension | |
| **pension** | [**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePension()`

```php
updatePension($employerId, $employeeId, $id, $pension): \SynergiTech\Staffology\Model\Pension
```

Update Pension

Updates the Pension for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to update the Pension
$id = 'id_example'; // string | The Id of the Pension
$pension = new \SynergiTech\Staffology\Model\Pension(); // \SynergiTech\Staffology\Model\Pension

try {
    $result = $apiInstance->updatePension($employerId, $employeeId, $id, $pension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionApi->updatePension: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to update the Pension | |
| **id** | **string**| The Id of the Pension | |
| **pension** | [**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Pension**](../Model/Pension.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
