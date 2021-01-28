<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\MultiFtpChangeDirectory $parameters
     * @return \Ovh\StructType\MultiFtpChangeDirectoryResponse|bool
     */
    public function multiFtpChangeDirectory(\Ovh\StructType\MultiFtpChangeDirectory $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiFtpChangeDirectory', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiFtpChangePassword $parameters
     * @return \Ovh\StructType\MultiFtpChangePasswordResponse|bool
     */
    public function multiFtpChangePassword(\Ovh\StructType\MultiFtpChangePassword $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiFtpChangePassword', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiFtpList $parameters
     * @return \Ovh\StructType\MultiFtpListResponse|bool
     */
    public function multiFtpList(\Ovh\StructType\MultiFtpList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiFtpList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiFtpAdd $parameters
     * @return \Ovh\StructType\MultiFtpAddResponse|bool
     */
    public function multiFtpAdd(\Ovh\StructType\MultiFtpAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiFtpAdd', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiDomainList $parameters
     * @return \Ovh\StructType\MultiDomainListResponse|bool
     */
    public function multiDomainList(\Ovh\StructType\MultiDomainList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiDomainList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiFtpDel $parameters
     * @return \Ovh\StructType\MultiFtpDelResponse|bool
     */
    public function multiFtpDel(\Ovh\StructType\MultiFtpDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiFtpDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiDomainAdd $parameters
     * @return \Ovh\StructType\MultiDomainAddResponse|bool
     */
    public function multiDomainAdd(\Ovh\StructType\MultiDomainAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiDomainAdd', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiDomainModify $parameters
     * @return \Ovh\StructType\MultiDomainModifyResponse|bool
     */
    public function multiDomainModify(\Ovh\StructType\MultiDomainModify $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiDomainModify', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiDomainInfo $parameters
     * @return \Ovh\StructType\MultiDomainInfoResponse|bool
     */
    public function multiDomainInfo(\Ovh\StructType\MultiDomainInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiDomainInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
     * @param \Ovh\StructType\MultiDomainDel $parameters
     * @return \Ovh\StructType\MultiDomainDelResponse|bool
     */
    public function multiDomainDel(\Ovh\StructType\MultiDomainDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('multiDomainDel', array(
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
     * @return \Ovh\StructType\MultiDomainAddResponse|\Ovh\StructType\MultiDomainDelResponse|\Ovh\StructType\MultiDomainInfoResponse|\Ovh\StructType\MultiDomainListResponse|\Ovh\StructType\MultiDomainModifyResponse|\Ovh\StructType\MultiFtpAddResponse|\Ovh\StructType\MultiFtpChangeDirectoryResponse|\Ovh\StructType\MultiFtpChangePasswordResponse|\Ovh\StructType\MultiFtpDelResponse|\Ovh\StructType\MultiFtpListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
