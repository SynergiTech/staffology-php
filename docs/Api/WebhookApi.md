# SynergiTech\Staffology\WebhookApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhook()**](WebhookApi.md#createWebhook) | **POST** /employers/{employerId}/webhooks | Create Webhook |
| [**deleteWebhook()**](WebhookApi.md#deleteWebhook) | **DELETE** /employers/{employerId}/webhooks/{id} | Delete Webhook |
| [**getWebhook()**](WebhookApi.md#getWebhook) | **GET** /employers/{employerId}/webhooks/{id} | Get Webhook |
| [**indexWebhook()**](WebhookApi.md#indexWebhook) | **GET** /employers/{employerId}/webhooks | List Webhooks |
| [**payloadWebhook()**](WebhookApi.md#payloadWebhook) | **GET** /employers/{employerId}/webhooks/{id}/payloads/{payloadId} | Get WebhookPayload |
| [**payloadsWebhook()**](WebhookApi.md#payloadsWebhook) | **GET** /employers/{employerId}/webhooks/{id}/payloads | List WebhookPayloads |
| [**sampleWebhook()**](WebhookApi.md#sampleWebhook) | **GET** /employers/{employerId}/webhooks/samples/{webhookEvent} | Sample Value |
| [**updateWebhook()**](WebhookApi.md#updateWebhook) | **PUT** /employers/{employerId}/webhooks/{id} | Update Webhook |


## `createWebhook()`

```php
createWebhook($employerId, $webhook)
```

Create Webhook

Creates a new Webhook for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$webhook = new \SynergiTech\Staffology\Model\Webhook(); // \SynergiTech\Staffology\Model\Webhook

try {
    $apiInstance->createWebhook($employerId, $webhook);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **webhook** | [**\SynergiTech\Staffology\Model\Webhook**](../Model/Webhook.md)|  | [optional] |

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

## `deleteWebhook()`

```php
deleteWebhook($employerId, $id)
```

Delete Webhook

Deletes the specified Webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteWebhook($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
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

## `getWebhook()`

```php
getWebhook($employerId, $id): \SynergiTech\Staffology\Model\Webhook
```

Get Webhook

Gets the Webhook specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Webhook belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWebhook($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Webhook belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexWebhook()`

```php
indexWebhook($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Webhooks

Lists all Webhooks for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Webhooks

try {
    $result = $apiInstance->indexWebhook($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->indexWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Webhooks | |

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

## `payloadWebhook()`

```php
payloadWebhook($employerId, $id, $payloadId): \SynergiTech\Staffology\Model\WebhookPayload
```

Get WebhookPayload

Returns the specified WebhookPayload for this webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$payloadId = 'payloadId_example'; // string

try {
    $result = $apiInstance->payloadWebhook($employerId, $id, $payloadId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->payloadWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **payloadId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\WebhookPayload**](../Model/WebhookPayload.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payloadsWebhook()`

```php
payloadsWebhook($employerId, $id, $pageNum, $pageSize): \SynergiTech\Staffology\Model\Item[]
```

List WebhookPayloads

Returns a list of all WebhookPayloads for this webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$pageNum = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->payloadsWebhook($employerId, $id, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->payloadsWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **pageNum** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

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

## `sampleWebhook()`

```php
sampleWebhook($employerId, $webhookEvent): mixed
```

Sample Value

Returns an example of the data you can expect your end point to receive when a webhook is fired.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Webhook belongs.
$webhookEvent = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\WebhookEvent(); // \SynergiTech\Staffology\Model\WebhookEvent | The WebhookEvent that you want a sample value for.

try {
    $result = $apiInstance->sampleWebhook($employerId, $webhookEvent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->sampleWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Webhook belongs. | |
| **webhookEvent** | [**\SynergiTech\Staffology\Model\WebhookEvent**](../Model/.md)| The WebhookEvent that you want a sample value for. | |

### Return type

**mixed**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($employerId, $id, $webhook): \SynergiTech\Staffology\Model\Webhook
```

Update Webhook

Updates a Webhook for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$webhook = new \SynergiTech\Staffology\Model\Webhook(); // \SynergiTech\Staffology\Model\Webhook

try {
    $result = $apiInstance->updateWebhook($employerId, $id, $webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **webhook** | [**\SynergiTech\Staffology\Model\Webhook**](../Model/Webhook.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Webhook**](../Model/Webhook.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
