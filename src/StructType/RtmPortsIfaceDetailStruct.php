<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmPortsIfaceDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmPortsIfaceDetailStruct extends AbstractStructBase
{
    /**
     * The port
     * @var string
     */
    public $port;
    /**
     * The procname
     * @var string
     */
    public $procname;
    /**
     * The uid
     * @var string
     */
    public $uid;
    /**
     * The pid
     * @var int
     */
    public $pid;
    /**
     * The cmdline
     * @var string
     */
    public $cmdline;
    /**
     * The exe
     * @var string
     */
    public $exe;
    /**
     * The username
     * @var string
     */
    public $username;
    /**
     * Constructor method for rtmPortsIfaceDetailStruct
     * @uses RtmPortsIfaceDetailStruct::setPort()
     * @uses RtmPortsIfaceDetailStruct::setProcname()
     * @uses RtmPortsIfaceDetailStruct::setUid()
     * @uses RtmPortsIfaceDetailStruct::setPid()
     * @uses RtmPortsIfaceDetailStruct::setCmdline()
     * @uses RtmPortsIfaceDetailStruct::setExe()
     * @uses RtmPortsIfaceDetailStruct::setUsername()
     * @param string $port
     * @param string $procname
     * @param string $uid
     * @param int $pid
     * @param string $cmdline
     * @param string $exe
     * @param string $username
     */
    public function __construct($port = null, $procname = null, $uid = null, $pid = null, $cmdline = null, $exe = null, $username = null)
    {
        $this
            ->setPort($port)
            ->setProcname($procname)
            ->setUid($uid)
            ->setPid($pid)
            ->setCmdline($cmdline)
            ->setExe($exe)
            ->setUsername($username);
    }
    /**
     * Get port value
     * @return string|null
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param string $port
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setPort($port = null)
    {
        // validation for constraint: string
        if (!is_null($port) && !is_string($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($port)), __LINE__);
        }
        $this->port = $port;
        return $this;
    }
    /**
     * Get procname value
     * @return string|null
     */
    public function getProcname()
    {
        return $this->procname;
    }
    /**
     * Set procname value
     * @param string $procname
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setProcname($procname = null)
    {
        // validation for constraint: string
        if (!is_null($procname) && !is_string($procname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($procname)), __LINE__);
        }
        $this->procname = $procname;
        return $this;
    }
    /**
     * Get uid value
     * @return string|null
     */
    public function getUid()
    {
        return $this->uid;
    }
    /**
     * Set uid value
     * @param string $uid
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setUid($uid = null)
    {
        // validation for constraint: string
        if (!is_null($uid) && !is_string($uid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uid)), __LINE__);
        }
        $this->uid = $uid;
        return $this;
    }
    /**
     * Get pid value
     * @return int|null
     */
    public function getPid()
    {
        return $this->pid;
    }
    /**
     * Set pid value
     * @param int $pid
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setPid($pid = null)
    {
        // validation for constraint: int
        if (!is_null($pid) && !is_numeric($pid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pid)), __LINE__);
        }
        $this->pid = $pid;
        return $this;
    }
    /**
     * Get cmdline value
     * @return string|null
     */
    public function getCmdline()
    {
        return $this->cmdline;
    }
    /**
     * Set cmdline value
     * @param string $cmdline
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setCmdline($cmdline = null)
    {
        // validation for constraint: string
        if (!is_null($cmdline) && !is_string($cmdline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cmdline)), __LINE__);
        }
        $this->cmdline = $cmdline;
        return $this;
    }
    /**
     * Get exe value
     * @return string|null
     */
    public function getExe()
    {
        return $this->exe;
    }
    /**
     * Set exe value
     * @param string $exe
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setExe($exe = null)
    {
        // validation for constraint: string
        if (!is_null($exe) && !is_string($exe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exe)), __LINE__);
        }
        $this->exe = $exe;
        return $this;
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->username = $username;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmPortsIfaceDetailStruct
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
