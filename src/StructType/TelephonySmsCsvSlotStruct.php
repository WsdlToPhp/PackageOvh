<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsCsvSlotStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsCsvSlotStruct extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The records
     * @var string
     */
    public $records;
    /**
     * Constructor method for telephonySmsCsvSlotStruct
     * @uses TelephonySmsCsvSlotStruct::setId()
     * @uses TelephonySmsCsvSlotStruct::setName()
     * @uses TelephonySmsCsvSlotStruct::setDate()
     * @uses TelephonySmsCsvSlotStruct::setRecords()
     * @param string $id
     * @param string $name
     * @param string $date
     * @param string $records
     */
    public function __construct($id = null, $name = null, $date = null, $records = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setDate($date)
            ->setRecords($records);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Ovh\StructType\TelephonySmsCsvSlotStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsCsvSlotStruct
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
     * @return \Ovh\StructType\TelephonySmsCsvSlotStruct
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
     * Get records value
     * @return string|null
     */
    public function getRecords()
    {
        return $this->records;
    }
    /**
     * Set records value
     * @param string $records
     * @return \Ovh\StructType\TelephonySmsCsvSlotStruct
     */
    public function setRecords($records = null)
    {
        // validation for constraint: string
        if (!is_null($records) && !is_string($records)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($records)), __LINE__);
        }
        $this->records = $records;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsCsvSlotStruct
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
