# SynergiTech\Staffology\InvitationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptInvitation()**](InvitationApi.md#acceptInvitation) | **POST** /invitations/{id} | Accept Invitation |
| [**createInvitation()**](InvitationApi.md#createInvitation) | **POST** /employers/{employerId}/invitation | Create Invitation |
| [**deleteInvitation()**](InvitationApi.md#deleteInvitation) | **DELETE** /employers/{employerId}/invitation/{id} | Delete Invitation |
| [**getInvitation()**](InvitationApi.md#getInvitation) | **GET** /employers/{employerId}/invitation/{id} | Get Invitation |
| [**indexInvitation()**](InvitationApi.md#indexInvitation) | **GET** /employers/{employerId}/invitation | List Invitations |


## `acceptInvitation()`

```php
acceptInvitation($id, $acceptInvitation)
```

Accept Invitation

Accepts the Invitation.  The user making this API call must have the email address that the invite was created for and the email address must be verified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$acceptInvitation = True; // bool | Set to true to accept the invitation or false to decline it.

try {
    $apiInstance->acceptInvitation($id, $acceptInvitation);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->acceptInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **acceptInvitation** | **bool**| Set to true to accept the invitation or false to decline it. | [optional] |

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

## `createInvitation()`

```php
createInvitation($employerId, $autoAccept, $invitation): \SynergiTech\Staffology\Model\Invitation
```

Create Invitation

Creates a new Invitation for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$autoAccept = True; // bool | This is useful for when you want to invite a user to an employer and automatically accept the invitation.
$invitation = new \SynergiTech\Staffology\Model\Invitation(); // \SynergiTech\Staffology\Model\Invitation

try {
    $result = $apiInstance->createInvitation($employerId, $autoAccept, $invitation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->createInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **autoAccept** | **bool**| This is useful for when you want to invite a user to an employer and automatically accept the invitation. | [optional] |
| **invitation** | [**\SynergiTech\Staffology\Model\Invitation**](../Model/Invitation.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvitation()`

```php
deleteInvitation($employerId, $id)
```

Delete Invitation

Deletes the specified Invitation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deleteInvitation($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->deleteInvitation: ', $e->getMessage(), PHP_EOL;
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

## `getInvitation()`

```php
getInvitation($employerId, $id): \SynergiTech\Staffology\Model\Invitation
```

Get Invitation

Gets the Invitation specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Invitation belongs.
$id = 'id_example'; // string

try {
    $result = $apiInstance->getInvitation($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->getInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Invitation belongs. | |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Invitation**](../Model/Invitation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexInvitation()`

```php
indexInvitation($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Invitations

Lists all Invitations for an Employer.  Only unaccepted Invitations are listed as they are deleted once they've been accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Pay Codes

try {
    $result = $apiInstance->indexInvitation($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->indexInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Pay Codes | |

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
