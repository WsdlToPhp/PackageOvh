<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryWayTypeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryWayTypeStruct extends AbstractStructBase
{
    /**
     * The abbreviatedName
     * @var string
     */
    public $abbreviatedName;
    /**
     * The wayName
     * @var string
     */
    public $wayName;
    /**
     * The tag
     * @var string
     */
    public $tag;
    /**
     * Constructor method for telephonyDirectoryWayTypeStruct
     * @uses TelephonyDirectoryWayTypeStruct::setAbbreviatedName()
     * @uses TelephonyDirectoryWayTypeStruct::setWayName()
     * @uses TelephonyDirectoryWayTypeStruct::setTag()
     * @param string $abbreviatedName
     * @param string $wayName
     * @param string $tag
     */
    public function __construct($abbreviatedName = null, $wayName = null, $tag = null)
    {
        $this
            ->setAbbreviatedName($abbreviatedName)
            ->setWayName($wayName)
            ->setTag($tag);
    }
    /**
     * Get abbreviatedName value
     * @return string|null
     */
    public function getAbbreviatedName()
    {
        return $this->abbreviatedName;
    }
    /**
     * Set abbreviatedName value
     * @param string $abbreviatedName
     * @return \PayPal\StructType\TelephonyDirectoryWayTypeStruct
     */
    public function setAbbreviatedName($abbreviatedName = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviatedName) && !is_string($abbreviatedName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abbreviatedName)), __LINE__);
        }
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }
    /**
     * Get wayName value
     * @return string|null
     */
    public function getWayName()
    {
        return $this->wayName;
    }
    /**
     * Set wayName value
     * @param string $wayName
     * @return \PayPal\StructType\TelephonyDirectoryWayTypeStruct
     */
    public function setWayName($wayName = null)
    {
        // validation for constraint: string
        if (!is_null($wayName) && !is_string($wayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayName)), __LINE__);
        }
        $this->wayName = $wayName;
        return $this;
    }
    /**
     * Get tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Set tag value
     * @param string $tag
     * @return \PayPal\StructType\TelephonyDirectoryWayTypeStruct
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tag)), __LINE__);
        }
        $this->tag = $tag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDirectoryWayTypeStruct
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
