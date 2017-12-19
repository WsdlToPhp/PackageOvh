<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookOnSmsContactList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookOnSmsContactList extends AbstractStructBase
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
     * The groupName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $groupName;
    /**
     * Constructor method for telephonyPhonebookOnSmsContactList
     * @uses TelephonyPhonebookOnSmsContactList::setSession()
     * @uses TelephonyPhonebookOnSmsContactList::setSmsAccount()
     * @uses TelephonyPhonebookOnSmsContactList::setId()
     * @uses TelephonyPhonebookOnSmsContactList::setGroupName()
     * @param string $session
     * @param string $smsAccount
     * @param int $id
     * @param string $groupName
     */
    public function __construct($session = null, $smsAccount = null, $id = null, $groupName = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setId($id)
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactList
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactList
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactList
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactList
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
     * @return \PayPal\StructType\TelephonyPhonebookOnSmsContactList
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
