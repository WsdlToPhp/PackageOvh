<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpecialNumberCustomListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpecialNumberCustomListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySpecialNumberCustomListReturn
     */
    public $return;
    /**
     * Constructor method for telephonySpecialNumberCustomListResponse
     * @uses TelephonySpecialNumberCustomListResponse::setReturn()
     * @param \Ovh\StructType\TelephonySpecialNumberCustomListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonySpecialNumberCustomListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonySpecialNumberCustomListReturn $return
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySpecialNumberCustomListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
