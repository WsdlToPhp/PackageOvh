<?php

namespace Ovh\StructType;

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
     * The template
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\DedicatedInstallationTemplateUse
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
     * @return \Ovh\StructType\DedicatedInstallationTemplateUse
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
     * @return \Ovh\StructType\DedicatedInstallationTemplateUse
     */
    public function setTemplate($template = null)
    {
        // validation for constraint: string
        if (!is_null($template) && !is_string($template)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($template, true), gettype($template)), __LINE__);
        }
        $this->template = $template;
        return $this;
    }
}
