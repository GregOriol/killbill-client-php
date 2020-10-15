<?php
/**
 * PhasePrice
 *
 * PHP version 7.1+
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.22.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * PhasePrice Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhasePrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhasePrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'planName' => 'string',
'phaseName' => 'string',
'phaseType' => 'string',
'fixedPrice' => 'float',
'recurringPrice' => 'float',
'usagePrices' => '\Killbill\Client\Swagger\Model\UsagePrice[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'planName' => null,
'phaseName' => null,
'phaseType' => null,
'fixedPrice' => null,
'recurringPrice' => null,
'usagePrices' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'planName' => 'planName',
'phaseName' => 'phaseName',
'phaseType' => 'phaseType',
'fixedPrice' => 'fixedPrice',
'recurringPrice' => 'recurringPrice',
'usagePrices' => 'usagePrices'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'planName' => 'setPlanName',
'phaseName' => 'setPhaseName',
'phaseType' => 'setPhaseType',
'fixedPrice' => 'setFixedPrice',
'recurringPrice' => 'setRecurringPrice',
'usagePrices' => 'setUsagePrices'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'planName' => 'getPlanName',
'phaseName' => 'getPhaseName',
'phaseType' => 'getPhaseType',
'fixedPrice' => 'getFixedPrice',
'recurringPrice' => 'getRecurringPrice',
'usagePrices' => 'getUsagePrices'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
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
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['phaseName'] = isset($data['phaseName']) ? $data['phaseName'] : null;
        $this->container['phaseType'] = isset($data['phaseType']) ? $data['phaseType'] : null;
        $this->container['fixedPrice'] = isset($data['fixedPrice']) ? $data['fixedPrice'] : null;
        $this->container['recurringPrice'] = isset($data['recurringPrice']) ? $data['recurringPrice'] : null;
        $this->container['usagePrices'] = isset($data['usagePrices']) ? $data['usagePrices'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
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
     * Gets planName
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
     * Sets planName
     *
     * @param string $planName planName
     *
     * @return $this
     */
    public function setPlanName($planName): PhasePrice
    {
        $this->container['planName'] = $planName;

        return $this;
    }

    /**
     * Gets phaseName
     *
     * @return string
     */
    public function getPhaseName()
    {
        return $this->container['phaseName'];
    }

    /**
     * Sets phaseName
     *
     * @param string $phaseName phaseName
     *
     * @return $this
     */
    public function setPhaseName($phaseName): PhasePrice
    {
        $this->container['phaseName'] = $phaseName;

        return $this;
    }

    /**
     * Gets phaseType
     *
     * @return string
     */
    public function getPhaseType()
    {
        return $this->container['phaseType'];
    }

    /**
     * Sets phaseType
     *
     * @param string $phaseType phaseType
     *
     * @return $this
     */
    public function setPhaseType($phaseType): PhasePrice
    {
        $this->container['phaseType'] = $phaseType;

        return $this;
    }

    /**
     * Gets fixedPrice
     *
     * @return float
     */
    public function getFixedPrice()
    {
        return $this->container['fixedPrice'];
    }

    /**
     * Sets fixedPrice
     *
     * @param float $fixedPrice fixedPrice
     *
     * @return $this
     */
    public function setFixedPrice($fixedPrice): PhasePrice
    {
        $this->container['fixedPrice'] = $fixedPrice;

        return $this;
    }

    /**
     * Gets recurringPrice
     *
     * @return float
     */
    public function getRecurringPrice()
    {
        return $this->container['recurringPrice'];
    }

    /**
     * Sets recurringPrice
     *
     * @param float $recurringPrice recurringPrice
     *
     * @return $this
     */
    public function setRecurringPrice($recurringPrice): PhasePrice
    {
        $this->container['recurringPrice'] = $recurringPrice;

        return $this;
    }

    /**
     * Gets usagePrices
     *
     * @return \Killbill\Client\Swagger\Model\UsagePrice[]
     */
    public function getUsagePrices()
    {
        return $this->container['usagePrices'];
    }

    /**
     * Sets usagePrices
     *
     * @param \Killbill\Client\Swagger\Model\UsagePrice[] $usagePrices usagePrices
     *
     * @return $this
     */
    public function setUsagePrices($usagePrices): PhasePrice
    {
        $this->container['usagePrices'] = $usagePrices;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
