<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedVirtualMacIpUsedGetListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedVirtualMacIpUsedGetListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedVirtualMacIpUsedGetListResponse
     * @uses DedicatedVirtualMacIpUsedGetListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return
     * @return \Ovh\StructType\DedicatedVirtualMacIpUsedGetListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedIpVirtualMacUsedStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
