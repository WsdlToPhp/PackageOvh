<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceListPaginated StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceListPaginated extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The start
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $start;
    /**
     * The limit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $limit;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The component
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $component;
    /**
     * The group
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $group;
    /**
     * Constructor method for serviceListPaginated
     * @uses ServiceListPaginated::setSession()
     * @uses ServiceListPaginated::setStart()
     * @uses ServiceListPaginated::setLimit()
     * @uses ServiceListPaginated::setDomain()
     * @uses ServiceListPaginated::setComponent()
     * @uses ServiceListPaginated::setGroup()
     * @param string $session
     * @param int $start
     * @param int $limit
     * @param string $domain
     * @param string $component
     * @param string $group
     */
    public function __construct($session = null, $start = null, $limit = null, $domain = null, $component = null, $group = null)
    {
        $this
            ->setSession($session)
            ->setStart($start)
            ->setLimit($limit)
            ->setDomain($domain)
            ->setComponent($component)
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
     * @return \Ovh\StructType\ServiceListPaginated
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get start value
     * @return int|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param int $start
     * @return \Ovh\StructType\ServiceListPaginated
     */
    public function setStart($start = null)
    {
        // validation for constraint: int
        if (!is_null($start) && !(is_int($start) || ctype_digit($start))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        return $this;
    }
    /**
     * Get limit value
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \Ovh\StructType\ServiceListPaginated
     */
    public function setLimit($limit = null)
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;
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
     * @return \Ovh\StructType\ServiceListPaginated
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
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
     * @return \Ovh\StructType\ServiceListPaginated
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($component, true), gettype($component)), __LINE__);
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
     * @return \Ovh\StructType\ServiceListPaginated
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        return $this;
    }
}
