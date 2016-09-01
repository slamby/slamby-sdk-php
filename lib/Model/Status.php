<?php


/**
 * Status
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
 * Status Class Doc Comment
 *
 * @category    Class
 * @description Status object
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Status implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Status';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'api_version' => 'string',
        'processor_count' => 'int',
        'cpu_usage' => 'double',
        'available_free_space' => 'double',
        'total_memory' => 'double',
        'free_memory' => 'double'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'api_version' => 'ApiVersion',
        'processor_count' => 'ProcessorCount',
        'cpu_usage' => 'CpuUsage',
        'available_free_space' => 'AvailableFreeSpace',
        'total_memory' => 'TotalMemory',
        'free_memory' => 'FreeMemory'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'api_version' => 'setApiVersion',
        'processor_count' => 'setProcessorCount',
        'cpu_usage' => 'setCpuUsage',
        'available_free_space' => 'setAvailableFreeSpace',
        'total_memory' => 'setTotalMemory',
        'free_memory' => 'setFreeMemory'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'api_version' => 'getApiVersion',
        'processor_count' => 'getProcessorCount',
        'cpu_usage' => 'getCpuUsage',
        'available_free_space' => 'getAvailableFreeSpace',
        'total_memory' => 'getTotalMemory',
        'free_memory' => 'getFreeMemory'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $api_version API version string
      * @var string
      */
    protected $api_version;
    
    /**
      * $processor_count Number of processors on the API machine
      * @var int
      */
    protected $processor_count;
    
    /**
      * $cpu_usage CPU usage %
      * @var double
      */
    protected $cpu_usage;
    
    /**
      * $available_free_space Available free disk space in MB
      * @var double
      */
    protected $available_free_space;
    
    /**
      * $total_memory Total physical memory in MB
      * @var double
      */
    protected $total_memory;
    
    /**
      * $free_memory Free physical memory in MB
      * @var double
      */
    protected $free_memory;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->api_version = $data["api_version"];
            $this->processor_count = $data["processor_count"];
            $this->cpu_usage = $data["cpu_usage"];
            $this->available_free_space = $data["available_free_space"];
            $this->total_memory = $data["total_memory"];
            $this->free_memory = $data["free_memory"];
        }
    }
    
    /**
     * Gets api_version
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }
  
    /**
     * Sets api_version
     * @param string $api_version API version string
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        
        $this->api_version = $api_version;
        return $this;
    }
    
    /**
     * Gets processor_count
     * @return int
     */
    public function getProcessorCount()
    {
        return $this->processor_count;
    }
  
    /**
     * Sets processor_count
     * @param int $processor_count Number of processors on the API machine
     * @return $this
     */
    public function setProcessorCount($processor_count)
    {
        
        $this->processor_count = $processor_count;
        return $this;
    }
    
    /**
     * Gets cpu_usage
     * @return double
     */
    public function getCpuUsage()
    {
        return $this->cpu_usage;
    }
  
    /**
     * Sets cpu_usage
     * @param double $cpu_usage CPU usage %
     * @return $this
     */
    public function setCpuUsage($cpu_usage)
    {
        
        $this->cpu_usage = $cpu_usage;
        return $this;
    }
    
    /**
     * Gets available_free_space
     * @return double
     */
    public function getAvailableFreeSpace()
    {
        return $this->available_free_space;
    }
  
    /**
     * Sets available_free_space
     * @param double $available_free_space Available free disk space in MB
     * @return $this
     */
    public function setAvailableFreeSpace($available_free_space)
    {
        
        $this->available_free_space = $available_free_space;
        return $this;
    }
    
    /**
     * Gets total_memory
     * @return double
     */
    public function getTotalMemory()
    {
        return $this->total_memory;
    }
  
    /**
     * Sets total_memory
     * @param double $total_memory Total physical memory in MB
     * @return $this
     */
    public function setTotalMemory($total_memory)
    {
        
        $this->total_memory = $total_memory;
        return $this;
    }
    
    /**
     * Gets free_memory
     * @return double
     */
    public function getFreeMemory()
    {
        return $this->free_memory;
    }
  
    /**
     * Sets free_memory
     * @param double $free_memory Free physical memory in MB
     * @return $this
     */
    public function setFreeMemory($free_memory)
    {
        
        $this->free_memory = $free_memory;
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


