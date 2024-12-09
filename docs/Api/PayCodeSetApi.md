# SynergiTech\Staffology\PayCodeSetApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayCodeSet()**](PayCodeSetApi.md#createPayCodeSet) | **POST** /employers/{employerId}/paycodesets | Create PayCodeSet |
| [**deletePayCodeSet()**](PayCodeSetApi.md#deletePayCodeSet) | **DELETE** /employers/{employerId}/paycodesets/{id} | Delete PayCodeSet |
| [**getPayCodeSet()**](PayCodeSetApi.md#getPayCodeSet) | **GET** /employers/{employerId}/paycodesets/{id} | Get PayCodeSet |
| [**indexPayCodeSet()**](PayCodeSetApi.md#indexPayCodeSet) | **GET** /employers/{employerId}/paycodesets | List PayCodeSets |
| [**updatePayCodeSet()**](PayCodeSetApi.md#updatePayCodeSet) | **PUT** /employers/{employerId}/paycodesets/{id} | Update PayCodeSet |


## `createPayCodeSet()`

```php
createPayCodeSet($employerId, $payCodeSet): \SynergiTech\Staffology\Model\PayCodeSet
```

Create PayCodeSet

Creates a new PayCodeSet for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payCodeSet = new \SynergiTech\Staffology\Model\PayCodeSet(); // \SynergiTech\Staffology\Model\PayCodeSet

try {
    $result = $apiInstance->createPayCodeSet($employerId, $payCodeSet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeSetApi->createPayCodeSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payCodeSet** | [**\SynergiTech\Staffology\Model\PayCodeSet**](../Model/PayCodeSet.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayCodeSet**](../Model/PayCodeSet.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayCodeSet()`

```php
deletePayCodeSet($employerId, $id)
```

Delete PayCodeSet

Deletes the specified PayCodeSet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deletePayCodeSet($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeSetApi->deletePayCodeSet: ', $e->getMessage(), PHP_EOL;
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

## `getPayCodeSet()`

```php
getPayCodeSet($employerId, $id): \SynergiTech\Staffology\Model\PayCodeSet
```

Get PayCodeSet

Gets the PayCodeSet specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Pay Code Set belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPayCodeSet($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeSetApi->getPayCodeSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Pay Code Set belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\PayCodeSet**](../Model/PayCodeSet.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPayCodeSet()`

```php
indexPayCodeSet($employerId): \SynergiTech\Staffology\Model\Item[]
```

List PayCodeSets

Lists all PayCodeSets for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list PayCodeSets

try {
    $result = $apiInstance->indexPayCodeSet($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeSetApi->indexPayCodeSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list PayCodeSets | |

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

## `updatePayCodeSet()`

```php
updatePayCodeSet($employerId, $id, $payCodeSet): \SynergiTech\Staffology\Model\PayCodeSet
```

Update PayCodeSet

Updates the details of an existing PayCodeSet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeSetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$payCodeSet = new \SynergiTech\Staffology\Model\PayCodeSet(); // \SynergiTech\Staffology\Model\PayCodeSet

try {
    $result = $apiInstance->updatePayCodeSet($employerId, $id, $payCodeSet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeSetApi->updatePayCodeSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **payCodeSet** | [**\SynergiTech\Staffology\Model\PayCodeSet**](../Model/PayCodeSet.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayCodeSet**](../Model/PayCodeSet.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
