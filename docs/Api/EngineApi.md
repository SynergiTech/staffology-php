# SynergiTech\Staffology\EngineApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateNiEngine()**](EngineApi.md#calculateNiEngine) | **GET** /engine/ni | Calculate NI due. |
| [**calculateTaxEngine()**](EngineApi.md#calculateTaxEngine) | **GET** /engine/tax | Calculate Tax due |
| [**configEngine()**](EngineApi.md#configEngine) | **GET** /engine/config | Get Configuration |
| [**getNationalInsuranceThresholdsEngine()**](EngineApi.md#getNationalInsuranceThresholdsEngine) | **GET** /engine/config/{taxYear}/ni/{payPeriod} | Get National Insurance Thresholds |
| [**getTenantBrandingEngine()**](EngineApi.md#getTenantBrandingEngine) | **GET** /engine/branding/{brandCode} | Tenant Branding |


## `calculateNiEngine()`

```php
calculateNiEngine($taxYear, $gross, $niCategory, $payPeriod): \SynergiTech\Staffology\Model\NationalInsuranceCalculation
```

Calculate NI due.

Calculates National Insurance Contributions due given the values specified.  You would never need to use this API call in practice. It is provided just for information and testing purposes.  Access is limited so you'll probably receive a 401 response if you try to use it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | If not provided then current tax year will be used.
$gross = 3.4; // float | The gross amount for which tax should be calculated.
$niCategory = 'niCategory_example'; // string | The letter from the NI table
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (Weekly, Monthly, etc)

try {
    $result = $apiInstance->calculateNiEngine($taxYear, $gross, $niCategory, $payPeriod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->calculateNiEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| If not provided then current tax year will be used. | [optional] |
| **gross** | **float**| The gross amount for which tax should be calculated. | [optional] |
| **niCategory** | **string**| The letter from the NI table | [optional] |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (Weekly, Monthly, etc) | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NationalInsuranceCalculation**](../Model/NationalInsuranceCalculation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateTaxEngine()`

```php
calculateTaxEngine($taxYear, $taxCode, $gross, $periodStart, $periodEnd, $payPeriod, $period, $week1, $grossToDate, $taxToDate): float
```

Calculate Tax due

Calculates tax amount due, given the values specified.  You would never need to use this API call. It is provided just for information and testing purposes.  Access is limited so you'll probably receive a 401 response if you try to use it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | If not provided then current tax year will be used.
$taxCode = 'taxCode_example'; // string | If not provided then the default code for the tax year will be used.
$gross = 3.4; // float | The gross amount for which tax should be calculated.
$periodStart = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$periodEnd = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (Weekly, Monthly, etc)
$period = 1; // int | The period that this payment is being made for
$week1 = false; // bool | If set to true then tax will be calculated in a Week1/Month1 basis
$grossToDate = 0; // float | Gross pay to date
$taxToDate = 0; // float | Tax paid to date

try {
    $result = $apiInstance->calculateTaxEngine($taxYear, $taxCode, $gross, $periodStart, $periodEnd, $payPeriod, $period, $week1, $grossToDate, $taxToDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->calculateTaxEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| If not provided then current tax year will be used. | [optional] |
| **taxCode** | **string**| If not provided then the default code for the tax year will be used. | [optional] |
| **gross** | **float**| The gross amount for which tax should be calculated. | [optional] |
| **periodStart** | **\DateTime**|  | [optional] |
| **periodEnd** | **\DateTime**|  | [optional] |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (Weekly, Monthly, etc) | [optional] |
| **period** | **int**| The period that this payment is being made for | [optional] [default to 1] |
| **week1** | **bool**| If set to true then tax will be calculated in a Week1/Month1 basis | [optional] [default to false] |
| **grossToDate** | **float**| Gross pay to date | [optional] [default to 0] |
| **taxToDate** | **float**| Tax paid to date | [optional] [default to 0] |

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

## `configEngine()`

```php
configEngine($taxYear): \SynergiTech\Staffology\Model\TaxYearConfig
```

Get Configuration

Returns the raw configuration data that is used as the basis for any calculations for the given tax year.  You would never need to use this configuration values yourself in any API calls. It is provided just for information purposes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for. If not provided then current tax year will be used.

try {
    $result = $apiInstance->configEngine($taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->configEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. If not provided then current tax year will be used. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\TaxYearConfig**](../Model/TaxYearConfig.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNationalInsuranceThresholdsEngine()`

```php
getNationalInsuranceThresholdsEngine($taxYear, $payPeriod, $periodStart, $periodEnd, $effectiveDate): \SynergiTech\Staffology\Model\NationalInsuranceCalculationPeriodValues
```

Get National Insurance Thresholds

Returns the National Insurance thresholds for the given PayPeriod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The year that you want to retrieve details for.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The PayPeriod (ie, monthly) that you want to retrieve details for.
$periodStart = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$periodEnd = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$effectiveDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date as of which you want to retrieve details for. If not provided then latest available details for the current tax year will be used.

try {
    $result = $apiInstance->getNationalInsuranceThresholdsEngine($taxYear, $payPeriod, $periodStart, $periodEnd, $effectiveDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->getNationalInsuranceThresholdsEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The year that you want to retrieve details for. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The PayPeriod (ie, monthly) that you want to retrieve details for. | |
| **periodStart** | **\DateTime**|  | [optional] |
| **periodEnd** | **\DateTime**|  | [optional] |
| **effectiveDate** | **\DateTime**| The date as of which you want to retrieve details for. If not provided then latest available details for the current tax year will be used. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NationalInsuranceCalculationPeriodValues**](../Model/NationalInsuranceCalculationPeriodValues.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantBrandingEngine()`

```php
getTenantBrandingEngine($brandCode): \SynergiTech\Staffology\Model\Tenant
```

Tenant Branding

Returns Tenant Branding. Not for public use, will return 401

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brandCode = 'brandCode_example'; // string | The Id of the Tenant you want to retrieve.

try {
    $result = $apiInstance->getTenantBrandingEngine($brandCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EngineApi->getTenantBrandingEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brandCode** | **string**| The Id of the Tenant you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
