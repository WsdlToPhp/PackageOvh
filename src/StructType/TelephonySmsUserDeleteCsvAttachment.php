<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserDeleteCsvAttachment StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserDeleteCsvAttachment extends AbstractStructBase
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
     * The ids
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfIntType
     */
    public $ids;
    /**
     * Constructor method for telephonySmsUserDeleteCsvAttachment
     * @uses TelephonySmsUserDeleteCsvAttachment::setSmsAccount()
     * @uses TelephonySmsUserDeleteCsvAttachment::setLogin()
     * @uses TelephonySmsUserDeleteCsvAttachment::setPassword()
     * @uses TelephonySmsUserDeleteCsvAttachment::setIds()
     * @param string $smsAccount
     * @param string $login
     * @param string $password
     * @param \PayPal\ArrayType\MyArrayOfIntType $ids
     */
    public function __construct($smsAccount = null, $login = null, $password = null, \PayPal\ArrayType\MyArrayOfIntType $ids = null)
    {
        $this
            ->setSmsAccount($smsAccount)
            ->setLogin($login)
            ->setPassword($password)
            ->setIds($ids);
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
     * @return \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment
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
     * @return \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment
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
     * @return \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment
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
     * Get ids value
     * @return \PayPal\ArrayType\MyArrayOfIntType|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @param \PayPal\ArrayType\MyArrayOfIntType $ids
     * @return \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment
     */
    public function setIds(\PayPal\ArrayType\MyArrayOfIntType $ids = null)
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsUserDeleteCsvAttachment
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
