<?php
/**
 * FpsEmployment
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
 * FpsEmployment Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FpsEmployment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FpsEmployment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employeeCurrentNiLetter' => 'string',
        'offPayrollWorker' => 'string',
        'occPenInd' => 'string',
        'directorsNIC' => 'string',
        'taxWkOfApptOfDirector' => 'string',
        'starter' => '\SynergiTech\Staffology\Model\FpsEmployeeStarter',
        'payId' => 'string',
        'payIdChgd' => '\SynergiTech\Staffology\Model\FpsEmployerPayIdChanged',
        'paymentToANonIndividual' => 'string',
        'irrEmp' => 'string',
        'leavingDate' => 'string',
        'figuresToDate' => '\SynergiTech\Staffology\Model\FpsEmployeeFigsToDate',
        'payment' => '\SynergiTech\Staffology\Model\FpsEmployeePayment',
        'nIlettersAndValues' => '\SynergiTech\Staffology\Model\FpsEmployeeNIlettersAndValues[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employeeCurrentNiLetter' => null,
        'offPayrollWorker' => null,
        'occPenInd' => null,
        'directorsNIC' => null,
        'taxWkOfApptOfDirector' => null,
        'starter' => null,
        'payId' => null,
        'payIdChgd' => null,
        'paymentToANonIndividual' => null,
        'irrEmp' => null,
        'leavingDate' => null,
        'figuresToDate' => null,
        'payment' => null,
        'nIlettersAndValues' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employeeCurrentNiLetter' => true,
        'offPayrollWorker' => true,
        'occPenInd' => true,
        'directorsNIC' => true,
        'taxWkOfApptOfDirector' => true,
        'starter' => false,
        'payId' => true,
        'payIdChgd' => false,
        'paymentToANonIndividual' => true,
        'irrEmp' => true,
        'leavingDate' => true,
        'figuresToDate' => false,
        'payment' => false,
        'nIlettersAndValues' => true
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
        'employeeCurrentNiLetter' => 'employeeCurrentNiLetter',
        'offPayrollWorker' => 'offPayrollWorker',
        'occPenInd' => 'occPenInd',
        'directorsNIC' => 'directorsNIC',
        'taxWkOfApptOfDirector' => 'taxWkOfApptOfDirector',
        'starter' => 'starter',
        'payId' => 'payId',
        'payIdChgd' => 'payIdChgd',
        'paymentToANonIndividual' => 'paymentToANonIndividual',
        'irrEmp' => 'irrEmp',
        'leavingDate' => 'leavingDate',
        'figuresToDate' => 'figuresToDate',
        'payment' => 'payment',
        'nIlettersAndValues' => 'nIlettersAndValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employeeCurrentNiLetter' => 'setEmployeeCurrentNiLetter',
        'offPayrollWorker' => 'setOffPayrollWorker',
        'occPenInd' => 'setOccPenInd',
        'directorsNIC' => 'setDirectorsNIC',
        'taxWkOfApptOfDirector' => 'setTaxWkOfApptOfDirector',
        'starter' => 'setStarter',
        'payId' => 'setPayId',
        'payIdChgd' => 'setPayIdChgd',
        'paymentToANonIndividual' => 'setPaymentToANonIndividual',
        'irrEmp' => 'setIrrEmp',
        'leavingDate' => 'setLeavingDate',
        'figuresToDate' => 'setFiguresToDate',
        'payment' => 'setPayment',
        'nIlettersAndValues' => 'setNIlettersAndValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employeeCurrentNiLetter' => 'getEmployeeCurrentNiLetter',
        'offPayrollWorker' => 'getOffPayrollWorker',
        'occPenInd' => 'getOccPenInd',
        'directorsNIC' => 'getDirectorsNIC',
        'taxWkOfApptOfDirector' => 'getTaxWkOfApptOfDirector',
        'starter' => 'getStarter',
        'payId' => 'getPayId',
        'payIdChgd' => 'getPayIdChgd',
        'paymentToANonIndividual' => 'getPaymentToANonIndividual',
        'irrEmp' => 'getIrrEmp',
        'leavingDate' => 'getLeavingDate',
        'figuresToDate' => 'getFiguresToDate',
        'payment' => 'getPayment',
        'nIlettersAndValues' => 'getNIlettersAndValues'
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
        $this->setIfExists('employeeCurrentNiLetter', $data ?? [], null);
        $this->setIfExists('offPayrollWorker', $data ?? [], null);
        $this->setIfExists('occPenInd', $data ?? [], null);
        $this->setIfExists('directorsNIC', $data ?? [], null);
        $this->setIfExists('taxWkOfApptOfDirector', $data ?? [], null);
        $this->setIfExists('starter', $data ?? [], null);
        $this->setIfExists('payId', $data ?? [], null);
        $this->setIfExists('payIdChgd', $data ?? [], null);
        $this->setIfExists('paymentToANonIndividual', $data ?? [], null);
        $this->setIfExists('irrEmp', $data ?? [], null);
        $this->setIfExists('leavingDate', $data ?? [], null);
        $this->setIfExists('figuresToDate', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('nIlettersAndValues', $data ?? [], null);
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
     * Gets employeeCurrentNiLetter
     *
     * @return string|null
     */
    public function getEmployeeCurrentNiLetter(): ?string
    {
        return $this->container['employeeCurrentNiLetter'];
    }

    /**
     * Sets employeeCurrentNiLetter
     *
     * @param string|null $employeeCurrentNiLetter employeeCurrentNiLetter
     *
     * @return $this
     */
    public function setEmployeeCurrentNiLetter(?string $employeeCurrentNiLetter): static
    {
        if (is_null($employeeCurrentNiLetter)) {
            array_push($this->openAPINullablesSetToNull, 'employeeCurrentNiLetter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employeeCurrentNiLetter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employeeCurrentNiLetter'] = $employeeCurrentNiLetter;

        return $this;
    }

    /**
     * Gets offPayrollWorker
     *
     * @return string|null
     */
    public function getOffPayrollWorker(): ?string
    {
        return $this->container['offPayrollWorker'];
    }

    /**
     * Sets offPayrollWorker
     *
     * @param string|null $offPayrollWorker offPayrollWorker
     *
     * @return $this
     */
    public function setOffPayrollWorker(?string $offPayrollWorker): static
    {
        if (is_null($offPayrollWorker)) {
            array_push($this->openAPINullablesSetToNull, 'offPayrollWorker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offPayrollWorker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offPayrollWorker'] = $offPayrollWorker;

        return $this;
    }

    /**
     * Gets occPenInd
     *
     * @return string|null
     */
    public function getOccPenInd(): ?string
    {
        return $this->container['occPenInd'];
    }

    /**
     * Sets occPenInd
     *
     * @param string|null $occPenInd occPenInd
     *
     * @return $this
     */
    public function setOccPenInd(?string $occPenInd): static
    {
        if (is_null($occPenInd)) {
            array_push($this->openAPINullablesSetToNull, 'occPenInd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('occPenInd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['occPenInd'] = $occPenInd;

        return $this;
    }

    /**
     * Gets directorsNIC
     *
     * @return string|null
     */
    public function getDirectorsNIC(): ?string
    {
        return $this->container['directorsNIC'];
    }

    /**
     * Sets directorsNIC
     *
     * @param string|null $directorsNIC directorsNIC
     *
     * @return $this
     */
    public function setDirectorsNIC(?string $directorsNIC): static
    {
        if (is_null($directorsNIC)) {
            array_push($this->openAPINullablesSetToNull, 'directorsNIC');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('directorsNIC', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['directorsNIC'] = $directorsNIC;

        return $this;
    }

    /**
     * Gets taxWkOfApptOfDirector
     *
     * @return string|null
     */
    public function getTaxWkOfApptOfDirector(): ?string
    {
        return $this->container['taxWkOfApptOfDirector'];
    }

    /**
     * Sets taxWkOfApptOfDirector
     *
     * @param string|null $taxWkOfApptOfDirector taxWkOfApptOfDirector
     *
     * @return $this
     */
    public function setTaxWkOfApptOfDirector(?string $taxWkOfApptOfDirector): static
    {
        if (is_null($taxWkOfApptOfDirector)) {
            array_push($this->openAPINullablesSetToNull, 'taxWkOfApptOfDirector');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxWkOfApptOfDirector', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxWkOfApptOfDirector'] = $taxWkOfApptOfDirector;

        return $this;
    }

    /**
     * Gets starter
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployeeStarter|null
     */
    public function getStarter(): ?\SynergiTech\Staffology\Model\FpsEmployeeStarter
    {
        return $this->container['starter'];
    }

    /**
     * Sets starter
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployeeStarter|null $starter starter
     *
     * @return $this
     */
    public function setStarter(?\SynergiTech\Staffology\Model\FpsEmployeeStarter $starter): static
    {
        if (is_null($starter)) {
            throw new InvalidArgumentException('non-nullable starter cannot be null');
        }
        $this->container['starter'] = $starter;

        return $this;
    }

    /**
     * Gets payId
     *
     * @return string|null
     */
    public function getPayId(): ?string
    {
        return $this->container['payId'];
    }

    /**
     * Sets payId
     *
     * @param string|null $payId payId
     *
     * @return $this
     */
    public function setPayId(?string $payId): static
    {
        if (is_null($payId)) {
            array_push($this->openAPINullablesSetToNull, 'payId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payId'] = $payId;

        return $this;
    }

    /**
     * Gets payIdChgd
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployerPayIdChanged|null
     */
    public function getPayIdChgd(): ?\SynergiTech\Staffology\Model\FpsEmployerPayIdChanged
    {
        return $this->container['payIdChgd'];
    }

    /**
     * Sets payIdChgd
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployerPayIdChanged|null $payIdChgd payIdChgd
     *
     * @return $this
     */
    public function setPayIdChgd(?\SynergiTech\Staffology\Model\FpsEmployerPayIdChanged $payIdChgd): static
    {
        if (is_null($payIdChgd)) {
            throw new InvalidArgumentException('non-nullable payIdChgd cannot be null');
        }
        $this->container['payIdChgd'] = $payIdChgd;

        return $this;
    }

    /**
     * Gets paymentToANonIndividual
     *
     * @return string|null
     */
    public function getPaymentToANonIndividual(): ?string
    {
        return $this->container['paymentToANonIndividual'];
    }

    /**
     * Sets paymentToANonIndividual
     *
     * @param string|null $paymentToANonIndividual paymentToANonIndividual
     *
     * @return $this
     */
    public function setPaymentToANonIndividual(?string $paymentToANonIndividual): static
    {
        if (is_null($paymentToANonIndividual)) {
            array_push($this->openAPINullablesSetToNull, 'paymentToANonIndividual');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paymentToANonIndividual', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paymentToANonIndividual'] = $paymentToANonIndividual;

        return $this;
    }

    /**
     * Gets irrEmp
     *
     * @return string|null
     */
    public function getIrrEmp(): ?string
    {
        return $this->container['irrEmp'];
    }

    /**
     * Sets irrEmp
     *
     * @param string|null $irrEmp irrEmp
     *
     * @return $this
     */
    public function setIrrEmp(?string $irrEmp): static
    {
        if (is_null($irrEmp)) {
            array_push($this->openAPINullablesSetToNull, 'irrEmp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('irrEmp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['irrEmp'] = $irrEmp;

        return $this;
    }

    /**
     * Gets leavingDate
     *
     * @return string|null
     */
    public function getLeavingDate(): ?string
    {
        return $this->container['leavingDate'];
    }

    /**
     * Sets leavingDate
     *
     * @param string|null $leavingDate leavingDate
     *
     * @return $this
     */
    public function setLeavingDate(?string $leavingDate): static
    {
        if (is_null($leavingDate)) {
            array_push($this->openAPINullablesSetToNull, 'leavingDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('leavingDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['leavingDate'] = $leavingDate;

        return $this;
    }

    /**
     * Gets figuresToDate
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployeeFigsToDate|null
     */
    public function getFiguresToDate(): ?\SynergiTech\Staffology\Model\FpsEmployeeFigsToDate
    {
        return $this->container['figuresToDate'];
    }

    /**
     * Sets figuresToDate
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployeeFigsToDate|null $figuresToDate figuresToDate
     *
     * @return $this
     */
    public function setFiguresToDate(?\SynergiTech\Staffology\Model\FpsEmployeeFigsToDate $figuresToDate): static
    {
        if (is_null($figuresToDate)) {
            throw new InvalidArgumentException('non-nullable figuresToDate cannot be null');
        }
        $this->container['figuresToDate'] = $figuresToDate;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployeePayment|null
     */
    public function getPayment(): ?\SynergiTech\Staffology\Model\FpsEmployeePayment
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployeePayment|null $payment payment
     *
     * @return $this
     */
    public function setPayment(?\SynergiTech\Staffology\Model\FpsEmployeePayment $payment): static
    {
        if (is_null($payment)) {
            throw new InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets nIlettersAndValues
     *
     * @return \SynergiTech\Staffology\Model\FpsEmployeeNIlettersAndValues[]|null
     */
    public function getNIlettersAndValues(): ?array
    {
        return $this->container['nIlettersAndValues'];
    }

    /**
     * Sets nIlettersAndValues
     *
     * @param \SynergiTech\Staffology\Model\FpsEmployeeNIlettersAndValues[]|null $nIlettersAndValues nIlettersAndValues
     *
     * @return $this
     */
    public function setNIlettersAndValues(?array $nIlettersAndValues): static
    {
        if (is_null($nIlettersAndValues)) {
            array_push($this->openAPINullablesSetToNull, 'nIlettersAndValues');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nIlettersAndValues', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nIlettersAndValues'] = $nIlettersAndValues;

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


