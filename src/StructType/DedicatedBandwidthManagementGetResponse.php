<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBandwidthManagementGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBandwidthManagementGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedBandwidthManagementReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedBandwidthManagementGetResponse
     * @uses DedicatedBandwidthManagementGetResponse::setReturn()
     * @param \Ovh\StructType\DedicatedBandwidthManagementReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedBandwidthManagementReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedBandwidthManagementReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedBandwidthManagementReturn $return
     * @return \Ovh\StructType\DedicatedBandwidthManagementGetResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedBandwidthManagementReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
