# SynergiTech\Staffology\ReportTemplateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReportTemplate()**](ReportTemplateApi.md#createReportTemplate) | **POST** /employers/{employerId}/reporttemplate | Create Report Template (beta) |
| [**deleteReportTemplate()**](ReportTemplateApi.md#deleteReportTemplate) | **DELETE** /employers/{employerId}/reporttemplate/{id} | Delete Report Template (beta) |
| [**getContentDictionaryReportTemplate()**](ReportTemplateApi.md#getContentDictionaryReportTemplate) | **GET** /contentdictionary | Get Content Dictionary For Report Template Column Type(beta) |
| [**getReportTemplate()**](ReportTemplateApi.md#getReportTemplate) | **GET** /employers/{employerId}/reporttemplate/{id} | Get Report Template (beta) |
| [**indexReportTemplate()**](ReportTemplateApi.md#indexReportTemplate) | **GET** /employers/{employerId}/reporttemplate | List Report Templates (beta) |
| [**updateReportTemplate()**](ReportTemplateApi.md#updateReportTemplate) | **PUT** /employers/{employerId}/reporttemplate/{id} | Update Report Template (beta) |
| [**validateReportTemplateColumnsReportTemplate()**](ReportTemplateApi.md#validateReportTemplateColumnsReportTemplate) | **POST** /column/validate | Validate Report Template Columns(beta) |


## `createReportTemplate()`

```php
createReportTemplate($employerId, $contractReportTemplateRequest): \SynergiTech\Staffology\Model\ContractReportTemplateResponse
```

Create Report Template (beta)

Creates a new Report Template for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Report Template belongs.
$contractReportTemplateRequest = new \SynergiTech\Staffology\Model\ContractReportTemplateRequest(); // \SynergiTech\Staffology\Model\ContractReportTemplateRequest

try {
    $result = $apiInstance->createReportTemplate($employerId, $contractReportTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->createReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Report Template belongs. | |
| **contractReportTemplateRequest** | [**\SynergiTech\Staffology\Model\ContractReportTemplateRequest**](../Model/ContractReportTemplateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractReportTemplateResponse**](../Model/ContractReportTemplateResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReportTemplate()`

```php
deleteReportTemplate($employerId, $id)
```

Delete Report Template (beta)

Deletes the specified Report Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Report Template belongs.
$id = 'id_example'; // string | The Id of the Report Template which you want to fetch

try {
    $apiInstance->deleteReportTemplate($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->deleteReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Report Template belongs. | |
| **id** | **string**| The Id of the Report Template which you want to fetch | |

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

## `getContentDictionaryReportTemplate()`

```php
getContentDictionaryReportTemplate(): \SynergiTech\Staffology\Model\ContractReportTemplateContentDictionaryResponse[]
```

Get Content Dictionary For Report Template Column Type(beta)

Gets the content dictionary for ReportTemplate columns type for employee and employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContentDictionaryReportTemplate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->getContentDictionaryReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Staffology\Model\ContractReportTemplateContentDictionaryResponse[]**](../Model/ContractReportTemplateContentDictionaryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTemplate()`

```php
getReportTemplate($employerId, $id): \SynergiTech\Staffology\Model\ContractReportTemplateResponse
```

Get Report Template (beta)

Gets the Report Template specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Report Template belongs.
$id = 'id_example'; // string | The Id of the Report Template which you want to fetch

try {
    $result = $apiInstance->getReportTemplate($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->getReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Report Template belongs. | |
| **id** | **string**| The Id of the Report Template which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\ContractReportTemplateResponse**](../Model/ContractReportTemplateResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexReportTemplate()`

```php
indexReportTemplate($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Report Templates (beta)

Lists all Report Templates for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Report Template belongs.

try {
    $result = $apiInstance->indexReportTemplate($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->indexReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Report Template belongs. | |

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

## `updateReportTemplate()`

```php
updateReportTemplate($employerId, $id, $contractReportTemplateRequest): \SynergiTech\Staffology\Model\ContractReportTemplateResponse
```

Update Report Template (beta)

Updates a Report Template for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Report Template belongs.
$id = 'id_example'; // string | The Id of the Report Template which you want to fetch
$contractReportTemplateRequest = new \SynergiTech\Staffology\Model\ContractReportTemplateRequest(); // \SynergiTech\Staffology\Model\ContractReportTemplateRequest

try {
    $result = $apiInstance->updateReportTemplate($employerId, $id, $contractReportTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->updateReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Report Template belongs. | |
| **id** | **string**| The Id of the Report Template which you want to fetch | |
| **contractReportTemplateRequest** | [**\SynergiTech\Staffology\Model\ContractReportTemplateRequest**](../Model/ContractReportTemplateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractReportTemplateResponse**](../Model/ContractReportTemplateResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateReportTemplateColumnsReportTemplate()`

```php
validateReportTemplateColumnsReportTemplate($contractReportTemplateColumnRequest)
```

Validate Report Template Columns(beta)

Validates the specified Report Template columns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractReportTemplateColumnRequest = new \SynergiTech\Staffology\Model\ContractReportTemplateColumnRequest(); // \SynergiTech\Staffology\Model\ContractReportTemplateColumnRequest

try {
    $apiInstance->validateReportTemplateColumnsReportTemplate($contractReportTemplateColumnRequest);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->validateReportTemplateColumnsReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractReportTemplateColumnRequest** | [**\SynergiTech\Staffology\Model\ContractReportTemplateColumnRequest**](../Model/ContractReportTemplateColumnRequest.md)|  | [optional] |

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
