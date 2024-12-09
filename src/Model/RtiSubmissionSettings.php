<?php
/**
 * RtiSubmissionSettings
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
 * RtiSubmissionSettings Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RtiSubmissionSettings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RtiSubmissionSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'senderType' => '\SynergiTech\Staffology\Model\RtiSenderType',
        'senderId' => 'string',
        'password' => 'string',
        'excludeNilPaid' => 'bool',
        'includeHashCrossRef' => 'bool',
        'autoSubmitFps' => 'bool',
        'testInLive' => 'bool',
        'useTestGateway' => 'bool',
        'overrideTimestampValue' => 'string',
        'contact' => '\SynergiTech\Staffology\Model\RtiContact',
        'agent' => '\SynergiTech\Staffology\Model\RtiAgent',
        'allowLinkedEps' => 'bool',
        'shouldCompressFps' => 'bool',
        'autoSubmitEps' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'senderType' => null,
        'senderId' => null,
        'password' => null,
        'excludeNilPaid' => null,
        'includeHashCrossRef' => null,
        'autoSubmitFps' => null,
        'testInLive' => null,
        'useTestGateway' => null,
        'overrideTimestampValue' => null,
        'contact' => null,
        'agent' => null,
        'allowLinkedEps' => null,
        'shouldCompressFps' => null,
        'autoSubmitEps' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'senderType' => false,
        'senderId' => true,
        'password' => true,
        'excludeNilPaid' => false,
        'includeHashCrossRef' => false,
        'autoSubmitFps' => false,
        'testInLive' => false,
        'useTestGateway' => false,
        'overrideTimestampValue' => true,
        'contact' => false,
        'agent' => false,
        'allowLinkedEps' => false,
        'shouldCompressFps' => false,
        'autoSubmitEps' => false
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
        'senderType' => 'senderType',
        'senderId' => 'senderId',
        'password' => 'password',
        'excludeNilPaid' => 'excludeNilPaid',
        'includeHashCrossRef' => 'includeHashCrossRef',
        'autoSubmitFps' => 'autoSubmitFps',
        'testInLive' => 'testInLive',
        'useTestGateway' => 'useTestGateway',
        'overrideTimestampValue' => 'overrideTimestampValue',
        'contact' => 'contact',
        'agent' => 'agent',
        'allowLinkedEps' => 'allowLinkedEps',
        'shouldCompressFps' => 'shouldCompressFps',
        'autoSubmitEps' => 'autoSubmitEps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'senderType' => 'setSenderType',
        'senderId' => 'setSenderId',
        'password' => 'setPassword',
        'excludeNilPaid' => 'setExcludeNilPaid',
        'includeHashCrossRef' => 'setIncludeHashCrossRef',
        'autoSubmitFps' => 'setAutoSubmitFps',
        'testInLive' => 'setTestInLive',
        'useTestGateway' => 'setUseTestGateway',
        'overrideTimestampValue' => 'setOverrideTimestampValue',
        'contact' => 'setContact',
        'agent' => 'setAgent',
        'allowLinkedEps' => 'setAllowLinkedEps',
        'shouldCompressFps' => 'setShouldCompressFps',
        'autoSubmitEps' => 'setAutoSubmitEps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'senderType' => 'getSenderType',
        'senderId' => 'getSenderId',
        'password' => 'getPassword',
        'excludeNilPaid' => 'getExcludeNilPaid',
        'includeHashCrossRef' => 'getIncludeHashCrossRef',
        'autoSubmitFps' => 'getAutoSubmitFps',
        'testInLive' => 'getTestInLive',
        'useTestGateway' => 'getUseTestGateway',
        'overrideTimestampValue' => 'getOverrideTimestampValue',
        'contact' => 'getContact',
        'agent' => 'getAgent',
        'allowLinkedEps' => 'getAllowLinkedEps',
        'shouldCompressFps' => 'getShouldCompressFps',
        'autoSubmitEps' => 'getAutoSubmitEps'
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
        $this->setIfExists('senderType', $data ?? [], null);
        $this->setIfExists('senderId', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('excludeNilPaid', $data ?? [], null);
        $this->setIfExists('includeHashCrossRef', $data ?? [], null);
        $this->setIfExists('autoSubmitFps', $data ?? [], null);
        $this->setIfExists('testInLive', $data ?? [], null);
        $this->setIfExists('useTestGateway', $data ?? [], null);
        $this->setIfExists('overrideTimestampValue', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('agent', $data ?? [], null);
        $this->setIfExists('allowLinkedEps', $data ?? [], null);
        $this->setIfExists('shouldCompressFps', $data ?? [], null);
        $this->setIfExists('autoSubmitEps', $data ?? [], null);
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

        if (!is_null($this->container['senderId']) && (mb_strlen($this->container['senderId']) > 30)) {
            $invalidProperties[] = "invalid value for 'senderId', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 200)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['overrideTimestampValue']) && (mb_strlen($this->container['overrideTimestampValue']) > 25)) {
            $invalidProperties[] = "invalid value for 'overrideTimestampValue', the character length must be smaller than or equal to 25.";
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
     * Gets senderType
     *
     * @return \SynergiTech\Staffology\Model\RtiSenderType|null
     */
    public function getSenderType(): ?\SynergiTech\Staffology\Model\RtiSenderType
    {
        return $this->container['senderType'];
    }

    /**
     * Sets senderType
     *
     * @param \SynergiTech\Staffology\Model\RtiSenderType|null $senderType senderType
     *
     * @return $this
     */
    public function setSenderType(?\SynergiTech\Staffology\Model\RtiSenderType $senderType): static
    {
        if (is_null($senderType)) {
            throw new InvalidArgumentException('non-nullable senderType cannot be null');
        }
        $this->container['senderType'] = $senderType;

        return $this;
    }

    /**
     * Gets senderId
     *
     * @return string|null
     */
    public function getSenderId(): ?string
    {
        return $this->container['senderId'];
    }

    /**
     * Sets senderId
     *
     * @param string|null $senderId The SenderId used to submit RTI documents to HMRC
     *
     * @return $this
     */
    public function setSenderId(?string $senderId): static
    {
        if (is_null($senderId)) {
            array_push($this->openAPINullablesSetToNull, 'senderId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('senderId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($senderId) && (mb_strlen($senderId) > 30)) {
            throw new InvalidArgumentException('invalid length for $senderId when calling RtiSubmissionSettings., must be smaller than or equal to 30.');
        }

        $this->container['senderId'] = $senderId;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password The Password used to submit RTI documents to HMRC
     *
     * @return $this
     */
    public function setPassword(?string $password): static
    {
        if (is_null($password)) {
            array_push($this->openAPINullablesSetToNull, 'password');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('password', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($password) && (mb_strlen($password) > 200)) {
            throw new InvalidArgumentException('invalid length for $password when calling RtiSubmissionSettings., must be smaller than or equal to 200.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets excludeNilPaid
     *
     * @return bool|null
     */
    public function getExcludeNilPaid(): ?bool
    {
        return $this->container['excludeNilPaid'];
    }

    /**
     * Sets excludeNilPaid
     *
     * @param bool|null $excludeNilPaid Whether or not to include Employees paid a zero amount on your FPS
     *
     * @return $this
     */
    public function setExcludeNilPaid(?bool $excludeNilPaid): static
    {
        if (is_null($excludeNilPaid)) {
            throw new InvalidArgumentException('non-nullable excludeNilPaid cannot be null');
        }
        $this->container['excludeNilPaid'] = $excludeNilPaid;

        return $this;
    }

    /**
     * Gets includeHashCrossRef
     *
     * @return bool|null
     */
    public function getIncludeHashCrossRef(): ?bool
    {
        return $this->container['includeHashCrossRef'];
    }

    /**
     * Sets includeHashCrossRef
     *
     * @param bool|null $includeHashCrossRef [readonly] Whether or not the Bacs Cross Ref field is included on your FPS submissions  This is automatically set to true if you use a bank payments CSV format that supports it  or set to false if not
     *
     * @return $this
     */
    public function setIncludeHashCrossRef(?bool $includeHashCrossRef): static
    {
        if (is_null($includeHashCrossRef)) {
            throw new InvalidArgumentException('non-nullable includeHashCrossRef cannot be null');
        }
        $this->container['includeHashCrossRef'] = $includeHashCrossRef;

        return $this;
    }

    /**
     * Gets autoSubmitFps
     *
     * @return bool|null
     */
    public function getAutoSubmitFps(): ?bool
    {
        return $this->container['autoSubmitFps'];
    }

    /**
     * Sets autoSubmitFps
     *
     * @param bool|null $autoSubmitFps If set to true, we'll automatically send your FPS to HMRC whenever you finalise a PayRun
     *
     * @return $this
     */
    public function setAutoSubmitFps(?bool $autoSubmitFps): static
    {
        if (is_null($autoSubmitFps)) {
            throw new InvalidArgumentException('non-nullable autoSubmitFps cannot be null');
        }
        $this->container['autoSubmitFps'] = $autoSubmitFps;

        return $this;
    }

    /**
     * Gets testInLive
     *
     * @return bool|null
     */
    public function getTestInLive(): ?bool
    {
        return $this->container['testInLive'];
    }

    /**
     * Sets testInLive
     *
     * @param bool|null $testInLive Used for testing the RTI gateway. If set to true then the Document Type name will have \"-TIL\" appended to it
     *
     * @return $this
     */
    public function setTestInLive(?bool $testInLive): static
    {
        if (is_null($testInLive)) {
            throw new InvalidArgumentException('non-nullable testInLive cannot be null');
        }
        $this->container['testInLive'] = $testInLive;

        return $this;
    }

    /**
     * Gets useTestGateway
     *
     * @return bool|null
     */
    public function getUseTestGateway(): ?bool
    {
        return $this->container['useTestGateway'];
    }

    /**
     * Sets useTestGateway
     *
     * @param bool|null $useTestGateway If set to true then your RTI documents will be sent to HMRCs test services instead of the live service
     *
     * @return $this
     */
    public function setUseTestGateway(?bool $useTestGateway): static
    {
        if (is_null($useTestGateway)) {
            throw new InvalidArgumentException('non-nullable useTestGateway cannot be null');
        }
        $this->container['useTestGateway'] = $useTestGateway;

        return $this;
    }

    /**
     * Gets overrideTimestampValue
     *
     * @return string|null
     */
    public function getOverrideTimestampValue(): ?string
    {
        return $this->container['overrideTimestampValue'];
    }

    /**
     * Sets overrideTimestampValue
     *
     * @param string|null $overrideTimestampValue If a value is provided then it will be used as the timestamp on the RTI submission. This would normally only be used for testing purposes.
     *
     * @return $this
     */
    public function setOverrideTimestampValue(?string $overrideTimestampValue): static
    {
        if (is_null($overrideTimestampValue)) {
            array_push($this->openAPINullablesSetToNull, 'overrideTimestampValue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('overrideTimestampValue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($overrideTimestampValue) && (mb_strlen($overrideTimestampValue) > 25)) {
            throw new InvalidArgumentException('invalid length for $overrideTimestampValue when calling RtiSubmissionSettings., must be smaller than or equal to 25.');
        }

        $this->container['overrideTimestampValue'] = $overrideTimestampValue;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \SynergiTech\Staffology\Model\RtiContact|null
     */
    public function getContact(): ?\SynergiTech\Staffology\Model\RtiContact
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \SynergiTech\Staffology\Model\RtiContact|null $contact contact
     *
     * @return $this
     */
    public function setContact(?\SynergiTech\Staffology\Model\RtiContact $contact): static
    {
        if (is_null($contact)) {
            throw new InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return \SynergiTech\Staffology\Model\RtiAgent|null
     */
    public function getAgent(): ?\SynergiTech\Staffology\Model\RtiAgent
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param \SynergiTech\Staffology\Model\RtiAgent|null $agent agent
     *
     * @return $this
     */
    public function setAgent(?\SynergiTech\Staffology\Model\RtiAgent $agent): static
    {
        if (is_null($agent)) {
            throw new InvalidArgumentException('non-nullable agent cannot be null');
        }
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets allowLinkedEps
     *
     * @return bool|null
     */
    public function getAllowLinkedEps(): ?bool
    {
        return $this->container['allowLinkedEps'];
    }

    /**
     * Sets allowLinkedEps
     *
     * @param bool|null $allowLinkedEps If set to true this will allow you to submit a combined Employer Payment Summary
     *
     * @return $this
     */
    public function setAllowLinkedEps(?bool $allowLinkedEps): static
    {
        if (is_null($allowLinkedEps)) {
            throw new InvalidArgumentException('non-nullable allowLinkedEps cannot be null');
        }
        $this->container['allowLinkedEps'] = $allowLinkedEps;

        return $this;
    }

    /**
     * Gets shouldCompressFps
     *
     * @return bool|null
     */
    public function getShouldCompressFps(): ?bool
    {
        return $this->container['shouldCompressFps'];
    }

    /**
     * Sets shouldCompressFps
     *
     * @param bool|null $shouldCompressFps If set to true this will compress the FPS before submitting to HMRC
     *
     * @return $this
     */
    public function setShouldCompressFps(?bool $shouldCompressFps): static
    {
        if (is_null($shouldCompressFps)) {
            throw new InvalidArgumentException('non-nullable shouldCompressFps cannot be null');
        }
        $this->container['shouldCompressFps'] = $shouldCompressFps;

        return $this;
    }

    /**
     * Gets autoSubmitEps
     *
     * @return bool|null
     */
    public function getAutoSubmitEps(): ?bool
    {
        return $this->container['autoSubmitEps'];
    }

    /**
     * Sets autoSubmitEps
     *
     * @param bool|null $autoSubmitEps If set to true, we'll automatically send your EPS to HMRC whenever you finalise a PayRun.
     *
     * @return $this
     */
    public function setAutoSubmitEps(?bool $autoSubmitEps): static
    {
        if (is_null($autoSubmitEps)) {
            throw new InvalidArgumentException('non-nullable autoSubmitEps cannot be null');
        }
        $this->container['autoSubmitEps'] = $autoSubmitEps;

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


