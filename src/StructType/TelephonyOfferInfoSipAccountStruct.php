<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extension)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setLastLogin($lastLogin = null)
    {
        // validation for constraint: string
        if (!is_null($lastLogin) && !is_string($lastLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastLogin)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setLocalAdress($localAdress = null)
    {
        // validation for constraint: string
        if (!is_null($localAdress) && !is_string($localAdress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localAdress)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
     */
    public function setPublicAdress($publicAdress = null)
    {
        // validation for constraint: string
        if (!is_null($publicAdress) && !is_string($publicAdress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publicAdress)), __LINE__);
        }
        $this->publicAdress = $publicAdress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyOfferInfoSipAccountStruct
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
