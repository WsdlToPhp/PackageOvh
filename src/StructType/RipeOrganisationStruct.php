<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ripeOrganisationStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RipeOrganisationStruct extends AbstractStructBase
{
    /**
     * The organisation
     * @var string
     */
    public $organisation;
    /**
     * The orgname
     * @var string
     */
    public $orgname;
    /**
     * The orgtype
     * @var string
     */
    public $orgtype;
    /**
     * The address
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $address;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The abusemailbox
     * @var string
     */
    public $abusemailbox;
    /**
     * The mntref
     * @var string
     */
    public $mntref;
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
     * Constructor method for ripeOrganisationStruct
     * @uses RipeOrganisationStruct::setOrganisation()
     * @uses RipeOrganisationStruct::setOrgname()
     * @uses RipeOrganisationStruct::setOrgtype()
     * @uses RipeOrganisationStruct::setAddress()
     * @uses RipeOrganisationStruct::setEmail()
     * @uses RipeOrganisationStruct::setAbusemailbox()
     * @uses RipeOrganisationStruct::setMntref()
     * @uses RipeOrganisationStruct::setMntby()
     * @uses RipeOrganisationStruct::setChanged()
     * @uses RipeOrganisationStruct::setSource()
     * @param string $organisation
     * @param string $orgname
     * @param string $orgtype
     * @param \Ovh\ArrayType\MyArrayOfStringType $address
     * @param string $email
     * @param string $abusemailbox
     * @param string $mntref
     * @param string $mntby
     * @param string $changed
     * @param string $source
     */
    public function __construct($organisation = null, $orgname = null, $orgtype = null, \Ovh\ArrayType\MyArrayOfStringType $address = null, $email = null, $abusemailbox = null, $mntref = null, $mntby = null, $changed = null, $source = null)
    {
        $this
            ->setOrganisation($organisation)
            ->setOrgname($orgname)
            ->setOrgtype($orgtype)
            ->setAddress($address)
            ->setEmail($email)
            ->setAbusemailbox($abusemailbox)
            ->setMntref($mntref)
            ->setMntby($mntby)
            ->setChanged($changed)
            ->setSource($source);
    }
    /**
     * Get organisation value
     * @return string|null
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param string $organisation
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setOrganisation($organisation = null)
    {
        // validation for constraint: string
        if (!is_null($organisation) && !is_string($organisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organisation)), __LINE__);
        }
        $this->organisation = $organisation;
        return $this;
    }
    /**
     * Get orgname value
     * @return string|null
     */
    public function getOrgname()
    {
        return $this->orgname;
    }
    /**
     * Set orgname value
     * @param string $orgname
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setOrgname($orgname = null)
    {
        // validation for constraint: string
        if (!is_null($orgname) && !is_string($orgname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orgname)), __LINE__);
        }
        $this->orgname = $orgname;
        return $this;
    }
    /**
     * Get orgtype value
     * @return string|null
     */
    public function getOrgtype()
    {
        return $this->orgtype;
    }
    /**
     * Set orgtype value
     * @param string $orgtype
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setOrgtype($orgtype = null)
    {
        // validation for constraint: string
        if (!is_null($orgtype) && !is_string($orgtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orgtype)), __LINE__);
        }
        $this->orgtype = $orgtype;
        return $this;
    }
    /**
     * Get address value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param \Ovh\ArrayType\MyArrayOfStringType $address
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setAddress(\Ovh\ArrayType\MyArrayOfStringType $address = null)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get abusemailbox value
     * @return string|null
     */
    public function getAbusemailbox()
    {
        return $this->abusemailbox;
    }
    /**
     * Set abusemailbox value
     * @param string $abusemailbox
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setAbusemailbox($abusemailbox = null)
    {
        // validation for constraint: string
        if (!is_null($abusemailbox) && !is_string($abusemailbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abusemailbox)), __LINE__);
        }
        $this->abusemailbox = $abusemailbox;
        return $this;
    }
    /**
     * Get mntref value
     * @return string|null
     */
    public function getMntref()
    {
        return $this->mntref;
    }
    /**
     * Set mntref value
     * @param string $mntref
     * @return \Ovh\StructType\RipeOrganisationStruct
     */
    public function setMntref($mntref = null)
    {
        // validation for constraint: string
        if (!is_null($mntref) && !is_string($mntref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mntref)), __LINE__);
        }
        $this->mntref = $mntref;
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
     * @return \Ovh\StructType\RipeOrganisationStruct
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
     * @return \Ovh\StructType\RipeOrganisationStruct
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
     * @return \Ovh\StructType\RipeOrganisationStruct
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
     * @return \Ovh\StructType\RipeOrganisationStruct
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
