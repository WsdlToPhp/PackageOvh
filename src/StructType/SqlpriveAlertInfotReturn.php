<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveAlertInfotReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveAlertInfotReturn extends AbstractStructBase
{
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The alert
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $alert;
    /**
     * The smsNumber
     * @var string
     */
    public $smsNumber;
    /**
     * The smsAccount
     * @var string
     */
    public $smsAccount;
    /**
     * Constructor method for sqlpriveAlertInfotReturn
     * @uses SqlpriveAlertInfotReturn::setEmail()
     * @uses SqlpriveAlertInfotReturn::setAlert()
     * @uses SqlpriveAlertInfotReturn::setSmsNumber()
     * @uses SqlpriveAlertInfotReturn::setSmsAccount()
     * @param string $email
     * @param \Ovh\ArrayType\MyArrayOfStringType $alert
     * @param string $smsNumber
     * @param string $smsAccount
     */
    public function __construct($email = null, \Ovh\ArrayType\MyArrayOfStringType $alert = null, $smsNumber = null, $smsAccount = null)
    {
        $this
            ->setEmail($email)
            ->setAlert($alert)
            ->setSmsNumber($smsNumber)
            ->setSmsAccount($smsAccount);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\SqlpriveAlertInfotReturn
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get alert value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getAlert()
    {
        return $this->alert;
    }
    /**
     * Set alert value
     * @param \Ovh\ArrayType\MyArrayOfStringType $alert
     * @return \Ovh\StructType\SqlpriveAlertInfotReturn
     */
    public function setAlert(\Ovh\ArrayType\MyArrayOfStringType $alert = null)
    {
        $this->alert = $alert;
        return $this;
    }
    /**
     * Get smsNumber value
     * @return string|null
     */
    public function getSmsNumber()
    {
        return $this->smsNumber;
    }
    /**
     * Set smsNumber value
     * @param string $smsNumber
     * @return \Ovh\StructType\SqlpriveAlertInfotReturn
     */
    public function setSmsNumber($smsNumber = null)
    {
        // validation for constraint: string
        if (!is_null($smsNumber) && !is_string($smsNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsNumber, true), gettype($smsNumber)), __LINE__);
        }
        $this->smsNumber = $smsNumber;
        return $this;
    }
    /**
     * Get smsAccount value
     * @return string|null
     */
    public function getSmsAccount()
    {
        return $this->smsAccount;
    }
    /**
     * Set smsAccount value
     * @param string $smsAccount
     * @return \Ovh\StructType\SqlpriveAlertInfotReturn
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsAccount, true), gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
}
