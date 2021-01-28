<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $compatibles;
    /**
     * The spares
     * @var \Ovh\ArrayType\MyArrayOfTelephonySpareDetailStructType
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $compatibles
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares
     */
    public function __construct($type = null, $family = null, \Ovh\ArrayType\MyArrayOfStringType $compatibles = null, \Ovh\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares = null)
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
     * @return \Ovh\StructType\TelephonySpareFamilyStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareFamilyStruct
     */
    public function setFamily($family = null)
    {
        // validation for constraint: string
        if (!is_null($family) && !is_string($family)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($family, true), gettype($family)), __LINE__);
        }
        $this->family = $family;
        return $this;
    }
    /**
     * Get compatibles value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getCompatibles()
    {
        return $this->compatibles;
    }
    /**
     * Set compatibles value
     * @param \Ovh\ArrayType\MyArrayOfStringType $compatibles
     * @return \Ovh\StructType\TelephonySpareFamilyStruct
     */
    public function setCompatibles(\Ovh\ArrayType\MyArrayOfStringType $compatibles = null)
    {
        $this->compatibles = $compatibles;
        return $this;
    }
    /**
     * Get spares value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySpareDetailStructType|null
     */
    public function getSpares()
    {
        return $this->spares;
    }
    /**
     * Set spares value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares
     * @return \Ovh\StructType\TelephonySpareFamilyStruct
     */
    public function setSpares(\Ovh\ArrayType\MyArrayOfTelephonySpareDetailStructType $spares = null)
    {
        $this->spares = $spares;
        return $this;
    }
}
