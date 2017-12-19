<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: int
        if (!is_null($faxNumber) && !is_numeric($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($faxNumber)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct
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
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct
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
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct
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
