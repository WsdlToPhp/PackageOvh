<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxSummaryDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxSummaryDetailsStruct extends AbstractStructBase
{
    /**
     * The count
     * @var int
     */
    public $count;
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
     * Constructor method for telephonyFaxSummaryDetailsStruct
     * @uses TelephonyFaxSummaryDetailsStruct::setCount()
     * @uses TelephonyFaxSummaryDetailsStruct::setPages()
     * @uses TelephonyFaxSummaryDetailsStruct::setPriceWithoutVAT()
     * @param int $count
     * @param int $pages
     * @param float $priceWithoutVAT
     */
    public function __construct($count = null, $pages = null, $priceWithoutVAT = null)
    {
        $this
            ->setCount($count)
            ->setPages($pages)
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
     * @return \Ovh\StructType\TelephonyFaxSummaryDetailsStruct
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
     * @return \Ovh\StructType\TelephonyFaxSummaryDetailsStruct
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
     * @return \Ovh\StructType\TelephonyFaxSummaryDetailsStruct
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
     * @return \Ovh\StructType\TelephonyFaxSummaryDetailsStruct
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
