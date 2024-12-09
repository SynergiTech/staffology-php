<?php
/**
 * AuthScheme
 *
 * PHP version 8.1
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Staffology Payroll API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: duane@staffology.co.uk
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Staffology\Model;

/**
 * AuthScheme Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum AuthScheme: string
{
    case O_AUTH1 = 'OAuth1';

    case O_AUTH2 = 'OAuth2';

    case BASIC = 'Basic';

    case API_KEY_IN_HEADER = 'ApiKeyInHeader';

    case HMAC = 'Hmac';

    case O_AUTH2_CC = 'OAuth2Cc';

    case O_AUTH2_PASSWORD = 'OAuth2Password';

    case DEFER_TO_THIRD_PARTY = 'DeferToThirdParty';
}

