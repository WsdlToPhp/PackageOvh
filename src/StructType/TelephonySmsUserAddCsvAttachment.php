<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserAddCsvAttachment StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserAddCsvAttachment extends AbstractStructBase
{
    /**
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The login
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $login;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The csvUrl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $csvUrl;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
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
     * Constructor method for telephonySmsUserAddCsvAttachment
     * @uses TelephonySmsUserAddCsvAttachment::setSmsAccount()
     * @uses TelephonySmsUserAddCsvAttachment::setLogin()
     * @uses TelephonySmsUserAddCsvAttachment::setPassword()
     * @uses TelephonySmsUserAddCsvAttachment::setCsvUrl()
     * @uses TelephonySmsUserAddCsvAttachment::setId()
     * @uses TelephonySmsUserAddCsvAttachment::setName()
     * @param string $smsAccount
     * @param string $login
     * @param string $password
     * @param string $csvUrl
     * @param string $id
     * @param string $name
     */
    public function __construct($smsAccount = null, $login = null, $password = null, $csvUrl = null, $id = null, $name = null)
    {
        $this
            ->setSmsAccount($smsAccount)
            ->setLogin($login)
            ->setPassword($password)
            ->setCsvUrl($csvUrl)
            ->setId($id)
            ->setName($name);
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
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
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
     * Get login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($login)), __LINE__);
        }
        $this->login = $login;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get csvUrl value
     * @return string|null
     */
    public function getCsvUrl()
    {
        return $this->csvUrl;
    }
    /**
     * Set csvUrl value
     * @param string $csvUrl
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
     */
    public function setCsvUrl($csvUrl = null)
    {
        // validation for constraint: string
        if (!is_null($csvUrl) && !is_string($csvUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($csvUrl)), __LINE__);
        }
        $this->csvUrl = $csvUrl;
        return $this;
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
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
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
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsUserAddCsvAttachment
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
