<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct
     */
    public $return;
    /**
     * Constructor method for dedicatedGetServiceMonitoringItemResponse
     * @uses DedicatedGetServiceMonitoringItemResponse::setReturn()
     * @param \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct $return
     */
    public function __construct(\Ovh\StructType\DedicatedGetServiceMonitoringItemStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedGetServiceMonitoringItemStruct $return
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedGetServiceMonitoringItemStruct $return = null)
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
     * @return \Ovh\StructType\DedicatedGetServiceMonitoringItemResponse
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
