<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoGetSiretResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoGetSiretResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryInfoGetSiretResponse
     * @uses TelephonyDirectoryInfoGetSiretResponse::setReturn()
     * @param \Ovh\StructType\TelephonyDirectoryInfoGetSiretReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyDirectoryInfoGetSiretReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyDirectoryInfoGetSiretReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyDirectoryInfoGetSiretReturn $return
     * @return \Ovh\StructType\TelephonyDirectoryInfoGetSiretResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyDirectoryInfoGetSiretReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
