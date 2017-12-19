<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The component
     * @var string
     */
    public $component;
    /**
     * The componentSubType
     * @var string
     */
    public $componentSubType;
    /**
     * The creation
     * @var string
     */
    public $creation;
    /**
     * The modification
     * @var string
     */
    public $modification;
    /**
     * The expiry
     * @var string
     */
    public $expiry;
    /**
     * The nicowner
     * @var string
     */
    public $nicowner;
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
     * The nicreseller
     * @var string
     */
    public $nicreseller;
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
     * Constructor method for serviceStruct
     * @uses ServiceStruct::setDomain()
     * @uses ServiceStruct::setComponent()
     * @uses ServiceStruct::setComponentSubType()
     * @uses ServiceStruct::setCreation()
     * @uses ServiceStruct::setModification()
     * @uses ServiceStruct::setExpiry()
     * @uses ServiceStruct::setNicowner()
     * @uses ServiceStruct::setNicadmin()
     * @uses ServiceStruct::setNictech()
     * @uses ServiceStruct::setNicbilling()
     * @uses ServiceStruct::setNicreseller()
     * @uses ServiceStruct::setAutorenew()
     * @uses ServiceStruct::setReverse()
     * @param string $domain
     * @param string $component
     * @param string $componentSubType
     * @param string $creation
     * @param string $modification
     * @param string $expiry
     * @param string $nicowner
     * @param string $nicadmin
     * @param string $nictech
     * @param string $nicbilling
     * @param string $nicreseller
     * @param string $autorenew
     * @param string $reverse
     */
    public function __construct($domain = null, $component = null, $componentSubType = null, $creation = null, $modification = null, $expiry = null, $nicowner = null, $nicadmin = null, $nictech = null, $nicbilling = null, $nicreseller = null, $autorenew = null, $reverse = null)
    {
        $this
            ->setDomain($domain)
            ->setComponent($component)
            ->setComponentSubType($componentSubType)
            ->setCreation($creation)
            ->setModification($modification)
            ->setExpiry($expiry)
            ->setNicowner($nicowner)
            ->setNicadmin($nicadmin)
            ->setNictech($nictech)
            ->setNicbilling($nicbilling)
            ->setNicreseller($nicreseller)
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
     * @return \PayPal\StructType\ServiceStruct
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
     * @return \PayPal\StructType\ServiceStruct
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($component)), __LINE__);
        }
        $this->component = $component;
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
     * @return \PayPal\StructType\ServiceStruct
     */
    public function setComponentSubType($componentSubType = null)
    {
        // validation for constraint: string
        if (!is_null($componentSubType) && !is_string($componentSubType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($componentSubType)), __LINE__);
        }
        $this->componentSubType = $componentSubType;
        return $this;
    }
    /**
     * Get creation value
     * @return string|null
     */
    public function getCreation()
    {
        return $this->creation;
    }
    /**
     * Set creation value
     * @param string $creation
     * @return \PayPal\StructType\ServiceStruct
     */
    public function setCreation($creation = null)
    {
        // validation for constraint: string
        if (!is_null($creation) && !is_string($creation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creation)), __LINE__);
        }
        $this->creation = $creation;
        return $this;
    }
    /**
     * Get modification value
     * @return string|null
     */
    public function getModification()
    {
        return $this->modification;
    }
    /**
     * Set modification value
     * @param string $modification
     * @return \PayPal\StructType\ServiceStruct
     */
    public function setModification($modification = null)
    {
        // validation for constraint: string
        if (!is_null($modification) && !is_string($modification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modification)), __LINE__);
        }
        $this->modification = $modification;
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
     * @return \PayPal\StructType\ServiceStruct
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
     * Get nicowner value
     * @return string|null
     */
    public function getNicowner()
    {
        return $this->nicowner;
    }
    /**
     * Set nicowner value
     * @param string $nicowner
     * @return \PayPal\StructType\ServiceStruct
     */
    public function setNicowner($nicowner = null)
    {
        // validation for constraint: string
        if (!is_null($nicowner) && !is_string($nicowner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicowner)), __LINE__);
        }
        $this->nicowner = $nicowner;
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
     * @return \PayPal\StructType\ServiceStruct
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
     * @return \PayPal\StructType\ServiceStruct
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
     * @return \PayPal\StructType\ServiceStruct
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
     * Get nicreseller value
     * @return string|null
     */
    public function getNicreseller()
    {
        return $this->nicreseller;
    }
    /**
     * Set nicreseller value
     * @param string $nicreseller
     * @return \PayPal\StructType\ServiceStruct
     */
    public function setNicreseller($nicreseller = null)
    {
        // validation for constraint: string
        if (!is_null($nicreseller) && !is_string($nicreseller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicreseller)), __LINE__);
        }
        $this->nicreseller = $nicreseller;
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
     * @return \PayPal\StructType\ServiceStruct
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
     * @return \PayPal\StructType\ServiceStruct
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
     * @return \PayPal\StructType\ServiceStruct
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
