<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeGetIpResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeGetIpResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedFailoverRipeGetIpResponse
     * @uses DedicatedFailoverRipeGetIpResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return
     * @return \Ovh\StructType\DedicatedFailoverRipeGetIpResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedRipeGetIpStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
