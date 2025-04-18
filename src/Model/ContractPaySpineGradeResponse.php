<?php
/**
 * ContractPaySpineGradeResponse
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
 * ContractPaySpineGradeResponse Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractPaySpineGradeResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.PaySpineGradeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'lowerPointUniqueId' => 'string',
        'upperPointUniqueId' => 'string',
        'upperPointUseMax' => 'bool',
        'effectiveDate' => '\DateTime',
        'uniqueId' => 'string',
        'holidayEntitlement' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'lowerPointUniqueId' => 'uuid',
        'upperPointUniqueId' => 'uuid',
        'upperPointUseMax' => null,
        'effectiveDate' => 'date',
        'uniqueId' => 'uuid',
        'holidayEntitlement' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => true,
        'lowerPointUniqueId' => false,
        'upperPointUniqueId' => false,
        'upperPointUseMax' => false,
        'effectiveDate' => false,
        'uniqueId' => false,
        'holidayEntitlement' => false
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
        'name' => 'name',
        'lowerPointUniqueId' => 'lowerPointUniqueId',
        'upperPointUniqueId' => 'upperPointUniqueId',
        'upperPointUseMax' => 'upperPointUseMax',
        'effectiveDate' => 'effectiveDate',
        'uniqueId' => 'uniqueId',
        'holidayEntitlement' => 'holidayEntitlement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'lowerPointUniqueId' => 'setLowerPointUniqueId',
        'upperPointUniqueId' => 'setUpperPointUniqueId',
        'upperPointUseMax' => 'setUpperPointUseMax',
        'effectiveDate' => 'setEffectiveDate',
        'uniqueId' => 'setUniqueId',
        'holidayEntitlement' => 'setHolidayEntitlement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'lowerPointUniqueId' => 'getLowerPointUniqueId',
        'upperPointUniqueId' => 'getUpperPointUniqueId',
        'upperPointUseMax' => 'getUpperPointUseMax',
        'effectiveDate' => 'getEffectiveDate',
        'uniqueId' => 'getUniqueId',
        'holidayEntitlement' => 'getHolidayEntitlement'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('lowerPointUniqueId', $data ?? [], null);
        $this->setIfExists('upperPointUniqueId', $data ?? [], null);
        $this->setIfExists('upperPointUseMax', $data ?? [], null);
        $this->setIfExists('effectiveDate', $data ?? [], null);
        $this->setIfExists('uniqueId', $data ?? [], null);
        $this->setIfExists('holidayEntitlement', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Pay spine grade name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lowerPointUniqueId
     *
     * @return string|null
     */
    public function getLowerPointUniqueId(): ?string
    {
        return $this->container['lowerPointUniqueId'];
    }

    /**
     * Sets lowerPointUniqueId
     *
     * @param string|null $lowerPointUniqueId Id of lower spinal point used.
     *
     * @return $this
     */
    public function setLowerPointUniqueId(?string $lowerPointUniqueId): static
    {
        if (is_null($lowerPointUniqueId)) {
            throw new InvalidArgumentException('non-nullable lowerPointUniqueId cannot be null');
        }
        $this->container['lowerPointUniqueId'] = $lowerPointUniqueId;

        return $this;
    }

    /**
     * Gets upperPointUniqueId
     *
     * @return string|null
     */
    public function getUpperPointUniqueId(): ?string
    {
        return $this->container['upperPointUniqueId'];
    }

    /**
     * Sets upperPointUniqueId
     *
     * @param string|null $upperPointUniqueId Id of upper spinal point used.
     *
     * @return $this
     */
    public function setUpperPointUniqueId(?string $upperPointUniqueId): static
    {
        if (is_null($upperPointUniqueId)) {
            throw new InvalidArgumentException('non-nullable upperPointUniqueId cannot be null');
        }
        $this->container['upperPointUniqueId'] = $upperPointUniqueId;

        return $this;
    }

    /**
     * Gets upperPointUseMax
     *
     * @return bool|null
     */
    public function getUpperPointUseMax(): ?bool
    {
        return $this->container['upperPointUseMax'];
    }

    /**
     * Sets upperPointUseMax
     *
     * @param bool|null $upperPointUseMax Use the Alt Max Value of the Upper Point. (Default false)
     *
     * @return $this
     */
    public function setUpperPointUseMax(?bool $upperPointUseMax): static
    {
        if (is_null($upperPointUseMax)) {
            throw new InvalidArgumentException('non-nullable upperPointUseMax cannot be null');
        }
        $this->container['upperPointUseMax'] = $upperPointUseMax;

        return $this;
    }

    /**
     * Gets effectiveDate
     *
     * @return \DateTime|null
     */
    public function getEffectiveDate(): ?\DateTime
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     *
     * @param \DateTime|null $effectiveDate Date that this configuration is effective from.
     *
     * @return $this
     */
    public function setEffectiveDate(?\DateTime $effectiveDate): static
    {
        if (is_null($effectiveDate)) {
            throw new InvalidArgumentException('non-nullable effectiveDate cannot be null');
        }
        $this->container['effectiveDate'] = $effectiveDate;

        return $this;
    }

    /**
     * Gets uniqueId
     *
     * @return string|null
     */
    public function getUniqueId(): ?string
    {
        return $this->container['uniqueId'];
    }

    /**
     * Sets uniqueId
     *
     * @param string|null $uniqueId Pay spine grade Id
     *
     * @return $this
     */
    public function setUniqueId(?string $uniqueId): static
    {
        if (is_null($uniqueId)) {
            throw new InvalidArgumentException('non-nullable uniqueId cannot be null');
        }
        $this->container['uniqueId'] = $uniqueId;

        return $this;
    }

    /**
     * Gets holidayEntitlement
     *
     * @return float|null
     */
    public function getHolidayEntitlement(): ?float
    {
        return $this->container['holidayEntitlement'];
    }

    /**
     * Sets holidayEntitlement
     *
     * @param float|null $holidayEntitlement The number of holiday days entitled for this pay spine grade.
     *
     * @return $this
     */
    public function setHolidayEntitlement(?float $holidayEntitlement): static
    {
        if (is_null($holidayEntitlement)) {
            throw new InvalidArgumentException('non-nullable holidayEntitlement cannot be null');
        }
        $this->container['holidayEntitlement'] = $holidayEntitlement;

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


