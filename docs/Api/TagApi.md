# SynergiTech\Staffology\TagApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTag()**](TagApi.md#createTag) | **POST** /employers/{employerId}/tags | Create Tag |
| [**deleteTag()**](TagApi.md#deleteTag) | **DELETE** /employers/{employerId}/tags/{code} | Delete Tag (deprecated) |
| [**deleteTagTag()**](TagApi.md#deleteTagTag) | **DELETE** /employers/{employerId}/tags/tag | Delete Tag |
| [**getTag()**](TagApi.md#getTag) | **GET** /employers/{employerId}/tags/{code} | Get Tag (deprecated) |
| [**getTagTag()**](TagApi.md#getTagTag) | **GET** /employers/{employerId}/tags/Tag | Get Tag |
| [**indexTag()**](TagApi.md#indexTag) | **GET** /employers/{employerId}/tags | List Tags |
| [**updateTag()**](TagApi.md#updateTag) | **PUT** /employers/{employerId}/tags/{code} | Update Tag (deprecated) |
| [**updateTagTag()**](TagApi.md#updateTagTag) | **PUT** /employers/{employerId}/tags/tag | Update Tag |


## `createTag()`

```php
createTag($employerId, $tag): \SynergiTech\Staffology\Model\Tag
```

Create Tag

Creates a new Tag for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$tag = new \SynergiTech\Staffology\Model\Tag(); // \SynergiTech\Staffology\Model\Tag | The new values for the Tag you want to update.

try {
    $result = $apiInstance->createTag($employerId, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **tag** | [**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)| The new values for the Tag you want to update. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($employerId, $code)
```

Delete Tag (deprecated)

Deletes the specified Tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$code = 'code_example'; // string | The code of the Tag you want to delete.

try {
    $apiInstance->deleteTag($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **code** | **string**| The code of the Tag you want to delete. | |

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

## `deleteTagTag()`

```php
deleteTagTag($employerId, $code)
```

Delete Tag

Deletes the specified Tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$code = 'code_example'; // string | The code of the Tag you want to delete.

try {
    $apiInstance->deleteTagTag($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTagTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **code** | **string**| The code of the Tag you want to delete. | [optional] |

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

## `getTag()`

```php
getTag($employerId, $code): \SynergiTech\Staffology\Model\Tag
```

Get Tag (deprecated)

Gets the Tag specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$code = 'code_example'; // string | The code of the Tag you want to retrieve.

try {
    $result = $apiInstance->getTag($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **code** | **string**| The code of the Tag you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTagTag()`

```php
getTagTag($employerId, $code): \SynergiTech\Staffology\Model\Tag
```

Get Tag

Gets the Tag specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$code = 'code_example'; // string | The code of the Tag you want to retrieve.

try {
    $result = $apiInstance->getTagTag($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTagTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **code** | **string**| The code of the Tag you want to retrieve. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexTag()`

```php
indexTag($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Tags

Lists all Tags for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Tags

try {
    $result = $apiInstance->indexTag($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->indexTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Tags | |

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

## `updateTag()`

```php
updateTag($employerId, $code, $tag): \SynergiTech\Staffology\Model\Tag
```

Update Tag (deprecated)

Updates a Tag for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$code = 'code_example'; // string | The existing code of the Tag you want to update.
$tag = new \SynergiTech\Staffology\Model\Tag(); // \SynergiTech\Staffology\Model\Tag | The new values for the Tag you want to update.

try {
    $result = $apiInstance->updateTag($employerId, $code, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **code** | **string**| The existing code of the Tag you want to update. | |
| **tag** | [**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)| The new values for the Tag you want to update. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTagTag()`

```php
updateTagTag($employerId, $code, $tag): \SynergiTech\Staffology\Model\Tag
```

Update Tag

Updates the details of an existing Tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Tag belongs.
$code = 'code_example'; // string | The existing code of the Tag you want to update.
$tag = new \SynergiTech\Staffology\Model\Tag(); // \SynergiTech\Staffology\Model\Tag | The new values for the Tag you want to update.

try {
    $result = $apiInstance->updateTagTag($employerId, $code, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTagTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Tag belongs. | |
| **code** | **string**| The existing code of the Tag you want to update. | [optional] |
| **tag** | [**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)| The new values for the Tag you want to update. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tag**](../Model/Tag.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
