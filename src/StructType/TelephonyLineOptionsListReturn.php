<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineOptionsListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineOptionsListReturn extends AbstractStructBase
{
    /**
     * The identificationRestriction
     * @var bool
     */
    public $identificationRestriction;
    /**
     * The anonymousCallRejection
     * @var bool
     */
    public $anonymousCallRejection;
    /**
     * The doNotDisturb
     * @var bool
     */
    public $doNotDisturb;
    /**
     * The absentSuscriber
     * @var bool
     */
    public $absentSuscriber;
    /**
     * The lockOutCall
     * @var bool
     */
    public $lockOutCall;
    /**
     * The lockOutCallPassword
     * @var string
     */
    public $lockOutCallPassword;
    /**
     * The forwardUnconditional
     * @var bool
     */
    public $forwardUnconditional;
    /**
     * The forwardUnconditionalNumber
     * @var string
     */
    public $forwardUnconditionalNumber;
    /**
     * The forwardNoReply
     * @var bool
     */
    public $forwardNoReply;
    /**
     * The forwardNoReplyDelay
     * @var int
     */
    public $forwardNoReplyDelay;
    /**
     * The forwardNoReplyNumber
     * @var string
     */
    public $forwardNoReplyNumber;
    /**
     * The forwardBusy
     * @var bool
     */
    public $forwardBusy;
    /**
     * The forwardBusyNumber
     * @var string
     */
    public $forwardBusyNumber;
    /**
     * The forwardBackup
     * @var bool
     */
    public $forwardBackup;
    /**
     * The forwardBackupNumber
     * @var string
     */
    public $forwardBackupNumber;
    /**
     * The callWaiting
     * @var bool
     */
    public $callWaiting;
    /**
     * The displayCallNumber
     * @var string
     */
    public $displayCallNumber;
    /**
     * The forwardUnconditionalNature
     * @var string
     */
    public $forwardUnconditionalNature;
    /**
     * The forwardNoReplyNature
     * @var string
     */
    public $forwardNoReplyNature;
    /**
     * The forwardBusyNature
     * @var string
     */
    public $forwardBusyNature;
    /**
     * The forwardBackupNature
     * @var string
     */
    public $forwardBackupNature;
    /**
     * Constructor method for telephonyLineOptionsListReturn
     * @uses TelephonyLineOptionsListReturn::setIdentificationRestriction()
     * @uses TelephonyLineOptionsListReturn::setAnonymousCallRejection()
     * @uses TelephonyLineOptionsListReturn::setDoNotDisturb()
     * @uses TelephonyLineOptionsListReturn::setAbsentSuscriber()
     * @uses TelephonyLineOptionsListReturn::setLockOutCall()
     * @uses TelephonyLineOptionsListReturn::setLockOutCallPassword()
     * @uses TelephonyLineOptionsListReturn::setForwardUnconditional()
     * @uses TelephonyLineOptionsListReturn::setForwardUnconditionalNumber()
     * @uses TelephonyLineOptionsListReturn::setForwardNoReply()
     * @uses TelephonyLineOptionsListReturn::setForwardNoReplyDelay()
     * @uses TelephonyLineOptionsListReturn::setForwardNoReplyNumber()
     * @uses TelephonyLineOptionsListReturn::setForwardBusy()
     * @uses TelephonyLineOptionsListReturn::setForwardBusyNumber()
     * @uses TelephonyLineOptionsListReturn::setForwardBackup()
     * @uses TelephonyLineOptionsListReturn::setForwardBackupNumber()
     * @uses TelephonyLineOptionsListReturn::setCallWaiting()
     * @uses TelephonyLineOptionsListReturn::setDisplayCallNumber()
     * @uses TelephonyLineOptionsListReturn::setForwardUnconditionalNature()
     * @uses TelephonyLineOptionsListReturn::setForwardNoReplyNature()
     * @uses TelephonyLineOptionsListReturn::setForwardBusyNature()
     * @uses TelephonyLineOptionsListReturn::setForwardBackupNature()
     * @param bool $identificationRestriction
     * @param bool $anonymousCallRejection
     * @param bool $doNotDisturb
     * @param bool $absentSuscriber
     * @param bool $lockOutCall
     * @param string $lockOutCallPassword
     * @param bool $forwardUnconditional
     * @param string $forwardUnconditionalNumber
     * @param bool $forwardNoReply
     * @param int $forwardNoReplyDelay
     * @param string $forwardNoReplyNumber
     * @param bool $forwardBusy
     * @param string $forwardBusyNumber
     * @param bool $forwardBackup
     * @param string $forwardBackupNumber
     * @param bool $callWaiting
     * @param string $displayCallNumber
     * @param string $forwardUnconditionalNature
     * @param string $forwardNoReplyNature
     * @param string $forwardBusyNature
     * @param string $forwardBackupNature
     */
    public function __construct($identificationRestriction = null, $anonymousCallRejection = null, $doNotDisturb = null, $absentSuscriber = null, $lockOutCall = null, $lockOutCallPassword = null, $forwardUnconditional = null, $forwardUnconditionalNumber = null, $forwardNoReply = null, $forwardNoReplyDelay = null, $forwardNoReplyNumber = null, $forwardBusy = null, $forwardBusyNumber = null, $forwardBackup = null, $forwardBackupNumber = null, $callWaiting = null, $displayCallNumber = null, $forwardUnconditionalNature = null, $forwardNoReplyNature = null, $forwardBusyNature = null, $forwardBackupNature = null)
    {
        $this
            ->setIdentificationRestriction($identificationRestriction)
            ->setAnonymousCallRejection($anonymousCallRejection)
            ->setDoNotDisturb($doNotDisturb)
            ->setAbsentSuscriber($absentSuscriber)
            ->setLockOutCall($lockOutCall)
            ->setLockOutCallPassword($lockOutCallPassword)
            ->setForwardUnconditional($forwardUnconditional)
            ->setForwardUnconditionalNumber($forwardUnconditionalNumber)
            ->setForwardNoReply($forwardNoReply)
            ->setForwardNoReplyDelay($forwardNoReplyDelay)
            ->setForwardNoReplyNumber($forwardNoReplyNumber)
            ->setForwardBusy($forwardBusy)
            ->setForwardBusyNumber($forwardBusyNumber)
            ->setForwardBackup($forwardBackup)
            ->setForwardBackupNumber($forwardBackupNumber)
            ->setCallWaiting($callWaiting)
            ->setDisplayCallNumber($displayCallNumber)
            ->setForwardUnconditionalNature($forwardUnconditionalNature)
            ->setForwardNoReplyNature($forwardNoReplyNature)
            ->setForwardBusyNature($forwardBusyNature)
            ->setForwardBackupNature($forwardBackupNature);
    }
    /**
     * Get identificationRestriction value
     * @return bool|null
     */
    public function getIdentificationRestriction()
    {
        return $this->identificationRestriction;
    }
    /**
     * Set identificationRestriction value
     * @param bool $identificationRestriction
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setIdentificationRestriction($identificationRestriction = null)
    {
        // validation for constraint: boolean
        if (!is_null($identificationRestriction) && !is_bool($identificationRestriction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($identificationRestriction, true), gettype($identificationRestriction)), __LINE__);
        }
        $this->identificationRestriction = $identificationRestriction;
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
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
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
    /**
     * Get doNotDisturb value
     * @return bool|null
     */
    public function getDoNotDisturb()
    {
        return $this->doNotDisturb;
    }
    /**
     * Set doNotDisturb value
     * @param bool $doNotDisturb
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setDoNotDisturb($doNotDisturb = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotDisturb) && !is_bool($doNotDisturb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doNotDisturb, true), gettype($doNotDisturb)), __LINE__);
        }
        $this->doNotDisturb = $doNotDisturb;
        return $this;
    }
    /**
     * Get absentSuscriber value
     * @return bool|null
     */
    public function getAbsentSuscriber()
    {
        return $this->absentSuscriber;
    }
    /**
     * Set absentSuscriber value
     * @param bool $absentSuscriber
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setAbsentSuscriber($absentSuscriber = null)
    {
        // validation for constraint: boolean
        if (!is_null($absentSuscriber) && !is_bool($absentSuscriber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($absentSuscriber, true), gettype($absentSuscriber)), __LINE__);
        }
        $this->absentSuscriber = $absentSuscriber;
        return $this;
    }
    /**
     * Get lockOutCall value
     * @return bool|null
     */
    public function getLockOutCall()
    {
        return $this->lockOutCall;
    }
    /**
     * Set lockOutCall value
     * @param bool $lockOutCall
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setLockOutCall($lockOutCall = null)
    {
        // validation for constraint: boolean
        if (!is_null($lockOutCall) && !is_bool($lockOutCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockOutCall, true), gettype($lockOutCall)), __LINE__);
        }
        $this->lockOutCall = $lockOutCall;
        return $this;
    }
    /**
     * Get lockOutCallPassword value
     * @return string|null
     */
    public function getLockOutCallPassword()
    {
        return $this->lockOutCallPassword;
    }
    /**
     * Set lockOutCallPassword value
     * @param string $lockOutCallPassword
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setLockOutCallPassword($lockOutCallPassword = null)
    {
        // validation for constraint: string
        if (!is_null($lockOutCallPassword) && !is_string($lockOutCallPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockOutCallPassword, true), gettype($lockOutCallPassword)), __LINE__);
        }
        $this->lockOutCallPassword = $lockOutCallPassword;
        return $this;
    }
    /**
     * Get forwardUnconditional value
     * @return bool|null
     */
    public function getForwardUnconditional()
    {
        return $this->forwardUnconditional;
    }
    /**
     * Set forwardUnconditional value
     * @param bool $forwardUnconditional
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardUnconditional($forwardUnconditional = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardUnconditional) && !is_bool($forwardUnconditional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forwardUnconditional, true), gettype($forwardUnconditional)), __LINE__);
        }
        $this->forwardUnconditional = $forwardUnconditional;
        return $this;
    }
    /**
     * Get forwardUnconditionalNumber value
     * @return string|null
     */
    public function getForwardUnconditionalNumber()
    {
        return $this->forwardUnconditionalNumber;
    }
    /**
     * Set forwardUnconditionalNumber value
     * @param string $forwardUnconditionalNumber
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardUnconditionalNumber($forwardUnconditionalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardUnconditionalNumber) && !is_string($forwardUnconditionalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardUnconditionalNumber, true), gettype($forwardUnconditionalNumber)), __LINE__);
        }
        $this->forwardUnconditionalNumber = $forwardUnconditionalNumber;
        return $this;
    }
    /**
     * Get forwardNoReply value
     * @return bool|null
     */
    public function getForwardNoReply()
    {
        return $this->forwardNoReply;
    }
    /**
     * Set forwardNoReply value
     * @param bool $forwardNoReply
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardNoReply($forwardNoReply = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardNoReply) && !is_bool($forwardNoReply)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forwardNoReply, true), gettype($forwardNoReply)), __LINE__);
        }
        $this->forwardNoReply = $forwardNoReply;
        return $this;
    }
    /**
     * Get forwardNoReplyDelay value
     * @return int|null
     */
    public function getForwardNoReplyDelay()
    {
        return $this->forwardNoReplyDelay;
    }
    /**
     * Set forwardNoReplyDelay value
     * @param int $forwardNoReplyDelay
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardNoReplyDelay($forwardNoReplyDelay = null)
    {
        // validation for constraint: int
        if (!is_null($forwardNoReplyDelay) && !(is_int($forwardNoReplyDelay) || ctype_digit($forwardNoReplyDelay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($forwardNoReplyDelay, true), gettype($forwardNoReplyDelay)), __LINE__);
        }
        $this->forwardNoReplyDelay = $forwardNoReplyDelay;
        return $this;
    }
    /**
     * Get forwardNoReplyNumber value
     * @return string|null
     */
    public function getForwardNoReplyNumber()
    {
        return $this->forwardNoReplyNumber;
    }
    /**
     * Set forwardNoReplyNumber value
     * @param string $forwardNoReplyNumber
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardNoReplyNumber($forwardNoReplyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardNoReplyNumber) && !is_string($forwardNoReplyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardNoReplyNumber, true), gettype($forwardNoReplyNumber)), __LINE__);
        }
        $this->forwardNoReplyNumber = $forwardNoReplyNumber;
        return $this;
    }
    /**
     * Get forwardBusy value
     * @return bool|null
     */
    public function getForwardBusy()
    {
        return $this->forwardBusy;
    }
    /**
     * Set forwardBusy value
     * @param bool $forwardBusy
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardBusy($forwardBusy = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardBusy) && !is_bool($forwardBusy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forwardBusy, true), gettype($forwardBusy)), __LINE__);
        }
        $this->forwardBusy = $forwardBusy;
        return $this;
    }
    /**
     * Get forwardBusyNumber value
     * @return string|null
     */
    public function getForwardBusyNumber()
    {
        return $this->forwardBusyNumber;
    }
    /**
     * Set forwardBusyNumber value
     * @param string $forwardBusyNumber
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardBusyNumber($forwardBusyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBusyNumber) && !is_string($forwardBusyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardBusyNumber, true), gettype($forwardBusyNumber)), __LINE__);
        }
        $this->forwardBusyNumber = $forwardBusyNumber;
        return $this;
    }
    /**
     * Get forwardBackup value
     * @return bool|null
     */
    public function getForwardBackup()
    {
        return $this->forwardBackup;
    }
    /**
     * Set forwardBackup value
     * @param bool $forwardBackup
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardBackup($forwardBackup = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardBackup) && !is_bool($forwardBackup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forwardBackup, true), gettype($forwardBackup)), __LINE__);
        }
        $this->forwardBackup = $forwardBackup;
        return $this;
    }
    /**
     * Get forwardBackupNumber value
     * @return string|null
     */
    public function getForwardBackupNumber()
    {
        return $this->forwardBackupNumber;
    }
    /**
     * Set forwardBackupNumber value
     * @param string $forwardBackupNumber
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardBackupNumber($forwardBackupNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBackupNumber) && !is_string($forwardBackupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardBackupNumber, true), gettype($forwardBackupNumber)), __LINE__);
        }
        $this->forwardBackupNumber = $forwardBackupNumber;
        return $this;
    }
    /**
     * Get callWaiting value
     * @return bool|null
     */
    public function getCallWaiting()
    {
        return $this->callWaiting;
    }
    /**
     * Set callWaiting value
     * @param bool $callWaiting
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setCallWaiting($callWaiting = null)
    {
        // validation for constraint: boolean
        if (!is_null($callWaiting) && !is_bool($callWaiting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($callWaiting, true), gettype($callWaiting)), __LINE__);
        }
        $this->callWaiting = $callWaiting;
        return $this;
    }
    /**
     * Get displayCallNumber value
     * @return string|null
     */
    public function getDisplayCallNumber()
    {
        return $this->displayCallNumber;
    }
    /**
     * Set displayCallNumber value
     * @param string $displayCallNumber
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setDisplayCallNumber($displayCallNumber = null)
    {
        // validation for constraint: string
        if (!is_null($displayCallNumber) && !is_string($displayCallNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayCallNumber, true), gettype($displayCallNumber)), __LINE__);
        }
        $this->displayCallNumber = $displayCallNumber;
        return $this;
    }
    /**
     * Get forwardUnconditionalNature value
     * @return string|null
     */
    public function getForwardUnconditionalNature()
    {
        return $this->forwardUnconditionalNature;
    }
    /**
     * Set forwardUnconditionalNature value
     * @param string $forwardUnconditionalNature
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardUnconditionalNature($forwardUnconditionalNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardUnconditionalNature) && !is_string($forwardUnconditionalNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardUnconditionalNature, true), gettype($forwardUnconditionalNature)), __LINE__);
        }
        $this->forwardUnconditionalNature = $forwardUnconditionalNature;
        return $this;
    }
    /**
     * Get forwardNoReplyNature value
     * @return string|null
     */
    public function getForwardNoReplyNature()
    {
        return $this->forwardNoReplyNature;
    }
    /**
     * Set forwardNoReplyNature value
     * @param string $forwardNoReplyNature
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardNoReplyNature($forwardNoReplyNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardNoReplyNature) && !is_string($forwardNoReplyNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardNoReplyNature, true), gettype($forwardNoReplyNature)), __LINE__);
        }
        $this->forwardNoReplyNature = $forwardNoReplyNature;
        return $this;
    }
    /**
     * Get forwardBusyNature value
     * @return string|null
     */
    public function getForwardBusyNature()
    {
        return $this->forwardBusyNature;
    }
    /**
     * Set forwardBusyNature value
     * @param string $forwardBusyNature
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardBusyNature($forwardBusyNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBusyNature) && !is_string($forwardBusyNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardBusyNature, true), gettype($forwardBusyNature)), __LINE__);
        }
        $this->forwardBusyNature = $forwardBusyNature;
        return $this;
    }
    /**
     * Get forwardBackupNature value
     * @return string|null
     */
    public function getForwardBackupNature()
    {
        return $this->forwardBackupNature;
    }
    /**
     * Set forwardBackupNature value
     * @param string $forwardBackupNature
     * @return \Ovh\StructType\TelephonyLineOptionsListReturn
     */
    public function setForwardBackupNature($forwardBackupNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBackupNature) && !is_string($forwardBackupNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardBackupNature, true), gettype($forwardBackupNature)), __LINE__);
        }
        $this->forwardBackupNature = $forwardBackupNature;
        return $this;
    }
}
