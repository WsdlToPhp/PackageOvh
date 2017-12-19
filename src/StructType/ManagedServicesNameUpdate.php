<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesNameUpdate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesNameUpdate extends AbstractStructBase
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
     * The customName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $customName;
    /**
     * Constructor method for managedServicesNameUpdate
     * @uses ManagedServicesNameUpdate::setSession()
     * @uses ManagedServicesNameUpdate::setStorage()
     * @uses ManagedServicesNameUpdate::setCustomName()
     * @param string $session
     * @param string $storage
     * @param string $customName
     */
    public function __construct($session = null, $storage = null, $customName = null)
    {
        $this
            ->setSession($session)
            ->setStorage($storage)
            ->setCustomName($customName);
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
     * @return \Ovh\StructType\ManagedServicesNameUpdate
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
     * @return \Ovh\StructType\ManagedServicesNameUpdate
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
     * Get customName value
     * @return string|null
     */
    public function getCustomName()
    {
        return $this->customName;
    }
    /**
     * Set customName value
     * @param string $customName
     * @return \Ovh\StructType\ManagedServicesNameUpdate
     */
    public function setCustomName($customName = null)
    {
        // validation for constraint: string
        if (!is_null($customName) && !is_string($customName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customName)), __LINE__);
        }
        $this->customName = $customName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ManagedServicesNameUpdate
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
