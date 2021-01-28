<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedCapabilitiesGetAllResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedCapabilitiesGetAllResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedCapabilitiesStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedCapabilitiesGetAllResponse
     * @uses DedicatedCapabilitiesGetAllResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedCapabilitiesStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return
     * @return \Ovh\StructType\DedicatedCapabilitiesGetAllResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedCapabilitiesStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
