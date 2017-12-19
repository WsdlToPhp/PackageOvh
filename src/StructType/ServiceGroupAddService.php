<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceGroupAddService StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceGroupAddService extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The service
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $service;
    /**
     * The component
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $component;
    /**
     * Constructor method for serviceGroupAddService
     * @uses ServiceGroupAddService::setSession()
     * @uses ServiceGroupAddService::setName()
     * @uses ServiceGroupAddService::setService()
     * @uses ServiceGroupAddService::setComponent()
     * @param string $session
     * @param string $name
     * @param string $service
     * @param string $component
     */
    public function __construct($session = null, $name = null, $service = null, $component = null)
    {
        $this
            ->setSession($session)
            ->setName($name)
            ->setService($service)
            ->setComponent($component);
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
     * @return \Ovh\StructType\ServiceGroupAddService
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
     * @return \Ovh\StructType\ServiceGroupAddService
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
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Ovh\StructType\ServiceGroupAddService
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get component value
     * @return string|null
     */
    public function getComponent()
    {
        return $this->component;
    }
    /**
     * Set component value
     * @param string $component
     * @return \Ovh\StructType\ServiceGroupAddService
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($component)), __LINE__);
        }
        $this->component = $component;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ServiceGroupAddService
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
