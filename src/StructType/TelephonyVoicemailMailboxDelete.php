<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMailboxDelete StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMailboxDelete extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ids;
    /**
     * The folder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $folder;
    /**
     * Constructor method for telephonyVoicemailMailboxDelete
     * @uses TelephonyVoicemailMailboxDelete::setSession()
     * @uses TelephonyVoicemailMailboxDelete::setNumber()
     * @uses TelephonyVoicemailMailboxDelete::setCountry()
     * @uses TelephonyVoicemailMailboxDelete::setIds()
     * @uses TelephonyVoicemailMailboxDelete::setFolder()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $ids
     * @param string $folder
     */
    public function __construct($session = null, $number = null, $country = null, $ids = null, $folder = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setIds($ids)
            ->setFolder($folder);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDelete
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
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDelete
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDelete
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get ids value
     * @return string|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @param string $ids
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDelete
     */
    public function setIds($ids = null)
    {
        // validation for constraint: string
        if (!is_null($ids) && !is_string($ids)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ids, true), gettype($ids)), __LINE__);
        }
        $this->ids = $ids;
        return $this;
    }
    /**
     * Get folder value
     * @return string|null
     */
    public function getFolder()
    {
        return $this->folder;
    }
    /**
     * Set folder value
     * @param string $folder
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDelete
     */
    public function setFolder($folder = null)
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folder, true), gettype($folder)), __LINE__);
        }
        $this->folder = $folder;
        return $this;
    }
}
