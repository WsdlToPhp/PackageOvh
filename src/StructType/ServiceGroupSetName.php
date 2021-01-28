<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceGroupSetName StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceGroupSetName extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The newName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $newName;
    /**
     * Constructor method for serviceGroupSetName
     * @uses ServiceGroupSetName::setSession()
     * @uses ServiceGroupSetName::setName()
     * @uses ServiceGroupSetName::setNewName()
     * @param string $session
     * @param string $name
     * @param string $newName
     */
    public function __construct($session = null, $name = null, $newName = null)
    {
        $this
            ->setSession($session)
            ->setName($name)
            ->setNewName($newName);
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
     * @return \Ovh\StructType\ServiceGroupSetName
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
     * @return \Ovh\StructType\ServiceGroupSetName
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get newName value
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }
    /**
     * Set newName value
     * @param string $newName
     * @return \Ovh\StructType\ServiceGroupSetName
     */
    public function setNewName($newName = null)
    {
        // validation for constraint: string
        if (!is_null($newName) && !is_string($newName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newName, true), gettype($newName)), __LINE__);
        }
        $this->newName = $newName;
        return $this;
    }
}
