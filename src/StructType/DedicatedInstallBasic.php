<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * The bitFormat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $bitFormat;
    /**
     * The os
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $os;
    /**
     * The sql
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sql;
    /**
     * The customerScriptLink
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $customerScriptLink;
    /**
     * The customerScriptReturn
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\DedicatedInstallBasic
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setBitFormat($bitFormat = null)
    {
        // validation for constraint: string
        if (!is_null($bitFormat) && !is_string($bitFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bitFormat, true), gettype($bitFormat)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setOs($os = null)
    {
        // validation for constraint: string
        if (!is_null($os) && !is_string($os)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($os, true), gettype($os)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setSql($sql = null)
    {
        // validation for constraint: string
        if (!is_null($sql) && !is_string($sql)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sql, true), gettype($sql)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setCustomerScriptLink($customerScriptLink = null)
    {
        // validation for constraint: string
        if (!is_null($customerScriptLink) && !is_string($customerScriptLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerScriptLink, true), gettype($customerScriptLink)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedInstallBasic
     */
    public function setCustomerScriptReturn($customerScriptReturn = null)
    {
        // validation for constraint: string
        if (!is_null($customerScriptReturn) && !is_string($customerScriptReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerScriptReturn, true), gettype($customerScriptReturn)), __LINE__);
        }
        $this->customerScriptReturn = $customerScriptReturn;
        return $this;
    }
}
