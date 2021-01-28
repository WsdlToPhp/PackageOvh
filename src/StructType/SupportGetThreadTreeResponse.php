<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetThreadTreeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetThreadTreeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\SupportThreadTreeReturn
     */
    public $return;
    /**
     * Constructor method for supportGetThreadTreeResponse
     * @uses SupportGetThreadTreeResponse::setReturn()
     * @param \Ovh\StructType\SupportThreadTreeReturn $return
     */
    public function __construct(\Ovh\StructType\SupportThreadTreeReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\SupportThreadTreeReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\SupportThreadTreeReturn $return
     * @return \Ovh\StructType\SupportGetThreadTreeResponse
     */
    public function setReturn(\Ovh\StructType\SupportThreadTreeReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
