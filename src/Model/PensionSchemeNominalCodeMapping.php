<?php
/**
 * PensionSchemeNominalCodeMapping
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
 * PensionSchemeNominalCodeMapping Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PensionSchemeNominalCodeMapping implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PensionSchemeNominalCodeMapping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'nominalCode' => 'string',
        'nominalName' => 'string',
        'journalNarrative' => 'string',
        'payCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'nominalCode' => null,
        'nominalName' => null,
        'journalNarrative' => null,
        'payCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'nominalCode' => true,
        'nominalName' => true,
        'journalNarrative' => true,
        'payCode' => true
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
        'nominalCode' => 'nominalCode',
        'nominalName' => 'nominalName',
        'journalNarrative' => 'journalNarrative',
        'payCode' => 'payCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'nominalCode' => 'setNominalCode',
        'nominalName' => 'setNominalName',
        'journalNarrative' => 'setJournalNarrative',
        'payCode' => 'setPayCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'nominalCode' => 'getNominalCode',
        'nominalName' => 'getNominalName',
        'journalNarrative' => 'getJournalNarrative',
        'payCode' => 'getPayCode'
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
        $this->setIfExists('nominalCode', $data ?? [], null);
        $this->setIfExists('nominalName', $data ?? [], null);
        $this->setIfExists('journalNarrative', $data ?? [], null);
        $this->setIfExists('payCode', $data ?? [], null);
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

        if (!is_null($this->container['nominalCode']) && (mb_strlen($this->container['nominalCode']) > 500)) {
            $invalidProperties[] = "invalid value for 'nominalCode', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['nominalName']) && (mb_strlen($this->container['nominalName']) > 100)) {
            $invalidProperties[] = "invalid value for 'nominalName', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['journalNarrative']) && (mb_strlen($this->container['journalNarrative']) > 500)) {
            $invalidProperties[] = "invalid value for 'journalNarrative', the character length must be smaller than or equal to 500.";
        }

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
     * Gets nominalCode
     *
     * @return string|null
     */
    public function getNominalCode(): ?string
    {
        return $this->container['nominalCode'];
    }

    /**
     * Sets nominalCode
     *
     * @param string|null $nominalCode Nominal Code for pension scheme
     *
     * @return $this
     */
    public function setNominalCode(?string $nominalCode): static
    {
        if (is_null($nominalCode)) {
            array_push($this->openAPINullablesSetToNull, 'nominalCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nominalCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nominalCode) && (mb_strlen($nominalCode) > 500)) {
            throw new InvalidArgumentException('invalid length for $nominalCode when calling PensionSchemeNominalCodeMapping., must be smaller than or equal to 500.');
        }

        $this->container['nominalCode'] = $nominalCode;

        return $this;
    }

    /**
     * Gets nominalName
     *
     * @return string|null
     */
    public function getNominalName(): ?string
    {
        return $this->container['nominalName'];
    }

    /**
     * Sets nominalName
     *
     * @param string|null $nominalName Nominal Name
     *
     * @return $this
     */
    public function setNominalName(?string $nominalName): static
    {
        if (is_null($nominalName)) {
            array_push($this->openAPINullablesSetToNull, 'nominalName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nominalName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($nominalName) && (mb_strlen($nominalName) > 100)) {
            throw new InvalidArgumentException('invalid length for $nominalName when calling PensionSchemeNominalCodeMapping., must be smaller than or equal to 100.');
        }

        $this->container['nominalName'] = $nominalName;

        return $this;
    }

    /**
     * Gets journalNarrative
     *
     * @return string|null
     */
    public function getJournalNarrative(): ?string
    {
        return $this->container['journalNarrative'];
    }

    /**
     * Sets journalNarrative
     *
     * @param string|null $journalNarrative Journal narrative description.
     *
     * @return $this
     */
    public function setJournalNarrative(?string $journalNarrative): static
    {
        if (is_null($journalNarrative)) {
            array_push($this->openAPINullablesSetToNull, 'journalNarrative');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('journalNarrative', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($journalNarrative) && (mb_strlen($journalNarrative) > 500)) {
            throw new InvalidArgumentException('invalid length for $journalNarrative when calling PensionSchemeNominalCodeMapping., must be smaller than or equal to 500.');
        }

        $this->container['journalNarrative'] = $journalNarrative;

        return $this;
    }

    /**
     * Gets payCode
     *
     * @return string|null
     */
    public function getPayCode(): ?string
    {
        return $this->container['payCode'];
    }

    /**
     * Sets payCode
     *
     * @param string|null $payCode payCode
     *
     * @return $this
     */
    public function setPayCode(?string $payCode): static
    {
        if (is_null($payCode)) {
            array_push($this->openAPINullablesSetToNull, 'payCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payCode'] = $payCode;

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


