<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingGetCapabilitiesReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingGetCapabilitiesReturn extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The webspace
     * @var int
     */
    public $webspace;
    /**
     * The traffic
     * @var string
     */
    public $traffic;
    /**
     * The databases
     * @var int
     */
    public $databases;
    /**
     * The databaseSpace
     * @var int
     */
    public $databaseSpace;
    /**
     * The multidomains
     * @var int
     */
    public $multidomains;
    /**
     * The subdomains
     * @var int
     */
    public $subdomains;
    /**
     * The streaming
     * @var int
     */
    public $streaming;
    /**
     * The multiftp
     * @var int
     */
    public $multiftp;
    /**
     * The anonymousftp
     * @var int
     */
    public $anonymousftp;
    /**
     * The freeDomPerYear
     * @var int
     */
    public $freeDomPerYear;
    /**
     * The freeDomMax
     * @var int
     */
    public $freeDomMax;
    /**
     * The sharedSSL
     * @var bool
     */
    public $sharedSSL;
    /**
     * The ssh
     * @var bool
     */
    public $ssh;
    /**
     * The geoloc
     * @var bool
     */
    public $geoloc;
    /**
     * The cgi
     * @var bool
     */
    public $cgi;
    /**
     * The crontab
     * @var bool
     */
    public $crontab;
    /**
     * The sip
     * @var bool
     */
    public $sip;
    /**
     * The vpn
     * @var bool
     */
    public $vpn;
    /**
     * The jabber
     * @var bool
     */
    public $jabber;
    /**
     * Constructor method for hostingGetCapabilitiesReturn
     * @uses HostingGetCapabilitiesReturn::setName()
     * @uses HostingGetCapabilitiesReturn::setWebspace()
     * @uses HostingGetCapabilitiesReturn::setTraffic()
     * @uses HostingGetCapabilitiesReturn::setDatabases()
     * @uses HostingGetCapabilitiesReturn::setDatabaseSpace()
     * @uses HostingGetCapabilitiesReturn::setMultidomains()
     * @uses HostingGetCapabilitiesReturn::setSubdomains()
     * @uses HostingGetCapabilitiesReturn::setStreaming()
     * @uses HostingGetCapabilitiesReturn::setMultiftp()
     * @uses HostingGetCapabilitiesReturn::setAnonymousftp()
     * @uses HostingGetCapabilitiesReturn::setFreeDomPerYear()
     * @uses HostingGetCapabilitiesReturn::setFreeDomMax()
     * @uses HostingGetCapabilitiesReturn::setSharedSSL()
     * @uses HostingGetCapabilitiesReturn::setSsh()
     * @uses HostingGetCapabilitiesReturn::setGeoloc()
     * @uses HostingGetCapabilitiesReturn::setCgi()
     * @uses HostingGetCapabilitiesReturn::setCrontab()
     * @uses HostingGetCapabilitiesReturn::setSip()
     * @uses HostingGetCapabilitiesReturn::setVpn()
     * @uses HostingGetCapabilitiesReturn::setJabber()
     * @param string $name
     * @param int $webspace
     * @param string $traffic
     * @param int $databases
     * @param int $databaseSpace
     * @param int $multidomains
     * @param int $subdomains
     * @param int $streaming
     * @param int $multiftp
     * @param int $anonymousftp
     * @param int $freeDomPerYear
     * @param int $freeDomMax
     * @param bool $sharedSSL
     * @param bool $ssh
     * @param bool $geoloc
     * @param bool $cgi
     * @param bool $crontab
     * @param bool $sip
     * @param bool $vpn
     * @param bool $jabber
     */
    public function __construct($name = null, $webspace = null, $traffic = null, $databases = null, $databaseSpace = null, $multidomains = null, $subdomains = null, $streaming = null, $multiftp = null, $anonymousftp = null, $freeDomPerYear = null, $freeDomMax = null, $sharedSSL = null, $ssh = null, $geoloc = null, $cgi = null, $crontab = null, $sip = null, $vpn = null, $jabber = null)
    {
        $this
            ->setName($name)
            ->setWebspace($webspace)
            ->setTraffic($traffic)
            ->setDatabases($databases)
            ->setDatabaseSpace($databaseSpace)
            ->setMultidomains($multidomains)
            ->setSubdomains($subdomains)
            ->setStreaming($streaming)
            ->setMultiftp($multiftp)
            ->setAnonymousftp($anonymousftp)
            ->setFreeDomPerYear($freeDomPerYear)
            ->setFreeDomMax($freeDomMax)
            ->setSharedSSL($sharedSSL)
            ->setSsh($ssh)
            ->setGeoloc($geoloc)
            ->setCgi($cgi)
            ->setCrontab($crontab)
            ->setSip($sip)
            ->setVpn($vpn)
            ->setJabber($jabber);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get webspace value
     * @return int|null
     */
    public function getWebspace()
    {
        return $this->webspace;
    }
    /**
     * Set webspace value
     * @param int $webspace
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setWebspace($webspace = null)
    {
        // validation for constraint: int
        if (!is_null($webspace) && !is_numeric($webspace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($webspace)), __LINE__);
        }
        $this->webspace = $webspace;
        return $this;
    }
    /**
     * Get traffic value
     * @return string|null
     */
    public function getTraffic()
    {
        return $this->traffic;
    }
    /**
     * Set traffic value
     * @param string $traffic
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setTraffic($traffic = null)
    {
        // validation for constraint: string
        if (!is_null($traffic) && !is_string($traffic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($traffic)), __LINE__);
        }
        $this->traffic = $traffic;
        return $this;
    }
    /**
     * Get databases value
     * @return int|null
     */
    public function getDatabases()
    {
        return $this->databases;
    }
    /**
     * Set databases value
     * @param int $databases
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setDatabases($databases = null)
    {
        // validation for constraint: int
        if (!is_null($databases) && !is_numeric($databases)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($databases)), __LINE__);
        }
        $this->databases = $databases;
        return $this;
    }
    /**
     * Get databaseSpace value
     * @return int|null
     */
    public function getDatabaseSpace()
    {
        return $this->databaseSpace;
    }
    /**
     * Set databaseSpace value
     * @param int $databaseSpace
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setDatabaseSpace($databaseSpace = null)
    {
        // validation for constraint: int
        if (!is_null($databaseSpace) && !is_numeric($databaseSpace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($databaseSpace)), __LINE__);
        }
        $this->databaseSpace = $databaseSpace;
        return $this;
    }
    /**
     * Get multidomains value
     * @return int|null
     */
    public function getMultidomains()
    {
        return $this->multidomains;
    }
    /**
     * Set multidomains value
     * @param int $multidomains
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setMultidomains($multidomains = null)
    {
        // validation for constraint: int
        if (!is_null($multidomains) && !is_numeric($multidomains)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($multidomains)), __LINE__);
        }
        $this->multidomains = $multidomains;
        return $this;
    }
    /**
     * Get subdomains value
     * @return int|null
     */
    public function getSubdomains()
    {
        return $this->subdomains;
    }
    /**
     * Set subdomains value
     * @param int $subdomains
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setSubdomains($subdomains = null)
    {
        // validation for constraint: int
        if (!is_null($subdomains) && !is_numeric($subdomains)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($subdomains)), __LINE__);
        }
        $this->subdomains = $subdomains;
        return $this;
    }
    /**
     * Get streaming value
     * @return int|null
     */
    public function getStreaming()
    {
        return $this->streaming;
    }
    /**
     * Set streaming value
     * @param int $streaming
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setStreaming($streaming = null)
    {
        // validation for constraint: int
        if (!is_null($streaming) && !is_numeric($streaming)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($streaming)), __LINE__);
        }
        $this->streaming = $streaming;
        return $this;
    }
    /**
     * Get multiftp value
     * @return int|null
     */
    public function getMultiftp()
    {
        return $this->multiftp;
    }
    /**
     * Set multiftp value
     * @param int $multiftp
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setMultiftp($multiftp = null)
    {
        // validation for constraint: int
        if (!is_null($multiftp) && !is_numeric($multiftp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($multiftp)), __LINE__);
        }
        $this->multiftp = $multiftp;
        return $this;
    }
    /**
     * Get anonymousftp value
     * @return int|null
     */
    public function getAnonymousftp()
    {
        return $this->anonymousftp;
    }
    /**
     * Set anonymousftp value
     * @param int $anonymousftp
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setAnonymousftp($anonymousftp = null)
    {
        // validation for constraint: int
        if (!is_null($anonymousftp) && !is_numeric($anonymousftp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($anonymousftp)), __LINE__);
        }
        $this->anonymousftp = $anonymousftp;
        return $this;
    }
    /**
     * Get freeDomPerYear value
     * @return int|null
     */
    public function getFreeDomPerYear()
    {
        return $this->freeDomPerYear;
    }
    /**
     * Set freeDomPerYear value
     * @param int $freeDomPerYear
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setFreeDomPerYear($freeDomPerYear = null)
    {
        // validation for constraint: int
        if (!is_null($freeDomPerYear) && !is_numeric($freeDomPerYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($freeDomPerYear)), __LINE__);
        }
        $this->freeDomPerYear = $freeDomPerYear;
        return $this;
    }
    /**
     * Get freeDomMax value
     * @return int|null
     */
    public function getFreeDomMax()
    {
        return $this->freeDomMax;
    }
    /**
     * Set freeDomMax value
     * @param int $freeDomMax
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setFreeDomMax($freeDomMax = null)
    {
        // validation for constraint: int
        if (!is_null($freeDomMax) && !is_numeric($freeDomMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($freeDomMax)), __LINE__);
        }
        $this->freeDomMax = $freeDomMax;
        return $this;
    }
    /**
     * Get sharedSSL value
     * @return bool|null
     */
    public function getSharedSSL()
    {
        return $this->sharedSSL;
    }
    /**
     * Set sharedSSL value
     * @param bool $sharedSSL
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setSharedSSL($sharedSSL = null)
    {
        // validation for constraint: boolean
        if (!is_null($sharedSSL) && !is_bool($sharedSSL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sharedSSL)), __LINE__);
        }
        $this->sharedSSL = $sharedSSL;
        return $this;
    }
    /**
     * Get ssh value
     * @return bool|null
     */
    public function getSsh()
    {
        return $this->ssh;
    }
    /**
     * Set ssh value
     * @param bool $ssh
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setSsh($ssh = null)
    {
        // validation for constraint: boolean
        if (!is_null($ssh) && !is_bool($ssh)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ssh)), __LINE__);
        }
        $this->ssh = $ssh;
        return $this;
    }
    /**
     * Get geoloc value
     * @return bool|null
     */
    public function getGeoloc()
    {
        return $this->geoloc;
    }
    /**
     * Set geoloc value
     * @param bool $geoloc
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setGeoloc($geoloc = null)
    {
        // validation for constraint: boolean
        if (!is_null($geoloc) && !is_bool($geoloc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($geoloc)), __LINE__);
        }
        $this->geoloc = $geoloc;
        return $this;
    }
    /**
     * Get cgi value
     * @return bool|null
     */
    public function getCgi()
    {
        return $this->cgi;
    }
    /**
     * Set cgi value
     * @param bool $cgi
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setCgi($cgi = null)
    {
        // validation for constraint: boolean
        if (!is_null($cgi) && !is_bool($cgi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cgi)), __LINE__);
        }
        $this->cgi = $cgi;
        return $this;
    }
    /**
     * Get crontab value
     * @return bool|null
     */
    public function getCrontab()
    {
        return $this->crontab;
    }
    /**
     * Set crontab value
     * @param bool $crontab
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setCrontab($crontab = null)
    {
        // validation for constraint: boolean
        if (!is_null($crontab) && !is_bool($crontab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crontab)), __LINE__);
        }
        $this->crontab = $crontab;
        return $this;
    }
    /**
     * Get sip value
     * @return bool|null
     */
    public function getSip()
    {
        return $this->sip;
    }
    /**
     * Set sip value
     * @param bool $sip
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setSip($sip = null)
    {
        // validation for constraint: boolean
        if (!is_null($sip) && !is_bool($sip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sip)), __LINE__);
        }
        $this->sip = $sip;
        return $this;
    }
    /**
     * Get vpn value
     * @return bool|null
     */
    public function getVpn()
    {
        return $this->vpn;
    }
    /**
     * Set vpn value
     * @param bool $vpn
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setVpn($vpn = null)
    {
        // validation for constraint: boolean
        if (!is_null($vpn) && !is_bool($vpn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vpn)), __LINE__);
        }
        $this->vpn = $vpn;
        return $this;
    }
    /**
     * Get jabber value
     * @return bool|null
     */
    public function getJabber()
    {
        return $this->jabber;
    }
    /**
     * Set jabber value
     * @param bool $jabber
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
     */
    public function setJabber($jabber = null)
    {
        // validation for constraint: boolean
        if (!is_null($jabber) && !is_bool($jabber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($jabber)), __LINE__);
        }
        $this->jabber = $jabber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\HostingGetCapabilitiesReturn
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
