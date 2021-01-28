<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceDetailsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceDetailsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public $return;
    /**
     * Constructor method for telephonySmsplusServiceDetailsResponse
     * @uses TelephonySmsplusServiceDetailsResponse::setReturn()
     * @param \Ovh\StructType\TelephonySmsplusDetailsStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonySmsplusDetailsStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySmsplusDetailsStruct $return
     * @return \Ovh\StructType\TelephonySmsplusServiceDetailsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySmsplusDetailsStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
