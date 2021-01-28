<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Logs ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Logs extends SoapClientBase
{
    /**
     * Method to call the operation originally named logsAccessList
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\LogsAccessList $parameters
     * @return \Ovh\StructType\LogsAccessListResponse|bool
     */
    public function logsAccessList(\Ovh\StructType\LogsAccessList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('logsAccessList', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named logsAccessDel
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\LogsAccessDel $parameters
     * @return \Ovh\StructType\LogsAccessDelResponse|bool
     */
    public function logsAccessDel(\Ovh\StructType\LogsAccessDel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('logsAccessDel', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named logsAccessAdd
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\LogsAccessAdd $parameters
     * @return \Ovh\StructType\LogsAccessAddResponse|bool
     */
    public function logsAccessAdd(\Ovh\StructType\LogsAccessAdd $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('logsAccessAdd', array(
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
     * @return \Ovh\StructType\LogsAccessAddResponse|\Ovh\StructType\LogsAccessDelResponse|\Ovh\StructType\LogsAccessListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
