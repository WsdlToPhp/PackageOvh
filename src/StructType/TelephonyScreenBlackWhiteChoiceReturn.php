<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenBlackWhiteChoiceReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenBlackWhiteChoiceReturn extends AbstractStructBase
{
    /**
     * The incomingScreenlist
     * @var string
     */
    public $incomingScreenlist;
    /**
     * The outgoingScreenlist
     * @var string
     */
    public $outgoingScreenlist;
    /**
     * The outgoingCodeUnlock
     * @var string
     */
    public $outgoingCodeUnlock;
    /**
     * Constructor method for telephonyScreenBlackWhiteChoiceReturn
     * @uses TelephonyScreenBlackWhiteChoiceReturn::setIncomingScreenlist()
     * @uses TelephonyScreenBlackWhiteChoiceReturn::setOutgoingScreenlist()
     * @uses TelephonyScreenBlackWhiteChoiceReturn::setOutgoingCodeUnlock()
     * @param string $incomingScreenlist
     * @param string $outgoingScreenlist
     * @param string $outgoingCodeUnlock
     */
    public function __construct($incomingScreenlist = null, $outgoingScreenlist = null, $outgoingCodeUnlock = null)
    {
        $this
            ->setIncomingScreenlist($incomingScreenlist)
            ->setOutgoingScreenlist($outgoingScreenlist)
            ->setOutgoingCodeUnlock($outgoingCodeUnlock);
    }
    /**
     * Get incomingScreenlist value
     * @return string|null
     */
    public function getIncomingScreenlist()
    {
        return $this->incomingScreenlist;
    }
    /**
     * Set incomingScreenlist value
     * @param string $incomingScreenlist
     * @return \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn
     */
    public function setIncomingScreenlist($incomingScreenlist = null)
    {
        // validation for constraint: string
        if (!is_null($incomingScreenlist) && !is_string($incomingScreenlist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incomingScreenlist, true), gettype($incomingScreenlist)), __LINE__);
        }
        $this->incomingScreenlist = $incomingScreenlist;
        return $this;
    }
    /**
     * Get outgoingScreenlist value
     * @return string|null
     */
    public function getOutgoingScreenlist()
    {
        return $this->outgoingScreenlist;
    }
    /**
     * Set outgoingScreenlist value
     * @param string $outgoingScreenlist
     * @return \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn
     */
    public function setOutgoingScreenlist($outgoingScreenlist = null)
    {
        // validation for constraint: string
        if (!is_null($outgoingScreenlist) && !is_string($outgoingScreenlist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outgoingScreenlist, true), gettype($outgoingScreenlist)), __LINE__);
        }
        $this->outgoingScreenlist = $outgoingScreenlist;
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
     * @return \Ovh\StructType\TelephonyScreenBlackWhiteChoiceReturn
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
}
