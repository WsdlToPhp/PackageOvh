<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceLightStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceLightStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The expiry
     * @var string
     */
    public $expiry;
    /**
     * The nicadmin
     * @var string
     */
    public $nicadmin;
    /**
     * The nictech
     * @var string
     */
    public $nictech;
    /**
     * The nicbilling
     * @var string
     */
    public $nicbilling;
    /**
     * The autorenew
     * @var string
     */
    public $autorenew;
    /**
     * The reverse
     * @var string
     */
    public $reverse;
    /**
     * Constructor method for serviceLightStruct
     * @uses ServiceLightStruct::setDomain()
     * @uses ServiceLightStruct::setExpiry()
     * @uses ServiceLightStruct::setNicadmin()
     * @uses ServiceLightStruct::setNictech()
     * @uses ServiceLightStruct::setNicbilling()
     * @uses ServiceLightStruct::setAutorenew()
     * @uses ServiceLightStruct::setReverse()
     * @param string $domain
     * @param string $expiry
     * @param string $nicadmin
     * @param string $nictech
     * @param string $nicbilling
     * @param string $autorenew
     * @param string $reverse
     */
    public function __construct($domain = null, $expiry = null, $nicadmin = null, $nictech = null, $nicbilling = null, $autorenew = null, $reverse = null)
    {
        $this
            ->setDomain($domain)
            ->setExpiry($expiry)
            ->setNicadmin($nicadmin)
            ->setNictech($nictech)
            ->setNicbilling($nicbilling)
            ->setAutorenew($autorenew)
            ->setReverse($reverse);
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
     * @return \Ovh\StructType\ServiceLightStruct
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
     * Get expiry value
     * @return string|null
     */
    public function getExpiry()
    {
        return $this->expiry;
    }
    /**
     * Set expiry value
     * @param string $expiry
     * @return \Ovh\StructType\ServiceLightStruct
     */
    public function setExpiry($expiry = null)
    {
        // validation for constraint: string
        if (!is_null($expiry) && !is_string($expiry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiry)), __LINE__);
        }
        $this->expiry = $expiry;
        return $this;
    }
    /**
     * Get nicadmin value
     * @return string|null
     */
    public function getNicadmin()
    {
        return $this->nicadmin;
    }
    /**
     * Set nicadmin value
     * @param string $nicadmin
     * @return \Ovh\StructType\ServiceLightStruct
     */
    public function setNicadmin($nicadmin = null)
    {
        // validation for constraint: string
        if (!is_null($nicadmin) && !is_string($nicadmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicadmin)), __LINE__);
        }
        $this->nicadmin = $nicadmin;
        return $this;
    }
    /**
     * Get nictech value
     * @return string|null
     */
    public function getNictech()
    {
        return $this->nictech;
    }
    /**
     * Set nictech value
     * @param string $nictech
     * @return \Ovh\StructType\ServiceLightStruct
     */
    public function setNictech($nictech = null)
    {
        // validation for constraint: string
        if (!is_null($nictech) && !is_string($nictech)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nictech)), __LINE__);
        }
        $this->nictech = $nictech;
        return $this;
    }
    /**
     * Get nicbilling value
     * @return string|null
     */
    public function getNicbilling()
    {
        return $this->nicbilling;
    }
    /**
     * Set nicbilling value
     * @param string $nicbilling
     * @return \Ovh\StructType\ServiceLightStruct
     */
    public function setNicbilling($nicbilling = null)
    {
        // validation for constraint: string
        if (!is_null($nicbilling) && !is_string($nicbilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicbilling)), __LINE__);
        }
        $this->nicbilling = $nicbilling;
        return $this;
    }
    /**
     * Get autorenew value
     * @return string|null
     */
    public function getAutorenew()
    {
        return $this->autorenew;
    }
    /**
     * Set autorenew value
     * @param string $autorenew
     * @return \Ovh\StructType\ServiceLightStruct
     */
    public function setAutorenew($autorenew = null)
    {
        // validation for constraint: string
        if (!is_null($autorenew) && !is_string($autorenew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($autorenew)), __LINE__);
        }
        $this->autorenew = $autorenew;
        return $this;
    }
    /**
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \Ovh\StructType\ServiceLightStruct
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ServiceLightStruct
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
