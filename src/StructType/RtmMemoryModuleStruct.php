<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmMemoryModuleStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmMemoryModuleStruct extends AbstractStructBase
{
    /**
     * The moduleName
     * @var string
     */
    public $moduleName;
    /**
     * The value
     * @var string
     */
    public $value;
    /**
     * Constructor method for rtmMemoryModuleStruct
     * @uses RtmMemoryModuleStruct::setModuleName()
     * @uses RtmMemoryModuleStruct::setValue()
     * @param string $moduleName
     * @param string $value
     */
    public function __construct($moduleName = null, $value = null)
    {
        $this
            ->setModuleName($moduleName)
            ->setValue($value);
    }
    /**
     * Get moduleName value
     * @return string|null
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }
    /**
     * Set moduleName value
     * @param string $moduleName
     * @return \Ovh\StructType\RtmMemoryModuleStruct
     */
    public function setModuleName($moduleName = null)
    {
        // validation for constraint: string
        if (!is_null($moduleName) && !is_string($moduleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleName)), __LINE__);
        }
        $this->moduleName = $moduleName;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Ovh\StructType\RtmMemoryModuleStruct
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmMemoryModuleStruct
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
