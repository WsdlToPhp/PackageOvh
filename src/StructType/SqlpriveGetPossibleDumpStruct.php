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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
}
