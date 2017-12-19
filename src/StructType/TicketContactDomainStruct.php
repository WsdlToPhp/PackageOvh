<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketContactDomainStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketContactDomainStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * The reverse
     * @var string
     */
    public $reverse;
    /**
     * Constructor method for ticketContactDomainStruct
     * @uses TicketContactDomainStruct::setDomain()
     * @uses TicketContactDomainStruct::setState()
     * @uses TicketContactDomainStruct::setReverse()
     * @param string $domain
     * @param string $state
     * @param string $reverse
     */
    public function __construct($domain = null, $state = null, $reverse = null)
    {
        $this
            ->setDomain($domain)
            ->setState($state)
            ->setReverse($reverse);
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
     * @return \Ovh\StructType\TicketContactDomainStruct
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
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\TicketContactDomainStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \Ovh\StructType\TicketContactDomainStruct
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TicketContactDomainStruct
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
