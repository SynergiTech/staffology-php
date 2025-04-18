<?php
/**
 * LeaveType
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
 * LeaveType Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum LeaveType: string
{
    case UNAUTHORISED = 'Unauthorised';

    case HOLIDAY = 'Holiday';

    case SICK = 'Sick';

    case MATERNITY = 'Maternity';

    case PATERNITY = 'Paternity';

    case ADOPTION = 'Adoption';

    case SHARED_PARENTAL = 'SharedParental';

    case BEREAVEMENT = 'Bereavement';

    case SHARED_PARENTAL_ADOPTION = 'SharedParentalAdoption';

    case PATERNITY_ADOPTION = 'PaternityAdoption';

    case STRIKE_ACTION = 'StrikeAction';

    case NEONATAL_CARE = 'NeonatalCare';
}


