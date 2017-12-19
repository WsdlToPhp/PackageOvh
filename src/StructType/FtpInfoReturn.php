<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ftpInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FtpInfoReturn extends AbstractStructBase
{
    /**
     * The login
     * @var string
     */
    public $login;
    /**
     * The quota
     * @var int
     */
    public $quota;
    /**
     * The maxQuota
     * @var int
     */
    public $maxQuota;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The hostedOn
     * @var string
     */
    public $hostedOn;
    /**
     * The isTodo
     * @var string
     */
    public $isTodo;
    /**
     * The highCapacity
     * @var bool
     */
    public $highCapacity;
    /**
     * The highSecurity
     * @var bool
     */
    public $highSecurity;
    /**
     * Constructor method for ftpInfoReturn
     * @uses FtpInfoReturn::setLogin()
     * @uses FtpInfoReturn::setQuota()
     * @uses FtpInfoReturn::setMaxQuota()
     * @uses FtpInfoReturn::setUrl()
     * @uses FtpInfoReturn::setHostedOn()
     * @uses FtpInfoReturn::setIsTodo()
     * @uses FtpInfoReturn::setHighCapacity()
     * @uses FtpInfoReturn::setHighSecurity()
     * @param string $login
     * @param int $quota
     * @param int $maxQuota
     * @param string $url
     * @param string $hostedOn
     * @param string $isTodo
     * @param bool $highCapacity
     * @param bool $highSecurity
     */
    public function __construct($login = null, $quota = null, $maxQuota = null, $url = null, $hostedOn = null, $isTodo = null, $highCapacity = null, $highSecurity = null)
    {
        $this
            ->setLogin($login)
            ->setQuota($quota)
            ->setMaxQuota($maxQuota)
            ->setUrl($url)
            ->setHostedOn($hostedOn)
            ->setIsTodo($isTodo)
            ->setHighCapacity($highCapacity)
            ->setHighSecurity($highSecurity);
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
     * @return \PayPal\StructType\FtpInfoReturn
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
     * Get quota value
     * @return int|null
     */
    public function getQuota()
    {
        return $this->quota;
    }
    /**
     * Set quota value
     * @param int $quota
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setQuota($quota = null)
    {
        // validation for constraint: int
        if (!is_null($quota) && !is_numeric($quota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quota)), __LINE__);
        }
        $this->quota = $quota;
        return $this;
    }
    /**
     * Get maxQuota value
     * @return int|null
     */
    public function getMaxQuota()
    {
        return $this->maxQuota;
    }
    /**
     * Set maxQuota value
     * @param int $maxQuota
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setMaxQuota($maxQuota = null)
    {
        // validation for constraint: int
        if (!is_null($maxQuota) && !is_numeric($maxQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxQuota)), __LINE__);
        }
        $this->maxQuota = $maxQuota;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Get hostedOn value
     * @return string|null
     */
    public function getHostedOn()
    {
        return $this->hostedOn;
    }
    /**
     * Set hostedOn value
     * @param string $hostedOn
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setHostedOn($hostedOn = null)
    {
        // validation for constraint: string
        if (!is_null($hostedOn) && !is_string($hostedOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostedOn)), __LINE__);
        }
        $this->hostedOn = $hostedOn;
        return $this;
    }
    /**
     * Get isTodo value
     * @return string|null
     */
    public function getIsTodo()
    {
        return $this->isTodo;
    }
    /**
     * Set isTodo value
     * @param string $isTodo
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setIsTodo($isTodo = null)
    {
        // validation for constraint: string
        if (!is_null($isTodo) && !is_string($isTodo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($isTodo)), __LINE__);
        }
        $this->isTodo = $isTodo;
        return $this;
    }
    /**
     * Get highCapacity value
     * @return bool|null
     */
    public function getHighCapacity()
    {
        return $this->highCapacity;
    }
    /**
     * Set highCapacity value
     * @param bool $highCapacity
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setHighCapacity($highCapacity = null)
    {
        // validation for constraint: boolean
        if (!is_null($highCapacity) && !is_bool($highCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($highCapacity)), __LINE__);
        }
        $this->highCapacity = $highCapacity;
        return $this;
    }
    /**
     * Get highSecurity value
     * @return bool|null
     */
    public function getHighSecurity()
    {
        return $this->highSecurity;
    }
    /**
     * Set highSecurity value
     * @param bool $highSecurity
     * @return \PayPal\StructType\FtpInfoReturn
     */
    public function setHighSecurity($highSecurity = null)
    {
        // validation for constraint: boolean
        if (!is_null($highSecurity) && !is_bool($highSecurity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($highSecurity)), __LINE__);
        }
        $this->highSecurity = $highSecurity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FtpInfoReturn
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
