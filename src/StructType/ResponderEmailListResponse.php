<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for responderEmailListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResponderEmailListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfResponderEmailStructType
     */
    public $return;
    /**
     * Constructor method for responderEmailListResponse
     * @uses ResponderEmailListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfResponderEmailStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfResponderEmailStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfResponderEmailStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfResponderEmailStructType $return
     * @return \PayPal\StructType\ResponderEmailListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfResponderEmailStructType $return = null)
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
     * @return \PayPal\StructType\ResponderEmailListResponse
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
