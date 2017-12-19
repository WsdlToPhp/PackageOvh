<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmCpuLoadAvgStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmCpuLoadAvgStruct extends AbstractStructBase
{
    /**
     * The loadavg1
     * @var string
     */
    public $loadavg1;
    /**
     * The loadavg5
     * @var string
     */
    public $loadavg5;
    /**
     * The loadavg15
     * @var string
     */
    public $loadavg15;
    /**
     * Constructor method for rtmCpuLoadAvgStruct
     * @uses RtmCpuLoadAvgStruct::setLoadavg1()
     * @uses RtmCpuLoadAvgStruct::setLoadavg5()
     * @uses RtmCpuLoadAvgStruct::setLoadavg15()
     * @param string $loadavg1
     * @param string $loadavg5
     * @param string $loadavg15
     */
    public function __construct($loadavg1 = null, $loadavg5 = null, $loadavg15 = null)
    {
        $this
            ->setLoadavg1($loadavg1)
            ->setLoadavg5($loadavg5)
            ->setLoadavg15($loadavg15);
    }
    /**
     * Get loadavg1 value
     * @return string|null
     */
    public function getLoadavg1()
    {
        return $this->loadavg1;
    }
    /**
     * Set loadavg1 value
     * @param string $loadavg1
     * @return \PayPal\StructType\RtmCpuLoadAvgStruct
     */
    public function setLoadavg1($loadavg1 = null)
    {
        // validation for constraint: string
        if (!is_null($loadavg1) && !is_string($loadavg1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loadavg1)), __LINE__);
        }
        $this->loadavg1 = $loadavg1;
        return $this;
    }
    /**
     * Get loadavg5 value
     * @return string|null
     */
    public function getLoadavg5()
    {
        return $this->loadavg5;
    }
    /**
     * Set loadavg5 value
     * @param string $loadavg5
     * @return \PayPal\StructType\RtmCpuLoadAvgStruct
     */
    public function setLoadavg5($loadavg5 = null)
    {
        // validation for constraint: string
        if (!is_null($loadavg5) && !is_string($loadavg5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loadavg5)), __LINE__);
        }
        $this->loadavg5 = $loadavg5;
        return $this;
    }
    /**
     * Get loadavg15 value
     * @return string|null
     */
    public function getLoadavg15()
    {
        return $this->loadavg15;
    }
    /**
     * Set loadavg15 value
     * @param string $loadavg15
     * @return \PayPal\StructType\RtmCpuLoadAvgStruct
     */
    public function setLoadavg15($loadavg15 = null)
    {
        // validation for constraint: string
        if (!is_null($loadavg15) && !is_string($loadavg15)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loadavg15)), __LINE__);
        }
        $this->loadavg15 = $loadavg15;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RtmCpuLoadAvgStruct
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
