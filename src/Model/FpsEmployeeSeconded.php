<?php
/**
 * FpsEmployeeSeconded
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
 * FpsEmployeeSeconded Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FpsEmployeeSeconded implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FpsEmployeeSeconded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'inOutUK' => 'string',
        'stay183DaysOrMore' => 'string',
        'stayLessThan183Days' => 'string',
        'eeaCitizen' => 'string',
        'epM6' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inOutUK' => null,
        'stay183DaysOrMore' => null,
        'stayLessThan183Days' => null,
        'eeaCitizen' => null,
        'epM6' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'inOutUK' => true,
        'stay183DaysOrMore' => true,
        'stayLessThan183Days' => true,
        'eeaCitizen' => true,
        'epM6' => true
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
        'inOutUK' => 'inOutUK',
        'stay183DaysOrMore' => 'stay183DaysOrMore',
        'stayLessThan183Days' => 'stayLessThan183Days',
        'eeaCitizen' => 'eeaCitizen',
        'epM6' => 'epM6'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'inOutUK' => 'setInOutUK',
        'stay183DaysOrMore' => 'setStay183DaysOrMore',
        'stayLessThan183Days' => 'setStayLessThan183Days',
        'eeaCitizen' => 'setEeaCitizen',
        'epM6' => 'setEpM6'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'inOutUK' => 'getInOutUK',
        'stay183DaysOrMore' => 'getStay183DaysOrMore',
        'stayLessThan183Days' => 'getStayLessThan183Days',
        'eeaCitizen' => 'getEeaCitizen',
        'epM6' => 'getEpM6'
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
        $this->setIfExists('inOutUK', $data ?? [], null);
        $this->setIfExists('stay183DaysOrMore', $data ?? [], null);
        $this->setIfExists('stayLessThan183Days', $data ?? [], null);
        $this->setIfExists('eeaCitizen', $data ?? [], null);
        $this->setIfExists('epM6', $data ?? [], null);
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
     * Gets inOutUK
     *
     * @return string|null
     */
    public function getInOutUK(): ?string
    {
        return $this->container['inOutUK'];
    }

    /**
     * Sets inOutUK
     *
     * @param string|null $inOutUK inOutUK
     *
     * @return $this
     */
    public function setInOutUK(?string $inOutUK): static
    {
        if (is_null($inOutUK)) {
            array_push($this->openAPINullablesSetToNull, 'inOutUK');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inOutUK', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inOutUK'] = $inOutUK;

        return $this;
    }

    /**
     * Gets stay183DaysOrMore
     *
     * @return string|null
     */
    public function getStay183DaysOrMore(): ?string
    {
        return $this->container['stay183DaysOrMore'];
    }

    /**
     * Sets stay183DaysOrMore
     *
     * @param string|null $stay183DaysOrMore stay183DaysOrMore
     *
     * @return $this
     */
    public function setStay183DaysOrMore(?string $stay183DaysOrMore): static
    {
        if (is_null($stay183DaysOrMore)) {
            array_push($this->openAPINullablesSetToNull, 'stay183DaysOrMore');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stay183DaysOrMore', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stay183DaysOrMore'] = $stay183DaysOrMore;

        return $this;
    }

    /**
     * Gets stayLessThan183Days
     *
     * @return string|null
     */
    public function getStayLessThan183Days(): ?string
    {
        return $this->container['stayLessThan183Days'];
    }

    /**
     * Sets stayLessThan183Days
     *
     * @param string|null $stayLessThan183Days stayLessThan183Days
     *
     * @return $this
     */
    public function setStayLessThan183Days(?string $stayLessThan183Days): static
    {
        if (is_null($stayLessThan183Days)) {
            array_push($this->openAPINullablesSetToNull, 'stayLessThan183Days');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stayLessThan183Days', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stayLessThan183Days'] = $stayLessThan183Days;

        return $this;
    }

    /**
     * Gets eeaCitizen
     *
     * @return string|null
     */
    public function getEeaCitizen(): ?string
    {
        return $this->container['eeaCitizen'];
    }

    /**
     * Sets eeaCitizen
     *
     * @param string|null $eeaCitizen eeaCitizen
     *
     * @return $this
     */
    public function setEeaCitizen(?string $eeaCitizen): static
    {
        if (is_null($eeaCitizen)) {
            array_push($this->openAPINullablesSetToNull, 'eeaCitizen');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eeaCitizen', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eeaCitizen'] = $eeaCitizen;

        return $this;
    }

    /**
     * Gets epM6
     *
     * @return string|null
     */
    public function getEpM6(): ?string
    {
        return $this->container['epM6'];
    }

    /**
     * Sets epM6
     *
     * @param string|null $epM6 epM6
     *
     * @return $this
     */
    public function setEpM6(?string $epM6): static
    {
        if (is_null($epM6)) {
            array_push($this->openAPINullablesSetToNull, 'epM6');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('epM6', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['epM6'] = $epM6;

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


