<?php
/**
 * TeachersPensionEoyLineItem
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
 * TeachersPensionEoyLineItem Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TeachersPensionEoyLineItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TeachersPensionEoyLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'tier' => 'float',
        'percentageRate' => 'float',
        'contributorySalary' => 'float',
        'teachersContributions' => 'float',
        'employersContributions' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'tier' => 'double',
        'percentageRate' => 'double',
        'contributorySalary' => 'double',
        'teachersContributions' => 'double',
        'employersContributions' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'tier' => false,
        'percentageRate' => false,
        'contributorySalary' => false,
        'teachersContributions' => false,
        'employersContributions' => false
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
        'tier' => 'tier',
        'percentageRate' => 'percentageRate',
        'contributorySalary' => 'contributorySalary',
        'teachersContributions' => 'teachersContributions',
        'employersContributions' => 'employersContributions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'tier' => 'setTier',
        'percentageRate' => 'setPercentageRate',
        'contributorySalary' => 'setContributorySalary',
        'teachersContributions' => 'setTeachersContributions',
        'employersContributions' => 'setEmployersContributions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'tier' => 'getTier',
        'percentageRate' => 'getPercentageRate',
        'contributorySalary' => 'getContributorySalary',
        'teachersContributions' => 'getTeachersContributions',
        'employersContributions' => 'getEmployersContributions'
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
        $this->setIfExists('tier', $data ?? [], null);
        $this->setIfExists('percentageRate', $data ?? [], null);
        $this->setIfExists('contributorySalary', $data ?? [], null);
        $this->setIfExists('teachersContributions', $data ?? [], null);
        $this->setIfExists('employersContributions', $data ?? [], null);
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
     * Gets tier
     *
     * @return float|null
     */
    public function getTier(): ?float
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param float|null $tier tier
     *
     * @return $this
     */
    public function setTier(?float $tier): static
    {
        if (is_null($tier)) {
            throw new InvalidArgumentException('non-nullable tier cannot be null');
        }
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets percentageRate
     *
     * @return float|null
     */
    public function getPercentageRate(): ?float
    {
        return $this->container['percentageRate'];
    }

    /**
     * Sets percentageRate
     *
     * @param float|null $percentageRate percentageRate
     *
     * @return $this
     */
    public function setPercentageRate(?float $percentageRate): static
    {
        if (is_null($percentageRate)) {
            throw new InvalidArgumentException('non-nullable percentageRate cannot be null');
        }
        $this->container['percentageRate'] = $percentageRate;

        return $this;
    }

    /**
     * Gets contributorySalary
     *
     * @return float|null
     */
    public function getContributorySalary(): ?float
    {
        return $this->container['contributorySalary'];
    }

    /**
     * Sets contributorySalary
     *
     * @param float|null $contributorySalary contributorySalary
     *
     * @return $this
     */
    public function setContributorySalary(?float $contributorySalary): static
    {
        if (is_null($contributorySalary)) {
            throw new InvalidArgumentException('non-nullable contributorySalary cannot be null');
        }
        $this->container['contributorySalary'] = $contributorySalary;

        return $this;
    }

    /**
     * Gets teachersContributions
     *
     * @return float|null
     */
    public function getTeachersContributions(): ?float
    {
        return $this->container['teachersContributions'];
    }

    /**
     * Sets teachersContributions
     *
     * @param float|null $teachersContributions teachersContributions
     *
     * @return $this
     */
    public function setTeachersContributions(?float $teachersContributions): static
    {
        if (is_null($teachersContributions)) {
            throw new InvalidArgumentException('non-nullable teachersContributions cannot be null');
        }
        $this->container['teachersContributions'] = $teachersContributions;

        return $this;
    }

    /**
     * Gets employersContributions
     *
     * @return float|null
     */
    public function getEmployersContributions(): ?float
    {
        return $this->container['employersContributions'];
    }

    /**
     * Sets employersContributions
     *
     * @param float|null $employersContributions employersContributions
     *
     * @return $this
     */
    public function setEmployersContributions(?float $employersContributions): static
    {
        if (is_null($employersContributions)) {
            throw new InvalidArgumentException('non-nullable employersContributions cannot be null');
        }
        $this->container['employersContributions'] = $employersContributions;

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


