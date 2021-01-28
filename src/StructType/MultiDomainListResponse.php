<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfMultiDomainStructType
     */
    public $return;
    /**
     * Constructor method for multiDomainListResponse
     * @uses MultiDomainListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfMultiDomainStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfMultiDomainStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfMultiDomainStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfMultiDomainStructType $return
     * @return \Ovh\StructType\MultiDomainListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfMultiDomainStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
