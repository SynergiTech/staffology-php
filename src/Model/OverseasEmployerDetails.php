<?php
/**
 * OverseasEmployerDetails
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
 * OverseasEmployerDetails Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class OverseasEmployerDetails implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OverseasEmployerDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'overseasEmployer' => 'bool',
        'overseasSecondmentStatus' => '\SynergiTech\Staffology\Model\OverseasSecondmentStatus',
        'eeaCitizen' => 'bool',
        'epm6Scheme' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'overseasEmployer' => null,
        'overseasSecondmentStatus' => null,
        'eeaCitizen' => null,
        'epm6Scheme' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'overseasEmployer' => false,
        'overseasSecondmentStatus' => false,
        'eeaCitizen' => false,
        'epm6Scheme' => false
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
        'overseasEmployer' => 'overseasEmployer',
        'overseasSecondmentStatus' => 'overseasSecondmentStatus',
        'eeaCitizen' => 'eeaCitizen',
        'epm6Scheme' => 'epm6Scheme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'overseasEmployer' => 'setOverseasEmployer',
        'overseasSecondmentStatus' => 'setOverseasSecondmentStatus',
        'eeaCitizen' => 'setEeaCitizen',
        'epm6Scheme' => 'setEpm6Scheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'overseasEmployer' => 'getOverseasEmployer',
        'overseasSecondmentStatus' => 'getOverseasSecondmentStatus',
        'eeaCitizen' => 'getEeaCitizen',
        'epm6Scheme' => 'getEpm6Scheme'
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
        $this->setIfExists('overseasEmployer', $data ?? [], null);
        $this->setIfExists('overseasSecondmentStatus', $data ?? [], null);
        $this->setIfExists('eeaCitizen', $data ?? [], null);
        $this->setIfExists('epm6Scheme', $data ?? [], null);
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
     * Gets overseasEmployer
     *
     * @return bool|null
     */
    public function getOverseasEmployer(): ?bool
    {
        return $this->container['overseasEmployer'];
    }

    /**
     * Sets overseasEmployer
     *
     * @param bool|null $overseasEmployer overseasEmployer
     *
     * @return $this
     */
    public function setOverseasEmployer(?bool $overseasEmployer): static
    {
        if (is_null($overseasEmployer)) {
            throw new InvalidArgumentException('non-nullable overseasEmployer cannot be null');
        }
        $this->container['overseasEmployer'] = $overseasEmployer;

        return $this;
    }

    /**
     * Gets overseasSecondmentStatus
     *
     * @return \SynergiTech\Staffology\Model\OverseasSecondmentStatus|null
     */
    public function getOverseasSecondmentStatus(): ?\SynergiTech\Staffology\Model\OverseasSecondmentStatus
    {
        return $this->container['overseasSecondmentStatus'];
    }

    /**
     * Sets overseasSecondmentStatus
     *
     * @param \SynergiTech\Staffology\Model\OverseasSecondmentStatus|null $overseasSecondmentStatus overseasSecondmentStatus
     *
     * @return $this
     */
    public function setOverseasSecondmentStatus(?\SynergiTech\Staffology\Model\OverseasSecondmentStatus $overseasSecondmentStatus): static
    {
        if (is_null($overseasSecondmentStatus)) {
            throw new InvalidArgumentException('non-nullable overseasSecondmentStatus cannot be null');
        }
        $this->container['overseasSecondmentStatus'] = $overseasSecondmentStatus;

        return $this;
    }

    /**
     * Gets eeaCitizen
     *
     * @return bool|null
     */
    public function getEeaCitizen(): ?bool
    {
        return $this->container['eeaCitizen'];
    }

    /**
     * Sets eeaCitizen
     *
     * @param bool|null $eeaCitizen eeaCitizen
     *
     * @return $this
     */
    public function setEeaCitizen(?bool $eeaCitizen): static
    {
        if (is_null($eeaCitizen)) {
            throw new InvalidArgumentException('non-nullable eeaCitizen cannot be null');
        }
        $this->container['eeaCitizen'] = $eeaCitizen;

        return $this;
    }

    /**
     * Gets epm6Scheme
     *
     * @return bool|null
     */
    public function getEpm6Scheme(): ?bool
    {
        return $this->container['epm6Scheme'];
    }

    /**
     * Sets epm6Scheme
     *
     * @param bool|null $epm6Scheme epm6Scheme
     *
     * @return $this
     */
    public function setEpm6Scheme(?bool $epm6Scheme): static
    {
        if (is_null($epm6Scheme)) {
            throw new InvalidArgumentException('non-nullable epm6Scheme cannot be null');
        }
        $this->container['epm6Scheme'] = $epm6Scheme;

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


