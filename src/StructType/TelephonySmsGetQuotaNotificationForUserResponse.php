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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUserResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
