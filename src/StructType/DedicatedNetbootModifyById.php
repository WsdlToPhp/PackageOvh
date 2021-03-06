<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetbootModifyById StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetbootModifyById extends AbstractStructBase
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
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The root
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $root;
    /**
     * The rescueEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rescueEmail;
    /**
     * Constructor method for dedicatedNetbootModifyById
     * @uses DedicatedNetbootModifyById::setSession()
     * @uses DedicatedNetbootModifyById::setHostname()
     * @uses DedicatedNetbootModifyById::setId()
     * @uses DedicatedNetbootModifyById::setRoot()
     * @uses DedicatedNetbootModifyById::setRescueEmail()
     * @param string $session
     * @param string $hostname
     * @param string $id
     * @param string $root
     * @param string $rescueEmail
     */
    public function __construct($session = null, $hostname = null, $id = null, $root = null, $rescueEmail = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setId($id)
            ->setRoot($root)
            ->setRescueEmail($rescueEmail);
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
     * @return \Ovh\StructType\DedicatedNetbootModifyById
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
     * @return \Ovh\StructType\DedicatedNetbootModifyById
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Ovh\StructType\DedicatedNetbootModifyById
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get root value
     * @return string|null
     */
    public function getRoot()
    {
        return $this->root;
    }
    /**
     * Set root value
     * @param string $root
     * @return \Ovh\StructType\DedicatedNetbootModifyById
     */
    public function setRoot($root = null)
    {
        // validation for constraint: string
        if (!is_null($root) && !is_string($root)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($root, true), gettype($root)), __LINE__);
        }
        $this->root = $root;
        return $this;
    }
    /**
     * Get rescueEmail value
     * @return string|null
     */
    public function getRescueEmail()
    {
        return $this->rescueEmail;
    }
    /**
     * Set rescueEmail value
     * @param string $rescueEmail
     * @return \Ovh\StructType\DedicatedNetbootModifyById
     */
    public function setRescueEmail($rescueEmail = null)
    {
        // validation for constraint: string
        if (!is_null($rescueEmail) && !is_string($rescueEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rescueEmail, true), gettype($rescueEmail)), __LINE__);
        }
        $this->rescueEmail = $rescueEmail;
        return $this;
    }
}
