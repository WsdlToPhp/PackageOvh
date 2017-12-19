<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareCapabilities StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareCapabilities extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The family
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $family;
    /**
     * The model
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $model;
    /**
     * Constructor method for telephonySpareCapabilities
     * @uses TelephonySpareCapabilities::setSession()
     * @uses TelephonySpareCapabilities::setType()
     * @uses TelephonySpareCapabilities::setFamily()
     * @uses TelephonySpareCapabilities::setModel()
     * @param string $session
     * @param string $type
     * @param string $family
     * @param string $model
     */
    public function __construct($session = null, $type = null, $family = null, $model = null)
    {
        $this
            ->setSession($session)
            ->setType($type)
            ->setFamily($family)
            ->setModel($model);
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
     * @return \Ovh\StructType\TelephonySpareCapabilities
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
     * @return \Ovh\StructType\TelephonySpareCapabilities
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
     * Get family value
     * @return string|null
     */
    public function getFamily()
    {
        return $this->family;
    }
    /**
     * Set family value
     * @param string $family
     * @return \Ovh\StructType\TelephonySpareCapabilities
     */
    public function setFamily($family = null)
    {
        // validation for constraint: string
        if (!is_null($family) && !is_string($family)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($family)), __LINE__);
        }
        $this->family = $family;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \Ovh\StructType\TelephonySpareCapabilities
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySpareCapabilities
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
