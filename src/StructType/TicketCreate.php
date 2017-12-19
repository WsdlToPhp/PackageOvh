<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketCreate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketCreate extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The componentType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $componentType;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The phone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subject;
    /**
     * The incidentSummary
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $incidentSummary;
    /**
     * The incidentDetails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $incidentDetails;
    /**
     * The incidentManip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $incidentManip;
    /**
     * The level
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $level;
    /**
     * Constructor method for ticketCreate
     * @uses TicketCreate::setSession()
     * @uses TicketCreate::setComponentType()
     * @uses TicketCreate::setDomain()
     * @uses TicketCreate::setEmail()
     * @uses TicketCreate::setPhone()
     * @uses TicketCreate::setSubject()
     * @uses TicketCreate::setIncidentSummary()
     * @uses TicketCreate::setIncidentDetails()
     * @uses TicketCreate::setIncidentManip()
     * @uses TicketCreate::setLevel()
     * @param string $session
     * @param string $componentType
     * @param string $domain
     * @param string $email
     * @param string $phone
     * @param string $subject
     * @param string $incidentSummary
     * @param string $incidentDetails
     * @param string $incidentManip
     * @param string $level
     */
    public function __construct($session = null, $componentType = null, $domain = null, $email = null, $phone = null, $subject = null, $incidentSummary = null, $incidentDetails = null, $incidentManip = null, $level = null)
    {
        $this
            ->setSession($session)
            ->setComponentType($componentType)
            ->setDomain($domain)
            ->setEmail($email)
            ->setPhone($phone)
            ->setSubject($subject)
            ->setIncidentSummary($incidentSummary)
            ->setIncidentDetails($incidentDetails)
            ->setIncidentManip($incidentManip)
            ->setLevel($level);
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
     * @return \Ovh\StructType\TicketCreate
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
     * @return \Ovh\StructType\TicketCreate
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
     * @return \Ovh\StructType\TicketCreate
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\TicketCreate
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Ovh\StructType\TicketCreate
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Ovh\StructType\TicketCreate
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        return $this;
    }
    /**
     * Get incidentSummary value
     * @return string|null
     */
    public function getIncidentSummary()
    {
        return $this->incidentSummary;
    }
    /**
     * Set incidentSummary value
     * @param string $incidentSummary
     * @return \Ovh\StructType\TicketCreate
     */
    public function setIncidentSummary($incidentSummary = null)
    {
        // validation for constraint: string
        if (!is_null($incidentSummary) && !is_string($incidentSummary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($incidentSummary)), __LINE__);
        }
        $this->incidentSummary = $incidentSummary;
        return $this;
    }
    /**
     * Get incidentDetails value
     * @return string|null
     */
    public function getIncidentDetails()
    {
        return $this->incidentDetails;
    }
    /**
     * Set incidentDetails value
     * @param string $incidentDetails
     * @return \Ovh\StructType\TicketCreate
     */
    public function setIncidentDetails($incidentDetails = null)
    {
        // validation for constraint: string
        if (!is_null($incidentDetails) && !is_string($incidentDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($incidentDetails)), __LINE__);
        }
        $this->incidentDetails = $incidentDetails;
        return $this;
    }
    /**
     * Get incidentManip value
     * @return string|null
     */
    public function getIncidentManip()
    {
        return $this->incidentManip;
    }
    /**
     * Set incidentManip value
     * @param string $incidentManip
     * @return \Ovh\StructType\TicketCreate
     */
    public function setIncidentManip($incidentManip = null)
    {
        // validation for constraint: string
        if (!is_null($incidentManip) && !is_string($incidentManip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($incidentManip)), __LINE__);
        }
        $this->incidentManip = $incidentManip;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param string $level
     * @return \Ovh\StructType\TicketCreate
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TicketCreate
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
