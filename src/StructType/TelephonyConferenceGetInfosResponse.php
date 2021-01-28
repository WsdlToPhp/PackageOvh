<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceGetInfosResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceGetInfosResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyConferenceGetInfosReturn
     */
    public $return;
    /**
     * Constructor method for telephonyConferenceGetInfosResponse
     * @uses TelephonyConferenceGetInfosResponse::setReturn()
     * @param \Ovh\StructType\TelephonyConferenceGetInfosReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyConferenceGetInfosReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyConferenceGetInfosReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyConferenceGetInfosReturn $return
     * @return \Ovh\StructType\TelephonyConferenceGetInfosResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyConferenceGetInfosReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
