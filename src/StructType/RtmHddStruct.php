<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmHddStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmHddStruct extends AbstractStructBase
{
    /**
     * The device
     * @var string
     */
    public $device;
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The capacity
     * @var string
     */
    public $capacity;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The partitions
     * @var \PayPal\ArrayType\MyArrayOfRtmHddPartitionStructType
     */
    public $partitions;
    /**
     * The smart
     * @var \PayPal\StructType\RtmHddSmartStruct
     */
    public $smart;
    /**
     * The temperature
     * @var int
     */
    public $temperature;
    /**
     * Constructor method for rtmHddStruct
     * @uses RtmHddStruct::setDevice()
     * @uses RtmHddStruct::setModel()
     * @uses RtmHddStruct::setCapacity()
     * @uses RtmHddStruct::setStatus()
     * @uses RtmHddStruct::setPartitions()
     * @uses RtmHddStruct::setSmart()
     * @uses RtmHddStruct::setTemperature()
     * @param string $device
     * @param string $model
     * @param string $capacity
     * @param string $status
     * @param \PayPal\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions
     * @param \PayPal\StructType\RtmHddSmartStruct $smart
     * @param int $temperature
     */
    public function __construct($device = null, $model = null, $capacity = null, $status = null, \PayPal\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions = null, \PayPal\StructType\RtmHddSmartStruct $smart = null, $temperature = null)
    {
        $this
            ->setDevice($device)
            ->setModel($model)
            ->setCapacity($capacity)
            ->setStatus($status)
            ->setPartitions($partitions)
            ->setSmart($smart)
            ->setTemperature($temperature);
    }
    /**
     * Get device value
     * @return string|null
     */
    public function getDevice()
    {
        return $this->device;
    }
    /**
     * Set device value
     * @param string $device
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setDevice($device = null)
    {
        // validation for constraint: string
        if (!is_null($device) && !is_string($device)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($device)), __LINE__);
        }
        $this->device = $device;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get capacity value
     * @return string|null
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * Set capacity value
     * @param string $capacity
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: string
        if (!is_null($capacity) && !is_string($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get partitions value
     * @return \PayPal\ArrayType\MyArrayOfRtmHddPartitionStructType|null
     */
    public function getPartitions()
    {
        return $this->partitions;
    }
    /**
     * Set partitions value
     * @param \PayPal\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setPartitions(\PayPal\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions = null)
    {
        $this->partitions = $partitions;
        return $this;
    }
    /**
     * Get smart value
     * @return \PayPal\StructType\RtmHddSmartStruct|null
     */
    public function getSmart()
    {
        return $this->smart;
    }
    /**
     * Set smart value
     * @param \PayPal\StructType\RtmHddSmartStruct $smart
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setSmart(\PayPal\StructType\RtmHddSmartStruct $smart = null)
    {
        $this->smart = $smart;
        return $this;
    }
    /**
     * Get temperature value
     * @return int|null
     */
    public function getTemperature()
    {
        return $this->temperature;
    }
    /**
     * Set temperature value
     * @param int $temperature
     * @return \PayPal\StructType\RtmHddStruct
     */
    public function setTemperature($temperature = null)
    {
        // validation for constraint: int
        if (!is_null($temperature) && !is_numeric($temperature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($temperature)), __LINE__);
        }
        $this->temperature = $temperature;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RtmHddStruct
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
