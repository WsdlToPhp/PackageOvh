<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedMonitoringServiceListResponse
     * @uses DedicatedMonitoringServiceListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return
     * @return \Ovh\StructType\DedicatedMonitoringServiceListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedMonitoringServiceStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
