<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPlugAndPhoneInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPlugAndPhoneInfoReturn extends AbstractStructBase
{
    /**
     * The brand
     * @var string
     */
    public $brand;
    /**
     * The protocol
     * @var string
     */
    public $protocol;
    /**
     * The mac
     * @var string
     */
    public $mac;
    /**
     * The gfKeyCount
     * @var int
     */
    public $gfKeyCount;
    /**
     * The skin
     * @var string
     */
    public $skin;
    /**
     * Constructor method for telephonyPlugAndPhoneInfoReturn
     * @uses TelephonyPlugAndPhoneInfoReturn::setBrand()
     * @uses TelephonyPlugAndPhoneInfoReturn::setProtocol()
     * @uses TelephonyPlugAndPhoneInfoReturn::setMac()
     * @uses TelephonyPlugAndPhoneInfoReturn::setGfKeyCount()
     * @uses TelephonyPlugAndPhoneInfoReturn::setSkin()
     * @param string $brand
     * @param string $protocol
     * @param string $mac
     * @param int $gfKeyCount
     * @param string $skin
     */
    public function __construct($brand = null, $protocol = null, $mac = null, $gfKeyCount = null, $skin = null)
    {
        $this
            ->setBrand($brand)
            ->setProtocol($protocol)
            ->setMac($mac)
            ->setGfKeyCount($gfKeyCount)
            ->setSkin($skin);
    }
    /**
     * Get brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * Set brand value
     * @param string $brand
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get protocol value
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /**
     * Set protocol value
     * @param string $protocol
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public function setProtocol($protocol = null)
    {
        // validation for constraint: string
        if (!is_null($protocol) && !is_string($protocol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($protocol, true), gettype($protocol)), __LINE__);
        }
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Get mac value
     * @return string|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param string $mac
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mac, true), gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Get gfKeyCount value
     * @return int|null
     */
    public function getGfKeyCount()
    {
        return $this->gfKeyCount;
    }
    /**
     * Set gfKeyCount value
     * @param int $gfKeyCount
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public function setGfKeyCount($gfKeyCount = null)
    {
        // validation for constraint: int
        if (!is_null($gfKeyCount) && !(is_int($gfKeyCount) || ctype_digit($gfKeyCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gfKeyCount, true), gettype($gfKeyCount)), __LINE__);
        }
        $this->gfKeyCount = $gfKeyCount;
        return $this;
    }
    /**
     * Get skin value
     * @return string|null
     */
    public function getSkin()
    {
        return $this->skin;
    }
    /**
     * Set skin value
     * @param string $skin
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public function setSkin($skin = null)
    {
        // validation for constraint: string
        if (!is_null($skin) && !is_string($skin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skin, true), gettype($skin)), __LINE__);
        }
        $this->skin = $skin;
        return $this;
    }
}
