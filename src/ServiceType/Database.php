<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\DatabaseChangePassword $parameters
     * @return \PayPal\StructType\DatabaseChangePasswordResponse|bool
     */
    public function databaseChangePassword(\PayPal\StructType\DatabaseChangePassword $parameters)
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
     * @param \PayPal\StructType\DatabaseDump $parameters
     * @return \PayPal\StructType\DatabaseDumpResponse|bool
     */
    public function databaseDump(\PayPal\StructType\DatabaseDump $parameters)
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
     * @param \PayPal\StructType\DatabaseCreate $parameters
     * @return \PayPal\StructType\DatabaseCreateResponse|bool
     */
    public function databaseCreate(\PayPal\StructType\DatabaseCreate $parameters)
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
     * @param \PayPal\StructType\DatabaseList $parameters
     * @return \PayPal\StructType\DatabaseListResponse|bool
     */
    public function databaseList(\PayPal\StructType\DatabaseList $parameters)
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
     * @param \PayPal\StructType\DatabaseDelete $parameters
     * @return \PayPal\StructType\DatabaseDeleteResponse|bool
     */
    public function databaseDelete(\PayPal\StructType\DatabaseDelete $parameters)
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
     * @param \PayPal\StructType\DatabaseRecreate $parameters
     * @return \PayPal\StructType\DatabaseRecreateResponse|bool
     */
    public function databaseRecreate(\PayPal\StructType\DatabaseRecreate $parameters)
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
     * @return \PayPal\StructType\DatabaseChangePasswordResponse|\PayPal\StructType\DatabaseCreateResponse|\PayPal\StructType\DatabaseDeleteResponse|\PayPal\StructType\DatabaseDumpResponse|\PayPal\StructType\DatabaseListResponse|\PayPal\StructType\DatabaseRecreateResponse
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
