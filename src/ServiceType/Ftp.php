<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\FtpInfo $parameters
     * @return \Ovh\StructType\FtpInfoResponse|bool
     */
    public function ftpInfo(\Ovh\StructType\FtpInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ftpInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\FtpChangePassword $parameters
     * @return \Ovh\StructType\FtpChangePasswordResponse|bool
     */
    public function ftpChangePassword(\Ovh\StructType\FtpChangePassword $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ftpChangePassword', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\FtpChangePasswordResponse|\Ovh\StructType\FtpInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
