<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceSetAnnounceFile StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceSetAnnounceFile extends AbstractStructBase
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
     * The filename
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filename;
    /**
     * The filedata
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filedata;
    /**
     * The md5sum
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $md5sum;
    /**
     * Constructor method for telephonyConferenceSetAnnounceFile
     * @uses TelephonyConferenceSetAnnounceFile::setSession()
     * @uses TelephonyConferenceSetAnnounceFile::setNumber()
     * @uses TelephonyConferenceSetAnnounceFile::setCountry()
     * @uses TelephonyConferenceSetAnnounceFile::setFilename()
     * @uses TelephonyConferenceSetAnnounceFile::setFiledata()
     * @uses TelephonyConferenceSetAnnounceFile::setMd5sum()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $filename
     * @param string $filedata
     * @param string $md5sum
     */
    public function __construct($session = null, $number = null, $country = null, $filename = null, $filedata = null, $md5sum = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setFilename($filename)
            ->setFiledata($filedata)
            ->setMd5sum($md5sum);
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
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFile
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
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFile
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
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFile
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
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFile
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        return $this;
    }
    /**
     * Get filedata value
     * @return string|null
     */
    public function getFiledata()
    {
        return $this->filedata;
    }
    /**
     * Set filedata value
     * @param string $filedata
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFile
     */
    public function setFiledata($filedata = null)
    {
        // validation for constraint: string
        if (!is_null($filedata) && !is_string($filedata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filedata, true), gettype($filedata)), __LINE__);
        }
        $this->filedata = $filedata;
        return $this;
    }
    /**
     * Get md5sum value
     * @return string|null
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }
    /**
     * Set md5sum value
     * @param string $md5sum
     * @return \Ovh\StructType\TelephonyConferenceSetAnnounceFile
     */
    public function setMd5sum($md5sum = null)
    {
        // validation for constraint: string
        if (!is_null($md5sum) && !is_string($md5sum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($md5sum, true), gettype($md5sum)), __LINE__);
        }
        $this->md5sum = $md5sum;
        return $this;
    }
}
