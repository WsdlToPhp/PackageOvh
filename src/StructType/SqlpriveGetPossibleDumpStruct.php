<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveGetPossibleDumpStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveGetPossibleDumpStruct extends AbstractStructBase
{
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The file
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $file;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * Constructor method for sqlpriveGetPossibleDumpStruct
     * @uses SqlpriveGetPossibleDumpStruct::setDate()
     * @uses SqlpriveGetPossibleDumpStruct::setFile()
     * @uses SqlpriveGetPossibleDumpStruct::setComment()
     * @param string $date
     * @param \Ovh\ArrayType\MyArrayOfStringType $file
     * @param string $comment
     */
    public function __construct($date = null, \Ovh\ArrayType\MyArrayOfStringType $file = null, $comment = null)
    {
        $this
            ->setDate($date)
            ->setFile($file)
            ->setComment($comment);
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\SqlpriveGetPossibleDumpStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get file value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * Set file value
     * @param \Ovh\ArrayType\MyArrayOfStringType $file
     * @return \Ovh\StructType\SqlpriveGetPossibleDumpStruct
     */
    public function setFile(\Ovh\ArrayType\MyArrayOfStringType $file = null)
    {
        $this->file = $file;
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
     * @return \Ovh\StructType\SqlpriveGetPossibleDumpStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SqlpriveGetPossibleDumpStruct
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
