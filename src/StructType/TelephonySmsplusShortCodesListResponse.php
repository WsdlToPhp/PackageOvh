<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusShortCodesListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusShortCodesListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsplusChoicesStructType
     */
    public $return;
    /**
     * Constructor method for telephonySmsplusShortCodesListResponse
     * @uses TelephonySmsplusShortCodesListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsplusChoicesStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySmsplusChoicesStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsplusChoicesStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsplusChoicesStructType $return
     * @return \Ovh\StructType\TelephonySmsplusShortCodesListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySmsplusChoicesStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
