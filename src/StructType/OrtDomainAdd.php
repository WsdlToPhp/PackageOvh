<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ortDomainAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrtDomainAdd extends AbstractStructBase
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
     * The subdomain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subdomain;
    /**
     * The target
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $target;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The overwrite
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $overwrite;
    /**
     * Constructor method for ortDomainAdd
     * @uses OrtDomainAdd::setSession()
     * @uses OrtDomainAdd::setDomain()
     * @uses OrtDomainAdd::setSubdomain()
     * @uses OrtDomainAdd::setTarget()
     * @uses OrtDomainAdd::setType()
     * @uses OrtDomainAdd::setOverwrite()
     * @param string $session
     * @param string $domain
     * @param string $subdomain
     * @param string $target
     * @param string $type
     * @param int $overwrite
     */
    public function __construct($session = null, $domain = null, $subdomain = null, $target = null, $type = null, $overwrite = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setSubdomain($subdomain)
            ->setTarget($target)
            ->setType($type)
            ->setOverwrite($overwrite);
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
     * @return \PayPal\StructType\OrtDomainAdd
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
     * @return \PayPal\StructType\OrtDomainAdd
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
     * Get subdomain value
     * @return string|null
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }
    /**
     * Set subdomain value
     * @param string $subdomain
     * @return \PayPal\StructType\OrtDomainAdd
     */
    public function setSubdomain($subdomain = null)
    {
        // validation for constraint: string
        if (!is_null($subdomain) && !is_string($subdomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subdomain)), __LINE__);
        }
        $this->subdomain = $subdomain;
        return $this;
    }
    /**
     * Get target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->target;
    }
    /**
     * Set target value
     * @param string $target
     * @return \PayPal\StructType\OrtDomainAdd
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->target = $target;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\OrtDomainAdd
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get overwrite value
     * @return int|null
     */
    public function getOverwrite()
    {
        return $this->overwrite;
    }
    /**
     * Set overwrite value
     * @param int $overwrite
     * @return \PayPal\StructType\OrtDomainAdd
     */
    public function setOverwrite($overwrite = null)
    {
        // validation for constraint: int
        if (!is_null($overwrite) && !is_numeric($overwrite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($overwrite)), __LINE__);
        }
        $this->overwrite = $overwrite;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OrtDomainAdd
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
