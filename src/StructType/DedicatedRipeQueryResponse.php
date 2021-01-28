<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeQueryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeQueryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\RipeReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedRipeQueryResponse
     * @uses DedicatedRipeQueryResponse::setReturn()
     * @param \Ovh\StructType\RipeReturn $return
     */
    public function __construct(\Ovh\StructType\RipeReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\RipeReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\RipeReturn $return
     * @return \Ovh\StructType\DedicatedRipeQueryResponse
     */
    public function setReturn(\Ovh\StructType\RipeReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
