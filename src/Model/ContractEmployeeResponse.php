<?php
/**
 * ContractEmployeeResponse
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
 * ContractEmployeeResponse Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractEmployeeResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.EmployeeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'personalDetails' => '\SynergiTech\Staffology\Model\ContractPersonalDetailsResponse',
        'employmentDetails' => '\SynergiTech\Staffology\Model\ContractEmploymentDetailsResponse',
        'autoEnrolment' => '\SynergiTech\Staffology\Model\ContractAutoEnrolmentResponse',
        'leaveSettings' => '\SynergiTech\Staffology\Model\ContractEmployeeLeaveSettingsResponse',
        'rightToWork' => '\SynergiTech\Staffology\Model\ContractRightToWork',
        'bankDetails' => '\SynergiTech\Staffology\Model\ContractBankDetails',
        'payOptions' => '\SynergiTech\Staffology\Model\ContractPayOptionsResponse',
        'tags' => 'string[]',
        'status' => '\SynergiTech\Staffology\Model\EmployeeStatus',
        'aeNotEnroledWarning' => 'bool',
        'sourceSystemId' => 'string',
        'aggregatedServiceDate' => '\DateTime',
        'holidaySchemeUniqueId' => 'string',
        'evcId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'personalDetails' => null,
        'employmentDetails' => null,
        'autoEnrolment' => null,
        'leaveSettings' => null,
        'rightToWork' => null,
        'bankDetails' => null,
        'payOptions' => null,
        'tags' => null,
        'status' => null,
        'aeNotEnroledWarning' => null,
        'sourceSystemId' => null,
        'aggregatedServiceDate' => 'date',
        'holidaySchemeUniqueId' => 'uuid',
        'evcId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'personalDetails' => false,
        'employmentDetails' => false,
        'autoEnrolment' => false,
        'leaveSettings' => false,
        'rightToWork' => false,
        'bankDetails' => false,
        'payOptions' => false,
        'tags' => true,
        'status' => false,
        'aeNotEnroledWarning' => false,
        'sourceSystemId' => true,
        'aggregatedServiceDate' => true,
        'holidaySchemeUniqueId' => true,
        'evcId' => true
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
        'personalDetails' => 'personalDetails',
        'employmentDetails' => 'employmentDetails',
        'autoEnrolment' => 'autoEnrolment',
        'leaveSettings' => 'leaveSettings',
        'rightToWork' => 'rightToWork',
        'bankDetails' => 'bankDetails',
        'payOptions' => 'payOptions',
        'tags' => 'tags',
        'status' => 'status',
        'aeNotEnroledWarning' => 'aeNotEnroledWarning',
        'sourceSystemId' => 'sourceSystemId',
        'aggregatedServiceDate' => 'aggregatedServiceDate',
        'holidaySchemeUniqueId' => 'holidaySchemeUniqueId',
        'evcId' => 'evcId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'personalDetails' => 'setPersonalDetails',
        'employmentDetails' => 'setEmploymentDetails',
        'autoEnrolment' => 'setAutoEnrolment',
        'leaveSettings' => 'setLeaveSettings',
        'rightToWork' => 'setRightToWork',
        'bankDetails' => 'setBankDetails',
        'payOptions' => 'setPayOptions',
        'tags' => 'setTags',
        'status' => 'setStatus',
        'aeNotEnroledWarning' => 'setAeNotEnroledWarning',
        'sourceSystemId' => 'setSourceSystemId',
        'aggregatedServiceDate' => 'setAggregatedServiceDate',
        'holidaySchemeUniqueId' => 'setHolidaySchemeUniqueId',
        'evcId' => 'setEvcId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'personalDetails' => 'getPersonalDetails',
        'employmentDetails' => 'getEmploymentDetails',
        'autoEnrolment' => 'getAutoEnrolment',
        'leaveSettings' => 'getLeaveSettings',
        'rightToWork' => 'getRightToWork',
        'bankDetails' => 'getBankDetails',
        'payOptions' => 'getPayOptions',
        'tags' => 'getTags',
        'status' => 'getStatus',
        'aeNotEnroledWarning' => 'getAeNotEnroledWarning',
        'sourceSystemId' => 'getSourceSystemId',
        'aggregatedServiceDate' => 'getAggregatedServiceDate',
        'holidaySchemeUniqueId' => 'getHolidaySchemeUniqueId',
        'evcId' => 'getEvcId'
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
        $this->setIfExists('personalDetails', $data ?? [], null);
        $this->setIfExists('employmentDetails', $data ?? [], null);
        $this->setIfExists('autoEnrolment', $data ?? [], null);
        $this->setIfExists('leaveSettings', $data ?? [], null);
        $this->setIfExists('rightToWork', $data ?? [], null);
        $this->setIfExists('bankDetails', $data ?? [], null);
        $this->setIfExists('payOptions', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('aeNotEnroledWarning', $data ?? [], null);
        $this->setIfExists('sourceSystemId', $data ?? [], null);
        $this->setIfExists('aggregatedServiceDate', $data ?? [], null);
        $this->setIfExists('holidaySchemeUniqueId', $data ?? [], null);
        $this->setIfExists('evcId', $data ?? [], null);
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
     * @param string|null $id The unique id of the object
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
     * Gets personalDetails
     *
     * @return \SynergiTech\Staffology\Model\ContractPersonalDetailsResponse|null
     */
    public function getPersonalDetails(): ?\SynergiTech\Staffology\Model\ContractPersonalDetailsResponse
    {
        return $this->container['personalDetails'];
    }

    /**
     * Sets personalDetails
     *
     * @param \SynergiTech\Staffology\Model\ContractPersonalDetailsResponse|null $personalDetails personalDetails
     *
     * @return $this
     */
    public function setPersonalDetails(?\SynergiTech\Staffology\Model\ContractPersonalDetailsResponse $personalDetails): static
    {
        if (is_null($personalDetails)) {
            throw new InvalidArgumentException('non-nullable personalDetails cannot be null');
        }
        $this->container['personalDetails'] = $personalDetails;

        return $this;
    }

    /**
     * Gets employmentDetails
     *
     * @return \SynergiTech\Staffology\Model\ContractEmploymentDetailsResponse|null
     */
    public function getEmploymentDetails(): ?\SynergiTech\Staffology\Model\ContractEmploymentDetailsResponse
    {
        return $this->container['employmentDetails'];
    }

    /**
     * Sets employmentDetails
     *
     * @param \SynergiTech\Staffology\Model\ContractEmploymentDetailsResponse|null $employmentDetails employmentDetails
     *
     * @return $this
     */
    public function setEmploymentDetails(?\SynergiTech\Staffology\Model\ContractEmploymentDetailsResponse $employmentDetails): static
    {
        if (is_null($employmentDetails)) {
            throw new InvalidArgumentException('non-nullable employmentDetails cannot be null');
        }
        $this->container['employmentDetails'] = $employmentDetails;

        return $this;
    }

    /**
     * Gets autoEnrolment
     *
     * @return \SynergiTech\Staffology\Model\ContractAutoEnrolmentResponse|null
     */
    public function getAutoEnrolment(): ?\SynergiTech\Staffology\Model\ContractAutoEnrolmentResponse
    {
        return $this->container['autoEnrolment'];
    }

    /**
     * Sets autoEnrolment
     *
     * @param \SynergiTech\Staffology\Model\ContractAutoEnrolmentResponse|null $autoEnrolment autoEnrolment
     *
     * @return $this
     */
    public function setAutoEnrolment(?\SynergiTech\Staffology\Model\ContractAutoEnrolmentResponse $autoEnrolment): static
    {
        if (is_null($autoEnrolment)) {
            throw new InvalidArgumentException('non-nullable autoEnrolment cannot be null');
        }
        $this->container['autoEnrolment'] = $autoEnrolment;

        return $this;
    }

    /**
     * Gets leaveSettings
     *
     * @return \SynergiTech\Staffology\Model\ContractEmployeeLeaveSettingsResponse|null
     */
    public function getLeaveSettings(): ?\SynergiTech\Staffology\Model\ContractEmployeeLeaveSettingsResponse
    {
        return $this->container['leaveSettings'];
    }

    /**
     * Sets leaveSettings
     *
     * @param \SynergiTech\Staffology\Model\ContractEmployeeLeaveSettingsResponse|null $leaveSettings leaveSettings
     *
     * @return $this
     */
    public function setLeaveSettings(?\SynergiTech\Staffology\Model\ContractEmployeeLeaveSettingsResponse $leaveSettings): static
    {
        if (is_null($leaveSettings)) {
            throw new InvalidArgumentException('non-nullable leaveSettings cannot be null');
        }
        $this->container['leaveSettings'] = $leaveSettings;

        return $this;
    }

    /**
     * Gets rightToWork
     *
     * @return \SynergiTech\Staffology\Model\ContractRightToWork|null
     */
    public function getRightToWork(): ?\SynergiTech\Staffology\Model\ContractRightToWork
    {
        return $this->container['rightToWork'];
    }

    /**
     * Sets rightToWork
     *
     * @param \SynergiTech\Staffology\Model\ContractRightToWork|null $rightToWork rightToWork
     *
     * @return $this
     */
    public function setRightToWork(?\SynergiTech\Staffology\Model\ContractRightToWork $rightToWork): static
    {
        if (is_null($rightToWork)) {
            throw new InvalidArgumentException('non-nullable rightToWork cannot be null');
        }
        $this->container['rightToWork'] = $rightToWork;

        return $this;
    }

    /**
     * Gets bankDetails
     *
     * @return \SynergiTech\Staffology\Model\ContractBankDetails|null
     */
    public function getBankDetails(): ?\SynergiTech\Staffology\Model\ContractBankDetails
    {
        return $this->container['bankDetails'];
    }

    /**
     * Sets bankDetails
     *
     * @param \SynergiTech\Staffology\Model\ContractBankDetails|null $bankDetails bankDetails
     *
     * @return $this
     */
    public function setBankDetails(?\SynergiTech\Staffology\Model\ContractBankDetails $bankDetails): static
    {
        if (is_null($bankDetails)) {
            throw new InvalidArgumentException('non-nullable bankDetails cannot be null');
        }
        $this->container['bankDetails'] = $bankDetails;

        return $this;
    }

    /**
     * Gets payOptions
     *
     * @return \SynergiTech\Staffology\Model\ContractPayOptionsResponse|null
     */
    public function getPayOptions(): ?\SynergiTech\Staffology\Model\ContractPayOptionsResponse
    {
        return $this->container['payOptions'];
    }

    /**
     * Sets payOptions
     *
     * @param \SynergiTech\Staffology\Model\ContractPayOptionsResponse|null $payOptions payOptions
     *
     * @return $this
     */
    public function setPayOptions(?\SynergiTech\Staffology\Model\ContractPayOptionsResponse $payOptions): static
    {
        if (is_null($payOptions)) {
            throw new InvalidArgumentException('non-nullable payOptions cannot be null');
        }
        $this->container['payOptions'] = $payOptions;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return $this
     */
    public function setTags(?array $tags): static
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SynergiTech\Staffology\Model\EmployeeStatus|null
     */
    public function getStatus(): ?\SynergiTech\Staffology\Model\EmployeeStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SynergiTech\Staffology\Model\EmployeeStatus|null $status status
     *
     * @return $this
     */
    public function setStatus(?\SynergiTech\Staffology\Model\EmployeeStatus $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets aeNotEnroledWarning
     *
     * @return bool|null
     */
    public function getAeNotEnroledWarning(): ?bool
    {
        return $this->container['aeNotEnroledWarning'];
    }

    /**
     * Sets aeNotEnroledWarning
     *
     * @param bool|null $aeNotEnroledWarning aeNotEnroledWarning
     *
     * @return $this
     */
    public function setAeNotEnroledWarning(?bool $aeNotEnroledWarning): static
    {
        if (is_null($aeNotEnroledWarning)) {
            throw new InvalidArgumentException('non-nullable aeNotEnroledWarning cannot be null');
        }
        $this->container['aeNotEnroledWarning'] = $aeNotEnroledWarning;

        return $this;
    }

    /**
     * Gets sourceSystemId
     *
     * @return string|null
     */
    public function getSourceSystemId(): ?string
    {
        return $this->container['sourceSystemId'];
    }

    /**
     * Sets sourceSystemId
     *
     * @param string|null $sourceSystemId sourceSystemId
     *
     * @return $this
     */
    public function setSourceSystemId(?string $sourceSystemId): static
    {
        if (is_null($sourceSystemId)) {
            array_push($this->openAPINullablesSetToNull, 'sourceSystemId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sourceSystemId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sourceSystemId'] = $sourceSystemId;

        return $this;
    }

    /**
     * Gets aggregatedServiceDate
     *
     * @return \DateTime|null
     */
    public function getAggregatedServiceDate(): ?\DateTime
    {
        return $this->container['aggregatedServiceDate'];
    }

    /**
     * Sets aggregatedServiceDate
     *
     * @param \DateTime|null $aggregatedServiceDate aggregatedServiceDate
     *
     * @return $this
     */
    public function setAggregatedServiceDate(?\DateTime $aggregatedServiceDate): static
    {
        if (is_null($aggregatedServiceDate)) {
            array_push($this->openAPINullablesSetToNull, 'aggregatedServiceDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aggregatedServiceDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aggregatedServiceDate'] = $aggregatedServiceDate;

        return $this;
    }

    /**
     * Gets holidaySchemeUniqueId
     *
     * @return string|null
     */
    public function getHolidaySchemeUniqueId(): ?string
    {
        return $this->container['holidaySchemeUniqueId'];
    }

    /**
     * Sets holidaySchemeUniqueId
     *
     * @param string|null $holidaySchemeUniqueId holidaySchemeUniqueId
     *
     * @return $this
     */
    public function setHolidaySchemeUniqueId(?string $holidaySchemeUniqueId): static
    {
        if (is_null($holidaySchemeUniqueId)) {
            array_push($this->openAPINullablesSetToNull, 'holidaySchemeUniqueId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('holidaySchemeUniqueId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['holidaySchemeUniqueId'] = $holidaySchemeUniqueId;

        return $this;
    }

    /**
     * Gets evcId
     *
     * @return string|null
     */
    public function getEvcId(): ?string
    {
        return $this->container['evcId'];
    }

    /**
     * Sets evcId
     *
     * @param string|null $evcId If set then this will be used as the EmployeeIDFromProduct sent to EVC in place of the standard EmployeeId.
     *
     * @return $this
     */
    public function setEvcId(?string $evcId): static
    {
        if (is_null($evcId)) {
            array_push($this->openAPINullablesSetToNull, 'evcId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('evcId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['evcId'] = $evcId;

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


