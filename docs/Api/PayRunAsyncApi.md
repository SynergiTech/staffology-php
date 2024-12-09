# SynergiTech\Staffology\PayRunAsyncApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**importPayPayRunAsync()**](PayRunAsyncApi.md#importPayPayRunAsync) | **POST** /employers/{employerId}/payrun-async/{payPeriod}/importpay | Import Pay (beta) |
| [**queueCreatePayRunPayRunAsync()**](PayRunAsyncApi.md#queueCreatePayRunPayRunAsync) | **POST** /employers/{employerId}/payrun-async/{taxYear}/{payPeriod} | Registers a request to start the next PayRun (beta) |
| [**queueDeletePayRunPayRunAsync()**](PayRunAsyncApi.md#queueDeletePayRunPayRunAsync) | **DELETE** /employers/{employerId}/payrun-async/{taxYear}/{payPeriod}/{periodNumber} | Registers a request to delete a PayRun (beta) |
| [**queueUpdatePayRunPayRunAsync()**](PayRunAsyncApi.md#queueUpdatePayRunPayRunAsync) | **PUT** /employers/{employerId}/payrun-async/{taxYear}/{payPeriod}/{periodNumber} | Registers a request to update the PayRun (beta) |


## `importPayPayRunAsync()`

```php
importPayPayRunAsync($employerId, $payPeriod, $ordinal, $throwOnError, $contractPayOptionsImportRequest, $linesOnly, $append, $updateExisting): \SynergiTech\Staffology\Model\ContractJobResponse
```

Import Pay (beta)

Takes a list PayOptionsImport and updates the currently open payrun to use the amounts given.  You must have an open payrun for the PayPeriod specified and all payroll codes submitted must match an employee on the payrun.  Any lines imported for a PayRunEntry will replace existing lines for that PayRunEntry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunAsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$ordinal = 56; // int
$throwOnError = True; // bool
$contractPayOptionsImportRequest = array(new \SynergiTech\Staffology\Model\ContractPayOptionsImportRequest()); // \SynergiTech\Staffology\Model\ContractPayOptionsImportRequest[]
$linesOnly = True; // bool | If set to true then only lines will be imported. Changes to regular pay will be ignored. Defaults to false.
$append = True; // bool | If set to true then the lines submitted will be appended to existing lines rather than replace them. Defaults to false.
$updateExisting = True; // bool | If set to true then any submitted lines that match the pay code of one (and only one) existing line will be used to update the value of that lines. Any unmatched lines will be appended to existing lines. Defaults to false.

try {
    $result = $apiInstance->importPayPayRunAsync($employerId, $payPeriod, $ordinal, $throwOnError, $contractPayOptionsImportRequest, $linesOnly, $append, $updateExisting);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunAsyncApi->importPayPayRunAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **ordinal** | **int**|  | |
| **throwOnError** | **bool**|  | |
| **contractPayOptionsImportRequest** | [**\SynergiTech\Staffology\Model\ContractPayOptionsImportRequest[]**](../Model/ContractPayOptionsImportRequest.md)|  | |
| **linesOnly** | **bool**| If set to true then only lines will be imported. Changes to regular pay will be ignored. Defaults to false. | [optional] |
| **append** | **bool**| If set to true then the lines submitted will be appended to existing lines rather than replace them. Defaults to false. | [optional] |
| **updateExisting** | **bool**| If set to true then any submitted lines that match the pay code of one (and only one) existing line will be used to update the value of that lines. Any unmatched lines will be appended to existing lines. Defaults to false. | [optional] |

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

## `queueCreatePayRunPayRunAsync()`

```php
queueCreatePayRunPayRunAsync($employerId, $payPeriod, $taxYear, $ordinal)
```

Registers a request to start the next PayRun (beta)

Registers the request to start the next PayRun and returns a 202 if successful  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunAsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 1; // int

try {
    $apiInstance->queueCreatePayRunPayRunAsync($employerId, $payPeriod, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayRunAsyncApi->queueCreatePayRunPayRunAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |

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

## `queueDeletePayRunPayRunAsync()`

```php
queueDeletePayRunPayRunAsync($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal)
```

Registers a request to delete a PayRun (beta)

Registers a request to delete a PayRun and returns a 202 if successful.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunAsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 1; // int

try {
    $apiInstance->queueDeletePayRunPayRunAsync($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayRunAsyncApi->queueDeletePayRunPayRunAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |

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

## `queueUpdatePayRunPayRunAsync()`

```php
queueUpdatePayRunPayRunAsync($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $sendPayslipEmails, $payslipReleaseType, $payslipScheduledDateTime, $payRunStateChange): \SynergiTech\Staffology\Model\PayRun
```

Registers a request to update the PayRun (beta)

Queues a request to update a PayRun to the state provided along with the reason (optional) for the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunAsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$ordinal = 1; // int
$sendPayslipEmails = false; // bool
$payslipReleaseType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayslipReleaseType(); // \SynergiTech\Staffology\Model\PayslipReleaseType
$payslipScheduledDateTime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$payRunStateChange = new \SynergiTech\Staffology\Model\PayRunStateChange(); // \SynergiTech\Staffology\Model\PayRunStateChange

try {
    $result = $apiInstance->queueUpdatePayRunPayRunAsync($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $sendPayslipEmails, $payslipReleaseType, $payslipScheduledDateTime, $payRunStateChange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunAsyncApi->queueUpdatePayRunPayRunAsync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **sendPayslipEmails** | **bool**|  | [optional] [default to false] |
| **payslipReleaseType** | [**\SynergiTech\Staffology\Model\PayslipReleaseType**](../Model/.md)|  | [optional] |
| **payslipScheduledDateTime** | **\DateTime**|  | [optional] |
| **payRunStateChange** | [**\SynergiTech\Staffology\Model\PayRunStateChange**](../Model/PayRunStateChange.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayRun**](../Model/PayRun.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
