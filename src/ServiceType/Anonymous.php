<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\AnonymousFtpInfo $parameters
     * @return \Ovh\StructType\AnonymousFtpInfoResponse|bool
     */
    public function anonymousFtpInfo(\Ovh\StructType\AnonymousFtpInfo $parameters)
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
     * @param \Ovh\StructType\AnonymousFtpActivate $parameters
     * @return \Ovh\StructType\AnonymousFtpActivateResponse|bool
     */
    public function anonymousFtpActivate(\Ovh\StructType\AnonymousFtpActivate $parameters)
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
     * @param \Ovh\StructType\AnonymousFtpChangePassword $parameters
     * @return \Ovh\StructType\AnonymousFtpChangePasswordResponse|bool
     */
    public function anonymousFtpChangePassword(\Ovh\StructType\AnonymousFtpChangePassword $parameters)
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
     * @return \Ovh\StructType\AnonymousFtpActivateResponse|\Ovh\StructType\AnonymousFtpChangePasswordResponse|\Ovh\StructType\AnonymousFtpInfoResponse
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
