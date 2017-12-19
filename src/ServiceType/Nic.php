<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Nic ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Nic extends SoapClientBase
{
    /**
     * Method to call the operation originally named nicModifyInfos
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicModifyInfos $parameters
     * @return \Ovh\StructType\NicModifyInfosResponse|bool
     */
    public function nicModifyInfos(\Ovh\StructType\NicModifyInfos $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicModifyInfos($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nic
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\Nic $parameters
     * @return \Ovh\StructType\NicResponse|bool
     */
    public function nic(\Ovh\StructType\Nic $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nic($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicTldEligibility
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicTldEligibility $parameters
     * @return \Ovh\StructType\NicTldEligibilityResponse|bool
     */
    public function nicTldEligibility(\Ovh\StructType\NicTldEligibility $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicTldEligibility($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicModifyLanguage
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicModifyLanguage $parameters
     * @return \Ovh\StructType\NicModifyLanguageResponse|bool
     */
    public function nicModifyLanguage(\Ovh\StructType\NicModifyLanguage $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicModifyLanguage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicCreate $parameters
     * @return \Ovh\StructType\NicCreateResponse|bool
     */
    public function nicCreate(\Ovh\StructType\NicCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicInfo $parameters
     * @return \Ovh\StructType\NicInfoResponse|bool
     */
    public function nicInfo(\Ovh\StructType\NicInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicModifyInfosIT
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicModifyInfosIT $parameters
     * @return \Ovh\StructType\NicModifyInfosITResponse|bool
     */
    public function nicModifyInfosIT(\Ovh\StructType\NicModifyInfosIT $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicModifyInfosIT($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicPublicInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicPublicInfo $parameters
     * @return \Ovh\StructType\NicPublicInfoResponse|bool
     */
    public function nicPublicInfo(\Ovh\StructType\NicPublicInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicPublicInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicCreateIT
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicCreateIT $parameters
     * @return \Ovh\StructType\NicCreateITResponse|bool
     */
    public function nicCreateIT(\Ovh\StructType\NicCreateIT $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicCreateIT($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicModifyEmail
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicModifyEmail $parameters
     * @return \Ovh\StructType\NicModifyEmailResponse|bool
     */
    public function nicModifyEmail(\Ovh\StructType\NicModifyEmail $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicModifyEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicUpdateIT
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicUpdateIT $parameters
     * @return \Ovh\StructType\NicUpdateITResponse|bool
     */
    public function nicUpdateIT(\Ovh\StructType\NicUpdateIT $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicUpdateIT($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named nicUpdate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\NicUpdate $parameters
     * @return \Ovh\StructType\NicUpdateResponse|bool
     */
    public function nicUpdate(\Ovh\StructType\NicUpdate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->nicUpdate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\NicCreateITResponse|\Ovh\StructType\NicCreateResponse|\Ovh\StructType\NicInfoResponse|\Ovh\StructType\NicModifyEmailResponse|\Ovh\StructType\NicModifyInfosITResponse|\Ovh\StructType\NicModifyInfosResponse|\Ovh\StructType\NicModifyLanguageResponse|\Ovh\StructType\NicPublicInfoResponse|\Ovh\StructType\NicResponse|\Ovh\StructType\NicTldEligibilityResponse|\Ovh\StructType\NicUpdateITResponse|\Ovh\StructType\NicUpdateResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
