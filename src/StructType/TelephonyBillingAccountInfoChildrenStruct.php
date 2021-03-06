<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountInfoChildrenStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountInfoChildrenStruct extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The offer
     * @var string
     */
    public $offer;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The expirationDate
     * @var string
     */
    public $expirationDate;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The simultaneousLines
     * @var int
     */
    public $simultaneousLines;
    /**
     * Constructor method for telephonyBillingAccountInfoChildrenStruct
     * @uses TelephonyBillingAccountInfoChildrenStruct::setNumber()
     * @uses TelephonyBillingAccountInfoChildrenStruct::setOffer()
     * @uses TelephonyBillingAccountInfoChildrenStruct::setType()
     * @uses TelephonyBillingAccountInfoChildrenStruct::setExpirationDate()
     * @uses TelephonyBillingAccountInfoChildrenStruct::setDescription()
     * @uses TelephonyBillingAccountInfoChildrenStruct::setSimultaneousLines()
     * @param string $number
     * @param string $offer
     * @param string $type
     * @param string $expirationDate
     * @param string $description
     * @param int $simultaneousLines
     */
    public function __construct($number = null, $offer = null, $type = null, $expirationDate = null, $description = null, $simultaneousLines = null)
    {
        $this
            ->setNumber($number)
            ->setOffer($offer)
            ->setType($type)
            ->setExpirationDate($expirationDate)
            ->setDescription($description)
            ->setSimultaneousLines($simultaneousLines);
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
     * @return \Ovh\StructType\TelephonyBillingAccountInfoChildrenStruct
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
     * Get offer value
     * @return string|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param string $offer
     * @return \Ovh\StructType\TelephonyBillingAccountInfoChildrenStruct
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offer, true), gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
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
     * @return \Ovh\StructType\TelephonyBillingAccountInfoChildrenStruct
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
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \Ovh\StructType\TelephonyBillingAccountInfoChildrenStruct
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\TelephonyBillingAccountInfoChildrenStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get simultaneousLines value
     * @return int|null
     */
    public function getSimultaneousLines()
    {
        return $this->simultaneousLines;
    }
    /**
     * Set simultaneousLines value
     * @param int $simultaneousLines
     * @return \Ovh\StructType\TelephonyBillingAccountInfoChildrenStruct
     */
    public function setSimultaneousLines($simultaneousLines = null)
    {
        // validation for constraint: int
        if (!is_null($simultaneousLines) && !(is_int($simultaneousLines) || ctype_digit($simultaneousLines))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($simultaneousLines, true), gettype($simultaneousLines)), __LINE__);
        }
        $this->simultaneousLines = $simultaneousLines;
        return $this;
    }
}
