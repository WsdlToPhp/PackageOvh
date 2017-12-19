<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderDedicatedFailoverResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderDedicatedFailoverResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\OrderStruct
     */
    public $return;
    /**
     * Constructor method for orderDedicatedFailoverResponse
     * @uses OrderDedicatedFailoverResponse::setReturn()
     * @param \PayPal\StructType\OrderStruct $return
     */
    public function __construct(\PayPal\StructType\OrderStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\OrderStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\OrderStruct $return
     * @return \PayPal\StructType\OrderDedicatedFailoverResponse
     */
    public function setReturn(\PayPal\StructType\OrderStruct $return = null)
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
     * @return \PayPal\StructType\OrderDedicatedFailoverResponse
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
