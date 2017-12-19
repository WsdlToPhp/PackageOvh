<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedOperationListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedOperationListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedOperationListResponse
     * @uses DedicatedOperationListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return
     * @return \Ovh\StructType\DedicatedOperationListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return = null)
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
     * @return \Ovh\StructType\DedicatedOperationListResponse
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
