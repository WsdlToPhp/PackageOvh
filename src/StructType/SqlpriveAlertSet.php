<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The smsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The smsNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsNumber;
    /**
     * The alert
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $alert
     */
    public function __construct($session = null, $server = null, $email = null, $smsAccount = null, $smsNumber = null, \Ovh\ArrayType\MyArrayOfStringType $alert = null)
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
     * @return \Ovh\StructType\SqlpriveAlertSet
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
     * @return \Ovh\StructType\SqlpriveAlertSet
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($server, true), gettype($server)), __LINE__);
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
     * @return \Ovh\StructType\SqlpriveAlertSet
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
     * @return \Ovh\StructType\SqlpriveAlertSet
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
     * @return \Ovh\StructType\SqlpriveAlertSet
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
     * @return \Ovh\StructType\SqlpriveAlertSet
     */
    public function setAlert(\Ovh\ArrayType\MyArrayOfStringType $alert = null)
    {
        $this->alert = $alert;
        return $this;
    }
}
