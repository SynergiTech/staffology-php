# SynergiTech\Staffology\Cis300Api

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCis300()**](Cis300Api.md#createCis300) | **POST** /employers/{employerId}/rti/cis300/{taxYear} | Create Cis300 |
| [**deleteCis300()**](Cis300Api.md#deleteCis300) | **DELETE** /employers/{employerId}/rti/cis300/{taxYear}/{id} | Delete Cis300 |
| [**getCis300()**](Cis300Api.md#getCis300) | **GET** /employers/{employerId}/rti/cis300/{taxYear}/{id} | Get Cis300 |
| [**getXmlRequestCis300()**](Cis300Api.md#getXmlRequestCis300) | **GET** /employers/{employerId}/rti/cis300/{taxYear}/{id}/xml/request | Get XML Request |
| [**listCis300()**](Cis300Api.md#listCis300) | **GET** /employers/{employerId}/rti/cis300/{taxYear} | List Cis300 |
| [**markAsAcceptedCis300()**](Cis300Api.md#markAsAcceptedCis300) | **POST** /employers/{employerId}/rti/cis300/{taxYear}/{id}/markasaccepted | Mark as Sent |
| [**requiringAttentionCis300()**](Cis300Api.md#requiringAttentionCis300) | **GET** /employers/{employerId}/rti/cis300/requiringattention | Cis300 Requiring Attention |
| [**submitCis300()**](Cis300Api.md#submitCis300) | **POST** /employers/{employerId}/rti/cis300/{taxYear}/{id}/submit | Submit Cis300 |
| [**updateCis300()**](Cis300Api.md#updateCis300) | **PUT** /employers/{employerId}/rti/cis300/{taxYear}/{id} | Update Cis300 |


## `createCis300()`

```php
createCis300($employerId, $taxYear, $cis300): \SynergiTech\Staffology\Model\Cis300
```

Create Cis300

A Cis300 is automatically created for each Tax Month that you pay a Subcontractor.  You would only manually create one if you are intending to submit a nil return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$cis300 = new \SynergiTech\Staffology\Model\Cis300(); // \SynergiTech\Staffology\Model\Cis300

try {
    $result = $apiInstance->createCis300($employerId, $taxYear, $cis300);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->createCis300: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **cis300** | [**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCis300()`

```php
deleteCis300($employerId, $taxYear, $id)
```

Delete Cis300

Not implemented, CIS300s cannot be deleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $apiInstance->deleteCis300($employerId, $taxYear, $id);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->deleteCis300: ', $e->getMessage(), PHP_EOL;
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

## `getCis300()`

```php
getCis300($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Cis300
```

Get Cis300

Retrieves a Cis300

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCis300($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->getCis300: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXmlRequestCis300()`

```php
getXmlRequestCis300($employerId, $taxYear, $id): string
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


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getXmlRequestCis300($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->getXmlRequestCis300: ', $e->getMessage(), PHP_EOL;
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

## `listCis300()`

```php
listCis300($employerId, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List Cis300

Returns all Cis300s for the given tax year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->listCis300($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->listCis300: ', $e->getMessage(), PHP_EOL;
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

## `markAsAcceptedCis300()`

```php
markAsAcceptedCis300($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Cis300
```

Mark as Sent

Marks a Cis300 as having been sent to HMRC and accepted by them  You only use this method if the request has been submitted via an external system.  It will automatically be updated as Sent and/or Accepted if it's submitted via this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->markAsAcceptedCis300($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->markAsAcceptedCis300: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requiringAttentionCis300()`

```php
requiringAttentionCis300($employerId): \SynergiTech\Staffology\Model\Item[]
```

Cis300 Requiring Attention

Returns all Cis300 that have a Submission Status of NotSubmitted or ErrorResponse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->requiringAttentionCis300($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->requiringAttentionCis300: ', $e->getMessage(), PHP_EOL;
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

## `submitCis300()`

```php
submitCis300($employerId, $taxYear, $id, $force): \SynergiTech\Staffology\Model\Cis300
```

Submit Cis300

Submits an existing Cis300 to HMRC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$force = false; // bool | If the CIS300 has already been accepted then you will need to set this to true to force it to be resubmitted

try {
    $result = $apiInstance->submitCis300($employerId, $taxYear, $id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->submitCis300: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **force** | **bool**| If the CIS300 has already been accepted then you will need to set this to true to force it to be resubmitted | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCis300()`

```php
updateCis300($employerId, $taxYear, $id, $cis300): \SynergiTech\Staffology\Model\Cis300
```

Update Cis300

Updates an existing Cis300.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\Cis300Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$cis300 = new \SynergiTech\Staffology\Model\Cis300(); // \SynergiTech\Staffology\Model\Cis300

try {
    $result = $apiInstance->updateCis300($employerId, $taxYear, $id, $cis300);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Cis300Api->updateCis300: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **cis300** | [**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Cis300**](../Model/Cis300.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
