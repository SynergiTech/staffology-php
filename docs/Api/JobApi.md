# SynergiTech\Staffology\JobApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCompletedJobsJob()**](JobApi.md#deleteCompletedJobsJob) | **DELETE** /jobs/completed | Delete Completed Jobs |
| [**getJobErrorsByJobIdJob()**](JobApi.md#getJobErrorsByJobIdJob) | **GET** /jobs/{jobId}/errors | Get Job Errors |
| [**getJobJob()**](JobApi.md#getJobJob) | **GET** /jobs/{jobId} | Get Job |
| [**getJobsListJob()**](JobApi.md#getJobsListJob) | **GET** /jobs | List Jobs |
| [**getReportJobResultJob()**](JobApi.md#getReportJobResultJob) | **GET** /jobs/{jobId}/document | Get Job file |


## `deleteCompletedJobsJob()`

```php
deleteCompletedJobsJob()
```

Delete Completed Jobs

Deletes the users completed Jobs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteCompletedJobsJob();
} catch (Exception $e) {
    echo 'Exception when calling JobApi->deleteCompletedJobsJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getJobErrorsByJobIdJob()`

```php
getJobErrorsByJobIdJob($jobId, $pageNum, $pageSize): \SynergiTech\Staffology\Model\ContractJobErrorResponse[]
```

Get Job Errors

Returns a list of errors for a job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = 'jobId_example'; // string | The job identifier.
$pageNum = 0; // int
$pageSize = 10; // int

try {
    $result = $apiInstance->getJobErrorsByJobIdJob($jobId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobErrorsByJobIdJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobId** | **string**| The job identifier. | |
| **pageNum** | **int**|  | [optional] [default to 0] |
| **pageSize** | **int**|  | [optional] [default to 10] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJobErrorResponse[]**](../Model/ContractJobErrorResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobJob()`

```php
getJobJob($jobId): \SynergiTech\Staffology\Model\ContractJobResponse
```

Get Job

Returns a job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = 'jobId_example'; // string | The job identifier.

try {
    $result = $apiInstance->getJobJob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobId** | **string**| The job identifier. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractJobResponse**](../Model/ContractJobResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobsListJob()`

```php
getJobsListJob($employerId, $jobType, $pageNum, $pageSize): \SynergiTech\Staffology\Model\ContractJobResponse[]
```

List Jobs

Returns a list of Jobs for all Employers that belong to the User with pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The employer identifier.
$jobType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\JobType(); // \SynergiTech\Staffology\Model\JobType | Type of the job.
$pageNum = 56; // int | The page number.
$pageSize = 56; // int | Size of the page.

try {
    $result = $apiInstance->getJobsListJob($employerId, $jobType, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getJobsListJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The employer identifier. | [optional] |
| **jobType** | [**\SynergiTech\Staffology\Model\JobType**](../Model/.md)| Type of the job. | [optional] |
| **pageNum** | **int**| The page number. | [optional] |
| **pageSize** | **int**| Size of the page. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJobResponse[]**](../Model/ContractJobResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportJobResultJob()`

```php
getReportJobResultJob($jobId): \SplFileObject
```

Get Job file

Returns the file generated for a successfully completed Job of type Report as a string representing a filestream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = 'jobId_example'; // string | The job identifier.

try {
    $result = $apiInstance->getReportJobResultJob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getReportJobResultJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobId** | **string**| The job identifier. | |

### Return type

**\SplFileObject**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
