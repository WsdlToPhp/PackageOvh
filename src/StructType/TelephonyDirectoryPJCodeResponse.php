<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryPJCodeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryPJCodeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryPJCodeResponse
     * @uses TelephonyDirectoryPJCodeResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return
     * @return \PayPal\StructType\TelephonyDirectoryPJCodeResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return = null)
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
     * @return \PayPal\StructType\TelephonyDirectoryPJCodeResponse
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
