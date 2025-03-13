<?php
/**
 * UserJobType
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
 * Generator version: 7.13.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Staffology\Model;

/**
 * UserJobType Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum UserJobType: string
{
    case BUSINESS_OWNER = 'BusinessOwner';

    case PAYROLL_MANAGER = 'PayrollManager';

    case ACCOUNTANT = 'Accountant';

    case DEVELOPER = 'Developer';

    case SOFTWARE_VENDOR = 'SoftwareVendor';

    case OTHER = 'Other';
}


