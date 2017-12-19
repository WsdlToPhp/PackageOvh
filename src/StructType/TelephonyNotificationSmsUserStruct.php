<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNotificationSmsUserStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNotificationSmsUserStruct extends AbstractStructBase
{
    /**
     * The support
     * @var string
     */
    public $support;
    /**
     * The alertThreshold
     * @var int
     */
    public $alertThreshold;
    /**
     * The alertNumber
     * @var string
     */
    public $alertNumber;
    /**
     * The alertEmail
     * @var string
     */
    public $alertEmail;
    /**
     * Constructor method for telephonyNotificationSmsUserStruct
     * @uses TelephonyNotificationSmsUserStruct::setSupport()
     * @uses TelephonyNotificationSmsUserStruct::setAlertThreshold()
     * @uses TelephonyNotificationSmsUserStruct::setAlertNumber()
     * @uses TelephonyNotificationSmsUserStruct::setAlertEmail()
     * @param string $support
     * @param int $alertThreshold
     * @param string $alertNumber
     * @param string $alertEmail
     */
    public function __construct($support = null, $alertThreshold = null, $alertNumber = null, $alertEmail = null)
    {
        $this
            ->setSupport($support)
            ->setAlertThreshold($alertThreshold)
            ->setAlertNumber($alertNumber)
            ->setAlertEmail($alertEmail);
    }
    /**
     * Get support value
     * @return string|null
     */
    public function getSupport()
    {
        return $this->support;
    }
    /**
     * Set support value
     * @param string $support
     * @return \PayPal\StructType\TelephonyNotificationSmsUserStruct
     */
    public function setSupport($support = null)
    {
        // validation for constraint: string
        if (!is_null($support) && !is_string($support)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($support)), __LINE__);
        }
        $this->support = $support;
        return $this;
    }
    /**
     * Get alertThreshold value
     * @return int|null
     */
    public function getAlertThreshold()
    {
        return $this->alertThreshold;
    }
    /**
     * Set alertThreshold value
     * @param int $alertThreshold
     * @return \PayPal\StructType\TelephonyNotificationSmsUserStruct
     */
    public function setAlertThreshold($alertThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($alertThreshold) && !is_numeric($alertThreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($alertThreshold)), __LINE__);
        }
        $this->alertThreshold = $alertThreshold;
        return $this;
    }
    /**
     * Get alertNumber value
     * @return string|null
     */
    public function getAlertNumber()
    {
        return $this->alertNumber;
    }
    /**
     * Set alertNumber value
     * @param string $alertNumber
     * @return \PayPal\StructType\TelephonyNotificationSmsUserStruct
     */
    public function setAlertNumber($alertNumber = null)
    {
        // validation for constraint: string
        if (!is_null($alertNumber) && !is_string($alertNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertNumber)), __LINE__);
        }
        $this->alertNumber = $alertNumber;
        return $this;
    }
    /**
     * Get alertEmail value
     * @return string|null
     */
    public function getAlertEmail()
    {
        return $this->alertEmail;
    }
    /**
     * Set alertEmail value
     * @param string $alertEmail
     * @return \PayPal\StructType\TelephonyNotificationSmsUserStruct
     */
    public function setAlertEmail($alertEmail = null)
    {
        // validation for constraint: string
        if (!is_null($alertEmail) && !is_string($alertEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertEmail)), __LINE__);
        }
        $this->alertEmail = $alertEmail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyNotificationSmsUserStruct
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
