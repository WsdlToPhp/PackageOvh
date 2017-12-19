<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoGetSiretReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoGetSiretReturn extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The siret
     * @var int
     */
    public $siret;
    /**
     * The siren
     * @var int
     */
    public $siren;
    /**
     * The ape
     * @var string
     */
    public $ape;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * The juridicCategory
     * @var string
     */
    public $juridicCategory;
    /**
     * The brand
     * @var string
     */
    public $brand;
    /**
     * Constructor method for telephonyDirectoryInfoGetSiretReturn
     * @uses TelephonyDirectoryInfoGetSiretReturn::setName()
     * @uses TelephonyDirectoryInfoGetSiretReturn::setSiret()
     * @uses TelephonyDirectoryInfoGetSiretReturn::setSiren()
     * @uses TelephonyDirectoryInfoGetSiretReturn::setApe()
     * @uses TelephonyDirectoryInfoGetSiretReturn::setAddress()
     * @uses TelephonyDirectoryInfoGetSiretReturn::setJuridicCategory()
     * @uses TelephonyDirectoryInfoGetSiretReturn::setBrand()
     * @param string $name
     * @param int $siret
     * @param int $siren
     * @param string $ape
     * @param string $address
     * @param string $juridicCategory
     * @param string $brand
     */
    public function __construct($name = null, $siret = null, $siren = null, $ape = null, $address = null, $juridicCategory = null, $brand = null)
    {
        $this
            ->setName($name)
            ->setSiret($siret)
            ->setSiren($siren)
            ->setApe($ape)
            ->setAddress($address)
            ->setJuridicCategory($juridicCategory)
            ->setBrand($brand);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get siret value
     * @return int|null
     */
    public function getSiret()
    {
        return $this->siret;
    }
    /**
     * Set siret value
     * @param int $siret
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public function setSiret($siret = null)
    {
        // validation for constraint: int
        if (!is_null($siret) && !is_numeric($siret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($siret)), __LINE__);
        }
        $this->siret = $siret;
        return $this;
    }
    /**
     * Get siren value
     * @return int|null
     */
    public function getSiren()
    {
        return $this->siren;
    }
    /**
     * Set siren value
     * @param int $siren
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public function setSiren($siren = null)
    {
        // validation for constraint: int
        if (!is_null($siren) && !is_numeric($siren)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($siren)), __LINE__);
        }
        $this->siren = $siren;
        return $this;
    }
    /**
     * Get ape value
     * @return string|null
     */
    public function getApe()
    {
        return $this->ape;
    }
    /**
     * Set ape value
     * @param string $ape
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public function setApe($ape = null)
    {
        // validation for constraint: string
        if (!is_null($ape) && !is_string($ape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ape)), __LINE__);
        }
        $this->ape = $ape;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get juridicCategory value
     * @return string|null
     */
    public function getJuridicCategory()
    {
        return $this->juridicCategory;
    }
    /**
     * Set juridicCategory value
     * @param string $juridicCategory
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
     */
    public function setJuridicCategory($juridicCategory = null)
    {
        // validation for constraint: string
        if (!is_null($juridicCategory) && !is_string($juridicCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($juridicCategory)), __LINE__);
        }
        $this->juridicCategory = $juridicCategory;
        return $this;
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
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiretReturn
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
