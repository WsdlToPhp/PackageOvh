<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
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
     * Constructor method for telephonyPhonebookStruct
     * @uses TelephonyPhonebookStruct::setId()
     * @uses TelephonyPhonebookStruct::setName()
     * @uses TelephonyPhonebookStruct::setMode()
     * @param int $id
     * @param string $name
     * @param string $mode
     */
    public function __construct($id = null, $name = null, $mode = null)
    {
        $this
            ->setId($id)
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
     * @return \Ovh\StructType\TelephonyPhonebookStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \Ovh\StructType\TelephonyPhonebookStruct
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
     * @return \Ovh\StructType\TelephonyPhonebookStruct
     */
    public function setMode($mode = null)
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
}
