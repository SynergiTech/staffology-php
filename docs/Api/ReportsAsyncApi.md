# SynergiTech\Staffology\ReportsAsyncApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**executeCustomReportReportsAsync()**](ReportsAsyncApi.md#executeCustomReportReportsAsync) | **POST** /employers/{employerId}/reports-async/{templateId} | Execute report template |


## `executeCustomReportReportsAsync()`

```php
executeCustomReportReportsAsync($employerId, $templateId, $contractCustomReportRequest): \SynergiTech\Staffology\Model\ContractJobResponse
```

Execute report template

Returns a job created to process a report using custom report templates.   This endpoint is being beta tested and subject to un-announced breaking changes.  Use the GET of Jobs to get the status and response of the job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsAsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$templateId = 'templateId_example'; // string
$contractCustomReportRequest = new \SynergiTech\Staffology\Model\ContractCustomReportRequest(); // \SynergiTech\Staffology\Model\ContractCustomReportRequest

try {
    $result = $apiInstance->executeCustomReportReportsAsync($employerId, $templateId, $contractCustomReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsAsyncApi->executeCustomReportReportsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **templateId** | **string**|  | |
| **contractCustomReportRequest** | [**\SynergiTech\Staffology\Model\ContractCustomReportRequest**](../Model/ContractCustomReportRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJobResponse**](../Model/ContractJobResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
