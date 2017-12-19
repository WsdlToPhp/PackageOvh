<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\SecondaryDNSStruct
     */
    public function setZone($zone = null)
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zone)), __LINE__);
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
     * @return \PayPal\StructType\SecondaryDNSStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
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
     * @return \PayPal\StructType\SecondaryDNSStruct
     */
    public function setNameserver($nameserver = null)
    {
        // validation for constraint: string
        if (!is_null($nameserver) && !is_string($nameserver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameserver)), __LINE__);
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
     * @return \PayPal\StructType\SecondaryDNSStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
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
     * @return \PayPal\StructType\SecondaryDNSStruct
     */
    public function setCreation($creation = null)
    {
        // validation for constraint: string
        if (!is_null($creation) && !is_string($creation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creation)), __LINE__);
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
     * @return \PayPal\StructType\SecondaryDNSStruct
     */
    public function setDeactivation($deactivation = null)
    {
        // validation for constraint: string
        if (!is_null($deactivation) && !is_string($deactivation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deactivation)), __LINE__);
        }
        $this->deactivation = $deactivation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SecondaryDNSStruct
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
