<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyFaxCallListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyFaxCallListResponse
     * @uses TelephonyFaxCallListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyFaxCallListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyFaxCallListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyFaxCallListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyFaxCallListReturn $return
     * @return \Ovh\StructType\TelephonyFaxCallListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyFaxCallListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
