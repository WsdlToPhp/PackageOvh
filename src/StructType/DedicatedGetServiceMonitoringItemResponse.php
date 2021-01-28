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
}
