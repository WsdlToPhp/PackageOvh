<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $easyNumbers;
    /**
     * The staticAttributionRange
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $staticAttributionRange;
    /**
     * The proposedNumbers
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $proposedNumbers;
    /**
     * Constructor method for telephonySpecialNumberCustomListReturn
     * @uses TelephonySpecialNumberCustomListReturn::setEasyNumbers()
     * @uses TelephonySpecialNumberCustomListReturn::setStaticAttributionRange()
     * @uses TelephonySpecialNumberCustomListReturn::setProposedNumbers()
     * @param \Ovh\ArrayType\MyArrayOfStringType $easyNumbers
     * @param \Ovh\ArrayType\MyArrayOfStringType $staticAttributionRange
     * @param \Ovh\ArrayType\MyArrayOfStringType $proposedNumbers
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfStringType $easyNumbers = null, \Ovh\ArrayType\MyArrayOfStringType $staticAttributionRange = null, \Ovh\ArrayType\MyArrayOfStringType $proposedNumbers = null)
    {
        $this
            ->setEasyNumbers($easyNumbers)
            ->setStaticAttributionRange($staticAttributionRange)
            ->setProposedNumbers($proposedNumbers);
    }
    /**
     * Get easyNumbers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getEasyNumbers()
    {
        return $this->easyNumbers;
    }
    /**
     * Set easyNumbers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $easyNumbers
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListReturn
     */
    public function setEasyNumbers(\Ovh\ArrayType\MyArrayOfStringType $easyNumbers = null)
    {
        $this->easyNumbers = $easyNumbers;
        return $this;
    }
    /**
     * Get staticAttributionRange value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getStaticAttributionRange()
    {
        return $this->staticAttributionRange;
    }
    /**
     * Set staticAttributionRange value
     * @param \Ovh\ArrayType\MyArrayOfStringType $staticAttributionRange
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListReturn
     */
    public function setStaticAttributionRange(\Ovh\ArrayType\MyArrayOfStringType $staticAttributionRange = null)
    {
        $this->staticAttributionRange = $staticAttributionRange;
        return $this;
    }
    /**
     * Get proposedNumbers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getProposedNumbers()
    {
        return $this->proposedNumbers;
    }
    /**
     * Set proposedNumbers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $proposedNumbers
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListReturn
     */
    public function setProposedNumbers(\Ovh\ArrayType\MyArrayOfStringType $proposedNumbers = null)
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
     * @return \Ovh\StructType\TelephonySpecialNumberCustomListReturn
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
