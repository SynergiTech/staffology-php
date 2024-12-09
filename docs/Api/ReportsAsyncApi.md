# SynergiTech\Staffology\ReportsAsyncApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**queueGrossToNetReportReportsAsync()**](ReportsAsyncApi.md#queueGrossToNetReportReportsAsync) | **POST** /employers/{employerId}/reports-async/gross-to-net | Gross To Net async (beta) |


## `queueGrossToNetReportReportsAsync()`

```php
queueGrossToNetReportReportsAsync($employerId, $contractGrossToNetReportRequest): \SynergiTech\Staffology\Model\ContractJobResponse
```

Gross To Net async (beta)

Returns a job that is created to process a report comparing employees' gross pay with their net pay for one or more pay periods.  This endpoint is currently being beta tested and subject to un-announced breaking changes.  Use the GET of Jobs to get the status and response of the job.

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
$contractGrossToNetReportRequest = new \SynergiTech\Staffology\Model\ContractGrossToNetReportRequest(); // \SynergiTech\Staffology\Model\ContractGrossToNetReportRequest | The request payload for the gross to net report

try {
    $result = $apiInstance->queueGrossToNetReportReportsAsync($employerId, $contractGrossToNetReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsAsyncApi->queueGrossToNetReportReportsAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractGrossToNetReportRequest** | [**\SynergiTech\Staffology\Model\ContractGrossToNetReportRequest**](../Model/ContractGrossToNetReportRequest.md)| The request payload for the gross to net report | [optional] |

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
