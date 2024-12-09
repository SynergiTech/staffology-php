# SynergiTech\Staffology\NoteApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentNote()**](NoteApi.md#addDocumentNote) | **POST** /employers/{employerId}/employees/{employeeId}/notes/{id}/documents | Add Document |
| [**createNote()**](NoteApi.md#createNote) | **POST** /employers/{employerId}/employees/{employeeId}/notes | Create Note |
| [**deleteDocumentNote()**](NoteApi.md#deleteDocumentNote) | **DELETE** /employers/{employerId}/employees/{employeeId}/notes/{id}/documents/{documentId} | Delete Note Document |
| [**deleteNote()**](NoteApi.md#deleteNote) | **DELETE** /employers/{employerId}/employees/{employeeId}/notes/{id} | Delete Note |
| [**getDocumentNote()**](NoteApi.md#getDocumentNote) | **GET** /employers/{employerId}/employees/{employeeId}/notes/{id}/documents/{documentId} | Get Note Document |
| [**getNote()**](NoteApi.md#getNote) | **GET** /employers/{employerId}/employees/{employeeId}/notes/{id} | Get Note |
| [**indexNote()**](NoteApi.md#indexNote) | **GET** /employers/{employerId}/employees/{employeeId}/notes | List Notes |
| [**updateNote()**](NoteApi.md#updateNote) | **PUT** /employers/{employerId}/employees/{employeeId}/notes/{id} | Update Note |


## `addDocumentNote()`

```php
addDocumentNote($employerId, $employeeId, $id, $file)
```

Add Document

Adds document to the Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Note you want to attach documents to
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->addDocumentNote($employerId, $employeeId, $id, $file);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->addDocumentNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Note you want to attach documents to | |
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

## `createNote()`

```php
createNote($employerId, $employeeId, $note)
```

Create Note

Creates a Note for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$note = new \SynergiTech\Staffology\Model\Note(); // \SynergiTech\Staffology\Model\Note

try {
    $apiInstance->createNote($employerId, $employeeId, $note);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **note** | [**\SynergiTech\Staffology\Model\Note**](../Model/Note.md)|  | [optional] |

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

## `deleteDocumentNote()`

```php
deleteDocumentNote($employerId, $employeeId, $id, $documentId)
```

Delete Note Document

Deletes the document specified by the documentId for the Note specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
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
    $apiInstance->deleteDocumentNote($employerId, $employeeId, $id, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteDocumentNote: ', $e->getMessage(), PHP_EOL;
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

## `deleteNote()`

```php
deleteNote($employerId, $employeeId, $id)
```

Delete Note

Deletes the Note specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Note you want to delete.

try {
    $apiInstance->deleteNote($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Note you want to delete. | |

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

## `getDocumentNote()`

```php
getDocumentNote($employerId, $employeeId, $id, $documentId): \SplFileObject
```

Get Note Document

Gets the document specified by the documentId for the Note specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
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
    $result = $apiInstance->getDocumentNote($employerId, $employeeId, $id, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getDocumentNote: ', $e->getMessage(), PHP_EOL;
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

## `getNote()`

```php
getNote($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\Note
```

Get Note

Gets the Note specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Note you want to retrieve.

try {
    $result = $apiInstance->getNote($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->getNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Note you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Note**](../Model/Note.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexNote()`

```php
indexNote($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Notes

Lists all Note for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->indexNote($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->indexNote: ', $e->getMessage(), PHP_EOL;
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

## `updateNote()`

```php
updateNote($employerId, $employeeId, $id, $note): \SynergiTech\Staffology\Model\Note
```

Update Note

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Note you want to update.
$note = new \SynergiTech\Staffology\Model\Note(); // \SynergiTech\Staffology\Model\Note

try {
    $result = $apiInstance->updateNote($employerId, $employeeId, $id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Note you want to update. | |
| **note** | [**\SynergiTech\Staffology\Model\Note**](../Model/Note.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Note**](../Model/Note.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
