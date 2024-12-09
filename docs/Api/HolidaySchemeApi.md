# SynergiTech\Staffology\HolidaySchemeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createHolidayScheme()**](HolidaySchemeApi.md#createHolidayScheme) | **POST** /employers/{employerId}/holidayscheme | Create holiday scheme |
| [**deleteHolidayScheme()**](HolidaySchemeApi.md#deleteHolidayScheme) | **DELETE** /employers/{employerId}/holidayscheme/{id} | Delete holiday scheme |
| [**getByIdHolidayScheme()**](HolidaySchemeApi.md#getByIdHolidayScheme) | **GET** /employers/{employerId}/holidayscheme/{id} | Get holiday scheme by Id |
| [**getHolidayScheme()**](HolidaySchemeApi.md#getHolidayScheme) | **GET** /employers/{employerId}/holidayscheme | Get holiday scheme |
| [**updateHolidayScheme()**](HolidaySchemeApi.md#updateHolidayScheme) | **PUT** /employers/{employerId}/holidayscheme/{id} | Update holiday scheme |


## `createHolidayScheme()`

```php
createHolidayScheme($employerId, $contractHolidaySchemeRequest): \SynergiTech\Staffology\Model\ContractHolidaySchemeResponse
```

Create holiday scheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HolidaySchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$contractHolidaySchemeRequest = new \SynergiTech\Staffology\Model\ContractHolidaySchemeRequest(); // \SynergiTech\Staffology\Model\ContractHolidaySchemeRequest

try {
    $result = $apiInstance->createHolidayScheme($employerId, $contractHolidaySchemeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaySchemeApi->createHolidayScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractHolidaySchemeRequest** | [**\SynergiTech\Staffology\Model\ContractHolidaySchemeRequest**](../Model/ContractHolidaySchemeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractHolidaySchemeResponse**](../Model/ContractHolidaySchemeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHolidayScheme()`

```php
deleteHolidayScheme($employerId, $id)
```

Delete holiday scheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HolidaySchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteHolidayScheme($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling HolidaySchemeApi->deleteHolidayScheme: ', $e->getMessage(), PHP_EOL;
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

## `getByIdHolidayScheme()`

```php
getByIdHolidayScheme($employerId, $id): \SynergiTech\Staffology\Model\ContractHolidaySchemeResponse
```

Get holiday scheme by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HolidaySchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getByIdHolidayScheme($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaySchemeApi->getByIdHolidayScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ContractHolidaySchemeResponse**](../Model/ContractHolidaySchemeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHolidayScheme()`

```php
getHolidayScheme($employerId): \SynergiTech\Staffology\Model\ContractHolidaySchemeResponse[]
```

Get holiday scheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HolidaySchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->getHolidayScheme($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaySchemeApi->getHolidayScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ContractHolidaySchemeResponse[]**](../Model/ContractHolidaySchemeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateHolidayScheme()`

```php
updateHolidayScheme($employerId, $id, $contractHolidaySchemeRequest): \SynergiTech\Staffology\Model\ContractHolidaySchemeResponse
```

Update holiday scheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HolidaySchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$contractHolidaySchemeRequest = new \SynergiTech\Staffology\Model\ContractHolidaySchemeRequest(); // \SynergiTech\Staffology\Model\ContractHolidaySchemeRequest

try {
    $result = $apiInstance->updateHolidayScheme($employerId, $id, $contractHolidaySchemeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidaySchemeApi->updateHolidayScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **contractHolidaySchemeRequest** | [**\SynergiTech\Staffology\Model\ContractHolidaySchemeRequest**](../Model/ContractHolidaySchemeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractHolidaySchemeResponse**](../Model/ContractHolidaySchemeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
