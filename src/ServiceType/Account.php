<?php

namespace Ovh\ServiceType;

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
     * @param \Ovh\StructType\AccountSummary $parameters
     * @return \Ovh\StructType\AccountSummaryResponse|bool
     */
    public function accountSummary(\Ovh\StructType\AccountSummary $parameters)
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
     * @param \Ovh\StructType\AccountHistory $parameters
     * @return \Ovh\StructType\AccountHistoryResponse|bool
     */
    public function accountHistory(\Ovh\StructType\AccountHistory $parameters)
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
     * @param \Ovh\StructType\AccountAlertThresholdSet $parameters
     * @return \Ovh\StructType\AccountAlertThresholdSetResponse|bool
     */
    public function accountAlertThresholdSet(\Ovh\StructType\AccountAlertThresholdSet $parameters)
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
     * @return \Ovh\StructType\AccountAlertThresholdSetResponse|\Ovh\StructType\AccountHistoryResponse|\Ovh\StructType\AccountSummaryResponse
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
