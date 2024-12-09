<?php
/**
 * FpsEmployee
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
 * FpsEmployee Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FpsEmployee implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FpsEmployee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payrunEntryId' => 'string',
        'employeeUniqueId' => 'string',
        'item' => '\SynergiTech\Staffology\Model\Item',
        'employeeDetails' => '\SynergiTech\Staffology\Model\FpsEmployeeDetails',
        'employment' => '\SynergiTech\Staffology\Model\FpsEmployment',
        'validationWarnings' => '\SynergiTech\Staffology\Model\RtiValidationWarning[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payrunEntryId' => 'uuid',
        'employeeUniqueId' => 'uuid',
        'item' => null,
        'employeeDetails' => null,
        'employment' => null,
        'validationWarnings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payrunEntryId' => false,
        'employeeUniqueId' => false,
        'item' => false,
        'employeeDetails' => false,
        'employment' => false,
        'validationWarnings' => true
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
        'payrunEntryId' => 'payrunEntryId',
        'employeeUniqueId' => 'employeeUniqueId',
        'item' => 'item',
        'employeeDetails' => 'employeeDetails',
        'employment' => 'employment',
        'validationWarnings' => 'validationWarnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payrunEntryId' => 'setPayrunEntryId',
        'employeeUniqueId' => 'setEmployeeUniqueId',
        'item' => 'setItem',
        'employeeDetails' => 'setEmployeeDetails',
        'employment' => 'setEmployment',
        'validationWarnings' => 'setValidationWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payrunEntryId' => 'getPayrunEntryId',
        'employeeUniqueId' => 'getEmployeeUniqueId',
        'item' => 'getItem',
        'employeeDetails' => 'getEmployeeDetails',
        'employment' => 'getEmployment',
        'validationWarnings' => 'getValidationWarnings'
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
        $this->setIfExists('payrunEntryId', $data ?? [], null);
        $this->setIfExists('employeeUniqueId', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('employeeDetails', $data ?? [], null);
        $this->setIfExists('employment', $data ?? [], null);
        $this->setIfExists('validationWarnings', $data ?? [], null);
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
     * Gets payrunEntryId
     *
     * @return string|null
     */
    public function getPayrunEntryId(): ?string
    {
        return $this->container['payrunEntryId'];
    }

    /**
     * Sets payrunEntryId
     *
     * @param string|null $payrunEntryId payrunEntryId
     *
     * @return $this
     */
    public function setPayrunEntryId(?string $payrunEntryId): static
    {
        if (is_null($payrunEntryId)) {
            throw new InvalidArgumentException('non-nullable payrunEntryId cannot be null');
        }
        $this->container['payrunEntryId'] = $payrunEntryId;

        return $this;
    }

    /**
     * Gets employeeUniqueId
     *
     * @return string|null
     */
    public function getEmployeeUniqueId(): ?string
    {
        return $this->container['employeeUniqueId'];
    }

    /**
     * Sets employeeUniqueId
     *
     * @param string|null $employeeUniqueId employeeUniqueId
     *
     * @return $this
     */
    public function setEmployeeUniqueId(?string $employeeUniqueId): static
    {
        if (is_null($employeeUniqueId)) {
            throw new InvalidArgumentException('non-nullable employeeUniqueId cannot be null');
        }
        $this->container['employeeUniqueId'] = $employeeUniqueId;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getItem(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \SynergiTech\Staffology\Model\Item|null $item item
     *
     * @return $this
     */
    public function setItem(?\SynergiTech\Staffology\Model\Item $item): static
    {
        if (is_null($item)) {
            throw new InvalidArgumentException('non-nullable item cannot be null');
        }
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets employeeDetails
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployeeDetails|null
     */
    public function getEmployeeDetails(): ?\SynergiTech\Staffology\Model\FpsEmployeeDetails
    {
        return $this->container['employeeDetails'];
    }

    /**
     * Sets employeeDetails
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployeeDetails|null $employeeDetails employeeDetails
     *
     * @return $this
     */
    public function setEmployeeDetails(?\SynergiTech\Staffology\Model\FpsEmployeeDetails $employeeDetails): static
    {
        if (is_null($employeeDetails)) {
            throw new InvalidArgumentException('non-nullable employeeDetails cannot be null');
        }
        $this->container['employeeDetails'] = $employeeDetails;

        return $this;
    }

    /**
     * Gets employment
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployment|null
     */
    public function getEmployment(): ?\SynergiTech\Staffology\Model\FpsEmployment
    {
        return $this->container['employment'];
    }

    /**
     * Sets employment
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployment|null $employment employment
     *
     * @return $this
     */
    public function setEmployment(?\SynergiTech\Staffology\Model\FpsEmployment $employment): static
    {
        if (is_null($employment)) {
            throw new InvalidArgumentException('non-nullable employment cannot be null');
        }
        $this->container['employment'] = $employment;

        return $this;
    }

    /**
     * Gets validationWarnings
     *
     * @return \SynergiTech\Staffology\Model\RtiValidationWarning[]|null
     */
    public function getValidationWarnings(): ?array
    {
        return $this->container['validationWarnings'];
    }

    /**
     * Sets validationWarnings
     *
     * @param \SynergiTech\Staffology\Model\RtiValidationWarning[]|null $validationWarnings validationWarnings
     *
     * @return $this
     */
    public function setValidationWarnings(?array $validationWarnings): static
    {
        if (is_null($validationWarnings)) {
            array_push($this->openAPINullablesSetToNull, 'validationWarnings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validationWarnings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validationWarnings'] = $validationWarnings;

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


