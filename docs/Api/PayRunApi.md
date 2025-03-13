# SynergiTech\Staffology\PayRunApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPayRunEntriesPayRun()**](PayRunApi.md#addPayRunEntriesPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/addpayrunentries | Add PayRunEntries (deprecated) |
| [**aeoPayRun()**](PayRunApi.md#aeoPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/aeo | List AttachmentOrders related to a PayRun |
| [**calculateAverageHolidayPayPayRun()**](PayRunApi.md#calculateAverageHolidayPayPayRun) | **GET** /employers/{employerId}/payrun/employees/{employeeId}/averageholidaypayrate | Calculate Average Holiday Pay Rate |
| [**changesForPayRunEntryPayRun()**](PayRunApi.md#changesForPayRunEntryPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/{id}/changes | List PayRun Changes for PayRunEntry |
| [**changesPayRun()**](PayRunApi.md#changesPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/changes | List PayRun Changes |
| [**createNextPayRunPayRun()**](PayRunApi.md#createNextPayRunPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod} | Starts the next PayRun |
| [**deletePayRun()**](PayRunApi.md#deletePayRun) | **DELETE** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber} | Delete a PayRun |
| [**emailMultipleP45sPayRun()**](PayRunApi.md#emailMultipleP45sPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/p45/email | (Re)send P45 Emails |
| [**finalisePayRunPayRun()**](PayRunApi.md#finalisePayRunPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/finalise | Finalise a PayRun (deprecated) |
| [**getPayRunEntryPayRun()**](PayRunApi.md#getPayRunEntryPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/{id} | Get a PayRunEntry |
| [**getPayRunEventsPayRun()**](PayRunApi.md#getPayRunEventsPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/events | Get PayPeriodEvents |
| [**getPayRunJournalPayRun()**](PayRunApi.md#getPayRunJournalPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/journal | Get Journal for PayRun |
| [**getPayRunPayCodesPayRun()**](PayRunApi.md#getPayRunPayCodesPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/paycodes | Get PayCodes for a PayRun |
| [**getPayRunPayRun()**](PayRunApi.md#getPayRunPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber} | Get a PayRun |
| [**getPayRunStateHistoryPayRun()**](PayRunApi.md#getPayRunStateHistoryPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/stateHistory | List PayRunStateHistory |
| [**getPayRunWarningsPayRun()**](PayRunApi.md#getPayRunWarningsPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/warnings | Get PayRun Warnings |
| [**getPayRunsPayRun()**](PayRunApi.md#getPayRunsPayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod} | List PayRuns |
| [**importPayPayRun()**](PayRunApi.md#importPayPayRun) | **POST** /employers/{employerId}/payrun/{payPeriod}/importpay | Import Pay |
| [**importTimeAndAttendancePayRun()**](PayRunApi.md#importTimeAndAttendancePayRun) | **POST** /employers/{employerId}/payrun/{payPeriod}/importtimeandattendance | Import Time And Attendance |
| [**importUmbrellaPayPayRun()**](PayRunApi.md#importUmbrellaPayPayRun) | **POST** /employers/{employerId}/payrun/{payPeriod}/importumbrellapay | Import Umbrella Pay |
| [**lastPayRunEntryForEmployeePayRun()**](PayRunApi.md#lastPayRunEntryForEmployeePayRun) | **GET** /employers/{employerId}/payrun/employees/{employeeId}/Last | Gets the last closed pay run entry for an employee. |
| [**lastPayRunEntryWithPensionYtdValuesForEmployeePayRun()**](PayRunApi.md#lastPayRunEntryWithPensionYtdValuesForEmployeePayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/employees/{employeeId}/pension/{pensionUniqueId}/pensionytd | Gets last PayRunEntry for a Pension |
| [**leavePayRun()**](PayRunApi.md#leavePayRun) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/leave | List Leave related to a PayRun |
| [**payRunEntryUmbrellaPaymentPayRun()**](PayRunApi.md#payRunEntryUmbrellaPaymentPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/{id}/umbrella | PayRunEntry Umbrella Payment |
| [**reOpenPayRunPayRun()**](PayRunApi.md#reOpenPayRunPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/reopen | Re-open a PayRun (deprecated) |
| [**removePayRunEntriesPayRun()**](PayRunApi.md#removePayRunEntriesPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/removepayrunentries | Remove PayRunEntries (deprecated) |
| [**sendPayslipEmailsPayRun()**](PayRunApi.md#sendPayslipEmailsPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/email | (Re)send Payslip Emails |
| [**startNextPayRunPayRun()**](PayRunApi.md#startNextPayRunPayRun) | **PUT** /employers/{employerId}/payrun/{taxYear}/{payPeriod} | Starts the next PayRun (deprecated) |
| [**updatePayRunEntryPayRun()**](PayRunApi.md#updatePayRunEntryPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/{id} | Update a PayRunEntry |
| [**updatePayRunPayRun()**](PayRunApi.md#updatePayRunPayRun) | **PUT** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber} | Update PayRun |
| [**updatePaymentDatePayRun()**](PayRunApi.md#updatePaymentDatePayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/paymentdate | Set PaymentDate |
| [**ytdPayRun()**](PayRunApi.md#ytdPayRun) | **PUT** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/ytd | Update YTD |
| [**zeroisePayRunEntriesPayRun()**](PayRunApi.md#zeroisePayRunEntriesPayRun) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/zeroise | Zeroise PayRunEntries |


## `addPayRunEntriesPayRun()`

```php
addPayRunEntriesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody): \SynergiTech\Staffology\Model\PayRun
```

Add PayRunEntries (deprecated)

Adds the payrun entries specified in the ids property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$requestBody = array('requestBody_example'); // string[]

try {
    $result = $apiInstance->addPayRunEntriesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->addPayRunEntriesPayRun: ', $e->getMessage(), PHP_EOL;
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
| **requestBody** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `aeoPayRun()`

```php
aeoPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\Item[]
```

List AttachmentOrders related to a PayRun

Returns a List of Items representing any AttachmentOrders within the PayRun date range for Employees that are included in the given PayRun.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->aeoPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->aeoPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateAverageHolidayPayPayRun()`

```php
calculateAverageHolidayPayPayRun($employerId, $employeeId, $startDate): float
```

Calculate Average Holiday Pay Rate

Calculates the average holiday pay rate for an employee based on their holiday scheme configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee
$startDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date we used to calculate average holiday pay from

try {
    $result = $apiInstance->calculateAverageHolidayPayPayRun($employerId, $employeeId, $startDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->calculateAverageHolidayPayPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee | |
| **startDate** | **\DateTime**| The date we used to calculate average holiday pay from | |

### Return type

**float**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changesForPayRunEntryPayRun()`

```php
changesForPayRunEntryPayRun($employerId, $id, $payPeriod, $periodNumber, $taxYear, $ordinal, $significantChangesOnly): \SynergiTech\Staffology\Model\ChangeSummary[]
```

List PayRun Changes for PayRunEntry

Returns a list of AuditEntry reflecting changes made to a PayRunEntry and related employee record for a given PayRun  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 1; // int
$significantChangesOnly = false; // bool

try {
    $result = $apiInstance->changesForPayRunEntryPayRun($employerId, $id, $payPeriod, $periodNumber, $taxYear, $ordinal, $significantChangesOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->changesForPayRunEntryPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **significantChangesOnly** | **bool**|  | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\ChangeSummary[]**](../Model/ChangeSummary.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changesPayRun()`

```php
changesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PayRunChanges
```

List PayRun Changes

Returns a of changes made to a payrun since it was created.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->changesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->changesPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\PayRunChanges**](../Model/PayRunChanges.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNextPayRunPayRun()`

```php
createNextPayRunPayRun($employerId, $payPeriod, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PayRun
```

Starts the next PayRun

Starts the next PayRun and returns a 201 if successful

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->createNextPayRunPayRun($employerId, $payPeriod, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->createNextPayRunPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\PayRun**](../Model/PayRun.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayRun()`

```php
deletePayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal)
```

Delete a PayRun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $apiInstance->deletePayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->deletePayRun: ', $e->getMessage(), PHP_EOL;
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

## `emailMultipleP45sPayRun()`

```php
emailMultipleP45sPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal)
```

(Re)send P45 Emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $apiInstance->emailMultipleP45sPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->emailMultipleP45sPayRun: ', $e->getMessage(), PHP_EOL;
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

## `finalisePayRunPayRun()`

```php
finalisePayRunPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody): bool
```

Finalise a PayRun (deprecated)

This endpoint is now deprecated and will be removed in Jan 2022.  You should instead use the Update method and set the State to Finalised.                Returns True if the resulting FPS has been automatically submitted due to the Employers RTISubmissionSettings, otherwise returns false.  You can suppress the emailing of payslips to employees by adding a key named dontEmailEmployeePayslips with a value of true to the body. See the related guides for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$requestBody = NULL; // array<string,mixed>

try {
    $result = $apiInstance->finalisePayRunPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->finalisePayRunPayRun: ', $e->getMessage(), PHP_EOL;
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
| **requestBody** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

**bool**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunEntryPayRun()`

```php
getPayRunEntryPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal): \SynergiTech\Staffology\Model\PayRunEntry
```

Get a PayRunEntry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->getPayRunEntryPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunEntryPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunEventsPayRun()`

```php
getPayRunEventsPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PaySchedulePeriodEvent[]
```

Get PayPeriodEvents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->getPayRunEventsPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunEventsPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\PaySchedulePeriodEvent[]**](../Model/PaySchedulePeriodEvent.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunJournalPayRun()`

```php
getPayRunJournalPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $deptBreakdown): \SynergiTech\Staffology\Model\PayRunJournal
```

Get Journal for PayRun

Returns values that can be used to create accounting entries for this PayRun.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$deptBreakdown = false; // bool | Set to true and the journal will be split between any relevant Departments

try {
    $result = $apiInstance->getPayRunJournalPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $deptBreakdown);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunJournalPayRun: ', $e->getMessage(), PHP_EOL;
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
| **deptBreakdown** | **bool**| Set to true and the journal will be split between any relevant Departments | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunJournal**](../Model/PayRunJournal.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunPayCodesPayRun()`

```php
getPayRunPayCodesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PayCode[]
```

Get PayCodes for a PayRun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->getPayRunPayCodesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunPayCodesPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\PayCode[]**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunPayRun()`

```php
getPayRunPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $pageNum, $pageSize, $searchTerm, $zeroPaid, $departmentCode, $startersLeavers, $sortBy, $sortDescending, $rolledBackOnly): \SynergiTech\Staffology\Model\PayRun
```

Get a PayRun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$pageNum = 56; // int | Zero-based page number, used in conjunction with pageSize
$pageSize = 56; // int | The number of items per page
$searchTerm = 'searchTerm_example'; // string | The option to filter on a search term
$zeroPaid = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ZeroPaidFilter(); // \SynergiTech\Staffology\Model\ZeroPaidFilter | The option to filter pay run entries by negative paid, zero paid and non-zero paid
$departmentCode = 'departmentCode_example'; // string | The option to filter on department code
$startersLeavers = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\StartersLeaversFilter(); // \SynergiTech\Staffology\Model\StartersLeaversFilter | The option to filter on whether the employee is a starter or leaver
$sortBy = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayRunEntrySortBy(); // \SynergiTech\Staffology\Model\PayRunEntrySortBy | The option to sort by a certain field. Default is Payroll Code
$sortDescending = false; // bool | Whether to sort in ascending or descending order
$rolledBackOnly = false; // bool | If set to true, returns rolled back pay run entries. If false, returns all entries.

try {
    $result = $apiInstance->getPayRunPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $pageNum, $pageSize, $searchTerm, $zeroPaid, $departmentCode, $startersLeavers, $sortBy, $sortDescending, $rolledBackOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunPayRun: ', $e->getMessage(), PHP_EOL;
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
| **pageNum** | **int**| Zero-based page number, used in conjunction with pageSize | [optional] |
| **pageSize** | **int**| The number of items per page | [optional] |
| **searchTerm** | **string**| The option to filter on a search term | [optional] |
| **zeroPaid** | [**\SynergiTech\Staffology\Model\ZeroPaidFilter**](../Model/.md)| The option to filter pay run entries by negative paid, zero paid and non-zero paid | [optional] |
| **departmentCode** | **string**| The option to filter on department code | [optional] |
| **startersLeavers** | [**\SynergiTech\Staffology\Model\StartersLeaversFilter**](../Model/.md)| The option to filter on whether the employee is a starter or leaver | [optional] |
| **sortBy** | [**\SynergiTech\Staffology\Model\PayRunEntrySortBy**](../Model/.md)| The option to sort by a certain field. Default is Payroll Code | [optional] |
| **sortDescending** | **bool**| Whether to sort in ascending or descending order | [optional] [default to false] |
| **rolledBackOnly** | **bool**| If set to true, returns rolled back pay run entries. If false, returns all entries. | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\PayRun**](../Model/PayRun.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunStateHistoryPayRun()`

```php
getPayRunStateHistoryPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\ContractPayRunStateHistoryResponse[]
```

List PayRunStateHistory

Returns the state history of a pay run.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The Pay Period (i.e, Monthly, Weekly) for which you want to get the Pay Run history
$periodNumber = 56; // int | The Period (i.e, Tax Month, Tax Week) for which you want to get the Pay Run history
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The Tax Year for which you want to get the Pay Run history
$ordinal = 1; // int | Indicates whether it uses first, second, third (etc.) PaySchedule for the PayPeriod

try {
    $result = $apiInstance->getPayRunStateHistoryPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunStateHistoryPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The Pay Period (i.e, Monthly, Weekly) for which you want to get the Pay Run history | |
| **periodNumber** | **int**| The Period (i.e, Tax Month, Tax Week) for which you want to get the Pay Run history | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The Tax Year for which you want to get the Pay Run history | |
| **ordinal** | **int**| Indicates whether it uses first, second, third (etc.) PaySchedule for the PayPeriod | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPayRunStateHistoryResponse[]**](../Model/ContractPayRunStateHistoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunWarningsPayRun()`

```php
getPayRunWarningsPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $pageNum, $pageSize): \SynergiTech\Staffology\Model\Item[]
```

Get PayRun Warnings

Returns a list of Item detailing any Warnings for PayRunEntries on the specified PayRun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$pageNum = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->getPayRunWarningsPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunWarningsPayRun: ', $e->getMessage(), PHP_EOL;
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
| **pageNum** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

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

## `getPayRunsPayRun()`

```php
getPayRunsPayRun($employerId, $payPeriod, $taxYear, $ordinal): \SynergiTech\Staffology\Model\Item[]
```

List PayRuns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->getPayRunsPayRun($employerId, $payPeriod, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->getPayRunsPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importPayPayRun()`

```php
importPayPayRun($employerId, $payPeriod, $ordinal, $linesOnly, $append, $updateExisting, $validateOnly, $payOptionsImport)
```

Import Pay

Takes a list PayOptionsImport and updates the currently open payrun to use the amounts given.  You must have an open payrun for the PayPeriod specified and all payroll codes submitted must match an employee on the payrun.  Any lines imported for a PayRunEntry will replace existing lines for that PayRunEntry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$ordinal = 1; // int
$linesOnly = false; // bool | If set to true then only lines will be imported. Changes to regular pay will be ignored. Defaults to false.
$append = false; // bool | If set to true then the lines submitted will be appended to existing lines rather than replace them. Defaults to false.
$updateExisting = false; // bool | If set to true then any submitted lines that match the pay code of one (and only one) existing line will be used to update the value of that lines. Any unmatched lines will be appended to existing lines.
$validateOnly = false; // bool | If set to true, the import will only be validated for data correctness. If false, the import is validated and then imported.
$payOptionsImport = array(new \SynergiTech\Staffology\Model\PayOptionsImport()); // \SynergiTech\Staffology\Model\PayOptionsImport[]

try {
    $apiInstance->importPayPayRun($employerId, $payPeriod, $ordinal, $linesOnly, $append, $updateExisting, $validateOnly, $payOptionsImport);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->importPayPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **linesOnly** | **bool**| If set to true then only lines will be imported. Changes to regular pay will be ignored. Defaults to false. | [optional] [default to false] |
| **append** | **bool**| If set to true then the lines submitted will be appended to existing lines rather than replace them. Defaults to false. | [optional] [default to false] |
| **updateExisting** | **bool**| If set to true then any submitted lines that match the pay code of one (and only one) existing line will be used to update the value of that lines. Any unmatched lines will be appended to existing lines. | [optional] [default to false] |
| **validateOnly** | **bool**| If set to true, the import will only be validated for data correctness. If false, the import is validated and then imported. | [optional] [default to false] |
| **payOptionsImport** | [**\SynergiTech\Staffology\Model\PayOptionsImport[]**](../Model/PayOptionsImport.md)|  | [optional] |

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

## `importTimeAndAttendancePayRun()`

```php
importTimeAndAttendancePayRun($employerId, $payPeriod, $providerId, $ordinal): \SynergiTech\Staffology\Model\PayOptionsImport[]
```

Import Time And Attendance

If the employer is connected to an ExternalDataProvider that provides Time and Attendance data then this API  call will update the currently open payrun for the PayPeriod specified with data from the specified provider.  Returns a list of PayOptionsImport to show what's been imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$providerId = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ExternalDataProviderId(); // \SynergiTech\Staffology\Model\ExternalDataProviderId
$ordinal = 1; // int

try {
    $result = $apiInstance->importTimeAndAttendancePayRun($employerId, $payPeriod, $providerId, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->importTimeAndAttendancePayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **providerId** | [**\SynergiTech\Staffology\Model\ExternalDataProviderId**](../Model/.md)|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PayOptionsImport[]**](../Model/PayOptionsImport.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importUmbrellaPayPayRun()`

```php
importUmbrellaPayPayRun($employerId, $payPeriod, $ordinal, $umbrellaPayment): \SynergiTech\Staffology\Model\PayRun
```

Import Umbrella Pay

Takes a list UmbrellaPayment and updates the currently open payrun to use the amounts given.  You must have an open payrun for the PayPeriod specified and all payroll codes submitted must match an employee on the payrun.  You should have also set the UmbrellaSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$ordinal = 1; // int
$umbrellaPayment = array(new \SynergiTech\Staffology\Model\UmbrellaPayment()); // \SynergiTech\Staffology\Model\UmbrellaPayment[]

try {
    $result = $apiInstance->importUmbrellaPayPayRun($employerId, $payPeriod, $ordinal, $umbrellaPayment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->importUmbrellaPayPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **umbrellaPayment** | [**\SynergiTech\Staffology\Model\UmbrellaPayment[]**](../Model/UmbrellaPayment.md)|  | [optional] |

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

## `lastPayRunEntryForEmployeePayRun()`

```php
lastPayRunEntryForEmployeePayRun($employerId, $employeeId, $isClosed): \SynergiTech\Staffology\Model\PayRunEntry
```

Gets the last closed pay run entry for an employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to get last pay run entry for.
$isClosed = True; // bool

try {
    $result = $apiInstance->lastPayRunEntryForEmployeePayRun($employerId, $employeeId, $isClosed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->lastPayRunEntryForEmployeePayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to get last pay run entry for. | |
| **isClosed** | **bool**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lastPayRunEntryWithPensionYtdValuesForEmployeePayRun()`

```php
lastPayRunEntryWithPensionYtdValuesForEmployeePayRun($employerId, $employeeId, $pensionUniqueId, $taxYear): \SynergiTech\Staffology\Model\PayRunEntry
```

Gets last PayRunEntry for a Pension

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to get pay run entry for.
$pensionUniqueId = 'pensionUniqueId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->lastPayRunEntryWithPensionYtdValuesForEmployeePayRun($employerId, $employeeId, $pensionUniqueId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->lastPayRunEntryWithPensionYtdValuesForEmployeePayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **employeeId** | **string**| The Id of the Employee you want to get pay run entry for. | |
| **pensionUniqueId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |

### Return type

[**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leavePayRun()`

```php
leavePayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\Item[]
```

List Leave related to a PayRun

Returns a List of Items representing any Leave within the PayRun date range for Employees that are included in the given PayRun.  Note that if Leave was added after the PayRun was closed, but the Leave is within the PayRun period then it'll be returned here even though it wouldn't have been processed with the PayRun.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->leavePayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->leavePayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payRunEntryUmbrellaPaymentPayRun()`

```php
payRunEntryUmbrellaPaymentPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal, $umbrellaPayment): \SynergiTech\Staffology\Model\PayRunEntry
```

PayRunEntry Umbrella Payment

Automatically sets the values on the PayRunEntry based on an UmbrellaPayment.  Using this method overwrites any existing values for the PayRunEntry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$ordinal = 1; // int
$umbrellaPayment = new \SynergiTech\Staffology\Model\UmbrellaPayment(); // \SynergiTech\Staffology\Model\UmbrellaPayment

try {
    $result = $apiInstance->payRunEntryUmbrellaPaymentPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal, $umbrellaPayment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->payRunEntryUmbrellaPaymentPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **umbrellaPayment** | [**\SynergiTech\Staffology\Model\UmbrellaPayment**](../Model/UmbrellaPayment.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reOpenPayRunPayRun()`

```php
reOpenPayRunPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PayRun
```

Re-open a PayRun (deprecated)

This endpoint is now deprecated and will be removed in Jan 2022.  You should instead use the Update method and set the State to Open.                Re-opens a PayRun so that it can be edited.  Only the most recent PayRun can be re-opened, and only if the Employer is still in the same TaxYear as the PayRun and there are no open PayRuns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $result = $apiInstance->reOpenPayRunPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->reOpenPayRunPayRun: ', $e->getMessage(), PHP_EOL;
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

[**\SynergiTech\Staffology\Model\PayRun**](../Model/PayRun.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePayRunEntriesPayRun()`

```php
removePayRunEntriesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody): \SynergiTech\Staffology\Model\PayRun
```

Remove PayRunEntries (deprecated)

Removes the payrun entries specified in the ids property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$requestBody = array('requestBody_example'); // string[]

try {
    $result = $apiInstance->removePayRunEntriesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->removePayRunEntriesPayRun: ', $e->getMessage(), PHP_EOL;
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
| **requestBody** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `sendPayslipEmailsPayRun()`

```php
sendPayslipEmailsPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $id)
```

(Re)send Payslip Emails

Payslips are usually emailed automatically when a PayRun is finalised. But if you suppressed them or need to re-send them then you can do so with this API call.  Providing a pay run entry id will send a single email, otherwise all emails will be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The ID of the employer.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The pay period of the pay run.
$periodNumber = 56; // int | The period number of the pay run.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The tax year of the pay run.
$ordinal = 1; // int | The ordinal number of the pay run.
$id = 'id_example'; // string | The UniqueId of the pay run entry (optional).

try {
    $apiInstance->sendPayslipEmailsPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $id);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->sendPayslipEmailsPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The ID of the employer. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The pay period of the pay run. | |
| **periodNumber** | **int**| The period number of the pay run. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The tax year of the pay run. | |
| **ordinal** | **int**| The ordinal number of the pay run. | [optional] [default to 1] |
| **id** | **string**| The UniqueId of the pay run entry (optional). | [optional] |

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

## `startNextPayRunPayRun()`

```php
startNextPayRunPayRun($employerId, $payPeriod, $taxYear, $ordinal)
```

Starts the next PayRun (deprecated)

This PUT will be removed in Jan 2022. You should instead use a POST to this URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
    $apiInstance->startNextPayRunPayRun($employerId, $payPeriod, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->startNextPayRunPayRun: ', $e->getMessage(), PHP_EOL;
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

## `updatePayRunEntryPayRun()`

```php
updatePayRunEntryPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal, $forceSyncEmployeePayOptions, $payRunEntry): \SynergiTech\Staffology\Model\PayRunEntry
```

Update a PayRunEntry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$ordinal = 1; // int
$forceSyncEmployeePayOptions = false; // bool | If set to true then changes made to employee pay options will be reflected into the pay run entry. Defaults to false.
$payRunEntry = new \SynergiTech\Staffology\Model\PayRunEntry(); // \SynergiTech\Staffology\Model\PayRunEntry

try {
    $result = $apiInstance->updatePayRunEntryPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal, $forceSyncEmployeePayOptions, $payRunEntry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->updatePayRunEntryPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **forceSyncEmployeePayOptions** | **bool**| If set to true then changes made to employee pay options will be reflected into the pay run entry. Defaults to false. | [optional] [default to false] |
| **payRunEntry** | [**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunEntry**](../Model/PayRunEntry.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayRunPayRun()`

```php
updatePayRunPayRun($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $sendPayslipEmails, $payslipReleaseType, $payslipScheduledDateTime, $payRunStateChange): \SynergiTech\Staffology\Model\PayRun
```

Update PayRun

Updates a PayRun to the state provided along with the reason (optional) for the change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$sendPayslipEmails = false; // bool | Only relevant if setting the State to Finalised. Set to true if you want to have payslips emailed to employees.
$payslipReleaseType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayslipReleaseType(); // \SynergiTech\Staffology\Model\PayslipReleaseType
$payslipScheduledDateTime = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$payRunStateChange = new \SynergiTech\Staffology\Model\PayRunStateChange(); // \SynergiTech\Staffology\Model\PayRunStateChange | Specify the PayRun state you want to change to and the reason for the change.  Only Open and Finalised states are available at the moment.  Other states are used with Bureau functionality which isn't currently generally available.

try {
    $result = $apiInstance->updatePayRunPayRun($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $sendPayslipEmails, $payslipReleaseType, $payslipScheduledDateTime, $payRunStateChange);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->updatePayRunPayRun: ', $e->getMessage(), PHP_EOL;
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
| **sendPayslipEmails** | **bool**| Only relevant if setting the State to Finalised. Set to true if you want to have payslips emailed to employees. | [optional] [default to false] |
| **payslipReleaseType** | [**\SynergiTech\Staffology\Model\PayslipReleaseType**](../Model/.md)|  | [optional] |
| **payslipScheduledDateTime** | **\DateTime**|  | [optional] |
| **payRunStateChange** | [**\SynergiTech\Staffology\Model\PayRunStateChange**](../Model/PayRunStateChange.md)| Specify the PayRun state you want to change to and the reason for the change.  Only Open and Finalised states are available at the moment.  Other states are used with Bureau functionality which isn&#39;t currently generally available. | [optional] |

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

## `updatePaymentDatePayRun()`

```php
updatePaymentDatePayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $body): \SynergiTech\Staffology\Model\PayRun
```

Set PaymentDate

Sets the PaymentDate for a PayRun.  If the date given is outside of the TaxPeriod that the payrun is for then only the payment date for the individual  PayRunEntries is updated, the PayRun will retain it's current PaymentDate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$body = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime

try {
    $result = $apiInstance->updatePaymentDatePayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->updatePaymentDatePayRun: ', $e->getMessage(), PHP_EOL;
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
| **body** | **\DateTime**|  | [optional] |

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

## `ytdPayRun()`

```php
ytdPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $file): \SynergiTech\Staffology\Model\EmployeeYtdValues[]
```

Update YTD

Upload a CSV to override the YTD values on a Pay Run.  The CSV should have the same headings as the YTD report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 56; // int
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->ytdPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->ytdPayRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeYtdValues[]**](../Model/EmployeeYtdValues.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `zeroisePayRunEntriesPayRun()`

```php
zeroisePayRunEntriesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody): \SynergiTech\Staffology\Model\PayRun
```

Zeroise PayRunEntries

Zeroises the payrun entries specified in the ids property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayRunApi(
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
$requestBody = array('requestBody_example'); // string[]

try {
    $result = $apiInstance->zeroisePayRunEntriesPayRun($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRunApi->zeroisePayRunEntriesPayRun: ', $e->getMessage(), PHP_EOL;
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
| **requestBody** | [**string[]**](../Model/string.md)|  | [optional] |

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
