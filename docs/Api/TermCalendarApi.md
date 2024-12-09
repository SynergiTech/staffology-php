# SynergiTech\Staffology\TermCalendarApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTermCalendar()**](TermCalendarApi.md#createTermCalendar) | **POST** /employers/{employerId}/termcalendars | Create Term Calendar |
| [**deleteTermCalendar()**](TermCalendarApi.md#deleteTermCalendar) | **DELETE** /employers/{employerId}/termcalendars/{id} | Delete Term Calendar |
| [**getTermCalendar()**](TermCalendarApi.md#getTermCalendar) | **GET** /employers/{employerId}/termcalendars/{id} | Get Term Calendar |
| [**indexTermCalendar()**](TermCalendarApi.md#indexTermCalendar) | **GET** /employers/{employerId}/termcalendars | List Term Calendars |
| [**updateTermCalendar()**](TermCalendarApi.md#updateTermCalendar) | **PUT** /employers/{employerId}/termcalendars/{id} | Update Term Calendar |


## `createTermCalendar()`

```php
createTermCalendar($employerId, $contractTermCalendarRequest): \SynergiTech\Staffology\Model\ContractTermCalendarResponse
```

Create Term Calendar

Creates a new Term Calendar for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which new Term Calendar will be created.
$contractTermCalendarRequest = new \SynergiTech\Staffology\Model\ContractTermCalendarRequest(); // \SynergiTech\Staffology\Model\ContractTermCalendarRequest

try {
    $result = $apiInstance->createTermCalendar($employerId, $contractTermCalendarRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarApi->createTermCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which new Term Calendar will be created. | |
| **contractTermCalendarRequest** | [**\SynergiTech\Staffology\Model\ContractTermCalendarRequest**](../Model/ContractTermCalendarRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarResponse**](../Model/ContractTermCalendarResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTermCalendar()`

```php
deleteTermCalendar($employerId, $id)
```

Delete Term Calendar

Deletes a specified Term Calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar belongs.
$id = 'id_example'; // string | The Id of the Term Calendar which you want to delete

try {
    $apiInstance->deleteTermCalendar($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarApi->deleteTermCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar belongs. | |
| **id** | **string**| The Id of the Term Calendar which you want to delete | |

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

## `getTermCalendar()`

```php
getTermCalendar($employerId, $id): \SynergiTech\Staffology\Model\ContractTermCalendarResponse
```

Get Term Calendar

Gets a specified Term Calendar.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar belongs.
$id = 'id_example'; // string | The Id of the Term Calendar which you want to fetch

try {
    $result = $apiInstance->getTermCalendar($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarApi->getTermCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar belongs. | |
| **id** | **string**| The Id of the Term Calendar which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarResponse**](../Model/ContractTermCalendarResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexTermCalendar()`

```php
indexTermCalendar($employerId): \SynergiTech\Staffology\Model\ContractTermCalendarResponse[]
```

List Term Calendars

Lists all Term Calendars for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the Term Calendar list

try {
    $result = $apiInstance->indexTermCalendar($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarApi->indexTermCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the Term Calendar list | |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarResponse[]**](../Model/ContractTermCalendarResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTermCalendar()`

```php
updateTermCalendar($employerId, $id, $contractTermCalendarRequest): \SynergiTech\Staffology\Model\ContractTermCalendarResponse
```

Update Term Calendar

Updates a Term Calendar for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TermCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Term Calendar belongs.
$id = 'id_example'; // string | The Id of the Term Calendar which you want to update
$contractTermCalendarRequest = new \SynergiTech\Staffology\Model\ContractTermCalendarRequest(); // \SynergiTech\Staffology\Model\ContractTermCalendarRequest

try {
    $result = $apiInstance->updateTermCalendar($employerId, $id, $contractTermCalendarRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TermCalendarApi->updateTermCalendar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Term Calendar belongs. | |
| **id** | **string**| The Id of the Term Calendar which you want to update | |
| **contractTermCalendarRequest** | [**\SynergiTech\Staffology\Model\ContractTermCalendarRequest**](../Model/ContractTermCalendarRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractTermCalendarResponse**](../Model/ContractTermCalendarResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
