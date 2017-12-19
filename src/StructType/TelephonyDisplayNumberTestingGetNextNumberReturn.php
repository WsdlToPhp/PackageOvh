<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDisplayNumberTestingGetNextNumberReturn
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDisplayNumberTestingGetNextNumberReturn extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * Constructor method for telephonyDisplayNumberTestingGetNextNumberReturn
     * @uses TelephonyDisplayNumberTestingGetNextNumberReturn::setNumber()
     * @uses TelephonyDisplayNumberTestingGetNextNumberReturn::setId()
     * @param string $number
     * @param string $id
     */
    public function __construct($number = null, $id = null)
    {
        $this
            ->setNumber($number)
            ->setId($id);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Ovh\StructType\TelephonyDisplayNumberTestingGetNextNumberReturn
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Ovh\StructType\TelephonyDisplayNumberTestingGetNextNumberReturn
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyDisplayNumberTestingGetNextNumberReturn
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
