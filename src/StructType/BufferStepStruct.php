<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bufferStepStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BufferStepStruct extends AbstractStructBase
{
    /**
     * The durationUnit
     * @var string
     */
    public $durationUnit;
    /**
     * The durationValue
     * @var string
     */
    public $durationValue;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The extraInfo
     * @var string
     */
    public $extraInfo;
    /**
     * Constructor method for bufferStepStruct
     * @uses BufferStepStruct::setDurationUnit()
     * @uses BufferStepStruct::setDurationValue()
     * @uses BufferStepStruct::setDate()
     * @uses BufferStepStruct::setExtraInfo()
     * @param string $durationUnit
     * @param string $durationValue
     * @param string $date
     * @param string $extraInfo
     */
    public function __construct($durationUnit = null, $durationValue = null, $date = null, $extraInfo = null)
    {
        $this
            ->setDurationUnit($durationUnit)
            ->setDurationValue($durationValue)
            ->setDate($date)
            ->setExtraInfo($extraInfo);
    }
    /**
     * Get durationUnit value
     * @return string|null
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }
    /**
     * Set durationUnit value
     * @param string $durationUnit
     * @return \PayPal\StructType\BufferStepStruct
     */
    public function setDurationUnit($durationUnit = null)
    {
        // validation for constraint: string
        if (!is_null($durationUnit) && !is_string($durationUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($durationUnit)), __LINE__);
        }
        $this->durationUnit = $durationUnit;
        return $this;
    }
    /**
     * Get durationValue value
     * @return string|null
     */
    public function getDurationValue()
    {
        return $this->durationValue;
    }
    /**
     * Set durationValue value
     * @param string $durationValue
     * @return \PayPal\StructType\BufferStepStruct
     */
    public function setDurationValue($durationValue = null)
    {
        // validation for constraint: string
        if (!is_null($durationValue) && !is_string($durationValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($durationValue)), __LINE__);
        }
        $this->durationValue = $durationValue;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \PayPal\StructType\BufferStepStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get extraInfo value
     * @return string|null
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }
    /**
     * Set extraInfo value
     * @param string $extraInfo
     * @return \PayPal\StructType\BufferStepStruct
     */
    public function setExtraInfo($extraInfo = null)
    {
        // validation for constraint: string
        if (!is_null($extraInfo) && !is_string($extraInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extraInfo)), __LINE__);
        }
        $this->extraInfo = $extraInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BufferStepStruct
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
