<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\CmsInstall $parameters
     * @return \Ovh\StructType\CmsInstallResponse|bool
     */
    public function cmsInstall(\Ovh\StructType\CmsInstall $parameters)
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
     * @param \Ovh\StructType\CmsAvailableList $parameters
     * @return \Ovh\StructType\CmsAvailableListResponse|bool
     */
    public function cmsAvailableList(\Ovh\StructType\CmsAvailableList $parameters)
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
     * @param \Ovh\StructType\CmsRemove $parameters
     * @return \Ovh\StructType\CmsRemoveResponse|bool
     */
    public function cmsRemove(\Ovh\StructType\CmsRemove $parameters)
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
     * @param \Ovh\StructType\CmsList $parameters
     * @return \Ovh\StructType\CmsListResponse|bool
     */
    public function cmsList(\Ovh\StructType\CmsList $parameters)
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
     * @param \Ovh\StructType\CmsRenewAdminPassword $parameters
     * @return \Ovh\StructType\CmsRenewAdminPasswordResponse|bool
     */
    public function cmsRenewAdminPassword(\Ovh\StructType\CmsRenewAdminPassword $parameters)
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
     * @return \Ovh\StructType\CmsAvailableListResponse|\Ovh\StructType\CmsInstallResponse|\Ovh\StructType\CmsListResponse|\Ovh\StructType\CmsRemoveResponse|\Ovh\StructType\CmsRenewAdminPasswordResponse
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
