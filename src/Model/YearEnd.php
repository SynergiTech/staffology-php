<?php
/**
 * YearEnd
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
 * YearEnd Class Doc Comment
 *
 * @description This model gives you a summary of what will happen when you confirm the closing of one year and the start of the next
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class YearEnd implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'YearEnd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'endingYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'startingYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'createEpsForFinalSubmission' => 'bool',
        'createEpsForEmploymentAllowance' => 'bool',
        'createExb' => 'bool',
        'setEmploymentAllowance' => 'float',
        'taxCodeChanges' => '\SynergiTech\Staffology\Model\YearEndTaxCodeChange[]',
        'removeWeek1Month1' => '\SynergiTech\Staffology\Model\Item[]',
        'emailP60' => '\SynergiTech\Staffology\Model\Item[]',
        'pushP60' => '\SynergiTech\Staffology\Model\ExternalDataProviderId[]',
        'emailCisStatement' => '\SynergiTech\Staffology\Model\Item[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'endingYear' => null,
        'startingYear' => null,
        'createEpsForFinalSubmission' => null,
        'createEpsForEmploymentAllowance' => null,
        'createExb' => null,
        'setEmploymentAllowance' => 'double',
        'taxCodeChanges' => null,
        'removeWeek1Month1' => null,
        'emailP60' => null,
        'pushP60' => null,
        'emailCisStatement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'endingYear' => false,
        'startingYear' => false,
        'createEpsForFinalSubmission' => false,
        'createEpsForEmploymentAllowance' => false,
        'createExb' => false,
        'setEmploymentAllowance' => true,
        'taxCodeChanges' => true,
        'removeWeek1Month1' => true,
        'emailP60' => true,
        'pushP60' => true,
        'emailCisStatement' => true
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
        'endingYear' => 'endingYear',
        'startingYear' => 'startingYear',
        'createEpsForFinalSubmission' => 'createEpsForFinalSubmission',
        'createEpsForEmploymentAllowance' => 'createEpsForEmploymentAllowance',
        'createExb' => 'createExb',
        'setEmploymentAllowance' => 'setEmploymentAllowance',
        'taxCodeChanges' => 'taxCodeChanges',
        'removeWeek1Month1' => 'removeWeek1Month1',
        'emailP60' => 'emailP60',
        'pushP60' => 'pushP60',
        'emailCisStatement' => 'emailCisStatement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'endingYear' => 'setEndingYear',
        'startingYear' => 'setStartingYear',
        'createEpsForFinalSubmission' => 'setCreateEpsForFinalSubmission',
        'createEpsForEmploymentAllowance' => 'setCreateEpsForEmploymentAllowance',
        'createExb' => 'setCreateExb',
        'setEmploymentAllowance' => 'setSetEmploymentAllowance',
        'taxCodeChanges' => 'setTaxCodeChanges',
        'removeWeek1Month1' => 'setRemoveWeek1Month1',
        'emailP60' => 'setEmailP60',
        'pushP60' => 'setPushP60',
        'emailCisStatement' => 'setEmailCisStatement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'endingYear' => 'getEndingYear',
        'startingYear' => 'getStartingYear',
        'createEpsForFinalSubmission' => 'getCreateEpsForFinalSubmission',
        'createEpsForEmploymentAllowance' => 'getCreateEpsForEmploymentAllowance',
        'createExb' => 'getCreateExb',
        'setEmploymentAllowance' => 'getSetEmploymentAllowance',
        'taxCodeChanges' => 'getTaxCodeChanges',
        'removeWeek1Month1' => 'getRemoveWeek1Month1',
        'emailP60' => 'getEmailP60',
        'pushP60' => 'getPushP60',
        'emailCisStatement' => 'getEmailCisStatement'
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
        $this->setIfExists('endingYear', $data ?? [], null);
        $this->setIfExists('startingYear', $data ?? [], null);
        $this->setIfExists('createEpsForFinalSubmission', $data ?? [], null);
        $this->setIfExists('createEpsForEmploymentAllowance', $data ?? [], null);
        $this->setIfExists('createExb', $data ?? [], null);
        $this->setIfExists('setEmploymentAllowance', $data ?? [], null);
        $this->setIfExists('taxCodeChanges', $data ?? [], null);
        $this->setIfExists('removeWeek1Month1', $data ?? [], null);
        $this->setIfExists('emailP60', $data ?? [], null);
        $this->setIfExists('pushP60', $data ?? [], null);
        $this->setIfExists('emailCisStatement', $data ?? [], null);
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
     * Gets endingYear
     *
     * @return \SynergiTech\Staffology\Model\TaxYear|null
     */
    public function getEndingYear(): ?\SynergiTech\Staffology\Model\TaxYear
    {
        return $this->container['endingYear'];
    }

    /**
     * Sets endingYear
     *
     * @param \SynergiTech\Staffology\Model\TaxYear|null $endingYear endingYear
     *
     * @return $this
     */
    public function setEndingYear(?\SynergiTech\Staffology\Model\TaxYear $endingYear): static
    {
        if (is_null($endingYear)) {
            throw new InvalidArgumentException('non-nullable endingYear cannot be null');
        }
        $this->container['endingYear'] = $endingYear;

        return $this;
    }

    /**
     * Gets startingYear
     *
     * @return \SynergiTech\Staffology\Model\TaxYear|null
     */
    public function getStartingYear(): ?\SynergiTech\Staffology\Model\TaxYear
    {
        return $this->container['startingYear'];
    }

    /**
     * Sets startingYear
     *
     * @param \SynergiTech\Staffology\Model\TaxYear|null $startingYear startingYear
     *
     * @return $this
     */
    public function setStartingYear(?\SynergiTech\Staffology\Model\TaxYear $startingYear): static
    {
        if (is_null($startingYear)) {
            throw new InvalidArgumentException('non-nullable startingYear cannot be null');
        }
        $this->container['startingYear'] = $startingYear;

        return $this;
    }

    /**
     * Gets createEpsForFinalSubmission
     *
     * @return bool|null
     */
    public function getCreateEpsForFinalSubmission(): ?bool
    {
        return $this->container['createEpsForFinalSubmission'];
    }

    /**
     * Sets createEpsForFinalSubmission
     *
     * @param bool|null $createEpsForFinalSubmission [readonly] Whether or not the system will automatically create an EPS to tell HMRC the year has ended.
     *
     * @return $this
     */
    public function setCreateEpsForFinalSubmission(?bool $createEpsForFinalSubmission): static
    {
        if (is_null($createEpsForFinalSubmission)) {
            throw new InvalidArgumentException('non-nullable createEpsForFinalSubmission cannot be null');
        }
        $this->container['createEpsForFinalSubmission'] = $createEpsForFinalSubmission;

        return $this;
    }

    /**
     * Gets createEpsForEmploymentAllowance
     *
     * @return bool|null
     */
    public function getCreateEpsForEmploymentAllowance(): ?bool
    {
        return $this->container['createEpsForEmploymentAllowance'];
    }

    /**
     * Sets createEpsForEmploymentAllowance
     *
     * @param bool|null $createEpsForEmploymentAllowance [readonly] Whether or not the system will automatically create an EPS to tell HMRC you qualify for Employment Allowance.
     *
     * @return $this
     */
    public function setCreateEpsForEmploymentAllowance(?bool $createEpsForEmploymentAllowance): static
    {
        if (is_null($createEpsForEmploymentAllowance)) {
            throw new InvalidArgumentException('non-nullable createEpsForEmploymentAllowance cannot be null');
        }
        $this->container['createEpsForEmploymentAllowance'] = $createEpsForEmploymentAllowance;

        return $this;
    }

    /**
     * Gets createExb
     *
     * @return bool|null
     */
    public function getCreateExb(): ?bool
    {
        return $this->container['createExb'];
    }

    /**
     * Sets createExb
     *
     * @param bool|null $createExb [readonly] Whether or not the system will automatically create an EXB to inform HMRC of Expenses and Benefits
     *
     * @return $this
     */
    public function setCreateExb(?bool $createExb): static
    {
        if (is_null($createExb)) {
            throw new InvalidArgumentException('non-nullable createExb cannot be null');
        }
        $this->container['createExb'] = $createExb;

        return $this;
    }

    /**
     * Gets setEmploymentAllowance
     *
     * @return float|null
     */
    public function getSetEmploymentAllowance(): ?float
    {
        return $this->container['setEmploymentAllowance'];
    }

    /**
     * Sets setEmploymentAllowance
     *
     * @param float|null $setEmploymentAllowance [readonly] If the Employment Allowance needs to be changed, this indicates the new value
     *
     * @return $this
     */
    public function setSetEmploymentAllowance(?float $setEmploymentAllowance): static
    {
        if (is_null($setEmploymentAllowance)) {
            array_push($this->openAPINullablesSetToNull, 'setEmploymentAllowance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('setEmploymentAllowance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['setEmploymentAllowance'] = $setEmploymentAllowance;

        return $this;
    }

    /**
     * Gets taxCodeChanges
     *
     * @return \SynergiTech\Staffology\Model\YearEndTaxCodeChange[]|null
     */
    public function getTaxCodeChanges(): ?array
    {
        return $this->container['taxCodeChanges'];
    }

    /**
     * Sets taxCodeChanges
     *
     * @param \SynergiTech\Staffology\Model\YearEndTaxCodeChange[]|null $taxCodeChanges [readonly] Details of changes that wil be made to Tax Codes
     *
     * @return $this
     */
    public function setTaxCodeChanges(?array $taxCodeChanges): static
    {
        if (is_null($taxCodeChanges)) {
            array_push($this->openAPINullablesSetToNull, 'taxCodeChanges');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxCodeChanges', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxCodeChanges'] = $taxCodeChanges;

        return $this;
    }

    /**
     * Gets removeWeek1Month1
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getRemoveWeek1Month1(): ?array
    {
        return $this->container['removeWeek1Month1'];
    }

    /**
     * Sets removeWeek1Month1
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $removeWeek1Month1 [readonly] Employees that will have the Week1Month1 flag removed from their tax code
     *
     * @return $this
     */
    public function setRemoveWeek1Month1(?array $removeWeek1Month1): static
    {
        if (is_null($removeWeek1Month1)) {
            array_push($this->openAPINullablesSetToNull, 'removeWeek1Month1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('removeWeek1Month1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['removeWeek1Month1'] = $removeWeek1Month1;

        return $this;
    }

    /**
     * Gets emailP60
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getEmailP60(): ?array
    {
        return $this->container['emailP60'];
    }

    /**
     * Sets emailP60
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $emailP60 [readonly] Employees who will be automatically emailed P60s
     *
     * @return $this
     */
    public function setEmailP60(?array $emailP60): static
    {
        if (is_null($emailP60)) {
            array_push($this->openAPINullablesSetToNull, 'emailP60');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emailP60', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emailP60'] = $emailP60;

        return $this;
    }

    /**
     * Gets pushP60
     *
     * @return \SynergiTech\Staffology\Model\ExternalDataProviderId[]|null
     */
    public function getPushP60(): ?array
    {
        return $this->container['pushP60'];
    }

    /**
     * Sets pushP60
     *
     * @param \SynergiTech\Staffology\Model\ExternalDataProviderId[]|null $pushP60 [readonly] ExternalDataProviderIds to which P60s can be pushed
     *
     * @return $this
     */
    public function setPushP60(?array $pushP60): static
    {
        if (is_null($pushP60)) {
            array_push($this->openAPINullablesSetToNull, 'pushP60');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pushP60', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pushP60'] = $pushP60;

        return $this;
    }

    /**
     * Gets emailCisStatement
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getEmailCisStatement(): ?array
    {
        return $this->container['emailCisStatement'];
    }

    /**
     * Sets emailCisStatement
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $emailCisStatement [readonly] Subcontractors who will be automatically sent an annual CIS Statement
     *
     * @return $this
     */
    public function setEmailCisStatement(?array $emailCisStatement): static
    {
        if (is_null($emailCisStatement)) {
            array_push($this->openAPINullablesSetToNull, 'emailCisStatement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emailCisStatement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emailCisStatement'] = $emailCisStatement;

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


