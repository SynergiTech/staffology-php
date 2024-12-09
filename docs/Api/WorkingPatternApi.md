# SynergiTech\Staffology\WorkingPatternApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWorkingPattern()**](WorkingPatternApi.md#createWorkingPattern) | **POST** /employers/{employerId}/workingpatterns | Create WorkingPattern |
| [**deleteWorkingPattern()**](WorkingPatternApi.md#deleteWorkingPattern) | **DELETE** /employers/{employerId}/workingpatterns/{id} | Delete WorkingPattern |
| [**getAsyncWorkingPattern()**](WorkingPatternApi.md#getAsyncWorkingPattern) | **GET** /employers/{employerId}/workingpatterns/{id} | Get WorkingPattern |
| [**indexAsyncWorkingPattern()**](WorkingPatternApi.md#indexAsyncWorkingPattern) | **GET** /employers/{employerId}/workingpatterns | List WorkingPatterns |
| [**updateWorkingPattern()**](WorkingPatternApi.md#updateWorkingPattern) | **PUT** /employers/{employerId}/workingpatterns/{id} | Update WorkingPattern |


## `createWorkingPattern()`

```php
createWorkingPattern($employerId, $contractWorkingPatternRequest): \SynergiTech\Staffology\Model\WorkingPattern
```

Create WorkingPattern

Creates a new WorkingPattern for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WorkingPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$contractWorkingPatternRequest = new \SynergiTech\Staffology\Model\ContractWorkingPatternRequest(); // \SynergiTech\Staffology\Model\ContractWorkingPatternRequest

try {
    $result = $apiInstance->createWorkingPattern($employerId, $contractWorkingPatternRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingPatternApi->createWorkingPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractWorkingPatternRequest** | [**\SynergiTech\Staffology\Model\ContractWorkingPatternRequest**](../Model/ContractWorkingPatternRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\WorkingPattern**](../Model/WorkingPattern.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkingPattern()`

```php
deleteWorkingPattern($employerId, $id)
```

Delete WorkingPattern

Deletes the specified WorkingPattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WorkingPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteWorkingPattern($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling WorkingPatternApi->deleteWorkingPattern: ', $e->getMessage(), PHP_EOL;
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

## `getAsyncWorkingPattern()`

```php
getAsyncWorkingPattern($employerId, $id): \SynergiTech\Staffology\Model\ContractWorkingPatternResponse
```

Get WorkingPattern

Gets the WorkingPattern specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WorkingPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the WorkingPattern belongs.
$id = 'id_example'; // string | The id of the WorkingPattern you want to retrieve.

try {
    $result = $apiInstance->getAsyncWorkingPattern($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingPatternApi->getAsyncWorkingPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the WorkingPattern belongs. | |
| **id** | **string**| The id of the WorkingPattern you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractWorkingPatternResponse**](../Model/ContractWorkingPatternResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexAsyncWorkingPattern()`

```php
indexAsyncWorkingPattern($employerId): \SynergiTech\Staffology\Model\Item[]
```

List WorkingPatterns

Lists all WorkingPattern for the Employer specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WorkingPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list WorkingPattern

try {
    $result = $apiInstance->indexAsyncWorkingPattern($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingPatternApi->indexAsyncWorkingPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list WorkingPattern | |

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

## `updateWorkingPattern()`

```php
updateWorkingPattern($employerId, $id, $contractWorkingPatternRequest): \SynergiTech\Staffology\Model\ContractWorkingPatternResponse
```

Update WorkingPattern

Updates the details of an existing WorkingPattern.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WorkingPatternApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$contractWorkingPatternRequest = new \SynergiTech\Staffology\Model\ContractWorkingPatternRequest(); // \SynergiTech\Staffology\Model\ContractWorkingPatternRequest

try {
    $result = $apiInstance->updateWorkingPattern($employerId, $id, $contractWorkingPatternRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkingPatternApi->updateWorkingPattern: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **contractWorkingPatternRequest** | [**\SynergiTech\Staffology\Model\ContractWorkingPatternRequest**](../Model/ContractWorkingPatternRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractWorkingPatternResponse**](../Model/ContractWorkingPatternResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
