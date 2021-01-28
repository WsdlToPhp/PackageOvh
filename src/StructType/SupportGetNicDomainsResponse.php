<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetNicDomainsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetNicDomainsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSupportDomainStructType
     */
    public $return;
    /**
     * Constructor method for supportGetNicDomainsResponse
     * @uses SupportGetNicDomainsResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSupportDomainStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSupportDomainStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSupportDomainStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSupportDomainStructType $return
     * @return \Ovh\StructType\SupportGetNicDomainsResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSupportDomainStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
