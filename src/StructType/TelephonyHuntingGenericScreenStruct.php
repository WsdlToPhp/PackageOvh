<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenStruct extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The timeEnd
     * @var string
     */
    public $timeEnd;
    /**
     * The timeStart
     * @var string
     */
    public $timeStart;
    /**
     * The dayType
     * @var string
     */
    public $dayType;
    /**
     * The forwardPolicyIndex
     * @var string
     */
    public $forwardPolicyIndex;
    /**
     * Constructor method for telephonyHuntingGenericScreenStruct
     * @uses TelephonyHuntingGenericScreenStruct::setStatus()
     * @uses TelephonyHuntingGenericScreenStruct::setTimeEnd()
     * @uses TelephonyHuntingGenericScreenStruct::setTimeStart()
     * @uses TelephonyHuntingGenericScreenStruct::setDayType()
     * @uses TelephonyHuntingGenericScreenStruct::setForwardPolicyIndex()
     * @param string $status
     * @param string $timeEnd
     * @param string $timeStart
     * @param string $dayType
     * @param string $forwardPolicyIndex
     */
    public function __construct($status = null, $timeEnd = null, $timeStart = null, $dayType = null, $forwardPolicyIndex = null)
    {
        $this
            ->setStatus($status)
            ->setTimeEnd($timeEnd)
            ->setTimeStart($timeStart)
            ->setDayType($dayType)
            ->setForwardPolicyIndex($forwardPolicyIndex);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get timeEnd value
     * @return string|null
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }
    /**
     * Set timeEnd value
     * @param string $timeEnd
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setTimeEnd($timeEnd = null)
    {
        // validation for constraint: string
        if (!is_null($timeEnd) && !is_string($timeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeEnd, true), gettype($timeEnd)), __LINE__);
        }
        $this->timeEnd = $timeEnd;
        return $this;
    }
    /**
     * Get timeStart value
     * @return string|null
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }
    /**
     * Set timeStart value
     * @param string $timeStart
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setTimeStart($timeStart = null)
    {
        // validation for constraint: string
        if (!is_null($timeStart) && !is_string($timeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStart, true), gettype($timeStart)), __LINE__);
        }
        $this->timeStart = $timeStart;
        return $this;
    }
    /**
     * Get dayType value
     * @return string|null
     */
    public function getDayType()
    {
        return $this->dayType;
    }
    /**
     * Set dayType value
     * @param string $dayType
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setDayType($dayType = null)
    {
        // validation for constraint: string
        if (!is_null($dayType) && !is_string($dayType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dayType, true), gettype($dayType)), __LINE__);
        }
        $this->dayType = $dayType;
        return $this;
    }
    /**
     * Get forwardPolicyIndex value
     * @return string|null
     */
    public function getForwardPolicyIndex()
    {
        return $this->forwardPolicyIndex;
    }
    /**
     * Set forwardPolicyIndex value
     * @param string $forwardPolicyIndex
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenStruct
     */
    public function setForwardPolicyIndex($forwardPolicyIndex = null)
    {
        // validation for constraint: string
        if (!is_null($forwardPolicyIndex) && !is_string($forwardPolicyIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forwardPolicyIndex, true), gettype($forwardPolicyIndex)), __LINE__);
        }
        $this->forwardPolicyIndex = $forwardPolicyIndex;
        return $this;
    }
}
