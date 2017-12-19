<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for overquotaInfoStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OverquotaInfoStruct extends AbstractStructBase
{
    /**
     * The month
     * @var string
     */
    public $month;
    /**
     * The traffic
     * @var int
     */
    public $traffic;
    /**
     * The hits
     * @var int
     */
    public $hits;
    /**
     * Constructor method for overquotaInfoStruct
     * @uses OverquotaInfoStruct::setMonth()
     * @uses OverquotaInfoStruct::setTraffic()
     * @uses OverquotaInfoStruct::setHits()
     * @param string $month
     * @param int $traffic
     * @param int $hits
     */
    public function __construct($month = null, $traffic = null, $hits = null)
    {
        $this
            ->setMonth($month)
            ->setTraffic($traffic)
            ->setHits($hits);
    }
    /**
     * Get month value
     * @return string|null
     */
    public function getMonth()
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param string $month
     * @return \Ovh\StructType\OverquotaInfoStruct
     */
    public function setMonth($month = null)
    {
        // validation for constraint: string
        if (!is_null($month) && !is_string($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($month)), __LINE__);
        }
        $this->month = $month;
        return $this;
    }
    /**
     * Get traffic value
     * @return int|null
     */
    public function getTraffic()
    {
        return $this->traffic;
    }
    /**
     * Set traffic value
     * @param int $traffic
     * @return \Ovh\StructType\OverquotaInfoStruct
     */
    public function setTraffic($traffic = null)
    {
        // validation for constraint: int
        if (!is_null($traffic) && !is_numeric($traffic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($traffic)), __LINE__);
        }
        $this->traffic = $traffic;
        return $this;
    }
    /**
     * Get hits value
     * @return int|null
     */
    public function getHits()
    {
        return $this->hits;
    }
    /**
     * Set hits value
     * @param int $hits
     * @return \Ovh\StructType\OverquotaInfoStruct
     */
    public function setHits($hits = null)
    {
        // validation for constraint: int
        if (!is_null($hits) && !is_numeric($hits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hits)), __LINE__);
        }
        $this->hits = $hits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\OverquotaInfoStruct
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
