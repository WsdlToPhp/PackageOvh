<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmMotherboardStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmMotherboardStruct extends AbstractStructBase
{
    /**
     * The manufacture
     * @var string
     */
    public $manufacture;
    /**
     * The modelName
     * @var string
     */
    public $modelName;
    /**
     * Constructor method for rtmMotherboardStruct
     * @uses RtmMotherboardStruct::setManufacture()
     * @uses RtmMotherboardStruct::setModelName()
     * @param string $manufacture
     * @param string $modelName
     */
    public function __construct($manufacture = null, $modelName = null)
    {
        $this
            ->setManufacture($manufacture)
            ->setModelName($modelName);
    }
    /**
     * Get manufacture value
     * @return string|null
     */
    public function getManufacture()
    {
        return $this->manufacture;
    }
    /**
     * Set manufacture value
     * @param string $manufacture
     * @return \Ovh\StructType\RtmMotherboardStruct
     */
    public function setManufacture($manufacture = null)
    {
        // validation for constraint: string
        if (!is_null($manufacture) && !is_string($manufacture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manufacture, true), gettype($manufacture)), __LINE__);
        }
        $this->manufacture = $manufacture;
        return $this;
    }
    /**
     * Get modelName value
     * @return string|null
     */
    public function getModelName()
    {
        return $this->modelName;
    }
    /**
     * Set modelName value
     * @param string $modelName
     * @return \Ovh\StructType\RtmMotherboardStruct
     */
    public function setModelName($modelName = null)
    {
        // validation for constraint: string
        if (!is_null($modelName) && !is_string($modelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modelName, true), gettype($modelName)), __LINE__);
        }
        $this->modelName = $modelName;
        return $this;
    }
}
