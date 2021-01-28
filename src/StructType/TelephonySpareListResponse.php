<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySpareListReturn
     */
    public $return;
    /**
     * Constructor method for telephonySpareListResponse
     * @uses TelephonySpareListResponse::setReturn()
     * @param \Ovh\StructType\TelephonySpareListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonySpareListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySpareListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySpareListReturn $return
     * @return \Ovh\StructType\TelephonySpareListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySpareListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
