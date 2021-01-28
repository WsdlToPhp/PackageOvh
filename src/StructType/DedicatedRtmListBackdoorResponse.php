<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRtmListBackdoorResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRtmListBackdoorResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedRtmListBackdoorStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedRtmListBackdoorResponse
     * @uses DedicatedRtmListBackdoorResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedRtmListBackdoorStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedRtmListBackdoorStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedRtmListBackdoorStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedRtmListBackdoorStructType $return
     * @return \Ovh\StructType\DedicatedRtmListBackdoorResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedRtmListBackdoorStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
