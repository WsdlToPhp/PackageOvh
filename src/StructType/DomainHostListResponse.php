<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainHostListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainHostListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $return;
    /**
     * Constructor method for domainHostListResponse
     * @uses DomainHostListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfStringType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfStringType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfStringType $return
     * @return \Ovh\StructType\DomainHostListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfStringType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
