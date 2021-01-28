<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedVirtualMacIpAvailableGetListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedVirtualMacIpAvailableGetListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedIpVirtualMacAvailableReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedVirtualMacIpAvailableGetListResponse
     * @uses DedicatedVirtualMacIpAvailableGetListResponse::setReturn()
     * @param \Ovh\StructType\DedicatedIpVirtualMacAvailableReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedIpVirtualMacAvailableReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedIpVirtualMacAvailableReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedIpVirtualMacAvailableReturn $return
     * @return \Ovh\StructType\DedicatedVirtualMacIpAvailableGetListResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedIpVirtualMacAvailableReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
