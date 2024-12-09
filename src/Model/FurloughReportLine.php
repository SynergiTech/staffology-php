<?php
/**
 * FurloughReportLine
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

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Staffology\ObjectSerializer;

/**
 * FurloughReportLine Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FurloughReportLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FurloughReportLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employee' => '\SynergiTech\Staffology\Model\Item',
        'employeesFullName' => 'string',
        'employeesNINO' => 'string',
        'employeesPayrollReferenceNumber' => 'string',
        'furloughedDays' => 'int',
        'daysInPeriod' => 'int',
        'hoursNormallyWorked' => 'float',
        'hoursFurloughed' => 'float',
        'percentageOfFurloughedDaysWorked' => 'float',
        'grossPay' => 'float',
        'grossPayClaim' => 'float',
        'niClaim' => 'float',
        'pensionClaim' => 'float',
        'totalClaim' => 'float',
        'furloughStart' => '\DateTime',
        'furloughEnd' => '\DateTime',
        'department' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employee' => null,
        'employeesFullName' => null,
        'employeesNINO' => null,
        'employeesPayrollReferenceNumber' => null,
        'furloughedDays' => 'int32',
        'daysInPeriod' => 'int32',
        'hoursNormallyWorked' => 'double',
        'hoursFurloughed' => 'double',
        'percentageOfFurloughedDaysWorked' => 'double',
        'grossPay' => 'double',
        'grossPayClaim' => 'double',
        'niClaim' => 'double',
        'pensionClaim' => 'double',
        'totalClaim' => 'double',
        'furloughStart' => 'date',
        'furloughEnd' => 'date',
        'department' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employee' => false,
        'employeesFullName' => true,
        'employeesNINO' => true,
        'employeesPayrollReferenceNumber' => true,
        'furloughedDays' => false,
        'daysInPeriod' => false,
        'hoursNormallyWorked' => true,
        'hoursFurloughed' => true,
        'percentageOfFurloughedDaysWorked' => false,
        'grossPay' => false,
        'grossPayClaim' => false,
        'niClaim' => false,
        'pensionClaim' => false,
        'totalClaim' => false,
        'furloughStart' => true,
        'furloughEnd' => true,
        'department' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'employee' => 'employee',
        'employeesFullName' => 'employeesFullName',
        'employeesNINO' => 'employeesNINO',
        'employeesPayrollReferenceNumber' => 'employeesPayrollReferenceNumber',
        'furloughedDays' => 'furloughedDays',
        'daysInPeriod' => 'daysInPeriod',
        'hoursNormallyWorked' => 'hoursNormallyWorked',
        'hoursFurloughed' => 'hoursFurloughed',
        'percentageOfFurloughedDaysWorked' => 'percentageOfFurloughedDaysWorked',
        'grossPay' => 'grossPay',
        'grossPayClaim' => 'grossPayClaim',
        'niClaim' => 'niClaim',
        'pensionClaim' => 'pensionClaim',
        'totalClaim' => 'totalClaim',
        'furloughStart' => 'furloughStart',
        'furloughEnd' => 'furloughEnd',
        'department' => 'department'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employee' => 'setEmployee',
        'employeesFullName' => 'setEmployeesFullName',
        'employeesNINO' => 'setEmployeesNINO',
        'employeesPayrollReferenceNumber' => 'setEmployeesPayrollReferenceNumber',
        'furloughedDays' => 'setFurloughedDays',
        'daysInPeriod' => 'setDaysInPeriod',
        'hoursNormallyWorked' => 'setHoursNormallyWorked',
        'hoursFurloughed' => 'setHoursFurloughed',
        'percentageOfFurloughedDaysWorked' => 'setPercentageOfFurloughedDaysWorked',
        'grossPay' => 'setGrossPay',
        'grossPayClaim' => 'setGrossPayClaim',
        'niClaim' => 'setNiClaim',
        'pensionClaim' => 'setPensionClaim',
        'totalClaim' => 'setTotalClaim',
        'furloughStart' => 'setFurloughStart',
        'furloughEnd' => 'setFurloughEnd',
        'department' => 'setDepartment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employee' => 'getEmployee',
        'employeesFullName' => 'getEmployeesFullName',
        'employeesNINO' => 'getEmployeesNINO',
        'employeesPayrollReferenceNumber' => 'getEmployeesPayrollReferenceNumber',
        'furloughedDays' => 'getFurloughedDays',
        'daysInPeriod' => 'getDaysInPeriod',
        'hoursNormallyWorked' => 'getHoursNormallyWorked',
        'hoursFurloughed' => 'getHoursFurloughed',
        'percentageOfFurloughedDaysWorked' => 'getPercentageOfFurloughedDaysWorked',
        'grossPay' => 'getGrossPay',
        'grossPayClaim' => 'getGrossPayClaim',
        'niClaim' => 'getNiClaim',
        'pensionClaim' => 'getPensionClaim',
        'totalClaim' => 'getTotalClaim',
        'furloughStart' => 'getFurloughStart',
        'furloughEnd' => 'getFurloughEnd',
        'department' => 'getDepartment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('employee', $data ?? [], null);
        $this->setIfExists('employeesFullName', $data ?? [], null);
        $this->setIfExists('employeesNINO', $data ?? [], null);
        $this->setIfExists('employeesPayrollReferenceNumber', $data ?? [], null);
        $this->setIfExists('furloughedDays', $data ?? [], null);
        $this->setIfExists('daysInPeriod', $data ?? [], null);
        $this->setIfExists('hoursNormallyWorked', $data ?? [], null);
        $this->setIfExists('hoursFurloughed', $data ?? [], null);
        $this->setIfExists('percentageOfFurloughedDaysWorked', $data ?? [], null);
        $this->setIfExists('grossPay', $data ?? [], null);
        $this->setIfExists('grossPayClaim', $data ?? [], null);
        $this->setIfExists('niClaim', $data ?? [], null);
        $this->setIfExists('pensionClaim', $data ?? [], null);
        $this->setIfExists('totalClaim', $data ?? [], null);
        $this->setIfExists('furloughStart', $data ?? [], null);
        $this->setIfExists('furloughEnd', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets employee
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getEmployee(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \SynergiTech\Staffology\Model\Item|null $employee employee
     *
     * @return $this
     */
    public function setEmployee(?\SynergiTech\Staffology\Model\Item $employee): static
    {
        if (is_null($employee)) {
            throw new InvalidArgumentException('non-nullable employee cannot be null');
        }
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets employeesFullName
     *
     * @return string|null
     */
    public function getEmployeesFullName(): ?string
    {
        return $this->container['employeesFullName'];
    }

    /**
     * Sets employeesFullName
     *
     * @param string|null $employeesFullName employeesFullName
     *
     * @return $this
     */
    public function setEmployeesFullName(?string $employeesFullName): static
    {
        if (is_null($employeesFullName)) {
            array_push($this->openAPINullablesSetToNull, 'employeesFullName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employeesFullName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employeesFullName'] = $employeesFullName;

        return $this;
    }

    /**
     * Gets employeesNINO
     *
     * @return string|null
     */
    public function getEmployeesNINO(): ?string
    {
        return $this->container['employeesNINO'];
    }

    /**
     * Sets employeesNINO
     *
     * @param string|null $employeesNINO employeesNINO
     *
     * @return $this
     */
    public function setEmployeesNINO(?string $employeesNINO): static
    {
        if (is_null($employeesNINO)) {
            array_push($this->openAPINullablesSetToNull, 'employeesNINO');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employeesNINO', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employeesNINO'] = $employeesNINO;

        return $this;
    }

    /**
     * Gets employeesPayrollReferenceNumber
     *
     * @return string|null
     */
    public function getEmployeesPayrollReferenceNumber(): ?string
    {
        return $this->container['employeesPayrollReferenceNumber'];
    }

    /**
     * Sets employeesPayrollReferenceNumber
     *
     * @param string|null $employeesPayrollReferenceNumber employeesPayrollReferenceNumber
     *
     * @return $this
     */
    public function setEmployeesPayrollReferenceNumber(?string $employeesPayrollReferenceNumber): static
    {
        if (is_null($employeesPayrollReferenceNumber)) {
            array_push($this->openAPINullablesSetToNull, 'employeesPayrollReferenceNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employeesPayrollReferenceNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employeesPayrollReferenceNumber'] = $employeesPayrollReferenceNumber;

        return $this;
    }

    /**
     * Gets furloughedDays
     *
     * @return int|null
     */
    public function getFurloughedDays(): ?int
    {
        return $this->container['furloughedDays'];
    }

    /**
     * Sets furloughedDays
     *
     * @param int|null $furloughedDays furloughedDays
     *
     * @return $this
     */
    public function setFurloughedDays(?int $furloughedDays): static
    {
        if (is_null($furloughedDays)) {
            throw new InvalidArgumentException('non-nullable furloughedDays cannot be null');
        }
        $this->container['furloughedDays'] = $furloughedDays;

        return $this;
    }

    /**
     * Gets daysInPeriod
     *
     * @return int|null
     */
    public function getDaysInPeriod(): ?int
    {
        return $this->container['daysInPeriod'];
    }

    /**
     * Sets daysInPeriod
     *
     * @param int|null $daysInPeriod daysInPeriod
     *
     * @return $this
     */
    public function setDaysInPeriod(?int $daysInPeriod): static
    {
        if (is_null($daysInPeriod)) {
            throw new InvalidArgumentException('non-nullable daysInPeriod cannot be null');
        }
        $this->container['daysInPeriod'] = $daysInPeriod;

        return $this;
    }

    /**
     * Gets hoursNormallyWorked
     *
     * @return float|null
     */
    public function getHoursNormallyWorked(): ?float
    {
        return $this->container['hoursNormallyWorked'];
    }

    /**
     * Sets hoursNormallyWorked
     *
     * @param float|null $hoursNormallyWorked hoursNormallyWorked
     *
     * @return $this
     */
    public function setHoursNormallyWorked(?float $hoursNormallyWorked): static
    {
        if (is_null($hoursNormallyWorked)) {
            array_push($this->openAPINullablesSetToNull, 'hoursNormallyWorked');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hoursNormallyWorked', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hoursNormallyWorked'] = $hoursNormallyWorked;

        return $this;
    }

    /**
     * Gets hoursFurloughed
     *
     * @return float|null
     */
    public function getHoursFurloughed(): ?float
    {
        return $this->container['hoursFurloughed'];
    }

    /**
     * Sets hoursFurloughed
     *
     * @param float|null $hoursFurloughed hoursFurloughed
     *
     * @return $this
     */
    public function setHoursFurloughed(?float $hoursFurloughed): static
    {
        if (is_null($hoursFurloughed)) {
            array_push($this->openAPINullablesSetToNull, 'hoursFurloughed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hoursFurloughed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hoursFurloughed'] = $hoursFurloughed;

        return $this;
    }

    /**
     * Gets percentageOfFurloughedDaysWorked
     *
     * @return float|null
     */
    public function getPercentageOfFurloughedDaysWorked(): ?float
    {
        return $this->container['percentageOfFurloughedDaysWorked'];
    }

    /**
     * Sets percentageOfFurloughedDaysWorked
     *
     * @param float|null $percentageOfFurloughedDaysWorked percentageOfFurloughedDaysWorked
     *
     * @return $this
     */
    public function setPercentageOfFurloughedDaysWorked(?float $percentageOfFurloughedDaysWorked): static
    {
        if (is_null($percentageOfFurloughedDaysWorked)) {
            throw new InvalidArgumentException('non-nullable percentageOfFurloughedDaysWorked cannot be null');
        }
        $this->container['percentageOfFurloughedDaysWorked'] = $percentageOfFurloughedDaysWorked;

        return $this;
    }

    /**
     * Gets grossPay
     *
     * @return float|null
     */
    public function getGrossPay(): ?float
    {
        return $this->container['grossPay'];
    }

    /**
     * Sets grossPay
     *
     * @param float|null $grossPay grossPay
     *
     * @return $this
     */
    public function setGrossPay(?float $grossPay): static
    {
        if (is_null($grossPay)) {
            throw new InvalidArgumentException('non-nullable grossPay cannot be null');
        }
        $this->container['grossPay'] = $grossPay;

        return $this;
    }

    /**
     * Gets grossPayClaim
     *
     * @return float|null
     */
    public function getGrossPayClaim(): ?float
    {
        return $this->container['grossPayClaim'];
    }

    /**
     * Sets grossPayClaim
     *
     * @param float|null $grossPayClaim grossPayClaim
     *
     * @return $this
     */
    public function setGrossPayClaim(?float $grossPayClaim): static
    {
        if (is_null($grossPayClaim)) {
            throw new InvalidArgumentException('non-nullable grossPayClaim cannot be null');
        }
        $this->container['grossPayClaim'] = $grossPayClaim;

        return $this;
    }

    /**
     * Gets niClaim
     *
     * @return float|null
     */
    public function getNiClaim(): ?float
    {
        return $this->container['niClaim'];
    }

    /**
     * Sets niClaim
     *
     * @param float|null $niClaim niClaim
     *
     * @return $this
     */
    public function setNiClaim(?float $niClaim): static
    {
        if (is_null($niClaim)) {
            throw new InvalidArgumentException('non-nullable niClaim cannot be null');
        }
        $this->container['niClaim'] = $niClaim;

        return $this;
    }

    /**
     * Gets pensionClaim
     *
     * @return float|null
     */
    public function getPensionClaim(): ?float
    {
        return $this->container['pensionClaim'];
    }

    /**
     * Sets pensionClaim
     *
     * @param float|null $pensionClaim pensionClaim
     *
     * @return $this
     */
    public function setPensionClaim(?float $pensionClaim): static
    {
        if (is_null($pensionClaim)) {
            throw new InvalidArgumentException('non-nullable pensionClaim cannot be null');
        }
        $this->container['pensionClaim'] = $pensionClaim;

        return $this;
    }

    /**
     * Gets totalClaim
     *
     * @return float|null
     */
    public function getTotalClaim(): ?float
    {
        return $this->container['totalClaim'];
    }

    /**
     * Sets totalClaim
     *
     * @param float|null $totalClaim totalClaim
     *
     * @return $this
     */
    public function setTotalClaim(?float $totalClaim): static
    {
        if (is_null($totalClaim)) {
            throw new InvalidArgumentException('non-nullable totalClaim cannot be null');
        }
        $this->container['totalClaim'] = $totalClaim;

        return $this;
    }

    /**
     * Gets furloughStart
     *
     * @return \DateTime|null
     */
    public function getFurloughStart(): ?\DateTime
    {
        return $this->container['furloughStart'];
    }

    /**
     * Sets furloughStart
     *
     * @param \DateTime|null $furloughStart furloughStart
     *
     * @return $this
     */
    public function setFurloughStart(?\DateTime $furloughStart): static
    {
        if (is_null($furloughStart)) {
            array_push($this->openAPINullablesSetToNull, 'furloughStart');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('furloughStart', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['furloughStart'] = $furloughStart;

        return $this;
    }

    /**
     * Gets furloughEnd
     *
     * @return \DateTime|null
     */
    public function getFurloughEnd(): ?\DateTime
    {
        return $this->container['furloughEnd'];
    }

    /**
     * Sets furloughEnd
     *
     * @param \DateTime|null $furloughEnd furloughEnd
     *
     * @return $this
     */
    public function setFurloughEnd(?\DateTime $furloughEnd): static
    {
        if (is_null($furloughEnd)) {
            array_push($this->openAPINullablesSetToNull, 'furloughEnd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('furloughEnd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['furloughEnd'] = $furloughEnd;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department department
     *
     * @return $this
     */
    public function setDepartment(?string $department): static
    {
        if (is_null($department)) {
            array_push($this->openAPINullablesSetToNull, 'department');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('department', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['department'] = $department;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


