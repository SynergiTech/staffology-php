<?php
/**
 * PapdisEmployeeExit
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
 * PapdisEmployeeExit Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PapdisEmployeeExit implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PapdisEmployeeExit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'exitDate' => '\DateTime',
        'exitReasonCode' => 'int',
        'aeOptOutDate' => '\DateTime',
        'aeOptOutReference' => 'string',
        'reasonForLeaving' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'exitDate' => 'date',
        'exitReasonCode' => 'int32',
        'aeOptOutDate' => 'date',
        'aeOptOutReference' => null,
        'reasonForLeaving' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'exitDate' => true,
        'exitReasonCode' => true,
        'aeOptOutDate' => true,
        'aeOptOutReference' => true,
        'reasonForLeaving' => true
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
        'exitDate' => 'exitDate',
        'exitReasonCode' => 'exitReasonCode',
        'aeOptOutDate' => 'aeOptOutDate',
        'aeOptOutReference' => 'aeOptOutReference',
        'reasonForLeaving' => 'reasonForLeaving'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'exitDate' => 'setExitDate',
        'exitReasonCode' => 'setExitReasonCode',
        'aeOptOutDate' => 'setAeOptOutDate',
        'aeOptOutReference' => 'setAeOptOutReference',
        'reasonForLeaving' => 'setReasonForLeaving'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'exitDate' => 'getExitDate',
        'exitReasonCode' => 'getExitReasonCode',
        'aeOptOutDate' => 'getAeOptOutDate',
        'aeOptOutReference' => 'getAeOptOutReference',
        'reasonForLeaving' => 'getReasonForLeaving'
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
        $this->setIfExists('exitDate', $data ?? [], null);
        $this->setIfExists('exitReasonCode', $data ?? [], null);
        $this->setIfExists('aeOptOutDate', $data ?? [], null);
        $this->setIfExists('aeOptOutReference', $data ?? [], null);
        $this->setIfExists('reasonForLeaving', $data ?? [], null);
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
     * Gets exitDate
     *
     * @return \DateTime|null
     */
    public function getExitDate(): ?\DateTime
    {
        return $this->container['exitDate'];
    }

    /**
     * Sets exitDate
     *
     * @param \DateTime|null $exitDate [readonly]
     *
     * @return $this
     */
    public function setExitDate(?\DateTime $exitDate): static
    {
        if (is_null($exitDate)) {
            array_push($this->openAPINullablesSetToNull, 'exitDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exitDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exitDate'] = $exitDate;

        return $this;
    }

    /**
     * Gets exitReasonCode
     *
     * @return int|null
     */
    public function getExitReasonCode(): ?int
    {
        return $this->container['exitReasonCode'];
    }

    /**
     * Sets exitReasonCode
     *
     * @param int|null $exitReasonCode [readonly]
     *
     * @return $this
     */
    public function setExitReasonCode(?int $exitReasonCode): static
    {
        if (is_null($exitReasonCode)) {
            array_push($this->openAPINullablesSetToNull, 'exitReasonCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exitReasonCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exitReasonCode'] = $exitReasonCode;

        return $this;
    }

    /**
     * Gets aeOptOutDate
     *
     * @return \DateTime|null
     */
    public function getAeOptOutDate(): ?\DateTime
    {
        return $this->container['aeOptOutDate'];
    }

    /**
     * Sets aeOptOutDate
     *
     * @param \DateTime|null $aeOptOutDate [readonly]
     *
     * @return $this
     */
    public function setAeOptOutDate(?\DateTime $aeOptOutDate): static
    {
        if (is_null($aeOptOutDate)) {
            array_push($this->openAPINullablesSetToNull, 'aeOptOutDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aeOptOutDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aeOptOutDate'] = $aeOptOutDate;

        return $this;
    }

    /**
     * Gets aeOptOutReference
     *
     * @return string|null
     */
    public function getAeOptOutReference(): ?string
    {
        return $this->container['aeOptOutReference'];
    }

    /**
     * Sets aeOptOutReference
     *
     * @param string|null $aeOptOutReference [readonly]
     *
     * @return $this
     */
    public function setAeOptOutReference(?string $aeOptOutReference): static
    {
        if (is_null($aeOptOutReference)) {
            array_push($this->openAPINullablesSetToNull, 'aeOptOutReference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aeOptOutReference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aeOptOutReference'] = $aeOptOutReference;

        return $this;
    }

    /**
     * Gets reasonForLeaving
     *
     * @return string|null
     */
    public function getReasonForLeaving(): ?string
    {
        return $this->container['reasonForLeaving'];
    }

    /**
     * Sets reasonForLeaving
     *
     * @param string|null $reasonForLeaving [readonly]
     *
     * @return $this
     */
    public function setReasonForLeaving(?string $reasonForLeaving): static
    {
        if (is_null($reasonForLeaving)) {
            array_push($this->openAPINullablesSetToNull, 'reasonForLeaving');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reasonForLeaving', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reasonForLeaving'] = $reasonForLeaving;

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

