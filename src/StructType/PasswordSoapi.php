<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for passwordSoapi StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PasswordSoapi extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The currentPassword
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentPassword;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * Constructor method for passwordSoapi
     * @uses PasswordSoapi::setSession()
     * @uses PasswordSoapi::setCurrentPassword()
     * @uses PasswordSoapi::setPassword()
     * @param string $session
     * @param string $currentPassword
     * @param string $password
     */
    public function __construct($session = null, $currentPassword = null, $password = null)
    {
        $this
            ->setSession($session)
            ->setCurrentPassword($currentPassword)
            ->setPassword($password);
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
     * @return \PayPal\StructType\PasswordSoapi
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
     * Get currentPassword value
     * @return string|null
     */
    public function getCurrentPassword()
    {
        return $this->currentPassword;
    }
    /**
     * Set currentPassword value
     * @param string $currentPassword
     * @return \PayPal\StructType\PasswordSoapi
     */
    public function setCurrentPassword($currentPassword = null)
    {
        // validation for constraint: string
        if (!is_null($currentPassword) && !is_string($currentPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentPassword)), __LINE__);
        }
        $this->currentPassword = $currentPassword;
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
     * @return \PayPal\StructType\PasswordSoapi
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PasswordSoapi
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
