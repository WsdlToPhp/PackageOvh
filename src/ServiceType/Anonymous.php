<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Anonymous ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Anonymous extends SoapClientBase
{
    /**
     * Method to call the operation originally named anonymousFtpInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AnonymousFtpInfo $parameters
     * @return \PayPal\StructType\AnonymousFtpInfoResponse|bool
     */
    public function anonymousFtpInfo(\PayPal\StructType\AnonymousFtpInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->anonymousFtpInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named anonymousFtpActivate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AnonymousFtpActivate $parameters
     * @return \PayPal\StructType\AnonymousFtpActivateResponse|bool
     */
    public function anonymousFtpActivate(\PayPal\StructType\AnonymousFtpActivate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->anonymousFtpActivate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named anonymousFtpChangePassword
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AnonymousFtpChangePassword $parameters
     * @return \PayPal\StructType\AnonymousFtpChangePasswordResponse|bool
     */
    public function anonymousFtpChangePassword(\PayPal\StructType\AnonymousFtpChangePassword $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->anonymousFtpChangePassword($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\AnonymousFtpActivateResponse|\PayPal\StructType\AnonymousFtpChangePasswordResponse|\PayPal\StructType\AnonymousFtpInfoResponse
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
