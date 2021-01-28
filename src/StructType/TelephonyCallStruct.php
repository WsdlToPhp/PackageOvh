<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallStruct extends AbstractStructBase
{
    /**
     * The idkey
     * @var string
     */
    public $idkey;
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The duration
     * @var string
     */
    public $duration;
    /**
     * The destination
     * @var string
     */
    public $destination;
    /**
     * The priceWithoutVAT
     * @var float
     */
    public $priceWithoutVAT;
    /**
     * The nature
     * @var string
     */
    public $nature;
    /**
     * The overLimit
     * @var bool
     */
    public $overLimit;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The callingNumber
     * @var string
     */
    public $callingNumber;
    /**
     * The presentation
     * @var bool
     */
    public $presentation;
    /**
     * The designation
     * @var string
     */
    public $designation;
    /**
     * The calledNumber
     * @var string
     */
    public $calledNumber;
    /**
     * Constructor method for telephonyCallStruct
     * @uses TelephonyCallStruct::setIdkey()
     * @uses TelephonyCallStruct::setNumber()
     * @uses TelephonyCallStruct::setDate()
     * @uses TelephonyCallStruct::setDuration()
     * @uses TelephonyCallStruct::setDestination()
     * @uses TelephonyCallStruct::setPriceWithoutVAT()
     * @uses TelephonyCallStruct::setNature()
     * @uses TelephonyCallStruct::setOverLimit()
     * @uses TelephonyCallStruct::setType()
     * @uses TelephonyCallStruct::setCallingNumber()
     * @uses TelephonyCallStruct::setPresentation()
     * @uses TelephonyCallStruct::setDesignation()
     * @uses TelephonyCallStruct::setCalledNumber()
     * @param string $idkey
     * @param string $number
     * @param string $date
     * @param string $duration
     * @param string $destination
     * @param float $priceWithoutVAT
     * @param string $nature
     * @param bool $overLimit
     * @param string $type
     * @param string $callingNumber
     * @param bool $presentation
     * @param string $designation
     * @param string $calledNumber
     */
    public function __construct($idkey = null, $number = null, $date = null, $duration = null, $destination = null, $priceWithoutVAT = null, $nature = null, $overLimit = null, $type = null, $callingNumber = null, $presentation = null, $designation = null, $calledNumber = null)
    {
        $this
            ->setIdkey($idkey)
            ->setNumber($number)
            ->setDate($date)
            ->setDuration($duration)
            ->setDestination($destination)
            ->setPriceWithoutVAT($priceWithoutVAT)
            ->setNature($nature)
            ->setOverLimit($overLimit)
            ->setType($type)
            ->setCallingNumber($callingNumber)
            ->setPresentation($presentation)
            ->setDesignation($designation)
            ->setCalledNumber($calledNumber);
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setIdkey($idkey = null)
    {
        // validation for constraint: string
        if (!is_null($idkey) && !is_string($idkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idkey, true), gettype($idkey)), __LINE__);
        }
        $this->idkey = $idkey;
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
     * @return \Ovh\StructType\TelephonyCallStruct
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param string $duration
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setPriceWithoutVAT($priceWithoutVAT = null)
    {
        // validation for constraint: float
        if (!is_null($priceWithoutVAT) && !(is_float($priceWithoutVAT) || is_numeric($priceWithoutVAT))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceWithoutVAT, true), gettype($priceWithoutVAT)), __LINE__);
        }
        $this->priceWithoutVAT = $priceWithoutVAT;
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setNature($nature = null)
    {
        // validation for constraint: string
        if (!is_null($nature) && !is_string($nature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nature, true), gettype($nature)), __LINE__);
        }
        $this->nature = $nature;
        return $this;
    }
    /**
     * Get overLimit value
     * @return bool|null
     */
    public function getOverLimit()
    {
        return $this->overLimit;
    }
    /**
     * Set overLimit value
     * @param bool $overLimit
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setOverLimit($overLimit = null)
    {
        // validation for constraint: boolean
        if (!is_null($overLimit) && !is_bool($overLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overLimit, true), gettype($overLimit)), __LINE__);
        }
        $this->overLimit = $overLimit;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setCallingNumber($callingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callingNumber) && !is_string($callingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callingNumber, true), gettype($callingNumber)), __LINE__);
        }
        $this->callingNumber = $callingNumber;
        return $this;
    }
    /**
     * Get presentation value
     * @return bool|null
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    /**
     * Set presentation value
     * @param bool $presentation
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setPresentation($presentation = null)
    {
        // validation for constraint: boolean
        if (!is_null($presentation) && !is_bool($presentation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($presentation, true), gettype($presentation)), __LINE__);
        }
        $this->presentation = $presentation;
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setDesignation($designation = null)
    {
        // validation for constraint: string
        if (!is_null($designation) && !is_string($designation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($designation, true), gettype($designation)), __LINE__);
        }
        $this->designation = $designation;
        return $this;
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
     * @return \Ovh\StructType\TelephonyCallStruct
     */
    public function setCalledNumber($calledNumber = null)
    {
        // validation for constraint: string
        if (!is_null($calledNumber) && !is_string($calledNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calledNumber, true), gettype($calledNumber)), __LINE__);
        }
        $this->calledNumber = $calledNumber;
        return $this;
    }
}
