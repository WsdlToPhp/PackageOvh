<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for secondaryDNSStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SecondaryDNSStruct extends AbstractStructBase
{
    /**
     * The zone
     * @var string
     */
    public $zone;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The nameserver
     * @var string
     */
    public $nameserver;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * The creation
     * @var string
     */
    public $creation;
    /**
     * The deactivation
     * @var string
     */
    public $deactivation;
    /**
     * Constructor method for secondaryDNSStruct
     * @uses SecondaryDNSStruct::setZone()
     * @uses SecondaryDNSStruct::setType()
     * @uses SecondaryDNSStruct::setNameserver()
     * @uses SecondaryDNSStruct::setState()
     * @uses SecondaryDNSStruct::setCreation()
     * @uses SecondaryDNSStruct::setDeactivation()
     * @param string $zone
     * @param string $type
     * @param string $nameserver
     * @param string $state
     * @param string $creation
     * @param string $deactivation
     */
    public function __construct($zone = null, $type = null, $nameserver = null, $state = null, $creation = null, $deactivation = null)
    {
        $this
            ->setZone($zone)
            ->setType($type)
            ->setNameserver($nameserver)
            ->setState($state)
            ->setCreation($creation)
            ->setDeactivation($deactivation);
    }
    /**
     * Get zone value
     * @return string|null
     */
    public function getZone()
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param string $zone
     * @return \Ovh\StructType\SecondaryDNSStruct
     */
    public function setZone($zone = null)
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone, true), gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\SecondaryDNSStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get nameserver value
     * @return string|null
     */
    public function getNameserver()
    {
        return $this->nameserver;
    }
    /**
     * Set nameserver value
     * @param string $nameserver
     * @return \Ovh\StructType\SecondaryDNSStruct
     */
    public function setNameserver($nameserver = null)
    {
        // validation for constraint: string
        if (!is_null($nameserver) && !is_string($nameserver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameserver, true), gettype($nameserver)), __LINE__);
        }
        $this->nameserver = $nameserver;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\SecondaryDNSStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get creation value
     * @return string|null
     */
    public function getCreation()
    {
        return $this->creation;
    }
    /**
     * Set creation value
     * @param string $creation
     * @return \Ovh\StructType\SecondaryDNSStruct
     */
    public function setCreation($creation = null)
    {
        // validation for constraint: string
        if (!is_null($creation) && !is_string($creation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creation, true), gettype($creation)), __LINE__);
        }
        $this->creation = $creation;
        return $this;
    }
    /**
     * Get deactivation value
     * @return string|null
     */
    public function getDeactivation()
    {
        return $this->deactivation;
    }
    /**
     * Set deactivation value
     * @param string $deactivation
     * @return \Ovh\StructType\SecondaryDNSStruct
     */
    public function setDeactivation($deactivation = null)
    {
        // validation for constraint: string
        if (!is_null($deactivation) && !is_string($deactivation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deactivation, true), gettype($deactivation)), __LINE__);
        }
        $this->deactivation = $deactivation;
        return $this;
    }
}
