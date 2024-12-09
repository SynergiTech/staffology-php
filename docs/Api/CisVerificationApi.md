# SynergiTech\Staffology\CisVerificationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCisVerification()**](CisVerificationApi.md#createCisVerification) | **POST** /employers/{employerId}/rti/cis-verification/{taxYear} | Create CisVerificationRequest |
| [**deleteCisVerification()**](CisVerificationApi.md#deleteCisVerification) | **DELETE** /employers/{employerId}/rti/cis-verification/{taxYear}/{id} | Delete CisVerificationRequest |
| [**getCisVerification()**](CisVerificationApi.md#getCisVerification) | **GET** /employers/{employerId}/rti/cis-verification/{taxYear}/{id} | Get CisVerificationRequest |
| [**getXmlRequestCisVerification()**](CisVerificationApi.md#getXmlRequestCisVerification) | **GET** /employers/{employerId}/rti/cis-verification/{taxYear}/{id}/xml/request | Get XML Request |
| [**listCisVerification()**](CisVerificationApi.md#listCisVerification) | **GET** /employers/{employerId}/rti/cis-verification/{taxYear} | List CisVerificationRequest |
| [**markAsAcceptedCisVerification()**](CisVerificationApi.md#markAsAcceptedCisVerification) | **POST** /employers/{employerId}/rti/cis-verification/{taxYear}/{id}/markasaccepted | Mark as Sent |
| [**requiringAttentionCisVerification()**](CisVerificationApi.md#requiringAttentionCisVerification) | **GET** /employers/{employerId}/rti/cis-verification/requiringattention | CisVerificationRequest Requiring Attention |
| [**submitCisVerification()**](CisVerificationApi.md#submitCisVerification) | **POST** /employers/{employerId}/rti/cis-verification/{taxYear}/{id}/submit | Submit CisVerificationRequest |
| [**updateCisVerification()**](CisVerificationApi.md#updateCisVerification) | **PUT** /employers/{employerId}/rti/cis-verification/{taxYear}/{id} | Update CisVerificationRequest |


## `createCisVerification()`

```php
createCisVerification($employerId, $taxYear, $cisVerification): \SynergiTech\Staffology\Model\CisVerification
```

Create CisVerificationRequest

Creates a new CIS Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$cisVerification = new \SynergiTech\Staffology\Model\CisVerification(); // \SynergiTech\Staffology\Model\CisVerification

try {
    $result = $apiInstance->createCisVerification($employerId, $taxYear, $cisVerification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->createCisVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **cisVerification** | [**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCisVerification()`

```php
deleteCisVerification($employerId, $taxYear, $id)
```

Delete CisVerificationRequest

Deletes the CIS Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $apiInstance->deleteCisVerification($employerId, $taxYear, $id);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->deleteCisVerification: ', $e->getMessage(), PHP_EOL;
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

## `getCisVerification()`

```php
getCisVerification($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\CisVerification
```

Get CisVerificationRequest

Retrieves the CIS Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCisVerification($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->getCisVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getXmlRequestCisVerification()`

```php
getXmlRequestCisVerification($employerId, $taxYear, $id): string
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


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->getXmlRequestCisVerification($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->getXmlRequestCisVerification: ', $e->getMessage(), PHP_EOL;
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

## `listCisVerification()`

```php
listCisVerification($employerId, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List CisVerificationRequest

Returns all CIS Verification Requests for the given tax year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->listCisVerification($employerId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->listCisVerification: ', $e->getMessage(), PHP_EOL;
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

## `markAsAcceptedCisVerification()`

```php
markAsAcceptedCisVerification($employerId, $taxYear, $id): \SynergiTech\Staffology\Model\CisVerification
```

Mark as Sent

Marks a CIS Verification Request as having been sent to HMRC and accepted by them  You only use this method if the request has been submitted via an external system.  It will automatically be updated as Sent and/or Accepted if it's submitted via this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string

try {
    $result = $apiInstance->markAsAcceptedCisVerification($employerId, $taxYear, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->markAsAcceptedCisVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requiringAttentionCisVerification()`

```php
requiringAttentionCisVerification($employerId): \SynergiTech\Staffology\Model\Item[]
```

CisVerificationRequest Requiring Attention

Returns all CIS Verification Requests that have a Submission Status of NotSubmitted or ErrorResponse

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->requiringAttentionCisVerification($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->requiringAttentionCisVerification: ', $e->getMessage(), PHP_EOL;
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

## `submitCisVerification()`

```php
submitCisVerification($employerId, $taxYear, $id, $force): \SynergiTech\Staffology\Model\CisVerification
```

Submit CisVerificationRequest

Submits an existing CIS Verification Request to HMRC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$force = false; // bool | If the CisVerification has already been accepted then you will need to set this to true to force it to be resubmitted

try {
    $result = $apiInstance->submitCisVerification($employerId, $taxYear, $id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->submitCisVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **force** | **bool**| If the CisVerification has already been accepted then you will need to set this to true to force it to be resubmitted | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCisVerification()`

```php
updateCisVerification($employerId, $taxYear, $id, $cisVerification): \SynergiTech\Staffology\Model\CisVerification
```

Update CisVerificationRequest

Updates an existing CIS Verification Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CisVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$cisVerification = new \SynergiTech\Staffology\Model\CisVerification(); // \SynergiTech\Staffology\Model\CisVerification

try {
    $result = $apiInstance->updateCisVerification($employerId, $taxYear, $id, $cisVerification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisVerificationApi->updateCisVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **cisVerification** | [**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CisVerification**](../Model/CisVerification.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
