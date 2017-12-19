<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberOnGroupList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberOnGroupList extends AbstractStructBase
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
     * Constructor method for telephonyAbbreviatedNumberOnGroupList
     * @uses TelephonyAbbreviatedNumberOnGroupList::setSession()
     * @uses TelephonyAbbreviatedNumberOnGroupList::setGroup()
     * @param string $session
     * @param string $group
     */
    public function __construct($session = null, $group = null)
    {
        $this
            ->setSession($session)
            ->setGroup($group);
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupList
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupList
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupList
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
