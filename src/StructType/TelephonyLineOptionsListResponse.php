<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineOptionsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineOptionsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyLineOptionsListResponse
     * @uses TelephonyLineOptionsListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyLineOptionsListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyLineOptionsListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyLineOptionsListReturn $return
     * @return \Ovh\StructType\TelephonyLineOptionsListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyLineOptionsListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
