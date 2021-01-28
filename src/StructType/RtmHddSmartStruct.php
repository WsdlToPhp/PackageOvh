<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmHddSmartStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmHddSmartStruct extends AbstractStructBase
{
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The multizoneErrorRate
     * @var int
     */
    public $multizoneErrorRate;
    /**
     * The currentPendingSector
     * @var int
     */
    public $currentPendingSector;
    /**
     * The udmaCrcError
     * @var int
     */
    public $udmaCrcError;
    /**
     * The offlineUncorrectable
     * @var int
     */
    public $offlineUncorrectable;
    /**
     * Constructor method for rtmHddSmartStruct
     * @uses RtmHddSmartStruct::setStatus()
     * @uses RtmHddSmartStruct::setMultizoneErrorRate()
     * @uses RtmHddSmartStruct::setCurrentPendingSector()
     * @uses RtmHddSmartStruct::setUdmaCrcError()
     * @uses RtmHddSmartStruct::setOfflineUncorrectable()
     * @param string $status
     * @param int $multizoneErrorRate
     * @param int $currentPendingSector
     * @param int $udmaCrcError
     * @param int $offlineUncorrectable
     */
    public function __construct($status = null, $multizoneErrorRate = null, $currentPendingSector = null, $udmaCrcError = null, $offlineUncorrectable = null)
    {
        $this
            ->setStatus($status)
            ->setMultizoneErrorRate($multizoneErrorRate)
            ->setCurrentPendingSector($currentPendingSector)
            ->setUdmaCrcError($udmaCrcError)
            ->setOfflineUncorrectable($offlineUncorrectable);
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
     * @return \Ovh\StructType\RtmHddSmartStruct
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
     * Get multizoneErrorRate value
     * @return int|null
     */
    public function getMultizoneErrorRate()
    {
        return $this->multizoneErrorRate;
    }
    /**
     * Set multizoneErrorRate value
     * @param int $multizoneErrorRate
     * @return \Ovh\StructType\RtmHddSmartStruct
     */
    public function setMultizoneErrorRate($multizoneErrorRate = null)
    {
        // validation for constraint: int
        if (!is_null($multizoneErrorRate) && !(is_int($multizoneErrorRate) || ctype_digit($multizoneErrorRate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($multizoneErrorRate, true), gettype($multizoneErrorRate)), __LINE__);
        }
        $this->multizoneErrorRate = $multizoneErrorRate;
        return $this;
    }
    /**
     * Get currentPendingSector value
     * @return int|null
     */
    public function getCurrentPendingSector()
    {
        return $this->currentPendingSector;
    }
    /**
     * Set currentPendingSector value
     * @param int $currentPendingSector
     * @return \Ovh\StructType\RtmHddSmartStruct
     */
    public function setCurrentPendingSector($currentPendingSector = null)
    {
        // validation for constraint: int
        if (!is_null($currentPendingSector) && !(is_int($currentPendingSector) || ctype_digit($currentPendingSector))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currentPendingSector, true), gettype($currentPendingSector)), __LINE__);
        }
        $this->currentPendingSector = $currentPendingSector;
        return $this;
    }
    /**
     * Get udmaCrcError value
     * @return int|null
     */
    public function getUdmaCrcError()
    {
        return $this->udmaCrcError;
    }
    /**
     * Set udmaCrcError value
     * @param int $udmaCrcError
     * @return \Ovh\StructType\RtmHddSmartStruct
     */
    public function setUdmaCrcError($udmaCrcError = null)
    {
        // validation for constraint: int
        if (!is_null($udmaCrcError) && !(is_int($udmaCrcError) || ctype_digit($udmaCrcError))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($udmaCrcError, true), gettype($udmaCrcError)), __LINE__);
        }
        $this->udmaCrcError = $udmaCrcError;
        return $this;
    }
    /**
     * Get offlineUncorrectable value
     * @return int|null
     */
    public function getOfflineUncorrectable()
    {
        return $this->offlineUncorrectable;
    }
    /**
     * Set offlineUncorrectable value
     * @param int $offlineUncorrectable
     * @return \Ovh\StructType\RtmHddSmartStruct
     */
    public function setOfflineUncorrectable($offlineUncorrectable = null)
    {
        // validation for constraint: int
        if (!is_null($offlineUncorrectable) && !(is_int($offlineUncorrectable) || ctype_digit($offlineUncorrectable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offlineUncorrectable, true), gettype($offlineUncorrectable)), __LINE__);
        }
        $this->offlineUncorrectable = $offlineUncorrectable;
        return $this;
    }
}
