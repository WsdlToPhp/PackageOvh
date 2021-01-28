<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedMonitoringStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedMonitoringListResponse
     * @uses DedicatedMonitoringListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedMonitoringStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedMonitoringStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedMonitoringStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedMonitoringStructType $return
     * @return \Ovh\StructType\DedicatedMonitoringListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedMonitoringStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
