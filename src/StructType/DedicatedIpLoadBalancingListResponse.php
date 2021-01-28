<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpLoadBalancingListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpLoadBalancingListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedIpLoadBalancingListResponse
     * @uses DedicatedIpLoadBalancingListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType $return
     * @return \Ovh\StructType\DedicatedIpLoadBalancingListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
