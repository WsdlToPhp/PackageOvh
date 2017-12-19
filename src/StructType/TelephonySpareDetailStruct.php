<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareDetailStruct extends AbstractStructBase
{
    /**
     * The model
     * @var string
     */
    public $model;
    /**
     * The price_fr
     * @var float
     */
    public $price_fr;
    /**
     * Constructor method for telephonySpareDetailStruct
     * @uses TelephonySpareDetailStruct::setModel()
     * @uses TelephonySpareDetailStruct::setPrice_fr()
     * @param string $model
     * @param float $price_fr
     */
    public function __construct($model = null, $price_fr = null)
    {
        $this
            ->setModel($model)
            ->setPrice_fr($price_fr);
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
     * @return \Ovh\StructType\TelephonySpareDetailStruct
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
     * Get price_fr value
     * @return float|null
     */
    public function getPrice_fr()
    {
        return $this->price_fr;
    }
    /**
     * Set price_fr value
     * @param float $price_fr
     * @return \Ovh\StructType\TelephonySpareDetailStruct
     */
    public function setPrice_fr($price_fr = null)
    {
        $this->price_fr = $price_fr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySpareDetailStruct
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
