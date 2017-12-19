<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySecurityDepositInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySecurityDepositInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var float
     */
    public $return;
    /**
     * Constructor method for telephonySecurityDepositInfoResponse
     * @uses TelephonySecurityDepositInfoResponse::setReturn()
     * @param float $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return float|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param float $return
     * @return \Ovh\StructType\TelephonySecurityDepositInfoResponse
     */
    public function setReturn($return = null)
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
     * @return \Ovh\StructType\TelephonySecurityDepositInfoResponse
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
