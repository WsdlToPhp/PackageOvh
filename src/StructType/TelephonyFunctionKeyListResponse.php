<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFunctionKeyListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFunctionKeyListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyFunctionKeyStructType
     */
    public $return;
    /**
     * Constructor method for telephonyFunctionKeyListResponse
     * @uses TelephonyFunctionKeyListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFunctionKeyStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyFunctionKeyStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyFunctionKeyStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFunctionKeyStructType $return
     * @return \Ovh\StructType\TelephonyFunctionKeyListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyFunctionKeyStructType $return = null)
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
     * @return \Ovh\StructType\TelephonyFunctionKeyListResponse
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
