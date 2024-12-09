# SynergiTech\Staffology\OpeningBalancesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNicSummaryOpeningBalances()**](OpeningBalancesApi.md#createNicSummaryOpeningBalances) | **POST** /employers/{employerId}/employees/{employeeId}/openingBalances/nic/{taxYear} | Create NicSummary |
| [**deleteNicSummaryOpeningBalances()**](OpeningBalancesApi.md#deleteNicSummaryOpeningBalances) | **DELETE** /employers/{employerId}/employees/{employeeId}/openingBalances/nic/{taxYear}/{uniqueId} | Delete NicSummary |
| [**getNicSummariesOpeningBalances()**](OpeningBalancesApi.md#getNicSummariesOpeningBalances) | **GET** /employers/{employerId}/employees/{employeeId}/openingBalances/nic/{taxYear} | Get NicSummaries |
| [**getNicSummaryOpeningBalances()**](OpeningBalancesApi.md#getNicSummaryOpeningBalances) | **GET** /employers/{employerId}/employees/{employeeId}/openingBalances/nic/{taxYear}/{uniqueId} | Get NicSummary |
| [**getOpeningBalances()**](OpeningBalancesApi.md#getOpeningBalances) | **GET** /employers/{employerId}/employees/{employeeId}/openingBalances | Get Opening Balances |
| [**getOpeningBalancesTotalsOpeningBalances()**](OpeningBalancesApi.md#getOpeningBalancesTotalsOpeningBalances) | **GET** /employers/{employerId}/employees/openingbalances/{taxYear} | Totals of employee opening balances for a tax year |
| [**updateNicSummariesOpeningBalances()**](OpeningBalancesApi.md#updateNicSummariesOpeningBalances) | **PUT** /employers/{employerId}/employees/{employeeId}/openingBalances/nic/{taxYear} | Update NicSummaries |
| [**updateNicSummaryOpeningBalances()**](OpeningBalancesApi.md#updateNicSummaryOpeningBalances) | **PUT** /employers/{employerId}/employees/{employeeId}/openingBalances/nic/{taxYear}/{uniqueId} | Update NicSummary |
| [**updateOpeningBalances()**](OpeningBalancesApi.md#updateOpeningBalances) | **PUT** /employers/{employerId}/employees/{employeeId}/openingBalances | Update Opening Balances |
| [**updateP45OpeningBalances()**](OpeningBalancesApi.md#updateP45OpeningBalances) | **PUT** /employers/{employerId}/employees/{employeeId}/openingBalances/p45 | Update P45 Value |
| [**updateTerminationPaymentsOpeningBalances()**](OpeningBalancesApi.md#updateTerminationPaymentsOpeningBalances) | **PUT** /employers/{employerId}/employees/{employeeId}/openingBalances/terminationpayments | Update Termination Pay |


## `createNicSummaryOpeningBalances()`

```php
createNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $nicSummary)
```

Create NicSummary

Creates a NicSummary for for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to create the Nic Summary
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the NicSummary applies to
$nicSummary = new \SynergiTech\Staffology\Model\NicSummary(); // \SynergiTech\Staffology\Model\NicSummary

try {
    $apiInstance->createNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $nicSummary);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->createNicSummaryOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to create the Nic Summary | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the NicSummary applies to | |
| **nicSummary** | [**\SynergiTech\Staffology\Model\NicSummary**](../Model/NicSummary.md)|  | [optional] |

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

## `deleteNicSummaryOpeningBalances()`

```php
deleteNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $uniqueId)
```

Delete NicSummary

Delete a NicSummary for a Unique Id for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to delete the Nic Summary
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the NicSummary applies to
$uniqueId = 'uniqueId_example'; // string | The Id of the NicSummary

try {
    $apiInstance->deleteNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $uniqueId);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->deleteNicSummaryOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to delete the Nic Summary | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the NicSummary applies to | |
| **uniqueId** | **string**| The Id of the NicSummary | |

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

## `getNicSummariesOpeningBalances()`

```php
getNicSummariesOpeningBalances($employerId, $employeeId, $taxYear, $openingBalancesOnly): \SynergiTech\Staffology\Model\NicSummary[]
```

Get NicSummaries

Returns the NicSummaries for an Employee for a given TaxYear.  If the TaxYear is the same as on their OpeningBalances then the NicSummaries will be the same as shown there.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve Opening Balances
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the NicSummaries apply to
$openingBalancesOnly = true; // bool | Limit the results to opening balance year to date

try {
    $result = $apiInstance->getNicSummariesOpeningBalances($employerId, $employeeId, $taxYear, $openingBalancesOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->getNicSummariesOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve Opening Balances | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the NicSummaries apply to | |
| **openingBalancesOnly** | **bool**| Limit the results to opening balance year to date | [optional] [default to true] |

### Return type

[**\SynergiTech\Staffology\Model\NicSummary[]**](../Model/NicSummary.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNicSummaryOpeningBalances()`

```php
getNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $uniqueId): \SynergiTech\Staffology\Model\NicSummary
```

Get NicSummary

Returns a NicSummary for a Unique Id for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve the Nic Summary
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the NicSummary applies to
$uniqueId = 'uniqueId_example'; // string | The Id of the NicSummary

try {
    $result = $apiInstance->getNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $uniqueId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->getNicSummaryOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve the Nic Summary | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the NicSummary applies to | |
| **uniqueId** | **string**| The Id of the NicSummary | |

### Return type

[**\SynergiTech\Staffology\Model\NicSummary**](../Model/NicSummary.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpeningBalances()`

```php
getOpeningBalances($employerId, $employeeId): \SynergiTech\Staffology\Model\OpeningBalances
```

Get Opening Balances

Returns the Opening Balances for an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve Opening Balances

try {
    $result = $apiInstance->getOpeningBalances($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->getOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve Opening Balances | |

### Return type

[**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpeningBalancesTotalsOpeningBalances()`

```php
getOpeningBalancesTotalsOpeningBalances($employerId, $taxYear): \SynergiTech\Staffology\Model\OpeningBalancesTotals
```

Totals of employee opening balances for a tax year

Totals of Employee Opening Balances in the specified TaxYear

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to search.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear for which you want to Opening Balances totals.

try {
    $result = $apiInstance->getOpeningBalancesTotalsOpeningBalances($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->getOpeningBalancesTotalsOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to search. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear for which you want to Opening Balances totals. | |

### Return type

[**\SynergiTech\Staffology\Model\OpeningBalancesTotals**](../Model/OpeningBalancesTotals.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNicSummariesOpeningBalances()`

```php
updateNicSummariesOpeningBalances($employerId, $employeeId, $taxYear, $nicSummary): \SynergiTech\Staffology\Model\NicSummary[]
```

Update NicSummaries

Updates the NicSummaries for an Employee for a given TaxYear.  If the TaxYear is the same as on their OpeningBalances then the NicSummaries there will also be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve Opening Balances
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the NicSummaries apply to
$nicSummary = array(new \SynergiTech\Staffology\Model\NicSummary()); // \SynergiTech\Staffology\Model\NicSummary[]

try {
    $result = $apiInstance->updateNicSummariesOpeningBalances($employerId, $employeeId, $taxYear, $nicSummary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->updateNicSummariesOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve Opening Balances | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the NicSummaries apply to | |
| **nicSummary** | [**\SynergiTech\Staffology\Model\NicSummary[]**](../Model/NicSummary.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NicSummary[]**](../Model/NicSummary.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNicSummaryOpeningBalances()`

```php
updateNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $uniqueId, $nicSummary): \SynergiTech\Staffology\Model\NicSummary
```

Update NicSummary

Update a NicSummary for a Unique Id for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to update the Nic Summary
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the NicSummary applies to
$uniqueId = 'uniqueId_example'; // string | The Id of the NicSummary
$nicSummary = new \SynergiTech\Staffology\Model\NicSummary(); // \SynergiTech\Staffology\Model\NicSummary

try {
    $result = $apiInstance->updateNicSummaryOpeningBalances($employerId, $employeeId, $taxYear, $uniqueId, $nicSummary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->updateNicSummaryOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to update the Nic Summary | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the NicSummary applies to | |
| **uniqueId** | **string**| The Id of the NicSummary | |
| **nicSummary** | [**\SynergiTech\Staffology\Model\NicSummary**](../Model/NicSummary.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NicSummary**](../Model/NicSummary.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOpeningBalances()`

```php
updateOpeningBalances($employerId, $employeeId, $openingBalances): \SynergiTech\Staffology\Model\OpeningBalances
```

Update Opening Balances

Updates the Opening Balances for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to update Opening Balances
$openingBalances = new \SynergiTech\Staffology\Model\OpeningBalances(); // \SynergiTech\Staffology\Model\OpeningBalances

try {
    $result = $apiInstance->updateOpeningBalances($employerId, $employeeId, $openingBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->updateOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to update Opening Balances | |
| **openingBalances** | [**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateP45OpeningBalances()`

```php
updateP45OpeningBalances($employerId, $employeeId, $openingBalances): \SynergiTech\Staffology\Model\OpeningBalances
```

Update P45 Value

Updates the P45 Values on the Opening Balances for an Employee.  This would ideally be done when the Opening Balances are updated but if payruns have already been started for the employee then Opening Balances can't be updated - hence this API call just to update the P45 values.  There must be a currently open PayRun for the employee.  Only the PreviousEmployerGross and PreviousEmployerTax properties of the submitted OpeningBalances model are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to update P45 figures
$openingBalances = new \SynergiTech\Staffology\Model\OpeningBalances(); // \SynergiTech\Staffology\Model\OpeningBalances

try {
    $result = $apiInstance->updateP45OpeningBalances($employerId, $employeeId, $openingBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->updateP45OpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to update P45 figures | |
| **openingBalances** | [**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTerminationPaymentsOpeningBalances()`

```php
updateTerminationPaymentsOpeningBalances($employerId, $employeeId, $openingBalances): \SynergiTech\Staffology\Model\OpeningBalances
```

Update Termination Pay

Updates the Termination Pay value on the Opening Balances for an Employee.  This would ideally be done when the Opening Balances are updated but if payruns have already been started for the employee then Opening Balances can't be updated - hence this API call just to update the Termination Pay value.  Only the TerminationPayments property of the submitted OpeningBalances model is updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to update Termination Payments
$openingBalances = new \SynergiTech\Staffology\Model\OpeningBalances(); // \SynergiTech\Staffology\Model\OpeningBalances

try {
    $result = $apiInstance->updateTerminationPaymentsOpeningBalances($employerId, $employeeId, $openingBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalancesApi->updateTerminationPaymentsOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to update Termination Payments | |
| **openingBalances** | [**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OpeningBalances**](../Model/OpeningBalances.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
