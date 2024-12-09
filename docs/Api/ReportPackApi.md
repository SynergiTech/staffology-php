# SynergiTech\Staffology\ReportPackApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReportPack()**](ReportPackApi.md#createReportPack) | **POST** /employers/{employerId}/reports/packs | Create ReportPack |
| [**deleteReportPack()**](ReportPackApi.md#deleteReportPack) | **DELETE** /employers/{employerId}/reports/packs/{id} | Delete ReportPack |
| [**getReportPack()**](ReportPackApi.md#getReportPack) | **GET** /employers/{employerId}/reports/packs/{id} | Get ReportPack |
| [**indexReportPack()**](ReportPackApi.md#indexReportPack) | **GET** /employers/{employerId}/reports/packs | List ReportPacks |
| [**updateReportPack()**](ReportPackApi.md#updateReportPack) | **PUT** /employers/{employerId}/reports/packs/{id} | Update ReportPack |


## `createReportPack()`

```php
createReportPack($employerId, $reportPack): \SynergiTech\Staffology\Model\ReportPack
```

Create ReportPack

Creates a new ReportPack for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportPackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$reportPack = new \SynergiTech\Staffology\Model\ReportPack(); // \SynergiTech\Staffology\Model\ReportPack

try {
    $result = $apiInstance->createReportPack($employerId, $reportPack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportPackApi->createReportPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **reportPack** | [**\SynergiTech\Staffology\Model\ReportPack**](../Model/ReportPack.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportPack**](../Model/ReportPack.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReportPack()`

```php
deleteReportPack($employerId, $id)
```

Delete ReportPack

Deletes the specified ReportPack.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportPackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteReportPack($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling ReportPackApi->deleteReportPack: ', $e->getMessage(), PHP_EOL;
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

## `getReportPack()`

```php
getReportPack($employerId, $id): \SynergiTech\Staffology\Model\ReportPack
```

Get ReportPack

Gets the ReportPack specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportPackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the ReportPack belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->getReportPack($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportPackApi->getReportPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the ReportPack belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ReportPack**](../Model/ReportPack.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexReportPack()`

```php
indexReportPack($employerId): \SynergiTech\Staffology\Model\Item[]
```

List ReportPacks

Lists all ReportPacks for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportPackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list ReportPacks

try {
    $result = $apiInstance->indexReportPack($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportPackApi->indexReportPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list ReportPacks | |

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

## `updateReportPack()`

```php
updateReportPack($employerId, $id, $reportPack): \SynergiTech\Staffology\Model\ReportPack
```

Update ReportPack

Updates a ReportPack for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportPackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$reportPack = new \SynergiTech\Staffology\Model\ReportPack(); // \SynergiTech\Staffology\Model\ReportPack

try {
    $result = $apiInstance->updateReportPack($employerId, $id, $reportPack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportPackApi->updateReportPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **reportPack** | [**\SynergiTech\Staffology\Model\ReportPack**](../Model/ReportPack.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportPack**](../Model/ReportPack.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
