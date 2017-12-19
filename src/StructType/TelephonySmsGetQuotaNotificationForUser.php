<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsGetQuotaNotificationForUser StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsGetQuotaNotificationForUser extends AbstractStructBase
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
     * Constructor method for telephonySmsGetQuotaNotificationForUser
     * @uses TelephonySmsGetQuotaNotificationForUser::setSmsAccount()
     * @uses TelephonySmsGetQuotaNotificationForUser::setLogin()
     * @uses TelephonySmsGetQuotaNotificationForUser::setPassword()
     * @param string $smsAccount
     * @param string $login
     * @param string $password
     */
    public function __construct($smsAccount = null, $login = null, $password = null)
    {
        $this
            ->setSmsAccount($smsAccount)
            ->setLogin($login)
            ->setPassword($password);
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
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUser
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
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUser
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
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUser
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsGetQuotaNotificationForUser
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
