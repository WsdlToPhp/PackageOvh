<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceGroupInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceGroupInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\ServiceGroupStruct
     */
    public $return;
    /**
     * Constructor method for serviceGroupInfoResponse
     * @uses ServiceGroupInfoResponse::setReturn()
     * @param \Ovh\StructType\ServiceGroupStruct $return
     */
    public function __construct(\Ovh\StructType\ServiceGroupStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\ServiceGroupStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\ServiceGroupStruct $return
     * @return \Ovh\StructType\ServiceGroupInfoResponse
     */
    public function setReturn(\Ovh\StructType\ServiceGroupStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
