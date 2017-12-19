<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for anonymousFtpInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AnonymousFtpInfoReturn extends AbstractStructBase
{
    /**
     * The login
     * @var string
     */
    public $login;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The max
     * @var int
     */
    public $max;
    /**
     * The quota
     * @var int
     */
    public $quota;
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The todo
     * @var bool
     */
    public $todo;
    /**
     * Constructor method for anonymousFtpInfoReturn
     * @uses AnonymousFtpInfoReturn::setLogin()
     * @uses AnonymousFtpInfoReturn::setUrl()
     * @uses AnonymousFtpInfoReturn::setMax()
     * @uses AnonymousFtpInfoReturn::setQuota()
     * @uses AnonymousFtpInfoReturn::setActive()
     * @uses AnonymousFtpInfoReturn::setTodo()
     * @param string $login
     * @param string $url
     * @param int $max
     * @param int $quota
     * @param bool $active
     * @param bool $todo
     */
    public function __construct($login = null, $url = null, $max = null, $quota = null, $active = null, $todo = null)
    {
        $this
            ->setLogin($login)
            ->setUrl($url)
            ->setMax($max)
            ->setQuota($quota)
            ->setActive($active)
            ->setTodo($todo);
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
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
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
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
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
     * Get max value
     * @return int|null
     */
    public function getMax()
    {
        return $this->max;
    }
    /**
     * Set max value
     * @param int $max
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
     */
    public function setMax($max = null)
    {
        // validation for constraint: int
        if (!is_null($max) && !is_numeric($max)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($max)), __LINE__);
        }
        $this->max = $max;
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
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
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
     * Get active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Set active value
     * @param bool $active
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get todo value
     * @return bool|null
     */
    public function getTodo()
    {
        return $this->todo;
    }
    /**
     * Set todo value
     * @param bool $todo
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
     */
    public function setTodo($todo = null)
    {
        // validation for constraint: boolean
        if (!is_null($todo) && !is_bool($todo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($todo)), __LINE__);
        }
        $this->todo = $todo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AnonymousFtpInfoReturn
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
