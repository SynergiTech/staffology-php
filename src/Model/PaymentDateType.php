<?php
/**
 * PaymentDateType
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
 * PaymentDateType Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum PaymentDateType: string
{
    case SAME_DATE = 'SameDate';

    case LAST_DAY = 'LastDay';

    case LAST_WEEKDAY = 'LastWeekday';

    case LAST_XXXDAY = 'LastXxxday';

    case SAME_DATE_WORKING_DAY = 'SameDateWorkingDay';

    case SECOND_XXXDAY = 'SecondXxxday';

    case THIRD_XXXDAY = 'ThirdXxxday';

    case FOURTH_XXXDAY = 'FourthXxxday';

    case SECOND_TO_LAST_XXXDAY = 'SecondToLastXxxday';

    case THIRD_TO_LAST_XXXDAY = 'ThirdToLastXxxday';
}


