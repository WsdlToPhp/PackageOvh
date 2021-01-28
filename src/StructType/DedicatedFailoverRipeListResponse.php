<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedFailoverRipeStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedFailoverRipeListResponse
     * @uses DedicatedFailoverRipeListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedFailoverRipeStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedFailoverRipeStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedFailoverRipeStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedFailoverRipeStructType $return
     * @return \Ovh\StructType\DedicatedFailoverRipeListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedFailoverRipeStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
