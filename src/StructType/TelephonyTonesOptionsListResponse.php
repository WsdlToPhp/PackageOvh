<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyTonesOptionsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyTonesOptionsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyTonesOptionsListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyTonesOptionsListResponse
     * @uses TelephonyTonesOptionsListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyTonesOptionsListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyTonesOptionsListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyTonesOptionsListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyTonesOptionsListReturn $return
     * @return \Ovh\StructType\TelephonyTonesOptionsListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyTonesOptionsListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
