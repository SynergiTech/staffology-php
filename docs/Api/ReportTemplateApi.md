# SynergiTech\Staffology\ReportTemplateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReportTemplate()**](ReportTemplateApi.md#createReportTemplate) | **POST** /employers/{employerId}/reporttemplates | Create Report Template (beta) |
| [**deleteReportTemplate()**](ReportTemplateApi.md#deleteReportTemplate) | **DELETE** /employers/{employerId}/reporttemplates/{id} | Delete Report Template (beta) |
| [**getReportTemplate()**](ReportTemplateApi.md#getReportTemplate) | **GET** /employers/{employerId}/reporttemplates/{id} | Get Report Template (beta) |
| [**indexReportTemplate()**](ReportTemplateApi.md#indexReportTemplate) | **GET** /employers/{employerId}/reporttemplates | List Report Templates (beta) |
| [**updateReportTemplate()**](ReportTemplateApi.md#updateReportTemplate) | **PUT** /employers/{employerId}/reporttemplates/{id} | Update Report Template (beta) |


## `createReportTemplate()`

```php
createReportTemplate($employerId, $reportTemplate): \SynergiTech\Staffology\Model\ReportTemplate
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
$reportTemplate = new \SynergiTech\Staffology\Model\ReportTemplate(); // \SynergiTech\Staffology\Model\ReportTemplate

try {
    $result = $apiInstance->createReportTemplate($employerId, $reportTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportTemplateApi->createReportTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Report Template belongs. | |
| **reportTemplate** | [**\SynergiTech\Staffology\Model\ReportTemplate**](../Model/ReportTemplate.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportTemplate**](../Model/ReportTemplate.md)

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

## `getReportTemplate()`

```php
getReportTemplate($employerId, $id): \SynergiTech\Staffology\Model\ReportTemplate
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

[**\SynergiTech\Staffology\Model\ReportTemplate**](../Model/ReportTemplate.md)

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
updateReportTemplate($employerId, $id, $reportTemplate): \SynergiTech\Staffology\Model\OccupationalPolicy
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
$reportTemplate = new \SynergiTech\Staffology\Model\ReportTemplate(); // \SynergiTech\Staffology\Model\ReportTemplate

try {
    $result = $apiInstance->updateReportTemplate($employerId, $id, $reportTemplate);
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
| **reportTemplate** | [**\SynergiTech\Staffology\Model\ReportTemplate**](../Model/ReportTemplate.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalPolicy**](../Model/OccupationalPolicy.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
