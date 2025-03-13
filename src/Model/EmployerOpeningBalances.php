<?php
/**
 * EmployerOpeningBalances
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
 * EmployerOpeningBalances Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EmployerOpeningBalances implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EmployerOpeningBalances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'smpRecovered' => 'float',
        'sppRecovered' => 'float',
        'sapRecovered' => 'float',
        'shPPRecovered' => 'float',
        'spbpRecovered' => 'float',
        'nicCompensationOnSMP' => 'float',
        'nicCompensationOnSPP' => 'float',
        'nicCompensationOnSAP' => 'float',
        'nicCompensationOnShPP' => 'float',
        'nicCompensationOnSPBP' => 'float',
        'cisDeductionsSuffered' => 'float',
        'apprenticeshipLevy' => 'float',
        'employmentAllowance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'smpRecovered' => 'double',
        'sppRecovered' => 'double',
        'sapRecovered' => 'double',
        'shPPRecovered' => 'double',
        'spbpRecovered' => 'double',
        'nicCompensationOnSMP' => 'double',
        'nicCompensationOnSPP' => 'double',
        'nicCompensationOnSAP' => 'double',
        'nicCompensationOnShPP' => 'double',
        'nicCompensationOnSPBP' => 'double',
        'cisDeductionsSuffered' => 'double',
        'apprenticeshipLevy' => 'double',
        'employmentAllowance' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'smpRecovered' => false,
        'sppRecovered' => false,
        'sapRecovered' => false,
        'shPPRecovered' => false,
        'spbpRecovered' => false,
        'nicCompensationOnSMP' => false,
        'nicCompensationOnSPP' => false,
        'nicCompensationOnSAP' => false,
        'nicCompensationOnShPP' => false,
        'nicCompensationOnSPBP' => false,
        'cisDeductionsSuffered' => false,
        'apprenticeshipLevy' => false,
        'employmentAllowance' => false
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
        'smpRecovered' => 'smpRecovered',
        'sppRecovered' => 'sppRecovered',
        'sapRecovered' => 'sapRecovered',
        'shPPRecovered' => 'shPPRecovered',
        'spbpRecovered' => 'spbpRecovered',
        'nicCompensationOnSMP' => 'nicCompensationOnSMP',
        'nicCompensationOnSPP' => 'nicCompensationOnSPP',
        'nicCompensationOnSAP' => 'nicCompensationOnSAP',
        'nicCompensationOnShPP' => 'nicCompensationOnShPP',
        'nicCompensationOnSPBP' => 'nicCompensationOnSPBP',
        'cisDeductionsSuffered' => 'cisDeductionsSuffered',
        'apprenticeshipLevy' => 'apprenticeshipLevy',
        'employmentAllowance' => 'employmentAllowance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'smpRecovered' => 'setSmpRecovered',
        'sppRecovered' => 'setSppRecovered',
        'sapRecovered' => 'setSapRecovered',
        'shPPRecovered' => 'setShPPRecovered',
        'spbpRecovered' => 'setSpbpRecovered',
        'nicCompensationOnSMP' => 'setNicCompensationOnSMP',
        'nicCompensationOnSPP' => 'setNicCompensationOnSPP',
        'nicCompensationOnSAP' => 'setNicCompensationOnSAP',
        'nicCompensationOnShPP' => 'setNicCompensationOnShPP',
        'nicCompensationOnSPBP' => 'setNicCompensationOnSPBP',
        'cisDeductionsSuffered' => 'setCisDeductionsSuffered',
        'apprenticeshipLevy' => 'setApprenticeshipLevy',
        'employmentAllowance' => 'setEmploymentAllowance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'smpRecovered' => 'getSmpRecovered',
        'sppRecovered' => 'getSppRecovered',
        'sapRecovered' => 'getSapRecovered',
        'shPPRecovered' => 'getShPPRecovered',
        'spbpRecovered' => 'getSpbpRecovered',
        'nicCompensationOnSMP' => 'getNicCompensationOnSMP',
        'nicCompensationOnSPP' => 'getNicCompensationOnSPP',
        'nicCompensationOnSAP' => 'getNicCompensationOnSAP',
        'nicCompensationOnShPP' => 'getNicCompensationOnShPP',
        'nicCompensationOnSPBP' => 'getNicCompensationOnSPBP',
        'cisDeductionsSuffered' => 'getCisDeductionsSuffered',
        'apprenticeshipLevy' => 'getApprenticeshipLevy',
        'employmentAllowance' => 'getEmploymentAllowance'
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
        $this->setIfExists('smpRecovered', $data ?? [], null);
        $this->setIfExists('sppRecovered', $data ?? [], null);
        $this->setIfExists('sapRecovered', $data ?? [], null);
        $this->setIfExists('shPPRecovered', $data ?? [], null);
        $this->setIfExists('spbpRecovered', $data ?? [], null);
        $this->setIfExists('nicCompensationOnSMP', $data ?? [], null);
        $this->setIfExists('nicCompensationOnSPP', $data ?? [], null);
        $this->setIfExists('nicCompensationOnSAP', $data ?? [], null);
        $this->setIfExists('nicCompensationOnShPP', $data ?? [], null);
        $this->setIfExists('nicCompensationOnSPBP', $data ?? [], null);
        $this->setIfExists('cisDeductionsSuffered', $data ?? [], null);
        $this->setIfExists('apprenticeshipLevy', $data ?? [], null);
        $this->setIfExists('employmentAllowance', $data ?? [], null);
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
     * Gets smpRecovered
     *
     * @return float|null
     */
    public function getSmpRecovered(): ?float
    {
        return $this->container['smpRecovered'];
    }

    /**
     * Sets smpRecovered
     *
     * @param float|null $smpRecovered Value of Statutory Maternity Pay recovered year to date
     *
     * @return $this
     */
    public function setSmpRecovered(?float $smpRecovered): static
    {
        if (is_null($smpRecovered)) {
            throw new InvalidArgumentException('non-nullable smpRecovered cannot be null');
        }
        $this->container['smpRecovered'] = $smpRecovered;

        return $this;
    }

    /**
     * Gets sppRecovered
     *
     * @return float|null
     */
    public function getSppRecovered(): ?float
    {
        return $this->container['sppRecovered'];
    }

    /**
     * Sets sppRecovered
     *
     * @param float|null $sppRecovered Value of Statutory Paternity Pay recovered year to date
     *
     * @return $this
     */
    public function setSppRecovered(?float $sppRecovered): static
    {
        if (is_null($sppRecovered)) {
            throw new InvalidArgumentException('non-nullable sppRecovered cannot be null');
        }
        $this->container['sppRecovered'] = $sppRecovered;

        return $this;
    }

    /**
     * Gets sapRecovered
     *
     * @return float|null
     */
    public function getSapRecovered(): ?float
    {
        return $this->container['sapRecovered'];
    }

    /**
     * Sets sapRecovered
     *
     * @param float|null $sapRecovered Value of Statutory Adoption Pay recovered year to date
     *
     * @return $this
     */
    public function setSapRecovered(?float $sapRecovered): static
    {
        if (is_null($sapRecovered)) {
            throw new InvalidArgumentException('non-nullable sapRecovered cannot be null');
        }
        $this->container['sapRecovered'] = $sapRecovered;

        return $this;
    }

    /**
     * Gets shPPRecovered
     *
     * @return float|null
     */
    public function getShPPRecovered(): ?float
    {
        return $this->container['shPPRecovered'];
    }

    /**
     * Sets shPPRecovered
     *
     * @param float|null $shPPRecovered Value of Shared Parental Pay recovered year to date
     *
     * @return $this
     */
    public function setShPPRecovered(?float $shPPRecovered): static
    {
        if (is_null($shPPRecovered)) {
            throw new InvalidArgumentException('non-nullable shPPRecovered cannot be null');
        }
        $this->container['shPPRecovered'] = $shPPRecovered;

        return $this;
    }

    /**
     * Gets spbpRecovered
     *
     * @return float|null
     */
    public function getSpbpRecovered(): ?float
    {
        return $this->container['spbpRecovered'];
    }

    /**
     * Sets spbpRecovered
     *
     * @param float|null $spbpRecovered Value of Statutory Parental Bereavment Pay recovered year to date
     *
     * @return $this
     */
    public function setSpbpRecovered(?float $spbpRecovered): static
    {
        if (is_null($spbpRecovered)) {
            throw new InvalidArgumentException('non-nullable spbpRecovered cannot be null');
        }
        $this->container['spbpRecovered'] = $spbpRecovered;

        return $this;
    }

    /**
     * Gets nicCompensationOnSMP
     *
     * @return float|null
     */
    public function getNicCompensationOnSMP(): ?float
    {
        return $this->container['nicCompensationOnSMP'];
    }

    /**
     * Sets nicCompensationOnSMP
     *
     * @param float|null $nicCompensationOnSMP Value of NIC compensation on SMP year to date
     *
     * @return $this
     */
    public function setNicCompensationOnSMP(?float $nicCompensationOnSMP): static
    {
        if (is_null($nicCompensationOnSMP)) {
            throw new InvalidArgumentException('non-nullable nicCompensationOnSMP cannot be null');
        }
        $this->container['nicCompensationOnSMP'] = $nicCompensationOnSMP;

        return $this;
    }

    /**
     * Gets nicCompensationOnSPP
     *
     * @return float|null
     */
    public function getNicCompensationOnSPP(): ?float
    {
        return $this->container['nicCompensationOnSPP'];
    }

    /**
     * Sets nicCompensationOnSPP
     *
     * @param float|null $nicCompensationOnSPP Value of NIC compensation on Statutory Paternity Pay year to date
     *
     * @return $this
     */
    public function setNicCompensationOnSPP(?float $nicCompensationOnSPP): static
    {
        if (is_null($nicCompensationOnSPP)) {
            throw new InvalidArgumentException('non-nullable nicCompensationOnSPP cannot be null');
        }
        $this->container['nicCompensationOnSPP'] = $nicCompensationOnSPP;

        return $this;
    }

    /**
     * Gets nicCompensationOnSAP
     *
     * @return float|null
     */
    public function getNicCompensationOnSAP(): ?float
    {
        return $this->container['nicCompensationOnSAP'];
    }

    /**
     * Sets nicCompensationOnSAP
     *
     * @param float|null $nicCompensationOnSAP Value of NIC compensation on Statutory Adoption Pay year to date
     *
     * @return $this
     */
    public function setNicCompensationOnSAP(?float $nicCompensationOnSAP): static
    {
        if (is_null($nicCompensationOnSAP)) {
            throw new InvalidArgumentException('non-nullable nicCompensationOnSAP cannot be null');
        }
        $this->container['nicCompensationOnSAP'] = $nicCompensationOnSAP;

        return $this;
    }

    /**
     * Gets nicCompensationOnShPP
     *
     * @return float|null
     */
    public function getNicCompensationOnShPP(): ?float
    {
        return $this->container['nicCompensationOnShPP'];
    }

    /**
     * Sets nicCompensationOnShPP
     *
     * @param float|null $nicCompensationOnShPP Value of NIC compensation on Shared Parental Pay year to date
     *
     * @return $this
     */
    public function setNicCompensationOnShPP(?float $nicCompensationOnShPP): static
    {
        if (is_null($nicCompensationOnShPP)) {
            throw new InvalidArgumentException('non-nullable nicCompensationOnShPP cannot be null');
        }
        $this->container['nicCompensationOnShPP'] = $nicCompensationOnShPP;

        return $this;
    }

    /**
     * Gets nicCompensationOnSPBP
     *
     * @return float|null
     */
    public function getNicCompensationOnSPBP(): ?float
    {
        return $this->container['nicCompensationOnSPBP'];
    }

    /**
     * Sets nicCompensationOnSPBP
     *
     * @param float|null $nicCompensationOnSPBP Value of NIC compensation on Statutory Parental Bereavement Pay year to date
     *
     * @return $this
     */
    public function setNicCompensationOnSPBP(?float $nicCompensationOnSPBP): static
    {
        if (is_null($nicCompensationOnSPBP)) {
            throw new InvalidArgumentException('non-nullable nicCompensationOnSPBP cannot be null');
        }
        $this->container['nicCompensationOnSPBP'] = $nicCompensationOnSPBP;

        return $this;
    }

    /**
     * Gets cisDeductionsSuffered
     *
     * @return float|null
     */
    public function getCisDeductionsSuffered(): ?float
    {
        return $this->container['cisDeductionsSuffered'];
    }

    /**
     * Sets cisDeductionsSuffered
     *
     * @param float|null $cisDeductionsSuffered Value of CIS deductions suffered year to date
     *
     * @return $this
     */
    public function setCisDeductionsSuffered(?float $cisDeductionsSuffered): static
    {
        if (is_null($cisDeductionsSuffered)) {
            throw new InvalidArgumentException('non-nullable cisDeductionsSuffered cannot be null');
        }
        $this->container['cisDeductionsSuffered'] = $cisDeductionsSuffered;

        return $this;
    }

    /**
     * Gets apprenticeshipLevy
     *
     * @return float|null
     */
    public function getApprenticeshipLevy(): ?float
    {
        return $this->container['apprenticeshipLevy'];
    }

    /**
     * Sets apprenticeshipLevy
     *
     * @param float|null $apprenticeshipLevy Value of Apprenticeship levy paid year to date
     *
     * @return $this
     */
    public function setApprenticeshipLevy(?float $apprenticeshipLevy): static
    {
        if (is_null($apprenticeshipLevy)) {
            throw new InvalidArgumentException('non-nullable apprenticeshipLevy cannot be null');
        }
        $this->container['apprenticeshipLevy'] = $apprenticeshipLevy;

        return $this;
    }

    /**
     * Gets employmentAllowance
     *
     * @return float|null
     */
    public function getEmploymentAllowance(): ?float
    {
        return $this->container['employmentAllowance'];
    }

    /**
     * Sets employmentAllowance
     *
     * @param float|null $employmentAllowance Value of Employment Allowance claimed year to date
     *
     * @return $this
     */
    public function setEmploymentAllowance(?float $employmentAllowance): static
    {
        if (is_null($employmentAllowance)) {
            throw new InvalidArgumentException('non-nullable employmentAllowance cannot be null');
        }
        $this->container['employmentAllowance'] = $employmentAllowance;

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


