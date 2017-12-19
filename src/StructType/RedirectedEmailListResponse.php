<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for redirectedEmailListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RedirectedEmailListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfEmailRedirectionStructType
     */
    public $return;
    /**
     * Constructor method for redirectedEmailListResponse
     * @uses RedirectedEmailListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfEmailRedirectionStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfEmailRedirectionStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfEmailRedirectionStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfEmailRedirectionStructType $return
     * @return \PayPal\StructType\RedirectedEmailListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfEmailRedirectionStructType $return = null)
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
     * @return \PayPal\StructType\RedirectedEmailListResponse
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
