<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallsSummaryDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallsSummaryDetailsStruct extends AbstractStructBase
{
    /**
     * The faxNumber
     * @var int
     */
    public $faxNumber;
    /**
     * The pages
     * @var int
     */
    public $pages;
    /**
     * The priceWithoutVAT
     * @var float
     */
    public $priceWithoutVAT;
    /**
     * Constructor method for telephonyFaxCallsSummaryDetailsStruct
     * @uses TelephonyFaxCallsSummaryDetailsStruct::setFaxNumber()
     * @uses TelephonyFaxCallsSummaryDetailsStruct::setPages()
     * @uses TelephonyFaxCallsSummaryDetailsStruct::setPriceWithoutVAT()
     * @param int $faxNumber
     * @param int $pages
     * @param float $priceWithoutVAT
     */
    public function __construct($faxNumber = null, $pages = null, $priceWithoutVAT = null)
    {
        $this
            ->setFaxNumber($faxNumber)
            ->setPages($pages)
            ->setPriceWithoutVAT($priceWithoutVAT);
    }
    /**
     * Get faxNumber value
     * @return int|null
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }
    /**
     * Set faxNumber value
     * @param int $faxNumber
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: int
        if (!is_null($faxNumber) && !(is_int($faxNumber) || ctype_digit($faxNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($faxNumber, true), gettype($faxNumber)), __LINE__);
        }
        $this->faxNumber = $faxNumber;
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
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public function setPages($pages = null)
    {
        // validation for constraint: int
        if (!is_null($pages) && !(is_int($pages) || ctype_digit($pages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pages, true), gettype($pages)), __LINE__);
        }
        $this->pages = $pages;
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
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct
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
