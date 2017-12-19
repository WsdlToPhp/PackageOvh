<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyDirectoryInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryInfoResponse
     * @uses TelephonyDirectoryInfoResponse::setReturn()
     * @param \PayPal\StructType\TelephonyDirectoryInfoReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyDirectoryInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyDirectoryInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyDirectoryInfoReturn $return
     * @return \PayPal\StructType\TelephonyDirectoryInfoResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyDirectoryInfoReturn $return = null)
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
     * @return \PayPal\StructType\TelephonyDirectoryInfoResponse
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
