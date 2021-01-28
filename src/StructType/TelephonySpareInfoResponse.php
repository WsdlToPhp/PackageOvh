<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySpareInfoStruct
     */
    public $return;
    /**
     * Constructor method for telephonySpareInfoResponse
     * @uses TelephonySpareInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonySpareInfoStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonySpareInfoStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySpareInfoStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySpareInfoStruct $return
     * @return \Ovh\StructType\TelephonySpareInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySpareInfoStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
