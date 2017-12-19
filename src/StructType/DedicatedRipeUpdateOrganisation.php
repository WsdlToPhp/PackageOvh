<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeUpdateOrganisation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeUpdateOrganisation extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ripeId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ripeId;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The abuse
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abuse;
    /**
     * The descr
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $descr;
    /**
     * The phone
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The fax
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fax;
    /**
     * The remarks
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remarks;
    /**
     * Constructor method for dedicatedRipeUpdateOrganisation
     * @uses DedicatedRipeUpdateOrganisation::setSession()
     * @uses DedicatedRipeUpdateOrganisation::setRipeId()
     * @uses DedicatedRipeUpdateOrganisation::setName()
     * @uses DedicatedRipeUpdateOrganisation::setAddress()
     * @uses DedicatedRipeUpdateOrganisation::setEmail()
     * @uses DedicatedRipeUpdateOrganisation::setAbuse()
     * @uses DedicatedRipeUpdateOrganisation::setDescr()
     * @uses DedicatedRipeUpdateOrganisation::setPhone()
     * @uses DedicatedRipeUpdateOrganisation::setFax()
     * @uses DedicatedRipeUpdateOrganisation::setRemarks()
     * @param string $session
     * @param string $ripeId
     * @param string $name
     * @param string $address
     * @param string $email
     * @param string $abuse
     * @param string $descr
     * @param string $phone
     * @param string $fax
     * @param string $remarks
     */
    public function __construct($session = null, $ripeId = null, $name = null, $address = null, $email = null, $abuse = null, $descr = null, $phone = null, $fax = null, $remarks = null)
    {
        $this
            ->setSession($session)
            ->setRipeId($ripeId)
            ->setName($name)
            ->setAddress($address)
            ->setEmail($email)
            ->setAbuse($abuse)
            ->setDescr($descr)
            ->setPhone($phone)
            ->setFax($fax)
            ->setRemarks($remarks);
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
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get ripeId value
     * @return string|null
     */
    public function getRipeId()
    {
        return $this->ripeId;
    }
    /**
     * Set ripeId value
     * @param string $ripeId
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setRipeId($ripeId = null)
    {
        // validation for constraint: string
        if (!is_null($ripeId) && !is_string($ripeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ripeId)), __LINE__);
        }
        $this->ripeId = $ripeId;
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
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
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
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
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
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
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
     * Get abuse value
     * @return string|null
     */
    public function getAbuse()
    {
        return $this->abuse;
    }
    /**
     * Set abuse value
     * @param string $abuse
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setAbuse($abuse = null)
    {
        // validation for constraint: string
        if (!is_null($abuse) && !is_string($abuse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($abuse)), __LINE__);
        }
        $this->abuse = $abuse;
        return $this;
    }
    /**
     * Get descr value
     * @return string|null
     */
    public function getDescr()
    {
        return $this->descr;
    }
    /**
     * Set descr value
     * @param string $descr
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setDescr($descr = null)
    {
        // validation for constraint: string
        if (!is_null($descr) && !is_string($descr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descr)), __LINE__);
        }
        $this->descr = $descr;
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        return $this;
    }
    /**
     * Get remarks value
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param string $remarks
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
     */
    public function setRemarks($remarks = null)
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarks)), __LINE__);
        }
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedRipeUpdateOrganisation
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
