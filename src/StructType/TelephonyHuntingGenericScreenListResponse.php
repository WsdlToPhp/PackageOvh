<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType
     */
    public $return;
    /**
     * Constructor method for telephonyHuntingGenericScreenListResponse
     * @uses TelephonyHuntingGenericScreenListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return = null)
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
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenListResponse
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
