<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeCreateOrganisation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeCreateOrganisation extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The abuse
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $abuse;
    /**
     * The descr
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $descr;
    /**
     * The phone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $phone;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fax;
    /**
     * The remarks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remarks;
    /**
     * Constructor method for dedicatedRipeCreateOrganisation
     * @uses DedicatedRipeCreateOrganisation::setSession()
     * @uses DedicatedRipeCreateOrganisation::setName()
     * @uses DedicatedRipeCreateOrganisation::setAddress()
     * @uses DedicatedRipeCreateOrganisation::setEmail()
     * @uses DedicatedRipeCreateOrganisation::setAbuse()
     * @uses DedicatedRipeCreateOrganisation::setDescr()
     * @uses DedicatedRipeCreateOrganisation::setPhone()
     * @uses DedicatedRipeCreateOrganisation::setFax()
     * @uses DedicatedRipeCreateOrganisation::setRemarks()
     * @param string $session
     * @param string $name
     * @param string $address
     * @param string $email
     * @param string $abuse
     * @param string $descr
     * @param string $phone
     * @param string $fax
     * @param string $remarks
     */
    public function __construct($session = null, $name = null, $address = null, $email = null, $abuse = null, $descr = null, $phone = null, $fax = null, $remarks = null)
    {
        $this
            ->setSession($session)
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setAbuse($abuse = null)
    {
        // validation for constraint: string
        if (!is_null($abuse) && !is_string($abuse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abuse, true), gettype($abuse)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setDescr($descr = null)
    {
        // validation for constraint: string
        if (!is_null($descr) && !is_string($descr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descr, true), gettype($descr)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedRipeCreateOrganisation
     */
    public function setRemarks($remarks = null)
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarks, true), gettype($remarks)), __LINE__);
        }
        $this->remarks = $remarks;
        return $this;
    }
}
