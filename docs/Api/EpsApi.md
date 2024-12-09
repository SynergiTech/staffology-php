# SynergiTech\Staffology\EpsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apprenticeshipLevyEps()**](EpsApi.md#apprenticeshipLevyEps) | **GET** /employers/{employerId}/rti/eps/{taxYear}/{taxMonth}/apprenticeshipLevytodate | Apprenticeship Levy |
| [**createEps()**](EpsApi.md#createEps) | **POST** /employers/{employerId}/rti/eps/{taxYear} | Create EPS |
| [**deleteEps()**](EpsApi.md#deleteEps) | **DELETE** /employers/{employerId}/rti/eps/{taxYear}/{id} | Delete Eps |
| [**getEps()**](EpsApi.md#getEps) | **GET** /employers/{employerId}/rti/eps/{taxYear}/{id} | Get EPS |
| [**getXmlRequestEps()**](EpsApi.md#getXmlRequestEps) | **GET** /employers/{employerId}/rti/eps/{taxYear}/{id}/xml/request | Get XML Request |
| [**listEps()**](EpsApi.md#listEps) | **GET** /employers/{employerId}/rti/eps/{taxYear} | List EPS |
| [**markAsAcceptedEps()**](EpsApi.md#markAsAcceptedEps) | **POST** /employers/{employerId}/rti/eps/{taxYear}/{id}/markasaccepted | Mark as Sent |
| [**recoverableAmountsEps()**](EpsApi.md#recoverableAmountsEps) | **GET** /employers/{employerId}/rti/eps/{taxYear}/{taxMonth}/recoverableamounts | Recoverable Amounts |
| [**requiringAttentionEps()**](EpsApi.md#requiringAttentionEps) | **GET** /employers/{employerId}/rti/eps/requiringattention | EPS Requiring Attention |
| [**submitEps()**](EpsApi.md#submitEps) | **POST** /employers/{employerId}/rti/eps/{taxYear}/{id}/submit | Submit EPS |
| [**updateEps()**](EpsApi.md#updateEps) | **PUT** /employers/{employerId}/rti/eps/{taxYear}/{id} | Update EPS |


## `apprenticeshipLevyEps()`

```php
apprenticeshipLevyEps($employerId, $taxYear, $taxMonth): \SynergiTech\Staffology\Model\EpsApprenticeshipLevy
```

Apprenticeship Levy

Get all Apprenticeship Levy (SMP, etc) for a given tax year, up to the given tax month, and if the 'Linked EPS'  is enabled by the employer, apprenticeship levy as well as the apprenticeship levy for any employers with 'Linked EPS' enabled and with the same PAYE scheme  is returned as a sum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$taxMonth = 56; // int

try {
    $result = $apiInstance->apprenticeshipLevyEps($employerId, $taxYear, $taxMonth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->apprenticeshipLevyEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **taxMonth** | **int**|  | |

### Return type

[**\SynergiTech\Staffology\Model\EpsApprenticeshipLevy**](../Model/EpsApprenticeshipLevy.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEps()`

```php
createEps($employerId, $taxYear, $eps): \SynergiTech\Staffology\Model\Eps
```

Create EPS

Creates a new Employer Payment Summary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$eps = new \SynergiTech\Staffology\Model\Eps(); // \SynergiTech\Staffology\Model\Eps

try {
    $result = $apiInstance->createEps($employerId, $taxYear, $eps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->createEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **eps** | [**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEps()`

```php
deleteEps($employerId, $taxYear, $id)
```

Delete Eps

Deletes the Eps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $apiInstance->deleteEps($employerId, $taxYear, $id);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->deleteEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

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

## `getEps()`

```php
getEps($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Eps
```

Get EPS

Retrieves the Employer Payment Summary specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEps($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->getEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXmlRequestEps()`

```php
getXmlRequestEps($employerId, $taxYear, $id): string
```

Get XML Request

Returns the XML request that was or will be sent to HMRC for this RTI document.  Although the value is XML, it is returned as a JSON string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getXmlRequestEps($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->getXmlRequestEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

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

## `listEps()`

```php
listEps($employerId, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List EPS

Returns all Employment Payment Summaries for the given tax year.  If the 'Linked EPS' is enabled by the employer, Employment Payment Summaries  for employer as well as for any linked employers with 'Linked EPS' enabled  and with the same PAYE scheme are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->listEps($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->listEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
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

## `markAsAcceptedEps()`

```php
markAsAcceptedEps($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Eps
```

Mark as Sent

Marks an Employer Payment Summary as having been sent to HMRC and accepted by them.  You would only use this method if the EPS had been submitted via an external system.  It will automatically be updated as Sent and/or Accepted if it's submitted via this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->markAsAcceptedEps($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->markAsAcceptedEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoverableAmountsEps()`

```php
recoverableAmountsEps($employerId, $taxYear, $taxMonth): \SynergiTech\Staffology\Model\RecoverableAmounts
```

Recoverable Amounts

Get all recoverable amounts (SMP, etc) for a given tax year, up to the given tax month, and if the 'Linked EPS'  is enabled by the employer, recoverable amounts as well as the recoverable amounts for any employers with 'Linked EPS' enabled and with the same PAYE scheme  is returned as a sum.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$taxMonth = 56; // int

try {
    $result = $apiInstance->recoverableAmountsEps($employerId, $taxYear, $taxMonth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->recoverableAmountsEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **taxMonth** | **int**|  | |

### Return type

[**\SynergiTech\Staffology\Model\RecoverableAmounts**](../Model/RecoverableAmounts.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requiringAttentionEps()`

```php
requiringAttentionEps($employerId): \SynergiTech\Staffology\Model\Item[]
```

EPS Requiring Attention

Returns all Employer Payment Summaries that have a Submission Status of NotSubmitted or ErrorResponse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->requiringAttentionEps($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->requiringAttentionEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |

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

## `submitEps()`

```php
submitEps($employerId, $taxYear, $id, $force): \SynergiTech\Staffology\Model\Eps
```

Submit EPS

Submits an existing Employment Payment Summary to HMRC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$force = false; // bool | If the EPS has already been accepted then you will need to set this to true to force it to be resubmitted

try {
    $result = $apiInstance->submitEps($employerId, $taxYear, $id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->submitEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **force** | **bool**| If the EPS has already been accepted then you will need to set this to true to force it to be resubmitted | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEps()`

```php
updateEps($employerId, $taxYear, $id, $eps): \SynergiTech\Staffology\Model\Eps
```

Update EPS

Updates an existing Employment Payment Summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$eps = new \SynergiTech\Staffology\Model\Eps(); // \SynergiTech\Staffology\Model\Eps

try {
    $result = $apiInstance->updateEps($employerId, $taxYear, $id, $eps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpsApi->updateEps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **eps** | [**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Eps**](../Model/Eps.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
