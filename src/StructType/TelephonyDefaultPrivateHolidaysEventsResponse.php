<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDefaultPrivateHolidaysEventsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDefaultPrivateHolidaysEventsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyDefaultPrivateHolidaysEventsResponse
     * @uses TelephonyDefaultPrivateHolidaysEventsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn $return
     * @return \Ovh\StructType\TelephonyDefaultPrivateHolidaysEventsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
