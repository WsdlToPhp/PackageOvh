<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmSystemOsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmSystemOsStruct extends AbstractStructBase
{
    /**
     * The current
     * @var string
     */
    public $current;
    /**
     * The os
     * @var string
     */
    public $os;
    /**
     * Constructor method for rtmSystemOsStruct
     * @uses RtmSystemOsStruct::setCurrent()
     * @uses RtmSystemOsStruct::setOs()
     * @param string $current
     * @param string $os
     */
    public function __construct($current = null, $os = null)
    {
        $this
            ->setCurrent($current)
            ->setOs($os);
    }
    /**
     * Get current value
     * @return string|null
     */
    public function getCurrent()
    {
        return $this->current;
    }
    /**
     * Set current value
     * @param string $current
     * @return \Ovh\StructType\RtmSystemOsStruct
     */
    public function setCurrent($current = null)
    {
        // validation for constraint: string
        if (!is_null($current) && !is_string($current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($current)), __LINE__);
        }
        $this->current = $current;
        return $this;
    }
    /**
     * Get os value
     * @return string|null
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * Set os value
     * @param string $os
     * @return \Ovh\StructType\RtmSystemOsStruct
     */
    public function setOs($os = null)
    {
        // validation for constraint: string
        if (!is_null($os) && !is_string($os)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($os)), __LINE__);
        }
        $this->os = $os;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmSystemOsStruct
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
