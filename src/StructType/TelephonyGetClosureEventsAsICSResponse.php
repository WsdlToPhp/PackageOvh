<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetClosureEventsAsICSResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsICSResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct
     */
    public $return;
    /**
     * Constructor method for telephonyGetClosureEventsAsICSResponse
     * @uses TelephonyGetClosureEventsAsICSResponse::setReturn()
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsICSResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
