<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenOptionsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenOptionsStruct extends AbstractStructBase
{
    /**
     * The callForward
     * @var string
     */
    public $callForward;
    /**
     * The voicemail
     * @var string
     */
    public $voicemail;
    /**
     * The index
     * @var string
     */
    public $index;
    /**
     * The timeout
     * @var string
     */
    public $timeout;
    /**
     * Constructor method for telephonyHuntingGenericScreenOptionsStruct
     * @uses TelephonyHuntingGenericScreenOptionsStruct::setCallForward()
     * @uses TelephonyHuntingGenericScreenOptionsStruct::setVoicemail()
     * @uses TelephonyHuntingGenericScreenOptionsStruct::setIndex()
     * @uses TelephonyHuntingGenericScreenOptionsStruct::setTimeout()
     * @param string $callForward
     * @param string $voicemail
     * @param string $index
     * @param string $timeout
     */
    public function __construct($callForward = null, $voicemail = null, $index = null, $timeout = null)
    {
        $this
            ->setCallForward($callForward)
            ->setVoicemail($voicemail)
            ->setIndex($index)
            ->setTimeout($timeout);
    }
    /**
     * Get callForward value
     * @return string|null
     */
    public function getCallForward()
    {
        return $this->callForward;
    }
    /**
     * Set callForward value
     * @param string $callForward
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsStruct
     */
    public function setCallForward($callForward = null)
    {
        // validation for constraint: string
        if (!is_null($callForward) && !is_string($callForward)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callForward)), __LINE__);
        }
        $this->callForward = $callForward;
        return $this;
    }
    /**
     * Get voicemail value
     * @return string|null
     */
    public function getVoicemail()
    {
        return $this->voicemail;
    }
    /**
     * Set voicemail value
     * @param string $voicemail
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsStruct
     */
    public function setVoicemail($voicemail = null)
    {
        // validation for constraint: string
        if (!is_null($voicemail) && !is_string($voicemail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voicemail)), __LINE__);
        }
        $this->voicemail = $voicemail;
        return $this;
    }
    /**
     * Get index value
     * @return string|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param string $index
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsStruct
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Get timeout value
     * @return string|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param string $timeout
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsStruct
     */
    public function setTimeout($timeout = null)
    {
        // validation for constraint: string
        if (!is_null($timeout) && !is_string($timeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyHuntingGenericScreenOptionsStruct
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
