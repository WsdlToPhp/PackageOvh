<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedOperationListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedOperationListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedOperationListResponse
     * @uses DedicatedOperationListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return
     * @return \Ovh\StructType\DedicatedOperationListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedOperationStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
