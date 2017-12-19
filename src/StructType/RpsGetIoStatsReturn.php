<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsGetIoStatsReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsGetIoStatsReturn extends AbstractStructBase
{
    /**
     * The average
     * @var \PayPal\StructType\RpsGetIOStatsDetailStruct
     */
    public $average;
    /**
     * The current
     * @var \PayPal\StructType\RpsGetIOStatsDetailStruct
     */
    public $current;
    /**
     * The max
     * @var \PayPal\StructType\RpsGetIOStatsDetailStruct
     */
    public $max;
    /**
     * The image
     * @var string
     */
    public $image;
    /**
     * Constructor method for rpsGetIoStatsReturn
     * @uses RpsGetIoStatsReturn::setAverage()
     * @uses RpsGetIoStatsReturn::setCurrent()
     * @uses RpsGetIoStatsReturn::setMax()
     * @uses RpsGetIoStatsReturn::setImage()
     * @param \PayPal\StructType\RpsGetIOStatsDetailStruct $average
     * @param \PayPal\StructType\RpsGetIOStatsDetailStruct $current
     * @param \PayPal\StructType\RpsGetIOStatsDetailStruct $max
     * @param string $image
     */
    public function __construct(\PayPal\StructType\RpsGetIOStatsDetailStruct $average = null, \PayPal\StructType\RpsGetIOStatsDetailStruct $current = null, \PayPal\StructType\RpsGetIOStatsDetailStruct $max = null, $image = null)
    {
        $this
            ->setAverage($average)
            ->setCurrent($current)
            ->setMax($max)
            ->setImage($image);
    }
    /**
     * Get average value
     * @return \PayPal\StructType\RpsGetIOStatsDetailStruct|null
     */
    public function getAverage()
    {
        return $this->average;
    }
    /**
     * Set average value
     * @param \PayPal\StructType\RpsGetIOStatsDetailStruct $average
     * @return \PayPal\StructType\RpsGetIoStatsReturn
     */
    public function setAverage(\PayPal\StructType\RpsGetIOStatsDetailStruct $average = null)
    {
        $this->average = $average;
        return $this;
    }
    /**
     * Get current value
     * @return \PayPal\StructType\RpsGetIOStatsDetailStruct|null
     */
    public function getCurrent()
    {
        return $this->current;
    }
    /**
     * Set current value
     * @param \PayPal\StructType\RpsGetIOStatsDetailStruct $current
     * @return \PayPal\StructType\RpsGetIoStatsReturn
     */
    public function setCurrent(\PayPal\StructType\RpsGetIOStatsDetailStruct $current = null)
    {
        $this->current = $current;
        return $this;
    }
    /**
     * Get max value
     * @return \PayPal\StructType\RpsGetIOStatsDetailStruct|null
     */
    public function getMax()
    {
        return $this->max;
    }
    /**
     * Set max value
     * @param \PayPal\StructType\RpsGetIOStatsDetailStruct $max
     * @return \PayPal\StructType\RpsGetIoStatsReturn
     */
    public function setMax(\PayPal\StructType\RpsGetIOStatsDetailStruct $max = null)
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
     * @return \PayPal\StructType\RpsGetIoStatsReturn
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
     * @return \PayPal\StructType\RpsGetIoStatsReturn
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
