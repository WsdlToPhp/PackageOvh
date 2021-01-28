<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryPJHeadingStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryPJHeadingStruct extends AbstractStructBase
{
    /**
     * The codePJ
     * @var string
     */
    public $codePJ;
    /**
     * The labelPJ
     * @var string
     */
    public $labelPJ;
    /**
     * The isAssociatedWithAPE
     * @var string
     */
    public $isAssociatedWithAPE;
    /**
     * The notification
     * @var string
     */
    public $notification;
    /**
     * Constructor method for telephonyDirectoryPJHeadingStruct
     * @uses TelephonyDirectoryPJHeadingStruct::setCodePJ()
     * @uses TelephonyDirectoryPJHeadingStruct::setLabelPJ()
     * @uses TelephonyDirectoryPJHeadingStruct::setIsAssociatedWithAPE()
     * @uses TelephonyDirectoryPJHeadingStruct::setNotification()
     * @param string $codePJ
     * @param string $labelPJ
     * @param string $isAssociatedWithAPE
     * @param string $notification
     */
    public function __construct($codePJ = null, $labelPJ = null, $isAssociatedWithAPE = null, $notification = null)
    {
        $this
            ->setCodePJ($codePJ)
            ->setLabelPJ($labelPJ)
            ->setIsAssociatedWithAPE($isAssociatedWithAPE)
            ->setNotification($notification);
    }
    /**
     * Get codePJ value
     * @return string|null
     */
    public function getCodePJ()
    {
        return $this->codePJ;
    }
    /**
     * Set codePJ value
     * @param string $codePJ
     * @return \Ovh\StructType\TelephonyDirectoryPJHeadingStruct
     */
    public function setCodePJ($codePJ = null)
    {
        // validation for constraint: string
        if (!is_null($codePJ) && !is_string($codePJ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePJ, true), gettype($codePJ)), __LINE__);
        }
        $this->codePJ = $codePJ;
        return $this;
    }
    /**
     * Get labelPJ value
     * @return string|null
     */
    public function getLabelPJ()
    {
        return $this->labelPJ;
    }
    /**
     * Set labelPJ value
     * @param string $labelPJ
     * @return \Ovh\StructType\TelephonyDirectoryPJHeadingStruct
     */
    public function setLabelPJ($labelPJ = null)
    {
        // validation for constraint: string
        if (!is_null($labelPJ) && !is_string($labelPJ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelPJ, true), gettype($labelPJ)), __LINE__);
        }
        $this->labelPJ = $labelPJ;
        return $this;
    }
    /**
     * Get isAssociatedWithAPE value
     * @return string|null
     */
    public function getIsAssociatedWithAPE()
    {
        return $this->isAssociatedWithAPE;
    }
    /**
     * Set isAssociatedWithAPE value
     * @param string $isAssociatedWithAPE
     * @return \Ovh\StructType\TelephonyDirectoryPJHeadingStruct
     */
    public function setIsAssociatedWithAPE($isAssociatedWithAPE = null)
    {
        // validation for constraint: string
        if (!is_null($isAssociatedWithAPE) && !is_string($isAssociatedWithAPE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isAssociatedWithAPE, true), gettype($isAssociatedWithAPE)), __LINE__);
        }
        $this->isAssociatedWithAPE = $isAssociatedWithAPE;
        return $this;
    }
    /**
     * Get notification value
     * @return string|null
     */
    public function getNotification()
    {
        return $this->notification;
    }
    /**
     * Set notification value
     * @param string $notification
     * @return \Ovh\StructType\TelephonyDirectoryPJHeadingStruct
     */
    public function setNotification($notification = null)
    {
        // validation for constraint: string
        if (!is_null($notification) && !is_string($notification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notification, true), gettype($notification)), __LINE__);
        }
        $this->notification = $notification;
        return $this;
    }
}
