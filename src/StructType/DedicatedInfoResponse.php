<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedInfoReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedInfoResponse
     * @uses DedicatedInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedInfoReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedInfoReturn $return
     * @return \Ovh\StructType\DedicatedInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
