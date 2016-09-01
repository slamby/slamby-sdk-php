<?php


/**
 * Filter
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
 * Filter Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Filter implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Filter';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'tag_id_list' => 'string[]',
        'query' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'tag_id_list' => 'TagIdList',
        'query' => 'Query'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'tag_id_list' => 'setTagIdList',
        'query' => 'setQuery'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'tag_id_list' => 'getTagIdList',
        'query' => 'getQuery'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $tag_id_list You can direct your search queries into specific tags. \r\n            By giving the required tag id list, the filter will affect just the provided tags. \r\n            It's useful to create powerful search queries inside given tags. \r\n            To filter inside a whole dataset, you can set this field to empty
      * @var string[]
      */
    protected $tag_id_list;
    
    /**
      * $query Set here the filters. The value is the query string you want to apply. \r\n            Can be BOOL expressions. You can use these: AND, OR, NOT. \r\n            For example: 'searchforthis AND NOT butnotthis'. \r\n            Also you can use wildcards. For example: 'exampl*'. \r\n            If you want to search in a specified field, than do thie: 'title:searchthisinthetitle'
      * @var string
      */
    protected $query;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->tag_id_list = $data["tag_id_list"];
            $this->query = $data["query"];
        }
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
     * @param string[] $tag_id_list You can direct your search queries into specific tags. \r\n            By giving the required tag id list, the filter will affect just the provided tags. \r\n            It's useful to create powerful search queries inside given tags. \r\n            To filter inside a whole dataset, you can set this field to empty
     * @return $this
     */
    public function setTagIdList($tag_id_list)
    {
        
        $this->tag_id_list = $tag_id_list;
        return $this;
    }
    
    /**
     * Gets query
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }
  
    /**
     * Sets query
     * @param string $query Set here the filters. The value is the query string you want to apply. \r\n            Can be BOOL expressions. You can use these: AND, OR, NOT. \r\n            For example: 'searchforthis AND NOT butnotthis'. \r\n            Also you can use wildcards. For example: 'exampl*'. \r\n            If you want to search in a specified field, than do thie: 'title:searchthisinthetitle'
     * @return $this
     */
    public function setQuery($query)
    {
        
        $this->query = $query;
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


