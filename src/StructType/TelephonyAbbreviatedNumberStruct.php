<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberStruct extends AbstractStructBase
{
    /**
     * The abbreviatedNumber
     * @var string
     */
    public $abbreviatedNumber;
    /**
     * The relatedNumber
     * @var string
     */
    public $relatedNumber;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The surname
     * @var string
     */
    public $surname;
    /**
     * Constructor method for telephonyAbbreviatedNumberStruct
     * @uses TelephonyAbbreviatedNumberStruct::setAbbreviatedNumber()
     * @uses TelephonyAbbreviatedNumberStruct::setRelatedNumber()
     * @uses TelephonyAbbreviatedNumberStruct::setName()
     * @uses TelephonyAbbreviatedNumberStruct::setSurname()
     * @param string $abbreviatedNumber
     * @param string $relatedNumber
     * @param string $name
     * @param string $surname
     */
    public function __construct($abbreviatedNumber = null, $relatedNumber = null, $name = null, $surname = null)
    {
        $this
            ->setAbbreviatedNumber($abbreviatedNumber)
            ->setRelatedNumber($relatedNumber)
            ->setName($name)
            ->setSurname($surname);
    }
    /**
     * Get abbreviatedNumber value
     * @return string|null
     */
    public function getAbbreviatedNumber()
    {
        return $this->abbreviatedNumber;
    }
    /**
     * Set abbreviatedNumber value
     * @param string $abbreviatedNumber
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberStruct
     */
    public function setAbbreviatedNumber($abbreviatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviatedNumber) && !is_string($abbreviatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abbreviatedNumber, true), gettype($abbreviatedNumber)), __LINE__);
        }
        $this->abbreviatedNumber = $abbreviatedNumber;
        return $this;
    }
    /**
     * Get relatedNumber value
     * @return string|null
     */
    public function getRelatedNumber()
    {
        return $this->relatedNumber;
    }
    /**
     * Set relatedNumber value
     * @param string $relatedNumber
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberStruct
     */
    public function setRelatedNumber($relatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($relatedNumber) && !is_string($relatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relatedNumber, true), gettype($relatedNumber)), __LINE__);
        }
        $this->relatedNumber = $relatedNumber;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberStruct
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        return $this;
    }
}
