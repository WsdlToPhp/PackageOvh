<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetbootGetAvailableResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetbootGetAvailableResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfDedicatedNetbootStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedNetbootGetAvailableResponse
     * @uses DedicatedNetbootGetAvailableResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedNetbootStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedNetbootStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedNetbootStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedNetbootStructType $return
     * @return \PayPal\StructType\DedicatedNetbootGetAvailableResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfDedicatedNetbootStructType $return = null)
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
     * @return \PayPal\StructType\DedicatedNetbootGetAvailableResponse
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
