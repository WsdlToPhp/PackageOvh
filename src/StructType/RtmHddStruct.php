<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfRtmHddPartitionStructType
     */
    public $partitions;
    /**
     * The smart
     * @var \Ovh\StructType\RtmHddSmartStruct
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
     * @param \Ovh\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions
     * @param \Ovh\StructType\RtmHddSmartStruct $smart
     * @param int $temperature
     */
    public function __construct($device = null, $model = null, $capacity = null, $status = null, \Ovh\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions = null, \Ovh\StructType\RtmHddSmartStruct $smart = null, $temperature = null)
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
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setDevice($device = null)
    {
        // validation for constraint: string
        if (!is_null($device) && !is_string($device)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($device, true), gettype($device)), __LINE__);
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
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($model, true), gettype($model)), __LINE__);
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
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: string
        if (!is_null($capacity) && !is_string($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($capacity, true), gettype($capacity)), __LINE__);
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
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get partitions value
     * @return \Ovh\ArrayType\MyArrayOfRtmHddPartitionStructType|null
     */
    public function getPartitions()
    {
        return $this->partitions;
    }
    /**
     * Set partitions value
     * @param \Ovh\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setPartitions(\Ovh\ArrayType\MyArrayOfRtmHddPartitionStructType $partitions = null)
    {
        $this->partitions = $partitions;
        return $this;
    }
    /**
     * Get smart value
     * @return \Ovh\StructType\RtmHddSmartStruct|null
     */
    public function getSmart()
    {
        return $this->smart;
    }
    /**
     * Set smart value
     * @param \Ovh\StructType\RtmHddSmartStruct $smart
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setSmart(\Ovh\StructType\RtmHddSmartStruct $smart = null)
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
     * @return \Ovh\StructType\RtmHddStruct
     */
    public function setTemperature($temperature = null)
    {
        // validation for constraint: int
        if (!is_null($temperature) && !(is_int($temperature) || ctype_digit($temperature))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($temperature, true), gettype($temperature)), __LINE__);
        }
        $this->temperature = $temperature;
        return $this;
    }
}
