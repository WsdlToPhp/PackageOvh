<?php

namespace PayPal\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Account ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Account extends SoapClientBase
{
    /**
     * Method to call the operation originally named accountSummary
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AccountSummary $parameters
     * @return \PayPal\StructType\AccountSummaryResponse|bool
     */
    public function accountSummary(\PayPal\StructType\AccountSummary $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->accountSummary($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named accountHistory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AccountHistory $parameters
     * @return \PayPal\StructType\AccountHistoryResponse|bool
     */
    public function accountHistory(\PayPal\StructType\AccountHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->accountHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named accountAlertThresholdSet
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \PayPal\StructType\AccountAlertThresholdSet $parameters
     * @return \PayPal\StructType\AccountAlertThresholdSetResponse|bool
     */
    public function accountAlertThresholdSet(\PayPal\StructType\AccountAlertThresholdSet $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->accountAlertThresholdSet($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \PayPal\StructType\AccountAlertThresholdSetResponse|\PayPal\StructType\AccountHistoryResponse|\PayPal\StructType\AccountSummaryResponse
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
