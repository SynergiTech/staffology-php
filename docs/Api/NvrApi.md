# SynergiTech\Staffology\NvrApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createNvr()**](NvrApi.md#createNvr) | **POST** /employers/{employerId}/rti/nvr/{taxYear} | Create NVR |
| [**deleteNvr()**](NvrApi.md#deleteNvr) | **DELETE** /employers/{employerId}/rti/nvr/{taxYear}/{id} | Delete NVR |
| [**getNvr()**](NvrApi.md#getNvr) | **GET** /employers/{employerId}/rti/nvr/{taxYear}/{id} | Get NVR |
| [**getXmlRequestNvr()**](NvrApi.md#getXmlRequestNvr) | **GET** /employers/{employerId}/rti/nvr/{taxYear}/{id}/xml/request | Get XML Request |
| [**listNvr()**](NvrApi.md#listNvr) | **GET** /employers/{employerId}/rti/nvr/{taxYear} | List NVR |
| [**markAsAcceptedNvr()**](NvrApi.md#markAsAcceptedNvr) | **POST** /employers/{employerId}/rti/nvr/{taxYear}/{id}/markasaccepted | Mark as Sent |
| [**requiringAttentionNvr()**](NvrApi.md#requiringAttentionNvr) | **GET** /employers/{employerId}/rti/nvr/requiringattention | NVR Requiring Attention |
| [**submitNvr()**](NvrApi.md#submitNvr) | **POST** /employers/{employerId}/rti/nvr/{taxYear}/{id}/submit | Submit an existing NVR |
| [**updateNvr()**](NvrApi.md#updateNvr) | **PUT** /employers/{employerId}/rti/nvr/{taxYear}/{id} | Update NVR |


## `createNvr()`

```php
createNvr($employerId, $taxYear, $nvr): \SynergiTech\Staffology\Model\Nvr
```

Create NVR

Creates a new NiNo Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$nvr = new \SynergiTech\Staffology\Model\Nvr(); // \SynergiTech\Staffology\Model\Nvr

try {
    $result = $apiInstance->createNvr($employerId, $taxYear, $nvr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->createNvr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **nvr** | [**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNvr()`

```php
deleteNvr($employerId, $taxYear, $id)
```

Delete NVR

Deletes the NVR.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $apiInstance->deleteNvr($employerId, $taxYear, $id);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->deleteNvr: ', $e->getMessage(), PHP_EOL;
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

## `getNvr()`

```php
getNvr($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Nvr
```

Get NVR

Retrieves the NiNo Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getNvr($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->getNvr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXmlRequestNvr()`

```php
getXmlRequestNvr($employerId, $taxYear, $id): string
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


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getXmlRequestNvr($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->getXmlRequestNvr: ', $e->getMessage(), PHP_EOL;
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

## `listNvr()`

```php
listNvr($employerId, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List NVR

Returns all NiNo Verification Requests for the given tax year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->listNvr($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->listNvr: ', $e->getMessage(), PHP_EOL;
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

## `markAsAcceptedNvr()`

```php
markAsAcceptedNvr($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\Nvr
```

Mark as Sent

Marks a  NiNo Verification Request as having been sent to HMRC and accepted by them  You only use this method if the NVR has been submitted via an external system.  It will automatically be updated as Sent and/or Accepted if it's submitted via this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->markAsAcceptedNvr($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->markAsAcceptedNvr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requiringAttentionNvr()`

```php
requiringAttentionNvr($employerId): \SynergiTech\Staffology\Model\Item[]
```

NVR Requiring Attention

Returns all NiNo Verification Requests that have a Submission Status of NotSubmitted or ErrorResponse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->requiringAttentionNvr($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->requiringAttentionNvr: ', $e->getMessage(), PHP_EOL;
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

## `submitNvr()`

```php
submitNvr($employerId, $taxYear, $id, $force): \SynergiTech\Staffology\Model\Nvr
```

Submit an existing NVR

Submits an existing NiNo Verification Request to HMRC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$force = false; // bool

try {
    $result = $apiInstance->submitNvr($employerId, $taxYear, $id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->submitNvr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **force** | **bool**|  | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNvr()`

```php
updateNvr($employerId, $taxYear, $id, $nvr): \SynergiTech\Staffology\Model\Nvr
```

Update NVR

Updates an existing NiNo Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NvrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$nvr = new \SynergiTech\Staffology\Model\Nvr(); // \SynergiTech\Staffology\Model\Nvr

try {
    $result = $apiInstance->updateNvr($employerId, $taxYear, $id, $nvr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NvrApi->updateNvr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **nvr** | [**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Nvr**](../Model/Nvr.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
