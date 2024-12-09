<?php
/**
 * BankPaymentInstruction
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
 * BankPaymentInstruction Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BankPaymentInstruction implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BankPaymentInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'originator' => '\SynergiTech\Staffology\Model\BankDetails',
        'bankPayments' => '\SynergiTech\Staffology\Model\PayRunPayment[]',
        'status' => '\SynergiTech\Staffology\Model\BackgroundTaskStatus',
        'statusMessage' => 'string',
        'link' => 'string',
        'serviceUserNumber' => 'string',
        'bureauNumber' => 'string',
        'allowsMultiDate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'originator' => null,
        'bankPayments' => null,
        'status' => null,
        'statusMessage' => null,
        'link' => null,
        'serviceUserNumber' => null,
        'bureauNumber' => null,
        'allowsMultiDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'originator' => false,
        'bankPayments' => true,
        'status' => false,
        'statusMessage' => true,
        'link' => true,
        'serviceUserNumber' => true,
        'bureauNumber' => true,
        'allowsMultiDate' => false
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
        'originator' => 'originator',
        'bankPayments' => 'bankPayments',
        'status' => 'status',
        'statusMessage' => 'statusMessage',
        'link' => 'link',
        'serviceUserNumber' => 'serviceUserNumber',
        'bureauNumber' => 'bureauNumber',
        'allowsMultiDate' => 'allowsMultiDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'originator' => 'setOriginator',
        'bankPayments' => 'setBankPayments',
        'status' => 'setStatus',
        'statusMessage' => 'setStatusMessage',
        'link' => 'setLink',
        'serviceUserNumber' => 'setServiceUserNumber',
        'bureauNumber' => 'setBureauNumber',
        'allowsMultiDate' => 'setAllowsMultiDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'originator' => 'getOriginator',
        'bankPayments' => 'getBankPayments',
        'status' => 'getStatus',
        'statusMessage' => 'getStatusMessage',
        'link' => 'getLink',
        'serviceUserNumber' => 'getServiceUserNumber',
        'bureauNumber' => 'getBureauNumber',
        'allowsMultiDate' => 'getAllowsMultiDate'
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
        $this->setIfExists('originator', $data ?? [], null);
        $this->setIfExists('bankPayments', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusMessage', $data ?? [], null);
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('serviceUserNumber', $data ?? [], null);
        $this->setIfExists('bureauNumber', $data ?? [], null);
        $this->setIfExists('allowsMultiDate', $data ?? [], null);
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
     * Gets originator
     *
     * @return \SynergiTech\Staffology\Model\BankDetails|null
     */
    public function getOriginator(): ?\SynergiTech\Staffology\Model\BankDetails
    {
        return $this->container['originator'];
    }

    /**
     * Sets originator
     *
     * @param \SynergiTech\Staffology\Model\BankDetails|null $originator originator
     *
     * @return $this
     */
    public function setOriginator(?\SynergiTech\Staffology\Model\BankDetails $originator): static
    {
        if (is_null($originator)) {
            throw new InvalidArgumentException('non-nullable originator cannot be null');
        }
        $this->container['originator'] = $originator;

        return $this;
    }

    /**
     * Gets bankPayments
     *
     * @return \SynergiTech\Staffology\Model\PayRunPayment[]|null
     */
    public function getBankPayments(): ?array
    {
        return $this->container['bankPayments'];
    }

    /**
     * Sets bankPayments
     *
     * @param \SynergiTech\Staffology\Model\PayRunPayment[]|null $bankPayments bankPayments
     *
     * @return $this
     */
    public function setBankPayments(?array $bankPayments): static
    {
        if (is_null($bankPayments)) {
            array_push($this->openAPINullablesSetToNull, 'bankPayments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankPayments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bankPayments'] = $bankPayments;

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
     * @param string|null $statusMessage [readonly] A message to elaborate on the Status
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
     * Gets link
     *
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link [readonly] If available, a link to the payments in an ExternalDataProvider
     *
     * @return $this
     */
    public function setLink(?string $link): static
    {
        if (is_null($link)) {
            array_push($this->openAPINullablesSetToNull, 'link');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('link', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets serviceUserNumber
     *
     * @return string|null
     */
    public function getServiceUserNumber(): ?string
    {
        return $this->container['serviceUserNumber'];
    }

    /**
     * Sets serviceUserNumber
     *
     * @param string|null $serviceUserNumber Service user number to be used while sending payment instruction
     *
     * @return $this
     */
    public function setServiceUserNumber(?string $serviceUserNumber): static
    {
        if (is_null($serviceUserNumber)) {
            array_push($this->openAPINullablesSetToNull, 'serviceUserNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceUserNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceUserNumber'] = $serviceUserNumber;

        return $this;
    }

    /**
     * Gets bureauNumber
     *
     * @return string|null
     */
    public function getBureauNumber(): ?string
    {
        return $this->container['bureauNumber'];
    }

    /**
     * Sets bureauNumber
     *
     * @param string|null $bureauNumber Bureau number to be used if available while sending payment instruction
     *
     * @return $this
     */
    public function setBureauNumber(?string $bureauNumber): static
    {
        if (is_null($bureauNumber)) {
            array_push($this->openAPINullablesSetToNull, 'bureauNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bureauNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bureauNumber'] = $bureauNumber;

        return $this;
    }

    /**
     * Gets allowsMultiDate
     *
     * @return bool|null
     */
    public function getAllowsMultiDate(): ?bool
    {
        return $this->container['allowsMultiDate'];
    }

    /**
     * Sets allowsMultiDate
     *
     * @param bool|null $allowsMultiDate Allows multiple payment dates in the file
     *
     * @return $this
     */
    public function setAllowsMultiDate(?bool $allowsMultiDate): static
    {
        if (is_null($allowsMultiDate)) {
            throw new InvalidArgumentException('non-nullable allowsMultiDate cannot be null');
        }
        $this->container['allowsMultiDate'] = $allowsMultiDate;

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

