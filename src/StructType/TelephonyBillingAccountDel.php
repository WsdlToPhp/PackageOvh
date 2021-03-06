<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountDel extends AbstractStructBase
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
     * The cancelDelete
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $cancelDelete;
    /**
     * Constructor method for telephonyBillingAccountDel
     * @uses TelephonyBillingAccountDel::setSession()
     * @uses TelephonyBillingAccountDel::setBillingAccount()
     * @uses TelephonyBillingAccountDel::setCancelDelete()
     * @param string $session
     * @param string $billingAccount
     * @param bool $cancelDelete
     */
    public function __construct($session = null, $billingAccount = null, $cancelDelete = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setCancelDelete($cancelDelete);
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
     * @return \Ovh\StructType\TelephonyBillingAccountDel
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
     * @return \Ovh\StructType\TelephonyBillingAccountDel
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
     * Get cancelDelete value
     * @return bool|null
     */
    public function getCancelDelete()
    {
        return $this->cancelDelete;
    }
    /**
     * Set cancelDelete value
     * @param bool $cancelDelete
     * @return \Ovh\StructType\TelephonyBillingAccountDel
     */
    public function setCancelDelete($cancelDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelDelete) && !is_bool($cancelDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelDelete, true), gettype($cancelDelete)), __LINE__);
        }
        $this->cancelDelete = $cancelDelete;
        return $this;
    }
}
