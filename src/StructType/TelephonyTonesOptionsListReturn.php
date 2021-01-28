<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyTonesOptionsListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyTonesOptionsListReturn extends AbstractStructBase
{
    /**
     * The toneRingback
     * @var string
     */
    public $toneRingback;
    /**
     * The toneOnHold
     * @var string
     */
    public $toneOnHold;
    /**
     * The toneOnClosure
     * @var string
     */
    public $toneOnClosure;
    /**
     * The toneOnCallWaiting
     * @var string
     */
    public $toneOnCallWaiting;
    /**
     * Constructor method for telephonyTonesOptionsListReturn
     * @uses TelephonyTonesOptionsListReturn::setToneRingback()
     * @uses TelephonyTonesOptionsListReturn::setToneOnHold()
     * @uses TelephonyTonesOptionsListReturn::setToneOnClosure()
     * @uses TelephonyTonesOptionsListReturn::setToneOnCallWaiting()
     * @param string $toneRingback
     * @param string $toneOnHold
     * @param string $toneOnClosure
     * @param string $toneOnCallWaiting
     */
    public function __construct($toneRingback = null, $toneOnHold = null, $toneOnClosure = null, $toneOnCallWaiting = null)
    {
        $this
            ->setToneRingback($toneRingback)
            ->setToneOnHold($toneOnHold)
            ->setToneOnClosure($toneOnClosure)
            ->setToneOnCallWaiting($toneOnCallWaiting);
    }
    /**
     * Get toneRingback value
     * @return string|null
     */
    public function getToneRingback()
    {
        return $this->toneRingback;
    }
    /**
     * Set toneRingback value
     * @param string $toneRingback
     * @return \Ovh\StructType\TelephonyTonesOptionsListReturn
     */
    public function setToneRingback($toneRingback = null)
    {
        // validation for constraint: string
        if (!is_null($toneRingback) && !is_string($toneRingback)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toneRingback, true), gettype($toneRingback)), __LINE__);
        }
        $this->toneRingback = $toneRingback;
        return $this;
    }
    /**
     * Get toneOnHold value
     * @return string|null
     */
    public function getToneOnHold()
    {
        return $this->toneOnHold;
    }
    /**
     * Set toneOnHold value
     * @param string $toneOnHold
     * @return \Ovh\StructType\TelephonyTonesOptionsListReturn
     */
    public function setToneOnHold($toneOnHold = null)
    {
        // validation for constraint: string
        if (!is_null($toneOnHold) && !is_string($toneOnHold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toneOnHold, true), gettype($toneOnHold)), __LINE__);
        }
        $this->toneOnHold = $toneOnHold;
        return $this;
    }
    /**
     * Get toneOnClosure value
     * @return string|null
     */
    public function getToneOnClosure()
    {
        return $this->toneOnClosure;
    }
    /**
     * Set toneOnClosure value
     * @param string $toneOnClosure
     * @return \Ovh\StructType\TelephonyTonesOptionsListReturn
     */
    public function setToneOnClosure($toneOnClosure = null)
    {
        // validation for constraint: string
        if (!is_null($toneOnClosure) && !is_string($toneOnClosure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toneOnClosure, true), gettype($toneOnClosure)), __LINE__);
        }
        $this->toneOnClosure = $toneOnClosure;
        return $this;
    }
    /**
     * Get toneOnCallWaiting value
     * @return string|null
     */
    public function getToneOnCallWaiting()
    {
        return $this->toneOnCallWaiting;
    }
    /**
     * Set toneOnCallWaiting value
     * @param string $toneOnCallWaiting
     * @return \Ovh\StructType\TelephonyTonesOptionsListReturn
     */
    public function setToneOnCallWaiting($toneOnCallWaiting = null)
    {
        // validation for constraint: string
        if (!is_null($toneOnCallWaiting) && !is_string($toneOnCallWaiting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toneOnCallWaiting, true), gettype($toneOnCallWaiting)), __LINE__);
        }
        $this->toneOnCallWaiting = $toneOnCallWaiting;
        return $this;
    }
}
