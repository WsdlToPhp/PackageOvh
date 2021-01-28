<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyCallListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyCallListResponse
     * @uses TelephonyCallListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyCallListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyCallListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyCallListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyCallListReturn $return
     * @return \Ovh\StructType\TelephonyCallListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyCallListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
