<?php
/**
 * ExbP11dbClass1A
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
 * ExbP11dbClass1A Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ExbP11dbClass1A implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ExbP11dbClass1A';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'niCsRate' => 'string',
        'totalBenefit' => '\SynergiTech\Staffology\Model\ExbP11dbClass1ATotalBenefit',
        'adjustments' => '\SynergiTech\Staffology\Model\ExbP11dbClass1AAdjustments',
        'niCpayable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'niCsRate' => null,
        'totalBenefit' => null,
        'adjustments' => null,
        'niCpayable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'niCsRate' => true,
        'totalBenefit' => false,
        'adjustments' => false,
        'niCpayable' => true
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
        'niCsRate' => 'niCsRate',
        'totalBenefit' => 'totalBenefit',
        'adjustments' => 'adjustments',
        'niCpayable' => 'niCpayable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'niCsRate' => 'setNiCsRate',
        'totalBenefit' => 'setTotalBenefit',
        'adjustments' => 'setAdjustments',
        'niCpayable' => 'setNiCpayable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'niCsRate' => 'getNiCsRate',
        'totalBenefit' => 'getTotalBenefit',
        'adjustments' => 'getAdjustments',
        'niCpayable' => 'getNiCpayable'
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
        $this->setIfExists('niCsRate', $data ?? [], null);
        $this->setIfExists('totalBenefit', $data ?? [], null);
        $this->setIfExists('adjustments', $data ?? [], null);
        $this->setIfExists('niCpayable', $data ?? [], null);
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
     * Gets niCsRate
     *
     * @return string|null
     */
    public function getNiCsRate(): ?string
    {
        return $this->container['niCsRate'];
    }

    /**
     * Sets niCsRate
     *
     * @param string|null $niCsRate niCsRate
     *
     * @return $this
     */
    public function setNiCsRate(?string $niCsRate): static
    {
        if (is_null($niCsRate)) {
            array_push($this->openAPINullablesSetToNull, 'niCsRate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('niCsRate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['niCsRate'] = $niCsRate;

        return $this;
    }

    /**
     * Gets totalBenefit
     *
     * @return \SynergiTech\Staffology\Model\ExbP11dbClass1ATotalBenefit|null
     */
    public function getTotalBenefit(): ?\SynergiTech\Staffology\Model\ExbP11dbClass1ATotalBenefit
    {
        return $this->container['totalBenefit'];
    }

    /**
     * Sets totalBenefit
     *
     * @param \SynergiTech\Staffology\Model\ExbP11dbClass1ATotalBenefit|null $totalBenefit totalBenefit
     *
     * @return $this
     */
    public function setTotalBenefit(?\SynergiTech\Staffology\Model\ExbP11dbClass1ATotalBenefit $totalBenefit): static
    {
        if (is_null($totalBenefit)) {
            throw new InvalidArgumentException('non-nullable totalBenefit cannot be null');
        }
        $this->container['totalBenefit'] = $totalBenefit;

        return $this;
    }

    /**
     * Gets adjustments
     *
     * @return \SynergiTech\Staffology\Model\ExbP11dbClass1AAdjustments|null
     */
    public function getAdjustments(): ?\SynergiTech\Staffology\Model\ExbP11dbClass1AAdjustments
    {
        return $this->container['adjustments'];
    }

    /**
     * Sets adjustments
     *
     * @param \SynergiTech\Staffology\Model\ExbP11dbClass1AAdjustments|null $adjustments adjustments
     *
     * @return $this
     */
    public function setAdjustments(?\SynergiTech\Staffology\Model\ExbP11dbClass1AAdjustments $adjustments): static
    {
        if (is_null($adjustments)) {
            throw new InvalidArgumentException('non-nullable adjustments cannot be null');
        }
        $this->container['adjustments'] = $adjustments;

        return $this;
    }

    /**
     * Gets niCpayable
     *
     * @return string|null
     */
    public function getNiCpayable(): ?string
    {
        return $this->container['niCpayable'];
    }

    /**
     * Sets niCpayable
     *
     * @param string|null $niCpayable niCpayable
     *
     * @return $this
     */
    public function setNiCpayable(?string $niCpayable): static
    {
        if (is_null($niCpayable)) {
            array_push($this->openAPINullablesSetToNull, 'niCpayable');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('niCpayable', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['niCpayable'] = $niCpayable;

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


