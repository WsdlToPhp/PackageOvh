<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceGroupStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceGroupStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The details
     * @var \PayPal\ArrayType\MyArrayOfServiceStructType
     */
    public $details;
    /**
     * Constructor method for serviceGroupStruct
     * @uses ServiceGroupStruct::setName()
     * @uses ServiceGroupStruct::setComment()
     * @uses ServiceGroupStruct::setDetails()
     * @param string $name
     * @param string $comment
     * @param \PayPal\ArrayType\MyArrayOfServiceStructType $details
     */
    public function __construct($name = null, $comment = null, \PayPal\ArrayType\MyArrayOfServiceStructType $details = null)
    {
        $this
            ->setName($name)
            ->setComment($comment)
            ->setDetails($details);
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
     * @return \PayPal\StructType\ServiceGroupStruct
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
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \PayPal\StructType\ServiceGroupStruct
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get details value
     * @return \PayPal\ArrayType\MyArrayOfServiceStructType|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param \PayPal\ArrayType\MyArrayOfServiceStructType $details
     * @return \PayPal\StructType\ServiceGroupStruct
     */
    public function setDetails(\PayPal\ArrayType\MyArrayOfServiceStructType $details = null)
    {
        $this->details = $details;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ServiceGroupStruct
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
