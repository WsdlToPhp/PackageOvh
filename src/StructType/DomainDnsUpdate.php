<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainDnsUpdate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainDnsUpdate extends AbstractStructBase
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
     * The dns1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns1;
    /**
     * The ip1
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip1;
    /**
     * The dns2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns2;
    /**
     * The ip2
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip2;
    /**
     * The dns3
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns3;
    /**
     * The ip3
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip3;
    /**
     * The dns4
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns4;
    /**
     * The ip4
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip4;
    /**
     * The dns5
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dns5;
    /**
     * The ip5
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip5;
    /**
     * Constructor method for domainDnsUpdate
     * @uses DomainDnsUpdate::setSession()
     * @uses DomainDnsUpdate::setDomain()
     * @uses DomainDnsUpdate::setDns1()
     * @uses DomainDnsUpdate::setIp1()
     * @uses DomainDnsUpdate::setDns2()
     * @uses DomainDnsUpdate::setIp2()
     * @uses DomainDnsUpdate::setDns3()
     * @uses DomainDnsUpdate::setIp3()
     * @uses DomainDnsUpdate::setDns4()
     * @uses DomainDnsUpdate::setIp4()
     * @uses DomainDnsUpdate::setDns5()
     * @uses DomainDnsUpdate::setIp5()
     * @param string $session
     * @param string $domain
     * @param string $dns1
     * @param string $ip1
     * @param string $dns2
     * @param string $ip2
     * @param string $dns3
     * @param string $ip3
     * @param string $dns4
     * @param string $ip4
     * @param string $dns5
     * @param string $ip5
     */
    public function __construct($session = null, $domain = null, $dns1 = null, $ip1 = null, $dns2 = null, $ip2 = null, $dns3 = null, $ip3 = null, $dns4 = null, $ip4 = null, $dns5 = null, $ip5 = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setDns1($dns1)
            ->setIp1($ip1)
            ->setDns2($dns2)
            ->setIp2($ip2)
            ->setDns3($dns3)
            ->setIp3($ip3)
            ->setDns4($dns4)
            ->setIp4($ip4)
            ->setDns5($dns5)
            ->setIp5($ip5);
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
     * @return \Ovh\StructType\DomainDnsUpdate
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
     * @return \Ovh\StructType\DomainDnsUpdate
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
     * Get dns1 value
     * @return string|null
     */
    public function getDns1()
    {
        return $this->dns1;
    }
    /**
     * Set dns1 value
     * @param string $dns1
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setDns1($dns1 = null)
    {
        // validation for constraint: string
        if (!is_null($dns1) && !is_string($dns1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns1)), __LINE__);
        }
        $this->dns1 = $dns1;
        return $this;
    }
    /**
     * Get ip1 value
     * @return string|null
     */
    public function getIp1()
    {
        return $this->ip1;
    }
    /**
     * Set ip1 value
     * @param string $ip1
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setIp1($ip1 = null)
    {
        // validation for constraint: string
        if (!is_null($ip1) && !is_string($ip1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip1)), __LINE__);
        }
        $this->ip1 = $ip1;
        return $this;
    }
    /**
     * Get dns2 value
     * @return string|null
     */
    public function getDns2()
    {
        return $this->dns2;
    }
    /**
     * Set dns2 value
     * @param string $dns2
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setDns2($dns2 = null)
    {
        // validation for constraint: string
        if (!is_null($dns2) && !is_string($dns2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns2)), __LINE__);
        }
        $this->dns2 = $dns2;
        return $this;
    }
    /**
     * Get ip2 value
     * @return string|null
     */
    public function getIp2()
    {
        return $this->ip2;
    }
    /**
     * Set ip2 value
     * @param string $ip2
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setIp2($ip2 = null)
    {
        // validation for constraint: string
        if (!is_null($ip2) && !is_string($ip2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip2)), __LINE__);
        }
        $this->ip2 = $ip2;
        return $this;
    }
    /**
     * Get dns3 value
     * @return string|null
     */
    public function getDns3()
    {
        return $this->dns3;
    }
    /**
     * Set dns3 value
     * @param string $dns3
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setDns3($dns3 = null)
    {
        // validation for constraint: string
        if (!is_null($dns3) && !is_string($dns3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns3)), __LINE__);
        }
        $this->dns3 = $dns3;
        return $this;
    }
    /**
     * Get ip3 value
     * @return string|null
     */
    public function getIp3()
    {
        return $this->ip3;
    }
    /**
     * Set ip3 value
     * @param string $ip3
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setIp3($ip3 = null)
    {
        // validation for constraint: string
        if (!is_null($ip3) && !is_string($ip3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip3)), __LINE__);
        }
        $this->ip3 = $ip3;
        return $this;
    }
    /**
     * Get dns4 value
     * @return string|null
     */
    public function getDns4()
    {
        return $this->dns4;
    }
    /**
     * Set dns4 value
     * @param string $dns4
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setDns4($dns4 = null)
    {
        // validation for constraint: string
        if (!is_null($dns4) && !is_string($dns4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns4)), __LINE__);
        }
        $this->dns4 = $dns4;
        return $this;
    }
    /**
     * Get ip4 value
     * @return string|null
     */
    public function getIp4()
    {
        return $this->ip4;
    }
    /**
     * Set ip4 value
     * @param string $ip4
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setIp4($ip4 = null)
    {
        // validation for constraint: string
        if (!is_null($ip4) && !is_string($ip4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip4)), __LINE__);
        }
        $this->ip4 = $ip4;
        return $this;
    }
    /**
     * Get dns5 value
     * @return string|null
     */
    public function getDns5()
    {
        return $this->dns5;
    }
    /**
     * Set dns5 value
     * @param string $dns5
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setDns5($dns5 = null)
    {
        // validation for constraint: string
        if (!is_null($dns5) && !is_string($dns5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dns5)), __LINE__);
        }
        $this->dns5 = $dns5;
        return $this;
    }
    /**
     * Get ip5 value
     * @return string|null
     */
    public function getIp5()
    {
        return $this->ip5;
    }
    /**
     * Set ip5 value
     * @param string $ip5
     * @return \Ovh\StructType\DomainDnsUpdate
     */
    public function setIp5($ip5 = null)
    {
        // validation for constraint: string
        if (!is_null($ip5) && !is_string($ip5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip5)), __LINE__);
        }
        $this->ip5 = $ip5;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DomainDnsUpdate
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
