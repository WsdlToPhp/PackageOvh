<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPortabilityStatusResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPortabilityStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyPortabilityStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPortabilityStatusResponse
     * @uses TelephonyPortabilityStatusResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyPortabilityStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyPortabilityStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyPortabilityStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyPortabilityStructType $return
     * @return \PayPal\StructType\TelephonyPortabilityStatusResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyPortabilityStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyPortabilityStatusResponse
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
