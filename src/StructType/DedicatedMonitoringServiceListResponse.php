<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringServiceListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringServiceListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedMonitoringServiceListResponse
     * @uses DedicatedMonitoringServiceListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return
     * @return \PayPal\StructType\DedicatedMonitoringServiceListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return = null)
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
     * @return \PayPal\StructType\DedicatedMonitoringServiceListResponse
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
