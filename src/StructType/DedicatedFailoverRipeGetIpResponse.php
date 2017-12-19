<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeGetIpResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeGetIpResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfDedicatedRipeGetIpStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedFailoverRipeGetIpResponse
     * @uses DedicatedFailoverRipeGetIpResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedRipeGetIpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return
     * @return \PayPal\StructType\DedicatedFailoverRipeGetIpResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return = null)
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
     * @return \PayPal\StructType\DedicatedFailoverRipeGetIpResponse
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
