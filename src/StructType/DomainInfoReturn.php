<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainInfoReturn extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The creation
     * @var string
     */
    public $creation;
    /**
     * The modification
     * @var string
     */
    public $modification;
    /**
     * The expiration
     * @var string
     */
    public $expiration;
    /**
     * The nicowner
     * @var string
     */
    public $nicowner;
    /**
     * The nicadmin
     * @var string
     */
    public $nicadmin;
    /**
     * The nictech
     * @var string
     */
    public $nictech;
    /**
     * The nicbilling
     * @var string
     */
    public $nicbilling;
    /**
     * The authinfo
     * @var string
     */
    public $authinfo;
    /**
     * The dns
     * @var \Ovh\ArrayType\MyArrayOfNsStructType
     */
    public $dns;
    /**
     * Constructor method for domainInfoReturn
     * @uses DomainInfoReturn::setDomain()
     * @uses DomainInfoReturn::setCreation()
     * @uses DomainInfoReturn::setModification()
     * @uses DomainInfoReturn::setExpiration()
     * @uses DomainInfoReturn::setNicowner()
     * @uses DomainInfoReturn::setNicadmin()
     * @uses DomainInfoReturn::setNictech()
     * @uses DomainInfoReturn::setNicbilling()
     * @uses DomainInfoReturn::setAuthinfo()
     * @uses DomainInfoReturn::setDns()
     * @param string $domain
     * @param string $creation
     * @param string $modification
     * @param string $expiration
     * @param string $nicowner
     * @param string $nicadmin
     * @param string $nictech
     * @param string $nicbilling
     * @param string $authinfo
     * @param \Ovh\ArrayType\MyArrayOfNsStructType $dns
     */
    public function __construct($domain = null, $creation = null, $modification = null, $expiration = null, $nicowner = null, $nicadmin = null, $nictech = null, $nicbilling = null, $authinfo = null, \Ovh\ArrayType\MyArrayOfNsStructType $dns = null)
    {
        $this
            ->setDomain($domain)
            ->setCreation($creation)
            ->setModification($modification)
            ->setExpiration($expiration)
            ->setNicowner($nicowner)
            ->setNicadmin($nicadmin)
            ->setNictech($nictech)
            ->setNicbilling($nicbilling)
            ->setAuthinfo($authinfo)
            ->setDns($dns);
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
     * @return \Ovh\StructType\DomainInfoReturn
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
     * Get creation value
     * @return string|null
     */
    public function getCreation()
    {
        return $this->creation;
    }
    /**
     * Set creation value
     * @param string $creation
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setCreation($creation = null)
    {
        // validation for constraint: string
        if (!is_null($creation) && !is_string($creation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creation, true), gettype($creation)), __LINE__);
        }
        $this->creation = $creation;
        return $this;
    }
    /**
     * Get modification value
     * @return string|null
     */
    public function getModification()
    {
        return $this->modification;
    }
    /**
     * Set modification value
     * @param string $modification
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setModification($modification = null)
    {
        // validation for constraint: string
        if (!is_null($modification) && !is_string($modification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modification, true), gettype($modification)), __LINE__);
        }
        $this->modification = $modification;
        return $this;
    }
    /**
     * Get expiration value
     * @return string|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
    /**
     * Set expiration value
     * @param string $expiration
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setExpiration($expiration = null)
    {
        // validation for constraint: string
        if (!is_null($expiration) && !is_string($expiration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration, true), gettype($expiration)), __LINE__);
        }
        $this->expiration = $expiration;
        return $this;
    }
    /**
     * Get nicowner value
     * @return string|null
     */
    public function getNicowner()
    {
        return $this->nicowner;
    }
    /**
     * Set nicowner value
     * @param string $nicowner
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setNicowner($nicowner = null)
    {
        // validation for constraint: string
        if (!is_null($nicowner) && !is_string($nicowner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nicowner, true), gettype($nicowner)), __LINE__);
        }
        $this->nicowner = $nicowner;
        return $this;
    }
    /**
     * Get nicadmin value
     * @return string|null
     */
    public function getNicadmin()
    {
        return $this->nicadmin;
    }
    /**
     * Set nicadmin value
     * @param string $nicadmin
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setNicadmin($nicadmin = null)
    {
        // validation for constraint: string
        if (!is_null($nicadmin) && !is_string($nicadmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nicadmin, true), gettype($nicadmin)), __LINE__);
        }
        $this->nicadmin = $nicadmin;
        return $this;
    }
    /**
     * Get nictech value
     * @return string|null
     */
    public function getNictech()
    {
        return $this->nictech;
    }
    /**
     * Set nictech value
     * @param string $nictech
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setNictech($nictech = null)
    {
        // validation for constraint: string
        if (!is_null($nictech) && !is_string($nictech)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nictech, true), gettype($nictech)), __LINE__);
        }
        $this->nictech = $nictech;
        return $this;
    }
    /**
     * Get nicbilling value
     * @return string|null
     */
    public function getNicbilling()
    {
        return $this->nicbilling;
    }
    /**
     * Set nicbilling value
     * @param string $nicbilling
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setNicbilling($nicbilling = null)
    {
        // validation for constraint: string
        if (!is_null($nicbilling) && !is_string($nicbilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nicbilling, true), gettype($nicbilling)), __LINE__);
        }
        $this->nicbilling = $nicbilling;
        return $this;
    }
    /**
     * Get authinfo value
     * @return string|null
     */
    public function getAuthinfo()
    {
        return $this->authinfo;
    }
    /**
     * Set authinfo value
     * @param string $authinfo
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setAuthinfo($authinfo = null)
    {
        // validation for constraint: string
        if (!is_null($authinfo) && !is_string($authinfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authinfo, true), gettype($authinfo)), __LINE__);
        }
        $this->authinfo = $authinfo;
        return $this;
    }
    /**
     * Get dns value
     * @return \Ovh\ArrayType\MyArrayOfNsStructType|null
     */
    public function getDns()
    {
        return $this->dns;
    }
    /**
     * Set dns value
     * @param \Ovh\ArrayType\MyArrayOfNsStructType $dns
     * @return \Ovh\StructType\DomainInfoReturn
     */
    public function setDns(\Ovh\ArrayType\MyArrayOfNsStructType $dns = null)
    {
        $this->dns = $dns;
        return $this;
    }
}
