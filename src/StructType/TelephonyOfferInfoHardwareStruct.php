<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOfferInfoHardwareStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOfferInfoHardwareStruct extends AbstractStructBase
{
    /**
     * The brand
     * @var string
     */
    public $brand;
    /**
     * The model
     * @var string
     */
    public $model;
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
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The engage
     * @var bool
     */
    public $engage;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The port
     * @var int
     */
    public $port;
    /**
     * The outOfService
     * @var bool
     */
    public $outOfService;
    /**
     * Constructor method for telephonyOfferInfoHardwareStruct
     * @uses TelephonyOfferInfoHardwareStruct::setBrand()
     * @uses TelephonyOfferInfoHardwareStruct::setModel()
     * @uses TelephonyOfferInfoHardwareStruct::setProtocol()
     * @uses TelephonyOfferInfoHardwareStruct::setMac()
     * @uses TelephonyOfferInfoHardwareStruct::setIp()
     * @uses TelephonyOfferInfoHardwareStruct::setEngage()
     * @uses TelephonyOfferInfoHardwareStruct::setStatus()
     * @uses TelephonyOfferInfoHardwareStruct::setPort()
     * @uses TelephonyOfferInfoHardwareStruct::setOutOfService()
     * @param string $brand
     * @param string $model
     * @param string $protocol
     * @param string $mac
     * @param string $ip
     * @param bool $engage
     * @param string $status
     * @param int $port
     * @param bool $outOfService
     */
    public function __construct($brand = null, $model = null, $protocol = null, $mac = null, $ip = null, $engage = null, $status = null, $port = null, $outOfService = null)
    {
        $this
            ->setBrand($brand)
            ->setModel($model)
            ->setProtocol($protocol)
            ->setMac($mac)
            ->setIp($ip)
            ->setEngage($engage)
            ->setStatus($status)
            ->setPort($port)
            ->setOutOfService($outOfService);
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
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (!is_null($brand) && !is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brand)), __LINE__);
        }
        $this->brand = $brand;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        $this->model = $model;
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
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setProtocol($protocol = null)
    {
        // validation for constraint: string
        if (!is_null($protocol) && !is_string($protocol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protocol)), __LINE__);
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
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get engage value
     * @return bool|null
     */
    public function getEngage()
    {
        return $this->engage;
    }
    /**
     * Set engage value
     * @param bool $engage
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setEngage($engage = null)
    {
        // validation for constraint: boolean
        if (!is_null($engage) && !is_bool($engage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($engage)), __LINE__);
        }
        $this->engage = $engage;
        return $this;
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
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get port value
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param int $port
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !is_numeric($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($port)), __LINE__);
        }
        $this->port = $port;
        return $this;
    }
    /**
     * Get outOfService value
     * @return bool|null
     */
    public function getOutOfService()
    {
        return $this->outOfService;
    }
    /**
     * Set outOfService value
     * @param bool $outOfService
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
     */
    public function setOutOfService($outOfService = null)
    {
        // validation for constraint: boolean
        if (!is_null($outOfService) && !is_bool($outOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($outOfService)), __LINE__);
        }
        $this->outOfService = $outOfService;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyOfferInfoHardwareStruct
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
