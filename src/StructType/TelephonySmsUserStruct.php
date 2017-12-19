<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserStruct extends AbstractStructBase
{
    /**
     * The login
     * @var string
     */
    public $login;
    /**
     * The quota
     * @var string
     */
    public $quota;
    /**
     * The quotaStatus
     * @var string
     */
    public $quotaStatus;
    /**
     * The alertThreshold
     * @var string
     */
    public $alertThreshold;
    /**
     * The support
     * @var string
     */
    public $support;
    /**
     * The alertNumber
     * @var string
     */
    public $alertNumber;
    /**
     * Constructor method for telephonySmsUserStruct
     * @uses TelephonySmsUserStruct::setLogin()
     * @uses TelephonySmsUserStruct::setQuota()
     * @uses TelephonySmsUserStruct::setQuotaStatus()
     * @uses TelephonySmsUserStruct::setAlertThreshold()
     * @uses TelephonySmsUserStruct::setSupport()
     * @uses TelephonySmsUserStruct::setAlertNumber()
     * @param string $login
     * @param string $quota
     * @param string $quotaStatus
     * @param string $alertThreshold
     * @param string $support
     * @param string $alertNumber
     */
    public function __construct($login = null, $quota = null, $quotaStatus = null, $alertThreshold = null, $support = null, $alertNumber = null)
    {
        $this
            ->setLogin($login)
            ->setQuota($quota)
            ->setQuotaStatus($quotaStatus)
            ->setAlertThreshold($alertThreshold)
            ->setSupport($support)
            ->setAlertNumber($alertNumber);
    }
    /**
     * Get login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \PayPal\StructType\TelephonySmsUserStruct
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        $this->login = $login;
        return $this;
    }
    /**
     * Get quota value
     * @return string|null
     */
    public function getQuota()
    {
        return $this->quota;
    }
    /**
     * Set quota value
     * @param string $quota
     * @return \PayPal\StructType\TelephonySmsUserStruct
     */
    public function setQuota($quota = null)
    {
        // validation for constraint: string
        if (!is_null($quota) && !is_string($quota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quota)), __LINE__);
        }
        $this->quota = $quota;
        return $this;
    }
    /**
     * Get quotaStatus value
     * @return string|null
     */
    public function getQuotaStatus()
    {
        return $this->quotaStatus;
    }
    /**
     * Set quotaStatus value
     * @param string $quotaStatus
     * @return \PayPal\StructType\TelephonySmsUserStruct
     */
    public function setQuotaStatus($quotaStatus = null)
    {
        // validation for constraint: string
        if (!is_null($quotaStatus) && !is_string($quotaStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quotaStatus)), __LINE__);
        }
        $this->quotaStatus = $quotaStatus;
        return $this;
    }
    /**
     * Get alertThreshold value
     * @return string|null
     */
    public function getAlertThreshold()
    {
        return $this->alertThreshold;
    }
    /**
     * Set alertThreshold value
     * @param string $alertThreshold
     * @return \PayPal\StructType\TelephonySmsUserStruct
     */
    public function setAlertThreshold($alertThreshold = null)
    {
        // validation for constraint: string
        if (!is_null($alertThreshold) && !is_string($alertThreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alertThreshold)), __LINE__);
        }
        $this->alertThreshold = $alertThreshold;
        return $this;
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
     * @return \PayPal\StructType\TelephonySmsUserStruct
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
     * @return \PayPal\StructType\TelephonySmsUserStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsUserStruct
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
