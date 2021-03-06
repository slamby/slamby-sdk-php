<?php


/**
 * DocumentFilterSettings
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
 * DocumentFilterSettings Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentFilterSettings implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'DocumentFilterSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'pagination' => '\Swagger\Client\Model\Pagination',
        'order' => '\Swagger\Client\Model\Order',
        'filter' => '\Swagger\Client\Model\Filter',
        'field_list' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'pagination' => 'Pagination',
        'order' => 'Order',
        'filter' => 'Filter',
        'field_list' => 'FieldList'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'pagination' => 'setPagination',
        'order' => 'setOrder',
        'filter' => 'setFilter',
        'field_list' => 'setFieldList'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'pagination' => 'getPagination',
        'order' => 'getOrder',
        'filter' => 'getFilter',
        'field_list' => 'getFieldList'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $pagination 
      * @var \Swagger\Client\Model\Pagination
      */
    protected $pagination;
    
    /**
      * $order 
      * @var \Swagger\Client\Model\Order
      */
    protected $order;
    
    /**
      * $filter 
      * @var \Swagger\Client\Model\Filter
      */
    protected $filter;
    
    /**
      * $field_list Query returns only with the specified field(s)
      * @var string[]
      */
    protected $field_list;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->pagination = $data["pagination"];
            $this->order = $data["order"];
            $this->filter = $data["filter"];
            $this->field_list = $data["field_list"];
        }
    }
    
    /**
     * Gets pagination
     * @return \Swagger\Client\Model\Pagination
     */
    public function getPagination()
    {
        return $this->pagination;
    }
  
    /**
     * Sets pagination
     * @param \Swagger\Client\Model\Pagination $pagination 
     * @return $this
     */
    public function setPagination($pagination)
    {
        
        $this->pagination = $pagination;
        return $this;
    }
    
    /**
     * Gets order
     * @return \Swagger\Client\Model\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param \Swagger\Client\Model\Order $order 
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
        return $this;
    }
    
    /**
     * Gets filter
     * @return \Swagger\Client\Model\Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }
  
    /**
     * Sets filter
     * @param \Swagger\Client\Model\Filter $filter 
     * @return $this
     */
    public function setFilter($filter)
    {
        
        $this->filter = $filter;
        return $this;
    }
    
    /**
     * Gets field_list
     * @return string[]
     */
    public function getFieldList()
    {
        return $this->field_list;
    }
  
    /**
     * Sets field_list
     * @param string[] $field_list Query returns only with the specified field(s)
     * @return $this
     */
    public function setFieldList($field_list)
    {
        
        $this->field_list = $field_list;
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


