# SynergiTech\Staffology\PayCodeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayCode()**](PayCodeApi.md#createPayCode) | **POST** /employers/{employerId}/paycodes | Create PayCode |
| [**deletePayCode()**](PayCodeApi.md#deletePayCode) | **DELETE** /employers/{employerId}/paycodes/{code} | Delete PayCode (deprecated) |
| [**deletePayCodePayCode()**](PayCodeApi.md#deletePayCodePayCode) | **DELETE** /employers/{employerId}/paycodes/paycode | Delete PayCode |
| [**getPayCode()**](PayCodeApi.md#getPayCode) | **GET** /employers/{employerId}/paycodes/{code} | Get PayCode (deprecated) |
| [**getPayCodePayCode()**](PayCodeApi.md#getPayCodePayCode) | **GET** /employers/{employerId}/paycodes/paycode | Get PayCode |
| [**indexPayCode()**](PayCodeApi.md#indexPayCode) | **GET** /employers/{employerId}/paycodes | List PayCodes |
| [**nominalCodeMappingsPayCode()**](PayCodeApi.md#nominalCodeMappingsPayCode) | **GET** /employers/{employerId}/paycodes/nominalcodes | Get Nominal Code Mappings |
| [**updateNominalCodeMappingsPayCode()**](PayCodeApi.md#updateNominalCodeMappingsPayCode) | **PUT** /employers/{employerId}/paycodes/nominalcodes | Updates Nominal Code Mappings |
| [**updatePayCode()**](PayCodeApi.md#updatePayCode) | **PUT** /employers/{employerId}/paycodes/{code} | Update PayCode (deprecated) |
| [**updatePayCodePayCode()**](PayCodeApi.md#updatePayCodePayCode) | **PUT** /employers/{employerId}/paycodes/paycode | Update PayCode |


## `createPayCode()`

```php
createPayCode($employerId, $payCode): \SynergiTech\Staffology\Model\PayCode
```

Create PayCode

Creates a new PayCode for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payCode = new \SynergiTech\Staffology\Model\PayCode(); // \SynergiTech\Staffology\Model\PayCode

try {
    $result = $apiInstance->createPayCode($employerId, $payCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->createPayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payCode** | [**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePayCode()`

```php
deletePayCode($employerId, $code)
```

Delete PayCode (deprecated)

Deletes the specified PayCode.  Use the other Delete endpoint that supports non-alphanumeric characters for a pay code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string

try {
    $apiInstance->deletePayCode($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->deletePayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | |

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

## `deletePayCodePayCode()`

```php
deletePayCodePayCode($employerId, $code)
```

Delete PayCode

Deletes the specified PayCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string

try {
    $apiInstance->deletePayCodePayCode($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->deletePayCodePayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | [optional] |

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

## `getPayCode()`

```php
getPayCode($employerId, $code): \SynergiTech\Staffology\Model\PayCode
```

Get PayCode (deprecated)

Gets the PayCode specified.  Use the other GET endpoint that supports non-alphanumeric characters for a pay code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Pay Code belongs.
$code = 'code_example'; // string | The code of the Pay Code you want to retrieve.

try {
    $result = $apiInstance->getPayCode($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->getPayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Pay Code belongs. | |
| **code** | **string**| The code of the Pay Code you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayCodePayCode()`

```php
getPayCodePayCode($employerId, $code): \SynergiTech\Staffology\Model\PayCode
```

Get PayCode

Gets the PayCode specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Pay Code belongs.
$code = 'code_example'; // string | The code of the Pay Code you want to retrieve.

try {
    $result = $apiInstance->getPayCodePayCode($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->getPayCodePayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Pay Code belongs. | |
| **code** | **string**| The code of the Pay Code you want to retrieve. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPayCode()`

```php
indexPayCode($employerId, $verbose): \SynergiTech\Staffology\Model\PayCode[]
```

List PayCodes

Lists all PayCodes for the Employer specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Pay Codes
$verbose = false; // bool | If provided and set to true then full details of all Pay Codes will be returned instead of just a summary

try {
    $result = $apiInstance->indexPayCode($employerId, $verbose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->indexPayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Pay Codes | |
| **verbose** | **bool**| If provided and set to true then full details of all Pay Codes will be returned instead of just a summary | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\PayCode[]**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nominalCodeMappingsPayCode()`

```php
nominalCodeMappingsPayCode($employerId): \SynergiTech\Staffology\Model\NominalCodeMapping[]
```

Get Nominal Code Mappings

Returns the list of mappings of PayCodes to NominalCodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get the mapping

try {
    $result = $apiInstance->nominalCodeMappingsPayCode($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->nominalCodeMappingsPayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get the mapping | |

### Return type

[**\SynergiTech\Staffology\Model\NominalCodeMapping[]**](../Model/NominalCodeMapping.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNominalCodeMappingsPayCode()`

```php
updateNominalCodeMappingsPayCode($employerId, $nominalCodeMapping): \SynergiTech\Staffology\Model\NominalCodeMapping[]
```

Updates Nominal Code Mappings

Updates the list of mappings of PayCodes to NominalCodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$nominalCodeMapping = array(new \SynergiTech\Staffology\Model\NominalCodeMapping()); // \SynergiTech\Staffology\Model\NominalCodeMapping[]

try {
    $result = $apiInstance->updateNominalCodeMappingsPayCode($employerId, $nominalCodeMapping);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->updateNominalCodeMappingsPayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **nominalCodeMapping** | [**\SynergiTech\Staffology\Model\NominalCodeMapping[]**](../Model/NominalCodeMapping.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NominalCodeMapping[]**](../Model/NominalCodeMapping.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayCode()`

```php
updatePayCode($employerId, $code, $payCode): \SynergiTech\Staffology\Model\PayCode
```

Update PayCode (deprecated)

Updates the details of an existing PayCode.  Use the other Update endpoint that supports non-alphanumeric characters for a pay code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string
$payCode = new \SynergiTech\Staffology\Model\PayCode(); // \SynergiTech\Staffology\Model\PayCode

try {
    $result = $apiInstance->updatePayCode($employerId, $code, $payCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->updatePayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | |
| **payCode** | [**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayCodePayCode()`

```php
updatePayCodePayCode($employerId, $code, $payCode): \SynergiTech\Staffology\Model\PayCode
```

Update PayCode

Updates the details of an existing PayCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PayCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string
$payCode = new \SynergiTech\Staffology\Model\PayCode(); // \SynergiTech\Staffology\Model\PayCode

try {
    $result = $apiInstance->updatePayCodePayCode($employerId, $code, $payCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayCodeApi->updatePayCodePayCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | [optional] |
| **payCode** | [**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayCode**](../Model/PayCode.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
