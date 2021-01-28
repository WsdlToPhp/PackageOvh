<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyApplicationTypeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyApplicationTypeStruct extends AbstractStructBase
{
    /**
     * The label
     * @var string
     */
    public $label;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for telephonyApplicationTypeStruct
     * @uses TelephonyApplicationTypeStruct::setLabel()
     * @uses TelephonyApplicationTypeStruct::setDescription()
     * @param string $label
     * @param string $description
     */
    public function __construct($label = null, $description = null)
    {
        $this
            ->setLabel($label)
            ->setDescription($description);
    }
    /**
     * Get label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param string $label
     * @return \Ovh\StructType\TelephonyApplicationTypeStruct
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\TelephonyApplicationTypeStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
}
