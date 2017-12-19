<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxOptionsModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxOptionsModify extends AbstractStructBase
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
     * The fromName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fromName;
    /**
     * The fromEmail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fromEmail;
    /**
     * The faxQuality
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $faxQuality;
    /**
     * The faxTagLine
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $faxTagLine;
    /**
     * The faxMaxCall
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $faxMaxCall;
    /**
     * The receivId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receivId;
    /**
     * The senderId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $senderId;
    /**
     * The redirection1Email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection1Email;
    /**
     * The redirection2Email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection2Email;
    /**
     * The redirection3Email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection3Email;
    /**
     * The redirection4Email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection4Email;
    /**
     * The redirection5Email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection5Email;
    /**
     * Constructor method for telephonyFaxOptionsModify
     * @uses TelephonyFaxOptionsModify::setSession()
     * @uses TelephonyFaxOptionsModify::setNumber()
     * @uses TelephonyFaxOptionsModify::setCountry()
     * @uses TelephonyFaxOptionsModify::setFromName()
     * @uses TelephonyFaxOptionsModify::setFromEmail()
     * @uses TelephonyFaxOptionsModify::setFaxQuality()
     * @uses TelephonyFaxOptionsModify::setFaxTagLine()
     * @uses TelephonyFaxOptionsModify::setFaxMaxCall()
     * @uses TelephonyFaxOptionsModify::setReceivId()
     * @uses TelephonyFaxOptionsModify::setSenderId()
     * @uses TelephonyFaxOptionsModify::setRedirection1Email()
     * @uses TelephonyFaxOptionsModify::setRedirection2Email()
     * @uses TelephonyFaxOptionsModify::setRedirection3Email()
     * @uses TelephonyFaxOptionsModify::setRedirection4Email()
     * @uses TelephonyFaxOptionsModify::setRedirection5Email()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $fromName
     * @param string $fromEmail
     * @param string $faxQuality
     * @param string $faxTagLine
     * @param int $faxMaxCall
     * @param string $receivId
     * @param string $senderId
     * @param string $redirection1Email
     * @param string $redirection2Email
     * @param string $redirection3Email
     * @param string $redirection4Email
     * @param string $redirection5Email
     */
    public function __construct($session = null, $number = null, $country = null, $fromName = null, $fromEmail = null, $faxQuality = null, $faxTagLine = null, $faxMaxCall = null, $receivId = null, $senderId = null, $redirection1Email = null, $redirection2Email = null, $redirection3Email = null, $redirection4Email = null, $redirection5Email = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setFromName($fromName)
            ->setFromEmail($fromEmail)
            ->setFaxQuality($faxQuality)
            ->setFaxTagLine($faxTagLine)
            ->setFaxMaxCall($faxMaxCall)
            ->setReceivId($receivId)
            ->setSenderId($senderId)
            ->setRedirection1Email($redirection1Email)
            ->setRedirection2Email($redirection2Email)
            ->setRedirection3Email($redirection3Email)
            ->setRedirection4Email($redirection4Email)
            ->setRedirection5Email($redirection5Email);
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
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
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
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
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
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
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
     * Get fromName value
     * @return string|null
     */
    public function getFromName()
    {
        return $this->fromName;
    }
    /**
     * Set fromName value
     * @param string $fromName
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setFromName($fromName = null)
    {
        // validation for constraint: string
        if (!is_null($fromName) && !is_string($fromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromName)), __LINE__);
        }
        $this->fromName = $fromName;
        return $this;
    }
    /**
     * Get fromEmail value
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }
    /**
     * Set fromEmail value
     * @param string $fromEmail
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setFromEmail($fromEmail = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmail)), __LINE__);
        }
        $this->fromEmail = $fromEmail;
        return $this;
    }
    /**
     * Get faxQuality value
     * @return string|null
     */
    public function getFaxQuality()
    {
        return $this->faxQuality;
    }
    /**
     * Set faxQuality value
     * @param string $faxQuality
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setFaxQuality($faxQuality = null)
    {
        // validation for constraint: string
        if (!is_null($faxQuality) && !is_string($faxQuality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxQuality)), __LINE__);
        }
        $this->faxQuality = $faxQuality;
        return $this;
    }
    /**
     * Get faxTagLine value
     * @return string|null
     */
    public function getFaxTagLine()
    {
        return $this->faxTagLine;
    }
    /**
     * Set faxTagLine value
     * @param string $faxTagLine
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setFaxTagLine($faxTagLine = null)
    {
        // validation for constraint: string
        if (!is_null($faxTagLine) && !is_string($faxTagLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxTagLine)), __LINE__);
        }
        $this->faxTagLine = $faxTagLine;
        return $this;
    }
    /**
     * Get faxMaxCall value
     * @return int|null
     */
    public function getFaxMaxCall()
    {
        return $this->faxMaxCall;
    }
    /**
     * Set faxMaxCall value
     * @param int $faxMaxCall
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setFaxMaxCall($faxMaxCall = null)
    {
        // validation for constraint: int
        if (!is_null($faxMaxCall) && !is_numeric($faxMaxCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($faxMaxCall)), __LINE__);
        }
        $this->faxMaxCall = $faxMaxCall;
        return $this;
    }
    /**
     * Get receivId value
     * @return string|null
     */
    public function getReceivId()
    {
        return $this->receivId;
    }
    /**
     * Set receivId value
     * @param string $receivId
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setReceivId($receivId = null)
    {
        // validation for constraint: string
        if (!is_null($receivId) && !is_string($receivId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivId)), __LINE__);
        }
        $this->receivId = $receivId;
        return $this;
    }
    /**
     * Get senderId value
     * @return string|null
     */
    public function getSenderId()
    {
        return $this->senderId;
    }
    /**
     * Set senderId value
     * @param string $senderId
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setSenderId($senderId = null)
    {
        // validation for constraint: string
        if (!is_null($senderId) && !is_string($senderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderId)), __LINE__);
        }
        $this->senderId = $senderId;
        return $this;
    }
    /**
     * Get redirection1Email value
     * @return string|null
     */
    public function getRedirection1Email()
    {
        return $this->redirection1Email;
    }
    /**
     * Set redirection1Email value
     * @param string $redirection1Email
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setRedirection1Email($redirection1Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection1Email) && !is_string($redirection1Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection1Email)), __LINE__);
        }
        $this->redirection1Email = $redirection1Email;
        return $this;
    }
    /**
     * Get redirection2Email value
     * @return string|null
     */
    public function getRedirection2Email()
    {
        return $this->redirection2Email;
    }
    /**
     * Set redirection2Email value
     * @param string $redirection2Email
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setRedirection2Email($redirection2Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection2Email) && !is_string($redirection2Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection2Email)), __LINE__);
        }
        $this->redirection2Email = $redirection2Email;
        return $this;
    }
    /**
     * Get redirection3Email value
     * @return string|null
     */
    public function getRedirection3Email()
    {
        return $this->redirection3Email;
    }
    /**
     * Set redirection3Email value
     * @param string $redirection3Email
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setRedirection3Email($redirection3Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection3Email) && !is_string($redirection3Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection3Email)), __LINE__);
        }
        $this->redirection3Email = $redirection3Email;
        return $this;
    }
    /**
     * Get redirection4Email value
     * @return string|null
     */
    public function getRedirection4Email()
    {
        return $this->redirection4Email;
    }
    /**
     * Set redirection4Email value
     * @param string $redirection4Email
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setRedirection4Email($redirection4Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection4Email) && !is_string($redirection4Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection4Email)), __LINE__);
        }
        $this->redirection4Email = $redirection4Email;
        return $this;
    }
    /**
     * Get redirection5Email value
     * @return string|null
     */
    public function getRedirection5Email()
    {
        return $this->redirection5Email;
    }
    /**
     * Set redirection5Email value
     * @param string $redirection5Email
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
     */
    public function setRedirection5Email($redirection5Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection5Email) && !is_string($redirection5Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection5Email)), __LINE__);
        }
        $this->redirection5Email = $redirection5Email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxOptionsModify
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
