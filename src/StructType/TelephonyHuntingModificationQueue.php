<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The billingAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The onHoldTimer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $onHoldTimer;
    /**
     * The queueSize
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonyHuntingModificationQueue
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationQueue
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationQueue
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationQueue
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAccount, true), gettype($billingAccount)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationQueue
     */
    public function setOnHoldTimer($onHoldTimer = null)
    {
        // validation for constraint: int
        if (!is_null($onHoldTimer) && !(is_int($onHoldTimer) || ctype_digit($onHoldTimer))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($onHoldTimer, true), gettype($onHoldTimer)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationQueue
     */
    public function setQueueSize($queueSize = null)
    {
        // validation for constraint: int
        if (!is_null($queueSize) && !(is_int($queueSize) || ctype_digit($queueSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueSize, true), gettype($queueSize)), __LINE__);
        }
        $this->queueSize = $queueSize;
        return $this;
    }
}
