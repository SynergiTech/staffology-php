<?php
/**
 * PensionContributionsSubmission
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
 * PensionContributionsSubmission Class Doc Comment
 *
 * @description This model is used to track submission of Pension Contributions to an external data provider.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PensionContributionsSubmission implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PensionContributionsSubmission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employerId' => 'int',
        'payRunId' => 'int',
        'payPeriod' => '\SynergiTech\Staffology\Model\PayPeriods',
        'ordinal' => 'int',
        'period' => 'int',
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'schemeId' => 'int',
        'status' => '\SynergiTech\Staffology\Model\BackgroundTaskStatus',
        'externalId' => 'string',
        'statusMessage' => 'string',
        'submissionData' => 'mixed',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employerId' => 'int32',
        'payRunId' => 'int32',
        'payPeriod' => null,
        'ordinal' => 'int32',
        'period' => 'int32',
        'taxYear' => null,
        'schemeId' => 'int32',
        'status' => null,
        'externalId' => null,
        'statusMessage' => null,
        'submissionData' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employerId' => false,
        'payRunId' => false,
        'payPeriod' => false,
        'ordinal' => false,
        'period' => false,
        'taxYear' => false,
        'schemeId' => false,
        'status' => false,
        'externalId' => true,
        'statusMessage' => true,
        'submissionData' => true,
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
        'employerId' => 'employerId',
        'payRunId' => 'payRunId',
        'payPeriod' => 'payPeriod',
        'ordinal' => 'ordinal',
        'period' => 'period',
        'taxYear' => 'taxYear',
        'schemeId' => 'schemeId',
        'status' => 'status',
        'externalId' => 'externalId',
        'statusMessage' => 'statusMessage',
        'submissionData' => 'submissionData',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employerId' => 'setEmployerId',
        'payRunId' => 'setPayRunId',
        'payPeriod' => 'setPayPeriod',
        'ordinal' => 'setOrdinal',
        'period' => 'setPeriod',
        'taxYear' => 'setTaxYear',
        'schemeId' => 'setSchemeId',
        'status' => 'setStatus',
        'externalId' => 'setExternalId',
        'statusMessage' => 'setStatusMessage',
        'submissionData' => 'setSubmissionData',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employerId' => 'getEmployerId',
        'payRunId' => 'getPayRunId',
        'payPeriod' => 'getPayPeriod',
        'ordinal' => 'getOrdinal',
        'period' => 'getPeriod',
        'taxYear' => 'getTaxYear',
        'schemeId' => 'getSchemeId',
        'status' => 'getStatus',
        'externalId' => 'getExternalId',
        'statusMessage' => 'getStatusMessage',
        'submissionData' => 'getSubmissionData',
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
        $this->setIfExists('employerId', $data ?? [], null);
        $this->setIfExists('payRunId', $data ?? [], null);
        $this->setIfExists('payPeriod', $data ?? [], null);
        $this->setIfExists('ordinal', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('schemeId', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('externalId', $data ?? [], null);
        $this->setIfExists('statusMessage', $data ?? [], null);
        $this->setIfExists('submissionData', $data ?? [], null);
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
     * Gets employerId
     *
     * @return int|null
     */
    public function getEmployerId(): ?int
    {
        return $this->container['employerId'];
    }

    /**
     * Sets employerId
     *
     * @param int|null $employerId employerId
     *
     * @return $this
     */
    public function setEmployerId(?int $employerId): static
    {
        if (is_null($employerId)) {
            throw new InvalidArgumentException('non-nullable employerId cannot be null');
        }
        $this->container['employerId'] = $employerId;

        return $this;
    }

    /**
     * Gets payRunId
     *
     * @return int|null
     */
    public function getPayRunId(): ?int
    {
        return $this->container['payRunId'];
    }

    /**
     * Sets payRunId
     *
     * @param int|null $payRunId payRunId
     *
     * @return $this
     */
    public function setPayRunId(?int $payRunId): static
    {
        if (is_null($payRunId)) {
            throw new InvalidArgumentException('non-nullable payRunId cannot be null');
        }
        $this->container['payRunId'] = $payRunId;

        return $this;
    }

    /**
     * Gets payPeriod
     *
     * @return \SynergiTech\Staffology\Model\PayPeriods|null
     */
    public function getPayPeriod(): ?\SynergiTech\Staffology\Model\PayPeriods
    {
        return $this->container['payPeriod'];
    }

    /**
     * Sets payPeriod
     *
     * @param \SynergiTech\Staffology\Model\PayPeriods|null $payPeriod payPeriod
     *
     * @return $this
     */
    public function setPayPeriod(?\SynergiTech\Staffology\Model\PayPeriods $payPeriod): static
    {
        if (is_null($payPeriod)) {
            throw new InvalidArgumentException('non-nullable payPeriod cannot be null');
        }
        $this->container['payPeriod'] = $payPeriod;

        return $this;
    }

    /**
     * Gets ordinal
     *
     * @return int|null
     */
    public function getOrdinal(): ?int
    {
        return $this->container['ordinal'];
    }

    /**
     * Sets ordinal
     *
     * @param int|null $ordinal ordinal
     *
     * @return $this
     */
    public function setOrdinal(?int $ordinal): static
    {
        if (is_null($ordinal)) {
            throw new InvalidArgumentException('non-nullable ordinal cannot be null');
        }
        $this->container['ordinal'] = $ordinal;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod(?int $period): static
    {
        if (is_null($period)) {
            throw new InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

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
     * Gets schemeId
     *
     * @return int|null
     */
    public function getSchemeId(): ?int
    {
        return $this->container['schemeId'];
    }

    /**
     * Sets schemeId
     *
     * @param int|null $schemeId schemeId
     *
     * @return $this
     */
    public function setSchemeId(?int $schemeId): static
    {
        if (is_null($schemeId)) {
            throw new InvalidArgumentException('non-nullable schemeId cannot be null');
        }
        $this->container['schemeId'] = $schemeId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SynergiTech\Staffology\Model\BackgroundTaskStatus|null
     */
    public function getStatus(): ?\SynergiTech\Staffology\Model\BackgroundTaskStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SynergiTech\Staffology\Model\BackgroundTaskStatus|null $status status
     *
     * @return $this
     */
    public function setStatus(?\SynergiTech\Staffology\Model\BackgroundTaskStatus $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
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
     * @param string|null $externalId externalId
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
     * Gets statusMessage
     *
     * @return string|null
     */
    public function getStatusMessage(): ?string
    {
        return $this->container['statusMessage'];
    }

    /**
     * Sets statusMessage
     *
     * @param string|null $statusMessage statusMessage
     *
     * @return $this
     */
    public function setStatusMessage(?string $statusMessage): static
    {
        if (is_null($statusMessage)) {
            array_push($this->openAPINullablesSetToNull, 'statusMessage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('statusMessage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['statusMessage'] = $statusMessage;

        return $this;
    }

    /**
     * Gets submissionData
     *
     * @return mixed|null
     */
    public function getSubmissionData(): mixed
    {
        return $this->container['submissionData'];
    }

    /**
     * Sets submissionData
     *
     * @param mixed|null $submissionData submissionData
     *
     * @return $this
     */
    public function setSubmissionData(mixed $submissionData): static
    {
        if (is_null($submissionData)) {
            array_push($this->openAPINullablesSetToNull, 'submissionData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('submissionData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['submissionData'] = $submissionData;

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


