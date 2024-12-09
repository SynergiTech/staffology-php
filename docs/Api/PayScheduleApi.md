# SynergiTech\Staffology\PayScheduleApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaySchedule()**](PayScheduleApi.md#createPaySchedule) | **POST** /employers/{employerId}/schedules/{taxYear}/{payPeriod}/{ordinal} | Create a PaySchedule |
| [**createWithOptionalOrdinalPaySchedule()**](PayScheduleApi.md#createWithOptionalOrdinalPaySchedule) | **POST** /employers/{employerId}/schedules/{taxYear}/{payPeriod} | Create a PaySchedule (deprecated) |
| [**deletePaySchedule()**](PayScheduleApi.md#deletePaySchedule) | **DELETE** /employers/{employerId}/schedules/{taxYear}/{payPeriod}/{ordinal} | Delete PaySchedule |
| [**deleteWithOptionalOrdinalPaySchedule()**](PayScheduleApi.md#deleteWithOptionalOrdinalPaySchedule) | **DELETE** /employers/{employerId}/schedules/{taxYear}/{payPeriod} | Delete PaySchedule (deprecated) |
| [**getAllPaySchedule()**](PayScheduleApi.md#getAllPaySchedule) | **GET** /employers/{employerId}/schedules/{taxYear} | Get PaySchedules |
| [**getPaySchedule()**](PayScheduleApi.md#getPaySchedule) | **GET** /employers/{employerId}/schedules/{taxYear}/{payPeriod}/{ordinal} | Get PaySchedule |
| [**getPeriodsPaySchedule()**](PayScheduleApi.md#getPeriodsPaySchedule) | **GET** /employers/{employerId}/schedules/{taxYear}/{payPeriod}/{ordinal}/periods | Get PaySchedulePeriods |
| [**getWithOptionalOrdinalPaySchedule()**](PayScheduleApi.md#getWithOptionalOrdinalPaySchedule) | **GET** /employers/{employerId}/schedules/{taxYear}/{payPeriod} | Get PaySchedule (deprecated) |
| [**savePaySchedule()**](PayScheduleApi.md#savePaySchedule) | **PUT** /employers/{employerId}/schedules/{taxYear}/{payPeriod}/{ordinal} | Update PaySchedule |
| [**saveWithOptionalOrdinalPaySchedule()**](PayScheduleApi.md#saveWithOptionalOrdinalPaySchedule) | **PUT** /employers/{employerId}/schedules/{taxYear}/{payPeriod} | Update PaySchedule (deprecated) |
| [**updatePaySchedulePeriodPaySchedule()**](PayScheduleApi.md#updatePaySchedulePeriodPaySchedule) | **PUT** /employers/{employerId}/schedules/{taxYear}/{payPeriod}/{ordinal}/periods/{periodNumber} | Update PaySchedulePeriod |


## `createPaySchedule()`

```php
createPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule)
```

Create a PaySchedule

Create PaySchedule using a certain pay frequency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to update details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that the PaySchedule is for.
$ordinal = 1; // int | Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc.
$paySchedule = new \SynergiTech\Staffology\Model\PaySchedule(); // \SynergiTech\Staffology\Model\PaySchedule

try {
    $apiInstance->createPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->createPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to update details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that the PaySchedule is for. | |
| **ordinal** | **int**| Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc. | [default to 1] |
| **paySchedule** | [**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)|  | [optional] |

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

## `createWithOptionalOrdinalPaySchedule()`

```php
createWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule)
```

Create a PaySchedule (deprecated)

Create PaySchedule using a certain pay frequency and TaxYear specified (and an optional ordinal. 1 will be used if ordinal is not provided).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to update details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that the PaySchedule is for.
$ordinal = 56; // int
$paySchedule = new \SynergiTech\Staffology\Model\PaySchedule(); // \SynergiTech\Staffology\Model\PaySchedule

try {
    $apiInstance->createWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->createWithOptionalOrdinalPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to update details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that the PaySchedule is for. | |
| **ordinal** | **int**|  | [optional] |
| **paySchedule** | [**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)|  | [optional] |

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

## `deletePaySchedule()`

```php
deletePaySchedule($employerId, $payPeriod, $taxYear, $ordinal)
```

Delete PaySchedule

Delete the PaySchedule for the PayPeriod and TaxYear specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to retrieve details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for.
$ordinal = 1; // int | Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc.

try {
    $apiInstance->deletePaySchedule($employerId, $payPeriod, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->deletePaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to retrieve details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. | |
| **ordinal** | **int**| Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc. | [default to 1] |

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

## `deleteWithOptionalOrdinalPaySchedule()`

```php
deleteWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal)
```

Delete PaySchedule (deprecated)

Delete the PaySchedule for the PayPeriod and TaxYear specified (and an optional ordinal. 1 will be used if ordinal is not provided).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to retrieve details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for.
$ordinal = 56; // int

try {
    $apiInstance->deleteWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->deleteWithOptionalOrdinalPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to retrieve details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. | |
| **ordinal** | **int**|  | [optional] |

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

## `getAllPaySchedule()`

```php
getAllPaySchedule($employerId, $taxYear): \SynergiTech\Staffology\Model\PaySchedule[]
```

Get PaySchedules

Get all PaySchedules for the given TaxYear.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the PaySchedule
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for.

try {
    $result = $apiInstance->getAllPaySchedule($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->getAllPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the PaySchedule | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. | |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedule[]**](../Model/PaySchedule.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaySchedule()`

```php
getPaySchedule($employerId, $payPeriod, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PaySchedule
```

Get PaySchedule

Get the PaySchedule for the PayPeriod and TaxYear specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to retrieve details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for.
$ordinal = 1; // int | Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc.

try {
    $result = $apiInstance->getPaySchedule($employerId, $payPeriod, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->getPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to retrieve details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. | |
| **ordinal** | **int**| Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc. | [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPeriodsPaySchedule()`

```php
getPeriodsPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $periodNumber, $includeEvents): \SynergiTech\Staffology\Model\PaySchedulePeriod[]
```

Get PaySchedulePeriods

Get the PaySchedulePeriods for PaySchedule specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the PaySchedule periods
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to retrieve details for
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for
$ordinal = 56; // int | Optionally specify the second, third, fourth (etc) PaySchedule for this PayPeriod. Defaults to 1 (first)
$periodNumber = 56; // int | Optionally specify a period number to get a result just for that period
$includeEvents = false; // bool

try {
    $result = $apiInstance->getPeriodsPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $periodNumber, $includeEvents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->getPeriodsPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the PaySchedule periods | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to retrieve details for | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for | |
| **ordinal** | **int**| Optionally specify the second, third, fourth (etc) PaySchedule for this PayPeriod. Defaults to 1 (first) | |
| **periodNumber** | **int**| Optionally specify a period number to get a result just for that period | [optional] |
| **includeEvents** | **bool**|  | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedulePeriod[]**](../Model/PaySchedulePeriod.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWithOptionalOrdinalPaySchedule()`

```php
getWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal): \SynergiTech\Staffology\Model\PaySchedule
```

Get PaySchedule (deprecated)

Get the PaySchedule for the PayPeriod and TaxYear specified (and an optional ordinal. 1 will be used if ordinal is not provided).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to retrieve details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for.
$ordinal = 56; // int

try {
    $result = $apiInstance->getWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->getWithOptionalOrdinalPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to retrieve details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. | |
| **ordinal** | **int**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `savePaySchedule()`

```php
savePaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule): \SynergiTech\Staffology\Model\PaySchedule
```

Update PaySchedule

Update PaySchedule for the PayPeriod.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to update details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that the PaySchedule is for.
$ordinal = 1; // int | Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc.
$paySchedule = new \SynergiTech\Staffology\Model\PaySchedule(); // \SynergiTech\Staffology\Model\PaySchedule

try {
    $result = $apiInstance->savePaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->savePaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to update details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that the PaySchedule is for. | |
| **ordinal** | **int**| Specify if this is the first, second, third (etc) PaySchedule for this PayPeriod. Use 1 for the first, 2 for the second, etc. | [default to 1] |
| **paySchedule** | [**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveWithOptionalOrdinalPaySchedule()`

```php
saveWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule): \SynergiTech\Staffology\Model\PaySchedule
```

Update PaySchedule (deprecated)

Update PaySchedule for the PayPeriod and TaxYear specified (and an optional ordinal. 1 will be used if ordinal is not provided).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update the PaySchedule
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to update details for.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that the PaySchedule is for.
$ordinal = 56; // int
$paySchedule = new \SynergiTech\Staffology\Model\PaySchedule(); // \SynergiTech\Staffology\Model\PaySchedule

try {
    $result = $apiInstance->saveWithOptionalOrdinalPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $paySchedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->saveWithOptionalOrdinalPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update the PaySchedule | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to update details for. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that the PaySchedule is for. | |
| **ordinal** | **int**|  | [optional] |
| **paySchedule** | [**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedule**](../Model/PaySchedule.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaySchedulePeriodPaySchedule()`

```php
updatePaySchedulePeriodPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $periodNumber, $paySchedulePeriod): \SynergiTech\Staffology\Model\PaySchedulePeriod
```

Update PaySchedulePeriod

Update the PaymentDate for a PaySchedulePeriod.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update the PaySchedulePeriod
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, Monthly) that you want to update details for
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that the PaySchedule is for
$ordinal = 56; // int | Specify the first, second, third (etc) PaySchedule for this PayPeriod.
$periodNumber = 56; // int | Specify the number of the period that you want to update the PaymentDate for
$paySchedulePeriod = new \SynergiTech\Staffology\Model\PaySchedulePeriod(); // \SynergiTech\Staffology\Model\PaySchedulePeriod

try {
    $result = $apiInstance->updatePaySchedulePeriodPaySchedule($employerId, $payPeriod, $taxYear, $ordinal, $periodNumber, $paySchedulePeriod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayScheduleApi->updatePaySchedulePeriodPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update the PaySchedulePeriod | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, Monthly) that you want to update details for | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that the PaySchedule is for | |
| **ordinal** | **int**| Specify the first, second, third (etc) PaySchedule for this PayPeriod. | |
| **periodNumber** | **int**| Specify the number of the period that you want to update the PaymentDate for | |
| **paySchedulePeriod** | [**\SynergiTech\Staffology\Model\PaySchedulePeriod**](../Model/PaySchedulePeriod.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaySchedulePeriod**](../Model/PaySchedulePeriod.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
