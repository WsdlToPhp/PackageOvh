<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfTelephonyPortabilityStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPortabilityStatusResponse
     * @uses TelephonyPortabilityStatusResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPortabilityStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyPortabilityStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyPortabilityStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyPortabilityStructType $return
     * @return \Ovh\StructType\TelephonyPortabilityStatusResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyPortabilityStructType $return = null)
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
     * @return \Ovh\StructType\TelephonyPortabilityStatusResponse
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
