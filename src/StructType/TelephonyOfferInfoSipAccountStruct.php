<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOfferInfoSipAccountStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOfferInfoSipAccountStruct extends AbstractStructBase
{
    /**
     * The username
     * @var string
     */
    public $username;
    /**
     * The extension
     * @var string
     */
    public $extension;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The lastLogin
     * @var string
     */
    public $lastLogin;
    /**
     * The localAdress
     * @var string
     */
    public $localAdress;
    /**
     * The publicAdress
     * @var string
     */
    public $publicAdress;
    /**
     * Constructor method for telephonyOfferInfoSipAccountStruct
     * @uses TelephonyOfferInfoSipAccountStruct::setUsername()
     * @uses TelephonyOfferInfoSipAccountStruct::setExtension()
     * @uses TelephonyOfferInfoSipAccountStruct::setDomain()
     * @uses TelephonyOfferInfoSipAccountStruct::setLastLogin()
     * @uses TelephonyOfferInfoSipAccountStruct::setLocalAdress()
     * @uses TelephonyOfferInfoSipAccountStruct::setPublicAdress()
     * @param string $username
     * @param string $extension
     * @param string $domain
     * @param string $lastLogin
     * @param string $localAdress
     * @param string $publicAdress
     */
    public function __construct($username = null, $extension = null, $domain = null, $lastLogin = null, $localAdress = null, $publicAdress = null)
    {
        $this
            ->setUsername($username)
            ->setExtension($extension)
            ->setDomain($domain)
            ->setLastLogin($lastLogin)
            ->setLocalAdress($localAdress)
            ->setPublicAdress($publicAdress);
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Ovh\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        return $this;
    }
    /**
     * Get extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @param string $extension
     * @return \Ovh\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        $this->extension = $extension;
        return $this;
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get lastLogin value
     * @return string|null
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }
    /**
     * Set lastLogin value
     * @param string $lastLogin
     * @return \Ovh\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setLastLogin($lastLogin = null)
    {
        // validation for constraint: string
        if (!is_null($lastLogin) && !is_string($lastLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastLogin, true), gettype($lastLogin)), __LINE__);
        }
        $this->lastLogin = $lastLogin;
        return $this;
    }
    /**
     * Get localAdress value
     * @return string|null
     */
    public function getLocalAdress()
    {
        return $this->localAdress;
    }
    /**
     * Set localAdress value
     * @param string $localAdress
     * @return \Ovh\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setLocalAdress($localAdress = null)
    {
        // validation for constraint: string
        if (!is_null($localAdress) && !is_string($localAdress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localAdress, true), gettype($localAdress)), __LINE__);
        }
        $this->localAdress = $localAdress;
        return $this;
    }
    /**
     * Get publicAdress value
     * @return string|null
     */
    public function getPublicAdress()
    {
        return $this->publicAdress;
    }
    /**
     * Set publicAdress value
     * @param string $publicAdress
     * @return \Ovh\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setPublicAdress($publicAdress = null)
    {
        // validation for constraint: string
        if (!is_null($publicAdress) && !is_string($publicAdress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publicAdress, true), gettype($publicAdress)), __LINE__);
        }
        $this->publicAdress = $publicAdress;
        return $this;
    }
}
