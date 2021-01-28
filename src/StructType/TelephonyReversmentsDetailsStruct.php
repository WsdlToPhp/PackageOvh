<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyReversmentsDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyReversmentsDetailsStruct extends AbstractStructBase
{
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The connectionDuration
     * @var string
     */
    public $connectionDuration;
    /**
     * The callingNumber
     * @var string
     */
    public $callingNumber;
    /**
     * The priceReversed
     * @var string
     */
    public $priceReversed;
    /**
     * The operatorCode
     * @var string
     */
    public $operatorCode;
    /**
     * Constructor method for telephonyReversmentsDetailsStruct
     * @uses TelephonyReversmentsDetailsStruct::setDate()
     * @uses TelephonyReversmentsDetailsStruct::setConnectionDuration()
     * @uses TelephonyReversmentsDetailsStruct::setCallingNumber()
     * @uses TelephonyReversmentsDetailsStruct::setPriceReversed()
     * @uses TelephonyReversmentsDetailsStruct::setOperatorCode()
     * @param string $date
     * @param string $connectionDuration
     * @param string $callingNumber
     * @param string $priceReversed
     * @param string $operatorCode
     */
    public function __construct($date = null, $connectionDuration = null, $callingNumber = null, $priceReversed = null, $operatorCode = null)
    {
        $this
            ->setDate($date)
            ->setConnectionDuration($connectionDuration)
            ->setCallingNumber($callingNumber)
            ->setPriceReversed($priceReversed)
            ->setOperatorCode($operatorCode);
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
     * @return \Ovh\StructType\TelephonyReversmentsDetailsStruct
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
     * Get connectionDuration value
     * @return string|null
     */
    public function getConnectionDuration()
    {
        return $this->connectionDuration;
    }
    /**
     * Set connectionDuration value
     * @param string $connectionDuration
     * @return \Ovh\StructType\TelephonyReversmentsDetailsStruct
     */
    public function setConnectionDuration($connectionDuration = null)
    {
        // validation for constraint: string
        if (!is_null($connectionDuration) && !is_string($connectionDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionDuration, true), gettype($connectionDuration)), __LINE__);
        }
        $this->connectionDuration = $connectionDuration;
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
     * @return \Ovh\StructType\TelephonyReversmentsDetailsStruct
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
     * Get priceReversed value
     * @return string|null
     */
    public function getPriceReversed()
    {
        return $this->priceReversed;
    }
    /**
     * Set priceReversed value
     * @param string $priceReversed
     * @return \Ovh\StructType\TelephonyReversmentsDetailsStruct
     */
    public function setPriceReversed($priceReversed = null)
    {
        // validation for constraint: string
        if (!is_null($priceReversed) && !is_string($priceReversed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceReversed, true), gettype($priceReversed)), __LINE__);
        }
        $this->priceReversed = $priceReversed;
        return $this;
    }
    /**
     * Get operatorCode value
     * @return string|null
     */
    public function getOperatorCode()
    {
        return $this->operatorCode;
    }
    /**
     * Set operatorCode value
     * @param string $operatorCode
     * @return \Ovh\StructType\TelephonyReversmentsDetailsStruct
     */
    public function setOperatorCode($operatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($operatorCode) && !is_string($operatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatorCode, true), gettype($operatorCode)), __LINE__);
        }
        $this->operatorCode = $operatorCode;
        return $this;
    }
}
