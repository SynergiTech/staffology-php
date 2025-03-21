<?php
/**
 * GovTalk
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
 * GovTalk Class Doc Comment
 *
 * @description Part of the TaxYearConfig that our engine uses submit documents to the HMRC Gateway.  It is used internally when our engine communicates with HMRC.  You do not need to do anything with this model, it&#39;s provided purely for informational purposes.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GovTalk implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GovTalk';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'fullPaymentSubmissionNamespace' => 'string',
        'fullPaymentSubmissionNamespaceVersion' => 'string',
        'employerPaymentSummaryNamespace' => 'string',
        'employerPaymentSummaryNamespaceVersion' => 'string',
        'niNoVerificationRequestNameSpace' => 'string',
        'cisVerificationRequestNameSpace' => 'string',
        'cis300NameSpace' => 'string',
        'expensesAndBenefitsNameSpace' => 'string',
        'expensesAndBenefitsNameSpaceVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fullPaymentSubmissionNamespace' => null,
        'fullPaymentSubmissionNamespaceVersion' => null,
        'employerPaymentSummaryNamespace' => null,
        'employerPaymentSummaryNamespaceVersion' => null,
        'niNoVerificationRequestNameSpace' => null,
        'cisVerificationRequestNameSpace' => null,
        'cis300NameSpace' => null,
        'expensesAndBenefitsNameSpace' => null,
        'expensesAndBenefitsNameSpaceVersion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'fullPaymentSubmissionNamespace' => true,
        'fullPaymentSubmissionNamespaceVersion' => true,
        'employerPaymentSummaryNamespace' => true,
        'employerPaymentSummaryNamespaceVersion' => true,
        'niNoVerificationRequestNameSpace' => true,
        'cisVerificationRequestNameSpace' => true,
        'cis300NameSpace' => true,
        'expensesAndBenefitsNameSpace' => true,
        'expensesAndBenefitsNameSpaceVersion' => true
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
        'fullPaymentSubmissionNamespace' => 'fullPaymentSubmissionNamespace',
        'fullPaymentSubmissionNamespaceVersion' => 'fullPaymentSubmissionNamespaceVersion',
        'employerPaymentSummaryNamespace' => 'employerPaymentSummaryNamespace',
        'employerPaymentSummaryNamespaceVersion' => 'employerPaymentSummaryNamespaceVersion',
        'niNoVerificationRequestNameSpace' => 'niNoVerificationRequestNameSpace',
        'cisVerificationRequestNameSpace' => 'cisVerificationRequestNameSpace',
        'cis300NameSpace' => 'cis300NameSpace',
        'expensesAndBenefitsNameSpace' => 'expensesAndBenefitsNameSpace',
        'expensesAndBenefitsNameSpaceVersion' => 'expensesAndBenefitsNameSpaceVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'fullPaymentSubmissionNamespace' => 'setFullPaymentSubmissionNamespace',
        'fullPaymentSubmissionNamespaceVersion' => 'setFullPaymentSubmissionNamespaceVersion',
        'employerPaymentSummaryNamespace' => 'setEmployerPaymentSummaryNamespace',
        'employerPaymentSummaryNamespaceVersion' => 'setEmployerPaymentSummaryNamespaceVersion',
        'niNoVerificationRequestNameSpace' => 'setNiNoVerificationRequestNameSpace',
        'cisVerificationRequestNameSpace' => 'setCisVerificationRequestNameSpace',
        'cis300NameSpace' => 'setCis300NameSpace',
        'expensesAndBenefitsNameSpace' => 'setExpensesAndBenefitsNameSpace',
        'expensesAndBenefitsNameSpaceVersion' => 'setExpensesAndBenefitsNameSpaceVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'fullPaymentSubmissionNamespace' => 'getFullPaymentSubmissionNamespace',
        'fullPaymentSubmissionNamespaceVersion' => 'getFullPaymentSubmissionNamespaceVersion',
        'employerPaymentSummaryNamespace' => 'getEmployerPaymentSummaryNamespace',
        'employerPaymentSummaryNamespaceVersion' => 'getEmployerPaymentSummaryNamespaceVersion',
        'niNoVerificationRequestNameSpace' => 'getNiNoVerificationRequestNameSpace',
        'cisVerificationRequestNameSpace' => 'getCisVerificationRequestNameSpace',
        'cis300NameSpace' => 'getCis300NameSpace',
        'expensesAndBenefitsNameSpace' => 'getExpensesAndBenefitsNameSpace',
        'expensesAndBenefitsNameSpaceVersion' => 'getExpensesAndBenefitsNameSpaceVersion'
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
        $this->setIfExists('fullPaymentSubmissionNamespace', $data ?? [], null);
        $this->setIfExists('fullPaymentSubmissionNamespaceVersion', $data ?? [], null);
        $this->setIfExists('employerPaymentSummaryNamespace', $data ?? [], null);
        $this->setIfExists('employerPaymentSummaryNamespaceVersion', $data ?? [], null);
        $this->setIfExists('niNoVerificationRequestNameSpace', $data ?? [], null);
        $this->setIfExists('cisVerificationRequestNameSpace', $data ?? [], null);
        $this->setIfExists('cis300NameSpace', $data ?? [], null);
        $this->setIfExists('expensesAndBenefitsNameSpace', $data ?? [], null);
        $this->setIfExists('expensesAndBenefitsNameSpaceVersion', $data ?? [], null);
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
     * Gets fullPaymentSubmissionNamespace
     *
     * @return string|null
     */
    public function getFullPaymentSubmissionNamespace(): ?string
    {
        return $this->container['fullPaymentSubmissionNamespace'];
    }

    /**
     * Sets fullPaymentSubmissionNamespace
     *
     * @param string|null $fullPaymentSubmissionNamespace [readonly]
     *
     * @return $this
     */
    public function setFullPaymentSubmissionNamespace(?string $fullPaymentSubmissionNamespace): static
    {
        if (is_null($fullPaymentSubmissionNamespace)) {
            array_push($this->openAPINullablesSetToNull, 'fullPaymentSubmissionNamespace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullPaymentSubmissionNamespace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullPaymentSubmissionNamespace'] = $fullPaymentSubmissionNamespace;

        return $this;
    }

    /**
     * Gets fullPaymentSubmissionNamespaceVersion
     *
     * @return string|null
     */
    public function getFullPaymentSubmissionNamespaceVersion(): ?string
    {
        return $this->container['fullPaymentSubmissionNamespaceVersion'];
    }

    /**
     * Sets fullPaymentSubmissionNamespaceVersion
     *
     * @param string|null $fullPaymentSubmissionNamespaceVersion [readonly]
     *
     * @return $this
     */
    public function setFullPaymentSubmissionNamespaceVersion(?string $fullPaymentSubmissionNamespaceVersion): static
    {
        if (is_null($fullPaymentSubmissionNamespaceVersion)) {
            array_push($this->openAPINullablesSetToNull, 'fullPaymentSubmissionNamespaceVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullPaymentSubmissionNamespaceVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullPaymentSubmissionNamespaceVersion'] = $fullPaymentSubmissionNamespaceVersion;

        return $this;
    }

    /**
     * Gets employerPaymentSummaryNamespace
     *
     * @return string|null
     */
    public function getEmployerPaymentSummaryNamespace(): ?string
    {
        return $this->container['employerPaymentSummaryNamespace'];
    }

    /**
     * Sets employerPaymentSummaryNamespace
     *
     * @param string|null $employerPaymentSummaryNamespace [readonly]
     *
     * @return $this
     */
    public function setEmployerPaymentSummaryNamespace(?string $employerPaymentSummaryNamespace): static
    {
        if (is_null($employerPaymentSummaryNamespace)) {
            array_push($this->openAPINullablesSetToNull, 'employerPaymentSummaryNamespace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerPaymentSummaryNamespace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerPaymentSummaryNamespace'] = $employerPaymentSummaryNamespace;

        return $this;
    }

    /**
     * Gets employerPaymentSummaryNamespaceVersion
     *
     * @return string|null
     */
    public function getEmployerPaymentSummaryNamespaceVersion(): ?string
    {
        return $this->container['employerPaymentSummaryNamespaceVersion'];
    }

    /**
     * Sets employerPaymentSummaryNamespaceVersion
     *
     * @param string|null $employerPaymentSummaryNamespaceVersion [readonly]
     *
     * @return $this
     */
    public function setEmployerPaymentSummaryNamespaceVersion(?string $employerPaymentSummaryNamespaceVersion): static
    {
        if (is_null($employerPaymentSummaryNamespaceVersion)) {
            array_push($this->openAPINullablesSetToNull, 'employerPaymentSummaryNamespaceVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerPaymentSummaryNamespaceVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerPaymentSummaryNamespaceVersion'] = $employerPaymentSummaryNamespaceVersion;

        return $this;
    }

    /**
     * Gets niNoVerificationRequestNameSpace
     *
     * @return string|null
     */
    public function getNiNoVerificationRequestNameSpace(): ?string
    {
        return $this->container['niNoVerificationRequestNameSpace'];
    }

    /**
     * Sets niNoVerificationRequestNameSpace
     *
     * @param string|null $niNoVerificationRequestNameSpace [readonly]
     *
     * @return $this
     */
    public function setNiNoVerificationRequestNameSpace(?string $niNoVerificationRequestNameSpace): static
    {
        if (is_null($niNoVerificationRequestNameSpace)) {
            array_push($this->openAPINullablesSetToNull, 'niNoVerificationRequestNameSpace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('niNoVerificationRequestNameSpace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['niNoVerificationRequestNameSpace'] = $niNoVerificationRequestNameSpace;

        return $this;
    }

    /**
     * Gets cisVerificationRequestNameSpace
     *
     * @return string|null
     */
    public function getCisVerificationRequestNameSpace(): ?string
    {
        return $this->container['cisVerificationRequestNameSpace'];
    }

    /**
     * Sets cisVerificationRequestNameSpace
     *
     * @param string|null $cisVerificationRequestNameSpace [readonly]
     *
     * @return $this
     */
    public function setCisVerificationRequestNameSpace(?string $cisVerificationRequestNameSpace): static
    {
        if (is_null($cisVerificationRequestNameSpace)) {
            array_push($this->openAPINullablesSetToNull, 'cisVerificationRequestNameSpace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cisVerificationRequestNameSpace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cisVerificationRequestNameSpace'] = $cisVerificationRequestNameSpace;

        return $this;
    }

    /**
     * Gets cis300NameSpace
     *
     * @return string|null
     */
    public function getCis300NameSpace(): ?string
    {
        return $this->container['cis300NameSpace'];
    }

    /**
     * Sets cis300NameSpace
     *
     * @param string|null $cis300NameSpace [readonly]
     *
     * @return $this
     */
    public function setCis300NameSpace(?string $cis300NameSpace): static
    {
        if (is_null($cis300NameSpace)) {
            array_push($this->openAPINullablesSetToNull, 'cis300NameSpace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cis300NameSpace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cis300NameSpace'] = $cis300NameSpace;

        return $this;
    }

    /**
     * Gets expensesAndBenefitsNameSpace
     *
     * @return string|null
     */
    public function getExpensesAndBenefitsNameSpace(): ?string
    {
        return $this->container['expensesAndBenefitsNameSpace'];
    }

    /**
     * Sets expensesAndBenefitsNameSpace
     *
     * @param string|null $expensesAndBenefitsNameSpace [readonly]
     *
     * @return $this
     */
    public function setExpensesAndBenefitsNameSpace(?string $expensesAndBenefitsNameSpace): static
    {
        if (is_null($expensesAndBenefitsNameSpace)) {
            array_push($this->openAPINullablesSetToNull, 'expensesAndBenefitsNameSpace');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expensesAndBenefitsNameSpace', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expensesAndBenefitsNameSpace'] = $expensesAndBenefitsNameSpace;

        return $this;
    }

    /**
     * Gets expensesAndBenefitsNameSpaceVersion
     *
     * @return string|null
     */
    public function getExpensesAndBenefitsNameSpaceVersion(): ?string
    {
        return $this->container['expensesAndBenefitsNameSpaceVersion'];
    }

    /**
     * Sets expensesAndBenefitsNameSpaceVersion
     *
     * @param string|null $expensesAndBenefitsNameSpaceVersion [readonly]
     *
     * @return $this
     */
    public function setExpensesAndBenefitsNameSpaceVersion(?string $expensesAndBenefitsNameSpaceVersion): static
    {
        if (is_null($expensesAndBenefitsNameSpaceVersion)) {
            array_push($this->openAPINullablesSetToNull, 'expensesAndBenefitsNameSpaceVersion');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expensesAndBenefitsNameSpaceVersion', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expensesAndBenefitsNameSpaceVersion'] = $expensesAndBenefitsNameSpaceVersion;

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


