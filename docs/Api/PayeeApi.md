# SynergiTech\Staffology\PayeeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayee()**](PayeeApi.md#createPayee) | **POST** /employers/{employerId}/payees | Create Payee |
| [**deletePayee()**](PayeeApi.md#deletePayee) | **DELETE** /employers/{employerId}/payees/{id} | Delete Payee |
| [**getPayee()**](PayeeApi.md#getPayee) | **GET** /employers/{employerId}/payees/{id} | Get Payee |
| [**indexPayee()**](PayeeApi.md#indexPayee) | **GET** /employers/{employerId}/payees | List Payees |
| [**updatePayee()**](PayeeApi.md#updatePayee) | **PUT** /employers/{employerId}/payees/{id} | Update Payee |


## `createPayee()`

```php
createPayee($employerId, $payee): \SynergiTech\Staffology\Model\Payee
```

Create Payee

Creates a new Payee for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payee = new \SynergiTech\Staffology\Model\Payee(); // \SynergiTech\Staffology\Model\Payee

try {
    $result = $apiInstance->createPayee($employerId, $payee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeApi->createPayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payee** | [**\SynergiTech\Staffology\Model\Payee**](../Model/Payee.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Payee**](../Model/Payee.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayee()`

```php
deletePayee($employerId, $id)
```

Delete Payee

Deletes the specified Payee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deletePayee($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling PayeeApi->deletePayee: ', $e->getMessage(), PHP_EOL;
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

## `getPayee()`

```php
getPayee($employerId, $id): \SynergiTech\Staffology\Model\Payee
```

Get Payee

Gets the Payee specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Payee belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPayee($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeApi->getPayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Payee belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Payee**](../Model/Payee.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPayee()`

```php
indexPayee($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Payees

Lists all Payees for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Payees

try {
    $result = $apiInstance->indexPayee($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeApi->indexPayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Payees | |

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

## `updatePayee()`

```php
updatePayee($employerId, $id, $payee): \SynergiTech\Staffology\Model\Payee
```

Update Payee

Updates a Payee for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$payee = new \SynergiTech\Staffology\Model\Payee(); // \SynergiTech\Staffology\Model\Payee

try {
    $result = $apiInstance->updatePayee($employerId, $id, $payee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeApi->updatePayee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **payee** | [**\SynergiTech\Staffology\Model\Payee**](../Model/Payee.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Payee**](../Model/Payee.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
