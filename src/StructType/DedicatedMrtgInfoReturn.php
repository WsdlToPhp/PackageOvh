<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMrtgInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMrtgInfoReturn extends AbstractStructBase
{
    /**
     * The average
     * @var \Ovh\StructType\DedicatedMrtgInfoStruct
     */
    public $average;
    /**
     * The current
     * @var \Ovh\StructType\DedicatedMrtgInfoStruct
     */
    public $current;
    /**
     * The max
     * @var \Ovh\StructType\DedicatedMrtgInfoStruct
     */
    public $max;
    /**
     * The image
     * @var string
     */
    public $image;
    /**
     * Constructor method for dedicatedMrtgInfoReturn
     * @uses DedicatedMrtgInfoReturn::setAverage()
     * @uses DedicatedMrtgInfoReturn::setCurrent()
     * @uses DedicatedMrtgInfoReturn::setMax()
     * @uses DedicatedMrtgInfoReturn::setImage()
     * @param \Ovh\StructType\DedicatedMrtgInfoStruct $average
     * @param \Ovh\StructType\DedicatedMrtgInfoStruct $current
     * @param \Ovh\StructType\DedicatedMrtgInfoStruct $max
     * @param string $image
     */
    public function __construct(\Ovh\StructType\DedicatedMrtgInfoStruct $average = null, \Ovh\StructType\DedicatedMrtgInfoStruct $current = null, \Ovh\StructType\DedicatedMrtgInfoStruct $max = null, $image = null)
    {
        $this
            ->setAverage($average)
            ->setCurrent($current)
            ->setMax($max)
            ->setImage($image);
    }
    /**
     * Get average value
     * @return \Ovh\StructType\DedicatedMrtgInfoStruct|null
     */
    public function getAverage()
    {
        return $this->average;
    }
    /**
     * Set average value
     * @param \Ovh\StructType\DedicatedMrtgInfoStruct $average
     * @return \Ovh\StructType\DedicatedMrtgInfoReturn
     */
    public function setAverage(\Ovh\StructType\DedicatedMrtgInfoStruct $average = null)
    {
        $this->average = $average;
        return $this;
    }
    /**
     * Get current value
     * @return \Ovh\StructType\DedicatedMrtgInfoStruct|null
     */
    public function getCurrent()
    {
        return $this->current;
    }
    /**
     * Set current value
     * @param \Ovh\StructType\DedicatedMrtgInfoStruct $current
     * @return \Ovh\StructType\DedicatedMrtgInfoReturn
     */
    public function setCurrent(\Ovh\StructType\DedicatedMrtgInfoStruct $current = null)
    {
        $this->current = $current;
        return $this;
    }
    /**
     * Get max value
     * @return \Ovh\StructType\DedicatedMrtgInfoStruct|null
     */
    public function getMax()
    {
        return $this->max;
    }
    /**
     * Set max value
     * @param \Ovh\StructType\DedicatedMrtgInfoStruct $max
     * @return \Ovh\StructType\DedicatedMrtgInfoReturn
     */
    public function setMax(\Ovh\StructType\DedicatedMrtgInfoStruct $max = null)
    {
        $this->max = $max;
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \Ovh\StructType\DedicatedMrtgInfoReturn
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedMrtgInfoReturn
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
