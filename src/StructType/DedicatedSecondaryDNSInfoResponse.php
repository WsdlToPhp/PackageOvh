<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedSecondaryDNSInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedSecondaryDNSInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedSecondaryDNSInfoResponse
     * @uses DedicatedSecondaryDNSInfoResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $return
     * @return \Ovh\StructType\DedicatedSecondaryDNSInfoResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
