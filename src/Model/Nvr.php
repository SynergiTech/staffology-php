<?php
/**
 * Nvr
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
 * Nvr Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Nvr implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Nvr';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employees' => '\SynergiTech\Staffology\Model\Item[]',
        'employeeCount' => 'int',
        'nvrRequest' => '\SynergiTech\Staffology\Model\NvrRequest',
        'iRmark' => 'string',
        'xml' => 'string',
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'employerReferences' => '\SynergiTech\Staffology\Model\EmpRefs',
        'govTalkSubmission' => '\SynergiTech\Staffology\Model\GovTalkSubmission',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employees' => null,
        'employeeCount' => 'int32',
        'nvrRequest' => null,
        'iRmark' => null,
        'xml' => null,
        'taxYear' => null,
        'employerReferences' => null,
        'govTalkSubmission' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employees' => true,
        'employeeCount' => false,
        'nvrRequest' => false,
        'iRmark' => true,
        'xml' => true,
        'taxYear' => false,
        'employerReferences' => false,
        'govTalkSubmission' => false,
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
        'employees' => 'employees',
        'employeeCount' => 'employeeCount',
        'nvrRequest' => 'nvrRequest',
        'iRmark' => 'iRmark',
        'xml' => 'xml',
        'taxYear' => 'taxYear',
        'employerReferences' => 'employerReferences',
        'govTalkSubmission' => 'govTalkSubmission',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employees' => 'setEmployees',
        'employeeCount' => 'setEmployeeCount',
        'nvrRequest' => 'setNvrRequest',
        'iRmark' => 'setIRmark',
        'xml' => 'setXml',
        'taxYear' => 'setTaxYear',
        'employerReferences' => 'setEmployerReferences',
        'govTalkSubmission' => 'setGovTalkSubmission',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employees' => 'getEmployees',
        'employeeCount' => 'getEmployeeCount',
        'nvrRequest' => 'getNvrRequest',
        'iRmark' => 'getIRmark',
        'xml' => 'getXml',
        'taxYear' => 'getTaxYear',
        'employerReferences' => 'getEmployerReferences',
        'govTalkSubmission' => 'getGovTalkSubmission',
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('employees', $data ?? [], null);
        $this->setIfExists('employeeCount', $data ?? [], null);
        $this->setIfExists('nvrRequest', $data ?? [], null);
        $this->setIfExists('iRmark', $data ?? [], null);
        $this->setIfExists('xml', $data ?? [], null);
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('employerReferences', $data ?? [], null);
        $this->setIfExists('govTalkSubmission', $data ?? [], null);
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
     * Gets employees
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getEmployees(): ?array
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $employees employees
     *
     * @return $this
     */
    public function setEmployees(?array $employees): static
    {
        if (is_null($employees)) {
            array_push($this->openAPINullablesSetToNull, 'employees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employees'] = $employees;

        return $this;
    }

    /**
     * Gets employeeCount
     *
     * @return int|null
     */
    public function getEmployeeCount(): ?int
    {
        return $this->container['employeeCount'];
    }

    /**
     * Sets employeeCount
     *
     * @param int|null $employeeCount employeeCount
     *
     * @return $this
     */
    public function setEmployeeCount(?int $employeeCount): static
    {
        if (is_null($employeeCount)) {
            throw new InvalidArgumentException('non-nullable employeeCount cannot be null');
        }
        $this->container['employeeCount'] = $employeeCount;

        return $this;
    }

    /**
     * Gets nvrRequest
     *
     * @return \SynergiTech\Staffology\Model\NvrRequest|null
     */
    public function getNvrRequest(): ?\SynergiTech\Staffology\Model\NvrRequest
    {
        return $this->container['nvrRequest'];
    }

    /**
     * Sets nvrRequest
     *
     * @param \SynergiTech\Staffology\Model\NvrRequest|null $nvrRequest nvrRequest
     *
     * @return $this
     */
    public function setNvrRequest(?\SynergiTech\Staffology\Model\NvrRequest $nvrRequest): static
    {
        if (is_null($nvrRequest)) {
            throw new InvalidArgumentException('non-nullable nvrRequest cannot be null');
        }
        $this->container['nvrRequest'] = $nvrRequest;

        return $this;
    }

    /**
     * Gets iRmark
     *
     * @return string|null
     */
    public function getIRmark(): ?string
    {
        return $this->container['iRmark'];
    }

    /**
     * Sets iRmark
     *
     * @param string|null $iRmark iRmark
     *
     * @return $this
     */
    public function setIRmark(?string $iRmark): static
    {
        if (is_null($iRmark)) {
            array_push($this->openAPINullablesSetToNull, 'iRmark');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iRmark', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iRmark'] = $iRmark;

        return $this;
    }

    /**
     * Gets xml
     *
     * @return string|null
     */
    public function getXml(): ?string
    {
        return $this->container['xml'];
    }

    /**
     * Sets xml
     *
     * @param string|null $xml This property will soon be removed and should not be used.  There is now a dedicated API endpoint for retrieving the XML for a submission.
     *
     * @return $this
     */
    public function setXml(?string $xml): static
    {
        if (is_null($xml)) {
            array_push($this->openAPINullablesSetToNull, 'xml');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('xml', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['xml'] = $xml;

        return $this;
    }

    /**
     * Gets taxYear
     *
     * @return \SynergiTech\Staffology\Model\TaxYear|null
     */
    public function getTaxYear(): ?\SynergiTech\Staffology\Model\TaxYear
    {
        return $this->container['taxYear'];
    }

    /**
     * Sets taxYear
     *
     * @param \SynergiTech\Staffology\Model\TaxYear|null $taxYear taxYear
     *
     * @return $this
     */
    public function setTaxYear(?\SynergiTech\Staffology\Model\TaxYear $taxYear): static
    {
        if (is_null($taxYear)) {
            throw new InvalidArgumentException('non-nullable taxYear cannot be null');
        }
        $this->container['taxYear'] = $taxYear;

        return $this;
    }

    /**
     * Gets employerReferences
     *
     * @return \SynergiTech\Staffology\Model\EmpRefs|null
     */
    public function getEmployerReferences(): ?\SynergiTech\Staffology\Model\EmpRefs
    {
        return $this->container['employerReferences'];
    }

    /**
     * Sets employerReferences
     *
     * @param \SynergiTech\Staffology\Model\EmpRefs|null $employerReferences employerReferences
     *
     * @return $this
     */
    public function setEmployerReferences(?\SynergiTech\Staffology\Model\EmpRefs $employerReferences): static
    {
        if (is_null($employerReferences)) {
            throw new InvalidArgumentException('non-nullable employerReferences cannot be null');
        }
        $this->container['employerReferences'] = $employerReferences;

        return $this;
    }

    /**
     * Gets govTalkSubmission
     *
     * @return \SynergiTech\Staffology\Model\GovTalkSubmission|null
     */
    public function getGovTalkSubmission(): ?\SynergiTech\Staffology\Model\GovTalkSubmission
    {
        return $this->container['govTalkSubmission'];
    }

    /**
     * Sets govTalkSubmission
     *
     * @param \SynergiTech\Staffology\Model\GovTalkSubmission|null $govTalkSubmission govTalkSubmission
     *
     * @return $this
     */
    public function setGovTalkSubmission(?\SynergiTech\Staffology\Model\GovTalkSubmission $govTalkSubmission): static
    {
        if (is_null($govTalkSubmission)) {
            throw new InvalidArgumentException('non-nullable govTalkSubmission cannot be null');
        }
        $this->container['govTalkSubmission'] = $govTalkSubmission;

        return $this;
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
     * @param string|null $id [readonly] The unique id of the object
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


