# SynergiTech\Staffology\BillingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**billBilling()**](BillingApi.md#billBilling) | **GET** /billing/bill/{id} | Get Bill |
| [**billCsvBilling()**](BillingApi.md#billCsvBilling) | **GET** /billing/bill/{id}/csv | Get Bill CSV |
| [**billsBilling()**](BillingApi.md#billsBilling) | **GET** /billing/bills | List Bills |
| [**confirmDirectDebitMandateBilling()**](BillingApi.md#confirmDirectDebitMandateBilling) | **GET** /billing/directdebit/confirm | Confirm Direct Debit Setup |
| [**deleteDirectDebitMandateBilling()**](BillingApi.md#deleteDirectDebitMandateBilling) | **DELETE** /billing/directdebit | Delete DirectDebitMandate |
| [**directDebitMandateBilling()**](BillingApi.md#directDebitMandateBilling) | **GET** /billing/directdebit | Get DirectDebitMandate |
| [**getUsageStatsBilling()**](BillingApi.md#getUsageStatsBilling) | **GET** /billing/usage-stats | Get UsageStats Report |
| [**setupDirectDebitMandateBilling()**](BillingApi.md#setupDirectDebitMandateBilling) | **GET** /billing/directdebit/setup | Setup DirectDebitMandate |


## `billBilling()`

```php
billBilling($id): \SynergiTech\Staffology\Model\UsageBill
```

Get Bill

Returns the specified UsageBill

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billBilling($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\UsageBill**](../Model/UsageBill.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billCsvBilling()`

```php
billCsvBilling($id): \SynergiTech\Staffology\Model\ReportResponse
```

Get Bill CSV

Returns the specified UsageBill as a CSV file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->billCsvBilling($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billCsvBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billsBilling()`

```php
billsBilling(): \SynergiTech\Staffology\Model\Item[]
```

List Bills

Returns a list of UsageBills for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->billsBilling();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billsBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `confirmDirectDebitMandateBilling()`

```php
confirmDirectDebitMandateBilling($redirectFlowId)
```

Confirm Direct Debit Setup

This endpoint is called by an external provider. You will never have to call this endpoint yourself.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redirectFlowId = 'redirectFlowId_example'; // string

try {
    $apiInstance->confirmDirectDebitMandateBilling($redirectFlowId);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->confirmDirectDebitMandateBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirectFlowId** | **string**|  | [optional] |

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

## `deleteDirectDebitMandateBilling()`

```php
deleteDirectDebitMandateBilling()
```

Delete DirectDebitMandate

Cancels and deletes the Direct Debit Mandate for the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteDirectDebitMandateBilling();
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->deleteDirectDebitMandateBilling: ', $e->getMessage(), PHP_EOL;
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

## `directDebitMandateBilling()`

```php
directDebitMandateBilling(): \SynergiTech\Staffology\Model\DirectDebitMandate
```

Get DirectDebitMandate

Returns the DirectDebitMandate for the authenticated account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->directDebitMandateBilling();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->directDebitMandateBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Staffology\Model\DirectDebitMandate**](../Model/DirectDebitMandate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsageStatsBilling()`

```php
getUsageStatsBilling($fromDate, $toDate, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Get UsageStats Report

Returns usage statistics data for all employers the logged in user has access to for the given date range.  If either of the dates are not provided then the values are defaulted to the first and last date of the previous calendar month.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->getUsageStatsBilling($fromDate, $toDate, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getUsageStatsBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setupDirectDebitMandateBilling()`

```php
setupDirectDebitMandateBilling($returnUrl): string
```

Setup DirectDebitMandate

Returns a Url to redirect a user to in order to start the process of setting up a Direct Debit Mandate.  Once the process is complete then the user is sent to the URL specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$returnUrl = 'returnUrl_example'; // string

try {
    $result = $apiInstance->setupDirectDebitMandateBilling($returnUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->setupDirectDebitMandateBilling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returnUrl** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
