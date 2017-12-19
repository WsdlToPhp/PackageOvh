<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareFamilyStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareFamilyStruct extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The family
     * @var string
     */
    public $family;
    /**
     * The compatibles
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $compatibles;
    /**
     * The spares
     * @var \PayPal\ArrayType\MyArrayOfTelephonySpareDetailStructType
     */
    public $spares;
    /**
     * Constructor method for telephonySpareFamilyStruct
     * @uses TelephonySpareFamilyStruct::setType()
     * @uses TelephonySpareFamilyStruct::setFamily()
     * @uses TelephonySpareFamilyStruct::setCompatibles()
     * @uses TelephonySpareFamilyStruct::setSpares()
     * @param string $type
     * @param string $family
     * @param \PayPal\ArrayType\MyArrayOfStringType $compatibles
     * @param \PayPal\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares
     */
    public function __construct($type = null, $family = null, \PayPal\ArrayType\MyArrayOfStringType $compatibles = null, \PayPal\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares = null)
    {
        $this
            ->setType($type)
            ->setFamily($family)
            ->setCompatibles($compatibles)
            ->setSpares($spares);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\TelephonySpareFamilyStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get family value
     * @return string|null
     */
    public function getFamily()
    {
        return $this->family;
    }
    /**
     * Set family value
     * @param string $family
     * @return \PayPal\StructType\TelephonySpareFamilyStruct
     */
    public function setFamily($family = null)
    {
        // validation for constraint: string
        if (!is_null($family) && !is_string($family)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($family)), __LINE__);
        }
        $this->family = $family;
        return $this;
    }
    /**
     * Get compatibles value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getCompatibles()
    {
        return $this->compatibles;
    }
    /**
     * Set compatibles value
     * @param \PayPal\ArrayType\MyArrayOfStringType $compatibles
     * @return \PayPal\StructType\TelephonySpareFamilyStruct
     */
    public function setCompatibles(\PayPal\ArrayType\MyArrayOfStringType $compatibles = null)
    {
        $this->compatibles = $compatibles;
        return $this;
    }
    /**
     * Get spares value
     * @return \PayPal\ArrayType\MyArrayOfTelephonySpareDetailStructType|null
     */
    public function getSpares()
    {
        return $this->spares;
    }
    /**
     * Set spares value
     * @param \PayPal\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares
     * @return \PayPal\StructType\TelephonySpareFamilyStruct
     */
    public function setSpares(\PayPal\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares = null)
    {
        $this->spares = $spares;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySpareFamilyStruct
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
