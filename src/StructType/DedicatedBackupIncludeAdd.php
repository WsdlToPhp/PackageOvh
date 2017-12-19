<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupIncludeAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupIncludeAdd extends AbstractStructBase
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
     * The backupId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $backupId;
    /**
     * The include
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $include;
    /**
     * Constructor method for dedicatedBackupIncludeAdd
     * @uses DedicatedBackupIncludeAdd::setSession()
     * @uses DedicatedBackupIncludeAdd::setHostname()
     * @uses DedicatedBackupIncludeAdd::setBackupId()
     * @uses DedicatedBackupIncludeAdd::setInclude()
     * @param string $session
     * @param string $hostname
     * @param string $backupId
     * @param string $include
     */
    public function __construct($session = null, $hostname = null, $backupId = null, $include = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackupId($backupId)
            ->setInclude($include);
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
     * @return \PayPal\StructType\DedicatedBackupIncludeAdd
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
     * @return \PayPal\StructType\DedicatedBackupIncludeAdd
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
     * Get backupId value
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->backupId;
    }
    /**
     * Set backupId value
     * @param string $backupId
     * @return \PayPal\StructType\DedicatedBackupIncludeAdd
     */
    public function setBackupId($backupId = null)
    {
        // validation for constraint: string
        if (!is_null($backupId) && !is_string($backupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backupId)), __LINE__);
        }
        $this->backupId = $backupId;
        return $this;
    }
    /**
     * Get include value
     * @return string|null
     */
    public function getInclude()
    {
        return $this->include;
    }
    /**
     * Set include value
     * @param string $include
     * @return \PayPal\StructType\DedicatedBackupIncludeAdd
     */
    public function setInclude($include = null)
    {
        // validation for constraint: string
        if (!is_null($include) && !is_string($include)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($include)), __LINE__);
        }
        $this->include = $include;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedBackupIncludeAdd
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
