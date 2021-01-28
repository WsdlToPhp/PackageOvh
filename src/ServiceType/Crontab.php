<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Crontab ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Crontab extends SoapClientBase
{
    /**
     * Method to call the operation originally named crontabDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\CrontabDel $parameters
     * @return \Ovh\StructType\CrontabDelResponse|bool
     */
    public function crontabDel(\Ovh\StructType\CrontabDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('crontabDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named crontabList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\CrontabList $parameters
     * @return \Ovh\StructType\CrontabListResponse|bool
     */
    public function crontabList(\Ovh\StructType\CrontabList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('crontabList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named crontabAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\CrontabAdd $parameters
     * @return \Ovh\StructType\CrontabAddResponse|bool
     */
    public function crontabAdd(\Ovh\StructType\CrontabAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('crontabAdd', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named crontabInfo
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\CrontabInfo $parameters
     * @return \Ovh\StructType\CrontabInfoResponse|bool
     */
    public function crontabInfo(\Ovh\StructType\CrontabInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('crontabInfo', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named crontabModify
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\CrontabModify $parameters
     * @return \Ovh\StructType\CrontabModifyResponse|bool
     */
    public function crontabModify(\Ovh\StructType\CrontabModify $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('crontabModify', array(
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
     * @return \Ovh\StructType\CrontabAddResponse|\Ovh\StructType\CrontabDelResponse|\Ovh\StructType\CrontabInfoResponse|\Ovh\StructType\CrontabListResponse|\Ovh\StructType\CrontabModifyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
