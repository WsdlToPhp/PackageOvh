<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnSmsContactModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnSmsContactModify extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The surname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $surname;
    /**
     * The workPhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $workPhone;
    /**
     * The workMobile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $workMobile;
    /**
     * The homePhone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $homePhone;
    /**
     * The homeMobile
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $homeMobile;
    /**
     * The groupName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $groupName;
    /**
     * Constructor method for telephonyPhonebookOnSmsContactModify
     * @uses TelephonyPhonebookOnSmsContactModify::setSession()
     * @uses TelephonyPhonebookOnSmsContactModify::setSmsAccount()
     * @uses TelephonyPhonebookOnSmsContactModify::setId()
     * @uses TelephonyPhonebookOnSmsContactModify::setName()
     * @uses TelephonyPhonebookOnSmsContactModify::setSurname()
     * @uses TelephonyPhonebookOnSmsContactModify::setWorkPhone()
     * @uses TelephonyPhonebookOnSmsContactModify::setWorkMobile()
     * @uses TelephonyPhonebookOnSmsContactModify::setHomePhone()
     * @uses TelephonyPhonebookOnSmsContactModify::setHomeMobile()
     * @uses TelephonyPhonebookOnSmsContactModify::setGroupName()
     * @param string $session
     * @param string $smsAccount
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param string $workPhone
     * @param string $workMobile
     * @param string $homePhone
     * @param string $homeMobile
     * @param string $groupName
     */
    public function __construct($session = null, $smsAccount = null, $id = null, $name = null, $surname = null, $workPhone = null, $workMobile = null, $homePhone = null, $homeMobile = null, $groupName = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setId($id)
            ->setName($name)
            ->setSurname($surname)
            ->setWorkPhone($workPhone)
            ->setWorkMobile($workMobile)
            ->setHomePhone($homePhone)
            ->setHomeMobile($homeMobile)
            ->setGroupName($groupName);
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get smsAccount value
     * @return string|null
     */
    public function getSmsAccount()
    {
        return $this->smsAccount;
    }
    /**
     * Set smsAccount value
     * @param string $smsAccount
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
     * Get groupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param string $groupName
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactModify
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
