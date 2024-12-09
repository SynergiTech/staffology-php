# SynergiTech\Staffology\JournalTokenApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCostCentreJournalOverridesJournalToken()**](JournalTokenApi.md#createCostCentreJournalOverridesJournalToken) | **POST** /employers/{employerId}/journaltokens/{costCentreId}/costcentrejournaloverrides | Create CostCentre Journal Overrides |
| [**createDepartmentJournalOverridesJournalToken()**](JournalTokenApi.md#createDepartmentJournalOverridesJournalToken) | **POST** /employers/{employerId}/journaltokens/{departmentId}/departmentjournaloverrides | Create Department Journal Overrides |
| [**createJournalToken()**](JournalTokenApi.md#createJournalToken) | **POST** /employers/{employerId}/journaltokens | Create Journal Token |
| [**deleteJournalToken()**](JournalTokenApi.md#deleteJournalToken) | **DELETE** /employers/{employerId}/journaltokens/{id} | Delete Journal Token |
| [**getCostCentreJournalOverridesListJournalToken()**](JournalTokenApi.md#getCostCentreJournalOverridesListJournalToken) | **GET** /employers/{employerId}/journaltokens/{costCentreId}/costcentrejournaloverrides | List CostCentre Journal Overrides |
| [**getDepartmentJournalOverridesListJournalToken()**](JournalTokenApi.md#getDepartmentJournalOverridesListJournalToken) | **GET** /employers/{employerId}/journaltokens/{departmentId}/departmentjournaloverrides | List Department Journal Overrides |
| [**getJournalToken()**](JournalTokenApi.md#getJournalToken) | **GET** /employers/{employerId}/journaltokens/{id} | Get Journal Token |
| [**indexJournalToken()**](JournalTokenApi.md#indexJournalToken) | **GET** /employers/{employerId}/journaltokens | List Journal Tokens |
| [**updateCostCentreJournalOverridesJournalToken()**](JournalTokenApi.md#updateCostCentreJournalOverridesJournalToken) | **PUT** /employers/{employerId}/journaltokens/{costCentreId}/costcentrejournaloverrides | Update CostCentre Journal Overrides |
| [**updateDepartmentJournalOverridesJournalToken()**](JournalTokenApi.md#updateDepartmentJournalOverridesJournalToken) | **PUT** /employers/{employerId}/journaltokens/{departmentId}/departmentjournaloverrides | Update Department Journal Overrides |
| [**updateJournalToken()**](JournalTokenApi.md#updateJournalToken) | **PUT** /employers/{employerId}/journaltokens/{id} | Update Journal Token |


## `createCostCentreJournalOverridesJournalToken()`

```php
createCostCentreJournalOverridesJournalToken($employerId, $costCentreId, $contractCostCentreJournalOverridesRequest): \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesResponse[]
```

Create CostCentre Journal Overrides

Create Journal Overrides for an CostCentre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Journal Overrides
$costCentreId = 'costCentreId_example'; // string | The Id of the CostCentre for which you want to create Journal Overrides
$contractCostCentreJournalOverridesRequest = array(new \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesRequest()); // \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesRequest[]

try {
    $result = $apiInstance->createCostCentreJournalOverridesJournalToken($employerId, $costCentreId, $contractCostCentreJournalOverridesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->createCostCentreJournalOverridesJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Journal Overrides | |
| **costCentreId** | **string**| The Id of the CostCentre for which you want to create Journal Overrides | |
| **contractCostCentreJournalOverridesRequest** | [**\SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesRequest[]**](../Model/ContractCostCentreJournalOverridesRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesResponse[]**](../Model/ContractCostCentreJournalOverridesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDepartmentJournalOverridesJournalToken()`

```php
createDepartmentJournalOverridesJournalToken($employerId, $departmentId, $contractDepartmentJournalOverridesRequest): \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesResponse[]
```

Create Department Journal Overrides

Create Journal Overrides for an Department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Journal Overrides
$departmentId = 'departmentId_example'; // string | The Id of the Department for which you want to create Journal Overrides
$contractDepartmentJournalOverridesRequest = array(new \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesRequest()); // \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesRequest[]

try {
    $result = $apiInstance->createDepartmentJournalOverridesJournalToken($employerId, $departmentId, $contractDepartmentJournalOverridesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->createDepartmentJournalOverridesJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Journal Overrides | |
| **departmentId** | **string**| The Id of the Department for which you want to create Journal Overrides | |
| **contractDepartmentJournalOverridesRequest** | [**\SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesRequest[]**](../Model/ContractDepartmentJournalOverridesRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesResponse[]**](../Model/ContractDepartmentJournalOverridesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createJournalToken()`

```php
createJournalToken($employerId, $contractJournalTokenRequest): \SynergiTech\Staffology\Model\ContractJournalTokenResponse
```

Create Journal Token

Create Journal Token for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Journal Token
$contractJournalTokenRequest = new \SynergiTech\Staffology\Model\ContractJournalTokenRequest(); // \SynergiTech\Staffology\Model\ContractJournalTokenRequest

try {
    $result = $apiInstance->createJournalToken($employerId, $contractJournalTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->createJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Journal Token | |
| **contractJournalTokenRequest** | [**\SynergiTech\Staffology\Model\ContractJournalTokenRequest**](../Model/ContractJournalTokenRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJournalTokenResponse**](../Model/ContractJournalTokenResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteJournalToken()`

```php
deleteJournalToken($employerId, $id)
```

Delete Journal Token

Deletes the specified Journal Token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteJournalToken($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->deleteJournalToken: ', $e->getMessage(), PHP_EOL;
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

## `getCostCentreJournalOverridesListJournalToken()`

```php
getCostCentreJournalOverridesListJournalToken($employerId, $costCentreId): \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesResponseItem[]
```

List CostCentre Journal Overrides

List Journal Overrides for an CostCentre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want list of Journal Overrides
$costCentreId = 'costCentreId_example'; // string | The Id of the CostCentre for which you want list of Journal Overrides

try {
    $result = $apiInstance->getCostCentreJournalOverridesListJournalToken($employerId, $costCentreId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->getCostCentreJournalOverridesListJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want list of Journal Overrides | |
| **costCentreId** | **string**| The Id of the CostCentre for which you want list of Journal Overrides | |

### Return type

[**\SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesResponseItem[]**](../Model/ContractCostCentreJournalOverridesResponseItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartmentJournalOverridesListJournalToken()`

```php
getDepartmentJournalOverridesListJournalToken($employerId, $departmentId): \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesResponseItem[]
```

List Department Journal Overrides

List Journal Overrides for an Department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want list of Journal Overrides
$departmentId = 'departmentId_example'; // string | The Id of the Department for which you want list of Journal Overrides

try {
    $result = $apiInstance->getDepartmentJournalOverridesListJournalToken($employerId, $departmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->getDepartmentJournalOverridesListJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want list of Journal Overrides | |
| **departmentId** | **string**| The Id of the Department for which you want list of Journal Overrides | |

### Return type

[**\SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesResponseItem[]**](../Model/ContractDepartmentJournalOverridesResponseItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalToken()`

```php
getJournalToken($employerId, $id): \SynergiTech\Staffology\Model\ContractJournalTokenResponse
```

Get Journal Token

Get Specified Journal Token for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get Journal Token
$id = 'id_example'; // string | The Id of the Journal Tokens for which you want to get Journal Token

try {
    $result = $apiInstance->getJournalToken($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->getJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get Journal Token | |
| **id** | **string**| The Id of the Journal Tokens for which you want to get Journal Token | |

### Return type

[**\SynergiTech\Staffology\Model\ContractJournalTokenResponse**](../Model/ContractJournalTokenResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexJournalToken()`

```php
indexJournalToken($employerId): \SynergiTech\Staffology\Model\ContractJournalTokenResponseItem[]
```

List Journal Tokens

List Journal Tokens for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want list of Journal Tokens

try {
    $result = $apiInstance->indexJournalToken($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->indexJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want list of Journal Tokens | |

### Return type

[**\SynergiTech\Staffology\Model\ContractJournalTokenResponseItem[]**](../Model/ContractJournalTokenResponseItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCostCentreJournalOverridesJournalToken()`

```php
updateCostCentreJournalOverridesJournalToken($employerId, $costCentreId, $contractCostCentreJournalOverridesUpdateRequest): \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesResponse[]
```

Update CostCentre Journal Overrides

Updates Journal Overrides for the CostCentre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Journal Overrides
$costCentreId = 'costCentreId_example'; // string | The Id of the CostCentre for which you want to update Journal Overrides
$contractCostCentreJournalOverridesUpdateRequest = array(new \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesUpdateRequest()); // \SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesUpdateRequest[]

try {
    $result = $apiInstance->updateCostCentreJournalOverridesJournalToken($employerId, $costCentreId, $contractCostCentreJournalOverridesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->updateCostCentreJournalOverridesJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Journal Overrides | |
| **costCentreId** | **string**| The Id of the CostCentre for which you want to update Journal Overrides | |
| **contractCostCentreJournalOverridesUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesUpdateRequest[]**](../Model/ContractCostCentreJournalOverridesUpdateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractCostCentreJournalOverridesResponse[]**](../Model/ContractCostCentreJournalOverridesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDepartmentJournalOverridesJournalToken()`

```php
updateDepartmentJournalOverridesJournalToken($employerId, $departmentId, $contractDepartmentJournalOverridesUpdateRequest): \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesResponse[]
```

Update Department Journal Overrides

Updates Journal Overrides for the Department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Journal Overrides
$departmentId = 'departmentId_example'; // string | The Id of the Department for which you want to update Journal Overrides
$contractDepartmentJournalOverridesUpdateRequest = array(new \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesUpdateRequest()); // \SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesUpdateRequest[]

try {
    $result = $apiInstance->updateDepartmentJournalOverridesJournalToken($employerId, $departmentId, $contractDepartmentJournalOverridesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->updateDepartmentJournalOverridesJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Journal Overrides | |
| **departmentId** | **string**| The Id of the Department for which you want to update Journal Overrides | |
| **contractDepartmentJournalOverridesUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesUpdateRequest[]**](../Model/ContractDepartmentJournalOverridesUpdateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractDepartmentJournalOverridesResponse[]**](../Model/ContractDepartmentJournalOverridesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateJournalToken()`

```php
updateJournalToken($employerId, $id, $contractJournalTokenRequest): \SynergiTech\Staffology\Model\ContractJournalTokenResponse
```

Update Journal Token

Updates Specified Journal Token for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$contractJournalTokenRequest = new \SynergiTech\Staffology\Model\ContractJournalTokenRequest(); // \SynergiTech\Staffology\Model\ContractJournalTokenRequest

try {
    $result = $apiInstance->updateJournalToken($employerId, $id, $contractJournalTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTokenApi->updateJournalToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **contractJournalTokenRequest** | [**\SynergiTech\Staffology\Model\ContractJournalTokenRequest**](../Model/ContractJournalTokenRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJournalTokenResponse**](../Model/ContractJournalTokenResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
