<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for freedomStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FreedomStruct extends AbstractStructBase
{
    /**
     * The referenceReferer
     * @var string
     */
    public $referenceReferer;
    /**
     * The creationDate
     * @var string
     */
    public $creationDate;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The freeDom
     * @var string
     */
    public $freeDom;
    /**
     * The useDate
     * @var string
     */
    public $useDate;
    /**
     * The domainReferer
     * @var string
     */
    public $domainReferer;
    /**
     * Constructor method for freedomStruct
     * @uses FreedomStruct::setReferenceReferer()
     * @uses FreedomStruct::setCreationDate()
     * @uses FreedomStruct::setStatus()
     * @uses FreedomStruct::setFreeDom()
     * @uses FreedomStruct::setUseDate()
     * @uses FreedomStruct::setDomainReferer()
     * @param string $referenceReferer
     * @param string $creationDate
     * @param string $status
     * @param string $freeDom
     * @param string $useDate
     * @param string $domainReferer
     */
    public function __construct($referenceReferer = null, $creationDate = null, $status = null, $freeDom = null, $useDate = null, $domainReferer = null)
    {
        $this
            ->setReferenceReferer($referenceReferer)
            ->setCreationDate($creationDate)
            ->setStatus($status)
            ->setFreeDom($freeDom)
            ->setUseDate($useDate)
            ->setDomainReferer($domainReferer);
    }
    /**
     * Get referenceReferer value
     * @return string|null
     */
    public function getReferenceReferer()
    {
        return $this->referenceReferer;
    }
    /**
     * Set referenceReferer value
     * @param string $referenceReferer
     * @return \PayPal\StructType\FreedomStruct
     */
    public function setReferenceReferer($referenceReferer = null)
    {
        // validation for constraint: string
        if (!is_null($referenceReferer) && !is_string($referenceReferer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceReferer)), __LINE__);
        }
        $this->referenceReferer = $referenceReferer;
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \PayPal\StructType\FreedomStruct
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\FreedomStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get freeDom value
     * @return string|null
     */
    public function getFreeDom()
    {
        return $this->freeDom;
    }
    /**
     * Set freeDom value
     * @param string $freeDom
     * @return \PayPal\StructType\FreedomStruct
     */
    public function setFreeDom($freeDom = null)
    {
        // validation for constraint: string
        if (!is_null($freeDom) && !is_string($freeDom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeDom)), __LINE__);
        }
        $this->freeDom = $freeDom;
        return $this;
    }
    /**
     * Get useDate value
     * @return string|null
     */
    public function getUseDate()
    {
        return $this->useDate;
    }
    /**
     * Set useDate value
     * @param string $useDate
     * @return \PayPal\StructType\FreedomStruct
     */
    public function setUseDate($useDate = null)
    {
        // validation for constraint: string
        if (!is_null($useDate) && !is_string($useDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($useDate)), __LINE__);
        }
        $this->useDate = $useDate;
        return $this;
    }
    /**
     * Get domainReferer value
     * @return string|null
     */
    public function getDomainReferer()
    {
        return $this->domainReferer;
    }
    /**
     * Set domainReferer value
     * @param string $domainReferer
     * @return \PayPal\StructType\FreedomStruct
     */
    public function setDomainReferer($domainReferer = null)
    {
        // validation for constraint: string
        if (!is_null($domainReferer) && !is_string($domainReferer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domainReferer)), __LINE__);
        }
        $this->domainReferer = $domainReferer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\FreedomStruct
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