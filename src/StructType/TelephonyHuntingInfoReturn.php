<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingInfoReturn extends AbstractStructBase
{
    /**
     * The members
     * @var \Ovh\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType
     */
    public $members;
    /**
     * The strategy
     * @var string
     */
    public $strategy;
    /**
     * The pattern
     * @var string
     */
    public $pattern;
    /**
     * The onHoldTimer
     * @var int
     */
    public $onHoldTimer;
    /**
     * The queueSize
     * @var int
     */
    public $queueSize;
    /**
     * The numberOfCalls
     * @var int
     */
    public $numberOfCalls;
    /**
     * The noReplyTimer
     * @var int
     */
    public $noReplyTimer;
    /**
     * The mainVoicemail
     * @var string
     */
    public $mainVoicemail;
    /**
     * The toneOnHold
     * @var bool
     */
    public $toneOnHold;
    /**
     * The toneRingback
     * @var bool
     */
    public $toneRingback;
    /**
     * The toneOnClosure
     * @var bool
     */
    public $toneOnClosure;
    /**
     * The anonymousCallRejection
     * @var bool
     */
    public $anonymousCallRejection;
    /**
     * Constructor method for telephonyHuntingInfoReturn
     * @uses TelephonyHuntingInfoReturn::setMembers()
     * @uses TelephonyHuntingInfoReturn::setStrategy()
     * @uses TelephonyHuntingInfoReturn::setPattern()
     * @uses TelephonyHuntingInfoReturn::setOnHoldTimer()
     * @uses TelephonyHuntingInfoReturn::setQueueSize()
     * @uses TelephonyHuntingInfoReturn::setNumberOfCalls()
     * @uses TelephonyHuntingInfoReturn::setNoReplyTimer()
     * @uses TelephonyHuntingInfoReturn::setMainVoicemail()
     * @uses TelephonyHuntingInfoReturn::setToneOnHold()
     * @uses TelephonyHuntingInfoReturn::setToneRingback()
     * @uses TelephonyHuntingInfoReturn::setToneOnClosure()
     * @uses TelephonyHuntingInfoReturn::setAnonymousCallRejection()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType $members
     * @param string $strategy
     * @param string $pattern
     * @param int $onHoldTimer
     * @param int $queueSize
     * @param int $numberOfCalls
     * @param int $noReplyTimer
     * @param string $mainVoicemail
     * @param bool $toneOnHold
     * @param bool $toneRingback
     * @param bool $toneOnClosure
     * @param bool $anonymousCallRejection
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType $members = null, $strategy = null, $pattern = null, $onHoldTimer = null, $queueSize = null, $numberOfCalls = null, $noReplyTimer = null, $mainVoicemail = null, $toneOnHold = null, $toneRingback = null, $toneOnClosure = null, $anonymousCallRejection = null)
    {
        $this
            ->setMembers($members)
            ->setStrategy($strategy)
            ->setPattern($pattern)
            ->setOnHoldTimer($onHoldTimer)
            ->setQueueSize($queueSize)
            ->setNumberOfCalls($numberOfCalls)
            ->setNoReplyTimer($noReplyTimer)
            ->setMainVoicemail($mainVoicemail)
            ->setToneOnHold($toneOnHold)
            ->setToneRingback($toneRingback)
            ->setToneOnClosure($toneOnClosure)
            ->setAnonymousCallRejection($anonymousCallRejection);
    }
    /**
     * Get members value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType|null
     */
    public function getMembers()
    {
        return $this->members;
    }
    /**
     * Set members value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType $members
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setMembers(\Ovh\ArrayType\MyArrayOfTelephonyHuntingInfoMemberStructType $members = null)
    {
        $this->members = $members;
        return $this;
    }
    /**
     * Get strategy value
     * @return string|null
     */
    public function getStrategy()
    {
        return $this->strategy;
    }
    /**
     * Set strategy value
     * @param string $strategy
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setStrategy($strategy = null)
    {
        // validation for constraint: string
        if (!is_null($strategy) && !is_string($strategy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($strategy, true), gettype($strategy)), __LINE__);
        }
        $this->strategy = $strategy;
        return $this;
    }
    /**
     * Get pattern value
     * @return string|null
     */
    public function getPattern()
    {
        return $this->pattern;
    }
    /**
     * Set pattern value
     * @param string $pattern
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setPattern($pattern = null)
    {
        // validation for constraint: string
        if (!is_null($pattern) && !is_string($pattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pattern, true), gettype($pattern)), __LINE__);
        }
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * Get onHoldTimer value
     * @return int|null
     */
    public function getOnHoldTimer()
    {
        return $this->onHoldTimer;
    }
    /**
     * Set onHoldTimer value
     * @param int $onHoldTimer
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setOnHoldTimer($onHoldTimer = null)
    {
        // validation for constraint: int
        if (!is_null($onHoldTimer) && !(is_int($onHoldTimer) || ctype_digit($onHoldTimer))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($onHoldTimer, true), gettype($onHoldTimer)), __LINE__);
        }
        $this->onHoldTimer = $onHoldTimer;
        return $this;
    }
    /**
     * Get queueSize value
     * @return int|null
     */
    public function getQueueSize()
    {
        return $this->queueSize;
    }
    /**
     * Set queueSize value
     * @param int $queueSize
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setQueueSize($queueSize = null)
    {
        // validation for constraint: int
        if (!is_null($queueSize) && !(is_int($queueSize) || ctype_digit($queueSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueSize, true), gettype($queueSize)), __LINE__);
        }
        $this->queueSize = $queueSize;
        return $this;
    }
    /**
     * Get numberOfCalls value
     * @return int|null
     */
    public function getNumberOfCalls()
    {
        return $this->numberOfCalls;
    }
    /**
     * Set numberOfCalls value
     * @param int $numberOfCalls
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setNumberOfCalls($numberOfCalls = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfCalls) && !(is_int($numberOfCalls) || ctype_digit($numberOfCalls))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfCalls, true), gettype($numberOfCalls)), __LINE__);
        }
        $this->numberOfCalls = $numberOfCalls;
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
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
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
    /**
     * Get mainVoicemail value
     * @return string|null
     */
    public function getMainVoicemail()
    {
        return $this->mainVoicemail;
    }
    /**
     * Set mainVoicemail value
     * @param string $mainVoicemail
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setMainVoicemail($mainVoicemail = null)
    {
        // validation for constraint: string
        if (!is_null($mainVoicemail) && !is_string($mainVoicemail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainVoicemail, true), gettype($mainVoicemail)), __LINE__);
        }
        $this->mainVoicemail = $mainVoicemail;
        return $this;
    }
    /**
     * Get toneOnHold value
     * @return bool|null
     */
    public function getToneOnHold()
    {
        return $this->toneOnHold;
    }
    /**
     * Set toneOnHold value
     * @param bool $toneOnHold
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setToneOnHold($toneOnHold = null)
    {
        // validation for constraint: boolean
        if (!is_null($toneOnHold) && !is_bool($toneOnHold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toneOnHold, true), gettype($toneOnHold)), __LINE__);
        }
        $this->toneOnHold = $toneOnHold;
        return $this;
    }
    /**
     * Get toneRingback value
     * @return bool|null
     */
    public function getToneRingback()
    {
        return $this->toneRingback;
    }
    /**
     * Set toneRingback value
     * @param bool $toneRingback
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setToneRingback($toneRingback = null)
    {
        // validation for constraint: boolean
        if (!is_null($toneRingback) && !is_bool($toneRingback)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toneRingback, true), gettype($toneRingback)), __LINE__);
        }
        $this->toneRingback = $toneRingback;
        return $this;
    }
    /**
     * Get toneOnClosure value
     * @return bool|null
     */
    public function getToneOnClosure()
    {
        return $this->toneOnClosure;
    }
    /**
     * Set toneOnClosure value
     * @param bool $toneOnClosure
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setToneOnClosure($toneOnClosure = null)
    {
        // validation for constraint: boolean
        if (!is_null($toneOnClosure) && !is_bool($toneOnClosure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($toneOnClosure, true), gettype($toneOnClosure)), __LINE__);
        }
        $this->toneOnClosure = $toneOnClosure;
        return $this;
    }
    /**
     * Get anonymousCallRejection value
     * @return bool|null
     */
    public function getAnonymousCallRejection()
    {
        return $this->anonymousCallRejection;
    }
    /**
     * Set anonymousCallRejection value
     * @param bool $anonymousCallRejection
     * @return \Ovh\StructType\TelephonyHuntingInfoReturn
     */
    public function setAnonymousCallRejection($anonymousCallRejection = null)
    {
        // validation for constraint: boolean
        if (!is_null($anonymousCallRejection) && !is_bool($anonymousCallRejection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($anonymousCallRejection, true), gettype($anonymousCallRejection)), __LINE__);
        }
        $this->anonymousCallRejection = $anonymousCallRejection;
        return $this;
    }
}
