<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedHardRebootStatusResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedHardRebootStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedHardRebootStatusReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedHardRebootStatusResponse
     * @uses DedicatedHardRebootStatusResponse::setReturn()
     * @param \Ovh\StructType\DedicatedHardRebootStatusReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedHardRebootStatusReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedHardRebootStatusReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedHardRebootStatusReturn $return
     * @return \Ovh\StructType\DedicatedHardRebootStatusResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedHardRebootStatusReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
