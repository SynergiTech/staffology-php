<?php
/**
 * PapdisEmployer
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
 * PapdisEmployer Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PapdisEmployer implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PapdisEmployer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'pensionRule' => '\SynergiTech\Staffology\Model\PensionRule',
        'employerId' => 'string',
        'group' => 'string',
        'subGroup' => 'string',
        'payrollPeriod' => '\SynergiTech\Staffology\Model\PapdisPayrollPeriod',
        'stagingDate' => '\DateTime',
        'cyclicalReenrolmentDate' => '\DateTime',
        'name' => 'string',
        'postalAddress' => '\SynergiTech\Staffology\Model\PapdisEmployerContactPostalAddress',
        'fullTimeContractedHours' => 'float',
        'fullTimeContractedWeeks' => 'float',
        'contractedWeeks' => 'float',
        'id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'pensionRule' => null,
        'employerId' => null,
        'group' => null,
        'subGroup' => null,
        'payrollPeriod' => null,
        'stagingDate' => 'date',
        'cyclicalReenrolmentDate' => 'date',
        'name' => null,
        'postalAddress' => null,
        'fullTimeContractedHours' => 'double',
        'fullTimeContractedWeeks' => 'double',
        'contractedWeeks' => 'double',
        'id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'pensionRule' => false,
        'employerId' => true,
        'group' => true,
        'subGroup' => true,
        'payrollPeriod' => false,
        'stagingDate' => false,
        'cyclicalReenrolmentDate' => true,
        'name' => true,
        'postalAddress' => false,
        'fullTimeContractedHours' => true,
        'fullTimeContractedWeeks' => true,
        'contractedWeeks' => true,
        'id' => false
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
        'pensionRule' => 'pensionRule',
        'employerId' => 'employerId',
        'group' => 'group',
        'subGroup' => 'subGroup',
        'payrollPeriod' => 'payrollPeriod',
        'stagingDate' => 'stagingDate',
        'cyclicalReenrolmentDate' => 'cyclicalReenrolmentDate',
        'name' => 'name',
        'postalAddress' => 'postalAddress',
        'fullTimeContractedHours' => 'fullTimeContractedHours',
        'fullTimeContractedWeeks' => 'fullTimeContractedWeeks',
        'contractedWeeks' => 'contractedWeeks',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'pensionRule' => 'setPensionRule',
        'employerId' => 'setEmployerId',
        'group' => 'setGroup',
        'subGroup' => 'setSubGroup',
        'payrollPeriod' => 'setPayrollPeriod',
        'stagingDate' => 'setStagingDate',
        'cyclicalReenrolmentDate' => 'setCyclicalReenrolmentDate',
        'name' => 'setName',
        'postalAddress' => 'setPostalAddress',
        'fullTimeContractedHours' => 'setFullTimeContractedHours',
        'fullTimeContractedWeeks' => 'setFullTimeContractedWeeks',
        'contractedWeeks' => 'setContractedWeeks',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'pensionRule' => 'getPensionRule',
        'employerId' => 'getEmployerId',
        'group' => 'getGroup',
        'subGroup' => 'getSubGroup',
        'payrollPeriod' => 'getPayrollPeriod',
        'stagingDate' => 'getStagingDate',
        'cyclicalReenrolmentDate' => 'getCyclicalReenrolmentDate',
        'name' => 'getName',
        'postalAddress' => 'getPostalAddress',
        'fullTimeContractedHours' => 'getFullTimeContractedHours',
        'fullTimeContractedWeeks' => 'getFullTimeContractedWeeks',
        'contractedWeeks' => 'getContractedWeeks',
        'id' => 'getId'
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
        $this->setIfExists('pensionRule', $data ?? [], null);
        $this->setIfExists('employerId', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('subGroup', $data ?? [], null);
        $this->setIfExists('payrollPeriod', $data ?? [], null);
        $this->setIfExists('stagingDate', $data ?? [], null);
        $this->setIfExists('cyclicalReenrolmentDate', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('postalAddress', $data ?? [], null);
        $this->setIfExists('fullTimeContractedHours', $data ?? [], null);
        $this->setIfExists('fullTimeContractedWeeks', $data ?? [], null);
        $this->setIfExists('contractedWeeks', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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
     * Gets pensionRule
     *
     * @return \SynergiTech\Staffology\Model\PensionRule|null
     */
    public function getPensionRule(): ?\SynergiTech\Staffology\Model\PensionRule
    {
        return $this->container['pensionRule'];
    }

    /**
     * Sets pensionRule
     *
     * @param \SynergiTech\Staffology\Model\PensionRule|null $pensionRule pensionRule
     *
     * @return $this
     */
    public function setPensionRule(?\SynergiTech\Staffology\Model\PensionRule $pensionRule): static
    {
        if (is_null($pensionRule)) {
            throw new InvalidArgumentException('non-nullable pensionRule cannot be null');
        }
        $this->container['pensionRule'] = $pensionRule;

        return $this;
    }

    /**
     * Gets employerId
     *
     * @return string|null
     */
    public function getEmployerId(): ?string
    {
        return $this->container['employerId'];
    }

    /**
     * Sets employerId
     *
     * @param string|null $employerId [readonly] Taken from the papdisEmployerId property of the PensionProvider
     *
     * @return $this
     */
    public function setEmployerId(?string $employerId): static
    {
        if (is_null($employerId)) {
            array_push($this->openAPINullablesSetToNull, 'employerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerId'] = $employerId;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group [readonly] Taken from the papdisGroup property of the WorkerGroup
     *
     * @return $this
     */
    public function setGroup(?string $group): static
    {
        if (is_null($group)) {
            array_push($this->openAPINullablesSetToNull, 'group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets subGroup
     *
     * @return string|null
     */
    public function getSubGroup(): ?string
    {
        return $this->container['subGroup'];
    }

    /**
     * Sets subGroup
     *
     * @param string|null $subGroup [readonly] Taken from the papdisSubGroup property of the WorkerGroup
     *
     * @return $this
     */
    public function setSubGroup(?string $subGroup): static
    {
        if (is_null($subGroup)) {
            array_push($this->openAPINullablesSetToNull, 'subGroup');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subGroup', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subGroup'] = $subGroup;

        return $this;
    }

    /**
     * Gets payrollPeriod
     *
     * @return \SynergiTech\Staffology\Model\PapdisPayrollPeriod|null
     */
    public function getPayrollPeriod(): ?\SynergiTech\Staffology\Model\PapdisPayrollPeriod
    {
        return $this->container['payrollPeriod'];
    }

    /**
     * Sets payrollPeriod
     *
     * @param \SynergiTech\Staffology\Model\PapdisPayrollPeriod|null $payrollPeriod payrollPeriod
     *
     * @return $this
     */
    public function setPayrollPeriod(?\SynergiTech\Staffology\Model\PapdisPayrollPeriod $payrollPeriod): static
    {
        if (is_null($payrollPeriod)) {
            throw new InvalidArgumentException('non-nullable payrollPeriod cannot be null');
        }
        $this->container['payrollPeriod'] = $payrollPeriod;

        return $this;
    }

    /**
     * Gets stagingDate
     *
     * @return \DateTime|null
     */
    public function getStagingDate(): ?\DateTime
    {
        return $this->container['stagingDate'];
    }

    /**
     * Sets stagingDate
     *
     * @param \DateTime|null $stagingDate [readonly]
     *
     * @return $this
     */
    public function setStagingDate(?\DateTime $stagingDate): static
    {
        if (is_null($stagingDate)) {
            throw new InvalidArgumentException('non-nullable stagingDate cannot be null');
        }
        $this->container['stagingDate'] = $stagingDate;

        return $this;
    }

    /**
     * Gets cyclicalReenrolmentDate
     *
     * @return \DateTime|null
     */
    public function getCyclicalReenrolmentDate(): ?\DateTime
    {
        return $this->container['cyclicalReenrolmentDate'];
    }

    /**
     * Sets cyclicalReenrolmentDate
     *
     * @param \DateTime|null $cyclicalReenrolmentDate [readonly]
     *
     * @return $this
     */
    public function setCyclicalReenrolmentDate(?\DateTime $cyclicalReenrolmentDate): static
    {
        if (is_null($cyclicalReenrolmentDate)) {
            array_push($this->openAPINullablesSetToNull, 'cyclicalReenrolmentDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cyclicalReenrolmentDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cyclicalReenrolmentDate'] = $cyclicalReenrolmentDate;

        return $this;
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
     * @param string|null $name [readonly]
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
     * Gets postalAddress
     *
     * @return \SynergiTech\Staffology\Model\PapdisEmployerContactPostalAddress|null
     */
    public function getPostalAddress(): ?\SynergiTech\Staffology\Model\PapdisEmployerContactPostalAddress
    {
        return $this->container['postalAddress'];
    }

    /**
     * Sets postalAddress
     *
     * @param \SynergiTech\Staffology\Model\PapdisEmployerContactPostalAddress|null $postalAddress postalAddress
     *
     * @return $this
     */
    public function setPostalAddress(?\SynergiTech\Staffology\Model\PapdisEmployerContactPostalAddress $postalAddress): static
    {
        if (is_null($postalAddress)) {
            throw new InvalidArgumentException('non-nullable postalAddress cannot be null');
        }
        $this->container['postalAddress'] = $postalAddress;

        return $this;
    }

    /**
     * Gets fullTimeContractedHours
     *
     * @return float|null
     */
    public function getFullTimeContractedHours(): ?float
    {
        return $this->container['fullTimeContractedHours'];
    }

    /**
     * Sets fullTimeContractedHours
     *
     * @param float|null $fullTimeContractedHours [readonly]
     *
     * @return $this
     */
    public function setFullTimeContractedHours(?float $fullTimeContractedHours): static
    {
        if (is_null($fullTimeContractedHours)) {
            array_push($this->openAPINullablesSetToNull, 'fullTimeContractedHours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullTimeContractedHours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullTimeContractedHours'] = $fullTimeContractedHours;

        return $this;
    }

    /**
     * Gets fullTimeContractedWeeks
     *
     * @return float|null
     */
    public function getFullTimeContractedWeeks(): ?float
    {
        return $this->container['fullTimeContractedWeeks'];
    }

    /**
     * Sets fullTimeContractedWeeks
     *
     * @param float|null $fullTimeContractedWeeks [readonly]
     *
     * @return $this
     */
    public function setFullTimeContractedWeeks(?float $fullTimeContractedWeeks): static
    {
        if (is_null($fullTimeContractedWeeks)) {
            array_push($this->openAPINullablesSetToNull, 'fullTimeContractedWeeks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullTimeContractedWeeks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullTimeContractedWeeks'] = $fullTimeContractedWeeks;

        return $this;
    }

    /**
     * Gets contractedWeeks
     *
     * @return float|null
     */
    public function getContractedWeeks(): ?float
    {
        return $this->container['contractedWeeks'];
    }

    /**
     * Sets contractedWeeks
     *
     * @param float|null $contractedWeeks [readonly]
     *
     * @return $this
     */
    public function setContractedWeeks(?float $contractedWeeks): static
    {
        if (is_null($contractedWeeks)) {
            array_push($this->openAPINullablesSetToNull, 'contractedWeeks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contractedWeeks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contractedWeeks'] = $contractedWeeks;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id [readonly]
     *
     * @return $this
     */
    public function setId(?int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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


