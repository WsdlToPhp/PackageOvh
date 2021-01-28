<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketContactStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketContactStruct extends AbstractStructBase
{
    /**
     * The componentType
     * @var string
     */
    public $componentType;
    /**
     * The domains
     * @var \Ovh\ArrayType\MyArrayOfTicketContactDomainStructType
     */
    public $domains;
    /**
     * Constructor method for ticketContactStruct
     * @uses TicketContactStruct::setComponentType()
     * @uses TicketContactStruct::setDomains()
     * @param string $componentType
     * @param \Ovh\ArrayType\MyArrayOfTicketContactDomainStructType $domains
     */
    public function __construct($componentType = null, \Ovh\ArrayType\MyArrayOfTicketContactDomainStructType $domains = null)
    {
        $this
            ->setComponentType($componentType)
            ->setDomains($domains);
    }
    /**
     * Get componentType value
     * @return string|null
     */
    public function getComponentType()
    {
        return $this->componentType;
    }
    /**
     * Set componentType value
     * @param string $componentType
     * @return \Ovh\StructType\TicketContactStruct
     */
    public function setComponentType($componentType = null)
    {
        // validation for constraint: string
        if (!is_null($componentType) && !is_string($componentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($componentType, true), gettype($componentType)), __LINE__);
        }
        $this->componentType = $componentType;
        return $this;
    }
    /**
     * Get domains value
     * @return \Ovh\ArrayType\MyArrayOfTicketContactDomainStructType|null
     */
    public function getDomains()
    {
        return $this->domains;
    }
    /**
     * Set domains value
     * @param \Ovh\ArrayType\MyArrayOfTicketContactDomainStructType $domains
     * @return \Ovh\StructType\TicketContactStruct
     */
    public function setDomains(\Ovh\ArrayType\MyArrayOfTicketContactDomainStructType $domains = null)
    {
        $this->domains = $domains;
        return $this;
    }
}
