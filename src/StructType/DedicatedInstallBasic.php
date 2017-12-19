<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallBasic StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallBasic extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The bitFormat
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bitFormat;
    /**
     * The os
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $os;
    /**
     * The sql
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sql;
    /**
     * The customerScriptLink
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $customerScriptLink;
    /**
     * The customerScriptReturn
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $customerScriptReturn;
    /**
     * Constructor method for dedicatedInstallBasic
     * @uses DedicatedInstallBasic::setSession()
     * @uses DedicatedInstallBasic::setHostname()
     * @uses DedicatedInstallBasic::setStatus()
     * @uses DedicatedInstallBasic::setLanguage()
     * @uses DedicatedInstallBasic::setBitFormat()
     * @uses DedicatedInstallBasic::setOs()
     * @uses DedicatedInstallBasic::setSql()
     * @uses DedicatedInstallBasic::setCustomerScriptLink()
     * @uses DedicatedInstallBasic::setCustomerScriptReturn()
     * @param string $session
     * @param string $hostname
     * @param string $status
     * @param string $language
     * @param string $bitFormat
     * @param string $os
     * @param string $sql
     * @param string $customerScriptLink
     * @param string $customerScriptReturn
     */
    public function __construct($session = null, $hostname = null, $status = null, $language = null, $bitFormat = null, $os = null, $sql = null, $customerScriptLink = null, $customerScriptReturn = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setStatus($status)
            ->setLanguage($language)
            ->setBitFormat($bitFormat)
            ->setOs($os)
            ->setSql($sql)
            ->setCustomerScriptLink($customerScriptLink)
            ->setCustomerScriptReturn($customerScriptReturn);
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
     * @return \PayPal\StructType\DedicatedInstallBasic
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
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get bitFormat value
     * @return string|null
     */
    public function getBitFormat()
    {
        return $this->bitFormat;
    }
    /**
     * Set bitFormat value
     * @param string $bitFormat
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setBitFormat($bitFormat = null)
    {
        // validation for constraint: string
        if (!is_null($bitFormat) && !is_string($bitFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bitFormat)), __LINE__);
        }
        $this->bitFormat = $bitFormat;
        return $this;
    }
    /**
     * Get os value
     * @return string|null
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * Set os value
     * @param string $os
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setOs($os = null)
    {
        // validation for constraint: string
        if (!is_null($os) && !is_string($os)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($os)), __LINE__);
        }
        $this->os = $os;
        return $this;
    }
    /**
     * Get sql value
     * @return string|null
     */
    public function getSql()
    {
        return $this->sql;
    }
    /**
     * Set sql value
     * @param string $sql
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setSql($sql = null)
    {
        // validation for constraint: string
        if (!is_null($sql) && !is_string($sql)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sql)), __LINE__);
        }
        $this->sql = $sql;
        return $this;
    }
    /**
     * Get customerScriptLink value
     * @return string|null
     */
    public function getCustomerScriptLink()
    {
        return $this->customerScriptLink;
    }
    /**
     * Set customerScriptLink value
     * @param string $customerScriptLink
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setCustomerScriptLink($customerScriptLink = null)
    {
        // validation for constraint: string
        if (!is_null($customerScriptLink) && !is_string($customerScriptLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerScriptLink)), __LINE__);
        }
        $this->customerScriptLink = $customerScriptLink;
        return $this;
    }
    /**
     * Get customerScriptReturn value
     * @return string|null
     */
    public function getCustomerScriptReturn()
    {
        return $this->customerScriptReturn;
    }
    /**
     * Set customerScriptReturn value
     * @param string $customerScriptReturn
     * @return \PayPal\StructType\DedicatedInstallBasic
     */
    public function setCustomerScriptReturn($customerScriptReturn = null)
    {
        // validation for constraint: string
        if (!is_null($customerScriptReturn) && !is_string($customerScriptReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerScriptReturn)), __LINE__);
        }
        $this->customerScriptReturn = $customerScriptReturn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedInstallBasic
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
