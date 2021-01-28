<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketAnswer StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketAnswer extends AbstractStructBase
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
     * The message
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $message;
    /**
     * Constructor method for ticketAnswer
     * @uses TicketAnswer::setSession()
     * @uses TicketAnswer::setTicketId()
     * @uses TicketAnswer::setMessage()
     * @param string $session
     * @param int $ticketId
     * @param string $message
     */
    public function __construct($session = null, $ticketId = null, $message = null)
    {
        $this
            ->setSession($session)
            ->setTicketId($ticketId)
            ->setMessage($message);
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
     * @return \Ovh\StructType\TicketAnswer
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
     * @return \Ovh\StructType\TicketAnswer
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
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Ovh\StructType\TicketAnswer
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
}
