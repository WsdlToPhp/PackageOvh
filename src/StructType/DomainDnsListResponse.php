<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainDnsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainDnsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfNsStructType
     */
    public $return;
    /**
     * Constructor method for domainDnsListResponse
     * @uses DomainDnsListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfNsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfNsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfNsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfNsStructType $return
     * @return \Ovh\StructType\DomainDnsListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfNsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
