<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedReverseListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedReverseListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedReverseStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedReverseListResponse
     * @uses DedicatedReverseListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedReverseStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedReverseStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedReverseStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedReverseStructType $return
     * @return \Ovh\StructType\DedicatedReverseListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedReverseStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
