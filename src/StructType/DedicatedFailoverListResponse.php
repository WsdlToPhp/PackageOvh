<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedFailoverStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedFailoverListResponse
     * @uses DedicatedFailoverListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedFailoverStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedFailoverStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedFailoverStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedFailoverStructType $return
     * @return \Ovh\StructType\DedicatedFailoverListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedFailoverStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
