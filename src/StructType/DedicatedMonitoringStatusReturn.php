<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringStatusReturn extends AbstractStructBase
{
    /**
     * The disabled
     * @var bool
     */
    public $disabled;
    /**
     * Constructor method for dedicatedMonitoringStatusReturn
     * @uses DedicatedMonitoringStatusReturn::setDisabled()
     * @param bool $disabled
     */
    public function __construct($disabled = null)
    {
        $this
            ->setDisabled($disabled);
    }
    /**
     * Get disabled value
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->disabled;
    }
    /**
     * Set disabled value
     * @param bool $disabled
     * @return \Ovh\StructType\DedicatedMonitoringStatusReturn
     */
    public function setDisabled($disabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedMonitoringStatusReturn
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
