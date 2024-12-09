# SynergiTech\Staffology\CostCentreApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCostCentre()**](CostCentreApi.md#createCostCentre) | **POST** /employers/{employerId}/costcentres | Create Cost Centre |
| [**deleteCostCentre()**](CostCentreApi.md#deleteCostCentre) | **DELETE** /employers/{employerId}/costcentres/{code} | Delete Cost Centre (deprecated) |
| [**deleteCostCentreCostCentre()**](CostCentreApi.md#deleteCostCentreCostCentre) | **DELETE** /employers/{employerId}/costcentres | Delete Cost Centre |
| [**getCostCentre()**](CostCentreApi.md#getCostCentre) | **GET** /employers/{employerId}/costcentres/{code} | Get Cost Centre (deprecated) |
| [**getCostCentreCostCentre()**](CostCentreApi.md#getCostCentreCostCentre) | **GET** /employers/{employerId}/costcentres/costcentre | Get Cost Centre |
| [**indexCostCentre()**](CostCentreApi.md#indexCostCentre) | **GET** /employers/{employerId}/costcentres | List Cost Centres |
| [**updateCostCentre()**](CostCentreApi.md#updateCostCentre) | **PUT** /employers/{employerId}/costcentres/{code} | Update Cost Centre (deprecated) |
| [**updateCostCentreCostCentre()**](CostCentreApi.md#updateCostCentreCostCentre) | **PUT** /employers/{employerId}/costcentres | Update Cost Centre |


## `createCostCentre()`

```php
createCostCentre($employerId, $costCentre): \SynergiTech\Staffology\Model\CostCentre
```

Create Cost Centre

Creates a new CostCentre for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$costCentre = new \SynergiTech\Staffology\Model\CostCentre(); // \SynergiTech\Staffology\Model\CostCentre

try {
    $result = $apiInstance->createCostCentre($employerId, $costCentre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->createCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **costCentre** | [**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCostCentre()`

```php
deleteCostCentre($employerId, $code)
```

Delete Cost Centre (deprecated)

Deletes the specified Cost Centre.  Use the other Delete endpoint that supports non-alphanumeric characters for a cost centre code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string

try {
    $apiInstance->deleteCostCentre($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->deleteCostCentre: ', $e->getMessage(), PHP_EOL;
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

## `deleteCostCentreCostCentre()`

```php
deleteCostCentreCostCentre($employerId, $code)
```

Delete Cost Centre

Deletes the specified Cost Centre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Cost Centre belongs.
$code = 'code_example'; // string | The code of the Cost Centre you want to delete.

try {
    $apiInstance->deleteCostCentreCostCentre($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->deleteCostCentreCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Cost Centre belongs. | |
| **code** | **string**| The code of the Cost Centre you want to delete. | [optional] |

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

## `getCostCentre()`

```php
getCostCentre($employerId, $code): \SynergiTech\Staffology\Model\CostCentre
```

Get Cost Centre (deprecated)

Gets the Cost Centres specified.  Use the other GET endpoint that supports non-alphanumeric characters for a cost centre code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Department belongs.
$code = 'code_example'; // string

try {
    $result = $apiInstance->getCostCentre($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->getCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Department belongs. | |
| **code** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCentreCostCentre()`

```php
getCostCentreCostCentre($employerId, $code): \SynergiTech\Staffology\Model\CostCentre
```

Get Cost Centre

Gets the Cost Centres specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Department belongs.
$code = 'code_example'; // string | The existing code of the Cost Centre you want to get.

try {
    $result = $apiInstance->getCostCentreCostCentre($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->getCostCentreCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Department belongs. | |
| **code** | **string**| The existing code of the Cost Centre you want to get. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexCostCentre()`

```php
indexCostCentre($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Cost Centres

Lists all Cost Centres for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Cost Centres

try {
    $result = $apiInstance->indexCostCentre($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->indexCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Cost Centres | |

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

## `updateCostCentre()`

```php
updateCostCentre($employerId, $code, $costCentre): \SynergiTech\Staffology\Model\CostCentre
```

Update Cost Centre (deprecated)

Updates a Cost Centre for the Employer.  Use the other Update endpoint that supports non-alphanumeric characters for a cost centre code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string
$costCentre = new \SynergiTech\Staffology\Model\CostCentre(); // \SynergiTech\Staffology\Model\CostCentre

try {
    $result = $apiInstance->updateCostCentre($employerId, $code, $costCentre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->updateCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | |
| **costCentre** | [**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCostCentreCostCentre()`

```php
updateCostCentreCostCentre($employerId, $code, $costCentre): \SynergiTech\Staffology\Model\CostCentre
```

Update Cost Centre

Updates a Cost Centre for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\CostCentreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Cost Centre belongs.
$code = 'code_example'; // string | The existing code of the Cost Centre you want to get.
$costCentre = new \SynergiTech\Staffology\Model\CostCentre(); // \SynergiTech\Staffology\Model\CostCentre | The new values for the Cost Centre you want to update

try {
    $result = $apiInstance->updateCostCentreCostCentre($employerId, $code, $costCentre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->updateCostCentreCostCentre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Cost Centre belongs. | |
| **code** | **string**| The existing code of the Cost Centre you want to get. | [optional] |
| **costCentre** | [**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)| The new values for the Cost Centre you want to update | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CostCentre**](../Model/CostCentre.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
