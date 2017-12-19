<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedVirtualMacIpUsedGetListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedVirtualMacIpUsedGetListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedVirtualMacIpUsedGetListResponse
     * @uses DedicatedVirtualMacIpUsedGetListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return
     * @return \PayPal\StructType\DedicatedVirtualMacIpUsedGetListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return = null)
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
     * @return \PayPal\StructType\DedicatedVirtualMacIpUsedGetListResponse
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
