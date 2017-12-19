<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingGetReferencesToExpiredStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingGetReferencesToExpiredStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The expired
     * @var string
     */
    public $expired;
    /**
     * Constructor method for billingGetReferencesToExpiredStruct
     * @uses BillingGetReferencesToExpiredStruct::setName()
     * @uses BillingGetReferencesToExpiredStruct::setType()
     * @uses BillingGetReferencesToExpiredStruct::setExpired()
     * @param string $name
     * @param string $type
     * @param string $expired
     */
    public function __construct($name = null, $type = null, $expired = null)
    {
        $this
            ->setName($name)
            ->setType($type)
            ->setExpired($expired);
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
     * @return \Ovh\StructType\BillingGetReferencesToExpiredStruct
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\BillingGetReferencesToExpiredStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get expired value
     * @return string|null
     */
    public function getExpired()
    {
        return $this->expired;
    }
    /**
     * Set expired value
     * @param string $expired
     * @return \Ovh\StructType\BillingGetReferencesToExpiredStruct
     */
    public function setExpired($expired = null)
    {
        // validation for constraint: string
        if (!is_null($expired) && !is_string($expired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expired)), __LINE__);
        }
        $this->expired = $expired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\BillingGetReferencesToExpiredStruct
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
