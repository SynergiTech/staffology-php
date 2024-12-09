<?php
/**
 * PayCodeCalculationType
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
 * PayCodeCalculationType Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum PayCodeCalculationType: string
{
    case FIXED_AMOUNT = 'FixedAmount';

    case PERCENTAGE_OF_GROSS = 'PercentageOfGross';

    case PERCENTAGE_OF_NET = 'PercentageOfNet';

    case MULTIPLE_OF_HOURLY_RATE = 'MultipleOfHourlyRate';

    case MULTIPLE_OF_DAILY_RATE = 'MultipleOfDailyRate';

    case FIXED_ANNUAL_AMOUNT = 'FixedAnnualAmount';
}

