<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenListBlackWhiteChoiceModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenListBlackWhiteChoiceModify extends AbstractStructBase
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
     * The screenList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $screenList;
    /**
     * The outgoingCodeUnlock
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $outgoingCodeUnlock;
    /**
     * The incomingOoutgoing
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $incomingOoutgoing;
    /**
     * Constructor method for telephonyScreenListBlackWhiteChoiceModify
     * @uses TelephonyScreenListBlackWhiteChoiceModify::setSession()
     * @uses TelephonyScreenListBlackWhiteChoiceModify::setNumber()
     * @uses TelephonyScreenListBlackWhiteChoiceModify::setCountry()
     * @uses TelephonyScreenListBlackWhiteChoiceModify::setScreenList()
     * @uses TelephonyScreenListBlackWhiteChoiceModify::setOutgoingCodeUnlock()
     * @uses TelephonyScreenListBlackWhiteChoiceModify::setIncomingOoutgoing()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $screenList
     * @param string $outgoingCodeUnlock
     * @param string $incomingOoutgoing
     */
    public function __construct($session = null, $number = null, $country = null, $screenList = null, $outgoingCodeUnlock = null, $incomingOoutgoing = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setScreenList($screenList)
            ->setOutgoingCodeUnlock($outgoingCodeUnlock)
            ->setIncomingOoutgoing($incomingOoutgoing);
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
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify
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
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify
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
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify
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
     * Get screenList value
     * @return string|null
     */
    public function getScreenList()
    {
        return $this->screenList;
    }
    /**
     * Set screenList value
     * @param string $screenList
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify
     */
    public function setScreenList($screenList = null)
    {
        // validation for constraint: string
        if (!is_null($screenList) && !is_string($screenList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenList, true), gettype($screenList)), __LINE__);
        }
        $this->screenList = $screenList;
        return $this;
    }
    /**
     * Get outgoingCodeUnlock value
     * @return string|null
     */
    public function getOutgoingCodeUnlock()
    {
        return $this->outgoingCodeUnlock;
    }
    /**
     * Set outgoingCodeUnlock value
     * @param string $outgoingCodeUnlock
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify
     */
    public function setOutgoingCodeUnlock($outgoingCodeUnlock = null)
    {
        // validation for constraint: string
        if (!is_null($outgoingCodeUnlock) && !is_string($outgoingCodeUnlock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outgoingCodeUnlock, true), gettype($outgoingCodeUnlock)), __LINE__);
        }
        $this->outgoingCodeUnlock = $outgoingCodeUnlock;
        return $this;
    }
    /**
     * Get incomingOoutgoing value
     * @return string|null
     */
    public function getIncomingOoutgoing()
    {
        return $this->incomingOoutgoing;
    }
    /**
     * Set incomingOoutgoing value
     * @param string $incomingOoutgoing
     * @return \Ovh\StructType\TelephonyScreenListBlackWhiteChoiceModify
     */
    public function setIncomingOoutgoing($incomingOoutgoing = null)
    {
        // validation for constraint: string
        if (!is_null($incomingOoutgoing) && !is_string($incomingOoutgoing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incomingOoutgoing, true), gettype($incomingOoutgoing)), __LINE__);
        }
        $this->incomingOoutgoing = $incomingOoutgoing;
        return $this;
    }
}
