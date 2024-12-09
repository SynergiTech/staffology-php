<?php
/**
 * ExternalEmployeeMapping
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
 * ExternalEmployeeMapping Class Doc Comment
 *
 * @description Used to represent details of an employee from an ExternalDataProvider, along with mapping information to an employee in the payroll system
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ExternalEmployeeMapping implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ExternalEmployeeMapping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'externalId' => 'string',
        'providerId' => '\SynergiTech\Staffology\Model\ExternalDataProviderId',
        'status' => '\SynergiTech\Staffology\Model\ExternalEmployeeMappingStatus',
        'employee' => '\SynergiTech\Staffology\Model\Item',
        'externalEmployee' => '\SynergiTech\Staffology\Model\Employee',
        'lastSyncDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'externalId' => null,
        'providerId' => null,
        'status' => null,
        'employee' => null,
        'externalEmployee' => null,
        'lastSyncDate' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'externalId' => true,
        'providerId' => false,
        'status' => false,
        'employee' => false,
        'externalEmployee' => false,
        'lastSyncDate' => true
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
        'externalId' => 'externalId',
        'providerId' => 'providerId',
        'status' => 'status',
        'employee' => 'employee',
        'externalEmployee' => 'externalEmployee',
        'lastSyncDate' => 'lastSyncDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'externalId' => 'setExternalId',
        'providerId' => 'setProviderId',
        'status' => 'setStatus',
        'employee' => 'setEmployee',
        'externalEmployee' => 'setExternalEmployee',
        'lastSyncDate' => 'setLastSyncDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'externalId' => 'getExternalId',
        'providerId' => 'getProviderId',
        'status' => 'getStatus',
        'employee' => 'getEmployee',
        'externalEmployee' => 'getExternalEmployee',
        'lastSyncDate' => 'getLastSyncDate'
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
        $this->setIfExists('externalId', $data ?? [], null);
        $this->setIfExists('providerId', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('employee', $data ?? [], null);
        $this->setIfExists('externalEmployee', $data ?? [], null);
        $this->setIfExists('lastSyncDate', $data ?? [], null);
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
     * Gets externalId
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string|null $externalId [readonly] The id for the employee in the external system
     *
     * @return $this
     */
    public function setExternalId(?string $externalId): static
    {
        if (is_null($externalId)) {
            array_push($this->openAPINullablesSetToNull, 'externalId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('externalId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets providerId
     *
     * @return \SynergiTech\Staffology\Model\ExternalDataProviderId|null
     */
    public function getProviderId(): ?\SynergiTech\Staffology\Model\ExternalDataProviderId
    {
        return $this->container['providerId'];
    }

    /**
     * Sets providerId
     *
     * @param \SynergiTech\Staffology\Model\ExternalDataProviderId|null $providerId providerId
     *
     * @return $this
     */
    public function setProviderId(?\SynergiTech\Staffology\Model\ExternalDataProviderId $providerId): static
    {
        if (is_null($providerId)) {
            throw new InvalidArgumentException('non-nullable providerId cannot be null');
        }
        $this->container['providerId'] = $providerId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SynergiTech\Staffology\Model\ExternalEmployeeMappingStatus|null
     */
    public function getStatus(): ?\SynergiTech\Staffology\Model\ExternalEmployeeMappingStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SynergiTech\Staffology\Model\ExternalEmployeeMappingStatus|null $status status
     *
     * @return $this
     */
    public function setStatus(?\SynergiTech\Staffology\Model\ExternalEmployeeMappingStatus $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getEmployee(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \SynergiTech\Staffology\Model\Item|null $employee employee
     *
     * @return $this
     */
    public function setEmployee(?\SynergiTech\Staffology\Model\Item $employee): static
    {
        if (is_null($employee)) {
            throw new InvalidArgumentException('non-nullable employee cannot be null');
        }
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets externalEmployee
     *
     * @return \SynergiTech\Staffology\Model\Employee|null
     */
    public function getExternalEmployee(): ?\SynergiTech\Staffology\Model\Employee
    {
        return $this->container['externalEmployee'];
    }

    /**
     * Sets externalEmployee
     *
     * @param \SynergiTech\Staffology\Model\Employee|null $externalEmployee externalEmployee
     *
     * @return $this
     */
    public function setExternalEmployee(?\SynergiTech\Staffology\Model\Employee $externalEmployee): static
    {
        if (is_null($externalEmployee)) {
            throw new InvalidArgumentException('non-nullable externalEmployee cannot be null');
        }
        $this->container['externalEmployee'] = $externalEmployee;

        return $this;
    }

    /**
     * Gets lastSyncDate
     *
     * @return \DateTime|null
     */
    public function getLastSyncDate(): ?\DateTime
    {
        return $this->container['lastSyncDate'];
    }

    /**
     * Sets lastSyncDate
     *
     * @param \DateTime|null $lastSyncDate [readonly] The date and time this mapping was last synchronised
     *
     * @return $this
     */
    public function setLastSyncDate(?\DateTime $lastSyncDate): static
    {
        if (is_null($lastSyncDate)) {
            array_push($this->openAPINullablesSetToNull, 'lastSyncDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastSyncDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastSyncDate'] = $lastSyncDate;

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


