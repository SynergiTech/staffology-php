<?php
/**
 * ContractGrossToNetReportRequest
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
 * ContractGrossToNetReportRequest Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractGrossToNetReportRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.GrossToNetReportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payPeriod' => '\SynergiTech\Staffology\Model\PayPeriods',
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'fromPeriod' => 'int',
        'toPeriod' => 'int',
        'reportFormat' => '\SynergiTech\Staffology\Model\ReportFormat',
        'sortBy' => '\SynergiTech\Staffology\Model\ReportSortBy',
        'sortDescending' => 'bool',
        'ordinal' => 'int',
        'forCis' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payPeriod' => null,
        'taxYear' => null,
        'fromPeriod' => 'int32',
        'toPeriod' => 'int32',
        'reportFormat' => null,
        'sortBy' => null,
        'sortDescending' => null,
        'ordinal' => 'int32',
        'forCis' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payPeriod' => false,
        'taxYear' => false,
        'fromPeriod' => false,
        'toPeriod' => false,
        'reportFormat' => false,
        'sortBy' => false,
        'sortDescending' => false,
        'ordinal' => false,
        'forCis' => false
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
        'payPeriod' => 'payPeriod',
        'taxYear' => 'taxYear',
        'fromPeriod' => 'fromPeriod',
        'toPeriod' => 'toPeriod',
        'reportFormat' => 'reportFormat',
        'sortBy' => 'sortBy',
        'sortDescending' => 'sortDescending',
        'ordinal' => 'ordinal',
        'forCis' => 'forCis'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payPeriod' => 'setPayPeriod',
        'taxYear' => 'setTaxYear',
        'fromPeriod' => 'setFromPeriod',
        'toPeriod' => 'setToPeriod',
        'reportFormat' => 'setReportFormat',
        'sortBy' => 'setSortBy',
        'sortDescending' => 'setSortDescending',
        'ordinal' => 'setOrdinal',
        'forCis' => 'setForCis'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payPeriod' => 'getPayPeriod',
        'taxYear' => 'getTaxYear',
        'fromPeriod' => 'getFromPeriod',
        'toPeriod' => 'getToPeriod',
        'reportFormat' => 'getReportFormat',
        'sortBy' => 'getSortBy',
        'sortDescending' => 'getSortDescending',
        'ordinal' => 'getOrdinal',
        'forCis' => 'getForCis'
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
        $this->setIfExists('payPeriod', $data ?? [], null);
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('fromPeriod', $data ?? [], null);
        $this->setIfExists('toPeriod', $data ?? [], null);
        $this->setIfExists('reportFormat', $data ?? [], null);
        $this->setIfExists('sortBy', $data ?? [], null);
        $this->setIfExists('sortDescending', $data ?? [], null);
        $this->setIfExists('ordinal', $data ?? [], null);
        $this->setIfExists('forCis', $data ?? [], null);
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
     * Gets payPeriod
     *
     * @return \SynergiTech\Staffology\Model\PayPeriods|null
     */
    public function getPayPeriod(): ?\SynergiTech\Staffology\Model\PayPeriods
    {
        return $this->container['payPeriod'];
    }

    /**
     * Sets payPeriod
     *
     * @param \SynergiTech\Staffology\Model\PayPeriods|null $payPeriod payPeriod
     *
     * @return $this
     */
    public function setPayPeriod(?\SynergiTech\Staffology\Model\PayPeriods $payPeriod): static
    {
        if (is_null($payPeriod)) {
            throw new InvalidArgumentException('non-nullable payPeriod cannot be null');
        }
        $this->container['payPeriod'] = $payPeriod;

        return $this;
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
     * Gets fromPeriod
     *
     * @return int|null
     */
    public function getFromPeriod(): ?int
    {
        return $this->container['fromPeriod'];
    }

    /**
     * Sets fromPeriod
     *
     * @param int|null $fromPeriod The start Tax Month of report data.
     *
     * @return $this
     */
    public function setFromPeriod(?int $fromPeriod): static
    {
        if (is_null($fromPeriod)) {
            throw new InvalidArgumentException('non-nullable fromPeriod cannot be null');
        }
        $this->container['fromPeriod'] = $fromPeriod;

        return $this;
    }

    /**
     * Gets toPeriod
     *
     * @return int|null
     */
    public function getToPeriod(): ?int
    {
        return $this->container['toPeriod'];
    }

    /**
     * Sets toPeriod
     *
     * @param int|null $toPeriod The end Tax Month of report data.
     *
     * @return $this
     */
    public function setToPeriod(?int $toPeriod): static
    {
        if (is_null($toPeriod)) {
            throw new InvalidArgumentException('non-nullable toPeriod cannot be null');
        }
        $this->container['toPeriod'] = $toPeriod;

        return $this;
    }

    /**
     * Gets reportFormat
     *
     * @return \SynergiTech\Staffology\Model\ReportFormat|null
     */
    public function getReportFormat(): ?\SynergiTech\Staffology\Model\ReportFormat
    {
        return $this->container['reportFormat'];
    }

    /**
     * Sets reportFormat
     *
     * @param \SynergiTech\Staffology\Model\ReportFormat|null $reportFormat reportFormat
     *
     * @return $this
     */
    public function setReportFormat(?\SynergiTech\Staffology\Model\ReportFormat $reportFormat): static
    {
        if (is_null($reportFormat)) {
            throw new InvalidArgumentException('non-nullable reportFormat cannot be null');
        }
        $this->container['reportFormat'] = $reportFormat;

        return $this;
    }

    /**
     * Gets sortBy
     *
     * @return \SynergiTech\Staffology\Model\ReportSortBy|null
     */
    public function getSortBy(): ?\SynergiTech\Staffology\Model\ReportSortBy
    {
        return $this->container['sortBy'];
    }

    /**
     * Sets sortBy
     *
     * @param \SynergiTech\Staffology\Model\ReportSortBy|null $sortBy sortBy
     *
     * @return $this
     */
    public function setSortBy(?\SynergiTech\Staffology\Model\ReportSortBy $sortBy): static
    {
        if (is_null($sortBy)) {
            throw new InvalidArgumentException('non-nullable sortBy cannot be null');
        }
        $this->container['sortBy'] = $sortBy;

        return $this;
    }

    /**
     * Gets sortDescending
     *
     * @return bool|null
     */
    public function getSortDescending(): ?bool
    {
        return $this->container['sortDescending'];
    }

    /**
     * Sets sortDescending
     *
     * @param bool|null $sortDescending Defines whether to sort the data in descending order. Defaults to false.
     *
     * @return $this
     */
    public function setSortDescending(?bool $sortDescending): static
    {
        if (is_null($sortDescending)) {
            throw new InvalidArgumentException('non-nullable sortDescending cannot be null');
        }
        $this->container['sortDescending'] = $sortDescending;

        return $this;
    }

    /**
     * Gets ordinal
     *
     * @return int|null
     */
    public function getOrdinal(): ?int
    {
        return $this->container['ordinal'];
    }

    /**
     * Sets ordinal
     *
     * @param int|null $ordinal Indicates whether this uses first, second, third (etc.) PaySchedule for this PayPeriod.
     *
     * @return $this
     */
    public function setOrdinal(?int $ordinal): static
    {
        if (is_null($ordinal)) {
            throw new InvalidArgumentException('non-nullable ordinal cannot be null');
        }
        $this->container['ordinal'] = $ordinal;

        return $this;
    }

    /**
     * Gets forCis
     *
     * @return bool|null
     */
    public function getForCis(): ?bool
    {
        return $this->container['forCis'];
    }

    /**
     * Sets forCis
     *
     * @param bool|null $forCis If true then CIS Subcontractors are reported on.
     *
     * @return $this
     */
    public function setForCis(?bool $forCis): static
    {
        if (is_null($forCis)) {
            throw new InvalidArgumentException('non-nullable forCis cannot be null');
        }
        $this->container['forCis'] = $forCis;

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

