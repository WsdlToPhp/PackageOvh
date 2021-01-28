<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsAddCsvAttachment StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsAddCsvAttachment extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The csvUrl
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $csvUrl;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for telephonySmsAddCsvAttachment
     * @uses TelephonySmsAddCsvAttachment::setSession()
     * @uses TelephonySmsAddCsvAttachment::setSmsAccount()
     * @uses TelephonySmsAddCsvAttachment::setCsvUrl()
     * @uses TelephonySmsAddCsvAttachment::setId()
     * @uses TelephonySmsAddCsvAttachment::setName()
     * @param string $session
     * @param string $smsAccount
     * @param string $csvUrl
     * @param string $id
     * @param string $name
     */
    public function __construct($session = null, $smsAccount = null, $csvUrl = null, $id = null, $name = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setCsvUrl($csvUrl)
            ->setId($id)
            ->setName($name);
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
     * @return \Ovh\StructType\TelephonySmsAddCsvAttachment
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
     * Get smsAccount value
     * @return string|null
     */
    public function getSmsAccount()
    {
        return $this->smsAccount;
    }
    /**
     * Set smsAccount value
     * @param string $smsAccount
     * @return \Ovh\StructType\TelephonySmsAddCsvAttachment
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsAccount, true), gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
    /**
     * Get csvUrl value
     * @return string|null
     */
    public function getCsvUrl()
    {
        return $this->csvUrl;
    }
    /**
     * Set csvUrl value
     * @param string $csvUrl
     * @return \Ovh\StructType\TelephonySmsAddCsvAttachment
     */
    public function setCsvUrl($csvUrl = null)
    {
        // validation for constraint: string
        if (!is_null($csvUrl) && !is_string($csvUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csvUrl, true), gettype($csvUrl)), __LINE__);
        }
        $this->csvUrl = $csvUrl;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Ovh\StructType\TelephonySmsAddCsvAttachment
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \Ovh\StructType\TelephonySmsAddCsvAttachment
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
}
