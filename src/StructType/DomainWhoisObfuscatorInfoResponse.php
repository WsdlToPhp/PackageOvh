<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainWhoisObfuscatorInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainWhoisObfuscatorInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DomainWhoisObfuscatorStruct
     */
    public $return;
    /**
     * Constructor method for domainWhoisObfuscatorInfoResponse
     * @uses DomainWhoisObfuscatorInfoResponse::setReturn()
     * @param \Ovh\StructType\DomainWhoisObfuscatorStruct $return
     */
    public function __construct(\Ovh\StructType\DomainWhoisObfuscatorStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DomainWhoisObfuscatorStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DomainWhoisObfuscatorStruct $return
     * @return \Ovh\StructType\DomainWhoisObfuscatorInfoResponse
     */
    public function setReturn(\Ovh\StructType\DomainWhoisObfuscatorStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
