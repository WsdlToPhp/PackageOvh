<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxOptionsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxOptionsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyFaxOptionsListResponse
     * @uses TelephonyFaxOptionsListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyFaxOptionsListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyFaxOptionsListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyFaxOptionsListReturn $return
     * @return \Ovh\StructType\TelephonyFaxOptionsListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyFaxOptionsListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
