<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAllowedDistributionBitFormatStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAllowedDistributionBitFormatStruct extends AbstractStructBase
{
    /**
     * The reference
     * @var string
     */
    public $reference;
    /**
     * The bits
     * @var int
     */
    public $bits;
    /**
     * Constructor method for dedicatedAllowedDistributionBitFormatStruct
     * @uses DedicatedAllowedDistributionBitFormatStruct::setReference()
     * @uses DedicatedAllowedDistributionBitFormatStruct::setBits()
     * @param string $reference
     * @param int $bits
     */
    public function __construct($reference = null, $bits = null)
    {
        $this
            ->setReference($reference)
            ->setBits($bits);
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \PayPal\StructType\DedicatedAllowedDistributionBitFormatStruct
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get bits value
     * @return int|null
     */
    public function getBits()
    {
        return $this->bits;
    }
    /**
     * Set bits value
     * @param int $bits
     * @return \PayPal\StructType\DedicatedAllowedDistributionBitFormatStruct
     */
    public function setBits($bits = null)
    {
        // validation for constraint: int
        if (!is_null($bits) && !is_numeric($bits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bits)), __LINE__);
        }
        $this->bits = $bits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedAllowedDistributionBitFormatStruct
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
