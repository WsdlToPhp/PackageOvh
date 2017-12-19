<?php

namespace PayPal\ServiceType;

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
     * @param \PayPal\StructType\PrepaidDomainCreate $parameters
     * @return \PayPal\StructType\PrepaidDomainCreateResponse|bool
     */
    public function prepaidDomainCreate(\PayPal\StructType\PrepaidDomainCreate $parameters)
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
     * @param \PayPal\StructType\PrepaidDomainTransfer $parameters
     * @return \PayPal\StructType\PrepaidDomainTransferResponse|bool
     */
    public function prepaidDomainTransfer(\PayPal\StructType\PrepaidDomainTransfer $parameters)
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
     * @param \PayPal\StructType\PrepaidSetThreshold $parameters
     * @return \PayPal\StructType\PrepaidSetThresholdResponse|bool
     */
    public function prepaidSetThreshold(\PayPal\StructType\PrepaidSetThreshold $parameters)
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
     * @param \PayPal\StructType\PrepaidGetSummary $parameters
     * @return \PayPal\StructType\PrepaidGetSummaryResponse|bool
     */
    public function prepaidGetSummary(\PayPal\StructType\PrepaidGetSummary $parameters)
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
     * @param \PayPal\StructType\PrepaidDomainRenew $parameters
     * @return \PayPal\StructType\PrepaidDomainRenewResponse|bool
     */
    public function prepaidDomainRenew(\PayPal\StructType\PrepaidDomainRenew $parameters)
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
     * @param \PayPal\StructType\PrepaidGetThreshold $parameters
     * @return \PayPal\StructType\PrepaidGetThresholdResponse|bool
     */
    public function prepaidGetThreshold(\PayPal\StructType\PrepaidGetThreshold $parameters)
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
     * @param \PayPal\StructType\PrepaidGetHistory $parameters
     * @return \PayPal\StructType\PrepaidGetHistoryResponse|bool
     */
    public function prepaidGetHistory(\PayPal\StructType\PrepaidGetHistory $parameters)
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
     * @param \PayPal\StructType\PrepaidGetBalance $parameters
     * @return \PayPal\StructType\PrepaidGetBalanceResponse|bool
     */
    public function prepaidGetBalance(\PayPal\StructType\PrepaidGetBalance $parameters)
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
     * @return \PayPal\StructType\PrepaidDomainCreateResponse|\PayPal\StructType\PrepaidDomainRenewResponse|\PayPal\StructType\PrepaidDomainTransferResponse|\PayPal\StructType\PrepaidGetBalanceResponse|\PayPal\StructType\PrepaidGetHistoryResponse|\PayPal\StructType\PrepaidGetSummaryResponse|\PayPal\StructType\PrepaidGetThresholdResponse|\PayPal\StructType\PrepaidSetThresholdResponse
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
