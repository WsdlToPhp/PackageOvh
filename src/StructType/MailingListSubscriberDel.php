<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mailingListSubscriberDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MailingListSubscriberDel extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The ml
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ml;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * Constructor method for mailingListSubscriberDel
     * @uses MailingListSubscriberDel::setSession()
     * @uses MailingListSubscriberDel::setDomain()
     * @uses MailingListSubscriberDel::setMl()
     * @uses MailingListSubscriberDel::setEmail()
     * @param string $session
     * @param string $domain
     * @param string $ml
     * @param string $email
     */
    public function __construct($session = null, $domain = null, $ml = null, $email = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setMl($ml)
            ->setEmail($email);
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
     * @return \Ovh\StructType\MailingListSubscriberDel
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
     * @return \Ovh\StructType\MailingListSubscriberDel
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
     * Get ml value
     * @return string|null
     */
    public function getMl()
    {
        return $this->ml;
    }
    /**
     * Set ml value
     * @param string $ml
     * @return \Ovh\StructType\MailingListSubscriberDel
     */
    public function setMl($ml = null)
    {
        // validation for constraint: string
        if (!is_null($ml) && !is_string($ml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ml, true), gettype($ml)), __LINE__);
        }
        $this->ml = $ml;
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
     * @return \Ovh\StructType\MailingListSubscriberDel
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
}
