<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyToneStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyToneStatusReturn extends AbstractStructBase
{
    /**
     * The ringback
     * @var bool
     */
    public $ringback;
    /**
     * The onhold
     * @var bool
     */
    public $onhold;
    /**
     * The onclosure
     * @var bool
     */
    public $onclosure;
    /**
     * The callwaiting
     * @var bool
     */
    public $callwaiting;
    /**
     * Constructor method for telephonyToneStatusReturn
     * @uses TelephonyToneStatusReturn::setRingback()
     * @uses TelephonyToneStatusReturn::setOnhold()
     * @uses TelephonyToneStatusReturn::setOnclosure()
     * @uses TelephonyToneStatusReturn::setCallwaiting()
     * @param bool $ringback
     * @param bool $onhold
     * @param bool $onclosure
     * @param bool $callwaiting
     */
    public function __construct($ringback = null, $onhold = null, $onclosure = null, $callwaiting = null)
    {
        $this
            ->setRingback($ringback)
            ->setOnhold($onhold)
            ->setOnclosure($onclosure)
            ->setCallwaiting($callwaiting);
    }
    /**
     * Get ringback value
     * @return bool|null
     */
    public function getRingback()
    {
        return $this->ringback;
    }
    /**
     * Set ringback value
     * @param bool $ringback
     * @return \PayPal\StructType\TelephonyToneStatusReturn
     */
    public function setRingback($ringback = null)
    {
        // validation for constraint: boolean
        if (!is_null($ringback) && !is_bool($ringback)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ringback)), __LINE__);
        }
        $this->ringback = $ringback;
        return $this;
    }
    /**
     * Get onhold value
     * @return bool|null
     */
    public function getOnhold()
    {
        return $this->onhold;
    }
    /**
     * Set onhold value
     * @param bool $onhold
     * @return \PayPal\StructType\TelephonyToneStatusReturn
     */
    public function setOnhold($onhold = null)
    {
        // validation for constraint: boolean
        if (!is_null($onhold) && !is_bool($onhold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($onhold)), __LINE__);
        }
        $this->onhold = $onhold;
        return $this;
    }
    /**
     * Get onclosure value
     * @return bool|null
     */
    public function getOnclosure()
    {
        return $this->onclosure;
    }
    /**
     * Set onclosure value
     * @param bool $onclosure
     * @return \PayPal\StructType\TelephonyToneStatusReturn
     */
    public function setOnclosure($onclosure = null)
    {
        // validation for constraint: boolean
        if (!is_null($onclosure) && !is_bool($onclosure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($onclosure)), __LINE__);
        }
        $this->onclosure = $onclosure;
        return $this;
    }
    /**
     * Get callwaiting value
     * @return bool|null
     */
    public function getCallwaiting()
    {
        return $this->callwaiting;
    }
    /**
     * Set callwaiting value
     * @param bool $callwaiting
     * @return \PayPal\StructType\TelephonyToneStatusReturn
     */
    public function setCallwaiting($callwaiting = null)
    {
        // validation for constraint: boolean
        if (!is_null($callwaiting) && !is_bool($callwaiting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($callwaiting)), __LINE__);
        }
        $this->callwaiting = $callwaiting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyToneStatusReturn
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
