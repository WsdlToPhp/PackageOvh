<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlVersion StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlVersion extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $version;
    /**
     * Constructor method for sqlpriveMysqlVersion
     * @uses SqlpriveMysqlVersion::setSession()
     * @uses SqlpriveMysqlVersion::setServer()
     * @uses SqlpriveMysqlVersion::setVersion()
     * @param string $session
     * @param string $server
     * @param string $version
     */
    public function __construct($session = null, $server = null, $version = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setVersion($version);
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
     * @return \PayPal\StructType\SqlpriveMysqlVersion
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
     * Get server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set server value
     * @param string $server
     * @return \PayPal\StructType\SqlpriveMysqlVersion
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->server = $server;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \PayPal\StructType\SqlpriveMysqlVersion
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlVersion
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