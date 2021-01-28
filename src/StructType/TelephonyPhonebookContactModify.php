<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookContactModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookContactModify extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The surname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * The workPhone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $workPhone;
    /**
     * The workMobile
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $workMobile;
    /**
     * The homePhone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $homePhone;
    /**
     * The homeMobile
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $homeMobile;
    /**
     * The group
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $group;
    /**
     * Constructor method for telephonyPhonebookContactModify
     * @uses TelephonyPhonebookContactModify::setSession()
     * @uses TelephonyPhonebookContactModify::setNumber()
     * @uses TelephonyPhonebookContactModify::setCountry()
     * @uses TelephonyPhonebookContactModify::setId()
     * @uses TelephonyPhonebookContactModify::setName()
     * @uses TelephonyPhonebookContactModify::setSurname()
     * @uses TelephonyPhonebookContactModify::setWorkPhone()
     * @uses TelephonyPhonebookContactModify::setWorkMobile()
     * @uses TelephonyPhonebookContactModify::setHomePhone()
     * @uses TelephonyPhonebookContactModify::setHomeMobile()
     * @uses TelephonyPhonebookContactModify::setGroup()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $workPhone
     * @param string $workMobile
     * @param string $homePhone
     * @param string $homeMobile
     * @param string $group
     */
    public function __construct($session = null, $number = null, $country = null, $id = null, $name = null, $surname = null, $workPhone = null, $workMobile = null, $homePhone = null, $homeMobile = null, $group = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
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
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setWorkPhone($workPhone = null)
    {
        // validation for constraint: string
        if (!is_null($workPhone) && !is_string($workPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workPhone, true), gettype($workPhone)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setWorkMobile($workMobile = null)
    {
        // validation for constraint: string
        if (!is_null($workMobile) && !is_string($workMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workMobile, true), gettype($workMobile)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setHomePhone($homePhone = null)
    {
        // validation for constraint: string
        if (!is_null($homePhone) && !is_string($homePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homePhone, true), gettype($homePhone)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setHomeMobile($homeMobile = null)
    {
        // validation for constraint: string
        if (!is_null($homeMobile) && !is_string($homeMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($homeMobile, true), gettype($homeMobile)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyPhonebookContactModify
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        return $this;
    }
}
