<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketReopen StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketReopen extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ticketId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ticketId;
    /**
     * Constructor method for ticketReopen
     * @uses TicketReopen::setSession()
     * @uses TicketReopen::setTicketId()
     * @param string $session
     * @param int $ticketId
     */
    public function __construct($session = null, $ticketId = null)
    {
        $this
            ->setSession($session)
            ->setTicketId($ticketId);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \PayPal\StructType\TicketReopen
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get ticketId value
     * @return int|null
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }
    /**
     * Set ticketId value
     * @param int $ticketId
     * @return \PayPal\StructType\TicketReopen
     */
    public function setTicketId($ticketId = null)
    {
        // validation for constraint: int
        if (!is_null($ticketId) && !is_numeric($ticketId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ticketId)), __LINE__);
        }
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TicketReopen
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
