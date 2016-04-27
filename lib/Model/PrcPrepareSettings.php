<?php


/**
 * PrcPrepareSettings
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
 * PrcPrepareSettings Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PrcPrepareSettings implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'PrcPrepareSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'data_set_name' => 'string',
        'tag_id_list' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'data_set_name' => 'DataSetName',
        'tag_id_list' => 'TagIdList'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'data_set_name' => 'setDataSetName',
        'tag_id_list' => 'setTagIdList'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'data_set_name' => 'getDataSetName',
        'tag_id_list' => 'getTagIdList'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $data_set_name 
      * @var string
      */
    protected $data_set_name;
    
    /**
      * $tag_id_list 
      * @var string[]
      */
    protected $tag_id_list;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->data_set_name = $data["data_set_name"];
            $this->tag_id_list = $data["tag_id_list"];
        }
    }
    
    /**
     * Gets data_set_name
     * @return string
     */
    public function getDataSetName()
    {
        return $this->data_set_name;
    }
  
    /**
     * Sets data_set_name
     * @param string $data_set_name 
     * @return $this
     */
    public function setDataSetName($data_set_name)
    {
        
        $this->data_set_name = $data_set_name;
        return $this;
    }
    
    /**
     * Gets tag_id_list
     * @return string[]
     */
    public function getTagIdList()
    {
        return $this->tag_id_list;
    }
  
    /**
     * Sets tag_id_list
     * @param string[] $tag_id_list 
     * @return $this
     */
    public function setTagIdList($tag_id_list)
    {
        
        $this->tag_id_list = $tag_id_list;
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


