<?php
/**
 * UsagePrice
 *
 * PHP version 5
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
 * UsagePrice Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsagePrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UsagePrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'usageName' => 'string',
'usageType' => 'string',
'billingMode' => 'string',
'tierBlockPolicy' => 'string',
'tierPrices' => '\Killbill\Client\Swagger\Model\TierPrice[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'usageName' => null,
'usageType' => null,
'billingMode' => null,
'tierBlockPolicy' => null,
'tierPrices' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
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
        'usageName' => 'usageName',
'usageType' => 'usageType',
'billingMode' => 'billingMode',
'tierBlockPolicy' => 'tierBlockPolicy',
'tierPrices' => 'tierPrices'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'usageName' => 'setUsageName',
'usageType' => 'setUsageType',
'billingMode' => 'setBillingMode',
'tierBlockPolicy' => 'setTierBlockPolicy',
'tierPrices' => 'setTierPrices'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'usageName' => 'getUsageName',
'usageType' => 'getUsageType',
'billingMode' => 'getBillingMode',
'tierBlockPolicy' => 'getTierBlockPolicy',
'tierPrices' => 'getTierPrices'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const USAGE_TYPE_CAPACITY = 'CAPACITY';
const USAGE_TYPE_CONSUMABLE = 'CONSUMABLE';
const BILLING_MODE_ADVANCE = 'IN_ADVANCE';
const BILLING_MODE_ARREAR = 'IN_ARREAR';
const TIER_BLOCK_POLICY_ALL_TIERS = 'ALL_TIERS';
const TIER_BLOCK_POLICY_TOP_TIER = 'TOP_TIER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsageTypeAllowableValues()
    {
        return [
            self::USAGE_TYPE_CAPACITY,
self::USAGE_TYPE_CONSUMABLE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingModeAllowableValues()
    {
        return [
            self::BILLING_MODE_ADVANCE,
self::BILLING_MODE_ARREAR,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTierBlockPolicyAllowableValues()
    {
        return [
            self::TIER_BLOCK_POLICY_ALL_TIERS,
self::TIER_BLOCK_POLICY_TOP_TIER,        ];
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
        $this->container['usageName'] = isset($data['usageName']) ? $data['usageName'] : null;
        $this->container['usageType'] = isset($data['usageType']) ? $data['usageType'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['tierBlockPolicy'] = isset($data['tierBlockPolicy']) ? $data['tierBlockPolicy'] : null;
        $this->container['tierPrices'] = isset($data['tierPrices']) ? $data['tierPrices'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($this->container['usageType']) && !in_array($this->container['usageType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'usageType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBillingModeAllowableValues();
        if (!is_null($this->container['billingMode']) && !in_array($this->container['billingMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'billingMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTierBlockPolicyAllowableValues();
        if (!is_null($this->container['tierBlockPolicy']) && !in_array($this->container['tierBlockPolicy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tierBlockPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets usageName
     *
     * @return string
     */
    public function getUsageName()
    {
        return $this->container['usageName'];
    }

    /**
     * Sets usageName
     *
     * @param string $usageName usageName
     *
     * @return $this
     */
    public function setUsageName($usageName)
    {
        $this->container['usageName'] = $usageName;

        return $this;
    }

    /**
     * Gets usageType
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->container['usageType'];
    }

    /**
     * Sets usageType
     *
     * @param string $usageType usageType
     *
     * @return $this
     */
    public function setUsageType($usageType)
    {
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($usageType) && !in_array($usageType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'usageType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usageType'] = $usageType;

        return $this;
    }

    /**
     * Gets billingMode
     *
     * @return string
     */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
     * Sets billingMode
     *
     * @param string $billingMode billingMode
     *
     * @return $this
     */
    public function setBillingMode($billingMode)
    {
        $allowedValues = $this->getBillingModeAllowableValues();
        if (!is_null($billingMode) && !in_array($billingMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'billingMode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billingMode'] = $billingMode;

        return $this;
    }

    /**
     * Gets tierBlockPolicy
     *
     * @return string
     */
    public function getTierBlockPolicy()
    {
        return $this->container['tierBlockPolicy'];
    }

    /**
     * Sets tierBlockPolicy
     *
     * @param string $tierBlockPolicy tierBlockPolicy
     *
     * @return $this
     */
    public function setTierBlockPolicy($tierBlockPolicy)
    {
        $allowedValues = $this->getTierBlockPolicyAllowableValues();
        if (!is_null($tierBlockPolicy) && !in_array($tierBlockPolicy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tierBlockPolicy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tierBlockPolicy'] = $tierBlockPolicy;

        return $this;
    }

    /**
     * Gets tierPrices
     *
     * @return \Killbill\Client\Swagger\Model\TierPrice[]
     */
    public function getTierPrices()
    {
        return $this->container['tierPrices'];
    }

    /**
     * Sets tierPrices
     *
     * @param \Killbill\Client\Swagger\Model\TierPrice[] $tierPrices tierPrices
     *
     * @return $this
     */
    public function setTierPrices($tierPrices)
    {
        $this->container['tierPrices'] = $tierPrices;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
