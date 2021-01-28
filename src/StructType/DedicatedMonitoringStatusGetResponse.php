<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringStatusGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringStatusGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedMonitoringStatusReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedMonitoringStatusGetResponse
     * @uses DedicatedMonitoringStatusGetResponse::setReturn()
     * @param \Ovh\StructType\DedicatedMonitoringStatusReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedMonitoringStatusReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedMonitoringStatusReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedMonitoringStatusReturn $return
     * @return \Ovh\StructType\DedicatedMonitoringStatusGetResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedMonitoringStatusReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
