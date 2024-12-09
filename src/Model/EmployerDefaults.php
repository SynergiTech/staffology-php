<?php
/**
 * EmployerDefaults
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
 * EmployerDefaults Class Doc Comment
 *
 * @description When a user creates a new Employer, certain settings can be copied from an existing employer.  This model determines which employer (if any) settings should be copied from and what should be copied.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EmployerDefaults implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EmployerDefaults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employer' => '\SynergiTech\Staffology\Model\EmployerItem',
        'payCodes' => 'bool',
        'csvMappings' => 'bool',
        'departments' => 'bool',
        'rti' => 'bool',
        'users' => 'bool',
        'hmrcNoticeSettings' => 'bool',
        'payOptions' => 'bool',
        'workingPatterns' => 'bool',
        'occupationalPolicies' => 'bool',
        'pensionSchemes' => 'bool',
        'payees' => 'bool',
        'reportPacks' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employer' => null,
        'payCodes' => null,
        'csvMappings' => null,
        'departments' => null,
        'rti' => null,
        'users' => null,
        'hmrcNoticeSettings' => null,
        'payOptions' => null,
        'workingPatterns' => null,
        'occupationalPolicies' => null,
        'pensionSchemes' => null,
        'payees' => null,
        'reportPacks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employer' => false,
        'payCodes' => false,
        'csvMappings' => false,
        'departments' => false,
        'rti' => false,
        'users' => false,
        'hmrcNoticeSettings' => false,
        'payOptions' => false,
        'workingPatterns' => false,
        'occupationalPolicies' => false,
        'pensionSchemes' => false,
        'payees' => false,
        'reportPacks' => false
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
        'employer' => 'employer',
        'payCodes' => 'payCodes',
        'csvMappings' => 'csvMappings',
        'departments' => 'departments',
        'rti' => 'rti',
        'users' => 'users',
        'hmrcNoticeSettings' => 'hmrcNoticeSettings',
        'payOptions' => 'payOptions',
        'workingPatterns' => 'workingPatterns',
        'occupationalPolicies' => 'occupationalPolicies',
        'pensionSchemes' => 'pensionSchemes',
        'payees' => 'payees',
        'reportPacks' => 'reportPacks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employer' => 'setEmployer',
        'payCodes' => 'setPayCodes',
        'csvMappings' => 'setCsvMappings',
        'departments' => 'setDepartments',
        'rti' => 'setRti',
        'users' => 'setUsers',
        'hmrcNoticeSettings' => 'setHmrcNoticeSettings',
        'payOptions' => 'setPayOptions',
        'workingPatterns' => 'setWorkingPatterns',
        'occupationalPolicies' => 'setOccupationalPolicies',
        'pensionSchemes' => 'setPensionSchemes',
        'payees' => 'setPayees',
        'reportPacks' => 'setReportPacks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employer' => 'getEmployer',
        'payCodes' => 'getPayCodes',
        'csvMappings' => 'getCsvMappings',
        'departments' => 'getDepartments',
        'rti' => 'getRti',
        'users' => 'getUsers',
        'hmrcNoticeSettings' => 'getHmrcNoticeSettings',
        'payOptions' => 'getPayOptions',
        'workingPatterns' => 'getWorkingPatterns',
        'occupationalPolicies' => 'getOccupationalPolicies',
        'pensionSchemes' => 'getPensionSchemes',
        'payees' => 'getPayees',
        'reportPacks' => 'getReportPacks'
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
        $this->setIfExists('employer', $data ?? [], null);
        $this->setIfExists('payCodes', $data ?? [], null);
        $this->setIfExists('csvMappings', $data ?? [], null);
        $this->setIfExists('departments', $data ?? [], null);
        $this->setIfExists('rti', $data ?? [], null);
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('hmrcNoticeSettings', $data ?? [], null);
        $this->setIfExists('payOptions', $data ?? [], null);
        $this->setIfExists('workingPatterns', $data ?? [], null);
        $this->setIfExists('occupationalPolicies', $data ?? [], null);
        $this->setIfExists('pensionSchemes', $data ?? [], null);
        $this->setIfExists('payees', $data ?? [], null);
        $this->setIfExists('reportPacks', $data ?? [], null);
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
     * Gets employer
     *
     * @return \SynergiTech\Staffology\Model\EmployerItem|null
     */
    public function getEmployer(): ?\SynergiTech\Staffology\Model\EmployerItem
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param \SynergiTech\Staffology\Model\EmployerItem|null $employer employer
     *
     * @return $this
     */
    public function setEmployer(?\SynergiTech\Staffology\Model\EmployerItem $employer): static
    {
        if (is_null($employer)) {
            throw new InvalidArgumentException('non-nullable employer cannot be null');
        }
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets payCodes
     *
     * @return bool|null
     */
    public function getPayCodes(): ?bool
    {
        return $this->container['payCodes'];
    }

    /**
     * Sets payCodes
     *
     * @param bool|null $payCodes If true then PayCodes and PayCodeSets will be copied from the specified Employer
     *
     * @return $this
     */
    public function setPayCodes(?bool $payCodes): static
    {
        if (is_null($payCodes)) {
            throw new InvalidArgumentException('non-nullable payCodes cannot be null');
        }
        $this->container['payCodes'] = $payCodes;

        return $this;
    }

    /**
     * Gets csvMappings
     *
     * @return bool|null
     */
    public function getCsvMappings(): ?bool
    {
        return $this->container['csvMappings'];
    }

    /**
     * Sets csvMappings
     *
     * @param bool|null $csvMappings If true then CSV Mappings will be copied from the specified Employer
     *
     * @return $this
     */
    public function setCsvMappings(?bool $csvMappings): static
    {
        if (is_null($csvMappings)) {
            throw new InvalidArgumentException('non-nullable csvMappings cannot be null');
        }
        $this->container['csvMappings'] = $csvMappings;

        return $this;
    }

    /**
     * Gets departments
     *
     * @return bool|null
     */
    public function getDepartments(): ?bool
    {
        return $this->container['departments'];
    }

    /**
     * Sets departments
     *
     * @param bool|null $departments If true then Departments, Cost Centres and Analysis Categories will be copied from the specified Employer
     *
     * @return $this
     */
    public function setDepartments(?bool $departments): static
    {
        if (is_null($departments)) {
            throw new InvalidArgumentException('non-nullable departments cannot be null');
        }
        $this->container['departments'] = $departments;

        return $this;
    }

    /**
     * Gets rti
     *
     * @return bool|null
     */
    public function getRti(): ?bool
    {
        return $this->container['rti'];
    }

    /**
     * Sets rti
     *
     * @param bool|null $rti If true then RTI Settings will be copied from the specified Employer
     *
     * @return $this
     */
    public function setRti(?bool $rti): static
    {
        if (is_null($rti)) {
            throw new InvalidArgumentException('non-nullable rti cannot be null');
        }
        $this->container['rti'] = $rti;

        return $this;
    }

    /**
     * Gets users
     *
     * @return bool|null
     */
    public function getUsers(): ?bool
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param bool|null $users If true then Users will be copied from the specified Employer
     *
     * @return $this
     */
    public function setUsers(?bool $users): static
    {
        if (is_null($users)) {
            throw new InvalidArgumentException('non-nullable users cannot be null');
        }
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets hmrcNoticeSettings
     *
     * @return bool|null
     */
    public function getHmrcNoticeSettings(): ?bool
    {
        return $this->container['hmrcNoticeSettings'];
    }

    /**
     * Sets hmrcNoticeSettings
     *
     * @param bool|null $hmrcNoticeSettings If true then HMRC Notice Settings will be copied from the specified Employer
     *
     * @return $this
     */
    public function setHmrcNoticeSettings(?bool $hmrcNoticeSettings): static
    {
        if (is_null($hmrcNoticeSettings)) {
            throw new InvalidArgumentException('non-nullable hmrcNoticeSettings cannot be null');
        }
        $this->container['hmrcNoticeSettings'] = $hmrcNoticeSettings;

        return $this;
    }

    /**
     * Gets payOptions
     *
     * @return bool|null
     */
    public function getPayOptions(): ?bool
    {
        return $this->container['payOptions'];
    }

    /**
     * Sets payOptions
     *
     * @param bool|null $payOptions If true then Default Pay Options will be copied from the specified Employer.
     *
     * @return $this
     */
    public function setPayOptions(?bool $payOptions): static
    {
        if (is_null($payOptions)) {
            throw new InvalidArgumentException('non-nullable payOptions cannot be null');
        }
        $this->container['payOptions'] = $payOptions;

        return $this;
    }

    /**
     * Gets workingPatterns
     *
     * @return bool|null
     */
    public function getWorkingPatterns(): ?bool
    {
        return $this->container['workingPatterns'];
    }

    /**
     * Sets workingPatterns
     *
     * @param bool|null $workingPatterns If true then WorkingPatterns will be copied from the specified Employer
     *
     * @return $this
     */
    public function setWorkingPatterns(?bool $workingPatterns): static
    {
        if (is_null($workingPatterns)) {
            throw new InvalidArgumentException('non-nullable workingPatterns cannot be null');
        }
        $this->container['workingPatterns'] = $workingPatterns;

        return $this;
    }

    /**
     * Gets occupationalPolicies
     *
     * @return bool|null
     */
    public function getOccupationalPolicies(): ?bool
    {
        return $this->container['occupationalPolicies'];
    }

    /**
     * Sets occupationalPolicies
     *
     * @param bool|null $occupationalPolicies If true then Occupational Absence Schemes will be copied from the specified Employer.
     *
     * @return $this
     */
    public function setOccupationalPolicies(?bool $occupationalPolicies): static
    {
        if (is_null($occupationalPolicies)) {
            throw new InvalidArgumentException('non-nullable occupationalPolicies cannot be null');
        }
        $this->container['occupationalPolicies'] = $occupationalPolicies;

        return $this;
    }

    /**
     * Gets pensionSchemes
     *
     * @return bool|null
     */
    public function getPensionSchemes(): ?bool
    {
        return $this->container['pensionSchemes'];
    }

    /**
     * Sets pensionSchemes
     *
     * @param bool|null $pensionSchemes If true then PensionSchemes will be copied from the specified Employer
     *
     * @return $this
     */
    public function setPensionSchemes(?bool $pensionSchemes): static
    {
        if (is_null($pensionSchemes)) {
            throw new InvalidArgumentException('non-nullable pensionSchemes cannot be null');
        }
        $this->container['pensionSchemes'] = $pensionSchemes;

        return $this;
    }

    /**
     * Gets payees
     *
     * @return bool|null
     */
    public function getPayees(): ?bool
    {
        return $this->container['payees'];
    }

    /**
     * Sets payees
     *
     * @param bool|null $payees If true then Payees will be copied from the specified Employer
     *
     * @return $this
     */
    public function setPayees(?bool $payees): static
    {
        if (is_null($payees)) {
            throw new InvalidArgumentException('non-nullable payees cannot be null');
        }
        $this->container['payees'] = $payees;

        return $this;
    }

    /**
     * Gets reportPacks
     *
     * @return bool|null
     */
    public function getReportPacks(): ?bool
    {
        return $this->container['reportPacks'];
    }

    /**
     * Sets reportPacks
     *
     * @param bool|null $reportPacks If true then ReportPacks will be copied from the specified Employer
     *
     * @return $this
     */
    public function setReportPacks(?bool $reportPacks): static
    {
        if (is_null($reportPacks)) {
            throw new InvalidArgumentException('non-nullable reportPacks cannot be null');
        }
        $this->container['reportPacks'] = $reportPacks;

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

