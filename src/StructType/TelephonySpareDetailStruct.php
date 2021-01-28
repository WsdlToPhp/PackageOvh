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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($model, true), gettype($model)), __LINE__);
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
        // validation for constraint: float
        if (!is_null($price_fr) && !(is_float($price_fr) || is_numeric($price_fr))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price_fr, true), gettype($price_fr)), __LINE__);
        }
        $this->price_fr = $price_fr;
        return $this;
    }
}
