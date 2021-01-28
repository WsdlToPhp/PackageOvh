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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moduleName, true), gettype($moduleName)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
