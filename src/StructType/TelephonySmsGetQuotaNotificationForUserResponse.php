<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsGetQuotaNotificationForUserResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsGetQuotaNotificationForUserResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyNotificationSmsUserStruct
     */
    public $return;
    /**
     * Constructor method for telephonySmsGetQuotaNotificationForUserResponse
     * @uses TelephonySmsGetQuotaNotificationForUserResponse::setReturn()
     * @param \Ovh\StructType\TelephonyNotificationSmsUserStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyNotificationSmsUserStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyNotificationSmsUserStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyNotificationSmsUserStruct $return
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUserResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyNotificationSmsUserStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
