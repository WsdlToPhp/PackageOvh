<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\NicModifyInfos $parameters
     * @return \PayPal\StructType\NicModifyInfosResponse|bool
     */
    public function nicModifyInfos(\PayPal\StructType\NicModifyInfos $parameters)
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
     * @param \PayPal\StructType\Nic $parameters
     * @return \PayPal\StructType\NicResponse|bool
     */
    public function nic(\PayPal\StructType\Nic $parameters)
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
     * @param \PayPal\StructType\NicTldEligibility $parameters
     * @return \PayPal\StructType\NicTldEligibilityResponse|bool
     */
    public function nicTldEligibility(\PayPal\StructType\NicTldEligibility $parameters)
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
     * @param \PayPal\StructType\NicModifyLanguage $parameters
     * @return \PayPal\StructType\NicModifyLanguageResponse|bool
     */
    public function nicModifyLanguage(\PayPal\StructType\NicModifyLanguage $parameters)
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
     * @param \PayPal\StructType\NicCreate $parameters
     * @return \PayPal\StructType\NicCreateResponse|bool
     */
    public function nicCreate(\PayPal\StructType\NicCreate $parameters)
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
     * @param \PayPal\StructType\NicInfo $parameters
     * @return \PayPal\StructType\NicInfoResponse|bool
     */
    public function nicInfo(\PayPal\StructType\NicInfo $parameters)
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
     * @param \PayPal\StructType\NicModifyInfosIT $parameters
     * @return \PayPal\StructType\NicModifyInfosITResponse|bool
     */
    public function nicModifyInfosIT(\PayPal\StructType\NicModifyInfosIT $parameters)
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
     * @param \PayPal\StructType\NicPublicInfo $parameters
     * @return \PayPal\StructType\NicPublicInfoResponse|bool
     */
    public function nicPublicInfo(\PayPal\StructType\NicPublicInfo $parameters)
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
     * @param \PayPal\StructType\NicCreateIT $parameters
     * @return \PayPal\StructType\NicCreateITResponse|bool
     */
    public function nicCreateIT(\PayPal\StructType\NicCreateIT $parameters)
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
     * @param \PayPal\StructType\NicModifyEmail $parameters
     * @return \PayPal\StructType\NicModifyEmailResponse|bool
     */
    public function nicModifyEmail(\PayPal\StructType\NicModifyEmail $parameters)
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
     * @param \PayPal\StructType\NicUpdateIT $parameters
     * @return \PayPal\StructType\NicUpdateITResponse|bool
     */
    public function nicUpdateIT(\PayPal\StructType\NicUpdateIT $parameters)
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
     * @param \PayPal\StructType\NicUpdate $parameters
     * @return \PayPal\StructType\NicUpdateResponse|bool
     */
    public function nicUpdate(\PayPal\StructType\NicUpdate $parameters)
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
     * @return \PayPal\StructType\NicCreateITResponse|\PayPal\StructType\NicCreateResponse|\PayPal\StructType\NicInfoResponse|\PayPal\StructType\NicModifyEmailResponse|\PayPal\StructType\NicModifyInfosITResponse|\PayPal\StructType\NicModifyInfosResponse|\PayPal\StructType\NicModifyLanguageResponse|\PayPal\StructType\NicPublicInfoResponse|\PayPal\StructType\NicResponse|\PayPal\StructType\NicTldEligibilityResponse|\PayPal\StructType\NicUpdateITResponse|\PayPal\StructType\NicUpdateResponse
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
