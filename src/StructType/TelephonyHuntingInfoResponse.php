<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyHuntingInfoResponse
     * @uses TelephonyHuntingInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyHuntingInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyHuntingInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyHuntingInfoReturn $return
     * @return \Ovh\StructType\TelephonyHuntingInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyHuntingInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
