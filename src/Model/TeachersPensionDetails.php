<?php
/**
 * TeachersPensionDetails
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
 * TeachersPensionDetails Class Doc Comment
 *
 * @description Used to represent additional information needed for   Teachers&#39; Pensions
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TeachersPensionDetails implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TeachersPensionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employmentType' => '\SynergiTech\Staffology\Model\TeachersPensionEmploymentType',
        'fullTimeSalary' => 'int',
        'partTimeSalaryPaid' => 'int',
        'mcrRoleId1' => 'string',
        'mcrRoleId2' => 'string',
        'teachersPensionAdminNiNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employmentType' => null,
        'fullTimeSalary' => 'int32',
        'partTimeSalaryPaid' => 'int32',
        'mcrRoleId1' => null,
        'mcrRoleId2' => null,
        'teachersPensionAdminNiNumber' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employmentType' => false,
        'fullTimeSalary' => true,
        'partTimeSalaryPaid' => true,
        'mcrRoleId1' => true,
        'mcrRoleId2' => true,
        'teachersPensionAdminNiNumber' => true
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
        'employmentType' => 'employmentType',
        'fullTimeSalary' => 'fullTimeSalary',
        'partTimeSalaryPaid' => 'partTimeSalaryPaid',
        'mcrRoleId1' => 'mcrRoleId1',
        'mcrRoleId2' => 'mcrRoleId2',
        'teachersPensionAdminNiNumber' => 'teachersPensionAdminNiNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employmentType' => 'setEmploymentType',
        'fullTimeSalary' => 'setFullTimeSalary',
        'partTimeSalaryPaid' => 'setPartTimeSalaryPaid',
        'mcrRoleId1' => 'setMcrRoleId1',
        'mcrRoleId2' => 'setMcrRoleId2',
        'teachersPensionAdminNiNumber' => 'setTeachersPensionAdminNiNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employmentType' => 'getEmploymentType',
        'fullTimeSalary' => 'getFullTimeSalary',
        'partTimeSalaryPaid' => 'getPartTimeSalaryPaid',
        'mcrRoleId1' => 'getMcrRoleId1',
        'mcrRoleId2' => 'getMcrRoleId2',
        'teachersPensionAdminNiNumber' => 'getTeachersPensionAdminNiNumber'
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
        $this->setIfExists('employmentType', $data ?? [], null);
        $this->setIfExists('fullTimeSalary', $data ?? [], null);
        $this->setIfExists('partTimeSalaryPaid', $data ?? [], null);
        $this->setIfExists('mcrRoleId1', $data ?? [], null);
        $this->setIfExists('mcrRoleId2', $data ?? [], null);
        $this->setIfExists('teachersPensionAdminNiNumber', $data ?? [], null);
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

        if (!is_null($this->container['mcrRoleId1']) && (mb_strlen($this->container['mcrRoleId1']) > 15)) {
            $invalidProperties[] = "invalid value for 'mcrRoleId1', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['mcrRoleId2']) && (mb_strlen($this->container['mcrRoleId2']) > 20)) {
            $invalidProperties[] = "invalid value for 'mcrRoleId2', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['teachersPensionAdminNiNumber']) && (mb_strlen($this->container['teachersPensionAdminNiNumber']) > 9)) {
            $invalidProperties[] = "invalid value for 'teachersPensionAdminNiNumber', the character length must be smaller than or equal to 9.";
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
     * Gets employmentType
     *
     * @return \SynergiTech\Staffology\Model\TeachersPensionEmploymentType|null
     */
    public function getEmploymentType(): ?\SynergiTech\Staffology\Model\TeachersPensionEmploymentType
    {
        return $this->container['employmentType'];
    }

    /**
     * Sets employmentType
     *
     * @param \SynergiTech\Staffology\Model\TeachersPensionEmploymentType|null $employmentType employmentType
     *
     * @return $this
     */
    public function setEmploymentType(?\SynergiTech\Staffology\Model\TeachersPensionEmploymentType $employmentType): static
    {
        if (is_null($employmentType)) {
            throw new InvalidArgumentException('non-nullable employmentType cannot be null');
        }
        $this->container['employmentType'] = $employmentType;

        return $this;
    }

    /**
     * Gets fullTimeSalary
     *
     * @return int|null
     */
    public function getFullTimeSalary(): ?int
    {
        return $this->container['fullTimeSalary'];
    }

    /**
     * Sets fullTimeSalary
     *
     * @param int|null $fullTimeSalary Up to 7 digits, in pounds. eg 24000
     *
     * @return $this
     */
    public function setFullTimeSalary(?int $fullTimeSalary): static
    {
        if (is_null($fullTimeSalary)) {
            array_push($this->openAPINullablesSetToNull, 'fullTimeSalary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullTimeSalary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullTimeSalary'] = $fullTimeSalary;

        return $this;
    }

    /**
     * Gets partTimeSalaryPaid
     *
     * @return int|null
     */
    public function getPartTimeSalaryPaid(): ?int
    {
        return $this->container['partTimeSalaryPaid'];
    }

    /**
     * Sets partTimeSalaryPaid
     *
     * @param int|null $partTimeSalaryPaid Up to 7 digits, in pounds. eg 24000
     *
     * @return $this
     */
    public function setPartTimeSalaryPaid(?int $partTimeSalaryPaid): static
    {
        if (is_null($partTimeSalaryPaid)) {
            array_push($this->openAPINullablesSetToNull, 'partTimeSalaryPaid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('partTimeSalaryPaid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['partTimeSalaryPaid'] = $partTimeSalaryPaid;

        return $this;
    }

    /**
     * Gets mcrRoleId1
     *
     * @return string|null
     */
    public function getMcrRoleId1(): ?string
    {
        return $this->container['mcrRoleId1'];
    }

    /**
     * Sets mcrRoleId1
     *
     * @param string|null $mcrRoleId1 Data field for the Contract used for Teachers pension administration
     *
     * @return $this
     */
    public function setMcrRoleId1(?string $mcrRoleId1): static
    {
        if (is_null($mcrRoleId1)) {
            array_push($this->openAPINullablesSetToNull, 'mcrRoleId1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mcrRoleId1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mcrRoleId1) && (mb_strlen($mcrRoleId1) > 15)) {
            throw new InvalidArgumentException('invalid length for $mcrRoleId1 when calling TeachersPensionDetails., must be smaller than or equal to 15.');
        }

        $this->container['mcrRoleId1'] = $mcrRoleId1;

        return $this;
    }

    /**
     * Gets mcrRoleId2
     *
     * @return string|null
     */
    public function getMcrRoleId2(): ?string
    {
        return $this->container['mcrRoleId2'];
    }

    /**
     * Sets mcrRoleId2
     *
     * @param string|null $mcrRoleId2 The Job role within the contract used for Teachers pension administration
     *
     * @return $this
     */
    public function setMcrRoleId2(?string $mcrRoleId2): static
    {
        if (is_null($mcrRoleId2)) {
            array_push($this->openAPINullablesSetToNull, 'mcrRoleId2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mcrRoleId2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($mcrRoleId2) && (mb_strlen($mcrRoleId2) > 20)) {
            throw new InvalidArgumentException('invalid length for $mcrRoleId2 when calling TeachersPensionDetails., must be smaller than or equal to 20.');
        }

        $this->container['mcrRoleId2'] = $mcrRoleId2;

        return $this;
    }

    /**
     * Gets teachersPensionAdminNiNumber
     *
     * @return string|null
     */
    public function getTeachersPensionAdminNiNumber(): ?string
    {
        return $this->container['teachersPensionAdminNiNumber'];
    }

    /**
     * Sets teachersPensionAdminNiNumber
     *
     * @param string|null $teachersPensionAdminNiNumber Where an employee does not have an NI number yet (or doesn't know their NI number) Teachers Pensions will issue an administrative NI number
     *
     * @return $this
     */
    public function setTeachersPensionAdminNiNumber(?string $teachersPensionAdminNiNumber): static
    {
        if (is_null($teachersPensionAdminNiNumber)) {
            array_push($this->openAPINullablesSetToNull, 'teachersPensionAdminNiNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('teachersPensionAdminNiNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($teachersPensionAdminNiNumber) && (mb_strlen($teachersPensionAdminNiNumber) > 9)) {
            throw new InvalidArgumentException('invalid length for $teachersPensionAdminNiNumber when calling TeachersPensionDetails., must be smaller than or equal to 9.');
        }

        $this->container['teachersPensionAdminNiNumber'] = $teachersPensionAdminNiNumber;

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


