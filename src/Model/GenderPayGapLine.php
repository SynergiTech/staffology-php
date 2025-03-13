<?php
/**
 * GenderPayGapLine
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
 * GenderPayGapLine Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GenderPayGapLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenderPayGapLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payrollCode' => 'string',
        'forename' => 'string',
        'surname' => 'string',
        'gender' => '\SynergiTech\Staffology\Model\Gender',
        'fullPay' => 'string',
        'ordinaryPay' => 'float',
        'periodBonus' => 'float',
        'bonusRbp' => 'float',
        'weeklyHours' => 'float',
        'hourlyRate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payrollCode' => null,
        'forename' => null,
        'surname' => null,
        'gender' => null,
        'fullPay' => null,
        'ordinaryPay' => 'double',
        'periodBonus' => 'double',
        'bonusRbp' => 'double',
        'weeklyHours' => 'double',
        'hourlyRate' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payrollCode' => true,
        'forename' => true,
        'surname' => true,
        'gender' => false,
        'fullPay' => true,
        'ordinaryPay' => false,
        'periodBonus' => false,
        'bonusRbp' => false,
        'weeklyHours' => false,
        'hourlyRate' => false
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
        'payrollCode' => 'payrollCode',
        'forename' => 'forename',
        'surname' => 'surname',
        'gender' => 'gender',
        'fullPay' => 'fullPay',
        'ordinaryPay' => 'ordinaryPay',
        'periodBonus' => 'periodBonus',
        'bonusRbp' => 'bonusRbp',
        'weeklyHours' => 'weeklyHours',
        'hourlyRate' => 'hourlyRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payrollCode' => 'setPayrollCode',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'gender' => 'setGender',
        'fullPay' => 'setFullPay',
        'ordinaryPay' => 'setOrdinaryPay',
        'periodBonus' => 'setPeriodBonus',
        'bonusRbp' => 'setBonusRbp',
        'weeklyHours' => 'setWeeklyHours',
        'hourlyRate' => 'setHourlyRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payrollCode' => 'getPayrollCode',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'gender' => 'getGender',
        'fullPay' => 'getFullPay',
        'ordinaryPay' => 'getOrdinaryPay',
        'periodBonus' => 'getPeriodBonus',
        'bonusRbp' => 'getBonusRbp',
        'weeklyHours' => 'getWeeklyHours',
        'hourlyRate' => 'getHourlyRate'
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
        $this->setIfExists('payrollCode', $data ?? [], null);
        $this->setIfExists('forename', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('fullPay', $data ?? [], null);
        $this->setIfExists('ordinaryPay', $data ?? [], null);
        $this->setIfExists('periodBonus', $data ?? [], null);
        $this->setIfExists('bonusRbp', $data ?? [], null);
        $this->setIfExists('weeklyHours', $data ?? [], null);
        $this->setIfExists('hourlyRate', $data ?? [], null);
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
     * @param string|null $payrollCode payrollCode
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
     * Gets forename
     *
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     *
     * @param string|null $forename forename
     *
     * @return $this
     */
    public function setForename(?string $forename): static
    {
        if (is_null($forename)) {
            array_push($this->openAPINullablesSetToNull, 'forename');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('forename', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['forename'] = $forename;

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
     * @param string|null $surname surname
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
     * Gets gender
     *
     * @return \SynergiTech\Staffology\Model\Gender|null
     */
    public function getGender(): ?\SynergiTech\Staffology\Model\Gender
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \SynergiTech\Staffology\Model\Gender|null $gender gender
     *
     * @return $this
     */
    public function setGender(?\SynergiTech\Staffology\Model\Gender $gender): static
    {
        if (is_null($gender)) {
            throw new InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets fullPay
     *
     * @return string|null
     */
    public function getFullPay(): ?string
    {
        return $this->container['fullPay'];
    }

    /**
     * Sets fullPay
     *
     * @param string|null $fullPay fullPay
     *
     * @return $this
     */
    public function setFullPay(?string $fullPay): static
    {
        if (is_null($fullPay)) {
            array_push($this->openAPINullablesSetToNull, 'fullPay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullPay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullPay'] = $fullPay;

        return $this;
    }

    /**
     * Gets ordinaryPay
     *
     * @return float|null
     */
    public function getOrdinaryPay(): ?float
    {
        return $this->container['ordinaryPay'];
    }

    /**
     * Sets ordinaryPay
     *
     * @param float|null $ordinaryPay ordinaryPay
     *
     * @return $this
     */
    public function setOrdinaryPay(?float $ordinaryPay): static
    {
        if (is_null($ordinaryPay)) {
            throw new InvalidArgumentException('non-nullable ordinaryPay cannot be null');
        }
        $this->container['ordinaryPay'] = $ordinaryPay;

        return $this;
    }

    /**
     * Gets periodBonus
     *
     * @return float|null
     */
    public function getPeriodBonus(): ?float
    {
        return $this->container['periodBonus'];
    }

    /**
     * Sets periodBonus
     *
     * @param float|null $periodBonus periodBonus
     *
     * @return $this
     */
    public function setPeriodBonus(?float $periodBonus): static
    {
        if (is_null($periodBonus)) {
            throw new InvalidArgumentException('non-nullable periodBonus cannot be null');
        }
        $this->container['periodBonus'] = $periodBonus;

        return $this;
    }

    /**
     * Gets bonusRbp
     *
     * @return float|null
     */
    public function getBonusRbp(): ?float
    {
        return $this->container['bonusRbp'];
    }

    /**
     * Sets bonusRbp
     *
     * @param float|null $bonusRbp bonusRbp
     *
     * @return $this
     */
    public function setBonusRbp(?float $bonusRbp): static
    {
        if (is_null($bonusRbp)) {
            throw new InvalidArgumentException('non-nullable bonusRbp cannot be null');
        }
        $this->container['bonusRbp'] = $bonusRbp;

        return $this;
    }

    /**
     * Gets weeklyHours
     *
     * @return float|null
     */
    public function getWeeklyHours(): ?float
    {
        return $this->container['weeklyHours'];
    }

    /**
     * Sets weeklyHours
     *
     * @param float|null $weeklyHours weeklyHours
     *
     * @return $this
     */
    public function setWeeklyHours(?float $weeklyHours): static
    {
        if (is_null($weeklyHours)) {
            throw new InvalidArgumentException('non-nullable weeklyHours cannot be null');
        }
        $this->container['weeklyHours'] = $weeklyHours;

        return $this;
    }

    /**
     * Gets hourlyRate
     *
     * @return float|null
     */
    public function getHourlyRate(): ?float
    {
        return $this->container['hourlyRate'];
    }

    /**
     * Sets hourlyRate
     *
     * @param float|null $hourlyRate hourlyRate
     *
     * @return $this
     */
    public function setHourlyRate(?float $hourlyRate): static
    {
        if (is_null($hourlyRate)) {
            throw new InvalidArgumentException('non-nullable hourlyRate cannot be null');
        }
        $this->container['hourlyRate'] = $hourlyRate;

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


