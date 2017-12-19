<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\LogsAccessList $parameters
     * @return \PayPal\StructType\LogsAccessListResponse|bool
     */
    public function logsAccessList(\PayPal\StructType\LogsAccessList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->logsAccessList($parameters));
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
     * @param \PayPal\StructType\LogsAccessDel $parameters
     * @return \PayPal\StructType\LogsAccessDelResponse|bool
     */
    public function logsAccessDel(\PayPal\StructType\LogsAccessDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->logsAccessDel($parameters));
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
     * @param \PayPal\StructType\LogsAccessAdd $parameters
     * @return \PayPal\StructType\LogsAccessAddResponse|bool
     */
    public function logsAccessAdd(\PayPal\StructType\LogsAccessAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->logsAccessAdd($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\LogsAccessAddResponse|\PayPal\StructType\LogsAccessDelResponse|\PayPal\StructType\LogsAccessListResponse
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
