<?php
/**
 * ContractEmployeeRoleResponse
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
 * ContractEmployeeRoleResponse Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractEmployeeRoleResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.EmployeeRoleResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'jobTitle' => 'string',
        'isPrimary' => 'bool',
        'reference' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'basis' => '\SynergiTech\Staffology\Model\RoleBasis',
        'type' => '\SynergiTech\Staffology\Model\RoleType',
        'displayName' => 'string',
        'payOptions' => '\SynergiTech\Staffology\Model\ContractPayOptionsBaseResponse',
        'workingPattern' => '\SynergiTech\Staffology\Model\ContractWorkingPatternResponse',
        'occupationalMaternityPolicyUniqueId' => 'string',
        'occupationalSicknessPolicyUniqueId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'jobTitle' => null,
        'isPrimary' => null,
        'reference' => null,
        'startDate' => 'date',
        'endDate' => 'date',
        'basis' => null,
        'type' => null,
        'displayName' => null,
        'payOptions' => null,
        'workingPattern' => null,
        'occupationalMaternityPolicyUniqueId' => 'uuid',
        'occupationalSicknessPolicyUniqueId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'jobTitle' => true,
        'isPrimary' => false,
        'reference' => true,
        'startDate' => false,
        'endDate' => true,
        'basis' => false,
        'type' => false,
        'displayName' => true,
        'payOptions' => false,
        'workingPattern' => false,
        'occupationalMaternityPolicyUniqueId' => true,
        'occupationalSicknessPolicyUniqueId' => true
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
        'id' => 'id',
        'jobTitle' => 'jobTitle',
        'isPrimary' => 'isPrimary',
        'reference' => 'reference',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'basis' => 'basis',
        'type' => 'type',
        'displayName' => 'displayName',
        'payOptions' => 'payOptions',
        'workingPattern' => 'workingPattern',
        'occupationalMaternityPolicyUniqueId' => 'occupationalMaternityPolicyUniqueId',
        'occupationalSicknessPolicyUniqueId' => 'occupationalSicknessPolicyUniqueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'jobTitle' => 'setJobTitle',
        'isPrimary' => 'setIsPrimary',
        'reference' => 'setReference',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'basis' => 'setBasis',
        'type' => 'setType',
        'displayName' => 'setDisplayName',
        'payOptions' => 'setPayOptions',
        'workingPattern' => 'setWorkingPattern',
        'occupationalMaternityPolicyUniqueId' => 'setOccupationalMaternityPolicyUniqueId',
        'occupationalSicknessPolicyUniqueId' => 'setOccupationalSicknessPolicyUniqueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'jobTitle' => 'getJobTitle',
        'isPrimary' => 'getIsPrimary',
        'reference' => 'getReference',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'basis' => 'getBasis',
        'type' => 'getType',
        'displayName' => 'getDisplayName',
        'payOptions' => 'getPayOptions',
        'workingPattern' => 'getWorkingPattern',
        'occupationalMaternityPolicyUniqueId' => 'getOccupationalMaternityPolicyUniqueId',
        'occupationalSicknessPolicyUniqueId' => 'getOccupationalSicknessPolicyUniqueId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('isPrimary', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('basis', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('displayName', $data ?? [], null);
        $this->setIfExists('payOptions', $data ?? [], null);
        $this->setIfExists('workingPattern', $data ?? [], null);
        $this->setIfExists('occupationalMaternityPolicyUniqueId', $data ?? [], null);
        $this->setIfExists('occupationalSicknessPolicyUniqueId', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 35)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 35.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string|null $jobTitle Job Title of the Role
     *
     * @return $this
     */
    public function setJobTitle(?string $jobTitle): static
    {
        if (is_null($jobTitle)) {
            array_push($this->openAPINullablesSetToNull, 'jobTitle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobTitle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets isPrimary
     *
     * @return bool|null
     */
    public function getIsPrimary(): ?bool
    {
        return $this->container['isPrimary'];
    }

    /**
     * Sets isPrimary
     *
     * @param bool|null $isPrimary Set to True if this is Primary role of the Employee
     *
     * @return $this
     */
    public function setIsPrimary(?bool $isPrimary): static
    {
        if (is_null($isPrimary)) {
            throw new InvalidArgumentException('non-nullable isPrimary cannot be null');
        }
        $this->container['isPrimary'] = $isPrimary;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            array_push($this->openAPINullablesSetToNull, 'reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($reference) && (mb_strlen($reference) > 35)) {
            throw new InvalidArgumentException('invalid length for $reference when calling ContractEmployeeRoleResponse., must be smaller than or equal to 35.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate startDate
     *
     * @return $this
     */
    public function setStartDate(?\DateTime $startDate): static
    {
        if (is_null($startDate)) {
            throw new InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate endDate
     *
     * @return $this
     */
    public function setEndDate(?\DateTime $endDate): static
    {
        if (is_null($endDate)) {
            array_push($this->openAPINullablesSetToNull, 'endDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets basis
     *
     * @return \SynergiTech\Staffology\Model\RoleBasis|null
     */
    public function getBasis(): ?\SynergiTech\Staffology\Model\RoleBasis
    {
        return $this->container['basis'];
    }

    /**
     * Sets basis
     *
     * @param \SynergiTech\Staffology\Model\RoleBasis|null $basis basis
     *
     * @return $this
     */
    public function setBasis(?\SynergiTech\Staffology\Model\RoleBasis $basis): static
    {
        if (is_null($basis)) {
            throw new InvalidArgumentException('non-nullable basis cannot be null');
        }
        $this->container['basis'] = $basis;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \SynergiTech\Staffology\Model\RoleType|null
     */
    public function getType(): ?\SynergiTech\Staffology\Model\RoleType
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \SynergiTech\Staffology\Model\RoleType|null $type type
     *
     * @return $this
     */
    public function setType(?\SynergiTech\Staffology\Model\RoleType $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName(?string $displayName): static
    {
        if (is_null($displayName)) {
            array_push($this->openAPINullablesSetToNull, 'displayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('displayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets payOptions
     *
     * @return \SynergiTech\Staffology\Model\ContractPayOptionsBaseResponse|null
     */
    public function getPayOptions(): ?\SynergiTech\Staffology\Model\ContractPayOptionsBaseResponse
    {
        return $this->container['payOptions'];
    }

    /**
     * Sets payOptions
     *
     * @param \SynergiTech\Staffology\Model\ContractPayOptionsBaseResponse|null $payOptions payOptions
     *
     * @return $this
     */
    public function setPayOptions(?\SynergiTech\Staffology\Model\ContractPayOptionsBaseResponse $payOptions): static
    {
        if (is_null($payOptions)) {
            throw new InvalidArgumentException('non-nullable payOptions cannot be null');
        }
        $this->container['payOptions'] = $payOptions;

        return $this;
    }

    /**
     * Gets workingPattern
     *
     * @return \SynergiTech\Staffology\Model\ContractWorkingPatternResponse|null
     */
    public function getWorkingPattern(): ?\SynergiTech\Staffology\Model\ContractWorkingPatternResponse
    {
        return $this->container['workingPattern'];
    }

    /**
     * Sets workingPattern
     *
     * @param \SynergiTech\Staffology\Model\ContractWorkingPatternResponse|null $workingPattern workingPattern
     *
     * @return $this
     */
    public function setWorkingPattern(?\SynergiTech\Staffology\Model\ContractWorkingPatternResponse $workingPattern): static
    {
        if (is_null($workingPattern)) {
            throw new InvalidArgumentException('non-nullable workingPattern cannot be null');
        }
        $this->container['workingPattern'] = $workingPattern;

        return $this;
    }

    /**
     * Gets occupationalMaternityPolicyUniqueId
     *
     * @return string|null
     */
    public function getOccupationalMaternityPolicyUniqueId(): ?string
    {
        return $this->container['occupationalMaternityPolicyUniqueId'];
    }

    /**
     * Sets occupationalMaternityPolicyUniqueId
     *
     * @param string|null $occupationalMaternityPolicyUniqueId occupationalMaternityPolicyUniqueId
     *
     * @return $this
     */
    public function setOccupationalMaternityPolicyUniqueId(?string $occupationalMaternityPolicyUniqueId): static
    {
        if (is_null($occupationalMaternityPolicyUniqueId)) {
            array_push($this->openAPINullablesSetToNull, 'occupationalMaternityPolicyUniqueId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('occupationalMaternityPolicyUniqueId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['occupationalMaternityPolicyUniqueId'] = $occupationalMaternityPolicyUniqueId;

        return $this;
    }

    /**
     * Gets occupationalSicknessPolicyUniqueId
     *
     * @return string|null
     */
    public function getOccupationalSicknessPolicyUniqueId(): ?string
    {
        return $this->container['occupationalSicknessPolicyUniqueId'];
    }

    /**
     * Sets occupationalSicknessPolicyUniqueId
     *
     * @param string|null $occupationalSicknessPolicyUniqueId occupationalSicknessPolicyUniqueId
     *
     * @return $this
     */
    public function setOccupationalSicknessPolicyUniqueId(?string $occupationalSicknessPolicyUniqueId): static
    {
        if (is_null($occupationalSicknessPolicyUniqueId)) {
            array_push($this->openAPINullablesSetToNull, 'occupationalSicknessPolicyUniqueId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('occupationalSicknessPolicyUniqueId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['occupationalSicknessPolicyUniqueId'] = $occupationalSicknessPolicyUniqueId;

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


