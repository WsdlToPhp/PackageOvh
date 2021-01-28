<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFreefaxToVoicefaxCheckListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFreefaxToVoicefaxCheckListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType
     */
    public $return;
    /**
     * Constructor method for telephonyFreefaxToVoicefaxCheckListResponse
     * @uses TelephonyFreefaxToVoicefaxCheckListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType $return
     * @return \Ovh\StructType\TelephonyFreefaxToVoicefaxCheckListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyFreefaxToVoicefaxCheckStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
