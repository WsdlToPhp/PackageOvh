<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyTonesOptionsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyTonesOptionsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyTonesOptionsListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyTonesOptionsListResponse
     * @uses TelephonyTonesOptionsListResponse::setReturn()
     * @param \PayPal\StructType\TelephonyTonesOptionsListReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyTonesOptionsListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyTonesOptionsListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyTonesOptionsListReturn $return
     * @return \PayPal\StructType\TelephonyTonesOptionsListResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyTonesOptionsListReturn $return = null)
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
     * @return \PayPal\StructType\TelephonyTonesOptionsListResponse
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
