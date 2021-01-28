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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->disabled = $disabled;
        return $this;
    }
}
