<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxSend StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxSend extends AbstractStructBase
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
     * The pdfUrl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pdfUrl;
    /**
     * The recipients
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $recipients;
    /**
     * The quality
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $quality;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The referer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referer;
    /**
     * Constructor method for telephonyFaxSend
     * @uses TelephonyFaxSend::setSession()
     * @uses TelephonyFaxSend::setNumber()
     * @uses TelephonyFaxSend::setCountry()
     * @uses TelephonyFaxSend::setPdfUrl()
     * @uses TelephonyFaxSend::setRecipients()
     * @uses TelephonyFaxSend::setQuality()
     * @uses TelephonyFaxSend::setEmail()
     * @uses TelephonyFaxSend::setReferer()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $pdfUrl
     * @param \Ovh\ArrayType\MyArrayOfStringType $recipients
     * @param string $quality
     * @param string $email
     * @param string $referer
     */
    public function __construct($session = null, $number = null, $country = null, $pdfUrl = null, \Ovh\ArrayType\MyArrayOfStringType $recipients = null, $quality = null, $email = null, $referer = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setPdfUrl($pdfUrl)
            ->setRecipients($recipients)
            ->setQuality($quality)
            ->setEmail($email)
            ->setReferer($referer);
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
     * @return \Ovh\StructType\TelephonyFaxSend
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
     * @return \Ovh\StructType\TelephonyFaxSend
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
     * @return \Ovh\StructType\TelephonyFaxSend
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
     * Get pdfUrl value
     * @return string|null
     */
    public function getPdfUrl()
    {
        return $this->pdfUrl;
    }
    /**
     * Set pdfUrl value
     * @param string $pdfUrl
     * @return \Ovh\StructType\TelephonyFaxSend
     */
    public function setPdfUrl($pdfUrl = null)
    {
        // validation for constraint: string
        if (!is_null($pdfUrl) && !is_string($pdfUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pdfUrl)), __LINE__);
        }
        $this->pdfUrl = $pdfUrl;
        return $this;
    }
    /**
     * Get recipients value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getRecipients()
    {
        return $this->recipients;
    }
    /**
     * Set recipients value
     * @param \Ovh\ArrayType\MyArrayOfStringType $recipients
     * @return \Ovh\StructType\TelephonyFaxSend
     */
    public function setRecipients(\Ovh\ArrayType\MyArrayOfStringType $recipients = null)
    {
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * Get quality value
     * @return string|null
     */
    public function getQuality()
    {
        return $this->quality;
    }
    /**
     * Set quality value
     * @param string $quality
     * @return \Ovh\StructType\TelephonyFaxSend
     */
    public function setQuality($quality = null)
    {
        // validation for constraint: string
        if (!is_null($quality) && !is_string($quality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quality)), __LINE__);
        }
        $this->quality = $quality;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\TelephonyFaxSend
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get referer value
     * @return string|null
     */
    public function getReferer()
    {
        return $this->referer;
    }
    /**
     * Set referer value
     * @param string $referer
     * @return \Ovh\StructType\TelephonyFaxSend
     */
    public function setReferer($referer = null)
    {
        // validation for constraint: string
        if (!is_null($referer) && !is_string($referer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referer)), __LINE__);
        }
        $this->referer = $referer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxSend
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
