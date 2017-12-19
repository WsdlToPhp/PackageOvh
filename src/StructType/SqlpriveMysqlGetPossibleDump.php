<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlGetPossibleDump StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlGetPossibleDump extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The directory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $directory;
    /**
     * Constructor method for sqlpriveMysqlGetPossibleDump
     * @uses SqlpriveMysqlGetPossibleDump::setSession()
     * @uses SqlpriveMysqlGetPossibleDump::setServer()
     * @uses SqlpriveMysqlGetPossibleDump::setDirectory()
     * @param string $session
     * @param string $server
     * @param string $directory
     */
    public function __construct($session = null, $server = null, $directory = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setDirectory($directory);
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
     * @return \PayPal\StructType\SqlpriveMysqlGetPossibleDump
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
     * Get server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set server value
     * @param string $server
     * @return \PayPal\StructType\SqlpriveMysqlGetPossibleDump
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->server = $server;
        return $this;
    }
    /**
     * Get directory value
     * @return string|null
     */
    public function getDirectory()
    {
        return $this->directory;
    }
    /**
     * Set directory value
     * @param string $directory
     * @return \PayPal\StructType\SqlpriveMysqlGetPossibleDump
     */
    public function setDirectory($directory = null)
    {
        // validation for constraint: string
        if (!is_null($directory) && !is_string($directory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directory)), __LINE__);
        }
        $this->directory = $directory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlGetPossibleDump
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
