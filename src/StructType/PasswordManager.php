<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for passwordManager StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PasswordManager extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The currentPassword
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $currentPassword;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * Constructor method for passwordManager
     * @uses PasswordManager::setSession()
     * @uses PasswordManager::setCurrentPassword()
     * @uses PasswordManager::setPassword()
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
     * @return \Ovh\StructType\PasswordManager
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
     * @return \Ovh\StructType\PasswordManager
     */
    public function setCurrentPassword($currentPassword = null)
    {
        // validation for constraint: string
        if (!is_null($currentPassword) && !is_string($currentPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentPassword, true), gettype($currentPassword)), __LINE__);
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
     * @return \Ovh\StructType\PasswordManager
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
}
