<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailOptionsListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailOptionsListReturn extends AbstractStructBase
{
    /**
     * The redirection1
     * @var string
     */
    public $redirection1;
    /**
     * The redirection1Email
     * @var string
     */
    public $redirection1Email;
    /**
     * The redirection2
     * @var string
     */
    public $redirection2;
    /**
     * The redirection2Email
     * @var string
     */
    public $redirection2Email;
    /**
     * The redirection3
     * @var string
     */
    public $redirection3;
    /**
     * The redirection3Email
     * @var string
     */
    public $redirection3Email;
    /**
     * The redirection4
     * @var string
     */
    public $redirection4;
    /**
     * The redirection4Email
     * @var string
     */
    public $redirection4Email;
    /**
     * The redirection5
     * @var string
     */
    public $redirection5;
    /**
     * The redirection5Email
     * @var string
     */
    public $redirection5Email;
    /**
     * The annouceMessage
     * @var string
     */
    public $annouceMessage;
    /**
     * The keepMessage
     * @var bool
     */
    public $keepMessage;
    /**
     * The audioformat
     * @var string
     */
    public $audioformat;
    /**
     * The fromEmail
     * @var string
     */
    public $fromEmail;
    /**
     * The fromName
     * @var string
     */
    public $fromName;
    /**
     * The forcePassword
     * @var bool
     */
    public $forcePassword;
    /**
     * The doNotRecord
     * @var bool
     */
    public $doNotRecord;
    /**
     * Constructor method for telephonyVoicemailOptionsListReturn
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection1()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection1Email()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection2()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection2Email()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection3()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection3Email()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection4()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection4Email()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection5()
     * @uses TelephonyVoicemailOptionsListReturn::setRedirection5Email()
     * @uses TelephonyVoicemailOptionsListReturn::setAnnouceMessage()
     * @uses TelephonyVoicemailOptionsListReturn::setKeepMessage()
     * @uses TelephonyVoicemailOptionsListReturn::setAudioformat()
     * @uses TelephonyVoicemailOptionsListReturn::setFromEmail()
     * @uses TelephonyVoicemailOptionsListReturn::setFromName()
     * @uses TelephonyVoicemailOptionsListReturn::setForcePassword()
     * @uses TelephonyVoicemailOptionsListReturn::setDoNotRecord()
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
     * @param string $annouceMessage
     * @param bool $keepMessage
     * @param string $audioformat
     * @param string $fromEmail
     * @param string $fromName
     * @param bool $forcePassword
     * @param bool $doNotRecord
     */
    public function __construct($redirection1 = null, $redirection1Email = null, $redirection2 = null, $redirection2Email = null, $redirection3 = null, $redirection3Email = null, $redirection4 = null, $redirection4Email = null, $redirection5 = null, $redirection5Email = null, $annouceMessage = null, $keepMessage = null, $audioformat = null, $fromEmail = null, $fromName = null, $forcePassword = null, $doNotRecord = null)
    {
        $this
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
            ->setAnnouceMessage($annouceMessage)
            ->setKeepMessage($keepMessage)
            ->setAudioformat($audioformat)
            ->setFromEmail($fromEmail)
            ->setFromName($fromName)
            ->setForcePassword($forcePassword)
            ->setDoNotRecord($doNotRecord);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection1($redirection1 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection1) && !is_string($redirection1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection1)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection1Email($redirection1Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection1Email) && !is_string($redirection1Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection1Email)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection2($redirection2 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection2) && !is_string($redirection2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection2)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection2Email($redirection2Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection2Email) && !is_string($redirection2Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection2Email)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection3($redirection3 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection3) && !is_string($redirection3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection3)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection3Email($redirection3Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection3Email) && !is_string($redirection3Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection3Email)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection4($redirection4 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection4) && !is_string($redirection4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection4)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection4Email($redirection4Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection4Email) && !is_string($redirection4Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection4Email)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection5($redirection5 = null)
    {
        // validation for constraint: string
        if (!is_null($redirection5) && !is_string($redirection5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection5)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setRedirection5Email($redirection5Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection5Email) && !is_string($redirection5Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection5Email)), __LINE__);
        }
        $this->redirection5Email = $redirection5Email;
        return $this;
    }
    /**
     * Get annouceMessage value
     * @return string|null
     */
    public function getAnnouceMessage()
    {
        return $this->annouceMessage;
    }
    /**
     * Set annouceMessage value
     * @param string $annouceMessage
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setAnnouceMessage($annouceMessage = null)
    {
        // validation for constraint: string
        if (!is_null($annouceMessage) && !is_string($annouceMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($annouceMessage)), __LINE__);
        }
        $this->annouceMessage = $annouceMessage;
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setKeepMessage($keepMessage = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepMessage) && !is_bool($keepMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keepMessage)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setAudioformat($audioformat = null)
    {
        // validation for constraint: string
        if (!is_null($audioformat) && !is_string($audioformat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($audioformat)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setFromEmail($fromEmail = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmail)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setFromName($fromName = null)
    {
        // validation for constraint: string
        if (!is_null($fromName) && !is_string($fromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromName)), __LINE__);
        }
        $this->fromName = $fromName;
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setForcePassword($forcePassword = null)
    {
        // validation for constraint: boolean
        if (!is_null($forcePassword) && !is_bool($forcePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forcePassword)), __LINE__);
        }
        $this->forcePassword = $forcePassword;
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
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
     */
    public function setDoNotRecord($doNotRecord = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotRecord) && !is_bool($doNotRecord)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($doNotRecord)), __LINE__);
        }
        $this->doNotRecord = $doNotRecord;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyVoicemailOptionsListReturn
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
