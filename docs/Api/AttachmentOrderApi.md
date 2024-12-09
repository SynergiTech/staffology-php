# SynergiTech\Staffology\AttachmentOrderApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentAttachmentOrder()**](AttachmentOrderApi.md#addDocumentAttachmentOrder) | **POST** /employers/{employerId}/employees/{employeeId}/attachmentorders/{id}/documents | Add Document |
| [**createAttachmentOrder()**](AttachmentOrderApi.md#createAttachmentOrder) | **POST** /employers/{employerId}/employees/{employeeId}/attachmentorders | Create AttachmentOrder |
| [**deleteAttachmentOrder()**](AttachmentOrderApi.md#deleteAttachmentOrder) | **DELETE** /employers/{employerId}/employees/{employeeId}/attachmentorders/{id} | Delete AttachmentOrder |
| [**deleteDocumentAttachmentOrder()**](AttachmentOrderApi.md#deleteDocumentAttachmentOrder) | **DELETE** /employers/{employerId}/employees/{employeeId}/attachmentorders/{id}/documents/{documentId} | Delete AttachmentOrder Document |
| [**getAttachmentOrder()**](AttachmentOrderApi.md#getAttachmentOrder) | **GET** /employers/{employerId}/employees/{employeeId}/attachmentorders/{id} | Get AttachmentOrder |
| [**getDocumentAttachmentOrder()**](AttachmentOrderApi.md#getDocumentAttachmentOrder) | **GET** /employers/{employerId}/employees/{employeeId}/attachmentorders/{id}/documents/{documentId} | Get AttachmentOrder Document |
| [**indexAttachmentOrder()**](AttachmentOrderApi.md#indexAttachmentOrder) | **GET** /employers/{employerId}/employees/{employeeId}/attachmentorders | List AttachmentOrders |
| [**paymentsAttachmentOrder()**](AttachmentOrderApi.md#paymentsAttachmentOrder) | **GET** /employers/{employerId}/employees/{employeeId}/attachmentorders/payments/{taxYear} | Get Payments |
| [**updateAttachmentOrder()**](AttachmentOrderApi.md#updateAttachmentOrder) | **PUT** /employers/{employerId}/employees/{employeeId}/attachmentorders/{id} | Update AttachmentOrder |


## `addDocumentAttachmentOrder()`

```php
addDocumentAttachmentOrder($employerId, $employeeId, $id, $file)
```

Add Document

Adds document to the AttachmentOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the AttachmentOrder you want to attach documents to
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->addDocumentAttachmentOrder($employerId, $employeeId, $id, $file);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->addDocumentAttachmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the AttachmentOrder you want to attach documents to | |
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

## `createAttachmentOrder()`

```php
createAttachmentOrder($employerId, $employeeId, $attachmentOrder)
```

Create AttachmentOrder

Creates an AttachmentOrder for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$attachmentOrder = new \SynergiTech\Staffology\Model\AttachmentOrder(); // \SynergiTech\Staffology\Model\AttachmentOrder

try {
    $apiInstance->createAttachmentOrder($employerId, $employeeId, $attachmentOrder);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->createAttachmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **attachmentOrder** | [**\SynergiTech\Staffology\Model\AttachmentOrder**](../Model/AttachmentOrder.md)|  | [optional] |

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

## `deleteAttachmentOrder()`

```php
deleteAttachmentOrder($employerId, $employeeId, $id)
```

Delete AttachmentOrder

Deletes the AttachmentOrder specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the AttachmentOrder you want to delete.

try {
    $apiInstance->deleteAttachmentOrder($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->deleteAttachmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the AttachmentOrder you want to delete. | |

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

## `deleteDocumentAttachmentOrder()`

```php
deleteDocumentAttachmentOrder($employerId, $employeeId, $id, $documentId)
```

Delete AttachmentOrder Document

Deletes the document specified by the documentId for the AttachmentOrder specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
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
    $apiInstance->deleteDocumentAttachmentOrder($employerId, $employeeId, $id, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->deleteDocumentAttachmentOrder: ', $e->getMessage(), PHP_EOL;
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

## `getAttachmentOrder()`

```php
getAttachmentOrder($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\AttachmentOrder
```

Get AttachmentOrder

Gets the AttachmentOrder specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the AttachmentOrder you want to retrieve.

try {
    $result = $apiInstance->getAttachmentOrder($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->getAttachmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the AttachmentOrder you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\AttachmentOrder**](../Model/AttachmentOrder.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentAttachmentOrder()`

```php
getDocumentAttachmentOrder($employerId, $employeeId, $id, $documentId): \SplFileObject
```

Get AttachmentOrder Document

Gets the document specified by the documentId for the AttachmentOrder specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
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
    $result = $apiInstance->getDocumentAttachmentOrder($employerId, $employeeId, $id, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->getDocumentAttachmentOrder: ', $e->getMessage(), PHP_EOL;
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

## `indexAttachmentOrder()`

```php
indexAttachmentOrder($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List AttachmentOrders

Lists all AttachmentOrders for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->indexAttachmentOrder($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->indexAttachmentOrder: ', $e->getMessage(), PHP_EOL;
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

## `paymentsAttachmentOrder()`

```php
paymentsAttachmentOrder($employerId, $employeeId, $taxYear): \SynergiTech\Staffology\Model\AttachmentOrderPayment[]
```

Get Payments

Lists all Payments made to AttachmentOrders for the Employee in the given TaxYear

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear

try {
    $result = $apiInstance->paymentsAttachmentOrder($employerId, $employeeId, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->paymentsAttachmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |

### Return type

[**\SynergiTech\Staffology\Model\AttachmentOrderPayment[]**](../Model/AttachmentOrderPayment.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAttachmentOrder()`

```php
updateAttachmentOrder($employerId, $employeeId, $id, $attachmentOrder): \SynergiTech\Staffology\Model\AttachmentOrder
```

Update AttachmentOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AttachmentOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the AttachmentOrder you want to update.
$attachmentOrder = new \SynergiTech\Staffology\Model\AttachmentOrder(); // \SynergiTech\Staffology\Model\AttachmentOrder

try {
    $result = $apiInstance->updateAttachmentOrder($employerId, $employeeId, $id, $attachmentOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentOrderApi->updateAttachmentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the AttachmentOrder you want to update. | |
| **attachmentOrder** | [**\SynergiTech\Staffology\Model\AttachmentOrder**](../Model/AttachmentOrder.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\AttachmentOrder**](../Model/AttachmentOrder.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
