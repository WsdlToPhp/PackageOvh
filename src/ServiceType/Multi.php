<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Multi ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Multi extends SoapClientBase
{
    /**
     * Method to call the operation originally named multiFtpChangeDirectory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiFtpChangeDirectory $parameters
     * @return \PayPal\StructType\MultiFtpChangeDirectoryResponse|bool
     */
    public function multiFtpChangeDirectory(\PayPal\StructType\MultiFtpChangeDirectory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiFtpChangeDirectory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiFtpChangePassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiFtpChangePassword $parameters
     * @return \PayPal\StructType\MultiFtpChangePasswordResponse|bool
     */
    public function multiFtpChangePassword(\PayPal\StructType\MultiFtpChangePassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiFtpChangePassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiFtpList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiFtpList $parameters
     * @return \PayPal\StructType\MultiFtpListResponse|bool
     */
    public function multiFtpList(\PayPal\StructType\MultiFtpList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiFtpList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiFtpAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiFtpAdd $parameters
     * @return \PayPal\StructType\MultiFtpAddResponse|bool
     */
    public function multiFtpAdd(\PayPal\StructType\MultiFtpAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiFtpAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiDomainList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiDomainList $parameters
     * @return \PayPal\StructType\MultiDomainListResponse|bool
     */
    public function multiDomainList(\PayPal\StructType\MultiDomainList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiDomainList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiFtpDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiFtpDel $parameters
     * @return \PayPal\StructType\MultiFtpDelResponse|bool
     */
    public function multiFtpDel(\PayPal\StructType\MultiFtpDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiFtpDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiDomainAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiDomainAdd $parameters
     * @return \PayPal\StructType\MultiDomainAddResponse|bool
     */
    public function multiDomainAdd(\PayPal\StructType\MultiDomainAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiDomainAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiDomainModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiDomainModify $parameters
     * @return \PayPal\StructType\MultiDomainModifyResponse|bool
     */
    public function multiDomainModify(\PayPal\StructType\MultiDomainModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiDomainModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiDomainInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiDomainInfo $parameters
     * @return \PayPal\StructType\MultiDomainInfoResponse|bool
     */
    public function multiDomainInfo(\PayPal\StructType\MultiDomainInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiDomainInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named multiDomainDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\MultiDomainDel $parameters
     * @return \PayPal\StructType\MultiDomainDelResponse|bool
     */
    public function multiDomainDel(\PayPal\StructType\MultiDomainDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->multiDomainDel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\MultiDomainAddResponse|\PayPal\StructType\MultiDomainDelResponse|\PayPal\StructType\MultiDomainInfoResponse|\PayPal\StructType\MultiDomainListResponse|\PayPal\StructType\MultiDomainModifyResponse|\PayPal\StructType\MultiFtpAddResponse|\PayPal\StructType\MultiFtpChangeDirectoryResponse|\PayPal\StructType\MultiFtpChangePasswordResponse|\PayPal\StructType\MultiFtpDelResponse|\PayPal\StructType\MultiFtpListResponse
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
