<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMessagesDownload StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMessagesDownload extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The messType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $messType;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $format;
    /**
     * Constructor method for telephonyVoicemailMessagesDownload
     * @uses TelephonyVoicemailMessagesDownload::setSession()
     * @uses TelephonyVoicemailMessagesDownload::setNumber()
     * @uses TelephonyVoicemailMessagesDownload::setCountry()
     * @uses TelephonyVoicemailMessagesDownload::setMessType()
     * @uses TelephonyVoicemailMessagesDownload::setFormat()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $messType
     * @param string $format
     */
    public function __construct($session = null, $number = null, $country = null, $messType = null, $format = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setMessType($messType)
            ->setFormat($format);
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
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownload
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
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownload
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownload
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownload
     */
    public function setMessType($messType = null)
    {
        // validation for constraint: string
        if (!is_null($messType) && !is_string($messType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messType, true), gettype($messType)), __LINE__);
        }
        $this->messType = $messType;
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
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownload
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        return $this;
    }
}
