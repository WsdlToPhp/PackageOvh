<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiFtpStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiFtpStruct extends AbstractStructBase
{
    /**
     * The subdir
     * @var string
     */
    public $subdir;
    /**
     * The login
     * @var string
     */
    public $login;
    /**
     * Constructor method for multiFtpStruct
     * @uses MultiFtpStruct::setSubdir()
     * @uses MultiFtpStruct::setLogin()
     * @param string $subdir
     * @param string $login
     */
    public function __construct($subdir = null, $login = null)
    {
        $this
            ->setSubdir($subdir)
            ->setLogin($login);
    }
    /**
     * Get subdir value
     * @return string|null
     */
    public function getSubdir()
    {
        return $this->subdir;
    }
    /**
     * Set subdir value
     * @param string $subdir
     * @return \Ovh\StructType\MultiFtpStruct
     */
    public function setSubdir($subdir = null)
    {
        // validation for constraint: string
        if (!is_null($subdir) && !is_string($subdir)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subdir)), __LINE__);
        }
        $this->subdir = $subdir;
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
     * @return \Ovh\StructType\MultiFtpStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\MultiFtpStruct
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
