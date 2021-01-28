<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketClose StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketClose extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ticketId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ticketId;
    /**
     * Constructor method for ticketClose
     * @uses TicketClose::setSession()
     * @uses TicketClose::setTicketId()
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
     * @return \Ovh\StructType\TicketClose
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TicketClose
     */
    public function setTicketId($ticketId = null)
    {
        // validation for constraint: int
        if (!is_null($ticketId) && !(is_int($ticketId) || ctype_digit($ticketId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketId, true), gettype($ticketId)), __LINE__);
        }
        $this->ticketId = $ticketId;
        return $this;
    }
}
