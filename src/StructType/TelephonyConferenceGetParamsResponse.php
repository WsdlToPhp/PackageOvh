<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceGetParamsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceGetParamsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyConferenceGetParamsResponse
     * @uses TelephonyConferenceGetParamsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyConferenceParamsReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyConferenceParamsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyConferenceParamsReturn $return
     * @return \Ovh\StructType\TelephonyConferenceGetParamsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyConferenceParamsReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
