<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceList extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The component
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $component;
    /**
     * The group
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $group;
    /**
     * The componentSubType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $componentSubType;
    /**
     * Constructor method for serviceList
     * @uses ServiceList::setSession()
     * @uses ServiceList::setDomain()
     * @uses ServiceList::setComponent()
     * @uses ServiceList::setGroup()
     * @uses ServiceList::setComponentSubType()
     * @param string $session
     * @param string $domain
     * @param string $component
     * @param string $group
     * @param string $componentSubType
     */
    public function __construct($session = null, $domain = null, $component = null, $group = null, $componentSubType = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setComponent($component)
            ->setGroup($group)
            ->setComponentSubType($componentSubType);
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
     * @return \PayPal\StructType\ServiceList
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \PayPal\StructType\ServiceList
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get component value
     * @return string|null
     */
    public function getComponent()
    {
        return $this->component;
    }
    /**
     * Set component value
     * @param string $component
     * @return \PayPal\StructType\ServiceList
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($component)), __LINE__);
        }
        $this->component = $component;
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
     * @return \PayPal\StructType\ServiceList
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
     * Get componentSubType value
     * @return string|null
     */
    public function getComponentSubType()
    {
        return $this->componentSubType;
    }
    /**
     * Set componentSubType value
     * @param string $componentSubType
     * @return \PayPal\StructType\ServiceList
     */
    public function setComponentSubType($componentSubType = null)
    {
        // validation for constraint: string
        if (!is_null($componentSubType) && !is_string($componentSubType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($componentSubType)), __LINE__);
        }
        $this->componentSubType = $componentSubType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ServiceList
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
