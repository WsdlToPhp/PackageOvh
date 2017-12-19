<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupFtpInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupFtpInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedBackupFtpInfoReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupFtpInfoResponse
     * @uses DedicatedBackupFtpInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedBackupFtpInfoReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedBackupFtpInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedBackupFtpInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedBackupFtpInfoReturn $return
     * @return \Ovh\StructType\DedicatedBackupFtpInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedBackupFtpInfoReturn $return = null)
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
     * @return \Ovh\StructType\DedicatedBackupFtpInfoResponse
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
