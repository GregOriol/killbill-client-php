<?php
/**
 * OverdueState
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
 * OpenAPI spec version: 0.20.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
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
 * OverdueState Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverdueState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OverdueState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'externalMessage' => 'string',
'daysBetweenPaymentRetries' => 'int[]',
'isDisableEntitlementAndChangesBlocked' => 'bool',
'isBlockChanges' => 'bool',
'isClearState' => 'bool',
'reevaluationIntervalDays' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'externalMessage' => null,
'daysBetweenPaymentRetries' => 'int32',
'isDisableEntitlementAndChangesBlocked' => null,
'isBlockChanges' => null,
'isClearState' => null,
'reevaluationIntervalDays' => 'int32'    ];

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
        'name' => 'name',
'externalMessage' => 'externalMessage',
'daysBetweenPaymentRetries' => 'daysBetweenPaymentRetries',
'isDisableEntitlementAndChangesBlocked' => 'isDisableEntitlementAndChangesBlocked',
'isBlockChanges' => 'isBlockChanges',
'isClearState' => 'isClearState',
'reevaluationIntervalDays' => 'reevaluationIntervalDays'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'externalMessage' => 'setExternalMessage',
'daysBetweenPaymentRetries' => 'setDaysBetweenPaymentRetries',
'isDisableEntitlementAndChangesBlocked' => 'setIsDisableEntitlementAndChangesBlocked',
'isBlockChanges' => 'setIsBlockChanges',
'isClearState' => 'setIsClearState',
'reevaluationIntervalDays' => 'setReevaluationIntervalDays'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'externalMessage' => 'getExternalMessage',
'daysBetweenPaymentRetries' => 'getDaysBetweenPaymentRetries',
'isDisableEntitlementAndChangesBlocked' => 'getIsDisableEntitlementAndChangesBlocked',
'isBlockChanges' => 'getIsBlockChanges',
'isClearState' => 'getIsClearState',
'reevaluationIntervalDays' => 'getReevaluationIntervalDays'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['externalMessage'] = isset($data['externalMessage']) ? $data['externalMessage'] : null;
        $this->container['daysBetweenPaymentRetries'] = isset($data['daysBetweenPaymentRetries']) ? $data['daysBetweenPaymentRetries'] : null;
        $this->container['isDisableEntitlementAndChangesBlocked'] = isset($data['isDisableEntitlementAndChangesBlocked']) ? $data['isDisableEntitlementAndChangesBlocked'] : null;
        $this->container['isBlockChanges'] = isset($data['isBlockChanges']) ? $data['isBlockChanges'] : null;
        $this->container['isClearState'] = isset($data['isClearState']) ? $data['isClearState'] : null;
        $this->container['reevaluationIntervalDays'] = isset($data['reevaluationIntervalDays']) ? $data['reevaluationIntervalDays'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets externalMessage
     *
     * @return string
     */
    public function getExternalMessage()
    {
        return $this->container['externalMessage'];
    }

    /**
     * Sets externalMessage
     *
     * @param string $externalMessage externalMessage
     *
     * @return $this
     */
    public function setExternalMessage($externalMessage)
    {
        $this->container['externalMessage'] = $externalMessage;

        return $this;
    }

    /**
     * Gets daysBetweenPaymentRetries
     *
     * @return int[]
     */
    public function getDaysBetweenPaymentRetries()
    {
        return $this->container['daysBetweenPaymentRetries'];
    }

    /**
     * Sets daysBetweenPaymentRetries
     *
     * @param int[] $daysBetweenPaymentRetries daysBetweenPaymentRetries
     *
     * @return $this
     */
    public function setDaysBetweenPaymentRetries($daysBetweenPaymentRetries)
    {
        $this->container['daysBetweenPaymentRetries'] = $daysBetweenPaymentRetries;

        return $this;
    }

    /**
     * Gets isDisableEntitlementAndChangesBlocked
     *
     * @return bool
     */
    public function getIsDisableEntitlementAndChangesBlocked()
    {
        return $this->container['isDisableEntitlementAndChangesBlocked'];
    }

    /**
     * Sets isDisableEntitlementAndChangesBlocked
     *
     * @param bool $isDisableEntitlementAndChangesBlocked isDisableEntitlementAndChangesBlocked
     *
     * @return $this
     */
    public function setIsDisableEntitlementAndChangesBlocked($isDisableEntitlementAndChangesBlocked)
    {
        $this->container['isDisableEntitlementAndChangesBlocked'] = $isDisableEntitlementAndChangesBlocked;

        return $this;
    }

    /**
     * Gets isBlockChanges
     *
     * @return bool
     */
    public function getIsBlockChanges()
    {
        return $this->container['isBlockChanges'];
    }

    /**
     * Sets isBlockChanges
     *
     * @param bool $isBlockChanges isBlockChanges
     *
     * @return $this
     */
    public function setIsBlockChanges($isBlockChanges)
    {
        $this->container['isBlockChanges'] = $isBlockChanges;

        return $this;
    }

    /**
     * Gets isClearState
     *
     * @return bool
     */
    public function getIsClearState()
    {
        return $this->container['isClearState'];
    }

    /**
     * Sets isClearState
     *
     * @param bool $isClearState isClearState
     *
     * @return $this
     */
    public function setIsClearState($isClearState)
    {
        $this->container['isClearState'] = $isClearState;

        return $this;
    }

    /**
     * Gets reevaluationIntervalDays
     *
     * @return int
     */
    public function getReevaluationIntervalDays()
    {
        return $this->container['reevaluationIntervalDays'];
    }

    /**
     * Sets reevaluationIntervalDays
     *
     * @param int $reevaluationIntervalDays reevaluationIntervalDays
     *
     * @return $this
     */
    public function setReevaluationIntervalDays($reevaluationIntervalDays)
    {
        $this->container['reevaluationIntervalDays'] = $reevaluationIntervalDays;

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
