<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingGetCapabilitiesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingGetCapabilitiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\HostingGetCapabilitiesReturn
     */
    public $return;
    /**
     * Constructor method for hostingGetCapabilitiesResponse
     * @uses HostingGetCapabilitiesResponse::setReturn()
     * @param \Ovh\StructType\HostingGetCapabilitiesReturn $return
     */
    public function __construct(\Ovh\StructType\HostingGetCapabilitiesReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\HostingGetCapabilitiesReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\HostingGetCapabilitiesReturn $return
     * @return \Ovh\StructType\HostingGetCapabilitiesResponse
     */
    public function setReturn(\Ovh\StructType\HostingGetCapabilitiesReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
