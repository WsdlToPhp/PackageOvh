<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedGetServiceMonitoringItemResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedGetServiceMonitoringItemResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\DedicatedGetServiceMonitoringItemStruct
     */
    public $return;
    /**
     * Constructor method for dedicatedGetServiceMonitoringItemResponse
     * @uses DedicatedGetServiceMonitoringItemResponse::setReturn()
     * @param \PayPal\StructType\DedicatedGetServiceMonitoringItemStruct $return
     */
    public function __construct(\PayPal\StructType\DedicatedGetServiceMonitoringItemStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\DedicatedGetServiceMonitoringItemStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\DedicatedGetServiceMonitoringItemStruct $return
     * @return \PayPal\StructType\DedicatedGetServiceMonitoringItemResponse
     */
    public function setReturn(\PayPal\StructType\DedicatedGetServiceMonitoringItemStruct $return = null)
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
     * @return \PayPal\StructType\DedicatedGetServiceMonitoringItemResponse
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
