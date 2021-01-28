<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryPJCodeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryPJCodeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryPJCodeResponse
     * @uses TelephonyDirectoryPJCodeResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return
     * @return \Ovh\StructType\TelephonyDirectoryPJCodeResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyDirectoryPJHeadingStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
