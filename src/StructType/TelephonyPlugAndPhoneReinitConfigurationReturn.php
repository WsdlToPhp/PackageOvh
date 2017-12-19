<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPlugAndPhoneReinitConfigurationReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPlugAndPhoneReinitConfigurationReturn extends AbstractStructBase
{
    /**
     * The autoConfigurationCode
     * @var string
     */
    public $autoConfigurationCode;
    /**
     * The contactsBookKey
     * @var string
     */
    public $contactsBookKey;
    /**
     * The serverUrl
     * @var string
     */
    public $serverUrl;
    /**
     * Constructor method for telephonyPlugAndPhoneReinitConfigurationReturn
     * @uses TelephonyPlugAndPhoneReinitConfigurationReturn::setAutoConfigurationCode()
     * @uses TelephonyPlugAndPhoneReinitConfigurationReturn::setContactsBookKey()
     * @uses TelephonyPlugAndPhoneReinitConfigurationReturn::setServerUrl()
     * @param string $autoConfigurationCode
     * @param string $contactsBookKey
     * @param string $serverUrl
     */
    public function __construct($autoConfigurationCode = null, $contactsBookKey = null, $serverUrl = null)
    {
        $this
            ->setAutoConfigurationCode($autoConfigurationCode)
            ->setContactsBookKey($contactsBookKey)
            ->setServerUrl($serverUrl);
    }
    /**
     * Get autoConfigurationCode value
     * @return string|null
     */
    public function getAutoConfigurationCode()
    {
        return $this->autoConfigurationCode;
    }
    /**
     * Set autoConfigurationCode value
     * @param string $autoConfigurationCode
     * @return \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn
     */
    public function setAutoConfigurationCode($autoConfigurationCode = null)
    {
        // validation for constraint: string
        if (!is_null($autoConfigurationCode) && !is_string($autoConfigurationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($autoConfigurationCode)), __LINE__);
        }
        $this->autoConfigurationCode = $autoConfigurationCode;
        return $this;
    }
    /**
     * Get contactsBookKey value
     * @return string|null
     */
    public function getContactsBookKey()
    {
        return $this->contactsBookKey;
    }
    /**
     * Set contactsBookKey value
     * @param string $contactsBookKey
     * @return \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn
     */
    public function setContactsBookKey($contactsBookKey = null)
    {
        // validation for constraint: string
        if (!is_null($contactsBookKey) && !is_string($contactsBookKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactsBookKey)), __LINE__);
        }
        $this->contactsBookKey = $contactsBookKey;
        return $this;
    }
    /**
     * Get serverUrl value
     * @return string|null
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }
    /**
     * Set serverUrl value
     * @param string $serverUrl
     * @return \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn
     */
    public function setServerUrl($serverUrl = null)
    {
        // validation for constraint: string
        if (!is_null($serverUrl) && !is_string($serverUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverUrl)), __LINE__);
        }
        $this->serverUrl = $serverUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn
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
