<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallAllowedDistributionGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallAllowedDistributionGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedAllowedDistributionReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedInstallAllowedDistributionGetResponse
     * @uses DedicatedInstallAllowedDistributionGetResponse::setReturn()
     * @param \Ovh\StructType\DedicatedAllowedDistributionReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedAllowedDistributionReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedAllowedDistributionReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedAllowedDistributionReturn $return
     * @return \Ovh\StructType\DedicatedInstallAllowedDistributionGetResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedAllowedDistributionReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
