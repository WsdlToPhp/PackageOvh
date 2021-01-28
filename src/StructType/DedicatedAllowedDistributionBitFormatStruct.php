<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\DedicatedAllowedDistributionBitFormatStruct
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionBitFormatStruct
     */
    public function setBits($bits = null)
    {
        // validation for constraint: int
        if (!is_null($bits) && !(is_int($bits) || ctype_digit($bits))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bits, true), gettype($bits)), __LINE__);
        }
        $this->bits = $bits;
        return $this;
    }
}
