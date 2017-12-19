<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Ftp ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Ftp extends SoapClientBase
{
    /**
     * Method to call the operation originally named ftpInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\FtpInfo $parameters
     * @return \PayPal\StructType\FtpInfoResponse|bool
     */
    public function ftpInfo(\PayPal\StructType\FtpInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ftpInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ftpChangePassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\FtpChangePassword $parameters
     * @return \PayPal\StructType\FtpChangePasswordResponse|bool
     */
    public function ftpChangePassword(\PayPal\StructType\FtpChangePassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ftpChangePassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\FtpChangePasswordResponse|\PayPal\StructType\FtpInfoResponse
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
