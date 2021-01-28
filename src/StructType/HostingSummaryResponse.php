<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\HostingSummaryReturn
     */
    public $return;
    /**
     * Constructor method for hostingSummaryResponse
     * @uses HostingSummaryResponse::setReturn()
     * @param \Ovh\StructType\HostingSummaryReturn $return
     */
    public function __construct(\Ovh\StructType\HostingSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\HostingSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\HostingSummaryReturn $return
     * @return \Ovh\StructType\HostingSummaryResponse
     */
    public function setReturn(\Ovh\StructType\HostingSummaryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
