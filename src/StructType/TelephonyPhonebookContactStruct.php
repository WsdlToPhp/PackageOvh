<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookContactStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookContactStruct extends AbstractStructBase
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
     * The surname
     * @var string
     */
    public $surname;
    /**
     * The workPhone
     * @var string
     */
    public $workPhone;
    /**
     * The workMobile
     * @var string
     */
    public $workMobile;
    /**
     * The homePhone
     * @var string
     */
    public $homePhone;
    /**
     * The homeMobile
     * @var string
     */
    public $homeMobile;
    /**
     * The group
     * @var string
     */
    public $group;
    /**
     * Constructor method for telephonyPhonebookContactStruct
     * @uses TelephonyPhonebookContactStruct::setId()
     * @uses TelephonyPhonebookContactStruct::setName()
     * @uses TelephonyPhonebookContactStruct::setSurname()
     * @uses TelephonyPhonebookContactStruct::setWorkPhone()
     * @uses TelephonyPhonebookContactStruct::setWorkMobile()
     * @uses TelephonyPhonebookContactStruct::setHomePhone()
     * @uses TelephonyPhonebookContactStruct::setHomeMobile()
     * @uses TelephonyPhonebookContactStruct::setGroup()
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $workPhone
     * @param string $workMobile
     * @param string $homePhone
     * @param string $homeMobile
     * @param string $group
     */
    public function __construct($id = null, $name = null, $surname = null, $workPhone = null, $workMobile = null, $homePhone = null, $homeMobile = null, $group = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setSurname($surname)
            ->setWorkPhone($workPhone)
            ->setWorkMobile($workMobile)
            ->setHomePhone($homePhone)
            ->setHomeMobile($homeMobile)
            ->setGroup($group);
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
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
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
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
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
     * Get surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        return $this;
    }
    /**
     * Get workPhone value
     * @return string|null
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }
    /**
     * Set workPhone value
     * @param string $workPhone
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
     */
    public function setWorkPhone($workPhone = null)
    {
        // validation for constraint: string
        if (!is_null($workPhone) && !is_string($workPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($workPhone)), __LINE__);
        }
        $this->workPhone = $workPhone;
        return $this;
    }
    /**
     * Get workMobile value
     * @return string|null
     */
    public function getWorkMobile()
    {
        return $this->workMobile;
    }
    /**
     * Set workMobile value
     * @param string $workMobile
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
     */
    public function setWorkMobile($workMobile = null)
    {
        // validation for constraint: string
        if (!is_null($workMobile) && !is_string($workMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($workMobile)), __LINE__);
        }
        $this->workMobile = $workMobile;
        return $this;
    }
    /**
     * Get homePhone value
     * @return string|null
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }
    /**
     * Set homePhone value
     * @param string $homePhone
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
     */
    public function setHomePhone($homePhone = null)
    {
        // validation for constraint: string
        if (!is_null($homePhone) && !is_string($homePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($homePhone)), __LINE__);
        }
        $this->homePhone = $homePhone;
        return $this;
    }
    /**
     * Get homeMobile value
     * @return string|null
     */
    public function getHomeMobile()
    {
        return $this->homeMobile;
    }
    /**
     * Set homeMobile value
     * @param string $homeMobile
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
     */
    public function setHomeMobile($homeMobile = null)
    {
        // validation for constraint: string
        if (!is_null($homeMobile) && !is_string($homeMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($homeMobile)), __LINE__);
        }
        $this->homeMobile = $homeMobile;
        return $this;
    }
    /**
     * Get group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $group
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group)), __LINE__);
        }
        $this->group = $group;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyPhonebookContactStruct
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
