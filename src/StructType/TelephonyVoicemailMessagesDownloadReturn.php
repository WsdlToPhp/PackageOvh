<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMessagesDownloadReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMessagesDownloadReturn extends AbstractStructBase
{
    /**
     * The fileName
     * @var string
     */
    public $fileName;
    /**
     * The fileData
     * @var string
     */
    public $fileData;
    /**
     * The md5sum
     * @var string
     */
    public $md5sum;
    /**
     * Constructor method for telephonyVoicemailMessagesDownloadReturn
     * @uses TelephonyVoicemailMessagesDownloadReturn::setFileName()
     * @uses TelephonyVoicemailMessagesDownloadReturn::setFileData()
     * @uses TelephonyVoicemailMessagesDownloadReturn::setMd5sum()
     * @param string $fileName
     * @param string $fileData
     * @param string $md5sum
     */
    public function __construct($fileName = null, $fileData = null, $md5sum = null)
    {
        $this
            ->setFileName($fileName)
            ->setFileData($fileData)
            ->setMd5sum($md5sum);
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * Get fileData value
     * @return string|null
     */
    public function getFileData()
    {
        return $this->fileData;
    }
    /**
     * Set fileData value
     * @param string $fileData
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn
     */
    public function setFileData($fileData = null)
    {
        // validation for constraint: string
        if (!is_null($fileData) && !is_string($fileData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileData, true), gettype($fileData)), __LINE__);
        }
        $this->fileData = $fileData;
        return $this;
    }
    /**
     * Get md5sum value
     * @return string|null
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }
    /**
     * Set md5sum value
     * @param string $md5sum
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn
     */
    public function setMd5sum($md5sum = null)
    {
        // validation for constraint: string
        if (!is_null($md5sum) && !is_string($md5sum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($md5sum, true), gettype($md5sum)), __LINE__);
        }
        $this->md5sum = $md5sum;
        return $this;
    }
}
