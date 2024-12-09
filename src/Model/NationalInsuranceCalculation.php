<?php
/**
 * NationalInsuranceCalculation
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
 * NationalInsuranceCalculation Class Doc Comment
 *
 * @description Included as part of the PayRunEntry model to provide details of how the National Insurance Contribution was calculated.  Unless the PayRunEntry.ManualNi property is set to true then these value will all be read-only and are recalculated everytime a payrun is updated.  This calculation could be made up of one or more calculations made on different NI table letters.  Where more than NI table letter affects the calculation, the calculation for each NI table letter will be contain in the Breakdown.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class NationalInsuranceCalculation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NationalInsuranceCalculation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'breakdown' => '\SynergiTech\Staffology\Model\NationalInsuranceCalculationBase[]',
        'niCategory' => 'string',
        'asDirector' => 'bool',
        'earningsUptoIncludingLEL' => 'float',
        'earningsAboveLELUptoIncludingPT' => 'float',
        'earningsAbovePTUptoIncludingST' => 'float',
        'earningsAbovePTUptoIncludingUEL' => 'float',
        'earningsAboveSTUptoIncludingUEL' => 'float',
        'earningsAboveSTUptoIncludingFUST' => 'float',
        'earningsAboveFUSTUptoIncludingUEL' => 'float',
        'earningsAboveUEL' => 'float',
        'employeeNiGross' => 'float',
        'employeeNiRebate' => 'float',
        'employerNiGross' => 'float',
        'employerNiRebate' => 'float',
        'employeeNi' => 'float',
        'employerNi' => 'float',
        'netNi' => 'float',
        'niablePay' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'breakdown' => null,
        'niCategory' => null,
        'asDirector' => null,
        'earningsUptoIncludingLEL' => 'double',
        'earningsAboveLELUptoIncludingPT' => 'double',
        'earningsAbovePTUptoIncludingST' => 'double',
        'earningsAbovePTUptoIncludingUEL' => 'double',
        'earningsAboveSTUptoIncludingUEL' => 'double',
        'earningsAboveSTUptoIncludingFUST' => 'double',
        'earningsAboveFUSTUptoIncludingUEL' => 'double',
        'earningsAboveUEL' => 'double',
        'employeeNiGross' => 'double',
        'employeeNiRebate' => 'double',
        'employerNiGross' => 'double',
        'employerNiRebate' => 'double',
        'employeeNi' => 'double',
        'employerNi' => 'double',
        'netNi' => 'double',
        'niablePay' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'breakdown' => true,
        'niCategory' => false,
        'asDirector' => false,
        'earningsUptoIncludingLEL' => false,
        'earningsAboveLELUptoIncludingPT' => false,
        'earningsAbovePTUptoIncludingST' => false,
        'earningsAbovePTUptoIncludingUEL' => false,
        'earningsAboveSTUptoIncludingUEL' => false,
        'earningsAboveSTUptoIncludingFUST' => true,
        'earningsAboveFUSTUptoIncludingUEL' => true,
        'earningsAboveUEL' => false,
        'employeeNiGross' => false,
        'employeeNiRebate' => false,
        'employerNiGross' => false,
        'employerNiRebate' => false,
        'employeeNi' => false,
        'employerNi' => false,
        'netNi' => false,
        'niablePay' => false
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
        'breakdown' => 'breakdown',
        'niCategory' => 'niCategory',
        'asDirector' => 'asDirector',
        'earningsUptoIncludingLEL' => 'earningsUptoIncludingLEL',
        'earningsAboveLELUptoIncludingPT' => 'earningsAboveLELUptoIncludingPT',
        'earningsAbovePTUptoIncludingST' => 'earningsAbovePTUptoIncludingST',
        'earningsAbovePTUptoIncludingUEL' => 'earningsAbovePTUptoIncludingUEL',
        'earningsAboveSTUptoIncludingUEL' => 'earningsAboveSTUptoIncludingUEL',
        'earningsAboveSTUptoIncludingFUST' => 'earningsAboveSTUptoIncludingFUST',
        'earningsAboveFUSTUptoIncludingUEL' => 'earningsAboveFUSTUptoIncludingUEL',
        'earningsAboveUEL' => 'earningsAboveUEL',
        'employeeNiGross' => 'employeeNiGross',
        'employeeNiRebate' => 'employeeNiRebate',
        'employerNiGross' => 'employerNiGross',
        'employerNiRebate' => 'employerNiRebate',
        'employeeNi' => 'employeeNi',
        'employerNi' => 'employerNi',
        'netNi' => 'netNi',
        'niablePay' => 'niablePay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'breakdown' => 'setBreakdown',
        'niCategory' => 'setNiCategory',
        'asDirector' => 'setAsDirector',
        'earningsUptoIncludingLEL' => 'setEarningsUptoIncludingLEL',
        'earningsAboveLELUptoIncludingPT' => 'setEarningsAboveLELUptoIncludingPT',
        'earningsAbovePTUptoIncludingST' => 'setEarningsAbovePTUptoIncludingST',
        'earningsAbovePTUptoIncludingUEL' => 'setEarningsAbovePTUptoIncludingUEL',
        'earningsAboveSTUptoIncludingUEL' => 'setEarningsAboveSTUptoIncludingUEL',
        'earningsAboveSTUptoIncludingFUST' => 'setEarningsAboveSTUptoIncludingFUST',
        'earningsAboveFUSTUptoIncludingUEL' => 'setEarningsAboveFUSTUptoIncludingUEL',
        'earningsAboveUEL' => 'setEarningsAboveUEL',
        'employeeNiGross' => 'setEmployeeNiGross',
        'employeeNiRebate' => 'setEmployeeNiRebate',
        'employerNiGross' => 'setEmployerNiGross',
        'employerNiRebate' => 'setEmployerNiRebate',
        'employeeNi' => 'setEmployeeNi',
        'employerNi' => 'setEmployerNi',
        'netNi' => 'setNetNi',
        'niablePay' => 'setNiablePay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'breakdown' => 'getBreakdown',
        'niCategory' => 'getNiCategory',
        'asDirector' => 'getAsDirector',
        'earningsUptoIncludingLEL' => 'getEarningsUptoIncludingLEL',
        'earningsAboveLELUptoIncludingPT' => 'getEarningsAboveLELUptoIncludingPT',
        'earningsAbovePTUptoIncludingST' => 'getEarningsAbovePTUptoIncludingST',
        'earningsAbovePTUptoIncludingUEL' => 'getEarningsAbovePTUptoIncludingUEL',
        'earningsAboveSTUptoIncludingUEL' => 'getEarningsAboveSTUptoIncludingUEL',
        'earningsAboveSTUptoIncludingFUST' => 'getEarningsAboveSTUptoIncludingFUST',
        'earningsAboveFUSTUptoIncludingUEL' => 'getEarningsAboveFUSTUptoIncludingUEL',
        'earningsAboveUEL' => 'getEarningsAboveUEL',
        'employeeNiGross' => 'getEmployeeNiGross',
        'employeeNiRebate' => 'getEmployeeNiRebate',
        'employerNiGross' => 'getEmployerNiGross',
        'employerNiRebate' => 'getEmployerNiRebate',
        'employeeNi' => 'getEmployeeNi',
        'employerNi' => 'getEmployerNi',
        'netNi' => 'getNetNi',
        'niablePay' => 'getNiablePay'
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
        $this->setIfExists('breakdown', $data ?? [], null);
        $this->setIfExists('niCategory', $data ?? [], null);
        $this->setIfExists('asDirector', $data ?? [], null);
        $this->setIfExists('earningsUptoIncludingLEL', $data ?? [], null);
        $this->setIfExists('earningsAboveLELUptoIncludingPT', $data ?? [], null);
        $this->setIfExists('earningsAbovePTUptoIncludingST', $data ?? [], null);
        $this->setIfExists('earningsAbovePTUptoIncludingUEL', $data ?? [], null);
        $this->setIfExists('earningsAboveSTUptoIncludingUEL', $data ?? [], null);
        $this->setIfExists('earningsAboveSTUptoIncludingFUST', $data ?? [], null);
        $this->setIfExists('earningsAboveFUSTUptoIncludingUEL', $data ?? [], null);
        $this->setIfExists('earningsAboveUEL', $data ?? [], null);
        $this->setIfExists('employeeNiGross', $data ?? [], null);
        $this->setIfExists('employeeNiRebate', $data ?? [], null);
        $this->setIfExists('employerNiGross', $data ?? [], null);
        $this->setIfExists('employerNiRebate', $data ?? [], null);
        $this->setIfExists('employeeNi', $data ?? [], null);
        $this->setIfExists('employerNi', $data ?? [], null);
        $this->setIfExists('netNi', $data ?? [], null);
        $this->setIfExists('niablePay', $data ?? [], null);
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
     * Gets breakdown
     *
     * @return \SynergiTech\Staffology\Model\NationalInsuranceCalculationBase[]|null
     */
    public function getBreakdown(): ?array
    {
        return $this->container['breakdown'];
    }

    /**
     * Sets breakdown
     *
     * @param \SynergiTech\Staffology\Model\NationalInsuranceCalculationBase[]|null $breakdown [readonly] List of calculations that make up this calculation
     *
     * @return $this
     */
    public function setBreakdown(?array $breakdown): static
    {
        if (is_null($breakdown)) {
            array_push($this->openAPINullablesSetToNull, 'breakdown');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('breakdown', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['breakdown'] = $breakdown;

        return $this;
    }

    /**
     * Gets niCategory
     *
     * @return string|null
     */
    public function getNiCategory(): ?string
    {
        return $this->container['niCategory'];
    }

    /**
     * Sets niCategory
     *
     * @param string|null $niCategory Calculated on NI table letter
     *
     * @return $this
     */
    public function setNiCategory(?string $niCategory): static
    {
        if (is_null($niCategory)) {
            throw new InvalidArgumentException('non-nullable niCategory cannot be null');
        }
        $this->container['niCategory'] = $niCategory;

        return $this;
    }

    /**
     * Gets asDirector
     *
     * @return bool|null
     */
    public function getAsDirector(): ?bool
    {
        return $this->container['asDirector'];
    }

    /**
     * Sets asDirector
     *
     * @param bool|null $asDirector Calculated as a Director
     *
     * @return $this
     */
    public function setAsDirector(?bool $asDirector): static
    {
        if (is_null($asDirector)) {
            throw new InvalidArgumentException('non-nullable asDirector cannot be null');
        }
        $this->container['asDirector'] = $asDirector;

        return $this;
    }

    /**
     * Gets earningsUptoIncludingLEL
     *
     * @return float|null
     */
    public function getEarningsUptoIncludingLEL(): ?float
    {
        return $this->container['earningsUptoIncludingLEL'];
    }

    /**
     * Sets earningsUptoIncludingLEL
     *
     * @param float|null $earningsUptoIncludingLEL Earnings up to and including LEL
     *
     * @return $this
     */
    public function setEarningsUptoIncludingLEL(?float $earningsUptoIncludingLEL): static
    {
        if (is_null($earningsUptoIncludingLEL)) {
            throw new InvalidArgumentException('non-nullable earningsUptoIncludingLEL cannot be null');
        }
        $this->container['earningsUptoIncludingLEL'] = $earningsUptoIncludingLEL;

        return $this;
    }

    /**
     * Gets earningsAboveLELUptoIncludingPT
     *
     * @return float|null
     */
    public function getEarningsAboveLELUptoIncludingPT(): ?float
    {
        return $this->container['earningsAboveLELUptoIncludingPT'];
    }

    /**
     * Sets earningsAboveLELUptoIncludingPT
     *
     * @param float|null $earningsAboveLELUptoIncludingPT Earnings above LEL up to PT
     *
     * @return $this
     */
    public function setEarningsAboveLELUptoIncludingPT(?float $earningsAboveLELUptoIncludingPT): static
    {
        if (is_null($earningsAboveLELUptoIncludingPT)) {
            throw new InvalidArgumentException('non-nullable earningsAboveLELUptoIncludingPT cannot be null');
        }
        $this->container['earningsAboveLELUptoIncludingPT'] = $earningsAboveLELUptoIncludingPT;

        return $this;
    }

    /**
     * Gets earningsAbovePTUptoIncludingST
     *
     * @return float|null
     */
    public function getEarningsAbovePTUptoIncludingST(): ?float
    {
        return $this->container['earningsAbovePTUptoIncludingST'];
    }

    /**
     * Sets earningsAbovePTUptoIncludingST
     *
     * @param float|null $earningsAbovePTUptoIncludingST Earnings above PT up to ST
     *
     * @return $this
     */
    public function setEarningsAbovePTUptoIncludingST(?float $earningsAbovePTUptoIncludingST): static
    {
        if (is_null($earningsAbovePTUptoIncludingST)) {
            throw new InvalidArgumentException('non-nullable earningsAbovePTUptoIncludingST cannot be null');
        }
        $this->container['earningsAbovePTUptoIncludingST'] = $earningsAbovePTUptoIncludingST;

        return $this;
    }

    /**
     * Gets earningsAbovePTUptoIncludingUEL
     *
     * @return float|null
     */
    public function getEarningsAbovePTUptoIncludingUEL(): ?float
    {
        return $this->container['earningsAbovePTUptoIncludingUEL'];
    }

    /**
     * Sets earningsAbovePTUptoIncludingUEL
     *
     * @param float|null $earningsAbovePTUptoIncludingUEL Earnings above PT up to UEL
     *
     * @return $this
     */
    public function setEarningsAbovePTUptoIncludingUEL(?float $earningsAbovePTUptoIncludingUEL): static
    {
        if (is_null($earningsAbovePTUptoIncludingUEL)) {
            throw new InvalidArgumentException('non-nullable earningsAbovePTUptoIncludingUEL cannot be null');
        }
        $this->container['earningsAbovePTUptoIncludingUEL'] = $earningsAbovePTUptoIncludingUEL;

        return $this;
    }

    /**
     * Gets earningsAboveSTUptoIncludingUEL
     *
     * @return float|null
     */
    public function getEarningsAboveSTUptoIncludingUEL(): ?float
    {
        return $this->container['earningsAboveSTUptoIncludingUEL'];
    }

    /**
     * Sets earningsAboveSTUptoIncludingUEL
     *
     * @param float|null $earningsAboveSTUptoIncludingUEL Earnings above ST up to UEL
     *
     * @return $this
     */
    public function setEarningsAboveSTUptoIncludingUEL(?float $earningsAboveSTUptoIncludingUEL): static
    {
        if (is_null($earningsAboveSTUptoIncludingUEL)) {
            throw new InvalidArgumentException('non-nullable earningsAboveSTUptoIncludingUEL cannot be null');
        }
        $this->container['earningsAboveSTUptoIncludingUEL'] = $earningsAboveSTUptoIncludingUEL;

        return $this;
    }

    /**
     * Gets earningsAboveSTUptoIncludingFUST
     *
     * @return float|null
     */
    public function getEarningsAboveSTUptoIncludingFUST(): ?float
    {
        return $this->container['earningsAboveSTUptoIncludingFUST'];
    }

    /**
     * Sets earningsAboveSTUptoIncludingFUST
     *
     * @param float|null $earningsAboveSTUptoIncludingFUST Earnings above ST up to FUST
     *
     * @return $this
     */
    public function setEarningsAboveSTUptoIncludingFUST(?float $earningsAboveSTUptoIncludingFUST): static
    {
        if (is_null($earningsAboveSTUptoIncludingFUST)) {
            array_push($this->openAPINullablesSetToNull, 'earningsAboveSTUptoIncludingFUST');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('earningsAboveSTUptoIncludingFUST', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['earningsAboveSTUptoIncludingFUST'] = $earningsAboveSTUptoIncludingFUST;

        return $this;
    }

    /**
     * Gets earningsAboveFUSTUptoIncludingUEL
     *
     * @return float|null
     */
    public function getEarningsAboveFUSTUptoIncludingUEL(): ?float
    {
        return $this->container['earningsAboveFUSTUptoIncludingUEL'];
    }

    /**
     * Sets earningsAboveFUSTUptoIncludingUEL
     *
     * @param float|null $earningsAboveFUSTUptoIncludingUEL Earnings above FUST up to UEL
     *
     * @return $this
     */
    public function setEarningsAboveFUSTUptoIncludingUEL(?float $earningsAboveFUSTUptoIncludingUEL): static
    {
        if (is_null($earningsAboveFUSTUptoIncludingUEL)) {
            array_push($this->openAPINullablesSetToNull, 'earningsAboveFUSTUptoIncludingUEL');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('earningsAboveFUSTUptoIncludingUEL', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['earningsAboveFUSTUptoIncludingUEL'] = $earningsAboveFUSTUptoIncludingUEL;

        return $this;
    }

    /**
     * Gets earningsAboveUEL
     *
     * @return float|null
     */
    public function getEarningsAboveUEL(): ?float
    {
        return $this->container['earningsAboveUEL'];
    }

    /**
     * Sets earningsAboveUEL
     *
     * @param float|null $earningsAboveUEL Earnings above UEL
     *
     * @return $this
     */
    public function setEarningsAboveUEL(?float $earningsAboveUEL): static
    {
        if (is_null($earningsAboveUEL)) {
            throw new InvalidArgumentException('non-nullable earningsAboveUEL cannot be null');
        }
        $this->container['earningsAboveUEL'] = $earningsAboveUEL;

        return $this;
    }

    /**
     * Gets employeeNiGross
     *
     * @return float|null
     */
    public function getEmployeeNiGross(): ?float
    {
        return $this->container['employeeNiGross'];
    }

    /**
     * Sets employeeNiGross
     *
     * @param float|null $employeeNiGross Employee National Insurance Gross Value
     *
     * @return $this
     */
    public function setEmployeeNiGross(?float $employeeNiGross): static
    {
        if (is_null($employeeNiGross)) {
            throw new InvalidArgumentException('non-nullable employeeNiGross cannot be null');
        }
        $this->container['employeeNiGross'] = $employeeNiGross;

        return $this;
    }

    /**
     * Gets employeeNiRebate
     *
     * @return float|null
     */
    public function getEmployeeNiRebate(): ?float
    {
        return $this->container['employeeNiRebate'];
    }

    /**
     * Sets employeeNiRebate
     *
     * @param float|null $employeeNiRebate Employee National Insurance Rebate Value
     *
     * @return $this
     */
    public function setEmployeeNiRebate(?float $employeeNiRebate): static
    {
        if (is_null($employeeNiRebate)) {
            throw new InvalidArgumentException('non-nullable employeeNiRebate cannot be null');
        }
        $this->container['employeeNiRebate'] = $employeeNiRebate;

        return $this;
    }

    /**
     * Gets employerNiGross
     *
     * @return float|null
     */
    public function getEmployerNiGross(): ?float
    {
        return $this->container['employerNiGross'];
    }

    /**
     * Sets employerNiGross
     *
     * @param float|null $employerNiGross Employer National Insurance Gross Value
     *
     * @return $this
     */
    public function setEmployerNiGross(?float $employerNiGross): static
    {
        if (is_null($employerNiGross)) {
            throw new InvalidArgumentException('non-nullable employerNiGross cannot be null');
        }
        $this->container['employerNiGross'] = $employerNiGross;

        return $this;
    }

    /**
     * Gets employerNiRebate
     *
     * @return float|null
     */
    public function getEmployerNiRebate(): ?float
    {
        return $this->container['employerNiRebate'];
    }

    /**
     * Sets employerNiRebate
     *
     * @param float|null $employerNiRebate Employer National Insurance Rebate Value
     *
     * @return $this
     */
    public function setEmployerNiRebate(?float $employerNiRebate): static
    {
        if (is_null($employerNiRebate)) {
            throw new InvalidArgumentException('non-nullable employerNiRebate cannot be null');
        }
        $this->container['employerNiRebate'] = $employerNiRebate;

        return $this;
    }

    /**
     * Gets employeeNi
     *
     * @return float|null
     */
    public function getEmployeeNi(): ?float
    {
        return $this->container['employeeNi'];
    }

    /**
     * Sets employeeNi
     *
     * @param float|null $employeeNi [readonly] Net Employee National Insurance
     *
     * @return $this
     */
    public function setEmployeeNi(?float $employeeNi): static
    {
        if (is_null($employeeNi)) {
            throw new InvalidArgumentException('non-nullable employeeNi cannot be null');
        }
        $this->container['employeeNi'] = $employeeNi;

        return $this;
    }

    /**
     * Gets employerNi
     *
     * @return float|null
     */
    public function getEmployerNi(): ?float
    {
        return $this->container['employerNi'];
    }

    /**
     * Sets employerNi
     *
     * @param float|null $employerNi [readonly] Net Employer National Insurance
     *
     * @return $this
     */
    public function setEmployerNi(?float $employerNi): static
    {
        if (is_null($employerNi)) {
            throw new InvalidArgumentException('non-nullable employerNi cannot be null');
        }
        $this->container['employerNi'] = $employerNi;

        return $this;
    }

    /**
     * Gets netNi
     *
     * @return float|null
     */
    public function getNetNi(): ?float
    {
        return $this->container['netNi'];
    }

    /**
     * Sets netNi
     *
     * @param float|null $netNi [readonly] Net National Insurance (Employer + Employee)
     *
     * @return $this
     */
    public function setNetNi(?float $netNi): static
    {
        if (is_null($netNi)) {
            throw new InvalidArgumentException('non-nullable netNi cannot be null');
        }
        $this->container['netNi'] = $netNi;

        return $this;
    }

    /**
     * Gets niablePay
     *
     * @return float|null
     */
    public function getNiablePay(): ?float
    {
        return $this->container['niablePay'];
    }

    /**
     * Sets niablePay
     *
     * @param float|null $niablePay Niable pay value, required for payrun overrides
     *
     * @return $this
     */
    public function setNiablePay(?float $niablePay): static
    {
        if (is_null($niablePay)) {
            throw new InvalidArgumentException('non-nullable niablePay cannot be null');
        }
        $this->container['niablePay'] = $niablePay;

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


