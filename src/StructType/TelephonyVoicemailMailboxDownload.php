<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMailboxDownload StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMailboxDownload extends AbstractStructBase
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
     * The id
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $format;
    /**
     * The folder
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $folder;
    /**
     * Constructor method for telephonyVoicemailMailboxDownload
     * @uses TelephonyVoicemailMailboxDownload::setSession()
     * @uses TelephonyVoicemailMailboxDownload::setNumber()
     * @uses TelephonyVoicemailMailboxDownload::setCountry()
     * @uses TelephonyVoicemailMailboxDownload::setId()
     * @uses TelephonyVoicemailMailboxDownload::setFormat()
     * @uses TelephonyVoicemailMailboxDownload::setFolder()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $id
     * @param string $format
     * @param string $folder
     */
    public function __construct($session = null, $number = null, $country = null, $id = null, $format = null, $folder = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setId($id)
            ->setFormat($format)
            ->setFolder($folder);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
    /**
     * Get folder value
     * @return string|null
     */
    public function getFolder()
    {
        return $this->folder;
    }
    /**
     * Set folder value
     * @param string $folder
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
     */
    public function setFolder($folder = null)
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folder)), __LINE__);
        }
        $this->folder = $folder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownload
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
