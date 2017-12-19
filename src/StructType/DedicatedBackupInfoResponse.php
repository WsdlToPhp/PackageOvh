<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\DedicatedBackupListReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupInfoResponse
     * @uses DedicatedBackupInfoResponse::setReturn()
     * @param \PayPal\StructType\DedicatedBackupListReturn $return
     */
    public function __construct(\PayPal\StructType\DedicatedBackupListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\DedicatedBackupListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\DedicatedBackupListReturn $return
     * @return \PayPal\StructType\DedicatedBackupInfoResponse
     */
    public function setReturn(\PayPal\StructType\DedicatedBackupListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedBackupInfoResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
