<?php
/**
 * PapdisDocument
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
 * PapdisDocument Class Doc Comment
 *
 * @description PAPDIS stands for &#39;Payroll and Pension Data Interface Standard&#39;.  It is an industry standard for exchanging data between payroll software and pension providers.  Our system provides an export of data in this standard and these models are used to represent the data.  Whilst the relevant reporting API endpoint can provide this data as a JSON entity, it is usually represented in CSV or XML format which our API also provides.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PapdisDocument implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PapdisDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'messageFunctionCode' => '\SynergiTech\Staffology\Model\PapdisMessageFunctionCode',
        'version' => '\SynergiTech\Staffology\Model\PapdisVersion',
        'messageFunctionCodeInt' => 'int',
        'pensionProvider' => '\SynergiTech\Staffology\Model\PapdisPensionProvider',
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
        'messageFunctionCode' => null,
        'version' => null,
        'messageFunctionCodeInt' => 'int32',
        'pensionProvider' => null,
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
        'messageFunctionCode' => false,
        'version' => false,
        'messageFunctionCodeInt' => false,
        'pensionProvider' => false,
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
        'messageFunctionCode' => 'messageFunctionCode',
        'version' => 'version',
        'messageFunctionCodeInt' => 'messageFunctionCodeInt',
        'pensionProvider' => 'pensionProvider',
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
        'messageFunctionCode' => 'setMessageFunctionCode',
        'version' => 'setVersion',
        'messageFunctionCodeInt' => 'setMessageFunctionCodeInt',
        'pensionProvider' => 'setPensionProvider',
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
        'messageFunctionCode' => 'getMessageFunctionCode',
        'version' => 'getVersion',
        'messageFunctionCodeInt' => 'getMessageFunctionCodeInt',
        'pensionProvider' => 'getPensionProvider',
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('messageFunctionCode', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('messageFunctionCodeInt', $data ?? [], null);
        $this->setIfExists('pensionProvider', $data ?? [], null);
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
     * Gets messageFunctionCode
     *
     * @return \SynergiTech\Staffology\Model\PapdisMessageFunctionCode|null
     */
    public function getMessageFunctionCode(): ?\SynergiTech\Staffology\Model\PapdisMessageFunctionCode
    {
        return $this->container['messageFunctionCode'];
    }

    /**
     * Sets messageFunctionCode
     *
     * @param \SynergiTech\Staffology\Model\PapdisMessageFunctionCode|null $messageFunctionCode messageFunctionCode
     *
     * @return $this
     */
    public function setMessageFunctionCode(?\SynergiTech\Staffology\Model\PapdisMessageFunctionCode $messageFunctionCode): static
    {
        if (is_null($messageFunctionCode)) {
            throw new InvalidArgumentException('non-nullable messageFunctionCode cannot be null');
        }
        $this->container['messageFunctionCode'] = $messageFunctionCode;

        return $this;
    }

    /**
     * Gets version
     *
     * @return \SynergiTech\Staffology\Model\PapdisVersion|null
     */
    public function getVersion(): ?\SynergiTech\Staffology\Model\PapdisVersion
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param \SynergiTech\Staffology\Model\PapdisVersion|null $version version
     *
     * @return $this
     */
    public function setVersion(?\SynergiTech\Staffology\Model\PapdisVersion $version): static
    {
        if (is_null($version)) {
            throw new InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets messageFunctionCodeInt
     *
     * @return int|null
     */
    public function getMessageFunctionCodeInt(): ?int
    {
        return $this->container['messageFunctionCodeInt'];
    }

    /**
     * Sets messageFunctionCodeInt
     *
     * @param int|null $messageFunctionCodeInt [readonly]
     *
     * @return $this
     */
    public function setMessageFunctionCodeInt(?int $messageFunctionCodeInt): static
    {
        if (is_null($messageFunctionCodeInt)) {
            throw new InvalidArgumentException('non-nullable messageFunctionCodeInt cannot be null');
        }
        $this->container['messageFunctionCodeInt'] = $messageFunctionCodeInt;

        return $this;
    }

    /**
     * Gets pensionProvider
     *
     * @return \SynergiTech\Staffology\Model\PapdisPensionProvider|null
     */
    public function getPensionProvider(): ?\SynergiTech\Staffology\Model\PapdisPensionProvider
    {
        return $this->container['pensionProvider'];
    }

    /**
     * Sets pensionProvider
     *
     * @param \SynergiTech\Staffology\Model\PapdisPensionProvider|null $pensionProvider pensionProvider
     *
     * @return $this
     */
    public function setPensionProvider(?\SynergiTech\Staffology\Model\PapdisPensionProvider $pensionProvider): static
    {
        if (is_null($pensionProvider)) {
            throw new InvalidArgumentException('non-nullable pensionProvider cannot be null');
        }
        $this->container['pensionProvider'] = $pensionProvider;

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


