# SynergiTech\Staffology\AnalysisCategoryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAnalysisCategory()**](AnalysisCategoryApi.md#createAnalysisCategory) | **POST** /employers/{employerId}/analysiscategories | Create AnalysisCategory |
| [**createAnalysisCategoryCodeAnalysisCategory()**](AnalysisCategoryApi.md#createAnalysisCategoryCodeAnalysisCategory) | **POST** /employers/{employerId}/analysiscategories/{analysisCategoryId}/categorycodes | Create AnalysisCategoryCode |
| [**deleteAnalysisCategory()**](AnalysisCategoryApi.md#deleteAnalysisCategory) | **DELETE** /employers/{employerId}/analysiscategories/{id} | Delete AnalysisCategory |
| [**deleteAnalysisCategoryCodeAnalysisCategory()**](AnalysisCategoryApi.md#deleteAnalysisCategoryCodeAnalysisCategory) | **DELETE** /employers/{employerId}/analysiscategories/{analysisCategoryId}/categorycodes/{code} | Delete AnalysisCategoryCode |
| [**getAnalysisCategory()**](AnalysisCategoryApi.md#getAnalysisCategory) | **GET** /employers/{employerId}/analysiscategories/{id} | Get AnalysisCategory |
| [**getAnalysisCategoryCodeAnalysisCategory()**](AnalysisCategoryApi.md#getAnalysisCategoryCodeAnalysisCategory) | **GET** /employers/{employerId}/analysiscategories/{analysisCategoryId}/categorycodes/{code} | Get AnalysisCategoryCode |
| [**getCodesAnalysisCategory()**](AnalysisCategoryApi.md#getCodesAnalysisCategory) | **GET** /employers/{employerId}/analysiscategories/{analysisCategoryId}/categorycodes | List AnalysisCategoryCodes |
| [**indexAnalysisCategory()**](AnalysisCategoryApi.md#indexAnalysisCategory) | **GET** /employers/{employerId}/analysiscategories | List AnalysisCategories |
| [**updateAnalysisCategory()**](AnalysisCategoryApi.md#updateAnalysisCategory) | **PUT** /employers/{employerId}/analysiscategories/{id} | Update AnalysisCategory |
| [**updateAnalysisCategoryCodeAnalysisCategory()**](AnalysisCategoryApi.md#updateAnalysisCategoryCodeAnalysisCategory) | **PUT** /employers/{employerId}/analysiscategories/{analysisCategoryId}/categorycodes/{code} | Update AnalysisCategoryCode |


## `createAnalysisCategory()`

```php
createAnalysisCategory($employerId, $contractAnalysisCategoryRequest): \SynergiTech\Staffology\Model\ContractAnalysisCategoryResponse
```

Create AnalysisCategory

Create a new AnalysisCategory for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$contractAnalysisCategoryRequest = new \SynergiTech\Staffology\Model\ContractAnalysisCategoryRequest(); // \SynergiTech\Staffology\Model\ContractAnalysisCategoryRequest

try {
    $result = $apiInstance->createAnalysisCategory($employerId, $contractAnalysisCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->createAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractAnalysisCategoryRequest** | [**\SynergiTech\Staffology\Model\ContractAnalysisCategoryRequest**](../Model/ContractAnalysisCategoryRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAnalysisCategoryResponse**](../Model/ContractAnalysisCategoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnalysisCategoryCodeAnalysisCategory()`

```php
createAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $contractAnalysisCategoryCodeRequest): \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeResponse
```

Create AnalysisCategoryCode

Create the details of an existing AnalysisCategoryCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Analysis category belongs.
$analysisCategoryId = 'analysisCategoryId_example'; // string | The Analysis category id for  which you want to create code
$contractAnalysisCategoryCodeRequest = new \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeRequest(); // \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeRequest

try {
    $result = $apiInstance->createAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $contractAnalysisCategoryCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->createAnalysisCategoryCodeAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Analysis category belongs. | |
| **analysisCategoryId** | **string**| The Analysis category id for  which you want to create code | |
| **contractAnalysisCategoryCodeRequest** | [**\SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeRequest**](../Model/ContractAnalysisCategoryCodeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeResponse**](../Model/ContractAnalysisCategoryCodeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnalysisCategory()`

```php
deleteAnalysisCategory($employerId, $id)
```

Delete AnalysisCategory

Deletes the specified AnalysisCategory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteAnalysisCategory($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->deleteAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
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

## `deleteAnalysisCategoryCodeAnalysisCategory()`

```php
deleteAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $code)
```

Delete AnalysisCategoryCode

Deletes the specified AnalysisCategoryCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$analysisCategoryId = 'analysisCategoryId_example'; // string | The Id of the AnalysisCategory to which the Code belongs.
$code = 'code_example'; // string | The code of the AnalysisCategoryCode you want to delete.

try {
    $apiInstance->deleteAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $code);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->deleteAnalysisCategoryCodeAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **analysisCategoryId** | **string**| The Id of the AnalysisCategory to which the Code belongs. | |
| **code** | **string**| The code of the AnalysisCategoryCode you want to delete. | |

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

## `getAnalysisCategory()`

```php
getAnalysisCategory($employerId, $id): \SynergiTech\Staffology\Model\ContractAnalysisCategoryResponse
```

Get AnalysisCategory

Gets the AnalysisCategory specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the AnalysisCategory belongs.
$id = 'id_example'; // string | The Id of the AnalysisCategory which you want to fetch

try {
    $result = $apiInstance->getAnalysisCategory($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->getAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the AnalysisCategory belongs. | |
| **id** | **string**| The Id of the AnalysisCategory which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\ContractAnalysisCategoryResponse**](../Model/ContractAnalysisCategoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnalysisCategoryCodeAnalysisCategory()`

```php
getAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $code): \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeResponse
```

Get AnalysisCategoryCode

Gets the AnalysisCategoryCode specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$analysisCategoryId = 'analysisCategoryId_example'; // string | The Id of the AnalysisCategory to which the Code belongs.
$code = 'code_example'; // string | The code of the AnalysisCategoryCode you want to retrieve.

try {
    $result = $apiInstance->getAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->getAnalysisCategoryCodeAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **analysisCategoryId** | **string**| The Id of the AnalysisCategory to which the Code belongs. | |
| **code** | **string**| The code of the AnalysisCategoryCode you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeResponse**](../Model/ContractAnalysisCategoryCodeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCodesAnalysisCategory()`

```php
getCodesAnalysisCategory($employerId, $analysisCategoryId): \SynergiTech\Staffology\Model\Item[]
```

List AnalysisCategoryCodes

Lists all AnalysisCategoryCodes for an Category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$analysisCategoryId = 'analysisCategoryId_example'; // string | The Id of the Category for which you want to list Codes

try {
    $result = $apiInstance->getCodesAnalysisCategory($employerId, $analysisCategoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->getCodesAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **analysisCategoryId** | **string**| The Id of the Category for which you want to list Codes | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexAnalysisCategory()`

```php
indexAnalysisCategory($employerId): \SynergiTech\Staffology\Model\Item[]
```

List AnalysisCategories

Lists all AnalysisCategories for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list AnalysisCategories

try {
    $result = $apiInstance->indexAnalysisCategory($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->indexAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list AnalysisCategories | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnalysisCategory()`

```php
updateAnalysisCategory($employerId, $id, $contractAnalysisCategoryRequest): \SynergiTech\Staffology\Model\ContractAnalysisCategoryResponse
```

Update AnalysisCategory

Updates a AnalysisCategory for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$contractAnalysisCategoryRequest = new \SynergiTech\Staffology\Model\ContractAnalysisCategoryRequest(); // \SynergiTech\Staffology\Model\ContractAnalysisCategoryRequest

try {
    $result = $apiInstance->updateAnalysisCategory($employerId, $id, $contractAnalysisCategoryRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->updateAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **contractAnalysisCategoryRequest** | [**\SynergiTech\Staffology\Model\ContractAnalysisCategoryRequest**](../Model/ContractAnalysisCategoryRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAnalysisCategoryResponse**](../Model/ContractAnalysisCategoryResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnalysisCategoryCodeAnalysisCategory()`

```php
updateAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $code, $contractAnalysisCategoryCodeRequest): \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeResponse
```

Update AnalysisCategoryCode

Updates the details of an existing AnalysisCategoryCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AnalysisCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Analysis category belongs.
$analysisCategoryId = 'analysisCategoryId_example'; // string | The Analysis category id for  which you want to update Analysis code
$code = 'code_example'; // string | The code of the Analysis category code you want to update.
$contractAnalysisCategoryCodeRequest = new \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeRequest(); // \SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeRequest

try {
    $result = $apiInstance->updateAnalysisCategoryCodeAnalysisCategory($employerId, $analysisCategoryId, $code, $contractAnalysisCategoryCodeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisCategoryApi->updateAnalysisCategoryCodeAnalysisCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Analysis category belongs. | |
| **analysisCategoryId** | **string**| The Analysis category id for  which you want to update Analysis code | |
| **code** | **string**| The code of the Analysis category code you want to update. | |
| **contractAnalysisCategoryCodeRequest** | [**\SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeRequest**](../Model/ContractAnalysisCategoryCodeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAnalysisCategoryCodeResponse**](../Model/ContractAnalysisCategoryCodeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
