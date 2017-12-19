<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallationTemplateUse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallationTemplateUse extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The template
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $template;
    /**
     * Constructor method for dedicatedInstallationTemplateUse
     * @uses DedicatedInstallationTemplateUse::setSession()
     * @uses DedicatedInstallationTemplateUse::setHostname()
     * @uses DedicatedInstallationTemplateUse::setTemplate()
     * @param string $session
     * @param string $hostname
     * @param string $template
     */
    public function __construct($session = null, $hostname = null, $template = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setTemplate($template);
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
     * @return \PayPal\StructType\DedicatedInstallationTemplateUse
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
     * @return \PayPal\StructType\DedicatedInstallationTemplateUse
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get template value
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->template;
    }
    /**
     * Set template value
     * @param string $template
     * @return \PayPal\StructType\DedicatedInstallationTemplateUse
     */
    public function setTemplate($template = null)
    {
        // validation for constraint: string
        if (!is_null($template) && !is_string($template)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($template)), __LINE__);
        }
        $this->template = $template;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedInstallationTemplateUse
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
