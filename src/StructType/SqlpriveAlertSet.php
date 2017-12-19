<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveAlertSet StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveAlertSet extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The smsNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsNumber;
    /**
     * The alert
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $alert;
    /**
     * Constructor method for sqlpriveAlertSet
     * @uses SqlpriveAlertSet::setSession()
     * @uses SqlpriveAlertSet::setServer()
     * @uses SqlpriveAlertSet::setEmail()
     * @uses SqlpriveAlertSet::setSmsAccount()
     * @uses SqlpriveAlertSet::setSmsNumber()
     * @uses SqlpriveAlertSet::setAlert()
     * @param string $session
     * @param string $server
     * @param string $email
     * @param string $smsAccount
     * @param string $smsNumber
     * @param \PayPal\ArrayType\MyArrayOfStringType $alert
     */
    public function __construct($session = null, $server = null, $email = null, $smsAccount = null, $smsNumber = null, \PayPal\ArrayType\MyArrayOfStringType $alert = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setEmail($email)
            ->setSmsAccount($smsAccount)
            ->setSmsNumber($smsNumber)
            ->setAlert($alert);
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
     * @return \PayPal\StructType\SqlpriveAlertSet
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
     * Get server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set server value
     * @param string $server
     * @return \PayPal\StructType\SqlpriveAlertSet
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->server = $server;
        return $this;
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
     * @return \PayPal\StructType\SqlpriveAlertSet
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
     * @return \PayPal\StructType\SqlpriveAlertSet
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
     * @return \PayPal\StructType\SqlpriveAlertSet
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
     * @return \PayPal\StructType\SqlpriveAlertSet
     */
    public function setAlert(\PayPal\ArrayType\MyArrayOfStringType $alert = null)
    {
        $this->alert = $alert;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveAlertSet
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