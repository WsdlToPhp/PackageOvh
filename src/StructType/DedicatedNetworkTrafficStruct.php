<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetworkTrafficStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetworkTrafficStruct extends AbstractStructBase
{
    /**
     * The lastUpdate
     * @var string
     */
    public $lastUpdate;
    /**
     * The currentQuota
     * @var \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct
     */
    public $currentQuota;
    /**
     * The monthlyTraffic
     * @var \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct
     */
    public $monthlyTraffic;
    /**
     * The nextTrafficReset
     * @var string
     */
    public $nextTrafficReset;
    /**
     * The monthlyQuota
     * @var string
     */
    public $monthlyQuota;
    /**
     * The nextQuotaReset
     * @var string
     */
    public $nextQuotaReset;
    /**
     * Constructor method for dedicatedNetworkTrafficStruct
     * @uses DedicatedNetworkTrafficStruct::setLastUpdate()
     * @uses DedicatedNetworkTrafficStruct::setCurrentQuota()
     * @uses DedicatedNetworkTrafficStruct::setMonthlyTraffic()
     * @uses DedicatedNetworkTrafficStruct::setNextTrafficReset()
     * @uses DedicatedNetworkTrafficStruct::setMonthlyQuota()
     * @uses DedicatedNetworkTrafficStruct::setNextQuotaReset()
     * @param string $lastUpdate
     * @param \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $currentQuota
     * @param \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $monthlyTraffic
     * @param string $nextTrafficReset
     * @param string $monthlyQuota
     * @param string $nextQuotaReset
     */
    public function __construct($lastUpdate = null, \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $currentQuota = null, \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $monthlyTraffic = null, $nextTrafficReset = null, $monthlyQuota = null, $nextQuotaReset = null)
    {
        $this
            ->setLastUpdate($lastUpdate)
            ->setCurrentQuota($currentQuota)
            ->setMonthlyTraffic($monthlyTraffic)
            ->setNextTrafficReset($nextTrafficReset)
            ->setMonthlyQuota($monthlyQuota)
            ->setNextQuotaReset($nextQuotaReset);
    }
    /**
     * Get lastUpdate value
     * @return string|null
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public function setLastUpdate($lastUpdate = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
    /**
     * Get currentQuota value
     * @return \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct|null
     */
    public function getCurrentQuota()
    {
        return $this->currentQuota;
    }
    /**
     * Set currentQuota value
     * @param \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $currentQuota
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public function setCurrentQuota(\Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $currentQuota = null)
    {
        $this->currentQuota = $currentQuota;
        return $this;
    }
    /**
     * Get monthlyTraffic value
     * @return \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct|null
     */
    public function getMonthlyTraffic()
    {
        return $this->monthlyTraffic;
    }
    /**
     * Set monthlyTraffic value
     * @param \Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $monthlyTraffic
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public function setMonthlyTraffic(\Ovh\StructType\DedicatedNetworkTrafficDetailsStruct $monthlyTraffic = null)
    {
        $this->monthlyTraffic = $monthlyTraffic;
        return $this;
    }
    /**
     * Get nextTrafficReset value
     * @return string|null
     */
    public function getNextTrafficReset()
    {
        return $this->nextTrafficReset;
    }
    /**
     * Set nextTrafficReset value
     * @param string $nextTrafficReset
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public function setNextTrafficReset($nextTrafficReset = null)
    {
        // validation for constraint: string
        if (!is_null($nextTrafficReset) && !is_string($nextTrafficReset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextTrafficReset)), __LINE__);
        }
        $this->nextTrafficReset = $nextTrafficReset;
        return $this;
    }
    /**
     * Get monthlyQuota value
     * @return string|null
     */
    public function getMonthlyQuota()
    {
        return $this->monthlyQuota;
    }
    /**
     * Set monthlyQuota value
     * @param string $monthlyQuota
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public function setMonthlyQuota($monthlyQuota = null)
    {
        // validation for constraint: string
        if (!is_null($monthlyQuota) && !is_string($monthlyQuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($monthlyQuota)), __LINE__);
        }
        $this->monthlyQuota = $monthlyQuota;
        return $this;
    }
    /**
     * Get nextQuotaReset value
     * @return string|null
     */
    public function getNextQuotaReset()
    {
        return $this->nextQuotaReset;
    }
    /**
     * Set nextQuotaReset value
     * @param string $nextQuotaReset
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public function setNextQuotaReset($nextQuotaReset = null)
    {
        // validation for constraint: string
        if (!is_null($nextQuotaReset) && !is_string($nextQuotaReset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nextQuotaReset)), __LINE__);
        }
        $this->nextQuotaReset = $nextQuotaReset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct
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
