<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedCapabilitiesGetAllResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedCapabilitiesGetAllResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfDedicatedCapabilitiesStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedCapabilitiesGetAllResponse
     * @uses DedicatedCapabilitiesGetAllResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedCapabilitiesStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return
     * @return \PayPal\StructType\DedicatedCapabilitiesGetAllResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return = null)
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
     * @return \PayPal\StructType\DedicatedCapabilitiesGetAllResponse
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
