<?php
/**
 * NodeCommand
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
 * OpenAPI spec version: 0.20.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.12
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
 * NodeCommand Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NodeCommand implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NodeCommand';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isSystemCommandType' => 'bool',
'nodeCommandType' => 'string',
'nodeCommandProperties' => '\Killbill\Client\Swagger\Model\NodeCommandProperty[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isSystemCommandType' => null,
'nodeCommandType' => null,
'nodeCommandProperties' => null    ];

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
        'isSystemCommandType' => 'isSystemCommandType',
'nodeCommandType' => 'nodeCommandType',
'nodeCommandProperties' => 'nodeCommandProperties'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isSystemCommandType' => 'setIsSystemCommandType',
'nodeCommandType' => 'setNodeCommandType',
'nodeCommandProperties' => 'setNodeCommandProperties'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isSystemCommandType' => 'getIsSystemCommandType',
'nodeCommandType' => 'getNodeCommandType',
'nodeCommandProperties' => 'getNodeCommandProperties'    ];

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
        $this->container['isSystemCommandType'] = isset($data['isSystemCommandType']) ? $data['isSystemCommandType'] : null;
        $this->container['nodeCommandType'] = isset($data['nodeCommandType']) ? $data['nodeCommandType'] : null;
        $this->container['nodeCommandProperties'] = isset($data['nodeCommandProperties']) ? $data['nodeCommandProperties'] : null;
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
     * Gets isSystemCommandType
     *
     * @return bool
     */
    public function getIsSystemCommandType()
    {
        return $this->container['isSystemCommandType'];
    }

    /**
     * Sets isSystemCommandType
     *
     * @param bool $isSystemCommandType isSystemCommandType
     *
     * @return $this
     */
    public function setIsSystemCommandType($isSystemCommandType)
    {
        $this->container['isSystemCommandType'] = $isSystemCommandType;

        return $this;
    }

    /**
     * Gets nodeCommandType
     *
     * @return string
     */
    public function getNodeCommandType()
    {
        return $this->container['nodeCommandType'];
    }

    /**
     * Sets nodeCommandType
     *
     * @param string $nodeCommandType nodeCommandType
     *
     * @return $this
     */
    public function setNodeCommandType($nodeCommandType)
    {
        $this->container['nodeCommandType'] = $nodeCommandType;

        return $this;
    }

    /**
     * Gets nodeCommandProperties
     *
     * @return \Killbill\Client\Swagger\Model\NodeCommandProperty[]
     */
    public function getNodeCommandProperties()
    {
        return $this->container['nodeCommandProperties'];
    }

    /**
     * Sets nodeCommandProperties
     *
     * @param \Killbill\Client\Swagger\Model\NodeCommandProperty[] $nodeCommandProperties nodeCommandProperties
     *
     * @return $this
     */
    public function setNodeCommandProperties($nodeCommandProperties)
    {
        $this->container['nodeCommandProperties'] = $nodeCommandProperties;

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
