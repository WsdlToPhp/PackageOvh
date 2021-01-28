<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceEdit StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceEdit extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The shortCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shortCode;
    /**
     * The keyword
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyword;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The cgiActivation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $cgiActivation;
    /**
     * The cgiUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cgiUrl;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * The trackingMedias
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $trackingMedias;
    /**
     * The trackingTargets
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $trackingTargets;
    /**
     * The trackingDefaultSmsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $trackingDefaultSmsAccount;
    /**
     * The trackingDefaultSmsSender
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $trackingDefaultSmsSender;
    /**
     * The sendingDefaultSmsAccountMtBilling
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sendingDefaultSmsAccountMtBilling;
    /**
     * The sendingNoSmsMt
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $sendingNoSmsMt;
    /**
     * Constructor method for telephonySmsplusServiceEdit
     * @uses TelephonySmsplusServiceEdit::setSession()
     * @uses TelephonySmsplusServiceEdit::setShortCode()
     * @uses TelephonySmsplusServiceEdit::setKeyword()
     * @uses TelephonySmsplusServiceEdit::setDescription()
     * @uses TelephonySmsplusServiceEdit::setCgiActivation()
     * @uses TelephonySmsplusServiceEdit::setCgiUrl()
     * @uses TelephonySmsplusServiceEdit::setText()
     * @uses TelephonySmsplusServiceEdit::setTrackingMedias()
     * @uses TelephonySmsplusServiceEdit::setTrackingTargets()
     * @uses TelephonySmsplusServiceEdit::setTrackingDefaultSmsAccount()
     * @uses TelephonySmsplusServiceEdit::setTrackingDefaultSmsSender()
     * @uses TelephonySmsplusServiceEdit::setSendingDefaultSmsAccountMtBilling()
     * @uses TelephonySmsplusServiceEdit::setSendingNoSmsMt()
     * @param string $session
     * @param string $shortCode
     * @param string $keyword
     * @param string $description
     * @param bool $cgiActivation
     * @param string $cgiUrl
     * @param string $text
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingMedias
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingTargets
     * @param string $trackingDefaultSmsAccount
     * @param string $trackingDefaultSmsSender
     * @param string $sendingDefaultSmsAccountMtBilling
     * @param bool $sendingNoSmsMt
     */
    public function __construct($session = null, $shortCode = null, $keyword = null, $description = null, $cgiActivation = null, $cgiUrl = null, $text = null, \Ovh\ArrayType\MyArrayOfStringType $trackingMedias = null, \Ovh\ArrayType\MyArrayOfStringType $trackingTargets = null, $trackingDefaultSmsAccount = null, $trackingDefaultSmsSender = null, $sendingDefaultSmsAccountMtBilling = null, $sendingNoSmsMt = null)
    {
        $this
            ->setSession($session)
            ->setShortCode($shortCode)
            ->setKeyword($keyword)
            ->setDescription($description)
            ->setCgiActivation($cgiActivation)
            ->setCgiUrl($cgiUrl)
            ->setText($text)
            ->setTrackingMedias($trackingMedias)
            ->setTrackingTargets($trackingTargets)
            ->setTrackingDefaultSmsAccount($trackingDefaultSmsAccount)
            ->setTrackingDefaultSmsSender($trackingDefaultSmsSender)
            ->setSendingDefaultSmsAccountMtBilling($sendingDefaultSmsAccountMtBilling)
            ->setSendingNoSmsMt($sendingNoSmsMt);
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
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
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
     * Get shortCode value
     * @return string|null
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }
    /**
     * Set shortCode value
     * @param string $shortCode
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setShortCode($shortCode = null)
    {
        // validation for constraint: string
        if (!is_null($shortCode) && !is_string($shortCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortCode, true), gettype($shortCode)), __LINE__);
        }
        $this->shortCode = $shortCode;
        return $this;
    }
    /**
     * Get keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
    /**
     * Set keyword value
     * @param string $keyword
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyword, true), gettype($keyword)), __LINE__);
        }
        $this->keyword = $keyword;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get cgiActivation value
     * @return bool|null
     */
    public function getCgiActivation()
    {
        return $this->cgiActivation;
    }
    /**
     * Set cgiActivation value
     * @param bool $cgiActivation
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setCgiActivation($cgiActivation = null)
    {
        // validation for constraint: boolean
        if (!is_null($cgiActivation) && !is_bool($cgiActivation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cgiActivation, true), gettype($cgiActivation)), __LINE__);
        }
        $this->cgiActivation = $cgiActivation;
        return $this;
    }
    /**
     * Get cgiUrl value
     * @return string|null
     */
    public function getCgiUrl()
    {
        return $this->cgiUrl;
    }
    /**
     * Set cgiUrl value
     * @param string $cgiUrl
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setCgiUrl($cgiUrl = null)
    {
        // validation for constraint: string
        if (!is_null($cgiUrl) && !is_string($cgiUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cgiUrl, true), gettype($cgiUrl)), __LINE__);
        }
        $this->cgiUrl = $cgiUrl;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Get trackingMedias value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTrackingMedias()
    {
        return $this->trackingMedias;
    }
    /**
     * Set trackingMedias value
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingMedias
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setTrackingMedias(\Ovh\ArrayType\MyArrayOfStringType $trackingMedias = null)
    {
        $this->trackingMedias = $trackingMedias;
        return $this;
    }
    /**
     * Get trackingTargets value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTrackingTargets()
    {
        return $this->trackingTargets;
    }
    /**
     * Set trackingTargets value
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingTargets
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setTrackingTargets(\Ovh\ArrayType\MyArrayOfStringType $trackingTargets = null)
    {
        $this->trackingTargets = $trackingTargets;
        return $this;
    }
    /**
     * Get trackingDefaultSmsAccount value
     * @return string|null
     */
    public function getTrackingDefaultSmsAccount()
    {
        return $this->trackingDefaultSmsAccount;
    }
    /**
     * Set trackingDefaultSmsAccount value
     * @param string $trackingDefaultSmsAccount
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setTrackingDefaultSmsAccount($trackingDefaultSmsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($trackingDefaultSmsAccount) && !is_string($trackingDefaultSmsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingDefaultSmsAccount, true), gettype($trackingDefaultSmsAccount)), __LINE__);
        }
        $this->trackingDefaultSmsAccount = $trackingDefaultSmsAccount;
        return $this;
    }
    /**
     * Get trackingDefaultSmsSender value
     * @return string|null
     */
    public function getTrackingDefaultSmsSender()
    {
        return $this->trackingDefaultSmsSender;
    }
    /**
     * Set trackingDefaultSmsSender value
     * @param string $trackingDefaultSmsSender
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setTrackingDefaultSmsSender($trackingDefaultSmsSender = null)
    {
        // validation for constraint: string
        if (!is_null($trackingDefaultSmsSender) && !is_string($trackingDefaultSmsSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingDefaultSmsSender, true), gettype($trackingDefaultSmsSender)), __LINE__);
        }
        $this->trackingDefaultSmsSender = $trackingDefaultSmsSender;
        return $this;
    }
    /**
     * Get sendingDefaultSmsAccountMtBilling value
     * @return string|null
     */
    public function getSendingDefaultSmsAccountMtBilling()
    {
        return $this->sendingDefaultSmsAccountMtBilling;
    }
    /**
     * Set sendingDefaultSmsAccountMtBilling value
     * @param string $sendingDefaultSmsAccountMtBilling
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setSendingDefaultSmsAccountMtBilling($sendingDefaultSmsAccountMtBilling = null)
    {
        // validation for constraint: string
        if (!is_null($sendingDefaultSmsAccountMtBilling) && !is_string($sendingDefaultSmsAccountMtBilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendingDefaultSmsAccountMtBilling, true), gettype($sendingDefaultSmsAccountMtBilling)), __LINE__);
        }
        $this->sendingDefaultSmsAccountMtBilling = $sendingDefaultSmsAccountMtBilling;
        return $this;
    }
    /**
     * Get sendingNoSmsMt value
     * @return bool|null
     */
    public function getSendingNoSmsMt()
    {
        return $this->sendingNoSmsMt;
    }
    /**
     * Set sendingNoSmsMt value
     * @param bool $sendingNoSmsMt
     * @return \Ovh\StructType\TelephonySmsplusServiceEdit
     */
    public function setSendingNoSmsMt($sendingNoSmsMt = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendingNoSmsMt) && !is_bool($sendingNoSmsMt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendingNoSmsMt, true), gettype($sendingNoSmsMt)), __LINE__);
        }
        $this->sendingNoSmsMt = $sendingNoSmsMt;
        return $this;
    }
}
