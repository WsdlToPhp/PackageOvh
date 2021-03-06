<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cmsAvailableStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CmsAvailableStruct extends AbstractStructBase
{
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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $language;
    /**
     * The category
     * @var string
     */
    public $category;
    /**
     * The dbPrefix
     * @var string
     */
    public $dbPrefix;
    /**
     * The enable
     * @var bool
     */
    public $enable;
    /**
     * Constructor method for cmsAvailableStruct
     * @uses CmsAvailableStruct::setName()
     * @uses CmsAvailableStruct::setVersion()
     * @uses CmsAvailableStruct::setLanguage()
     * @uses CmsAvailableStruct::setCategory()
     * @uses CmsAvailableStruct::setDbPrefix()
     * @uses CmsAvailableStruct::setEnable()
     * @param string $name
     * @param string $version
     * @param \Ovh\ArrayType\MyArrayOfStringType $language
     * @param string $category
     * @param string $dbPrefix
     * @param bool $enable
     */
    public function __construct($name = null, $version = null, \Ovh\ArrayType\MyArrayOfStringType $language = null, $category = null, $dbPrefix = null, $enable = null)
    {
        $this
            ->setName($name)
            ->setVersion($version)
            ->setLanguage($language)
            ->setCategory($category)
            ->setDbPrefix($dbPrefix)
            ->setEnable($enable);
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
     * @return \Ovh\StructType\CmsAvailableStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \Ovh\StructType\CmsAvailableStruct
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get language value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param \Ovh\ArrayType\MyArrayOfStringType $language
     * @return \Ovh\StructType\CmsAvailableStruct
     */
    public function setLanguage(\Ovh\ArrayType\MyArrayOfStringType $language = null)
    {
        $this->language = $language;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Ovh\StructType\CmsAvailableStruct
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get dbPrefix value
     * @return string|null
     */
    public function getDbPrefix()
    {
        return $this->dbPrefix;
    }
    /**
     * Set dbPrefix value
     * @param string $dbPrefix
     * @return \Ovh\StructType\CmsAvailableStruct
     */
    public function setDbPrefix($dbPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($dbPrefix) && !is_string($dbPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbPrefix, true), gettype($dbPrefix)), __LINE__);
        }
        $this->dbPrefix = $dbPrefix;
        return $this;
    }
    /**
     * Get enable value
     * @return bool|null
     */
    public function getEnable()
    {
        return $this->enable;
    }
    /**
     * Set enable value
     * @param bool $enable
     * @return \Ovh\StructType\CmsAvailableStruct
     */
    public function setEnable($enable = null)
    {
        // validation for constraint: boolean
        if (!is_null($enable) && !is_bool($enable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enable, true), gettype($enable)), __LINE__);
        }
        $this->enable = $enable;
        return $this;
    }
}
