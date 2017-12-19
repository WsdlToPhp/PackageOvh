<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyClick2CallDo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyClick2CallDo extends AbstractStructBase
{
    /**
     * The login
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $login;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The calling
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $calling;
    /**
     * The called
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $called;
    /**
     * The billingNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingNumber;
    /**
     * Constructor method for telephonyClick2CallDo
     * @uses TelephonyClick2CallDo::setLogin()
     * @uses TelephonyClick2CallDo::setPassword()
     * @uses TelephonyClick2CallDo::setCalling()
     * @uses TelephonyClick2CallDo::setCalled()
     * @uses TelephonyClick2CallDo::setBillingNumber()
     * @param string $login
     * @param string $password
     * @param string $calling
     * @param string $called
     * @param string $billingNumber
     */
    public function __construct($login = null, $password = null, $calling = null, $called = null, $billingNumber = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setCalling($calling)
            ->setCalled($called)
            ->setBillingNumber($billingNumber);
    }
    /**
     * Get login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \Ovh\StructType\TelephonyClick2CallDo
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        $this->login = $login;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Ovh\StructType\TelephonyClick2CallDo
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get calling value
     * @return string|null
     */
    public function getCalling()
    {
        return $this->calling;
    }
    /**
     * Set calling value
     * @param string $calling
     * @return \Ovh\StructType\TelephonyClick2CallDo
     */
    public function setCalling($calling = null)
    {
        // validation for constraint: string
        if (!is_null($calling) && !is_string($calling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calling)), __LINE__);
        }
        $this->calling = $calling;
        return $this;
    }
    /**
     * Get called value
     * @return string|null
     */
    public function getCalled()
    {
        return $this->called;
    }
    /**
     * Set called value
     * @param string $called
     * @return \Ovh\StructType\TelephonyClick2CallDo
     */
    public function setCalled($called = null)
    {
        // validation for constraint: string
        if (!is_null($called) && !is_string($called)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($called)), __LINE__);
        }
        $this->called = $called;
        return $this;
    }
    /**
     * Get billingNumber value
     * @return string|null
     */
    public function getBillingNumber()
    {
        return $this->billingNumber;
    }
    /**
     * Set billingNumber value
     * @param string $billingNumber
     * @return \Ovh\StructType\TelephonyClick2CallDo
     */
    public function setBillingNumber($billingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billingNumber) && !is_string($billingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingNumber)), __LINE__);
        }
        $this->billingNumber = $billingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyClick2CallDo
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
