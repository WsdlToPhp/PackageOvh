<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailOptionsModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailOptionsModify extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The redirection1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection1;
    /**
     * The redirection1Email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection1Email;
    /**
     * The redirection2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection2;
    /**
     * The redirection2Email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection2Email;
    /**
     * The redirection3
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection3;
    /**
     * The redirection3Email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection3Email;
    /**
     * The redirection4
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection4;
    /**
     * The redirection4Email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection4Email;
    /**
     * The redirection5
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection5;
    /**
     * The redirection5Email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $redirection5Email;
    /**
     * The announceMessage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $announceMessage;
    /**
     * The keepMessage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $keepMessage;
    /**
     * The audioformat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $audioformat;
    /**
     * The fromEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fromEmail;
    /**
     * The fromName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fromName;
    /**
     * The doNotRecord
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $doNotRecord;
    /**
     * The forcePassword
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forcePassword;
    /**
     * Constructor method for telephonyVoicemailOptionsModify
     * @uses TelephonyVoicemailOptionsModify::setSession()
     * @uses TelephonyVoicemailOptionsModify::setNumber()
     * @uses TelephonyVoicemailOptionsModify::setCountry()
     * @uses TelephonyVoicemailOptionsModify::setRedirection1()
     * @uses TelephonyVoicemailOptionsModify::setRedirection1Email()
     * @uses TelephonyVoicemailOptionsModify::setRedirection2()
     * @uses TelephonyVoicemailOptionsModify::setRedirection2Email()
     * @uses TelephonyVoicemailOptionsModify::setRedirection3()
     * @uses TelephonyVoicemailOptionsModify::setRedirection3Email()
     * @uses TelephonyVoicemailOptionsModify::setRedirection4()
     * @uses TelephonyVoicemailOptionsModify::setRedirection4Email()
     * @uses TelephonyVoicemailOptionsModify::setRedirection5()
     * @uses TelephonyVoicemailOptionsModify::setRedirection5Email()
     * @uses TelephonyVoicemailOptionsModify::setAnnounceMessage()
     * @uses TelephonyVoicemailOptionsModify::setKeepMessage()
     * @uses TelephonyVoicemailOptionsModify::setAudioformat()
     * @uses TelephonyVoicemailOptionsModify::setFromEmail()
     * @uses TelephonyVoicemailOptionsModify::setFromName()
     * @uses TelephonyVoicemailOptionsModify::setDoNotRecord()
     * @uses TelephonyVoicemailOptionsModify::setForcePassword()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $redirection1
     * @param string $redirection1Email
     * @param string $redirection2
     * @param string $redirection2Email
     * @param string $redirection3
     * @param string $redirection3Email
     * @param string $redirection4
     * @param string $redirection4Email
     * @param string $redirection5
     * @param string $redirection5Email
     * @param string $announceMessage
     * @param bool $keepMessage
     * @param string $audioformat
     * @param string $fromEmail
     * @param string $fromName
     * @param bool $doNotRecord
     * @param bool $forcePassword
     */
    public function __construct($session = null, $number = null, $country = null, $redirection1 = null, $redirection1Email = null, $redirection2 = null, $redirection2Email = null, $redirection3 = null, $redirection3Email = null, $redirection4 = null, $redirection4Email = null, $redirection5 = null, $redirection5Email = null, $announceMessage = null, $keepMessage = null, $audioformat = null, $fromEmail = null, $fromName = null, $doNotRecord = null, $forcePassword = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setRedirection1($redirection1)
            ->setRedirection1Email($redirection1Email)
            ->setRedirection2($redirection2)
            ->setRedirection2Email($redirection2Email)
            ->setRedirection3($redirection3)
            ->setRedirection3Email($redirection3Email)
            ->setRedirection4($redirection4)
            ->setRedirection4Email($redirection4Email)
            ->setRedirection5($redirection5)
            ->setRedirection5Email($redirection5Email)
            ->setAnnounceMessage($announceMessage)
            ->setKeepMessage($keepMessage)
            ->setAudioformat($audioformat)
            ->setFromEmail($fromEmail)
            ->setFromName($fromName)
            ->setDoNotRecord($doNotRecord)
            ->setForcePassword($forcePassword);
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
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
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
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
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
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get redirection1 value
     * @return string|null
     */
    public function getRedirection1()
    {
        return $this->redirection1;
    }
    /**
     * Set redirection1 value
     * @param string $redirection1
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection1($redirection1 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection1) && !is_string($redirection1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection1, true), gettype($redirection1)), __LINE__);
        }
        $this->redirection1 = $redirection1;
        return $this;
    }
    /**
     * Get redirection1Email value
     * @return string|null
     */
    public function getRedirection1Email()
    {
        return $this->redirection1Email;
    }
    /**
     * Set redirection1Email value
     * @param string $redirection1Email
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection1Email($redirection1Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection1Email) && !is_string($redirection1Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection1Email, true), gettype($redirection1Email)), __LINE__);
        }
        $this->redirection1Email = $redirection1Email;
        return $this;
    }
    /**
     * Get redirection2 value
     * @return string|null
     */
    public function getRedirection2()
    {
        return $this->redirection2;
    }
    /**
     * Set redirection2 value
     * @param string $redirection2
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection2($redirection2 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection2) && !is_string($redirection2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection2, true), gettype($redirection2)), __LINE__);
        }
        $this->redirection2 = $redirection2;
        return $this;
    }
    /**
     * Get redirection2Email value
     * @return string|null
     */
    public function getRedirection2Email()
    {
        return $this->redirection2Email;
    }
    /**
     * Set redirection2Email value
     * @param string $redirection2Email
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection2Email($redirection2Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection2Email) && !is_string($redirection2Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection2Email, true), gettype($redirection2Email)), __LINE__);
        }
        $this->redirection2Email = $redirection2Email;
        return $this;
    }
    /**
     * Get redirection3 value
     * @return string|null
     */
    public function getRedirection3()
    {
        return $this->redirection3;
    }
    /**
     * Set redirection3 value
     * @param string $redirection3
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection3($redirection3 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection3) && !is_string($redirection3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection3, true), gettype($redirection3)), __LINE__);
        }
        $this->redirection3 = $redirection3;
        return $this;
    }
    /**
     * Get redirection3Email value
     * @return string|null
     */
    public function getRedirection3Email()
    {
        return $this->redirection3Email;
    }
    /**
     * Set redirection3Email value
     * @param string $redirection3Email
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection3Email($redirection3Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection3Email) && !is_string($redirection3Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection3Email, true), gettype($redirection3Email)), __LINE__);
        }
        $this->redirection3Email = $redirection3Email;
        return $this;
    }
    /**
     * Get redirection4 value
     * @return string|null
     */
    public function getRedirection4()
    {
        return $this->redirection4;
    }
    /**
     * Set redirection4 value
     * @param string $redirection4
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection4($redirection4 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection4) && !is_string($redirection4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection4, true), gettype($redirection4)), __LINE__);
        }
        $this->redirection4 = $redirection4;
        return $this;
    }
    /**
     * Get redirection4Email value
     * @return string|null
     */
    public function getRedirection4Email()
    {
        return $this->redirection4Email;
    }
    /**
     * Set redirection4Email value
     * @param string $redirection4Email
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection4Email($redirection4Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection4Email) && !is_string($redirection4Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection4Email, true), gettype($redirection4Email)), __LINE__);
        }
        $this->redirection4Email = $redirection4Email;
        return $this;
    }
    /**
     * Get redirection5 value
     * @return string|null
     */
    public function getRedirection5()
    {
        return $this->redirection5;
    }
    /**
     * Set redirection5 value
     * @param string $redirection5
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection5($redirection5 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection5) && !is_string($redirection5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection5, true), gettype($redirection5)), __LINE__);
        }
        $this->redirection5 = $redirection5;
        return $this;
    }
    /**
     * Get redirection5Email value
     * @return string|null
     */
    public function getRedirection5Email()
    {
        return $this->redirection5Email;
    }
    /**
     * Set redirection5Email value
     * @param string $redirection5Email
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setRedirection5Email($redirection5Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection5Email) && !is_string($redirection5Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redirection5Email, true), gettype($redirection5Email)), __LINE__);
        }
        $this->redirection5Email = $redirection5Email;
        return $this;
    }
    /**
     * Get announceMessage value
     * @return string|null
     */
    public function getAnnounceMessage()
    {
        return $this->announceMessage;
    }
    /**
     * Set announceMessage value
     * @param string $announceMessage
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setAnnounceMessage($announceMessage = null)
    {
        // validation for constraint: string
        if (!is_null($announceMessage) && !is_string($announceMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($announceMessage, true), gettype($announceMessage)), __LINE__);
        }
        $this->announceMessage = $announceMessage;
        return $this;
    }
    /**
     * Get keepMessage value
     * @return bool|null
     */
    public function getKeepMessage()
    {
        return $this->keepMessage;
    }
    /**
     * Set keepMessage value
     * @param bool $keepMessage
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setKeepMessage($keepMessage = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepMessage) && !is_bool($keepMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepMessage, true), gettype($keepMessage)), __LINE__);
        }
        $this->keepMessage = $keepMessage;
        return $this;
    }
    /**
     * Get audioformat value
     * @return string|null
     */
    public function getAudioformat()
    {
        return $this->audioformat;
    }
    /**
     * Set audioformat value
     * @param string $audioformat
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setAudioformat($audioformat = null)
    {
        // validation for constraint: string
        if (!is_null($audioformat) && !is_string($audioformat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioformat, true), gettype($audioformat)), __LINE__);
        }
        $this->audioformat = $audioformat;
        return $this;
    }
    /**
     * Get fromEmail value
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }
    /**
     * Set fromEmail value
     * @param string $fromEmail
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setFromEmail($fromEmail = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromEmail, true), gettype($fromEmail)), __LINE__);
        }
        $this->fromEmail = $fromEmail;
        return $this;
    }
    /**
     * Get fromName value
     * @return string|null
     */
    public function getFromName()
    {
        return $this->fromName;
    }
    /**
     * Set fromName value
     * @param string $fromName
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setFromName($fromName = null)
    {
        // validation for constraint: string
        if (!is_null($fromName) && !is_string($fromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromName, true), gettype($fromName)), __LINE__);
        }
        $this->fromName = $fromName;
        return $this;
    }
    /**
     * Get doNotRecord value
     * @return bool|null
     */
    public function getDoNotRecord()
    {
        return $this->doNotRecord;
    }
    /**
     * Set doNotRecord value
     * @param bool $doNotRecord
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setDoNotRecord($doNotRecord = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotRecord) && !is_bool($doNotRecord)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doNotRecord, true), gettype($doNotRecord)), __LINE__);
        }
        $this->doNotRecord = $doNotRecord;
        return $this;
    }
    /**
     * Get forcePassword value
     * @return bool|null
     */
    public function getForcePassword()
    {
        return $this->forcePassword;
    }
    /**
     * Set forcePassword value
     * @param bool $forcePassword
     * @return \Ovh\StructType\TelephonyVoicemailOptionsModify
     */
    public function setForcePassword($forcePassword = null)
    {
        // validation for constraint: boolean
        if (!is_null($forcePassword) && !is_bool($forcePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forcePassword, true), gettype($forcePassword)), __LINE__);
        }
        $this->forcePassword = $forcePassword;
        return $this;
    }
}
