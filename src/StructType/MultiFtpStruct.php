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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdir, true), gettype($subdir)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->login = $login;
        return $this;
    }
}
