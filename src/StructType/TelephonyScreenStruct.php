<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenStruct extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The numberScreen
     * @var string
     */
    public $numberScreen;
    /**
     * The natureScreen
     * @var string
     */
    public $natureScreen;
    /**
     * Constructor method for telephonyScreenStruct
     * @uses TelephonyScreenStruct::setStatus()
     * @uses TelephonyScreenStruct::setNumberScreen()
     * @uses TelephonyScreenStruct::setNatureScreen()
     * @param string $status
     * @param string $numberScreen
     * @param string $natureScreen
     */
    public function __construct($status = null, $numberScreen = null, $natureScreen = null)
    {
        $this
            ->setStatus($status)
            ->setNumberScreen($numberScreen)
            ->setNatureScreen($natureScreen);
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
     * @return \Ovh\StructType\TelephonyScreenStruct
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
     * Get numberScreen value
     * @return string|null
     */
    public function getNumberScreen()
    {
        return $this->numberScreen;
    }
    /**
     * Set numberScreen value
     * @param string $numberScreen
     * @return \Ovh\StructType\TelephonyScreenStruct
     */
    public function setNumberScreen($numberScreen = null)
    {
        // validation for constraint: string
        if (!is_null($numberScreen) && !is_string($numberScreen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberScreen)), __LINE__);
        }
        $this->numberScreen = $numberScreen;
        return $this;
    }
    /**
     * Get natureScreen value
     * @return string|null
     */
    public function getNatureScreen()
    {
        return $this->natureScreen;
    }
    /**
     * Set natureScreen value
     * @param string $natureScreen
     * @return \Ovh\StructType\TelephonyScreenStruct
     */
    public function setNatureScreen($natureScreen = null)
    {
        // validation for constraint: string
        if (!is_null($natureScreen) && !is_string($natureScreen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($natureScreen)), __LINE__);
        }
        $this->natureScreen = $natureScreen;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyScreenStruct
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
