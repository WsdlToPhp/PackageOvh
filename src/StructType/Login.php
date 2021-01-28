<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The multisession
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\Login
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
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
     * @return \Ovh\StructType\Login
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
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
     * @return \Ovh\StructType\Login
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
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
     * @return \Ovh\StructType\Login
     */
    public function setMultisession($multisession = null)
    {
        // validation for constraint: boolean
        if (!is_null($multisession) && !is_bool($multisession)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multisession, true), gettype($multisession)), __LINE__);
        }
        $this->multisession = $multisession;
        return $this;
    }
}
