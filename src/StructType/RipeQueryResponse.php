<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeQueryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeQueryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\RipeReturn
     */
    public $return;
    /**
     * Constructor method for ripeQueryResponse
     * @uses RipeQueryResponse::setReturn()
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
     * @return \Ovh\StructType\RipeQueryResponse
     */
    public function setReturn(\Ovh\StructType\RipeReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
