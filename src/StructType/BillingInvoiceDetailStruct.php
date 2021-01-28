<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingInvoiceDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingInvoiceDetailStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The reference
     * @var string
     */
    public $reference;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for billingInvoiceDetailStruct
     * @uses BillingInvoiceDetailStruct::setDomain()
     * @uses BillingInvoiceDetailStruct::setReference()
     * @uses BillingInvoiceDetailStruct::setDescription()
     * @param string $domain
     * @param string $reference
     * @param string $description
     */
    public function __construct($domain = null, $reference = null, $description = null)
    {
        $this
            ->setDomain($domain)
            ->setReference($reference)
            ->setDescription($description);
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
     * @return \Ovh\StructType\BillingInvoiceDetailStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Ovh\StructType\BillingInvoiceDetailStruct
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
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
     * @return \Ovh\StructType\BillingInvoiceDetailStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
}
