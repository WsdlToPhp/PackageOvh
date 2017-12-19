<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingSummaryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingSummaryReturn extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The webspace
     * @var string
     */
    public $webspace;
    /**
     * The maxWebspace
     * @var string
     */
    public $maxWebspace;
    /**
     * The subdomains
     * @var string
     */
    public $subdomains;
    /**
     * The multidomains
     * @var string
     */
    public $multidomains;
    /**
     * The multiftps
     * @var string
     */
    public $multiftps;
    /**
     * The anonymousftp
     * @var string
     */
    public $anonymousftp;
    /**
     * The databases
     * @var string
     */
    public $databases;
    /**
     * The freedom_remaining
     * @var string
     */
    public $freedom_remaining;
    /**
     * The freedom_assigned
     * @var string
     */
    public $freedom_assigned;
    /**
     * The freedom_total
     * @var string
     */
    public $freedom_total;
    /**
     * The highCapacity
     * @var bool
     */
    public $highCapacity;
    /**
     * The highSecurity
     * @var bool
     */
    public $highSecurity;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * Constructor method for hostingSummaryReturn
     * @uses HostingSummaryReturn::setCountry()
     * @uses HostingSummaryReturn::setWebspace()
     * @uses HostingSummaryReturn::setMaxWebspace()
     * @uses HostingSummaryReturn::setSubdomains()
     * @uses HostingSummaryReturn::setMultidomains()
     * @uses HostingSummaryReturn::setMultiftps()
     * @uses HostingSummaryReturn::setAnonymousftp()
     * @uses HostingSummaryReturn::setDatabases()
     * @uses HostingSummaryReturn::setFreedom_remaining()
     * @uses HostingSummaryReturn::setFreedom_assigned()
     * @uses HostingSummaryReturn::setFreedom_total()
     * @uses HostingSummaryReturn::setHighCapacity()
     * @uses HostingSummaryReturn::setHighSecurity()
     * @uses HostingSummaryReturn::setState()
     * @param string $country
     * @param string $webspace
     * @param string $maxWebspace
     * @param string $subdomains
     * @param string $multidomains
     * @param string $multiftps
     * @param string $anonymousftp
     * @param string $databases
     * @param string $freedom_remaining
     * @param string $freedom_assigned
     * @param string $freedom_total
     * @param bool $highCapacity
     * @param bool $highSecurity
     * @param string $state
     */
    public function __construct($country = null, $webspace = null, $maxWebspace = null, $subdomains = null, $multidomains = null, $multiftps = null, $anonymousftp = null, $databases = null, $freedom_remaining = null, $freedom_assigned = null, $freedom_total = null, $highCapacity = null, $highSecurity = null, $state = null)
    {
        $this
            ->setCountry($country)
            ->setWebspace($webspace)
            ->setMaxWebspace($maxWebspace)
            ->setSubdomains($subdomains)
            ->setMultidomains($multidomains)
            ->setMultiftps($multiftps)
            ->setAnonymousftp($anonymousftp)
            ->setDatabases($databases)
            ->setFreedom_remaining($freedom_remaining)
            ->setFreedom_assigned($freedom_assigned)
            ->setFreedom_total($freedom_total)
            ->setHighCapacity($highCapacity)
            ->setHighSecurity($highSecurity)
            ->setState($state);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get webspace value
     * @return string|null
     */
    public function getWebspace()
    {
        return $this->webspace;
    }
    /**
     * Set webspace value
     * @param string $webspace
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setWebspace($webspace = null)
    {
        // validation for constraint: string
        if (!is_null($webspace) && !is_string($webspace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webspace)), __LINE__);
        }
        $this->webspace = $webspace;
        return $this;
    }
    /**
     * Get maxWebspace value
     * @return string|null
     */
    public function getMaxWebspace()
    {
        return $this->maxWebspace;
    }
    /**
     * Set maxWebspace value
     * @param string $maxWebspace
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setMaxWebspace($maxWebspace = null)
    {
        // validation for constraint: string
        if (!is_null($maxWebspace) && !is_string($maxWebspace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxWebspace)), __LINE__);
        }
        $this->maxWebspace = $maxWebspace;
        return $this;
    }
    /**
     * Get subdomains value
     * @return string|null
     */
    public function getSubdomains()
    {
        return $this->subdomains;
    }
    /**
     * Set subdomains value
     * @param string $subdomains
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setSubdomains($subdomains = null)
    {
        // validation for constraint: string
        if (!is_null($subdomains) && !is_string($subdomains)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subdomains)), __LINE__);
        }
        $this->subdomains = $subdomains;
        return $this;
    }
    /**
     * Get multidomains value
     * @return string|null
     */
    public function getMultidomains()
    {
        return $this->multidomains;
    }
    /**
     * Set multidomains value
     * @param string $multidomains
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setMultidomains($multidomains = null)
    {
        // validation for constraint: string
        if (!is_null($multidomains) && !is_string($multidomains)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multidomains)), __LINE__);
        }
        $this->multidomains = $multidomains;
        return $this;
    }
    /**
     * Get multiftps value
     * @return string|null
     */
    public function getMultiftps()
    {
        return $this->multiftps;
    }
    /**
     * Set multiftps value
     * @param string $multiftps
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setMultiftps($multiftps = null)
    {
        // validation for constraint: string
        if (!is_null($multiftps) && !is_string($multiftps)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multiftps)), __LINE__);
        }
        $this->multiftps = $multiftps;
        return $this;
    }
    /**
     * Get anonymousftp value
     * @return string|null
     */
    public function getAnonymousftp()
    {
        return $this->anonymousftp;
    }
    /**
     * Set anonymousftp value
     * @param string $anonymousftp
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setAnonymousftp($anonymousftp = null)
    {
        // validation for constraint: string
        if (!is_null($anonymousftp) && !is_string($anonymousftp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($anonymousftp)), __LINE__);
        }
        $this->anonymousftp = $anonymousftp;
        return $this;
    }
    /**
     * Get databases value
     * @return string|null
     */
    public function getDatabases()
    {
        return $this->databases;
    }
    /**
     * Set databases value
     * @param string $databases
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setDatabases($databases = null)
    {
        // validation for constraint: string
        if (!is_null($databases) && !is_string($databases)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($databases)), __LINE__);
        }
        $this->databases = $databases;
        return $this;
    }
    /**
     * Get freedom_remaining value
     * @return string|null
     */
    public function getFreedom_remaining()
    {
        return $this->freedom_remaining;
    }
    /**
     * Set freedom_remaining value
     * @param string $freedom_remaining
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setFreedom_remaining($freedom_remaining = null)
    {
        // validation for constraint: string
        if (!is_null($freedom_remaining) && !is_string($freedom_remaining)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freedom_remaining)), __LINE__);
        }
        $this->freedom_remaining = $freedom_remaining;
        return $this;
    }
    /**
     * Get freedom_assigned value
     * @return string|null
     */
    public function getFreedom_assigned()
    {
        return $this->freedom_assigned;
    }
    /**
     * Set freedom_assigned value
     * @param string $freedom_assigned
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setFreedom_assigned($freedom_assigned = null)
    {
        // validation for constraint: string
        if (!is_null($freedom_assigned) && !is_string($freedom_assigned)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freedom_assigned)), __LINE__);
        }
        $this->freedom_assigned = $freedom_assigned;
        return $this;
    }
    /**
     * Get freedom_total value
     * @return string|null
     */
    public function getFreedom_total()
    {
        return $this->freedom_total;
    }
    /**
     * Set freedom_total value
     * @param string $freedom_total
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setFreedom_total($freedom_total = null)
    {
        // validation for constraint: string
        if (!is_null($freedom_total) && !is_string($freedom_total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freedom_total)), __LINE__);
        }
        $this->freedom_total = $freedom_total;
        return $this;
    }
    /**
     * Get highCapacity value
     * @return bool|null
     */
    public function getHighCapacity()
    {
        return $this->highCapacity;
    }
    /**
     * Set highCapacity value
     * @param bool $highCapacity
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setHighCapacity($highCapacity = null)
    {
        // validation for constraint: boolean
        if (!is_null($highCapacity) && !is_bool($highCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($highCapacity)), __LINE__);
        }
        $this->highCapacity = $highCapacity;
        return $this;
    }
    /**
     * Get highSecurity value
     * @return bool|null
     */
    public function getHighSecurity()
    {
        return $this->highSecurity;
    }
    /**
     * Set highSecurity value
     * @param bool $highSecurity
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setHighSecurity($highSecurity = null)
    {
        // validation for constraint: boolean
        if (!is_null($highSecurity) && !is_bool($highSecurity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($highSecurity)), __LINE__);
        }
        $this->highSecurity = $highSecurity;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\HostingSummaryReturn
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\HostingSummaryReturn
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
