<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetbootInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetbootInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedNetbootStruct
     */
    public $return;
    /**
     * Constructor method for dedicatedNetbootInfoResponse
     * @uses DedicatedNetbootInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedNetbootStruct $return
     */
    public function __construct(\Ovh\StructType\DedicatedNetbootStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedNetbootStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedNetbootStruct $return
     * @return \Ovh\StructType\DedicatedNetbootInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedNetbootStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
