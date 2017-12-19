<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyCallListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyCallListResponse
     * @uses TelephonyCallListResponse::setReturn()
     * @param \PayPal\StructType\TelephonyCallListReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyCallListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyCallListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyCallListReturn $return
     * @return \PayPal\StructType\TelephonyCallListResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyCallListReturn $return = null)
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
     * @return \PayPal\StructType\TelephonyCallListResponse
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
