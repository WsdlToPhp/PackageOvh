<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainWhoisObfuscatorStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainWhoisObfuscatorStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The email
     * @var bool
     */
    public $email;
    /**
     * The address
     * @var bool
     */
    public $address;
    /**
     * The phone
     * @var bool
     */
    public $phone;
    /**
     * Constructor method for domainWhoisObfuscatorStruct
     * @uses DomainWhoisObfuscatorStruct::setDomain()
     * @uses DomainWhoisObfuscatorStruct::setEmail()
     * @uses DomainWhoisObfuscatorStruct::setAddress()
     * @uses DomainWhoisObfuscatorStruct::setPhone()
     * @param string $domain
     * @param bool $email
     * @param bool $address
     * @param bool $phone
     */
    public function __construct($domain = null, $email = null, $address = null, $phone = null)
    {
        $this
            ->setDomain($domain)
            ->setEmail($email)
            ->setAddress($address)
            ->setPhone($phone);
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
     * @return \Ovh\StructType\DomainWhoisObfuscatorStruct
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
     * Get email value
     * @return bool|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param bool $email
     * @return \Ovh\StructType\DomainWhoisObfuscatorStruct
     */
    public function setEmail($email = null)
    {
        // validation for constraint: boolean
        if (!is_null($email) && !is_bool($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get address value
     * @return bool|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param bool $address
     * @return \Ovh\StructType\DomainWhoisObfuscatorStruct
     */
    public function setAddress($address = null)
    {
        // validation for constraint: boolean
        if (!is_null($address) && !is_bool($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get phone value
     * @return bool|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param bool $phone
     * @return \Ovh\StructType\DomainWhoisObfuscatorStruct
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: boolean
        if (!is_null($phone) && !is_bool($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
}
