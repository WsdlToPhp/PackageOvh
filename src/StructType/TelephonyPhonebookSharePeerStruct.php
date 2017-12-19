<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookSharePeerStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookSharePeerStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The mode
     * @var string
     */
    public $mode;
    /**
     * Constructor method for telephonyPhonebookSharePeerStruct
     * @uses TelephonyPhonebookSharePeerStruct::setId()
     * @uses TelephonyPhonebookSharePeerStruct::setNumber()
     * @uses TelephonyPhonebookSharePeerStruct::setName()
     * @uses TelephonyPhonebookSharePeerStruct::setMode()
     * @param int $id
     * @param string $number
     * @param string $name
     * @param string $mode
     */
    public function __construct($id = null, $number = null, $name = null, $mode = null)
    {
        $this
            ->setId($id)
            ->setNumber($number)
            ->setName($name)
            ->setMode($mode);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \PayPal\StructType\TelephonyPhonebookSharePeerStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonyPhonebookSharePeerStruct
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\TelephonyPhonebookSharePeerStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \PayPal\StructType\TelephonyPhonebookSharePeerStruct
     */
    public function setMode($mode = null)
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyPhonebookSharePeerStruct
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
