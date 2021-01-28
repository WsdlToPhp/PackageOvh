<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\TelephonyDirectoryWayTypeStruct
     */
    public function setAbbreviatedName($abbreviatedName = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviatedName) && !is_string($abbreviatedName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abbreviatedName, true), gettype($abbreviatedName)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryWayTypeStruct
     */
    public function setWayName($wayName = null)
    {
        // validation for constraint: string
        if (!is_null($wayName) && !is_string($wayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wayName, true), gettype($wayName)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryWayTypeStruct
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tag, true), gettype($tag)), __LINE__);
        }
        $this->tag = $tag;
        return $this;
    }
}
