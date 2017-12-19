<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMessagesRemoteUpload StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMessagesRemoteUpload extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The messType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $messType;
    /**
     * The filename
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filename;
    /**
     * The url
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $url;
    /**
     * Constructor method for telephonyVoicemailMessagesRemoteUpload
     * @uses TelephonyVoicemailMessagesRemoteUpload::setSession()
     * @uses TelephonyVoicemailMessagesRemoteUpload::setNumber()
     * @uses TelephonyVoicemailMessagesRemoteUpload::setCountry()
     * @uses TelephonyVoicemailMessagesRemoteUpload::setMessType()
     * @uses TelephonyVoicemailMessagesRemoteUpload::setFilename()
     * @uses TelephonyVoicemailMessagesRemoteUpload::setUrl()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $messType
     * @param string $filename
     * @param string $url
     */
    public function __construct($session = null, $number = null, $country = null, $messType = null, $filename = null, $url = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setMessType($messType)
            ->setFilename($filename)
            ->setUrl($url);
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
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
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
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get messType value
     * @return string|null
     */
    public function getMessType()
    {
        return $this->messType;
    }
    /**
     * Set messType value
     * @param string $messType
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
     */
    public function setMessType($messType = null)
    {
        // validation for constraint: string
        if (!is_null($messType) && !is_string($messType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messType)), __LINE__);
        }
        $this->messType = $messType;
        return $this;
    }
    /**
     * Get filename value
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyVoicemailMessagesRemoteUpload
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
