<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedCapabilitiesGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedCapabilitiesGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public $return;
    /**
     * Constructor method for dedicatedCapabilitiesGetResponse
     * @uses DedicatedCapabilitiesGetResponse::setReturn()
     * @param \Ovh\StructType\DedicatedCapabilitiesStruct $return
     */
    public function __construct(\Ovh\StructType\DedicatedCapabilitiesStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedCapabilitiesStruct $return
     * @return \Ovh\StructType\DedicatedCapabilitiesGetResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedCapabilitiesStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
