<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserMultiSend StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserMultiSend extends AbstractStructBase
{
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
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The numberFrom
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberFrom;
    /**
     * The numberTo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $numberTo;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $message;
    /**
     * The smsValidity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsValidity;
    /**
     * The smsClass
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsClass;
    /**
     * The smsDeferred
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsDeferred;
    /**
     * The smsPriority
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsPriority;
    /**
     * The smsCoding
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $smsCoding;
    /**
     * The tag
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tag;
    /**
     * The numberToCsv
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberToCsv;
    /**
     * The noStop
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $noStop;
    /**
     * Constructor method for telephonySmsUserMultiSend
     * @uses TelephonySmsUserMultiSend::setLogin()
     * @uses TelephonySmsUserMultiSend::setPassword()
     * @uses TelephonySmsUserMultiSend::setSmsAccount()
     * @uses TelephonySmsUserMultiSend::setNumberFrom()
     * @uses TelephonySmsUserMultiSend::setNumberTo()
     * @uses TelephonySmsUserMultiSend::setMessage()
     * @uses TelephonySmsUserMultiSend::setSmsValidity()
     * @uses TelephonySmsUserMultiSend::setSmsClass()
     * @uses TelephonySmsUserMultiSend::setSmsDeferred()
     * @uses TelephonySmsUserMultiSend::setSmsPriority()
     * @uses TelephonySmsUserMultiSend::setSmsCoding()
     * @uses TelephonySmsUserMultiSend::setTag()
     * @uses TelephonySmsUserMultiSend::setNumberToCsv()
     * @uses TelephonySmsUserMultiSend::setNoStop()
     * @param string $login
     * @param string $password
     * @param string $smsAccount
     * @param string $numberFrom
     * @param \Ovh\ArrayType\MyArrayOfStringType $numberTo
     * @param string $message
     * @param int $smsValidity
     * @param int $smsClass
     * @param int $smsDeferred
     * @param int $smsPriority
     * @param int $smsCoding
     * @param string $tag
     * @param string $numberToCsv
     * @param bool $noStop
     */
    public function __construct($login = null, $password = null, $smsAccount = null, $numberFrom = null, \Ovh\ArrayType\MyArrayOfStringType $numberTo = null, $message = null, $smsValidity = null, $smsClass = null, $smsDeferred = null, $smsPriority = null, $smsCoding = null, $tag = null, $numberToCsv = null, $noStop = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setSmsAccount($smsAccount)
            ->setNumberFrom($numberFrom)
            ->setNumberTo($numberTo)
            ->setMessage($message)
            ->setSmsValidity($smsValidity)
            ->setSmsClass($smsClass)
            ->setSmsDeferred($smsDeferred)
            ->setSmsPriority($smsPriority)
            ->setSmsCoding($smsCoding)
            ->setTag($tag)
            ->setNumberToCsv($numberToCsv)
            ->setNoStop($noStop);
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
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
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
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
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
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
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
     * Get numberFrom value
     * @return string|null
     */
    public function getNumberFrom()
    {
        return $this->numberFrom;
    }
    /**
     * Set numberFrom value
     * @param string $numberFrom
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setNumberFrom($numberFrom = null)
    {
        // validation for constraint: string
        if (!is_null($numberFrom) && !is_string($numberFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberFrom)), __LINE__);
        }
        $this->numberFrom = $numberFrom;
        return $this;
    }
    /**
     * Get numberTo value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getNumberTo()
    {
        return $this->numberTo;
    }
    /**
     * Set numberTo value
     * @param \Ovh\ArrayType\MyArrayOfStringType $numberTo
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setNumberTo(\Ovh\ArrayType\MyArrayOfStringType $numberTo = null)
    {
        $this->numberTo = $numberTo;
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Get smsValidity value
     * @return int|null
     */
    public function getSmsValidity()
    {
        return $this->smsValidity;
    }
    /**
     * Set smsValidity value
     * @param int $smsValidity
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setSmsValidity($smsValidity = null)
    {
        // validation for constraint: int
        if (!is_null($smsValidity) && !is_numeric($smsValidity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smsValidity)), __LINE__);
        }
        $this->smsValidity = $smsValidity;
        return $this;
    }
    /**
     * Get smsClass value
     * @return int|null
     */
    public function getSmsClass()
    {
        return $this->smsClass;
    }
    /**
     * Set smsClass value
     * @param int $smsClass
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setSmsClass($smsClass = null)
    {
        // validation for constraint: int
        if (!is_null($smsClass) && !is_numeric($smsClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smsClass)), __LINE__);
        }
        $this->smsClass = $smsClass;
        return $this;
    }
    /**
     * Get smsDeferred value
     * @return int|null
     */
    public function getSmsDeferred()
    {
        return $this->smsDeferred;
    }
    /**
     * Set smsDeferred value
     * @param int $smsDeferred
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setSmsDeferred($smsDeferred = null)
    {
        // validation for constraint: int
        if (!is_null($smsDeferred) && !is_numeric($smsDeferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smsDeferred)), __LINE__);
        }
        $this->smsDeferred = $smsDeferred;
        return $this;
    }
    /**
     * Get smsPriority value
     * @return int|null
     */
    public function getSmsPriority()
    {
        return $this->smsPriority;
    }
    /**
     * Set smsPriority value
     * @param int $smsPriority
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setSmsPriority($smsPriority = null)
    {
        // validation for constraint: int
        if (!is_null($smsPriority) && !is_numeric($smsPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smsPriority)), __LINE__);
        }
        $this->smsPriority = $smsPriority;
        return $this;
    }
    /**
     * Get smsCoding value
     * @return int|null
     */
    public function getSmsCoding()
    {
        return $this->smsCoding;
    }
    /**
     * Set smsCoding value
     * @param int $smsCoding
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setSmsCoding($smsCoding = null)
    {
        // validation for constraint: int
        if (!is_null($smsCoding) && !is_numeric($smsCoding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smsCoding)), __LINE__);
        }
        $this->smsCoding = $smsCoding;
        return $this;
    }
    /**
     * Get tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Set tag value
     * @param string $tag
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tag)), __LINE__);
        }
        $this->tag = $tag;
        return $this;
    }
    /**
     * Get numberToCsv value
     * @return string|null
     */
    public function getNumberToCsv()
    {
        return $this->numberToCsv;
    }
    /**
     * Set numberToCsv value
     * @param string $numberToCsv
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setNumberToCsv($numberToCsv = null)
    {
        // validation for constraint: string
        if (!is_null($numberToCsv) && !is_string($numberToCsv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberToCsv)), __LINE__);
        }
        $this->numberToCsv = $numberToCsv;
        return $this;
    }
    /**
     * Get noStop value
     * @return bool|null
     */
    public function getNoStop()
    {
        return $this->noStop;
    }
    /**
     * Set noStop value
     * @param bool $noStop
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
     */
    public function setNoStop($noStop = null)
    {
        // validation for constraint: boolean
        if (!is_null($noStop) && !is_bool($noStop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($noStop)), __LINE__);
        }
        $this->noStop = $noStop;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsUserMultiSend
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
