<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberOnGroupDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberOnGroupDel extends AbstractStructBase
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
     * Constructor method for telephonyAbbreviatedNumberOnGroupDel
     * @uses TelephonyAbbreviatedNumberOnGroupDel::setSession()
     * @uses TelephonyAbbreviatedNumberOnGroupDel::setGroup()
     * @uses TelephonyAbbreviatedNumberOnGroupDel::setAbbreviatedNumber()
     * @param string $session
     * @param string $group
     * @param string $abbreviatedNumber
     */
    public function __construct($session = null, $group = null, $abbreviatedNumber = null)
    {
        $this
            ->setSession($session)
            ->setGroup($group)
            ->setAbbreviatedNumber($abbreviatedNumber);
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberOnGroupDel
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
