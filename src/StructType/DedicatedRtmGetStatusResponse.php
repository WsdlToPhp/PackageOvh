<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRtmGetStatusResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRtmGetStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedRtmStatusReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedRtmGetStatusResponse
     * @uses DedicatedRtmGetStatusResponse::setReturn()
     * @param \Ovh\StructType\DedicatedRtmStatusReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedRtmStatusReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedRtmStatusReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedRtmStatusReturn $return
     * @return \Ovh\StructType\DedicatedRtmGetStatusResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedRtmStatusReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
