<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportGetFullMessage StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportGetFullMessage extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The messageId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $messageId;
    /**
     * Constructor method for supportGetFullMessage
     * @uses SupportGetFullMessage::setSession()
     * @uses SupportGetFullMessage::setMessageId()
     * @param string $session
     * @param int $messageId
     */
    public function __construct($session = null, $messageId = null)
    {
        $this
            ->setSession($session)
            ->setMessageId($messageId);
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
     * @return \Ovh\StructType\SupportGetFullMessage
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
     * Get messageId value
     * @return int|null
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
    /**
     * Set messageId value
     * @param int $messageId
     * @return \Ovh\StructType\SupportGetFullMessage
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: int
        if (!is_null($messageId) && !(is_int($messageId) || ctype_digit($messageId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        $this->messageId = $messageId;
        return $this;
    }
}
