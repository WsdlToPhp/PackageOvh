<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailRedirectionStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailRedirectionStruct extends AbstractStructBase
{
    /**
     * The target
     * @var string
     */
    public $target;
    /**
     * The local
     * @var string
     */
    public $local;
    /**
     * The subdomain
     * @var string
     */
    public $subdomain;
    /**
     * The dnsRedirection
     * @var bool
     */
    public $dnsRedirection;
    /**
     * Constructor method for emailRedirectionStruct
     * @uses EmailRedirectionStruct::setTarget()
     * @uses EmailRedirectionStruct::setLocal()
     * @uses EmailRedirectionStruct::setSubdomain()
     * @uses EmailRedirectionStruct::setDnsRedirection()
     * @param string $target
     * @param string $local
     * @param string $subdomain
     * @param bool $dnsRedirection
     */
    public function __construct($target = null, $local = null, $subdomain = null, $dnsRedirection = null)
    {
        $this
            ->setTarget($target)
            ->setLocal($local)
            ->setSubdomain($subdomain)
            ->setDnsRedirection($dnsRedirection);
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
     * @return \Ovh\StructType\EmailRedirectionStruct
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
     * Get local value
     * @return string|null
     */
    public function getLocal()
    {
        return $this->local;
    }
    /**
     * Set local value
     * @param string $local
     * @return \Ovh\StructType\EmailRedirectionStruct
     */
    public function setLocal($local = null)
    {
        // validation for constraint: string
        if (!is_null($local) && !is_string($local)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($local)), __LINE__);
        }
        $this->local = $local;
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
     * @return \Ovh\StructType\EmailRedirectionStruct
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
     * Get dnsRedirection value
     * @return bool|null
     */
    public function getDnsRedirection()
    {
        return $this->dnsRedirection;
    }
    /**
     * Set dnsRedirection value
     * @param bool $dnsRedirection
     * @return \Ovh\StructType\EmailRedirectionStruct
     */
    public function setDnsRedirection($dnsRedirection = null)
    {
        // validation for constraint: boolean
        if (!is_null($dnsRedirection) && !is_bool($dnsRedirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dnsRedirection)), __LINE__);
        }
        $this->dnsRedirection = $dnsRedirection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\EmailRedirectionStruct
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
