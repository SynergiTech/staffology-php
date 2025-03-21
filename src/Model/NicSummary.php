<?php
/**
 * NicSummary
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

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Staffology\ObjectSerializer;

/**
 * NicSummary Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class NicSummary implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NicSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'paymentDate' => '\DateTime',
        'niTable' => 'string',
        'asDirector' => 'bool',
        'grossEarningsForNics' => 'float',
        'earningsAtLel' => 'float',
        'earningsAboveLelToPt' => 'float',
        'earningsAbovePtToSt' => 'float',
        'earningsAbovePtToUap' => 'float',
        'earningsAboveStToUel' => 'float',
        'earningsAboveStToFust' => 'float',
        'earningsAboveFustToUel' => 'float',
        'earningsAboveUapToUel' => 'float',
        'earningsAboveUel' => 'float',
        'employeeNics' => 'float',
        'employeeNiRebate' => 'float',
        'employerNics' => 'float',
        'employerNiRebate' => 'float',
        'hasValues' => 'bool',
        'id' => 'string',
        'isNiYtdOverride' => 'bool',
        'childId' => 'string',
        'employee' => '\SynergiTech\Staffology\Model\Item'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'taxYear' => null,
        'paymentDate' => 'date',
        'niTable' => null,
        'asDirector' => null,
        'grossEarningsForNics' => 'double',
        'earningsAtLel' => 'double',
        'earningsAboveLelToPt' => 'double',
        'earningsAbovePtToSt' => 'double',
        'earningsAbovePtToUap' => 'double',
        'earningsAboveStToUel' => 'double',
        'earningsAboveStToFust' => 'double',
        'earningsAboveFustToUel' => 'double',
        'earningsAboveUapToUel' => 'double',
        'earningsAboveUel' => 'double',
        'employeeNics' => 'double',
        'employeeNiRebate' => 'double',
        'employerNics' => 'double',
        'employerNiRebate' => 'double',
        'hasValues' => null,
        'id' => 'uuid',
        'isNiYtdOverride' => null,
        'childId' => 'uuid',
        'employee' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'taxYear' => false,
        'paymentDate' => false,
        'niTable' => false,
        'asDirector' => false,
        'grossEarningsForNics' => false,
        'earningsAtLel' => false,
        'earningsAboveLelToPt' => false,
        'earningsAbovePtToSt' => false,
        'earningsAbovePtToUap' => false,
        'earningsAboveStToUel' => false,
        'earningsAboveStToFust' => false,
        'earningsAboveFustToUel' => false,
        'earningsAboveUapToUel' => false,
        'earningsAboveUel' => false,
        'employeeNics' => false,
        'employeeNiRebate' => false,
        'employerNics' => false,
        'employerNiRebate' => false,
        'hasValues' => false,
        'id' => false,
        'isNiYtdOverride' => false,
        'childId' => false,
        'employee' => false
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
        'taxYear' => 'taxYear',
        'paymentDate' => 'paymentDate',
        'niTable' => 'niTable',
        'asDirector' => 'asDirector',
        'grossEarningsForNics' => 'grossEarningsForNics',
        'earningsAtLel' => 'earningsAtLel',
        'earningsAboveLelToPt' => 'earningsAboveLelToPt',
        'earningsAbovePtToSt' => 'earningsAbovePtToSt',
        'earningsAbovePtToUap' => 'earningsAbovePtToUap',
        'earningsAboveStToUel' => 'earningsAboveStToUel',
        'earningsAboveStToFust' => 'earningsAboveStToFust',
        'earningsAboveFustToUel' => 'earningsAboveFustToUel',
        'earningsAboveUapToUel' => 'earningsAboveUapToUel',
        'earningsAboveUel' => 'earningsAboveUel',
        'employeeNics' => 'employeeNics',
        'employeeNiRebate' => 'employeeNiRebate',
        'employerNics' => 'employerNics',
        'employerNiRebate' => 'employerNiRebate',
        'hasValues' => 'hasValues',
        'id' => 'id',
        'isNiYtdOverride' => 'isNiYtdOverride',
        'childId' => 'childId',
        'employee' => 'employee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'taxYear' => 'setTaxYear',
        'paymentDate' => 'setPaymentDate',
        'niTable' => 'setNiTable',
        'asDirector' => 'setAsDirector',
        'grossEarningsForNics' => 'setGrossEarningsForNics',
        'earningsAtLel' => 'setEarningsAtLel',
        'earningsAboveLelToPt' => 'setEarningsAboveLelToPt',
        'earningsAbovePtToSt' => 'setEarningsAbovePtToSt',
        'earningsAbovePtToUap' => 'setEarningsAbovePtToUap',
        'earningsAboveStToUel' => 'setEarningsAboveStToUel',
        'earningsAboveStToFust' => 'setEarningsAboveStToFust',
        'earningsAboveFustToUel' => 'setEarningsAboveFustToUel',
        'earningsAboveUapToUel' => 'setEarningsAboveUapToUel',
        'earningsAboveUel' => 'setEarningsAboveUel',
        'employeeNics' => 'setEmployeeNics',
        'employeeNiRebate' => 'setEmployeeNiRebate',
        'employerNics' => 'setEmployerNics',
        'employerNiRebate' => 'setEmployerNiRebate',
        'hasValues' => 'setHasValues',
        'id' => 'setId',
        'isNiYtdOverride' => 'setIsNiYtdOverride',
        'childId' => 'setChildId',
        'employee' => 'setEmployee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'taxYear' => 'getTaxYear',
        'paymentDate' => 'getPaymentDate',
        'niTable' => 'getNiTable',
        'asDirector' => 'getAsDirector',
        'grossEarningsForNics' => 'getGrossEarningsForNics',
        'earningsAtLel' => 'getEarningsAtLel',
        'earningsAboveLelToPt' => 'getEarningsAboveLelToPt',
        'earningsAbovePtToSt' => 'getEarningsAbovePtToSt',
        'earningsAbovePtToUap' => 'getEarningsAbovePtToUap',
        'earningsAboveStToUel' => 'getEarningsAboveStToUel',
        'earningsAboveStToFust' => 'getEarningsAboveStToFust',
        'earningsAboveFustToUel' => 'getEarningsAboveFustToUel',
        'earningsAboveUapToUel' => 'getEarningsAboveUapToUel',
        'earningsAboveUel' => 'getEarningsAboveUel',
        'employeeNics' => 'getEmployeeNics',
        'employeeNiRebate' => 'getEmployeeNiRebate',
        'employerNics' => 'getEmployerNics',
        'employerNiRebate' => 'getEmployerNiRebate',
        'hasValues' => 'getHasValues',
        'id' => 'getId',
        'isNiYtdOverride' => 'getIsNiYtdOverride',
        'childId' => 'getChildId',
        'employee' => 'getEmployee'
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('paymentDate', $data ?? [], null);
        $this->setIfExists('niTable', $data ?? [], null);
        $this->setIfExists('asDirector', $data ?? [], null);
        $this->setIfExists('grossEarningsForNics', $data ?? [], null);
        $this->setIfExists('earningsAtLel', $data ?? [], null);
        $this->setIfExists('earningsAboveLelToPt', $data ?? [], null);
        $this->setIfExists('earningsAbovePtToSt', $data ?? [], null);
        $this->setIfExists('earningsAbovePtToUap', $data ?? [], null);
        $this->setIfExists('earningsAboveStToUel', $data ?? [], null);
        $this->setIfExists('earningsAboveStToFust', $data ?? [], null);
        $this->setIfExists('earningsAboveFustToUel', $data ?? [], null);
        $this->setIfExists('earningsAboveUapToUel', $data ?? [], null);
        $this->setIfExists('earningsAboveUel', $data ?? [], null);
        $this->setIfExists('employeeNics', $data ?? [], null);
        $this->setIfExists('employeeNiRebate', $data ?? [], null);
        $this->setIfExists('employerNics', $data ?? [], null);
        $this->setIfExists('employerNiRebate', $data ?? [], null);
        $this->setIfExists('hasValues', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('isNiYtdOverride', $data ?? [], null);
        $this->setIfExists('childId', $data ?? [], null);
        $this->setIfExists('employee', $data ?? [], null);
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
     * Gets taxYear
     *
     * @return \SynergiTech\Staffology\Model\TaxYear|null
     */
    public function getTaxYear(): ?\SynergiTech\Staffology\Model\TaxYear
    {
        return $this->container['taxYear'];
    }

    /**
     * Sets taxYear
     *
     * @param \SynergiTech\Staffology\Model\TaxYear|null $taxYear taxYear
     *
     * @return $this
     */
    public function setTaxYear(?\SynergiTech\Staffology\Model\TaxYear $taxYear): static
    {
        if (is_null($taxYear)) {
            throw new InvalidArgumentException('non-nullable taxYear cannot be null');
        }
        $this->container['taxYear'] = $taxYear;

        return $this;
    }

    /**
     * Gets paymentDate
     *
     * @return \DateTime|null
     */
    public function getPaymentDate(): ?\DateTime
    {
        return $this->container['paymentDate'];
    }

    /**
     * Sets paymentDate
     *
     * @param \DateTime|null $paymentDate paymentDate
     *
     * @return $this
     */
    public function setPaymentDate(?\DateTime $paymentDate): static
    {
        if (is_null($paymentDate)) {
            throw new InvalidArgumentException('non-nullable paymentDate cannot be null');
        }
        $this->container['paymentDate'] = $paymentDate;

        return $this;
    }

    /**
     * Gets niTable
     *
     * @return string|null
     */
    public function getNiTable(): ?string
    {
        return $this->container['niTable'];
    }

    /**
     * Sets niTable
     *
     * @param string|null $niTable niTable
     *
     * @return $this
     */
    public function setNiTable(?string $niTable): static
    {
        if (is_null($niTable)) {
            throw new InvalidArgumentException('non-nullable niTable cannot be null');
        }
        $this->container['niTable'] = $niTable;

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
     * @param bool|null $asDirector asDirector
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
     * Gets grossEarningsForNics
     *
     * @return float|null
     */
    public function getGrossEarningsForNics(): ?float
    {
        return $this->container['grossEarningsForNics'];
    }

    /**
     * Sets grossEarningsForNics
     *
     * @param float|null $grossEarningsForNics grossEarningsForNics
     *
     * @return $this
     */
    public function setGrossEarningsForNics(?float $grossEarningsForNics): static
    {
        if (is_null($grossEarningsForNics)) {
            throw new InvalidArgumentException('non-nullable grossEarningsForNics cannot be null');
        }
        $this->container['grossEarningsForNics'] = $grossEarningsForNics;

        return $this;
    }

    /**
     * Gets earningsAtLel
     *
     * @return float|null
     */
    public function getEarningsAtLel(): ?float
    {
        return $this->container['earningsAtLel'];
    }

    /**
     * Sets earningsAtLel
     *
     * @param float|null $earningsAtLel earningsAtLel
     *
     * @return $this
     */
    public function setEarningsAtLel(?float $earningsAtLel): static
    {
        if (is_null($earningsAtLel)) {
            throw new InvalidArgumentException('non-nullable earningsAtLel cannot be null');
        }
        $this->container['earningsAtLel'] = $earningsAtLel;

        return $this;
    }

    /**
     * Gets earningsAboveLelToPt
     *
     * @return float|null
     */
    public function getEarningsAboveLelToPt(): ?float
    {
        return $this->container['earningsAboveLelToPt'];
    }

    /**
     * Sets earningsAboveLelToPt
     *
     * @param float|null $earningsAboveLelToPt earningsAboveLelToPt
     *
     * @return $this
     */
    public function setEarningsAboveLelToPt(?float $earningsAboveLelToPt): static
    {
        if (is_null($earningsAboveLelToPt)) {
            throw new InvalidArgumentException('non-nullable earningsAboveLelToPt cannot be null');
        }
        $this->container['earningsAboveLelToPt'] = $earningsAboveLelToPt;

        return $this;
    }

    /**
     * Gets earningsAbovePtToSt
     *
     * @return float|null
     */
    public function getEarningsAbovePtToSt(): ?float
    {
        return $this->container['earningsAbovePtToSt'];
    }

    /**
     * Sets earningsAbovePtToSt
     *
     * @param float|null $earningsAbovePtToSt earningsAbovePtToSt
     *
     * @return $this
     */
    public function setEarningsAbovePtToSt(?float $earningsAbovePtToSt): static
    {
        if (is_null($earningsAbovePtToSt)) {
            throw new InvalidArgumentException('non-nullable earningsAbovePtToSt cannot be null');
        }
        $this->container['earningsAbovePtToSt'] = $earningsAbovePtToSt;

        return $this;
    }

    /**
     * Gets earningsAbovePtToUap
     *
     * @return float|null
     */
    public function getEarningsAbovePtToUap(): ?float
    {
        return $this->container['earningsAbovePtToUap'];
    }

    /**
     * Sets earningsAbovePtToUap
     *
     * @param float|null $earningsAbovePtToUap earningsAbovePtToUap
     *
     * @return $this
     */
    public function setEarningsAbovePtToUap(?float $earningsAbovePtToUap): static
    {
        if (is_null($earningsAbovePtToUap)) {
            throw new InvalidArgumentException('non-nullable earningsAbovePtToUap cannot be null');
        }
        $this->container['earningsAbovePtToUap'] = $earningsAbovePtToUap;

        return $this;
    }

    /**
     * Gets earningsAboveStToUel
     *
     * @return float|null
     */
    public function getEarningsAboveStToUel(): ?float
    {
        return $this->container['earningsAboveStToUel'];
    }

    /**
     * Sets earningsAboveStToUel
     *
     * @param float|null $earningsAboveStToUel earningsAboveStToUel
     *
     * @return $this
     */
    public function setEarningsAboveStToUel(?float $earningsAboveStToUel): static
    {
        if (is_null($earningsAboveStToUel)) {
            throw new InvalidArgumentException('non-nullable earningsAboveStToUel cannot be null');
        }
        $this->container['earningsAboveStToUel'] = $earningsAboveStToUel;

        return $this;
    }

    /**
     * Gets earningsAboveStToFust
     *
     * @return float|null
     */
    public function getEarningsAboveStToFust(): ?float
    {
        return $this->container['earningsAboveStToFust'];
    }

    /**
     * Sets earningsAboveStToFust
     *
     * @param float|null $earningsAboveStToFust earningsAboveStToFust
     *
     * @return $this
     */
    public function setEarningsAboveStToFust(?float $earningsAboveStToFust): static
    {
        if (is_null($earningsAboveStToFust)) {
            throw new InvalidArgumentException('non-nullable earningsAboveStToFust cannot be null');
        }
        $this->container['earningsAboveStToFust'] = $earningsAboveStToFust;

        return $this;
    }

    /**
     * Gets earningsAboveFustToUel
     *
     * @return float|null
     */
    public function getEarningsAboveFustToUel(): ?float
    {
        return $this->container['earningsAboveFustToUel'];
    }

    /**
     * Sets earningsAboveFustToUel
     *
     * @param float|null $earningsAboveFustToUel earningsAboveFustToUel
     *
     * @return $this
     */
    public function setEarningsAboveFustToUel(?float $earningsAboveFustToUel): static
    {
        if (is_null($earningsAboveFustToUel)) {
            throw new InvalidArgumentException('non-nullable earningsAboveFustToUel cannot be null');
        }
        $this->container['earningsAboveFustToUel'] = $earningsAboveFustToUel;

        return $this;
    }

    /**
     * Gets earningsAboveUapToUel
     *
     * @return float|null
     */
    public function getEarningsAboveUapToUel(): ?float
    {
        return $this->container['earningsAboveUapToUel'];
    }

    /**
     * Sets earningsAboveUapToUel
     *
     * @param float|null $earningsAboveUapToUel earningsAboveUapToUel
     *
     * @return $this
     */
    public function setEarningsAboveUapToUel(?float $earningsAboveUapToUel): static
    {
        if (is_null($earningsAboveUapToUel)) {
            throw new InvalidArgumentException('non-nullable earningsAboveUapToUel cannot be null');
        }
        $this->container['earningsAboveUapToUel'] = $earningsAboveUapToUel;

        return $this;
    }

    /**
     * Gets earningsAboveUel
     *
     * @return float|null
     */
    public function getEarningsAboveUel(): ?float
    {
        return $this->container['earningsAboveUel'];
    }

    /**
     * Sets earningsAboveUel
     *
     * @param float|null $earningsAboveUel earningsAboveUel
     *
     * @return $this
     */
    public function setEarningsAboveUel(?float $earningsAboveUel): static
    {
        if (is_null($earningsAboveUel)) {
            throw new InvalidArgumentException('non-nullable earningsAboveUel cannot be null');
        }
        $this->container['earningsAboveUel'] = $earningsAboveUel;

        return $this;
    }

    /**
     * Gets employeeNics
     *
     * @return float|null
     */
    public function getEmployeeNics(): ?float
    {
        return $this->container['employeeNics'];
    }

    /**
     * Sets employeeNics
     *
     * @param float|null $employeeNics employeeNics
     *
     * @return $this
     */
    public function setEmployeeNics(?float $employeeNics): static
    {
        if (is_null($employeeNics)) {
            throw new InvalidArgumentException('non-nullable employeeNics cannot be null');
        }
        $this->container['employeeNics'] = $employeeNics;

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
     * @param float|null $employeeNiRebate employeeNiRebate
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
     * Gets employerNics
     *
     * @return float|null
     */
    public function getEmployerNics(): ?float
    {
        return $this->container['employerNics'];
    }

    /**
     * Sets employerNics
     *
     * @param float|null $employerNics employerNics
     *
     * @return $this
     */
    public function setEmployerNics(?float $employerNics): static
    {
        if (is_null($employerNics)) {
            throw new InvalidArgumentException('non-nullable employerNics cannot be null');
        }
        $this->container['employerNics'] = $employerNics;

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
     * @param float|null $employerNiRebate employerNiRebate
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
     * Gets hasValues
     *
     * @return bool|null
     */
    public function getHasValues(): ?bool
    {
        return $this->container['hasValues'];
    }

    /**
     * Sets hasValues
     *
     * @param bool|null $hasValues hasValues
     *
     * @return $this
     */
    public function setHasValues(?bool $hasValues): static
    {
        if (is_null($hasValues)) {
            throw new InvalidArgumentException('non-nullable hasValues cannot be null');
        }
        $this->container['hasValues'] = $hasValues;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isNiYtdOverride
     *
     * @return bool|null
     */
    public function getIsNiYtdOverride(): ?bool
    {
        return $this->container['isNiYtdOverride'];
    }

    /**
     * Sets isNiYtdOverride
     *
     * @param bool|null $isNiYtdOverride isNiYtdOverride
     *
     * @return $this
     */
    public function setIsNiYtdOverride(?bool $isNiYtdOverride): static
    {
        if (is_null($isNiYtdOverride)) {
            throw new InvalidArgumentException('non-nullable isNiYtdOverride cannot be null');
        }
        $this->container['isNiYtdOverride'] = $isNiYtdOverride;

        return $this;
    }

    /**
     * Gets childId
     *
     * @return string|null
     */
    public function getChildId(): ?string
    {
        return $this->container['childId'];
    }

    /**
     * Sets childId
     *
     * @param string|null $childId This is nothing but the UniqueId of the model.
     *
     * @return $this
     */
    public function setChildId(?string $childId): static
    {
        if (is_null($childId)) {
            throw new InvalidArgumentException('non-nullable childId cannot be null');
        }
        $this->container['childId'] = $childId;

        return $this;
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


