<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfServiceStructType
     */
    public $details;
    /**
     * Constructor method for serviceGroupStruct
     * @uses ServiceGroupStruct::setName()
     * @uses ServiceGroupStruct::setComment()
     * @uses ServiceGroupStruct::setDetails()
     * @param string $name
     * @param string $comment
     * @param \Ovh\ArrayType\MyArrayOfServiceStructType $details
     */
    public function __construct($name = null, $comment = null, \Ovh\ArrayType\MyArrayOfServiceStructType $details = null)
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
     * @return \Ovh\StructType\ServiceGroupStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \Ovh\StructType\ServiceGroupStruct
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get details value
     * @return \Ovh\ArrayType\MyArrayOfServiceStructType|null
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param \Ovh\ArrayType\MyArrayOfServiceStructType $details
     * @return \Ovh\StructType\ServiceGroupStruct
     */
    public function setDetails(\Ovh\ArrayType\MyArrayOfServiceStructType $details = null)
    {
        $this->details = $details;
        return $this;
    }
}
