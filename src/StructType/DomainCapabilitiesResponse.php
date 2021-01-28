<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainCapabilitiesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainCapabilitiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DomainCapabilitiesReturn
     */
    public $return;
    /**
     * Constructor method for domainCapabilitiesResponse
     * @uses DomainCapabilitiesResponse::setReturn()
     * @param \Ovh\StructType\DomainCapabilitiesReturn $return
     */
    public function __construct(\Ovh\StructType\DomainCapabilitiesReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DomainCapabilitiesReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DomainCapabilitiesReturn $return
     * @return \Ovh\StructType\DomainCapabilitiesResponse
     */
    public function setReturn(\Ovh\StructType\DomainCapabilitiesReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
