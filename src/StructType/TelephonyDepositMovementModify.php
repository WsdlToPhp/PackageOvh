<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDepositMovementModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDepositMovementModify extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The billingAccountSource
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccountSource;
    /**
     * The billingAccountDestination
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccountDestination;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $amount;
    /**
     * Constructor method for telephonyDepositMovementModify
     * @uses TelephonyDepositMovementModify::setSession()
     * @uses TelephonyDepositMovementModify::setBillingAccountSource()
     * @uses TelephonyDepositMovementModify::setBillingAccountDestination()
     * @uses TelephonyDepositMovementModify::setAmount()
     * @param string $session
     * @param string $billingAccountSource
     * @param string $billingAccountDestination
     * @param int $amount
     */
    public function __construct($session = null, $billingAccountSource = null, $billingAccountDestination = null, $amount = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccountSource($billingAccountSource)
            ->setBillingAccountDestination($billingAccountDestination)
            ->setAmount($amount);
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
     * @return \Ovh\StructType\TelephonyDepositMovementModify
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
     * Get billingAccountSource value
     * @return string|null
     */
    public function getBillingAccountSource()
    {
        return $this->billingAccountSource;
    }
    /**
     * Set billingAccountSource value
     * @param string $billingAccountSource
     * @return \Ovh\StructType\TelephonyDepositMovementModify
     */
    public function setBillingAccountSource($billingAccountSource = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccountSource) && !is_string($billingAccountSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccountSource)), __LINE__);
        }
        $this->billingAccountSource = $billingAccountSource;
        return $this;
    }
    /**
     * Get billingAccountDestination value
     * @return string|null
     */
    public function getBillingAccountDestination()
    {
        return $this->billingAccountDestination;
    }
    /**
     * Set billingAccountDestination value
     * @param string $billingAccountDestination
     * @return \Ovh\StructType\TelephonyDepositMovementModify
     */
    public function setBillingAccountDestination($billingAccountDestination = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccountDestination) && !is_string($billingAccountDestination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccountDestination)), __LINE__);
        }
        $this->billingAccountDestination = $billingAccountDestination;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Ovh\StructType\TelephonyDepositMovementModify
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyDepositMovementModify
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
