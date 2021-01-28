<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallsSummaryDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallsSummaryDetailsStruct extends AbstractStructBase
{
    /**
     * The count
     * @var int
     */
    public $count;
    /**
     * The duration
     * @var string
     */
    public $duration;
    /**
     * The priceWithoutVAT
     * @var float
     */
    public $priceWithoutVAT;
    /**
     * Constructor method for telephonyCallsSummaryDetailsStruct
     * @uses TelephonyCallsSummaryDetailsStruct::setCount()
     * @uses TelephonyCallsSummaryDetailsStruct::setDuration()
     * @uses TelephonyCallsSummaryDetailsStruct::setPriceWithoutVAT()
     * @param int $count
     * @param string $duration
     * @param float $priceWithoutVAT
     */
    public function __construct($count = null, $duration = null, $priceWithoutVAT = null)
    {
        $this
            ->setCount($count)
            ->setDuration($duration)
            ->setPriceWithoutVAT($priceWithoutVAT);
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Ovh\StructType\TelephonyCallsSummaryDetailsStruct
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
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
     * @return \Ovh\StructType\TelephonyCallsSummaryDetailsStruct
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
     * @return \Ovh\StructType\TelephonyCallsSummaryDetailsStruct
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
}
