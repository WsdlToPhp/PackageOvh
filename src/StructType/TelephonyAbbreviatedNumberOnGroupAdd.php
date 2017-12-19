<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberOnGroupAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberOnGroupAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The group
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $group;
    /**
     * The abbreviatedNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abbreviatedNumber;
    /**
     * The relatedNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $relatedNumber;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The surname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * Constructor method for telephonyAbbreviatedNumberOnGroupAdd
     * @uses TelephonyAbbreviatedNumberOnGroupAdd::setSession()
     * @uses TelephonyAbbreviatedNumberOnGroupAdd::setGroup()
     * @uses TelephonyAbbreviatedNumberOnGroupAdd::setAbbreviatedNumber()
     * @uses TelephonyAbbreviatedNumberOnGroupAdd::setRelatedNumber()
     * @uses TelephonyAbbreviatedNumberOnGroupAdd::setName()
     * @uses TelephonyAbbreviatedNumberOnGroupAdd::setSurname()
     * @param string $session
     * @param string $group
     * @param string $abbreviatedNumber
     * @param string $relatedNumber
     * @param string $name
     * @param string $surname
     */
    public function __construct($session = null, $group = null, $abbreviatedNumber = null, $relatedNumber = null, $name = null, $surname = null)
    {
        $this
            ->setSession($session)
            ->setGroup($group)
            ->setAbbreviatedNumber($abbreviatedNumber)
            ->setRelatedNumber($relatedNumber)
            ->setName($name)
            ->setSurname($surname);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $group
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group)), __LINE__);
        }
        $this->group = $group;
        return $this;
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
     */
    public function setAbbreviatedNumber($abbreviatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($abbreviatedNumber) && !is_string($abbreviatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abbreviatedNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
     */
    public function setRelatedNumber($relatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($relatedNumber) && !is_string($relatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatedNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupAdd
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
