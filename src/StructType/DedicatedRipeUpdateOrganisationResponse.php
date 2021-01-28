<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeUpdateOrganisationResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeUpdateOrganisationResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\RipeUpdateReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedRipeUpdateOrganisationResponse
     * @uses DedicatedRipeUpdateOrganisationResponse::setReturn()
     * @param \Ovh\StructType\RipeUpdateReturn $return
     */
    public function __construct(\Ovh\StructType\RipeUpdateReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\RipeUpdateReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\RipeUpdateReturn $return
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisationResponse
     */
    public function setReturn(\Ovh\StructType\RipeUpdateReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
