<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceModifyContact StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceModifyContact extends AbstractStructBase
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
     * The component
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $component;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $contact;
    /**
     * The nic
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The componentSubType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $componentSubType;
    /**
     * Constructor method for serviceModifyContact
     * @uses ServiceModifyContact::setSession()
     * @uses ServiceModifyContact::setDomain()
     * @uses ServiceModifyContact::setComponent()
     * @uses ServiceModifyContact::setContact()
     * @uses ServiceModifyContact::setNic()
     * @uses ServiceModifyContact::setComponentSubType()
     * @param string $session
     * @param string $domain
     * @param string $component
     * @param string $contact
     * @param string $nic
     * @param string $componentSubType
     */
    public function __construct($session = null, $domain = null, $component = null, $contact = null, $nic = null, $componentSubType = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setComponent($component)
            ->setContact($contact)
            ->setNic($nic)
            ->setComponentSubType($componentSubType);
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
     * @return \Ovh\StructType\ServiceModifyContact
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
     * @return \Ovh\StructType\ServiceModifyContact
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
     * Get component value
     * @return string|null
     */
    public function getComponent()
    {
        return $this->component;
    }
    /**
     * Set component value
     * @param string $component
     * @return \Ovh\StructType\ServiceModifyContact
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($component, true), gettype($component)), __LINE__);
        }
        $this->component = $component;
        return $this;
    }
    /**
     * Get contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param string $contact
     * @return \Ovh\StructType\ServiceModifyContact
     */
    public function setContact($contact = null)
    {
        // validation for constraint: string
        if (!is_null($contact) && !is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contact, true), gettype($contact)), __LINE__);
        }
        $this->contact = $contact;
        return $this;
    }
    /**
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\ServiceModifyContact
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Get componentSubType value
     * @return string|null
     */
    public function getComponentSubType()
    {
        return $this->componentSubType;
    }
    /**
     * Set componentSubType value
     * @param string $componentSubType
     * @return \Ovh\StructType\ServiceModifyContact
     */
    public function setComponentSubType($componentSubType = null)
    {
        // validation for constraint: string
        if (!is_null($componentSubType) && !is_string($componentSubType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($componentSubType, true), gettype($componentSubType)), __LINE__);
        }
        $this->componentSubType = $componentSubType;
        return $this;
    }
}
