<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsNotificationOptionsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsNotificationOptionsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyLineLogsNotificationOptionsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyLineLogsNotificationOptionsResponse
     * @uses TelephonyLineLogsNotificationOptionsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyLineLogsNotificationOptionsReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyLineLogsNotificationOptionsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyLineLogsNotificationOptionsReturn $return
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyLineLogsNotificationOptionsReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
