<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceInfoDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceInfoDetailStruct extends AbstractStructBase
{
    /**
     * The quantity
     * @var int
     */
    public $quantity;
    /**
     * The service
     * @var string
     */
    public $service;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The end
     * @var string
     */
    public $end;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The baseprice
     * @var float
     */
    public $baseprice;
    /**
     * The totalprice
     * @var float
     */
    public $totalprice;
    /**
     * The start
     * @var string
     */
    public $start;
    /**
     * Constructor method for billingInvoiceInfoDetailStruct
     * @uses BillingInvoiceInfoDetailStruct::setQuantity()
     * @uses BillingInvoiceInfoDetailStruct::setService()
     * @uses BillingInvoiceInfoDetailStruct::setDescription()
     * @uses BillingInvoiceInfoDetailStruct::setEnd()
     * @uses BillingInvoiceInfoDetailStruct::setDomain()
     * @uses BillingInvoiceInfoDetailStruct::setBaseprice()
     * @uses BillingInvoiceInfoDetailStruct::setTotalprice()
     * @uses BillingInvoiceInfoDetailStruct::setStart()
     * @param int $quantity
     * @param string $service
     * @param string $description
     * @param string $end
     * @param string $domain
     * @param float $baseprice
     * @param float $totalprice
     * @param string $start
     */
    public function __construct($quantity = null, $service = null, $description = null, $end = null, $domain = null, $baseprice = null, $totalprice = null, $start = null)
    {
        $this
            ->setQuantity($quantity)
            ->setService($service)
            ->setDescription($description)
            ->setEnd($end)
            ->setDomain($domain)
            ->setBaseprice($baseprice)
            ->setTotalprice($totalprice)
            ->setStart($start);
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->end = $end;
        return $this;
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get baseprice value
     * @return float|null
     */
    public function getBaseprice()
    {
        return $this->baseprice;
    }
    /**
     * Set baseprice value
     * @param float $baseprice
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setBaseprice($baseprice = null)
    {
        $this->baseprice = $baseprice;
        return $this;
    }
    /**
     * Get totalprice value
     * @return float|null
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }
    /**
     * Set totalprice value
     * @param float $totalprice
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setTotalprice($totalprice = null)
    {
        $this->totalprice = $totalprice;
        return $this;
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->start = $start;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\BillingInvoiceInfoDetailStruct
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
