<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryInfoResponse
     * @uses TelephonyDirectoryInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyDirectoryInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyDirectoryInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyDirectoryInfoReturn $return
     * @return \Ovh\StructType\TelephonyDirectoryInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyDirectoryInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
