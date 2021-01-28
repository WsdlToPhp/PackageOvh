<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRtmListBackdoorStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRtmListBackdoorStruct extends AbstractStructBase
{
    /**
     * The date_email
     * @var string
     */
    public $date_email;
    /**
     * The date_start
     * @var string
     */
    public $date_start;
    /**
     * The date_end
     * @var string
     */
    public $date_end;
    /**
     * The date_today
     * @var string
     */
    public $date_today;
    /**
     * The id
     * @var int
     */
    public $id;
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
     * The do_not_mail
     * @var bool
     */
    public $do_not_mail;
    /**
     * The active
     * @var bool
     */
    public $active;
    /**
     * The status
     * @var int
     */
    public $status;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The cmdline
     * @var string
     */
    public $cmdline;
    /**
     * The port
     * @var int
     */
    public $port;
    /**
     * The ports
     * @var string
     */
    public $ports;
    /**
     * The procname
     * @var string
     */
    public $procname;
    /**
     * The exe
     * @var string
     */
    public $exe;
    /**
     * Constructor method for dedicatedRtmListBackdoorStruct
     * @uses DedicatedRtmListBackdoorStruct::setDate_email()
     * @uses DedicatedRtmListBackdoorStruct::setDate_start()
     * @uses DedicatedRtmListBackdoorStruct::setDate_end()
     * @uses DedicatedRtmListBackdoorStruct::setDate_today()
     * @uses DedicatedRtmListBackdoorStruct::setId()
     * @uses DedicatedRtmListBackdoorStruct::setUid()
     * @uses DedicatedRtmListBackdoorStruct::setPid()
     * @uses DedicatedRtmListBackdoorStruct::setDo_not_mail()
     * @uses DedicatedRtmListBackdoorStruct::setActive()
     * @uses DedicatedRtmListBackdoorStruct::setStatus()
     * @uses DedicatedRtmListBackdoorStruct::setIp()
     * @uses DedicatedRtmListBackdoorStruct::setType()
     * @uses DedicatedRtmListBackdoorStruct::setCmdline()
     * @uses DedicatedRtmListBackdoorStruct::setPort()
     * @uses DedicatedRtmListBackdoorStruct::setPorts()
     * @uses DedicatedRtmListBackdoorStruct::setProcname()
     * @uses DedicatedRtmListBackdoorStruct::setExe()
     * @param string $date_email
     * @param string $date_start
     * @param string $date_end
     * @param string $date_today
     * @param int $id
     * @param string $uid
     * @param int $pid
     * @param bool $do_not_mail
     * @param bool $active
     * @param int $status
     * @param string $ip
     * @param string $type
     * @param string $cmdline
     * @param int $port
     * @param string $ports
     * @param string $procname
     * @param string $exe
     */
    public function __construct($date_email = null, $date_start = null, $date_end = null, $date_today = null, $id = null, $uid = null, $pid = null, $do_not_mail = null, $active = null, $status = null, $ip = null, $type = null, $cmdline = null, $port = null, $ports = null, $procname = null, $exe = null)
    {
        $this
            ->setDate_email($date_email)
            ->setDate_start($date_start)
            ->setDate_end($date_end)
            ->setDate_today($date_today)
            ->setId($id)
            ->setUid($uid)
            ->setPid($pid)
            ->setDo_not_mail($do_not_mail)
            ->setActive($active)
            ->setStatus($status)
            ->setIp($ip)
            ->setType($type)
            ->setCmdline($cmdline)
            ->setPort($port)
            ->setPorts($ports)
            ->setProcname($procname)
            ->setExe($exe);
    }
    /**
     * Get date_email value
     * @return string|null
     */
    public function getDate_email()
    {
        return $this->date_email;
    }
    /**
     * Set date_email value
     * @param string $date_email
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setDate_email($date_email = null)
    {
        // validation for constraint: string
        if (!is_null($date_email) && !is_string($date_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_email, true), gettype($date_email)), __LINE__);
        }
        $this->date_email = $date_email;
        return $this;
    }
    /**
     * Get date_start value
     * @return string|null
     */
    public function getDate_start()
    {
        return $this->date_start;
    }
    /**
     * Set date_start value
     * @param string $date_start
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setDate_start($date_start = null)
    {
        // validation for constraint: string
        if (!is_null($date_start) && !is_string($date_start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_start, true), gettype($date_start)), __LINE__);
        }
        $this->date_start = $date_start;
        return $this;
    }
    /**
     * Get date_end value
     * @return string|null
     */
    public function getDate_end()
    {
        return $this->date_end;
    }
    /**
     * Set date_end value
     * @param string $date_end
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setDate_end($date_end = null)
    {
        // validation for constraint: string
        if (!is_null($date_end) && !is_string($date_end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_end, true), gettype($date_end)), __LINE__);
        }
        $this->date_end = $date_end;
        return $this;
    }
    /**
     * Get date_today value
     * @return string|null
     */
    public function getDate_today()
    {
        return $this->date_today;
    }
    /**
     * Set date_today value
     * @param string $date_today
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setDate_today($date_today = null)
    {
        // validation for constraint: string
        if (!is_null($date_today) && !is_string($date_today)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_today, true), gettype($date_today)), __LINE__);
        }
        $this->date_today = $date_today;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setUid($uid = null)
    {
        // validation for constraint: string
        if (!is_null($uid) && !is_string($uid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uid, true), gettype($uid)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setPid($pid = null)
    {
        // validation for constraint: int
        if (!is_null($pid) && !(is_int($pid) || ctype_digit($pid))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pid, true), gettype($pid)), __LINE__);
        }
        $this->pid = $pid;
        return $this;
    }
    /**
     * Get do_not_mail value
     * @return bool|null
     */
    public function getDo_not_mail()
    {
        return $this->do_not_mail;
    }
    /**
     * Set do_not_mail value
     * @param bool $do_not_mail
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setDo_not_mail($do_not_mail = null)
    {
        // validation for constraint: boolean
        if (!is_null($do_not_mail) && !is_bool($do_not_mail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($do_not_mail, true), gettype($do_not_mail)), __LINE__);
        }
        $this->do_not_mail = $do_not_mail;
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
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setCmdline($cmdline = null)
    {
        // validation for constraint: string
        if (!is_null($cmdline) && !is_string($cmdline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cmdline, true), gettype($cmdline)), __LINE__);
        }
        $this->cmdline = $cmdline;
        return $this;
    }
    /**
     * Get port value
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param int $port
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !(is_int($port) || ctype_digit($port))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($port, true), gettype($port)), __LINE__);
        }
        $this->port = $port;
        return $this;
    }
    /**
     * Get ports value
     * @return string|null
     */
    public function getPorts()
    {
        return $this->ports;
    }
    /**
     * Set ports value
     * @param string $ports
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setPorts($ports = null)
    {
        // validation for constraint: string
        if (!is_null($ports) && !is_string($ports)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ports, true), gettype($ports)), __LINE__);
        }
        $this->ports = $ports;
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
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setProcname($procname = null)
    {
        // validation for constraint: string
        if (!is_null($procname) && !is_string($procname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($procname, true), gettype($procname)), __LINE__);
        }
        $this->procname = $procname;
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
     * @return \Ovh\StructType\DedicatedRtmListBackdoorStruct
     */
    public function setExe($exe = null)
    {
        // validation for constraint: string
        if (!is_null($exe) && !is_string($exe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exe, true), gettype($exe)), __LINE__);
        }
        $this->exe = $exe;
        return $this;
    }
}
