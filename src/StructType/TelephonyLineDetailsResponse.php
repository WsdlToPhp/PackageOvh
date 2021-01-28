<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineDetailsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineDetailsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyLineStruct
     */
    public $return;
    /**
     * Constructor method for telephonyLineDetailsResponse
     * @uses TelephonyLineDetailsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyLineStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyLineStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyLineStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyLineStruct $return
     * @return \Ovh\StructType\TelephonyLineDetailsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyLineStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
