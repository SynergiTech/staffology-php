<?php
/**
 * LeaveCalculationType
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
 * LeaveCalculationType Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum LeaveCalculationType: string
{
    case ONE_THREE_SIXTY_FIFTH_FTE = 'OneThreeSixtyFifthFTE';

    case ONE_THREE_SIXTY_FIFTH_PRO_RATA = 'OneThreeSixtyFifthProRata';

    case USUAL_PRO_RATA = 'UsualProRata';

    case ONE_FIFTH_OR_WORKING_PATTERN = 'OneFifthOrWorkingPattern';

    case SPECIFY_HOURS = 'SpecifyHours';
}


