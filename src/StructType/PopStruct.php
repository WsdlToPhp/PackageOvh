<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopStruct extends AbstractStructBase
{
    /**
     * The nic
     * @var string
     */
    public $nic;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The size
     * @var string
     */
    public $size;
    /**
     * Constructor method for popStruct
     * @uses PopStruct::setNic()
     * @uses PopStruct::setDomain()
     * @uses PopStruct::setName()
     * @uses PopStruct::setDescription()
     * @uses PopStruct::setSize()
     * @param string $nic
     * @param string $domain
     * @param string $name
     * @param string $description
     * @param string $size
     */
    public function __construct($nic = null, $domain = null, $name = null, $description = null, $size = null)
    {
        $this
            ->setNic($nic)
            ->setDomain($domain)
            ->setName($name)
            ->setDescription($description)
            ->setSize($size);
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
     * @return \Ovh\StructType\PopStruct
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
     * @return \Ovh\StructType\PopStruct
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
     * @return \Ovh\StructType\PopStruct
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
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\PopStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param string $size
     * @return \Ovh\StructType\PopStruct
     */
    public function setSize($size = null)
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
}
