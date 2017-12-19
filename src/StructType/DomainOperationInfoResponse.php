<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainOperationInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainOperationInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\OperationStruct
     */
    public $return;
    /**
     * Constructor method for domainOperationInfoResponse
     * @uses DomainOperationInfoResponse::setReturn()
     * @param \PayPal\StructType\OperationStruct $return
     */
    public function __construct(\PayPal\StructType\OperationStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\OperationStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\OperationStruct $return
     * @return \PayPal\StructType\DomainOperationInfoResponse
     */
    public function setReturn(\PayPal\StructType\OperationStruct $return = null)
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
     * @return \PayPal\StructType\DomainOperationInfoResponse
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
