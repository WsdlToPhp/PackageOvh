<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiFtpListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiFtpListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfMultiFtpStructType
     */
    public $return;
    /**
     * Constructor method for multiFtpListResponse
     * @uses MultiFtpListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfMultiFtpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfMultiFtpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfMultiFtpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfMultiFtpStructType $return
     * @return \Ovh\StructType\MultiFtpListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfMultiFtpStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
