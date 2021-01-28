<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainHostInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainHostInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DomainHostInfoReturn
     */
    public $return;
    /**
     * Constructor method for domainHostInfoResponse
     * @uses DomainHostInfoResponse::setReturn()
     * @param \Ovh\StructType\DomainHostInfoReturn $return
     */
    public function __construct(\Ovh\StructType\DomainHostInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DomainHostInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DomainHostInfoReturn $return
     * @return \Ovh\StructType\DomainHostInfoResponse
     */
    public function setReturn(\Ovh\StructType\DomainHostInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
