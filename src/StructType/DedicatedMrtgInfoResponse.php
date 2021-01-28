<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMrtgInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMrtgInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedMrtgInfoReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedMrtgInfoResponse
     * @uses DedicatedMrtgInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedMrtgInfoReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedMrtgInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedMrtgInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedMrtgInfoReturn $return
     * @return \Ovh\StructType\DedicatedMrtgInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedMrtgInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
