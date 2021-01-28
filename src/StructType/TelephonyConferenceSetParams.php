<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceSetParams StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceSetParams extends AbstractStructBase
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
     * The lang
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lang;
    /**
     * The pin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pin;
    /**
     * The enterMuted
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $enterMuted;
    /**
     * The announceStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $announceStatus;
    /**
     * The recordStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $recordStatus;
    /**
     * The reportStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reportStatus;
    /**
     * The reportMail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reportMail;
    /**
     * Constructor method for telephonyConferenceSetParams
     * @uses TelephonyConferenceSetParams::setSession()
     * @uses TelephonyConferenceSetParams::setNumber()
     * @uses TelephonyConferenceSetParams::setCountry()
     * @uses TelephonyConferenceSetParams::setLang()
     * @uses TelephonyConferenceSetParams::setPin()
     * @uses TelephonyConferenceSetParams::setEnterMuted()
     * @uses TelephonyConferenceSetParams::setAnnounceStatus()
     * @uses TelephonyConferenceSetParams::setRecordStatus()
     * @uses TelephonyConferenceSetParams::setReportStatus()
     * @uses TelephonyConferenceSetParams::setReportMail()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $lang
     * @param string $pin
     * @param bool $enterMuted
     * @param bool $announceStatus
     * @param bool $recordStatus
     * @param string $reportStatus
     * @param string $reportMail
     */
    public function __construct($session = null, $number = null, $country = null, $lang = null, $pin = null, $enterMuted = null, $announceStatus = null, $recordStatus = null, $reportStatus = null, $reportMail = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setLang($lang)
            ->setPin($pin)
            ->setEnterMuted($enterMuted)
            ->setAnnounceStatus($announceStatus)
            ->setRecordStatus($recordStatus)
            ->setReportStatus($reportStatus)
            ->setReportMail($reportMail);
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
     * @return \Ovh\StructType\TelephonyConferenceSetParams
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
     * @return \Ovh\StructType\TelephonyConferenceSetParams
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
     * @return \Ovh\StructType\TelephonyConferenceSetParams
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
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Get pin value
     * @return string|null
     */
    public function getPin()
    {
        return $this->pin;
    }
    /**
     * Set pin value
     * @param string $pin
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setPin($pin = null)
    {
        // validation for constraint: string
        if (!is_null($pin) && !is_string($pin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pin, true), gettype($pin)), __LINE__);
        }
        $this->pin = $pin;
        return $this;
    }
    /**
     * Get enterMuted value
     * @return bool|null
     */
    public function getEnterMuted()
    {
        return $this->enterMuted;
    }
    /**
     * Set enterMuted value
     * @param bool $enterMuted
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setEnterMuted($enterMuted = null)
    {
        // validation for constraint: boolean
        if (!is_null($enterMuted) && !is_bool($enterMuted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enterMuted, true), gettype($enterMuted)), __LINE__);
        }
        $this->enterMuted = $enterMuted;
        return $this;
    }
    /**
     * Get announceStatus value
     * @return bool|null
     */
    public function getAnnounceStatus()
    {
        return $this->announceStatus;
    }
    /**
     * Set announceStatus value
     * @param bool $announceStatus
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setAnnounceStatus($announceStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($announceStatus) && !is_bool($announceStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($announceStatus, true), gettype($announceStatus)), __LINE__);
        }
        $this->announceStatus = $announceStatus;
        return $this;
    }
    /**
     * Get recordStatus value
     * @return bool|null
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
    }
    /**
     * Set recordStatus value
     * @param bool $recordStatus
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setRecordStatus($recordStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($recordStatus) && !is_bool($recordStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recordStatus, true), gettype($recordStatus)), __LINE__);
        }
        $this->recordStatus = $recordStatus;
        return $this;
    }
    /**
     * Get reportStatus value
     * @return string|null
     */
    public function getReportStatus()
    {
        return $this->reportStatus;
    }
    /**
     * Set reportStatus value
     * @param string $reportStatus
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setReportStatus($reportStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reportStatus) && !is_string($reportStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportStatus, true), gettype($reportStatus)), __LINE__);
        }
        $this->reportStatus = $reportStatus;
        return $this;
    }
    /**
     * Get reportMail value
     * @return string|null
     */
    public function getReportMail()
    {
        return $this->reportMail;
    }
    /**
     * Set reportMail value
     * @param string $reportMail
     * @return \Ovh\StructType\TelephonyConferenceSetParams
     */
    public function setReportMail($reportMail = null)
    {
        // validation for constraint: string
        if (!is_null($reportMail) && !is_string($reportMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportMail, true), gettype($reportMail)), __LINE__);
        }
        $this->reportMail = $reportMail;
        return $this;
    }
}
