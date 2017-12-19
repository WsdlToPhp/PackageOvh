<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfStringType
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
     * @param \PayPal\ArrayType\MyArrayOfStringType $alert
     * @param string $smsNumber
     * @param string $smsAccount
     */
    public function __construct($email = null, \PayPal\ArrayType\MyArrayOfStringType $alert = null, $smsNumber = null, $smsAccount = null)
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
     * @return \PayPal\StructType\SqlpriveAlertInfotReturn
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get alert value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getAlert()
    {
        return $this->alert;
    }
    /**
     * Set alert value
     * @param \PayPal\ArrayType\MyArrayOfStringType $alert
     * @return \PayPal\StructType\SqlpriveAlertInfotReturn
     */
    public function setAlert(\PayPal\ArrayType\MyArrayOfStringType $alert = null)
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
     * @return \PayPal\StructType\SqlpriveAlertInfotReturn
     */
    public function setSmsNumber($smsNumber = null)
    {
        // validation for constraint: string
        if (!is_null($smsNumber) && !is_string($smsNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smsNumber)), __LINE__);
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
     * @return \PayPal\StructType\SqlpriveAlertInfotReturn
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveAlertInfotReturn
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
