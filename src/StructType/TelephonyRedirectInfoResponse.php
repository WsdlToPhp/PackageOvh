<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyRedirectInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyRedirectInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyRedirectInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyRedirectInfoResponse
     * @uses TelephonyRedirectInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyRedirectInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyRedirectInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyRedirectInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyRedirectInfoReturn $return
     * @return \Ovh\StructType\TelephonyRedirectInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyRedirectInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
