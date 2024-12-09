# SynergiTech\Staffology\TermCalendarYearApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTermCalendarYear()**](TermCalendarYearApi.md#createTermCalendarYear) | **POST** /employers/{employerId}/termcalendaryears/{termCalendarId} | Create Term Calendar Year |
| [**deleteTermCalendarYear()**](TermCalendarYearApi.md#deleteTermCalendarYear) | **DELETE** /employers/{employerId}/termcalendaryears/{termCalendarId}/{id} | Delete Term Calendar Year |
| [**getTermCalendarYear()**](TermCalendarYearApi.md#getTermCalendarYear) | **GET** /employers/{employerId}/termcalendaryears/{termCalendarId}/{id} | Get Term Calendar Year |
| [**indexTermCalendarYear()**](TermCalendarYearApi.md#indexTermCalendarYear) | **GET** /employers/{employerId}/termcalendaryears/{termCalendarId} | List Term Calendar Years |
| [**updateTermCalendarYear()**](TermCalendarYearApi.md#updateTermCalendarYear) | **PUT** /employers/{employerId}/termcalendaryears/{termCalendarId}/{id} | Update Term Calendar Year |


## `createTermCalendarYear()`

```php
createTermCalendarYear($employerId, $termCalendarId, $contractTermCalendarYearRequest): \SynergiTech\Staffology\Model\ContractTermCalendarYearResponse
```

Create Term Calendar Year

Creates a new Year data for the Employer and given Term Calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar Year belongs.
$termCalendarId = 'termCalendarId_example'; // string | The Id of the Term Calendar which you want to add a new year
$contractTermCalendarYearRequest = new \SynergiTech\Staffology\Model\ContractTermCalendarYearRequest(); // \SynergiTech\Staffology\Model\ContractTermCalendarYearRequest

try {
    $result = $apiInstance->createTermCalendarYear($employerId, $termCalendarId, $contractTermCalendarYearRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarYearApi->createTermCalendarYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar Year belongs. | |
| **termCalendarId** | **string**| The Id of the Term Calendar which you want to add a new year | |
| **contractTermCalendarYearRequest** | [**\SynergiTech\Staffology\Model\ContractTermCalendarYearRequest**](../Model/ContractTermCalendarYearRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarYearResponse**](../Model/ContractTermCalendarYearResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTermCalendarYear()`

```php
deleteTermCalendarYear($employerId, $termCalendarId, $id)
```

Delete Term Calendar Year

Deletes a specified Term Calendar Year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar Year belongs.
$termCalendarId = 'termCalendarId_example'; // string | The Id of the Term Calendar which you want to delete a year
$id = 'id_example'; // string | The Id of the Term Calendar Year which you want to delete

try {
    $apiInstance->deleteTermCalendarYear($employerId, $termCalendarId, $id);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarYearApi->deleteTermCalendarYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar Year belongs. | |
| **termCalendarId** | **string**| The Id of the Term Calendar which you want to delete a year | |
| **id** | **string**| The Id of the Term Calendar Year which you want to delete | |

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

## `getTermCalendarYear()`

```php
getTermCalendarYear($employerId, $termCalendarId, $id): \SynergiTech\Staffology\Model\ContractTermCalendarYearResponse
```

Get Term Calendar Year

Gets a specified Term Calendar Year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar Year belongs.
$termCalendarId = 'termCalendarId_example'; // string | The Id of the Term Calendar to which the Year belongs
$id = 'id_example'; // string | The Id of the Term Calendar Year which you want to fetch

try {
    $result = $apiInstance->getTermCalendarYear($employerId, $termCalendarId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarYearApi->getTermCalendarYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar Year belongs. | |
| **termCalendarId** | **string**| The Id of the Term Calendar to which the Year belongs | |
| **id** | **string**| The Id of the Term Calendar Year which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarYearResponse**](../Model/ContractTermCalendarYearResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexTermCalendarYear()`

```php
indexTermCalendarYear($employerId, $termCalendarId): \SynergiTech\Staffology\Model\ContractTermCalendarYearResponse[]
```

List Term Calendar Years

Lists all Years for an Employer and given Term Calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get Term Calendar Year list
$termCalendarId = 'termCalendarId_example'; // string | The Id of the Term Calendar for which you want to list Years

try {
    $result = $apiInstance->indexTermCalendarYear($employerId, $termCalendarId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarYearApi->indexTermCalendarYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get Term Calendar Year list | |
| **termCalendarId** | **string**| The Id of the Term Calendar for which you want to list Years | |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarYearResponse[]**](../Model/ContractTermCalendarYearResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTermCalendarYear()`

```php
updateTermCalendarYear($employerId, $termCalendarId, $id, $contractTermCalendarYearRequest): \SynergiTech\Staffology\Model\ContractTermCalendarYearResponse
```

Update Term Calendar Year

Updates Year data for the Employer and given Term Calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarYearApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar Year belongs.
$termCalendarId = 'termCalendarId_example'; // string | The Id of the Term Calendar which you want to update existing year
$id = 'id_example'; // string | The Id of the Term Calendar Year which you want to update data
$contractTermCalendarYearRequest = new \SynergiTech\Staffology\Model\ContractTermCalendarYearRequest(); // \SynergiTech\Staffology\Model\ContractTermCalendarYearRequest

try {
    $result = $apiInstance->updateTermCalendarYear($employerId, $termCalendarId, $id, $contractTermCalendarYearRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarYearApi->updateTermCalendarYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar Year belongs. | |
| **termCalendarId** | **string**| The Id of the Term Calendar which you want to update existing year | |
| **id** | **string**| The Id of the Term Calendar Year which you want to update data | |
| **contractTermCalendarYearRequest** | [**\SynergiTech\Staffology\Model\ContractTermCalendarYearRequest**](../Model/ContractTermCalendarYearRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarYearResponse**](../Model/ContractTermCalendarYearResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
