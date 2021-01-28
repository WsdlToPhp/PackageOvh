<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cmsInstall StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CmsInstall extends AbstractStructBase
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
     * The cmsName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cmsName;
    /**
     * The path
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $path;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $language;
    /**
     * Constructor method for cmsInstall
     * @uses CmsInstall::setSession()
     * @uses CmsInstall::setDomain()
     * @uses CmsInstall::setCmsName()
     * @uses CmsInstall::setPath()
     * @uses CmsInstall::setLanguage()
     * @param string $session
     * @param string $domain
     * @param string $cmsName
     * @param string $path
     * @param string $language
     */
    public function __construct($session = null, $domain = null, $cmsName = null, $path = null, $language = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setCmsName($cmsName)
            ->setPath($path)
            ->setLanguage($language);
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
     * @return \Ovh\StructType\CmsInstall
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
     * @return \Ovh\StructType\CmsInstall
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
     * Get cmsName value
     * @return string|null
     */
    public function getCmsName()
    {
        return $this->cmsName;
    }
    /**
     * Set cmsName value
     * @param string $cmsName
     * @return \Ovh\StructType\CmsInstall
     */
    public function setCmsName($cmsName = null)
    {
        // validation for constraint: string
        if (!is_null($cmsName) && !is_string($cmsName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cmsName, true), gettype($cmsName)), __LINE__);
        }
        $this->cmsName = $cmsName;
        return $this;
    }
    /**
     * Get path value
     * @return string|null
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * Set path value
     * @param string $path
     * @return \Ovh\StructType\CmsInstall
     */
    public function setPath($path = null)
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($path, true), gettype($path)), __LINE__);
        }
        $this->path = $path;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Ovh\StructType\CmsInstall
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
