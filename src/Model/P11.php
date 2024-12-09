<?php
/**
 * P11
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
 * P11 Class Doc Comment
 *
 * @description A P11 Report summarises payments and deductions made to an employee.  Our Reports API can return this to you in many formats including as a PDF file  If you request is as a JSOn object then it is represented using this model.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class P11 implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'P11';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employerName' => 'string',
        'payrollCode' => 'string',
        'employerOfficeNo' => 'string',
        'employerPayeRef' => 'string',
        'firstname' => 'string',
        'surname' => 'string',
        'niNumber' => 'string',
        'taxCode' => 'string',
        'dateOfBirth' => '\DateTime',
        'joinDate' => '\DateTime',
        'leaveDate' => '\DateTime',
        'lines' => '\SynergiTech\Staffology\Model\P11Line[]',
        'report' => '\SynergiTech\Staffology\Model\Report',
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'title' => 'string',
        'isDraft' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employerName' => null,
        'payrollCode' => null,
        'employerOfficeNo' => null,
        'employerPayeRef' => null,
        'firstname' => null,
        'surname' => null,
        'niNumber' => null,
        'taxCode' => null,
        'dateOfBirth' => 'date',
        'joinDate' => 'date',
        'leaveDate' => 'date',
        'lines' => null,
        'report' => null,
        'taxYear' => null,
        'title' => null,
        'isDraft' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employerName' => true,
        'payrollCode' => true,
        'employerOfficeNo' => true,
        'employerPayeRef' => true,
        'firstname' => true,
        'surname' => true,
        'niNumber' => true,
        'taxCode' => true,
        'dateOfBirth' => false,
        'joinDate' => false,
        'leaveDate' => true,
        'lines' => true,
        'report' => false,
        'taxYear' => false,
        'title' => true,
        'isDraft' => false
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
        'employerName' => 'employerName',
        'payrollCode' => 'payrollCode',
        'employerOfficeNo' => 'employerOfficeNo',
        'employerPayeRef' => 'employerPayeRef',
        'firstname' => 'firstname',
        'surname' => 'surname',
        'niNumber' => 'niNumber',
        'taxCode' => 'taxCode',
        'dateOfBirth' => 'dateOfBirth',
        'joinDate' => 'joinDate',
        'leaveDate' => 'leaveDate',
        'lines' => 'lines',
        'report' => 'report',
        'taxYear' => 'taxYear',
        'title' => 'title',
        'isDraft' => 'isDraft'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employerName' => 'setEmployerName',
        'payrollCode' => 'setPayrollCode',
        'employerOfficeNo' => 'setEmployerOfficeNo',
        'employerPayeRef' => 'setEmployerPayeRef',
        'firstname' => 'setFirstname',
        'surname' => 'setSurname',
        'niNumber' => 'setNiNumber',
        'taxCode' => 'setTaxCode',
        'dateOfBirth' => 'setDateOfBirth',
        'joinDate' => 'setJoinDate',
        'leaveDate' => 'setLeaveDate',
        'lines' => 'setLines',
        'report' => 'setReport',
        'taxYear' => 'setTaxYear',
        'title' => 'setTitle',
        'isDraft' => 'setIsDraft'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employerName' => 'getEmployerName',
        'payrollCode' => 'getPayrollCode',
        'employerOfficeNo' => 'getEmployerOfficeNo',
        'employerPayeRef' => 'getEmployerPayeRef',
        'firstname' => 'getFirstname',
        'surname' => 'getSurname',
        'niNumber' => 'getNiNumber',
        'taxCode' => 'getTaxCode',
        'dateOfBirth' => 'getDateOfBirth',
        'joinDate' => 'getJoinDate',
        'leaveDate' => 'getLeaveDate',
        'lines' => 'getLines',
        'report' => 'getReport',
        'taxYear' => 'getTaxYear',
        'title' => 'getTitle',
        'isDraft' => 'getIsDraft'
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
        $this->setIfExists('employerName', $data ?? [], null);
        $this->setIfExists('payrollCode', $data ?? [], null);
        $this->setIfExists('employerOfficeNo', $data ?? [], null);
        $this->setIfExists('employerPayeRef', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('niNumber', $data ?? [], null);
        $this->setIfExists('taxCode', $data ?? [], null);
        $this->setIfExists('dateOfBirth', $data ?? [], null);
        $this->setIfExists('joinDate', $data ?? [], null);
        $this->setIfExists('leaveDate', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('report', $data ?? [], null);
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('isDraft', $data ?? [], null);
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
     * Gets employerName
     *
     * @return string|null
     */
    public function getEmployerName(): ?string
    {
        return $this->container['employerName'];
    }

    /**
     * Sets employerName
     *
     * @param string|null $employerName [readonly]
     *
     * @return $this
     */
    public function setEmployerName(?string $employerName): static
    {
        if (is_null($employerName)) {
            array_push($this->openAPINullablesSetToNull, 'employerName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerName'] = $employerName;

        return $this;
    }

    /**
     * Gets payrollCode
     *
     * @return string|null
     */
    public function getPayrollCode(): ?string
    {
        return $this->container['payrollCode'];
    }

    /**
     * Sets payrollCode
     *
     * @param string|null $payrollCode [readonly]
     *
     * @return $this
     */
    public function setPayrollCode(?string $payrollCode): static
    {
        if (is_null($payrollCode)) {
            array_push($this->openAPINullablesSetToNull, 'payrollCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payrollCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payrollCode'] = $payrollCode;

        return $this;
    }

    /**
     * Gets employerOfficeNo
     *
     * @return string|null
     */
    public function getEmployerOfficeNo(): ?string
    {
        return $this->container['employerOfficeNo'];
    }

    /**
     * Sets employerOfficeNo
     *
     * @param string|null $employerOfficeNo [readonly]
     *
     * @return $this
     */
    public function setEmployerOfficeNo(?string $employerOfficeNo): static
    {
        if (is_null($employerOfficeNo)) {
            array_push($this->openAPINullablesSetToNull, 'employerOfficeNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerOfficeNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerOfficeNo'] = $employerOfficeNo;

        return $this;
    }

    /**
     * Gets employerPayeRef
     *
     * @return string|null
     */
    public function getEmployerPayeRef(): ?string
    {
        return $this->container['employerPayeRef'];
    }

    /**
     * Sets employerPayeRef
     *
     * @param string|null $employerPayeRef [readonly]
     *
     * @return $this
     */
    public function setEmployerPayeRef(?string $employerPayeRef): static
    {
        if (is_null($employerPayeRef)) {
            array_push($this->openAPINullablesSetToNull, 'employerPayeRef');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerPayeRef', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerPayeRef'] = $employerPayeRef;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname [readonly]
     *
     * @return $this
     */
    public function setFirstname(?string $firstname): static
    {
        if (is_null($firstname)) {
            array_push($this->openAPINullablesSetToNull, 'firstname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('firstname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname [readonly]
     *
     * @return $this
     */
    public function setSurname(?string $surname): static
    {
        if (is_null($surname)) {
            array_push($this->openAPINullablesSetToNull, 'surname');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('surname', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets niNumber
     *
     * @return string|null
     */
    public function getNiNumber(): ?string
    {
        return $this->container['niNumber'];
    }

    /**
     * Sets niNumber
     *
     * @param string|null $niNumber [readonly]
     *
     * @return $this
     */
    public function setNiNumber(?string $niNumber): static
    {
        if (is_null($niNumber)) {
            array_push($this->openAPINullablesSetToNull, 'niNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('niNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['niNumber'] = $niNumber;

        return $this;
    }

    /**
     * Gets taxCode
     *
     * @return string|null
     */
    public function getTaxCode(): ?string
    {
        return $this->container['taxCode'];
    }

    /**
     * Sets taxCode
     *
     * @param string|null $taxCode [readonly]
     *
     * @return $this
     */
    public function setTaxCode(?string $taxCode): static
    {
        if (is_null($taxCode)) {
            array_push($this->openAPINullablesSetToNull, 'taxCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxCode'] = $taxCode;

        return $this;
    }

    /**
     * Gets dateOfBirth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth(): ?\DateTime
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     *
     * @param \DateTime|null $dateOfBirth [readonly]
     *
     * @return $this
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth): static
    {
        if (is_null($dateOfBirth)) {
            throw new InvalidArgumentException('non-nullable dateOfBirth cannot be null');
        }
        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets joinDate
     *
     * @return \DateTime|null
     */
    public function getJoinDate(): ?\DateTime
    {
        return $this->container['joinDate'];
    }

    /**
     * Sets joinDate
     *
     * @param \DateTime|null $joinDate [readonly]
     *
     * @return $this
     */
    public function setJoinDate(?\DateTime $joinDate): static
    {
        if (is_null($joinDate)) {
            throw new InvalidArgumentException('non-nullable joinDate cannot be null');
        }
        $this->container['joinDate'] = $joinDate;

        return $this;
    }

    /**
     * Gets leaveDate
     *
     * @return \DateTime|null
     */
    public function getLeaveDate(): ?\DateTime
    {
        return $this->container['leaveDate'];
    }

    /**
     * Sets leaveDate
     *
     * @param \DateTime|null $leaveDate [readonly]
     *
     * @return $this
     */
    public function setLeaveDate(?\DateTime $leaveDate): static
    {
        if (is_null($leaveDate)) {
            array_push($this->openAPINullablesSetToNull, 'leaveDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('leaveDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['leaveDate'] = $leaveDate;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \SynergiTech\Staffology\Model\P11Line[]|null
     */
    public function getLines(): ?array
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \SynergiTech\Staffology\Model\P11Line[]|null $lines [readonly]
     *
     * @return $this
     */
    public function setLines(?array $lines): static
    {
        if (is_null($lines)) {
            array_push($this->openAPINullablesSetToNull, 'lines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets report
     *
     * @return \SynergiTech\Staffology\Model\Report|null
     */
    public function getReport(): ?\SynergiTech\Staffology\Model\Report
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param \SynergiTech\Staffology\Model\Report|null $report report
     *
     * @return $this
     */
    public function setReport(?\SynergiTech\Staffology\Model\Report $report): static
    {
        if (is_null($report)) {
            throw new InvalidArgumentException('non-nullable report cannot be null');
        }
        $this->container['report'] = $report;

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
     * @param string|null $title title
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
     * Gets isDraft
     *
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->container['isDraft'];
    }

    /**
     * Sets isDraft
     *
     * @param bool|null $isDraft isDraft
     *
     * @return $this
     */
    public function setIsDraft(?bool $isDraft): static
    {
        if (is_null($isDraft)) {
            throw new InvalidArgumentException('non-nullable isDraft cannot be null');
        }
        $this->container['isDraft'] = $isDraft;

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

