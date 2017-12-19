<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpecialNumberCustomListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpecialNumberCustomListReturn extends AbstractStructBase
{
    /**
     * The easyNumbers
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $easyNumbers;
    /**
     * The staticAttributionRange
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $staticAttributionRange;
    /**
     * The proposedNumbers
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $proposedNumbers;
    /**
     * Constructor method for telephonySpecialNumberCustomListReturn
     * @uses TelephonySpecialNumberCustomListReturn::setEasyNumbers()
     * @uses TelephonySpecialNumberCustomListReturn::setStaticAttributionRange()
     * @uses TelephonySpecialNumberCustomListReturn::setProposedNumbers()
     * @param \PayPal\ArrayType\MyArrayOfStringType $easyNumbers
     * @param \PayPal\ArrayType\MyArrayOfStringType $staticAttributionRange
     * @param \PayPal\ArrayType\MyArrayOfStringType $proposedNumbers
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfStringType $easyNumbers = null, \PayPal\ArrayType\MyArrayOfStringType $staticAttributionRange = null, \PayPal\ArrayType\MyArrayOfStringType $proposedNumbers = null)
    {
        $this
            ->setEasyNumbers($easyNumbers)
            ->setStaticAttributionRange($staticAttributionRange)
            ->setProposedNumbers($proposedNumbers);
    }
    /**
     * Get easyNumbers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getEasyNumbers()
    {
        return $this->easyNumbers;
    }
    /**
     * Set easyNumbers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $easyNumbers
     * @return \PayPal\StructType\TelephonySpecialNumberCustomListReturn
     */
    public function setEasyNumbers(\PayPal\ArrayType\MyArrayOfStringType $easyNumbers = null)
    {
        $this->easyNumbers = $easyNumbers;
        return $this;
    }
    /**
     * Get staticAttributionRange value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getStaticAttributionRange()
    {
        return $this->staticAttributionRange;
    }
    /**
     * Set staticAttributionRange value
     * @param \PayPal\ArrayType\MyArrayOfStringType $staticAttributionRange
     * @return \PayPal\StructType\TelephonySpecialNumberCustomListReturn
     */
    public function setStaticAttributionRange(\PayPal\ArrayType\MyArrayOfStringType $staticAttributionRange = null)
    {
        $this->staticAttributionRange = $staticAttributionRange;
        return $this;
    }
    /**
     * Get proposedNumbers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getProposedNumbers()
    {
        return $this->proposedNumbers;
    }
    /**
     * Set proposedNumbers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $proposedNumbers
     * @return \PayPal\StructType\TelephonySpecialNumberCustomListReturn
     */
    public function setProposedNumbers(\PayPal\ArrayType\MyArrayOfStringType $proposedNumbers = null)
    {
        $this->proposedNumbers = $proposedNumbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySpecialNumberCustomListReturn
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
