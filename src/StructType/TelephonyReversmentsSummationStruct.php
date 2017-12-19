<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyReversmentsSummationStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyReversmentsSummationStruct extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The seconds
     * @var string
     */
    public $seconds;
    /**
     * The priceReversed
     * @var string
     */
    public $priceReversed;
    /**
     * The calls
     * @var string
     */
    public $calls;
    /**
     * Constructor method for telephonyReversmentsSummationStruct
     * @uses TelephonyReversmentsSummationStruct::setType()
     * @uses TelephonyReversmentsSummationStruct::setName()
     * @uses TelephonyReversmentsSummationStruct::setSeconds()
     * @uses TelephonyReversmentsSummationStruct::setPriceReversed()
     * @uses TelephonyReversmentsSummationStruct::setCalls()
     * @param string $type
     * @param string $name
     * @param string $seconds
     * @param string $priceReversed
     * @param string $calls
     */
    public function __construct($type = null, $name = null, $seconds = null, $priceReversed = null, $calls = null)
    {
        $this
            ->setType($type)
            ->setName($name)
            ->setSeconds($seconds)
            ->setPriceReversed($priceReversed)
            ->setCalls($calls);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\TelephonyReversmentsSummationStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\TelephonyReversmentsSummationStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get seconds value
     * @return string|null
     */
    public function getSeconds()
    {
        return $this->seconds;
    }
    /**
     * Set seconds value
     * @param string $seconds
     * @return \PayPal\StructType\TelephonyReversmentsSummationStruct
     */
    public function setSeconds($seconds = null)
    {
        // validation for constraint: string
        if (!is_null($seconds) && !is_string($seconds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seconds)), __LINE__);
        }
        $this->seconds = $seconds;
        return $this;
    }
    /**
     * Get priceReversed value
     * @return string|null
     */
    public function getPriceReversed()
    {
        return $this->priceReversed;
    }
    /**
     * Set priceReversed value
     * @param string $priceReversed
     * @return \PayPal\StructType\TelephonyReversmentsSummationStruct
     */
    public function setPriceReversed($priceReversed = null)
    {
        // validation for constraint: string
        if (!is_null($priceReversed) && !is_string($priceReversed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceReversed)), __LINE__);
        }
        $this->priceReversed = $priceReversed;
        return $this;
    }
    /**
     * Get calls value
     * @return string|null
     */
    public function getCalls()
    {
        return $this->calls;
    }
    /**
     * Set calls value
     * @param string $calls
     * @return \PayPal\StructType\TelephonyReversmentsSummationStruct
     */
    public function setCalls($calls = null)
    {
        // validation for constraint: string
        if (!is_null($calls) && !is_string($calls)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calls)), __LINE__);
        }
        $this->calls = $calls;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyReversmentsSummationStruct
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
