<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingChangeMainDomainReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingChangeMainDomainReturn extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * The totalPriceWithVat
     * @var float
     */
    public $totalPriceWithVat;
    /**
     * The totalPrice
     * @var float
     */
    public $totalPrice;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The vatRate
     * @var float
     */
    public $vatRate;
    /**
     * Constructor method for hostingChangeMainDomainReturn
     * @uses HostingChangeMainDomainReturn::setId()
     * @uses HostingChangeMainDomainReturn::setCountry()
     * @uses HostingChangeMainDomainReturn::setPassword()
     * @uses HostingChangeMainDomainReturn::setTotalPriceWithVat()
     * @uses HostingChangeMainDomainReturn::setTotalPrice()
     * @uses HostingChangeMainDomainReturn::setUrl()
     * @uses HostingChangeMainDomainReturn::setVatRate()
     * @param int $id
     * @param string $country
     * @param string $password
     * @param float $totalPriceWithVat
     * @param float $totalPrice
     * @param string $url
     * @param float $vatRate
     */
    public function __construct($id = null, $country = null, $password = null, $totalPriceWithVat = null, $totalPrice = null, $url = null, $vatRate = null)
    {
        $this
            ->setId($id)
            ->setCountry($country)
            ->setPassword($password)
            ->setTotalPriceWithVat($totalPriceWithVat)
            ->setTotalPrice($totalPrice)
            ->setUrl($url)
            ->setVatRate($vatRate);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get totalPriceWithVat value
     * @return float|null
     */
    public function getTotalPriceWithVat()
    {
        return $this->totalPriceWithVat;
    }
    /**
     * Set totalPriceWithVat value
     * @param float $totalPriceWithVat
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setTotalPriceWithVat($totalPriceWithVat = null)
    {
        // validation for constraint: float
        if (!is_null($totalPriceWithVat) && !(is_float($totalPriceWithVat) || is_numeric($totalPriceWithVat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPriceWithVat, true), gettype($totalPriceWithVat)), __LINE__);
        }
        $this->totalPriceWithVat = $totalPriceWithVat;
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setTotalPrice($totalPrice = null)
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Get vatRate value
     * @return float|null
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }
    /**
     * Set vatRate value
     * @param float $vatRate
     * @return \Ovh\StructType\HostingChangeMainDomainReturn
     */
    public function setVatRate($vatRate = null)
    {
        // validation for constraint: float
        if (!is_null($vatRate) && !(is_float($vatRate) || is_numeric($vatRate))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatRate, true), gettype($vatRate)), __LINE__);
        }
        $this->vatRate = $vatRate;
        return $this;
    }
}
