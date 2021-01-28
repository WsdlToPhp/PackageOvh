<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberCustomListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberCustomListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonySpecialNumberCustomListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyNumberCustomListResponse
     * @uses TelephonyNumberCustomListResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyNumberCustomListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonySpecialNumberCustomListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
