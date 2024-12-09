# SynergiTech\Staffology\ExbApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**annualValuesExb()**](ExbApi.md#annualValuesExb) | **GET** /employers/{employerId}/rti/exb/{taxYear}/values | Annual Values |
| [**createExb()**](ExbApi.md#createExb) | **POST** /employers/{employerId}/rti/exb/{taxYear} | Create EXB |
| [**deleteExb()**](ExbApi.md#deleteExb) | **DELETE** /employers/{employerId}/rti/exb/{taxYear}/{id} | Delete EXB |
| [**getExb()**](ExbApi.md#getExb) | **GET** /employers/{employerId}/rti/exb/{taxYear}/{id} | Get EXB |
| [**getXmlRequestExb()**](ExbApi.md#getXmlRequestExb) | **GET** /employers/{employerId}/rti/exb/{taxYear}/{id}/xml/request | Get XML Request |
| [**listExb()**](ExbApi.md#listExb) | **GET** /employers/{employerId}/rti/exb/{taxYear} | List EXB |
| [**markAsAcceptedExb()**](ExbApi.md#markAsAcceptedExb) | **POST** /employers/{employerId}/rti/exb/{taxYear}/{id}/markasaccepted | Mark as Sent |
| [**requiringAttentionExb()**](ExbApi.md#requiringAttentionExb) | **GET** /employers/{employerId}/rti/exb/requiringattention | EXB Requiring Attention |
| [**submitExb()**](ExbApi.md#submitExb) | **POST** /employers/{employerId}/rti/exb/{taxYear}/{id}/submit | Submit EXB |
| [**updateExb()**](ExbApi.md#updateExb) | **PUT** /employers/{employerId}/rti/exb/{taxYear}/{id} | Update EXB |


## `annualValuesExb()`

```php
annualValuesExb($employerId, $taxYear): \SynergiTech\Staffology\Model\Exb
```

Annual Values

Returns an empty Exb showing the number of employees and total benefits for the year provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->annualValuesExb($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->annualValuesExb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |

### Return type

[**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createExb()`

```php
createExb($employerId, $taxYear, $exb): \SynergiTech\Staffology\Model\Eps
```

Create EXB

Creates a new Expenses And Benefits submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$exb = new \SynergiTech\Staffology\Model\Exb(); // \SynergiTech\Staffology\Model\Exb

try {
    $result = $apiInstance->createExb($employerId, $taxYear, $exb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->createExb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **exb** | [**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)|  | [optional] |

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

## `deleteExb()`

```php
deleteExb($employerId, $taxYear, $id)
```

Delete EXB

Deletes the EXB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $apiInstance->deleteExb($employerId, $taxYear, $id);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->deleteExb: ', $e->getMessage(), PHP_EOL;
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

## `getExb()`

```php
getExb($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Exb
```

Get EXB

Retrieves the Expenses And Benefits submission specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getExb($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->getExb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXmlRequestExb()`

```php
getXmlRequestExb($employerId, $taxYear, $id): string
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


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getXmlRequestExb($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->getXmlRequestExb: ', $e->getMessage(), PHP_EOL;
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

## `listExb()`

```php
listExb($employerId, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List EXB

Returns all ExpensesAndBenefits for the given tax year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->listExb($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->listExb: ', $e->getMessage(), PHP_EOL;
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

## `markAsAcceptedExb()`

```php
markAsAcceptedExb($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Exb
```

Mark as Sent

Marks an Expenses And Benefits submission as having been sent to HMRC and accepted by them.  You would only use this method if the EXB had been submitted via an external system.  It will automatically be updated as Sent and/or Accepted if it's submitted via this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->markAsAcceptedExb($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->markAsAcceptedExb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requiringAttentionExb()`

```php
requiringAttentionExb($employerId): \SynergiTech\Staffology\Model\Item[]
```

EXB Requiring Attention

Returns all Expenses And Benefits submissions that have a Submission Status of NotSubmitted or ErrorResponse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->requiringAttentionExb($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->requiringAttentionExb: ', $e->getMessage(), PHP_EOL;
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

## `submitExb()`

```php
submitExb($employerId, $taxYear, $id, $force): \SynergiTech\Staffology\Model\Exb
```

Submit EXB

Submits an existing Expenses And Benefits submission to HMRC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$force = false; // bool | If the EXB has already been accepted then you will need to set this to true to force it to be resubmitted

try {
    $result = $apiInstance->submitExb($employerId, $taxYear, $id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->submitExb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **force** | **bool**| If the EXB has already been accepted then you will need to set this to true to force it to be resubmitted | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExb()`

```php
updateExb($employerId, $taxYear, $id, $exb): \SynergiTech\Staffology\Model\Exb
```

Update EXB

Updates an existing Expenses And Benefits submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ExbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$exb = new \SynergiTech\Staffology\Model\Exb(); // \SynergiTech\Staffology\Model\Exb

try {
    $result = $apiInstance->updateExb($employerId, $taxYear, $id, $exb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExbApi->updateExb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **exb** | [**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Exb**](../Model/Exb.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
