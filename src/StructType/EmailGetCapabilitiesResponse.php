<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailGetCapabilitiesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailGetCapabilitiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\EmailGetCapabilitiesReturn
     */
    public $return;
    /**
     * Constructor method for emailGetCapabilitiesResponse
     * @uses EmailGetCapabilitiesResponse::setReturn()
     * @param \Ovh\StructType\EmailGetCapabilitiesReturn $return
     */
    public function __construct(\Ovh\StructType\EmailGetCapabilitiesReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\EmailGetCapabilitiesReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\EmailGetCapabilitiesReturn $return
     * @return \Ovh\StructType\EmailGetCapabilitiesResponse
     */
    public function setReturn(\Ovh\StructType\EmailGetCapabilitiesReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
