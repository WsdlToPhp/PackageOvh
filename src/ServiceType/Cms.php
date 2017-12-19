<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Cms ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Cms extends SoapClientBase
{
    /**
     * Method to call the operation originally named cmsInstall
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CmsInstall $parameters
     * @return \PayPal\StructType\CmsInstallResponse|bool
     */
    public function cmsInstall(\PayPal\StructType\CmsInstall $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cmsInstall($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cmsAvailableList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CmsAvailableList $parameters
     * @return \PayPal\StructType\CmsAvailableListResponse|bool
     */
    public function cmsAvailableList(\PayPal\StructType\CmsAvailableList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cmsAvailableList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cmsRemove
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CmsRemove $parameters
     * @return \PayPal\StructType\CmsRemoveResponse|bool
     */
    public function cmsRemove(\PayPal\StructType\CmsRemove $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cmsRemove($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cmsList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CmsList $parameters
     * @return \PayPal\StructType\CmsListResponse|bool
     */
    public function cmsList(\PayPal\StructType\CmsList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cmsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cmsRenewAdminPassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\CmsRenewAdminPassword $parameters
     * @return \PayPal\StructType\CmsRenewAdminPasswordResponse|bool
     */
    public function cmsRenewAdminPassword(\PayPal\StructType\CmsRenewAdminPassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cmsRenewAdminPassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\CmsAvailableListResponse|\PayPal\StructType\CmsInstallResponse|\PayPal\StructType\CmsListResponse|\PayPal\StructType\CmsRemoveResponse|\PayPal\StructType\CmsRenewAdminPasswordResponse
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
