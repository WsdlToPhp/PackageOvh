<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyLineListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyLineListResponse
     * @uses TelephonyLineListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyLineListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyLineListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyLineListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyLineListReturn $return
     * @return \Ovh\StructType\TelephonyLineListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyLineListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
