<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareServiceInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareServiceInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySpareServiceInfoStruct
     */
    public $return;
    /**
     * Constructor method for telephonySpareServiceInfoResponse
     * @uses TelephonySpareServiceInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonySpareServiceInfoStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonySpareServiceInfoStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySpareServiceInfoStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySpareServiceInfoStruct $return
     * @return \Ovh\StructType\TelephonySpareServiceInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySpareServiceInfoStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
