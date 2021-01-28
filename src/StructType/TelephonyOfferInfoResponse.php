<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOfferInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOfferInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyOfferInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyOfferInfoResponse
     * @uses TelephonyOfferInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyOfferInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyOfferInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyOfferInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyOfferInfoReturn $return
     * @return \Ovh\StructType\TelephonyOfferInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyOfferInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
