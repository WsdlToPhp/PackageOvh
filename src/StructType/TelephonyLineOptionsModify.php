<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineOptionsModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineOptionsModify extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The identificationRestriction
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $identificationRestriction;
    /**
     * The anonymousCallRejection
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $anonymousCallRejection;
    /**
     * The doNotDisturb
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $doNotDisturb;
    /**
     * The absentSuscriber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $absentSuscriber;
    /**
     * The lockOutCall
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $lockOutCall;
    /**
     * The lockOutCallPassword
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lockOutCallPassword;
    /**
     * The forwardUnconditional
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forwardUnconditional;
    /**
     * The forwardUnconditionalNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardUnconditionalNumber;
    /**
     * The forwardNoReply
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forwardNoReply;
    /**
     * The forwardNoReplyDelay
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $forwardNoReplyDelay;
    /**
     * The forwardNoReplyNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardNoReplyNumber;
    /**
     * The forwardBusy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forwardBusy;
    /**
     * The forwardBusyNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardBusyNumber;
    /**
     * The forwardBackup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forwardBackup;
    /**
     * The forwardBackupNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardBackupNumber;
    /**
     * The displayCallNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayCallNumber;
    /**
     * The callWaiting
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $callWaiting;
    /**
     * The forwardNoReplyNature
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardNoReplyNature;
    /**
     * The forwardBackupNature
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardBackupNature;
    /**
     * The forwardUnconditionalNature
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardUnconditionalNature;
    /**
     * The forwardBusyNature
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardBusyNature;
    /**
     * Constructor method for telephonyLineOptionsModify
     * @uses TelephonyLineOptionsModify::setSession()
     * @uses TelephonyLineOptionsModify::setNumber()
     * @uses TelephonyLineOptionsModify::setCountry()
     * @uses TelephonyLineOptionsModify::setIdentificationRestriction()
     * @uses TelephonyLineOptionsModify::setAnonymousCallRejection()
     * @uses TelephonyLineOptionsModify::setDoNotDisturb()
     * @uses TelephonyLineOptionsModify::setAbsentSuscriber()
     * @uses TelephonyLineOptionsModify::setLockOutCall()
     * @uses TelephonyLineOptionsModify::setLockOutCallPassword()
     * @uses TelephonyLineOptionsModify::setForwardUnconditional()
     * @uses TelephonyLineOptionsModify::setForwardUnconditionalNumber()
     * @uses TelephonyLineOptionsModify::setForwardNoReply()
     * @uses TelephonyLineOptionsModify::setForwardNoReplyDelay()
     * @uses TelephonyLineOptionsModify::setForwardNoReplyNumber()
     * @uses TelephonyLineOptionsModify::setForwardBusy()
     * @uses TelephonyLineOptionsModify::setForwardBusyNumber()
     * @uses TelephonyLineOptionsModify::setForwardBackup()
     * @uses TelephonyLineOptionsModify::setForwardBackupNumber()
     * @uses TelephonyLineOptionsModify::setDisplayCallNumber()
     * @uses TelephonyLineOptionsModify::setCallWaiting()
     * @uses TelephonyLineOptionsModify::setForwardNoReplyNature()
     * @uses TelephonyLineOptionsModify::setForwardBackupNature()
     * @uses TelephonyLineOptionsModify::setForwardUnconditionalNature()
     * @uses TelephonyLineOptionsModify::setForwardBusyNature()
     * @param string $session
     * @param string $number
     * @param string $country
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
     * @param string $displayCallNumber
     * @param bool $callWaiting
     * @param string $forwardNoReplyNature
     * @param string $forwardBackupNature
     * @param string $forwardUnconditionalNature
     * @param string $forwardBusyNature
     */
    public function __construct($session = null, $number = null, $country = null, $identificationRestriction = null, $anonymousCallRejection = null, $doNotDisturb = null, $absentSuscriber = null, $lockOutCall = null, $lockOutCallPassword = null, $forwardUnconditional = null, $forwardUnconditionalNumber = null, $forwardNoReply = null, $forwardNoReplyDelay = null, $forwardNoReplyNumber = null, $forwardBusy = null, $forwardBusyNumber = null, $forwardBackup = null, $forwardBackupNumber = null, $displayCallNumber = null, $callWaiting = null, $forwardNoReplyNature = null, $forwardBackupNature = null, $forwardUnconditionalNature = null, $forwardBusyNature = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
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
            ->setDisplayCallNumber($displayCallNumber)
            ->setCallWaiting($callWaiting)
            ->setForwardNoReplyNature($forwardNoReplyNature)
            ->setForwardBackupNature($forwardBackupNature)
            ->setForwardUnconditionalNature($forwardUnconditionalNature)
            ->setForwardBusyNature($forwardBusyNature);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setIdentificationRestriction($identificationRestriction = null)
    {
        // validation for constraint: boolean
        if (!is_null($identificationRestriction) && !is_bool($identificationRestriction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($identificationRestriction)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setAnonymousCallRejection($anonymousCallRejection = null)
    {
        // validation for constraint: boolean
        if (!is_null($anonymousCallRejection) && !is_bool($anonymousCallRejection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($anonymousCallRejection)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setDoNotDisturb($doNotDisturb = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotDisturb) && !is_bool($doNotDisturb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doNotDisturb)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setAbsentSuscriber($absentSuscriber = null)
    {
        // validation for constraint: boolean
        if (!is_null($absentSuscriber) && !is_bool($absentSuscriber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($absentSuscriber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setLockOutCall($lockOutCall = null)
    {
        // validation for constraint: boolean
        if (!is_null($lockOutCall) && !is_bool($lockOutCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lockOutCall)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setLockOutCallPassword($lockOutCallPassword = null)
    {
        // validation for constraint: string
        if (!is_null($lockOutCallPassword) && !is_string($lockOutCallPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lockOutCallPassword)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardUnconditional($forwardUnconditional = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardUnconditional) && !is_bool($forwardUnconditional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forwardUnconditional)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardUnconditionalNumber($forwardUnconditionalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardUnconditionalNumber) && !is_string($forwardUnconditionalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardUnconditionalNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardNoReply($forwardNoReply = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardNoReply) && !is_bool($forwardNoReply)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forwardNoReply)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardNoReplyDelay($forwardNoReplyDelay = null)
    {
        // validation for constraint: int
        if (!is_null($forwardNoReplyDelay) && !is_numeric($forwardNoReplyDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($forwardNoReplyDelay)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardNoReplyNumber($forwardNoReplyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardNoReplyNumber) && !is_string($forwardNoReplyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardNoReplyNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardBusy($forwardBusy = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardBusy) && !is_bool($forwardBusy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forwardBusy)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardBusyNumber($forwardBusyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBusyNumber) && !is_string($forwardBusyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardBusyNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardBackup($forwardBackup = null)
    {
        // validation for constraint: boolean
        if (!is_null($forwardBackup) && !is_bool($forwardBackup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forwardBackup)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardBackupNumber($forwardBackupNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBackupNumber) && !is_string($forwardBackupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardBackupNumber)), __LINE__);
        }
        $this->forwardBackupNumber = $forwardBackupNumber;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setDisplayCallNumber($displayCallNumber = null)
    {
        // validation for constraint: string
        if (!is_null($displayCallNumber) && !is_string($displayCallNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayCallNumber)), __LINE__);
        }
        $this->displayCallNumber = $displayCallNumber;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setCallWaiting($callWaiting = null)
    {
        // validation for constraint: boolean
        if (!is_null($callWaiting) && !is_bool($callWaiting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($callWaiting)), __LINE__);
        }
        $this->callWaiting = $callWaiting;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardNoReplyNature($forwardNoReplyNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardNoReplyNature) && !is_string($forwardNoReplyNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardNoReplyNature)), __LINE__);
        }
        $this->forwardNoReplyNature = $forwardNoReplyNature;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardBackupNature($forwardBackupNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBackupNature) && !is_string($forwardBackupNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardBackupNature)), __LINE__);
        }
        $this->forwardBackupNature = $forwardBackupNature;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardUnconditionalNature($forwardUnconditionalNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardUnconditionalNature) && !is_string($forwardUnconditionalNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardUnconditionalNature)), __LINE__);
        }
        $this->forwardUnconditionalNature = $forwardUnconditionalNature;
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
     * @return \Ovh\StructType\TelephonyLineOptionsModify
     */
    public function setForwardBusyNature($forwardBusyNature = null)
    {
        // validation for constraint: string
        if (!is_null($forwardBusyNature) && !is_string($forwardBusyNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardBusyNature)), __LINE__);
        }
        $this->forwardBusyNature = $forwardBusyNature;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyLineOptionsModify
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
