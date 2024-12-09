# SynergiTech\Staffology\HmrcPaymentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bankPaymentHmrcPayment()**](HmrcPaymentApi.md#bankPaymentHmrcPayment) | **GET** /employers/{employerId}/hmrcpayment/{taxYear}/{periodEnding}/bankpayment | HMRC Bank Payment |
| [**getHmrcPayment()**](HmrcPaymentApi.md#getHmrcPayment) | **GET** /employers/{employerId}/hmrcpayment/{taxYear}/{periodEnding} | Get HmrcLiability |
| [**indexHmrcPayment()**](HmrcPaymentApi.md#indexHmrcPayment) | **GET** /employers/{employerId}/hmrcpayment/{taxYear} | List HmrcLiabilities |
| [**updateHmrcPayment()**](HmrcPaymentApi.md#updateHmrcPayment) | **PUT** /employers/{employerId}/hmrcpayment/{taxYear}/{periodEnding} | Update HmrcLiability |


## `bankPaymentHmrcPayment()`

```php
bankPaymentHmrcPayment($employerId, $taxYear, $periodEnding, $accept): \SynergiTech\Staffology\Model\BankPaymentInstructionReportResponse
```

HMRC Bank Payment

Returns a payments file for the HMRC payment that needs to be made

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HmrcPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodEnding = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->bankPaymentHmrcPayment($employerId, $taxYear, $periodEnding, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HmrcPaymentApi->bankPaymentHmrcPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **periodEnding** | **\DateTime**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\BankPaymentInstructionReportResponse**](../Model/BankPaymentInstructionReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHmrcPayment()`

```php
getHmrcPayment($employerId, $taxYear, $periodEnding): \SynergiTech\Staffology\Model\HmrcLiability
```

Get HmrcLiability

Gets the HmrcLiability record for the period ending on the date specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HmrcPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodEnding = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The final date of the month or quarter that the HmrcLiability is for.

try {
    $result = $apiInstance->getHmrcPayment($employerId, $taxYear, $periodEnding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HmrcPaymentApi->getHmrcPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **periodEnding** | **\DateTime**| The final date of the month or quarter that the HmrcLiability is for. | |

### Return type

[**\SynergiTech\Staffology\Model\HmrcLiability**](../Model/HmrcLiability.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexHmrcPayment()`

```php
indexHmrcPayment($employerId, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List HmrcLiabilities

Lists all periods for which a payment is due to HMRC in the given TaxYear

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HmrcPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list HMRC Payments
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->indexHmrcPayment($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HmrcPaymentApi->indexHmrcPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list HMRC Payments | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |

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

## `updateHmrcPayment()`

```php
updateHmrcPayment($employerId, $taxYear, $periodEnding, $hmrcLiability): \SynergiTech\Staffology\Model\HmrcLiability
```

Update HmrcLiability

Updates the editable fields of a HmrcLiability (ie, Adjustment, CISDeductionsSuffered, etc)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\HmrcPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodEnding = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The final date of the month or quarter that the HmrcLiability is for.
$hmrcLiability = new \SynergiTech\Staffology\Model\HmrcLiability(); // \SynergiTech\Staffology\Model\HmrcLiability

try {
    $result = $apiInstance->updateHmrcPayment($employerId, $taxYear, $periodEnding, $hmrcLiability);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HmrcPaymentApi->updateHmrcPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **periodEnding** | **\DateTime**| The final date of the month or quarter that the HmrcLiability is for. | |
| **hmrcLiability** | [**\SynergiTech\Staffology\Model\HmrcLiability**](../Model/HmrcLiability.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\HmrcLiability**](../Model/HmrcLiability.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
