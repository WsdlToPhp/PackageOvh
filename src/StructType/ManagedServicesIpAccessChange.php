<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesIpAccessChange StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesIpAccessChange extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The storage
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $storage;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * The server
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The idZfs
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $idZfs;
    /**
     * Constructor method for managedServicesIpAccessChange
     * @uses ManagedServicesIpAccessChange::setSession()
     * @uses ManagedServicesIpAccessChange::setStorage()
     * @uses ManagedServicesIpAccessChange::setValue()
     * @uses ManagedServicesIpAccessChange::setServer()
     * @uses ManagedServicesIpAccessChange::setIdZfs()
     * @param string $session
     * @param string $storage
     * @param string $value
     * @param string $server
     * @param string $idZfs
     */
    public function __construct($session = null, $storage = null, $value = null, $server = null, $idZfs = null)
    {
        $this
            ->setSession($session)
            ->setStorage($storage)
            ->setValue($value)
            ->setServer($server)
            ->setIdZfs($idZfs);
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
     * @return \PayPal\StructType\ManagedServicesIpAccessChange
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
     * Get storage value
     * @return string|null
     */
    public function getStorage()
    {
        return $this->storage;
    }
    /**
     * Set storage value
     * @param string $storage
     * @return \PayPal\StructType\ManagedServicesIpAccessChange
     */
    public function setStorage($storage = null)
    {
        // validation for constraint: string
        if (!is_null($storage) && !is_string($storage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storage)), __LINE__);
        }
        $this->storage = $storage;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \PayPal\StructType\ManagedServicesIpAccessChange
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
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
     * @return \PayPal\StructType\ManagedServicesIpAccessChange
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
     * Get idZfs value
     * @return string|null
     */
    public function getIdZfs()
    {
        return $this->idZfs;
    }
    /**
     * Set idZfs value
     * @param string $idZfs
     * @return \PayPal\StructType\ManagedServicesIpAccessChange
     */
    public function setIdZfs($idZfs = null)
    {
        // validation for constraint: string
        if (!is_null($idZfs) && !is_string($idZfs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idZfs)), __LINE__);
        }
        $this->idZfs = $idZfs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManagedServicesIpAccessChange
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
