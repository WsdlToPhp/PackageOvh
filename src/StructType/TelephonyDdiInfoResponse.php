<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDdiInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDdiInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyDdiInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyDdiInfoResponse
     * @uses TelephonyDdiInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyDdiInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyDdiInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyDdiInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyDdiInfoReturn $return
     * @return \Ovh\StructType\TelephonyDdiInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyDdiInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
