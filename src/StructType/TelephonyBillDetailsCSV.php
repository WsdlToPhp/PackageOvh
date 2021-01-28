<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillDetailsCSV StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillDetailsCSV extends AbstractStructBase
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
     * The date
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $date;
    /**
     * The received
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $received;
    /**
     * Constructor method for telephonyBillDetailsCSV
     * @uses TelephonyBillDetailsCSV::setSession()
     * @uses TelephonyBillDetailsCSV::setBillingAccount()
     * @uses TelephonyBillDetailsCSV::setDate()
     * @uses TelephonyBillDetailsCSV::setReceived()
     * @param string $session
     * @param string $billingAccount
     * @param string $date
     * @param bool $received
     */
    public function __construct($session = null, $billingAccount = null, $date = null, $received = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setDate($date)
            ->setReceived($received);
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
     * @return \Ovh\StructType\TelephonyBillDetailsCSV
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
     * @return \Ovh\StructType\TelephonyBillDetailsCSV
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\TelephonyBillDetailsCSV
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get received value
     * @return bool|null
     */
    public function getReceived()
    {
        return $this->received;
    }
    /**
     * Set received value
     * @param bool $received
     * @return \Ovh\StructType\TelephonyBillDetailsCSV
     */
    public function setReceived($received = null)
    {
        // validation for constraint: boolean
        if (!is_null($received) && !is_bool($received)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($received, true), gettype($received)), __LINE__);
        }
        $this->received = $received;
        return $this;
    }
}
