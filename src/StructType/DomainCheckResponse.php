<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainCheckResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainCheckResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDomainCheckStructType
     */
    public $return;
    /**
     * Constructor method for domainCheckResponse
     * @uses DomainCheckResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDomainCheckStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDomainCheckStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDomainCheckStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDomainCheckStructType $return
     * @return \Ovh\StructType\DomainCheckResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDomainCheckStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
