<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\CrontabDel $parameters
     * @return \PayPal\StructType\CrontabDelResponse|bool
     */
    public function crontabDel(\PayPal\StructType\CrontabDel $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->crontabDel($parameters));
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
     * @param \PayPal\StructType\CrontabList $parameters
     * @return \PayPal\StructType\CrontabListResponse|bool
     */
    public function crontabList(\PayPal\StructType\CrontabList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->crontabList($parameters));
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
     * @param \PayPal\StructType\CrontabAdd $parameters
     * @return \PayPal\StructType\CrontabAddResponse|bool
     */
    public function crontabAdd(\PayPal\StructType\CrontabAdd $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->crontabAdd($parameters));
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
     * @param \PayPal\StructType\CrontabInfo $parameters
     * @return \PayPal\StructType\CrontabInfoResponse|bool
     */
    public function crontabInfo(\PayPal\StructType\CrontabInfo $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->crontabInfo($parameters));
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
     * @param \PayPal\StructType\CrontabModify $parameters
     * @return \PayPal\StructType\CrontabModifyResponse|bool
     */
    public function crontabModify(\PayPal\StructType\CrontabModify $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->crontabModify($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\CrontabAddResponse|\PayPal\StructType\CrontabDelResponse|\PayPal\StructType\CrontabInfoResponse|\PayPal\StructType\CrontabListResponse|\PayPal\StructType\CrontabModifyResponse
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
