<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserQuotaStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserQuotaStruct extends AbstractStructBase
{
    /**
     * The quotaLeft
     * @var string
     */
    public $quotaLeft;
    /**
     * The quotaStatus
     * @var string
     */
    public $quotaStatus;
    /**
     * Constructor method for telephonySmsUserQuotaStruct
     * @uses TelephonySmsUserQuotaStruct::setQuotaLeft()
     * @uses TelephonySmsUserQuotaStruct::setQuotaStatus()
     * @param string $quotaLeft
     * @param string $quotaStatus
     */
    public function __construct($quotaLeft = null, $quotaStatus = null)
    {
        $this
            ->setQuotaLeft($quotaLeft)
            ->setQuotaStatus($quotaStatus);
    }
    /**
     * Get quotaLeft value
     * @return string|null
     */
    public function getQuotaLeft()
    {
        return $this->quotaLeft;
    }
    /**
     * Set quotaLeft value
     * @param string $quotaLeft
     * @return \Ovh\StructType\TelephonySmsUserQuotaStruct
     */
    public function setQuotaLeft($quotaLeft = null)
    {
        // validation for constraint: string
        if (!is_null($quotaLeft) && !is_string($quotaLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quotaLeft)), __LINE__);
        }
        $this->quotaLeft = $quotaLeft;
        return $this;
    }
    /**
     * Get quotaStatus value
     * @return string|null
     */
    public function getQuotaStatus()
    {
        return $this->quotaStatus;
    }
    /**
     * Set quotaStatus value
     * @param string $quotaStatus
     * @return \Ovh\StructType\TelephonySmsUserQuotaStruct
     */
    public function setQuotaStatus($quotaStatus = null)
    {
        // validation for constraint: string
        if (!is_null($quotaStatus) && !is_string($quotaStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quotaStatus)), __LINE__);
        }
        $this->quotaStatus = $quotaStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsUserQuotaStruct
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
