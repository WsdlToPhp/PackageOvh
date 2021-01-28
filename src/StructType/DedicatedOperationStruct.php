<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedOperationStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedOperationStruct extends AbstractStructBase
{
    /**
     * The designation
     * @var string
     */
    public $designation;
    /**
     * The id_designation
     * @var int
     */
    public $id_designation;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The level
     * @var int
     */
    public $level;
    /**
     * Constructor method for dedicatedOperationStruct
     * @uses DedicatedOperationStruct::setDesignation()
     * @uses DedicatedOperationStruct::setId_designation()
     * @uses DedicatedOperationStruct::setDate()
     * @uses DedicatedOperationStruct::setLevel()
     * @param string $designation
     * @param int $id_designation
     * @param string $date
     * @param int $level
     */
    public function __construct($designation = null, $id_designation = null, $date = null, $level = null)
    {
        $this
            ->setDesignation($designation)
            ->setId_designation($id_designation)
            ->setDate($date)
            ->setLevel($level);
    }
    /**
     * Get designation value
     * @return string|null
     */
    public function getDesignation()
    {
        return $this->designation;
    }
    /**
     * Set designation value
     * @param string $designation
     * @return \Ovh\StructType\DedicatedOperationStruct
     */
    public function setDesignation($designation = null)
    {
        // validation for constraint: string
        if (!is_null($designation) && !is_string($designation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($designation, true), gettype($designation)), __LINE__);
        }
        $this->designation = $designation;
        return $this;
    }
    /**
     * Get id_designation value
     * @return int|null
     */
    public function getId_designation()
    {
        return $this->id_designation;
    }
    /**
     * Set id_designation value
     * @param int $id_designation
     * @return \Ovh\StructType\DedicatedOperationStruct
     */
    public function setId_designation($id_designation = null)
    {
        // validation for constraint: int
        if (!is_null($id_designation) && !(is_int($id_designation) || ctype_digit($id_designation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id_designation, true), gettype($id_designation)), __LINE__);
        }
        $this->id_designation = $id_designation;
        return $this;
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
     * @return \Ovh\StructType\DedicatedOperationStruct
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
     * Get level value
     * @return int|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param int $level
     * @return \Ovh\StructType\DedicatedOperationStruct
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !(is_int($level) || ctype_digit($level))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
}
