<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySecurityDepositCredit StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySecurityDepositCredit extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The billingAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $amount;
    /**
     * Constructor method for telephonySecurityDepositCredit
     * @uses TelephonySecurityDepositCredit::setSession()
     * @uses TelephonySecurityDepositCredit::setBillingAccount()
     * @uses TelephonySecurityDepositCredit::setAmount()
     * @param string $session
     * @param string $billingAccount
     * @param int $amount
     */
    public function __construct($session = null, $billingAccount = null, $amount = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
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
     * @return \Ovh\StructType\TelephonySecurityDepositCredit
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
     * @return \Ovh\StructType\TelephonySecurityDepositCredit
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
     * @return \Ovh\StructType\TelephonySecurityDepositCredit
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !(is_int($amount) || ctype_digit($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
}
