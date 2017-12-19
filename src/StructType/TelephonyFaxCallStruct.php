<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallStruct extends AbstractStructBase
{
    /**
     * The calledNumber
     * @var string
     */
    public $calledNumber;
    /**
     * The callingNumber
     * @var string
     */
    public $callingNumber;
    /**
     * The destination
     * @var string
     */
    public $destination;
    /**
     * The jobid
     * @var int
     */
    public $jobid;
    /**
     * The nature
     * @var string
     */
    public $nature;
    /**
     * The countryCode
     * @var int
     */
    public $countryCode;
    /**
     * The designation
     * @var string
     */
    public $designation;
    /**
     * The jobtag
     * @var string
     */
    public $jobtag;
    /**
     * The idkey
     * @var string
     */
    public $idkey;
    /**
     * The priceWithoutVAT
     * @var float
     */
    public $priceWithoutVAT;
    /**
     * The quality
     * @var string
     */
    public $quality;
    /**
     * The callDate
     * @var string
     */
    public $callDate;
    /**
     * The pages
     * @var int
     */
    public $pages;
    /**
     * Constructor method for telephonyFaxCallStruct
     * @uses TelephonyFaxCallStruct::setCalledNumber()
     * @uses TelephonyFaxCallStruct::setCallingNumber()
     * @uses TelephonyFaxCallStruct::setDestination()
     * @uses TelephonyFaxCallStruct::setJobid()
     * @uses TelephonyFaxCallStruct::setNature()
     * @uses TelephonyFaxCallStruct::setCountryCode()
     * @uses TelephonyFaxCallStruct::setDesignation()
     * @uses TelephonyFaxCallStruct::setJobtag()
     * @uses TelephonyFaxCallStruct::setIdkey()
     * @uses TelephonyFaxCallStruct::setPriceWithoutVAT()
     * @uses TelephonyFaxCallStruct::setQuality()
     * @uses TelephonyFaxCallStruct::setCallDate()
     * @uses TelephonyFaxCallStruct::setPages()
     * @param string $calledNumber
     * @param string $callingNumber
     * @param string $destination
     * @param int $jobid
     * @param string $nature
     * @param int $countryCode
     * @param string $designation
     * @param string $jobtag
     * @param string $idkey
     * @param float $priceWithoutVAT
     * @param string $quality
     * @param string $callDate
     * @param int $pages
     */
    public function __construct($calledNumber = null, $callingNumber = null, $destination = null, $jobid = null, $nature = null, $countryCode = null, $designation = null, $jobtag = null, $idkey = null, $priceWithoutVAT = null, $quality = null, $callDate = null, $pages = null)
    {
        $this
            ->setCalledNumber($calledNumber)
            ->setCallingNumber($callingNumber)
            ->setDestination($destination)
            ->setJobid($jobid)
            ->setNature($nature)
            ->setCountryCode($countryCode)
            ->setDesignation($designation)
            ->setJobtag($jobtag)
            ->setIdkey($idkey)
            ->setPriceWithoutVAT($priceWithoutVAT)
            ->setQuality($quality)
            ->setCallDate($callDate)
            ->setPages($pages);
    }
    /**
     * Get calledNumber value
     * @return string|null
     */
    public function getCalledNumber()
    {
        return $this->calledNumber;
    }
    /**
     * Set calledNumber value
     * @param string $calledNumber
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setCalledNumber($calledNumber = null)
    {
        // validation for constraint: string
        if (!is_null($calledNumber) && !is_string($calledNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calledNumber)), __LINE__);
        }
        $this->calledNumber = $calledNumber;
        return $this;
    }
    /**
     * Get callingNumber value
     * @return string|null
     */
    public function getCallingNumber()
    {
        return $this->callingNumber;
    }
    /**
     * Set callingNumber value
     * @param string $callingNumber
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setCallingNumber($callingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callingNumber) && !is_string($callingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callingNumber)), __LINE__);
        }
        $this->callingNumber = $callingNumber;
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
    /**
     * Get jobid value
     * @return int|null
     */
    public function getJobid()
    {
        return $this->jobid;
    }
    /**
     * Set jobid value
     * @param int $jobid
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setJobid($jobid = null)
    {
        // validation for constraint: int
        if (!is_null($jobid) && !is_numeric($jobid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($jobid)), __LINE__);
        }
        $this->jobid = $jobid;
        return $this;
    }
    /**
     * Get nature value
     * @return string|null
     */
    public function getNature()
    {
        return $this->nature;
    }
    /**
     * Set nature value
     * @param string $nature
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setNature($nature = null)
    {
        // validation for constraint: string
        if (!is_null($nature) && !is_string($nature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nature)), __LINE__);
        }
        $this->nature = $nature;
        return $this;
    }
    /**
     * Get countryCode value
     * @return int|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param int $countryCode
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: int
        if (!is_null($countryCode) && !is_numeric($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get designation value
     * @return string|null
     */
    public function getDesignation()
    {
        return $this->designation;
    }
    /**
     * Set designation value
     * @param string $designation
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setDesignation($designation = null)
    {
        // validation for constraint: string
        if (!is_null($designation) && !is_string($designation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($designation)), __LINE__);
        }
        $this->designation = $designation;
        return $this;
    }
    /**
     * Get jobtag value
     * @return string|null
     */
    public function getJobtag()
    {
        return $this->jobtag;
    }
    /**
     * Set jobtag value
     * @param string $jobtag
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setJobtag($jobtag = null)
    {
        // validation for constraint: string
        if (!is_null($jobtag) && !is_string($jobtag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jobtag)), __LINE__);
        }
        $this->jobtag = $jobtag;
        return $this;
    }
    /**
     * Get idkey value
     * @return string|null
     */
    public function getIdkey()
    {
        return $this->idkey;
    }
    /**
     * Set idkey value
     * @param string $idkey
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setIdkey($idkey = null)
    {
        // validation for constraint: string
        if (!is_null($idkey) && !is_string($idkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idkey)), __LINE__);
        }
        $this->idkey = $idkey;
        return $this;
    }
    /**
     * Get priceWithoutVAT value
     * @return float|null
     */
    public function getPriceWithoutVAT()
    {
        return $this->priceWithoutVAT;
    }
    /**
     * Set priceWithoutVAT value
     * @param float $priceWithoutVAT
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setPriceWithoutVAT($priceWithoutVAT = null)
    {
        $this->priceWithoutVAT = $priceWithoutVAT;
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
     * @return \Ovh\StructType\TelephonyFaxCallStruct
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
     * Get callDate value
     * @return string|null
     */
    public function getCallDate()
    {
        return $this->callDate;
    }
    /**
     * Set callDate value
     * @param string $callDate
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setCallDate($callDate = null)
    {
        // validation for constraint: string
        if (!is_null($callDate) && !is_string($callDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callDate)), __LINE__);
        }
        $this->callDate = $callDate;
        return $this;
    }
    /**
     * Get pages value
     * @return int|null
     */
    public function getPages()
    {
        return $this->pages;
    }
    /**
     * Set pages value
     * @param int $pages
     * @return \Ovh\StructType\TelephonyFaxCallStruct
     */
    public function setPages($pages = null)
    {
        // validation for constraint: int
        if (!is_null($pages) && !is_numeric($pages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pages)), __LINE__);
        }
        $this->pages = $pages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxCallStruct
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
