<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenStatusResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * @var bool
     */
    public $return;
    /**
     * Constructor method for telephonyHuntingGenericScreenStatusResponse
     * @uses TelephonyHuntingGenericScreenStatusResponse::setReturn()
     * @param bool $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return bool|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param bool $return
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStatusResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: boolean
        if (!is_null($return) && !is_bool($return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenStatusResponse
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
