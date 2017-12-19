<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeInetnumStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeInetnumStruct extends AbstractStructBase
{
    /**
     * The inetnum
     * @var string
     */
    public $inetnum;
    /**
     * The netname
     * @var string
     */
    public $netname;
    /**
     * The descr
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $descr;
    /**
     * The org
     * @var string
     */
    public $org;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The adminc
     * @var string
     */
    public $adminc;
    /**
     * The techc
     * @var string
     */
    public $techc;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The mntby
     * @var string
     */
    public $mntby;
    /**
     * The changed
     * @var string
     */
    public $changed;
    /**
     * The source
     * @var string
     */
    public $source;
    /**
     * Constructor method for ripeInetnumStruct
     * @uses RipeInetnumStruct::setInetnum()
     * @uses RipeInetnumStruct::setNetname()
     * @uses RipeInetnumStruct::setDescr()
     * @uses RipeInetnumStruct::setOrg()
     * @uses RipeInetnumStruct::setCountry()
     * @uses RipeInetnumStruct::setAdminc()
     * @uses RipeInetnumStruct::setTechc()
     * @uses RipeInetnumStruct::setStatus()
     * @uses RipeInetnumStruct::setMntby()
     * @uses RipeInetnumStruct::setChanged()
     * @uses RipeInetnumStruct::setSource()
     * @param string $inetnum
     * @param string $netname
     * @param \Ovh\ArrayType\MyArrayOfStringType $descr
     * @param string $org
     * @param string $country
     * @param string $adminc
     * @param string $techc
     * @param string $status
     * @param string $mntby
     * @param string $changed
     * @param string $source
     */
    public function __construct($inetnum = null, $netname = null, \Ovh\ArrayType\MyArrayOfStringType $descr = null, $org = null, $country = null, $adminc = null, $techc = null, $status = null, $mntby = null, $changed = null, $source = null)
    {
        $this
            ->setInetnum($inetnum)
            ->setNetname($netname)
            ->setDescr($descr)
            ->setOrg($org)
            ->setCountry($country)
            ->setAdminc($adminc)
            ->setTechc($techc)
            ->setStatus($status)
            ->setMntby($mntby)
            ->setChanged($changed)
            ->setSource($source);
    }
    /**
     * Get inetnum value
     * @return string|null
     */
    public function getInetnum()
    {
        return $this->inetnum;
    }
    /**
     * Set inetnum value
     * @param string $inetnum
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setInetnum($inetnum = null)
    {
        // validation for constraint: string
        if (!is_null($inetnum) && !is_string($inetnum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inetnum)), __LINE__);
        }
        $this->inetnum = $inetnum;
        return $this;
    }
    /**
     * Get netname value
     * @return string|null
     */
    public function getNetname()
    {
        return $this->netname;
    }
    /**
     * Set netname value
     * @param string $netname
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netname)), __LINE__);
        }
        $this->netname = $netname;
        return $this;
    }
    /**
     * Get descr value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getDescr()
    {
        return $this->descr;
    }
    /**
     * Set descr value
     * @param \Ovh\ArrayType\MyArrayOfStringType $descr
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setDescr(\Ovh\ArrayType\MyArrayOfStringType $descr = null)
    {
        $this->descr = $descr;
        return $this;
    }
    /**
     * Get org value
     * @return string|null
     */
    public function getOrg()
    {
        return $this->org;
    }
    /**
     * Set org value
     * @param string $org
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setOrg($org = null)
    {
        // validation for constraint: string
        if (!is_null($org) && !is_string($org)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($org)), __LINE__);
        }
        $this->org = $org;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get adminc value
     * @return string|null
     */
    public function getAdminc()
    {
        return $this->adminc;
    }
    /**
     * Set adminc value
     * @param string $adminc
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setAdminc($adminc = null)
    {
        // validation for constraint: string
        if (!is_null($adminc) && !is_string($adminc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adminc)), __LINE__);
        }
        $this->adminc = $adminc;
        return $this;
    }
    /**
     * Get techc value
     * @return string|null
     */
    public function getTechc()
    {
        return $this->techc;
    }
    /**
     * Set techc value
     * @param string $techc
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setTechc($techc = null)
    {
        // validation for constraint: string
        if (!is_null($techc) && !is_string($techc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($techc)), __LINE__);
        }
        $this->techc = $techc;
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
     * @return \Ovh\StructType\RipeInetnumStruct
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
     * Get mntby value
     * @return string|null
     */
    public function getMntby()
    {
        return $this->mntby;
    }
    /**
     * Set mntby value
     * @param string $mntby
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setMntby($mntby = null)
    {
        // validation for constraint: string
        if (!is_null($mntby) && !is_string($mntby)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mntby)), __LINE__);
        }
        $this->mntby = $mntby;
        return $this;
    }
    /**
     * Get changed value
     * @return string|null
     */
    public function getChanged()
    {
        return $this->changed;
    }
    /**
     * Set changed value
     * @param string $changed
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setChanged($changed = null)
    {
        // validation for constraint: string
        if (!is_null($changed) && !is_string($changed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($changed)), __LINE__);
        }
        $this->changed = $changed;
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Ovh\StructType\RipeInetnumStruct
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RipeInetnumStruct
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
