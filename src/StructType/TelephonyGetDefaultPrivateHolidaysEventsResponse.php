<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetDefaultPrivateHolidaysEventsResponse
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetDefaultPrivateHolidaysEventsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyGetDefaultPrivateHolidaysEventsResponse
     * @uses TelephonyGetDefaultPrivateHolidaysEventsResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyGetDefaultPrivateHolidaysEventsReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
