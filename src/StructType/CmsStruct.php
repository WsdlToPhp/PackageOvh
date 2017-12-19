<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cmsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CmsStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The path
     * @var string
     */
    public $path;
    /**
     * The adminLogin
     * @var string
     */
    public $adminLogin;
    /**
     * Constructor method for cmsStruct
     * @uses CmsStruct::setId()
     * @uses CmsStruct::setName()
     * @uses CmsStruct::setVersion()
     * @uses CmsStruct::setLanguage()
     * @uses CmsStruct::setUrl()
     * @uses CmsStruct::setPath()
     * @uses CmsStruct::setAdminLogin()
     * @param int $id
     * @param string $name
     * @param string $version
     * @param string $language
     * @param string $url
     * @param string $path
     * @param string $adminLogin
     */
    public function __construct($id = null, $name = null, $version = null, $language = null, $url = null, $path = null, $adminLogin = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setVersion($version)
            ->setLanguage($language)
            ->setUrl($url)
            ->setPath($path)
            ->setAdminLogin($adminLogin);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\CmsStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\CmsStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Ovh\StructType\CmsStruct
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
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
     * @return \Ovh\StructType\CmsStruct
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Ovh\StructType\CmsStruct
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
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
     * @return \Ovh\StructType\CmsStruct
     */
    public function setPath($path = null)
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($path)), __LINE__);
        }
        $this->path = $path;
        return $this;
    }
    /**
     * Get adminLogin value
     * @return string|null
     */
    public function getAdminLogin()
    {
        return $this->adminLogin;
    }
    /**
     * Set adminLogin value
     * @param string $adminLogin
     * @return \Ovh\StructType\CmsStruct
     */
    public function setAdminLogin($adminLogin = null)
    {
        // validation for constraint: string
        if (!is_null($adminLogin) && !is_string($adminLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adminLogin)), __LINE__);
        }
        $this->adminLogin = $adminLogin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\CmsStruct
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
