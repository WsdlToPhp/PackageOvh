<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsCreditInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsCreditInfoReturn extends AbstractStructBase
{
    /**
     * The waiting
     * @var int
     */
    public $waiting;
    /**
     * The left
     * @var int
     */
    public $left;
    /**
     * Constructor method for telephonySmsCreditInfoReturn
     * @uses TelephonySmsCreditInfoReturn::setWaiting()
     * @uses TelephonySmsCreditInfoReturn::setLeft()
     * @param int $waiting
     * @param int $left
     */
    public function __construct($waiting = null, $left = null)
    {
        $this
            ->setWaiting($waiting)
            ->setLeft($left);
    }
    /**
     * Get waiting value
     * @return int|null
     */
    public function getWaiting()
    {
        return $this->waiting;
    }
    /**
     * Set waiting value
     * @param int $waiting
     * @return \Ovh\StructType\TelephonySmsCreditInfoReturn
     */
    public function setWaiting($waiting = null)
    {
        // validation for constraint: int
        if (!is_null($waiting) && !is_numeric($waiting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($waiting)), __LINE__);
        }
        $this->waiting = $waiting;
        return $this;
    }
    /**
     * Get left value
     * @return int|null
     */
    public function getLeft()
    {
        return $this->left;
    }
    /**
     * Set left value
     * @param int $left
     * @return \Ovh\StructType\TelephonySmsCreditInfoReturn
     */
    public function setLeft($left = null)
    {
        // validation for constraint: int
        if (!is_null($left) && !is_numeric($left)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($left)), __LINE__);
        }
        $this->left = $left;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsCreditInfoReturn
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
