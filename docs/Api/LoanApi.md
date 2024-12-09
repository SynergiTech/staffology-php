# SynergiTech\Staffology\LoanApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentLoan()**](LoanApi.md#addDocumentLoan) | **POST** /employers/{employerId}/employees/{employeeId}/loans/{id}/documents | Add Document |
| [**createLoan()**](LoanApi.md#createLoan) | **POST** /employers/{employerId}/employees/{employeeId}/loans | Create Loan |
| [**deleteDocumentLoan()**](LoanApi.md#deleteDocumentLoan) | **DELETE** /employers/{employerId}/employees/{employeeId}/loans/{id}/documents/{documentId} | Delete Loan Document |
| [**deleteLoan()**](LoanApi.md#deleteLoan) | **DELETE** /employers/{employerId}/employees/{employeeId}/loans/{id} | Delete Loan |
| [**getDocumentLoan()**](LoanApi.md#getDocumentLoan) | **GET** /employers/{employerId}/employees/{employeeId}/loans/{id}/documents/{documentId} | Get Loan Document |
| [**getLoan()**](LoanApi.md#getLoan) | **GET** /employers/{employerId}/employees/{employeeId}/loans/{id} | Get Loan |
| [**indexLoan()**](LoanApi.md#indexLoan) | **GET** /employers/{employerId}/employees/{employeeId}/loans | List Loans |
| [**updateLoan()**](LoanApi.md#updateLoan) | **PUT** /employers/{employerId}/employees/{employeeId}/loans/{id} | Update Loan |


## `addDocumentLoan()`

```php
addDocumentLoan($employerId, $employeeId, $id, $file)
```

Add Document

Adds document to the Loan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Loan you want to attach documents to
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->addDocumentLoan($employerId, $employeeId, $id, $file);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->addDocumentLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Loan you want to attach documents to | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLoan()`

```php
createLoan($employerId, $employeeId, $loan)
```

Create Loan

Creates a Loan for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$loan = new \SynergiTech\Staffology\Model\Loan(); // \SynergiTech\Staffology\Model\Loan

try {
    $apiInstance->createLoan($employerId, $employeeId, $loan);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->createLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **loan** | [**\SynergiTech\Staffology\Model\Loan**](../Model/Loan.md)|  | [optional] |

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

## `deleteDocumentLoan()`

```php
deleteDocumentLoan($employerId, $employeeId, $id, $documentId)
```

Delete Loan Document

Deletes the document specified by the documentId for the Loan specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string
$documentId = 'documentId_example'; // string | The Id of the Document you want to delete.

try {
    $apiInstance->deleteDocumentLoan($employerId, $employeeId, $id, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->deleteDocumentLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**|  | |
| **documentId** | **string**| The Id of the Document you want to delete. | |

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

## `deleteLoan()`

```php
deleteLoan($employerId, $employeeId, $id)
```

Delete Loan

Deletes the Loan specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Loan you want to delete.

try {
    $apiInstance->deleteLoan($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->deleteLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Loan you want to delete. | |

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

## `getDocumentLoan()`

```php
getDocumentLoan($employerId, $employeeId, $id, $documentId): \SplFileObject
```

Get Loan Document

Gets the document specified by the documentId for the Loan specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string
$documentId = 'documentId_example'; // string | The Id of the Document you want to retrieve.

try {
    $result = $apiInstance->getDocumentLoan($employerId, $employeeId, $id, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->getDocumentLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**|  | |
| **documentId** | **string**| The Id of the Document you want to retrieve. | |

### Return type

**\SplFileObject**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoan()`

```php
getLoan($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\Loan
```

Get Loan

Gets the Loan specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Loan you want to retrieve.

try {
    $result = $apiInstance->getLoan($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->getLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Loan you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Loan**](../Model/Loan.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexLoan()`

```php
indexLoan($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Loans

Lists all AttachmentOrders for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->indexLoan($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->indexLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |

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

## `updateLoan()`

```php
updateLoan($employerId, $employeeId, $id, $loan): \SynergiTech\Staffology\Model\Loan
```

Update Loan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Loan you want to update.
$loan = new \SynergiTech\Staffology\Model\Loan(); // \SynergiTech\Staffology\Model\Loan

try {
    $result = $apiInstance->updateLoan($employerId, $employeeId, $id, $loan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoanApi->updateLoan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Loan you want to update. | |
| **loan** | [**\SynergiTech\Staffology\Model\Loan**](../Model/Loan.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Loan**](../Model/Loan.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
