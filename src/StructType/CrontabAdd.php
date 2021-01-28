<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for crontabAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CrontabAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The path
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $path;
    /**
     * The programLanguage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $programLanguage;
    /**
     * The weekDay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $weekDay;
    /**
     * The days
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $days;
    /**
     * The hours
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hours;
    /**
     * The desc
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $desc;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The otherEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $otherEmail;
    /**
     * Constructor method for crontabAdd
     * @uses CrontabAdd::setSession()
     * @uses CrontabAdd::setDomain()
     * @uses CrontabAdd::setPath()
     * @uses CrontabAdd::setProgramLanguage()
     * @uses CrontabAdd::setWeekDay()
     * @uses CrontabAdd::setDays()
     * @uses CrontabAdd::setHours()
     * @uses CrontabAdd::setDesc()
     * @uses CrontabAdd::setEmail()
     * @uses CrontabAdd::setOtherEmail()
     * @param string $session
     * @param string $domain
     * @param string $path
     * @param string $programLanguage
     * @param string $weekDay
     * @param string $days
     * @param string $hours
     * @param string $desc
     * @param string $email
     * @param string $otherEmail
     */
    public function __construct($session = null, $domain = null, $path = null, $programLanguage = null, $weekDay = null, $days = null, $hours = null, $desc = null, $email = null, $otherEmail = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setPath($path)
            ->setProgramLanguage($programLanguage)
            ->setWeekDay($weekDay)
            ->setDays($days)
            ->setHours($hours)
            ->setDesc($desc)
            ->setEmail($email)
            ->setOtherEmail($otherEmail);
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
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get path value
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * Set path value
     * @param string $path
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setPath($path = null)
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($path, true), gettype($path)), __LINE__);
        }
        $this->path = $path;
        return $this;
    }
    /**
     * Get programLanguage value
     * @return string|null
     */
    public function getProgramLanguage()
    {
        return $this->programLanguage;
    }
    /**
     * Set programLanguage value
     * @param string $programLanguage
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setProgramLanguage($programLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($programLanguage) && !is_string($programLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($programLanguage, true), gettype($programLanguage)), __LINE__);
        }
        $this->programLanguage = $programLanguage;
        return $this;
    }
    /**
     * Get weekDay value
     * @return string|null
     */
    public function getWeekDay()
    {
        return $this->weekDay;
    }
    /**
     * Set weekDay value
     * @param string $weekDay
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setWeekDay($weekDay = null)
    {
        // validation for constraint: string
        if (!is_null($weekDay) && !is_string($weekDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weekDay, true), gettype($weekDay)), __LINE__);
        }
        $this->weekDay = $weekDay;
        return $this;
    }
    /**
     * Get days value
     * @return string|null
     */
    public function getDays()
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param string $days
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setDays($days = null)
    {
        // validation for constraint: string
        if (!is_null($days) && !is_string($days)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($days, true), gettype($days)), __LINE__);
        }
        $this->days = $days;
        return $this;
    }
    /**
     * Get hours value
     * @return string|null
     */
    public function getHours()
    {
        return $this->hours;
    }
    /**
     * Set hours value
     * @param string $hours
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setHours($hours = null)
    {
        // validation for constraint: string
        if (!is_null($hours) && !is_string($hours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hours, true), gettype($hours)), __LINE__);
        }
        $this->hours = $hours;
        return $this;
    }
    /**
     * Get desc value
     * @return string|null
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param string $desc
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setDesc($desc = null)
    {
        // validation for constraint: string
        if (!is_null($desc) && !is_string($desc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc, true), gettype($desc)), __LINE__);
        }
        $this->desc = $desc;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get otherEmail value
     * @return string|null
     */
    public function getOtherEmail()
    {
        return $this->otherEmail;
    }
    /**
     * Set otherEmail value
     * @param string $otherEmail
     * @return \Ovh\StructType\CrontabAdd
     */
    public function setOtherEmail($otherEmail = null)
    {
        // validation for constraint: string
        if (!is_null($otherEmail) && !is_string($otherEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherEmail, true), gettype($otherEmail)), __LINE__);
        }
        $this->otherEmail = $otherEmail;
        return $this;
    }
}
