<?php
/**
 * ProRataRule
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
 * ProRataRule Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum ProRataRule: string
{
    case WORKING_DAYS_IN_PERIOD = 'WorkingDaysInPeriod';

    case CALENDAR_DAYS_IN_PERIOD = 'CalendarDaysInPeriod';

    case TWO_SIXTY_RULE = 'TwoSixtyRule';

    case THREE_SIX_FIVE_RULE = 'ThreeSixFiveRule';
}


