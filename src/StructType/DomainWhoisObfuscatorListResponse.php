<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainWhoisObfuscatorListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainWhoisObfuscatorListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDomainWhoisObfuscatorStructType
     */
    public $return;
    /**
     * Constructor method for domainWhoisObfuscatorListResponse
     * @uses DomainWhoisObfuscatorListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDomainWhoisObfuscatorStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDomainWhoisObfuscatorStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDomainWhoisObfuscatorStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDomainWhoisObfuscatorStructType $return
     * @return \Ovh\StructType\DomainWhoisObfuscatorListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDomainWhoisObfuscatorStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
