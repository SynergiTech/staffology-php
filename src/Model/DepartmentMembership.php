<?php
/**
 * DepartmentMembership
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
 * DepartmentMembership Class Doc Comment
 *
 * @description Used to represent an Employees membership of a Department
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DepartmentMembership implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DepartmentMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'code' => 'string',
        'color' => 'string',
        'title' => 'string',
        'primary' => 'bool',
        'weighting' => 'float',
        'employeeRoleUniqueId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => null,
        'color' => null,
        'title' => null,
        'primary' => null,
        'weighting' => 'double',
        'employeeRoleUniqueId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'code' => false,
        'color' => true,
        'title' => true,
        'primary' => false,
        'weighting' => false,
        'employeeRoleUniqueId' => false
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
        'code' => 'code',
        'color' => 'color',
        'title' => 'title',
        'primary' => 'primary',
        'weighting' => 'weighting',
        'employeeRoleUniqueId' => 'employeeRoleUniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'code' => 'setCode',
        'color' => 'setColor',
        'title' => 'setTitle',
        'primary' => 'setPrimary',
        'weighting' => 'setWeighting',
        'employeeRoleUniqueId' => 'setEmployeeRoleUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'code' => 'getCode',
        'color' => 'getColor',
        'title' => 'getTitle',
        'primary' => 'getPrimary',
        'weighting' => 'getWeighting',
        'employeeRoleUniqueId' => 'getEmployeeRoleUniqueId'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('primary', $data ?? [], null);
        $this->setIfExists('weighting', $data ?? [], null);
        $this->setIfExists('employeeRoleUniqueId', $data ?? [], null);
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) < 1)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
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
     * Gets code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The Code for the Department
     *
     * @return $this
     */
    public function setCode(string $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }

        if ((mb_strlen($code) < 1)) {
            throw new InvalidArgumentException('invalid length for $code when calling DepartmentMembership., must be bigger than or equal to 1.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color [readonly] The Color for the Department
     *
     * @return $this
     */
    public function setColor(?string $color): static
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title [readonly] The Title for the Department
     *
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary(): ?bool
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary Set to true if this is the primary Department for the Employee.  Only one department can be set as the primary.
     *
     * @return $this
     */
    public function setPrimary(?bool $primary): static
    {
        if (is_null($primary)) {
            throw new InvalidArgumentException('non-nullable primary cannot be null');
        }
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets weighting
     *
     * @return float|null
     */
    public function getWeighting(): ?float
    {
        return $this->container['weighting'];
    }

    /**
     * Sets weighting
     *
     * @param float|null $weighting If there is more than one Department Membership for the Employee then this determines the weighting to give to this membership.  ie, if he is in two departments you might set the primary as 0.8 and the secondary as 0.2;
     *
     * @return $this
     */
    public function setWeighting(?float $weighting): static
    {
        if (is_null($weighting)) {
            throw new InvalidArgumentException('non-nullable weighting cannot be null');
        }
        $this->container['weighting'] = $weighting;

        return $this;
    }

    /**
     * Gets employeeRoleUniqueId
     *
     * @return string|null
     */
    public function getEmployeeRoleUniqueId(): ?string
    {
        return $this->container['employeeRoleUniqueId'];
    }

    /**
     * Sets employeeRoleUniqueId
     *
     * @param string|null $employeeRoleUniqueId employeeRoleUniqueId
     *
     * @return $this
     */
    public function setEmployeeRoleUniqueId(?string $employeeRoleUniqueId): static
    {
        if (is_null($employeeRoleUniqueId)) {
            throw new InvalidArgumentException('non-nullable employeeRoleUniqueId cannot be null');
        }
        $this->container['employeeRoleUniqueId'] = $employeeRoleUniqueId;

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


