<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * The wantedIp
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wantedIp;
    /**
     * The routedTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $routedTo;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * Constructor method for dedicatedFailoverAdd
     * @uses DedicatedFailoverAdd::setSession()
     * @uses DedicatedFailoverAdd::setHostname()
     * @uses DedicatedFailoverAdd::setComment()
     * @uses DedicatedFailoverAdd::setWantedIp()
     * @uses DedicatedFailoverAdd::setRoutedTo()
     * @uses DedicatedFailoverAdd::setCountry()
     * @param string $session
     * @param string $hostname
     * @param string $comment
     * @param string $wantedIp
     * @param string $routedTo
     * @param string $country
     */
    public function __construct($session = null, $hostname = null, $comment = null, $wantedIp = null, $routedTo = null, $country = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setComment($comment)
            ->setWantedIp($wantedIp)
            ->setRoutedTo($routedTo)
            ->setCountry($country);
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
     * @return \Ovh\StructType\DedicatedFailoverAdd
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
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\DedicatedFailoverAdd
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Ovh\StructType\DedicatedFailoverAdd
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get wantedIp value
     * @return string|null
     */
    public function getWantedIp()
    {
        return $this->wantedIp;
    }
    /**
     * Set wantedIp value
     * @param string $wantedIp
     * @return \Ovh\StructType\DedicatedFailoverAdd
     */
    public function setWantedIp($wantedIp = null)
    {
        // validation for constraint: string
        if (!is_null($wantedIp) && !is_string($wantedIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wantedIp, true), gettype($wantedIp)), __LINE__);
        }
        $this->wantedIp = $wantedIp;
        return $this;
    }
    /**
     * Get routedTo value
     * @return string|null
     */
    public function getRoutedTo()
    {
        return $this->routedTo;
    }
    /**
     * Set routedTo value
     * @param string $routedTo
     * @return \Ovh\StructType\DedicatedFailoverAdd
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routedTo, true), gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\DedicatedFailoverAdd
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
}
