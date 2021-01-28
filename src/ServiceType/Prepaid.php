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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidDomainCreate', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidDomainTransfer', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidSetThreshold', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidGetSummary', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidDomainRenew', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidGetThreshold', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidGetHistory', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
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
            $this->setResult($this->getSoapClient()->__soapCall('prepaidGetBalance', array(
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
     * @return \Ovh\StructType\PrepaidDomainCreateResponse|\Ovh\StructType\PrepaidDomainRenewResponse|\Ovh\StructType\PrepaidDomainTransferResponse|\Ovh\StructType\PrepaidGetBalanceResponse|\Ovh\StructType\PrepaidGetHistoryResponse|\Ovh\StructType\PrepaidGetSummaryResponse|\Ovh\StructType\PrepaidGetThresholdResponse|\Ovh\StructType\PrepaidSetThresholdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
