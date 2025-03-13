# SynergiTech\Staffology\ReportBuilderApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPaySchedulesByEmployerAndPayDatesReportBuilder()**](ReportBuilderApi.md#getPaySchedulesByEmployerAndPayDatesReportBuilder) | **POST** /reportbuilder/schedulesbydate | List PaySchedules By Date Range |
| [**getPaySchedulesByEmployersAndTaxYearsReportBuilder()**](ReportBuilderApi.md#getPaySchedulesByEmployersAndTaxYearsReportBuilder) | **POST** /reportbuilder/schedules | List PaySchedules |


## `getPaySchedulesByEmployerAndPayDatesReportBuilder()`

```php
getPaySchedulesByEmployerAndPayDatesReportBuilder($contractPayScheduleByDateRangeRequest): \SynergiTech\Staffology\Model\ContractPayScheduleResponseItem[]
```

List PaySchedules By Date Range

Get PaySchedules based on the provided EmployerIds and pay dates for running custom reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractPayScheduleByDateRangeRequest = new \SynergiTech\Staffology\Model\ContractPayScheduleByDateRangeRequest(); // \SynergiTech\Staffology\Model\ContractPayScheduleByDateRangeRequest

try {
    $result = $apiInstance->getPaySchedulesByEmployerAndPayDatesReportBuilder($contractPayScheduleByDateRangeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportBuilderApi->getPaySchedulesByEmployerAndPayDatesReportBuilder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractPayScheduleByDateRangeRequest** | [**\SynergiTech\Staffology\Model\ContractPayScheduleByDateRangeRequest**](../Model/ContractPayScheduleByDateRangeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayScheduleResponseItem[]**](../Model/ContractPayScheduleResponseItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaySchedulesByEmployersAndTaxYearsReportBuilder()`

```php
getPaySchedulesByEmployersAndTaxYearsReportBuilder($contractPayScheduleRequest): \SynergiTech\Staffology\Model\ContractPayScheduleResponseItem[]
```

List PaySchedules

Get PaySchedules based on the provided EmployerIds and TaxYears for running custom reports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractPayScheduleRequest = new \SynergiTech\Staffology\Model\ContractPayScheduleRequest(); // \SynergiTech\Staffology\Model\ContractPayScheduleRequest

try {
    $result = $apiInstance->getPaySchedulesByEmployersAndTaxYearsReportBuilder($contractPayScheduleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportBuilderApi->getPaySchedulesByEmployersAndTaxYearsReportBuilder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractPayScheduleRequest** | [**\SynergiTech\Staffology\Model\ContractPayScheduleRequest**](../Model/ContractPayScheduleRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayScheduleResponseItem[]**](../Model/ContractPayScheduleResponseItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
