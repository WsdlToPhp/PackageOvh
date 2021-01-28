<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetStateResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetStateResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\AutomatedMailGetStateReturn
     */
    public $return;
    /**
     * Constructor method for automatedMailGetStateResponse
     * @uses AutomatedMailGetStateResponse::setReturn()
     * @param \Ovh\StructType\AutomatedMailGetStateReturn $return
     */
    public function __construct(\Ovh\StructType\AutomatedMailGetStateReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\AutomatedMailGetStateReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\AutomatedMailGetStateReturn $return
     * @return \Ovh\StructType\AutomatedMailGetStateResponse
     */
    public function setReturn(\Ovh\StructType\AutomatedMailGetStateReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
