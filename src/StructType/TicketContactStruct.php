<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfTicketContactDomainStructType
     */
    public $domains;
    /**
     * Constructor method for ticketContactStruct
     * @uses TicketContactStruct::setComponentType()
     * @uses TicketContactStruct::setDomains()
     * @param string $componentType
     * @param \PayPal\ArrayType\MyArrayOfTicketContactDomainStructType $domains
     */
    public function __construct($componentType = null, \PayPal\ArrayType\MyArrayOfTicketContactDomainStructType $domains = null)
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
     * @return \PayPal\StructType\TicketContactStruct
     */
    public function setComponentType($componentType = null)
    {
        // validation for constraint: string
        if (!is_null($componentType) && !is_string($componentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($componentType)), __LINE__);
        }
        $this->componentType = $componentType;
        return $this;
    }
    /**
     * Get domains value
     * @return \PayPal\ArrayType\MyArrayOfTicketContactDomainStructType|null
     */
    public function getDomains()
    {
        return $this->domains;
    }
    /**
     * Set domains value
     * @param \PayPal\ArrayType\MyArrayOfTicketContactDomainStructType $domains
     * @return \PayPal\StructType\TicketContactStruct
     */
    public function setDomains(\PayPal\ArrayType\MyArrayOfTicketContactDomainStructType $domains = null)
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TicketContactStruct
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
