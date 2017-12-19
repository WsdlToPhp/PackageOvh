<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dnsSoaModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DnsSoaModify extends AbstractStructBase
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
     * The ttl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ttl;
    /**
     * Constructor method for dnsSoaModify
     * @uses DnsSoaModify::setSession()
     * @uses DnsSoaModify::setDomain()
     * @uses DnsSoaModify::setTtl()
     * @param string $session
     * @param string $domain
     * @param int $ttl
     */
    public function __construct($session = null, $domain = null, $ttl = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setTtl($ttl);
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
     * @return \Ovh\StructType\DnsSoaModify
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
     * @return \Ovh\StructType\DnsSoaModify
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
     * Get ttl value
     * @return int|null
     */
    public function getTtl()
    {
        return $this->ttl;
    }
    /**
     * Set ttl value
     * @param int $ttl
     * @return \Ovh\StructType\DnsSoaModify
     */
    public function setTtl($ttl = null)
    {
        // validation for constraint: int
        if (!is_null($ttl) && !is_numeric($ttl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ttl)), __LINE__);
        }
        $this->ttl = $ttl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DnsSoaModify
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
