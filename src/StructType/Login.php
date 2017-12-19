<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for login StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Login extends AbstractStructBase
{
    /**
     * The nic
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The multisession
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $multisession;
    /**
     * Constructor method for login
     * @uses Login::setNic()
     * @uses Login::setPassword()
     * @uses Login::setLanguage()
     * @uses Login::setMultisession()
     * @param string $nic
     * @param string $password
     * @param string $language
     * @param bool $multisession
     */
    public function __construct($nic = null, $password = null, $language = null, $multisession = null)
    {
        $this
            ->setNic($nic)
            ->setPassword($password)
            ->setLanguage($language)
            ->setMultisession($multisession);
    }
    /**
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \PayPal\StructType\Login
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
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
     * @return \PayPal\StructType\Login
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
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \PayPal\StructType\Login
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get multisession value
     * @return bool|null
     */
    public function getMultisession()
    {
        return $this->multisession;
    }
    /**
     * Set multisession value
     * @param bool $multisession
     * @return \PayPal\StructType\Login
     */
    public function setMultisession($multisession = null)
    {
        // validation for constraint: boolean
        if (!is_null($multisession) && !is_bool($multisession)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($multisession)), __LINE__);
        }
        $this->multisession = $multisession;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\Login
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
