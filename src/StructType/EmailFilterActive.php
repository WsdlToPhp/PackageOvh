<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailFilterActive StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailFilterActive extends AbstractStructBase
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
     * The pop
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pop;
    /**
     * The filter
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * The active
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $active;
    /**
     * Constructor method for emailFilterActive
     * @uses EmailFilterActive::setSession()
     * @uses EmailFilterActive::setDomain()
     * @uses EmailFilterActive::setPop()
     * @uses EmailFilterActive::setFilter()
     * @uses EmailFilterActive::setActive()
     * @param string $session
     * @param string $domain
     * @param string $pop
     * @param string $filter
     * @param bool $active
     */
    public function __construct($session = null, $domain = null, $pop = null, $filter = null, $active = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setPop($pop)
            ->setFilter($filter)
            ->setActive($active);
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
     * @return \Ovh\StructType\EmailFilterActive
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
     * @return \Ovh\StructType\EmailFilterActive
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
     * Get pop value
     * @return string|null
     */
    public function getPop()
    {
        return $this->pop;
    }
    /**
     * Set pop value
     * @param string $pop
     * @return \Ovh\StructType\EmailFilterActive
     */
    public function setPop($pop = null)
    {
        // validation for constraint: string
        if (!is_null($pop) && !is_string($pop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pop)), __LINE__);
        }
        $this->pop = $pop;
        return $this;
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Ovh\StructType\EmailFilterActive
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
    /**
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \Ovh\StructType\EmailFilterActive
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\EmailFilterActive
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
