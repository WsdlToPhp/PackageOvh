<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingInfoMemberStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingInfoMemberStruct extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The numberInternational
     * @var string
     */
    public $numberInternational;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The logged
     * @var bool
     */
    public $logged;
    /**
     * The noReplyTimer
     * @var int
     */
    public $noReplyTimer;
    /**
     * Constructor method for telephonyHuntingInfoMemberStruct
     * @uses TelephonyHuntingInfoMemberStruct::setNumber()
     * @uses TelephonyHuntingInfoMemberStruct::setNumberInternational()
     * @uses TelephonyHuntingInfoMemberStruct::setStatus()
     * @uses TelephonyHuntingInfoMemberStruct::setLogged()
     * @uses TelephonyHuntingInfoMemberStruct::setNoReplyTimer()
     * @param string $number
     * @param string $numberInternational
     * @param string $status
     * @param bool $logged
     * @param int $noReplyTimer
     */
    public function __construct($number = null, $numberInternational = null, $status = null, $logged = null, $noReplyTimer = null)
    {
        $this
            ->setNumber($number)
            ->setNumberInternational($numberInternational)
            ->setStatus($status)
            ->setLogged($logged)
            ->setNoReplyTimer($noReplyTimer);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Ovh\StructType\TelephonyHuntingInfoMemberStruct
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get numberInternational value
     * @return string|null
     */
    public function getNumberInternational()
    {
        return $this->numberInternational;
    }
    /**
     * Set numberInternational value
     * @param string $numberInternational
     * @return \Ovh\StructType\TelephonyHuntingInfoMemberStruct
     */
    public function setNumberInternational($numberInternational = null)
    {
        // validation for constraint: string
        if (!is_null($numberInternational) && !is_string($numberInternational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberInternational, true), gettype($numberInternational)), __LINE__);
        }
        $this->numberInternational = $numberInternational;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\TelephonyHuntingInfoMemberStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get logged value
     * @return bool|null
     */
    public function getLogged()
    {
        return $this->logged;
    }
    /**
     * Set logged value
     * @param bool $logged
     * @return \Ovh\StructType\TelephonyHuntingInfoMemberStruct
     */
    public function setLogged($logged = null)
    {
        // validation for constraint: boolean
        if (!is_null($logged) && !is_bool($logged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($logged, true), gettype($logged)), __LINE__);
        }
        $this->logged = $logged;
        return $this;
    }
    /**
     * Get noReplyTimer value
     * @return int|null
     */
    public function getNoReplyTimer()
    {
        return $this->noReplyTimer;
    }
    /**
     * Set noReplyTimer value
     * @param int $noReplyTimer
     * @return \Ovh\StructType\TelephonyHuntingInfoMemberStruct
     */
    public function setNoReplyTimer($noReplyTimer = null)
    {
        // validation for constraint: int
        if (!is_null($noReplyTimer) && !(is_int($noReplyTimer) || ctype_digit($noReplyTimer))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noReplyTimer, true), gettype($noReplyTimer)), __LINE__);
        }
        $this->noReplyTimer = $noReplyTimer;
        return $this;
    }
}
