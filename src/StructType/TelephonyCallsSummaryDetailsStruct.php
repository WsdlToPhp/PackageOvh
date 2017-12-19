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
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
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
        $this->priceWithoutVAT = $priceWithoutVAT;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyCallsSummaryDetailsStruct
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
