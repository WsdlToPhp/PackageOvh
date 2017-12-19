<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Database ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Database extends SoapClientBase
{
    /**
     * Method to call the operation originally named databaseChangePassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DatabaseChangePassword $parameters
     * @return \Ovh\StructType\DatabaseChangePasswordResponse|bool
     */
    public function databaseChangePassword(\Ovh\StructType\DatabaseChangePassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->databaseChangePassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named databaseDump
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DatabaseDump $parameters
     * @return \Ovh\StructType\DatabaseDumpResponse|bool
     */
    public function databaseDump(\Ovh\StructType\DatabaseDump $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->databaseDump($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named databaseCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DatabaseCreate $parameters
     * @return \Ovh\StructType\DatabaseCreateResponse|bool
     */
    public function databaseCreate(\Ovh\StructType\DatabaseCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->databaseCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named databaseList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DatabaseList $parameters
     * @return \Ovh\StructType\DatabaseListResponse|bool
     */
    public function databaseList(\Ovh\StructType\DatabaseList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->databaseList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named databaseDelete
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DatabaseDelete $parameters
     * @return \Ovh\StructType\DatabaseDeleteResponse|bool
     */
    public function databaseDelete(\Ovh\StructType\DatabaseDelete $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->databaseDelete($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named databaseRecreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\DatabaseRecreate $parameters
     * @return \Ovh\StructType\DatabaseRecreateResponse|bool
     */
    public function databaseRecreate(\Ovh\StructType\DatabaseRecreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->databaseRecreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\DatabaseChangePasswordResponse|\Ovh\StructType\DatabaseCreateResponse|\Ovh\StructType\DatabaseDeleteResponse|\Ovh\StructType\DatabaseDumpResponse|\Ovh\StructType\DatabaseListResponse|\Ovh\StructType\DatabaseRecreateResponse
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
