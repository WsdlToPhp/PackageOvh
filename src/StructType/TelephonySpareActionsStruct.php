<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareActionsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareActionsStruct extends AbstractStructBase
{
    /**
     * The toSpare
     * @var bool
     */
    public $toSpare;
    /**
     * The toRma
     * @var bool
     */
    public $toRma;
    /**
     * The rmaType
     * @var string
     */
    public $rmaType;
    /**
     * The toDelete
     * @var bool
     */
    public $toDelete;
    /**
     * Constructor method for telephonySpareActionsStruct
     * @uses TelephonySpareActionsStruct::setToSpare()
     * @uses TelephonySpareActionsStruct::setToRma()
     * @uses TelephonySpareActionsStruct::setRmaType()
     * @uses TelephonySpareActionsStruct::setToDelete()
     * @param bool $toSpare
     * @param bool $toRma
     * @param string $rmaType
     * @param bool $toDelete
     */
    public function __construct($toSpare = null, $toRma = null, $rmaType = null, $toDelete = null)
    {
        $this
            ->setToSpare($toSpare)
            ->setToRma($toRma)
            ->setRmaType($rmaType)
            ->setToDelete($toDelete);
    }
    /**
     * Get toSpare value
     * @return bool|null
     */
    public function getToSpare()
    {
        return $this->toSpare;
    }
    /**
     * Set toSpare value
     * @param bool $toSpare
     * @return \PayPal\StructType\TelephonySpareActionsStruct
     */
    public function setToSpare($toSpare = null)
    {
        // validation for constraint: boolean
        if (!is_null($toSpare) && !is_bool($toSpare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($toSpare)), __LINE__);
        }
        $this->toSpare = $toSpare;
        return $this;
    }
    /**
     * Get toRma value
     * @return bool|null
     */
    public function getToRma()
    {
        return $this->toRma;
    }
    /**
     * Set toRma value
     * @param bool $toRma
     * @return \PayPal\StructType\TelephonySpareActionsStruct
     */
    public function setToRma($toRma = null)
    {
        // validation for constraint: boolean
        if (!is_null($toRma) && !is_bool($toRma)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($toRma)), __LINE__);
        }
        $this->toRma = $toRma;
        return $this;
    }
    /**
     * Get rmaType value
     * @return string|null
     */
    public function getRmaType()
    {
        return $this->rmaType;
    }
    /**
     * Set rmaType value
     * @param string $rmaType
     * @return \PayPal\StructType\TelephonySpareActionsStruct
     */
    public function setRmaType($rmaType = null)
    {
        // validation for constraint: string
        if (!is_null($rmaType) && !is_string($rmaType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rmaType)), __LINE__);
        }
        $this->rmaType = $rmaType;
        return $this;
    }
    /**
     * Get toDelete value
     * @return bool|null
     */
    public function getToDelete()
    {
        return $this->toDelete;
    }
    /**
     * Set toDelete value
     * @param bool $toDelete
     * @return \PayPal\StructType\TelephonySpareActionsStruct
     */
    public function setToDelete($toDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($toDelete) && !is_bool($toDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($toDelete)), __LINE__);
        }
        $this->toDelete = $toDelete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySpareActionsStruct
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
