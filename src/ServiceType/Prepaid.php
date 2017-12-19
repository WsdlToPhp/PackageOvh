<?php

namespace Ovh\ServiceType;

use \SoapClient\SoapClientBase;

/**
 * This class stands for Prepaid ServiceType
 * @subpackage Services
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class Prepaid extends SoapClientBase
{
    /**
     * Method to call the operation originally named prepaidDomainCreate
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidDomainCreate $parameters
     * @return \Ovh\StructType\PrepaidDomainCreateResponse|bool
     */
    public function prepaidDomainCreate(\Ovh\StructType\PrepaidDomainCreate $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidDomainCreate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidDomainTransfer
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidDomainTransfer $parameters
     * @return \Ovh\StructType\PrepaidDomainTransferResponse|bool
     */
    public function prepaidDomainTransfer(\Ovh\StructType\PrepaidDomainTransfer $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidDomainTransfer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidSetThreshold
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidSetThreshold $parameters
     * @return \Ovh\StructType\PrepaidSetThresholdResponse|bool
     */
    public function prepaidSetThreshold(\Ovh\StructType\PrepaidSetThreshold $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidSetThreshold($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidGetSummary
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidGetSummary $parameters
     * @return \Ovh\StructType\PrepaidGetSummaryResponse|bool
     */
    public function prepaidGetSummary(\Ovh\StructType\PrepaidGetSummary $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidGetSummary($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidDomainRenew
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidDomainRenew $parameters
     * @return \Ovh\StructType\PrepaidDomainRenewResponse|bool
     */
    public function prepaidDomainRenew(\Ovh\StructType\PrepaidDomainRenew $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidDomainRenew($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidGetThreshold
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidGetThreshold $parameters
     * @return \Ovh\StructType\PrepaidGetThresholdResponse|bool
     */
    public function prepaidGetThreshold(\Ovh\StructType\PrepaidGetThreshold $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidGetThreshold($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidGetHistory
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidGetHistory $parameters
     * @return \Ovh\StructType\PrepaidGetHistoryResponse|bool
     */
    public function prepaidGetHistory(\Ovh\StructType\PrepaidGetHistory $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidGetHistory($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepaidGetBalance
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Ovh\StructType\PrepaidGetBalance $parameters
     * @return \Ovh\StructType\PrepaidGetBalanceResponse|bool
     */
    public function prepaidGetBalance(\Ovh\StructType\PrepaidGetBalance $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->prepaidGetBalance($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Ovh\StructType\PrepaidDomainCreateResponse|\Ovh\StructType\PrepaidDomainRenewResponse|\Ovh\StructType\PrepaidDomainTransferResponse|\Ovh\StructType\PrepaidGetBalanceResponse|\Ovh\StructType\PrepaidGetHistoryResponse|\Ovh\StructType\PrepaidGetSummaryResponse|\Ovh\StructType\PrepaidGetThresholdResponse|\Ovh\StructType\PrepaidSetThresholdResponse
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
