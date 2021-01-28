<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $login;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfIntType
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
     * @param \Ovh\ArrayType\MyArrayOfIntType $ids
     */
    public function __construct($smsAccount = null, $login = null, $password = null, \Ovh\ArrayType\MyArrayOfIntType $ids = null)
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
     * @return \Ovh\StructType\TelephonySmsUserDeleteCsvAttachment
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsAccount, true), gettype($smsAccount)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsUserDeleteCsvAttachment
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsUserDeleteCsvAttachment
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get ids value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @param \Ovh\ArrayType\MyArrayOfIntType $ids
     * @return \Ovh\StructType\TelephonySmsUserDeleteCsvAttachment
     */
    public function setIds(\Ovh\ArrayType\MyArrayOfIntType $ids = null)
    {
        $this->ids = $ids;
        return $this;
    }
}
