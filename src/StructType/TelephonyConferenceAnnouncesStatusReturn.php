<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceAnnouncesStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceAnnouncesStatusReturn extends AbstractStructBase
{
    /**
     * The custom
     * @var bool
     */
    public $custom;
    /**
     * Constructor method for telephonyConferenceAnnouncesStatusReturn
     * @uses TelephonyConferenceAnnouncesStatusReturn::setCustom()
     * @param bool $custom
     */
    public function __construct($custom = null)
    {
        $this
            ->setCustom($custom);
    }
    /**
     * Get custom value
     * @return bool|null
     */
    public function getCustom()
    {
        return $this->custom;
    }
    /**
     * Set custom value
     * @param bool $custom
     * @return \Ovh\StructType\TelephonyConferenceAnnouncesStatusReturn
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: boolean
        if (!is_null($custom) && !is_bool($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->custom = $custom;
        return $this;
    }
}
