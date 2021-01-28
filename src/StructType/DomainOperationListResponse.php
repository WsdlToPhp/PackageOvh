<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainOperationListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainOperationListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfOperationStructType
     */
    public $return;
    /**
     * Constructor method for domainOperationListResponse
     * @uses DomainOperationListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfOperationStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfOperationStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfOperationStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfOperationStructType $return
     * @return \Ovh\StructType\DomainOperationListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfOperationStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
