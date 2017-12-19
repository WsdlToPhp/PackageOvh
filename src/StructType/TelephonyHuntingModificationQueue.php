<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingModificationQueue StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingModificationQueue extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The billingAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The onHoldTimer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $onHoldTimer;
    /**
     * The queueSize
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $queueSize;
    /**
     * Constructor method for telephonyHuntingModificationQueue
     * @uses TelephonyHuntingModificationQueue::setSession()
     * @uses TelephonyHuntingModificationQueue::setNumber()
     * @uses TelephonyHuntingModificationQueue::setCountry()
     * @uses TelephonyHuntingModificationQueue::setBillingAccount()
     * @uses TelephonyHuntingModificationQueue::setOnHoldTimer()
     * @uses TelephonyHuntingModificationQueue::setQueueSize()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param int $onHoldTimer
     * @param int $queueSize
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, $onHoldTimer = null, $queueSize = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setBillingAccount($billingAccount)
            ->setOnHoldTimer($onHoldTimer)
            ->setQueueSize($queueSize);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get billingAccount value
     * @return string|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param string $billingAccount
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get onHoldTimer value
     * @return int|null
     */
    public function getOnHoldTimer()
    {
        return $this->onHoldTimer;
    }
    /**
     * Set onHoldTimer value
     * @param int $onHoldTimer
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
     */
    public function setOnHoldTimer($onHoldTimer = null)
    {
        // validation for constraint: int
        if (!is_null($onHoldTimer) && !is_numeric($onHoldTimer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($onHoldTimer)), __LINE__);
        }
        $this->onHoldTimer = $onHoldTimer;
        return $this;
    }
    /**
     * Get queueSize value
     * @return int|null
     */
    public function getQueueSize()
    {
        return $this->queueSize;
    }
    /**
     * Set queueSize value
     * @param int $queueSize
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
     */
    public function setQueueSize($queueSize = null)
    {
        // validation for constraint: int
        if (!is_null($queueSize) && !is_numeric($queueSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($queueSize)), __LINE__);
        }
        $this->queueSize = $queueSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyHuntingModificationQueue
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
