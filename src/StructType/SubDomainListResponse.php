<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for subDomainListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SubDomainListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSubDomainStructType
     */
    public $return;
    /**
     * Constructor method for subDomainListResponse
     * @uses SubDomainListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSubDomainStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSubDomainStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSubDomainStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSubDomainStructType $return
     * @return \Ovh\StructType\SubDomainListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSubDomainStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
