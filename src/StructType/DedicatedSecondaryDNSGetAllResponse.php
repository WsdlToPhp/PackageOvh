<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedSecondaryDNSGetAllResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedSecondaryDNSGetAllResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfAllSecondaryDNSStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedSecondaryDNSGetAllResponse
     * @uses DedicatedSecondaryDNSGetAllResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfAllSecondaryDNSStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfAllSecondaryDNSStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfAllSecondaryDNSStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfAllSecondaryDNSStructType $return
     * @return \Ovh\StructType\DedicatedSecondaryDNSGetAllResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfAllSecondaryDNSStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
