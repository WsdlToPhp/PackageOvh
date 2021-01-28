<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOrdersFollowingUpResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOrdersFollowingUpResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfOrderFollowingUpStructType
     */
    public $return;
    /**
     * Constructor method for telephonyOrdersFollowingUpResponse
     * @uses TelephonyOrdersFollowingUpResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfOrderFollowingUpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfOrderFollowingUpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfOrderFollowingUpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfOrderFollowingUpStructType $return
     * @return \Ovh\StructType\TelephonyOrdersFollowingUpResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfOrderFollowingUpStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
