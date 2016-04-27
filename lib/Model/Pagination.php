<?php


/**
 * Pagination
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Pagination Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Pagination implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Pagination';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'offset' => 'int',
        'limit' => 'int',
        'order_direction' => 'string',
        'order_by_field' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'offset' => 'Offset',
        'limit' => 'Limit',
        'order_direction' => 'OrderDirection',
        'order_by_field' => 'OrderByField'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'offset' => 'setOffset',
        'limit' => 'setLimit',
        'order_direction' => 'setOrderDirection',
        'order_by_field' => 'setOrderByField'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'offset' => 'getOffset',
        'limit' => 'getLimit',
        'order_direction' => 'getOrderDirection',
        'order_by_field' => 'getOrderByField'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $offset 
      * @var int
      */
    protected $offset;
    
    /**
      * $limit 
      * @var int
      */
    protected $limit;
    
    /**
      * $order_direction 
      * @var string
      */
    protected $order_direction;
    
    /**
      * $order_by_field 
      * @var string
      */
    protected $order_by_field;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->offset = $data["offset"];
            $this->limit = $data["limit"];
            $this->order_direction = $data["order_direction"];
            $this->order_by_field = $data["order_by_field"];
        }
    }
    
    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }
  
    /**
     * Sets offset
     * @param int $offset 
     * @return $this
     */
    public function setOffset($offset)
    {
        
        $this->offset = $offset;
        return $this;
    }
    
    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
  
    /**
     * Sets limit
     * @param int $limit 
     * @return $this
     */
    public function setLimit($limit)
    {
        
        $this->limit = $limit;
        return $this;
    }
    
    /**
     * Gets order_direction
     * @return string
     */
    public function getOrderDirection()
    {
        return $this->order_direction;
    }
  
    /**
     * Sets order_direction
     * @param string $order_direction 
     * @return $this
     */
    public function setOrderDirection($order_direction)
    {
        $allowed_values = array("Asc", "Desc");
        if (!in_array($order_direction, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'order_direction', must be one of 'Asc', 'Desc'");
        }
        $this->order_direction = $order_direction;
        return $this;
    }
    
    /**
     * Gets order_by_field
     * @return string
     */
    public function getOrderByField()
    {
        return $this->order_by_field;
    }
  
    /**
     * Sets order_by_field
     * @param string $order_by_field 
     * @return $this
     */
    public function setOrderByField($order_by_field)
    {
        
        $this->order_by_field = $order_by_field;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

